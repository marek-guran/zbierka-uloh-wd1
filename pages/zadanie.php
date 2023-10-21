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

$folderName = $_GET['folder'];
$json_file = '../ucitelske-zadania/' . $folderName . '/zadanie/zadanie.json';
$json_data = file_get_contents($json_file);
$data = json_decode($json_data, true);

$name = $data['name'];
$description = $data['description'];
$image_folder = '../ucitelske-zadania/' . $folderName . '/zadanie/images';
$visible = isset($data['visible']) ? $data['visible'] : false;

// Handle form submission
if ($isTeacher) {
    if (isset($_POST['visible'])) {
        $data['visible'] = $_POST['visible'] === 'true';
        $visible = $data['visible'];
    }
    if (isset($_POST['description'])) {
        $data['description'] = $_POST['description'];
        $description = $data['description'];
    }
    if (isset($_POST['jsonName'])) {
        $newJsonName = $_POST['jsonName'];
        if ($newJsonName !== $folderName) {
            // Rename folder
            $oldFolder = '../ucitelske-zadania/' . $folderName;
            $newFolder = '../ucitelske-zadania/' . $newJsonName;
            if (!file_exists($newFolder)) {
                rename($oldFolder, $newFolder);
                $folderName = $newJsonName;
                $image_folder = '../ucitelske-zadania/' . $folderName . '/zadanie/images';
                $json_file = '../ucitelske-zadania/' . $folderName . '/zadanie/zadanie.json';
                $data['name'] = $newJsonName;
        
                // Update the JSON file with the new name
                $json_data = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                file_put_contents($json_file, $json_data);
        
                header("Location: zadanie.php?folder=$folderName"); // Redirect to new page with updated folder name
                exit(); // Stop executing the current script
            }
        }
        
    }
    $json_data = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($json_file, $json_data);
}
?>

<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap-5.3.2.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <meta name="robots" content="noindex, nofollow">
</head>

<body>

    <?php include '../includes/header.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="priklad card-text">
                    <h1>
                        <?php echo $name; ?>
                    </h1>
                    <?php if ($isTeacher) { ?>
                        <form method="post">
                            <div class="mb-3">
                                <label for="jsonName" class="form-label">Názov Zadania</label>
                                <input type="text" class="form-control" id="jsonName" name="jsonName" value="<?php echo $folderName; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Popis Zadania</label>
                                <textarea class="form-control" id="description" name="description" rows="3"><?php echo $description; ?></textarea>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="hidden" name="visible" value="false">
                                <input type="checkbox" class="form-check-input" id="visible" name="visible" value="true"
                                    <?php echo $visible ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="visible">Výsledok viditeľný študentom?</label>
                            </div>
                            <button type="submit" class="btn btn-primary mb-3"><i class="fa-solid fa-save"></i> Uložiť</button>
                        </form>
                    <?php } else { ?>
                        <p>
                            <?php echo $description; ?>
                        </p>
                    <?php } ?>
                    <?php if ($visible || $isTeacher): ?>
                        <button class="btn btn-primary"
                            onclick="window.open('../ucitelske-zadania/<?php echo $folderName; ?>/', '_blank')">Výsledná
                            Stránka</button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $images = glob($image_folder . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                if (!empty($images)): ?>
                    <div class="img-container">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                foreach ($images as $index => $image) {
                                    $active = $index === 0 ? 'active' : '';
                                    echo '<div class="carousel-item ' . $active . '">';
                                    echo '<img src="' . $image . '" class="d-block w-100" alt="Image ' . $index . '" oncontextmenu="return false;" ondragstart="return false;">';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                            <div class="carousel-controls">
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="fa-solid fa-chevron-left" aria-hidden="true"></span>
                                    <span class="visually-hidden">Späť</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="fa-solid fa-chevron-right" aria-hidden="true"></span>
                                    <span class="visually-hidden">Ďalej</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($isTeacher) { ?>
                    <div class="d-flex justify-content-between">
                        <form method="post" onsubmit="return confirm('Odhlásiť?')">
                            <button type="submit" class="btn btn-primary danger" name="logout"><i
                                    class="fa-solid fa-door-open"></i> Odhlásiť sa</button>
                        </form>
                    </div>
                <?php } ?>
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
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>

    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/popperjs_core-2.5.3.js"></script>
    <script src="../js/bootstrap-5.3.2.js"></script>
</body>

</html>