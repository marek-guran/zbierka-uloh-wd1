<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS3</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap-5.3.2.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <meta name="robots" content="noindex, nofollow">
</head>

<body>

    <?php include '../includes/header.php'; ?>
    <?php include '../includes/css-menu.php'; ?>

    <?php
    $host = 'zbierka-db';
    $port = 3306;
    $username = 'admin';
    $password = getenv('TEACHER_PASSWORD');
    $database = 'zbierka';

    $connection = new mysqli($host, $username, $password, $database, $port);

    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }

    if (isset($_GET['pr'])) {
        $nazov = $_GET['pr'];

        $stmt = $connection->prepare("SELECT id, kategoria, zadanie, html, css, obrazok, video, visibleVysledok FROM CSS WHERE nazov = ?");
        $stmt->bind_param("s", $nazov);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $kategoria, $zadanie, $htmlPath, $cssPath, $imagePath, $videoPath, $visibleVysledok);
            $stmt->fetch();

            if ($visibleVysledok == '1') {
                $showButton = true;
            } else {
                $showButton = false;
            }

            $categoryName = $kategoria;
            $categoryItems = array(
                array(
                    'nazov' => $nazov,
                    'zadanie' => $zadanie,
                    'html' => $htmlPath,
                    'css' => $cssPath,
                    'image' => $imagePath,
                    'video' => $videoPath
                )
            );
        } else {
            echo 'No results found';
        }

        $stmt->close();
    }

    $connection->close();
    ?>

    <?php include '../includes/css-menu-prikladov.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="priklad card-text">
                    <?php
                    if (isset($nazov)) {
                        echo "<h2>$nazov</h2>";
                    }
                    ?>
                    <?php
                    if (isset($zadanie)) {
                        echo "<p>$zadanie</p>";
                    }
                    ?>
                </div>
            </div>
            <?php if (!empty($imagePath) || !empty($videoPath)): ?>
                <div class="col-md-6">
                    <?php if (!empty($imagePath)): ?>
                        <div class="img-container">
                            <a href='<?php echo $imagePath ?>' target='_blank'>
                                <img src='<?php echo $imagePath ?>' alt='Zadanie príkladu' class='img-zadania'>
                                <div class='img-overlay'>
                                    <i class='fas fa-image'></i>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($videoPath)): ?>
                        <div class="video-container">
                            <video src='<?php echo $videoPath ?>' alt='Video príkladu' controls></video>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>


    <div class="code-wrapper container code-pill-container">
        <?php
        if (isset($htmlPath)) {
            if ($visibleVysledok == '1' || (isset($_COOKIE['isTeacher']) && $_COOKIE['isTeacher'] == 'true')) {
                echo "<button id='show-code-btn' class='btn btn-primary'>Ukázať Kód</button>";
                echo "<a href='$htmlPath' target='_blank'>";
                echo "<button class='btn btn-primary' style='margin-left: 5px;'>Výsledná Stránka</button>";
                echo "</a>";
                echo "<div class='code-pill-button-container'>";
                echo "<button id='show-html-code' class='btn btn-primary code-pill-button'>HTML</button>";
                echo "<button id='show-css-code' class='btn btn-primary code-pill-button'>CSS</button>";
                echo "</div>";
                echo "<pre id='html-code'>";
                if (isset($htmlPath)) {
                    $htmlCode = file_get_contents($htmlPath);
                    if ($htmlCode !== false) {
                        echo '<pre id="code" style="display: none;" class="code code-css">' . htmlspecialchars($htmlCode) . '</pre>';
                    } else {
                        echo 'File not found or unable to read.';
                    }
                }
                echo "</pre>";
                echo "<pre id='css-code' style='display: none;'>";
                if (isset($cssPath)) {
                    $cssCode = file_get_contents($cssPath);
                    if ($cssCode !== false) {
                        echo '<pre id="code" class="code code-css">' . htmlspecialchars($cssCode) . '</pre>';
                    } else {
                        echo 'CSS file not found or unable to read.';
                    }
                }
                echo "</pre>";
            } elseif (!is_string($visibleVysledok)) {
                // Do nothing if visibleVysledok is not a string and is not equal to '1'
            }
        } else {
            echo 'File not found or unable to read.';
        }
        ?>
    </div>


    <?php include '../includes/footer.php'; ?>

    <script src="../js/show-code-css.js"></script>
    <script src="../js/jquery-3.7.1.js"></script>
    <script src="../js/bootstrap-5.3.2.js"></script>
    <script src="../js/code-active-css.js"></script>
    <script src="../js/sidebar-item-active.js"></script>
    <!-- Sidebar tlačidlo musí byť vždy ako posledné!!! -->
    <script src="../js/sidebar-toggle.js"></script>
</body>

</html>