<?php

// Check if user is a teacher
$isTeacher = false; // Set to false by default
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password === getenv('TEACHER_PASSWORD')) {
        setcookie('isTeacher', 'true', time() + (86400 * 30), "/"); // Set cookie for 30 days with path set to root directory
        $isTeacher = true;
    }
} elseif (isset($_COOKIE['isTeacher'])) {
    $isTeacher = true;
}

// Handle logout
if (isset($_POST['logout'])) {
    setcookie('isTeacher', 'false', time() - 360000, "/"); // Set cookie to expire in the past with path set to root directory
    header("Refresh:0"); // Refresh the page
}

// Handle zip file upload
if (isset($_POST['upload'])) {
    $targetDir = "../studentske-prace/";
    $folderName = $_POST['folderName'];
    $targetDir .= $folderName . "/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $zipFile = $_FILES['zipFile'];
    $description = $_POST['description'];
    $imageFiles = $_FILES['imageFiles'];

    // Check if file is a ZIP file
    $fileType = strtolower(pathinfo($zipFile['name'], PATHINFO_EXTENSION));
    if ($fileType !== 'zip') {
        echo "Only ZIP files are allowed.";
        exit;
    }

    // Check if file contains executable code
    $zip = new ZipArchive;
    if ($zip->open($zipFile['tmp_name']) === TRUE) {
        for ($i = 0; $i < $zip->numFiles; $i++) {
            $filename = $zip->getNameIndex($i);
            $fileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            if (in_array($fileType, ['php', 'exe', 'sh', 'py'])) {
                echo "Súbory typu: php, exe, sh, py sú zakázané.";
                rmdir($targetDir);
                exit;
            }
        }
        $zip->extractTo($targetDir);
        $zip->close();
    } else {
        echo "Failed to extract ZIP file.";
    }

    // Save description and images
    $zadanieDir = $targetDir . "zadanie/";
    if (!file_exists($zadanieDir)) {
        mkdir($zadanieDir, 0777, true);
    }
    $zadanieJson = array(
        "name" => $folderName,
        "description" => $description,
        "visible" => isset($_POST['visible']) ? true : false
    );
    file_put_contents($zadanieDir . "zadanie.json", json_encode($zadanieJson));
    $imagesDir = $zadanieDir . "images/";
    if (!file_exists($imagesDir)) {
        mkdir($imagesDir, 0777, true);
    }
    foreach ($imageFiles['tmp_name'] as $key => $tmp_name) {
        $imageFile = $imageFiles['name'][$key];
        $fileType = strtolower(pathinfo($imageFile, PATHINFO_EXTENSION));
        if (in_array($fileType, ['php', 'exe', 'sh', 'py'])) {
            echo "Súbory typu: php, exe, sh, py sú zakázané.";
            rmdir($zadanieDir);
            rmdir($targetDir);
            exit;
        }
        move_uploaded_file($tmp_name, $imagesDir . $imageFile);
    }
}

// Handle file deletion
if (isset($_POST['delete'])) {
    $targetDir = "../studentske-prace/";
    $folderName = $_POST['folderName'];
    $targetDir .= $folderName . "/";

    if (file_exists($targetDir)) {
        // Recursively delete the contents of the directory
        function deleteDirectory($dir)
        {
            foreach (scandir($dir) as $file) {
                if ($file != '.' && $file != '..') {
                    $path = $dir . '/' . $file;
                    if (is_dir($path)) {
                        deleteDirectory($path);
                    } else {
                        unlink($path);
                    }
                }
            }
            rmdir($dir);
        }

        try {
            deleteDirectory($targetDir);
        } catch (Exception $e) {
            // Handle errors, e.g., log the error, display an error message, etc.
            echo "Error deleting folder: " . $e->getMessage();
        }
    } else {
        // Handle the case where the folder does not exist.
        echo "Folder does not exist.";
    }
}

// Get list of folders in studentske-prace directory
$folders = array_filter(glob('../studentske-prace/*'), 'is_dir');

?>

<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Učiteľské Zadania</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap-5.3.2.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <meta name="robots" content="noindex, nofollow">
</head>

<body>

    <?php include '../includes/header.php'; ?>

    <div class="container mt-4">
        <h1><i class="fa-solid fa-screwdriver-wrench"></i> Stránka sa momentálne upravuje</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="page-header card-text">
                    <h1>Učiteľské Zadania</h1>
                    <p><strong>Vyučujúci</strong> je schopný <strong>nahrávať</strong> na webový server vlastné zadania,
                        pridať do nich obrázky, nastaviť viditeľnosť výsledku a napísať vlastné zadanie.</p>
                </div>
                <?php if ($isTeacher) { ?>
                    <div class="d-flex justify-content-between">
                        <form method="post" onsubmit="return confirm('Odhlásiť?')">
                            <button type="submit" class="btn btn-primary danger" name="logout"><i
                                    class="fa-solid fa-door-open"></i> Odhlásiť sa</button>
                        </form>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <?php if (!$isTeacher) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post">
                                <div class="mb-3">
                                    <label for="password" class="form-label">
                                        <h2><strong>Učiteľské Heslo</strong></h2>
                                    </label>
                                    <input type="password" class="form-control formular" id="password" name="password"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i>
                                    Prihlásiť sa</button>
                            </form>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="folderName" class="form-label">Názov Zadania</label>
                                    <input type="text" class="form-control formular" id="folderName" name="folderName"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Popis Zadania</label>
                                    <textarea class="form-control formular" id="description" name="description" rows="3"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="imageFiles" class="form-label">Vybrať obrázky (maximálna veľkosť všetkých
                                        obrázkov spolu:
                                        <?php echo ini_get('upload_max_filesize'); ?>B)
                                    </label>
                                    <input type="file" class="form-control formular" id="imageFiles" name="imageFiles[]"
                                        multiple required>
                                </div>
                                <div class="mb-3">
                                    <label for="zipFile" class="form-label">Vybrať <strong>ZIP</strong> súbor (maximálna
                                        veľkosť súboru:
                                        <?php echo ini_get('upload_max_filesize'); ?>B)
                                    </label>
                                    <input type="file" class="form-control formular" id="zipFile" name="zipFile" required>
                                    <p><i class="fas fa-warning"></i> Súbory typu: php, exe, sh, py sú z bezpečnostných
                                        dóvodov <strong>zakázané</strong> a preto sa zadanie neuloží.
                                    </p>
                                </div>
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="visible">Výsledok viditeľný študentom?</label>
                                    <input type="checkbox" class="form-check-input" id="visible" name="visible">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary" name="upload"><i
                                            class="fa-solid fa-upload"></i> Nahrať</button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 offset-md-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="search-addon"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control search-text" placeholder="Hľadať" aria-label="Hľadať"
                        aria-describedby="search-addon" id="search-input">
                    <button class="btn btn-primary trash" type="button" id="clear-search-btn"><i
                            class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <?php foreach ($folders as $folder) { ?>
                <div class="col-md-4 cardcontainer">
                    <div class="card card-hover card-text"
                        onclick="window.location.href='../pages/zadanie.php?folder=<?php echo basename($folder); ?>'">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo basename($folder); ?>
                            </h5>
                        </div>
                    </div>
                    <?php if ($isTeacher || isset($_POST['password'])) { ?>
                        <form method="post">
                            <input type="hidden" name="folderName" value="<?php echo basename($folder); ?>">
                            <?php if ($isTeacher) { ?>
                                <button type="submit" class="btn btn-primary danger" name="delete"
                                    onclick="return confirm('Vymazať?')" style="margin-bottom: 20px !important;"><i
                                        class="fas fa-trash"></i> Odstrániť</button>
                            <?php } else { ?>
                                <button type="submit" class="btn btn-primary danger" name="delete" style="display: none;"><i
                                        class="fas fa-trash"></i> Odstrániť</button>
                            <?php } ?>
                        </form>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>

    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/popperjs_core-2.5.3.js"></script>
    <script src="../js/bootstrap-5.3.2.js"></script>
</body>

</html>

<script src="../js/search.js"></script>