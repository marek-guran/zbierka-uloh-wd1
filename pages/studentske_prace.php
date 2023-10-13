<?php

// Check if user is a teacher
$isTeacher = false; // Set to false by default
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    session_start();
    if ($password === getenv('TEACHER_PASSWORD')) {
        $isTeacher = true;
    }
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

    if ($zipFile['error'] === UPLOAD_ERR_OK) { // Check if file was uploaded successfully
        $zip = new ZipArchive;
        if ($zip->open($zipFile['tmp_name']) === TRUE) {
            $zip->extractTo($targetDir);
            $zip->close();
        } else {
            echo "Nepodarilo sa extrahovať zip súbor.";
        }
    } else {
        echo "Nahrávanie zlyhalo: " . $zipFile['name'] . "<br>";
        echo "Chyba: " . $zipFile['error'] . "<br>";
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
    <title>Študentské Práce</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap-5.3.2.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>

<body>

    <?php include '../includes/header.php'; ?>

    <div class="container mt-3">
        <?php if (!$isTeacher) { ?>
            <div class="row">
                <div class="col-md-6">
                    <form method="post">
                        <div class="mb-3">
                            <label for="password" class="form-label">Heslo pre učiteľa</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Prihlásiť sa</button>
                    </form>
                </div>
            </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-md-6">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="folderName" class="form-label">Názov Práce</label>
                            <input type="text" class="form-control" id="folderName" name="folderName" required>
                        </div>
                        <div class="mb-3">
                            <label for="zipFile" class="form-label">Vybrať ZIP súbor</label>
                            <input type="file" class="form-control" id="zipFile" name="zipFile" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="upload">Nahrať</button>
                    </form>
                </div>
            </div>
        <?php } ?>
        <div class="row mt-3">
            <?php foreach ($folders as $folder) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo basename($folder); ?>
                            </h5>
                            <a href="<?php echo $folder; ?>" target="_blank" class="btn btn-primary">Otvoriť</a>
                            <?php if ($isTeacher || isset($_POST['password'])) { ?>
                                <form method="post" class="mt-3">
                                    <input type="hidden" name="folderName" value="<?php echo basename($folder); ?>">
                                    <?php if ($isTeacher) { ?>
                                        <button type="submit" class="btn btn-danger" name="delete">Odstrániť</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-danger" name="delete"
                                            style="display: none;">Odstrániť</button>
                                    <?php } ?>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
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