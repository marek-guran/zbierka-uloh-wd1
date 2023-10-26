<div class="modal fade" id="addCSSModal" tabindex="-1" aria-labelledby="addCSSModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addHtmlModalLabel">Pridať CSS Príklad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="kategoria" class="form-label">Kategória</label>
                        <input type="text" class="form-control" id="kategoria-css" name="kategoria-css" required>
                    </div>
                    <div class="mb-3">
                        <label for="nazov" class="form-label">Názov</label>
                        <input type="text" class="form-control" id="nazov-css" name="nazov-css" required>
                    </div>
                    <div class="mb-3">
                        <label for="zadanie" class="form-label">Zadanie</label>
                        <textarea class="form-control" id="zadanie-css" name="zadanie-css" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="html" class="form-label">HTML súbor</label>
                        <input type="file" class="form-control" id="html-css" name="html-css" accept=".html" required>
                    </div>
                    <div class="mb-3">
                        <label for="css" class="form-label">CSS súbor</label>
                        <input type="file" class="form-control" id="css-css" name="css-css" accept=".css" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Obrázok k zadaniu (Nepovinné)</label>
                        <input type="file" class="form-control" id="image-css" name="image-css"
                            accept=".jpg,.jpeg,.png,.gif,.bmp,.svg,.ico,.webp,.tif,.tiff,.psd,.ai,.eps,.indd,.pdf"
                            optional>
                    </div>
                    <div class="mb-3">
                        <label for="video" class="form-label">Video k zadaniu (Nepovinné)</label>
                        <input type="file" class="form-control" id="video-css" name="video-css"
                            accept=".mp4,.avi,.mov,.wmv,.flv,.mkv" optional>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="visible-vysledok-css" name="visible-vysledok-css">
                        <label class="form-check-label" for="visible-vysledok-css">Viditeľný výsledok</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zrušiť</button>
                    <button type="submit" class="btn btn-primary">Pridať</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

if (isset($_POST['kategoria-css']) && isset($_POST['nazov-css']) && isset($_POST['zadanie-css'])) {
    $kategoriaCss = $_POST['kategoria-css'];
    $nazovCss = $_POST['nazov-css'];
    $zadanieCss = $_POST['zadanie-css'];
    $visibleVysledokCss = isset($_POST['visible-vysledok-css']) && !empty($_POST['visible-vysledok-css']);

    $folderPathCss = '../priklady/css/' . $nazovCss;
    if (!file_exists($folderPathCss)) {
        mkdir($folderPathCss, 0777, true);
    }

    $htmlPathCss = '';
    if (isset($_FILES['html-css']) && $_FILES['html-css']['error'] === UPLOAD_ERR_OK) {
        $htmlNameCss = $_FILES['html-css']['name'];
        $htmlTmpNameCss = $_FILES['html-css']['tmp_name'];
        $htmlPathCss = $folderPathCss . '/' . $htmlNameCss;
        move_uploaded_file($htmlTmpNameCss, $htmlPathCss);
    }

    $cssPathCss = '';
    if (isset($_FILES['css-css']) && $_FILES['css-css']['error'] === UPLOAD_ERR_OK) {
        $cssNameCss = $_FILES['css-css']['name'];
        $cssTmpNameCss = $_FILES['css-css']['tmp_name'];
        $cssPathCss = $folderPathCss . '/' . $cssNameCss;
        move_uploaded_file($cssTmpNameCss, $cssPathCss);
    }

    $imagePathCss = '';
    if (isset($_FILES['image-css']) && $_FILES['image-css']['error'] === UPLOAD_ERR_OK) {
        $imageNameCss = $_FILES['image-css']['name'];
        $imageTmpNameCss = $_FILES['image-css']['tmp_name'];
        $imagePathCss = $folderPathCss . '/' . $imageNameCss;
        move_uploaded_file($imageTmpNameCss, $imagePathCss);
    }

    $videoPathCss = '';
    if (isset($_FILES['video-css']) && $_FILES['video-css']['error'] === UPLOAD_ERR_OK) {
        $videoNameCss = $_FILES['video-css']['name'];
        $videoTmpNameCss = $_FILES['video-css']['tmp_name'];
        $videoPathCss = $folderPathCss . '/' . $videoNameCss;
        move_uploaded_file($videoTmpNameCss, $videoPathCss);
    }

    $hostCss = 'zbierka-db';
    $portCss = 3306;
    $usernameCss = 'admin';
    $passwordCss = getenv('TEACHER_PASSWORD');
    $databaseCss = 'zbierka';

    $connectionCss = new mysqli($hostCss, $usernameCss, $passwordCss, $databaseCss, $portCss);

    if ($connectionCss->connect_error) {
        die('Connection failed: ' . $connectionCss->connect_error);
    }

    $stmtCss = $connectionCss->prepare("INSERT INTO CSS (kategoria, nazov, zadanie, html, css, obrazok, video, visibleVysledok) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmtCss->bind_param("ssssssss", $kategoriaCss, $nazovCss, $zadanieCss, $htmlPathCss, $cssPathCss, $imagePathCss, $videoPathCss, $visibleVysledokCss);

    if ($stmtCss->execute()) {
        $connectionCss->commit();
        echo "New record created successfully<br>";
    } else {
        exit();
    }

    $stmtCss->close();
    $connectionCss->close();
}
?>