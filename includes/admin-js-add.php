<div class="modal fade" id="addJSModal" tabindex="-1" aria-labelledby="addJSModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addHtmlModalLabel"><strong>Pridať JavaScript Príklad</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                <?php
                    $hostJS = 'zbierka-db';
                    $portJS = 3306;
                    $usernameJS = 'admin';
                    $passwordJS = getenv('TEACHER_PASSWORD');
                    $databaseJS = 'zbierka';

                    $connectionJS = new mysqli($hostJS, $usernameJS, $passwordJS, $databaseJS, $portJS);

                    if ($connectionJS->connect_error) {
                        die('Connection failed: ' . $connectionJS->connect_error);
                    }

                    $stmtJS = $connectionJS->prepare("SELECT DISTINCT kategoria FROM JS");
                    $stmtJS->execute();
                    $resultJS = $stmtJS->get_result();
                    $categoriesJS = array();
                    while ($rowJS = $resultJS->fetch_assoc()) {
                        array_push($categoriesJS, $rowJS['kategoria']);
                    }
                    $stmtJS->close();
                    $connectionJS->close();
                    ?>
                    <div class="mb-3">
                        <label for="kategoria" class="form-label">Vyberte alebo pridajte kategóriu</label>
                        <select class="form-select" id="kategoria-select" name="kategoria-select">
                            <option value="new">Pridať novú kategóriu</option>
                            <?php
                            foreach ($categoriesJS as $categoryJS) {
                                echo "<option value=\"$categoryJS\">$categoryJS</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3" id="kategoria-form" style="display: none;">
                        <label for="kategoria" class="form-label">Kategória</label>
                        <input type="text" class="form-control" id="kategoria-JS" name="kategoria-JS" required>
                    </div>
                    <div class="mb-3">
                        <label for="nazov" class="form-label">Názov</label>
                        <input type="text" class="form-control" id="nazov-JS" name="nazov-JS" required>
                    </div>
                    <div class="mb-3">
                        <label for="zadanie" class="form-label">Zadanie</label>
                        <textarea class="form-control" id="zadanie-JS" name="zadanie-JS" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="html" class="form-label">HTML súbor</label>
                        <input type="file" class="form-control" id="html-JS" name="html-JS" accept=".html" required>
                    </div>
                    <div class="mb-3">
                        <label for="css" class="form-label">CSS súbor (nepovinné)</label>
                        <input type="file" class="form-control" id="css-JS" name="css-JS" accept=".css" optional>
                    </div>
                    <div class="mb-3">
                        <label for="JS" class="form-label">JavaScript súbor</label>
                        <input type="file" class="form-control" id="JS-JS" name="JS-JS" accept=".JS" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="download-JS" name="download-JS">
                        <label class="form-check-label" for="download-JS">Povoliť stiahnutie JavaScriptu</label>
                    </div>
                    <div class="mb-3">
                        <label for="jsonf" class="form-label">JSON súbor (Nepovinné)</label>
                        <input type="file" class="form-control" id="jsonf-JS" name="jsonf-JS" accept=".json" optional>
                    </div>
                    <div class="mb-3">
                        <label for="kniznica" class="form-label">Knižnica (Nepovinné)</label>
                        <input type="file" class="form-control" id="kniznica-JS" name="kniznica-JS" accept=".js"
                            optional>
                    </div>
                    <div class="mb-3">
                        <label for="dokumentacia" class="form-label">Dokumentácia - link (nepovinné)</label>
                        <input type="text" class="form-control" id="dokumentacia-JS" name="dokumentacia-JS" optional></input>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Obrázok k zadaniu (Nepovinné)</label>
                        <input type="file" class="form-control" id="image-JS" name="image-JS"
                            accept=".jpg,.jpeg,.png,.gif,.bmp,.svg,.ico,.webp,.tif,.tiff,.psd,.ai,.eps,.indd,.pdf"
                            optional>
                    </div>
                    <div class="mb-3">
                        <label for="video" class="form-label">Video k zadaniu (Nepovinné)</label>
                        <input type="file" class="form-control" id="video-JS" name="video-JS"
                            accept=".mp4,.avi,.mov,.wmv,.flv,.mkv" optional>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="visible-vysledok-JS"
                            name="visible-vysledok-JS">
                        <label class="form-check-label" for="visible-vysledok-JS">Viditeľný výsledok</label>
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

<script>
    const kategoriaSelect = document.getElementById('kategoria-select');
    const kategoriaInput = document.getElementById('kategoria-JS');
    const kategoriaForm = document.getElementById('kategoria-form');
    kategoriaForm.style.display = 'block';
    kategoriaSelect.addEventListener('change', () => {
        if (kategoriaSelect.value === 'new') {
            kategoriaInput.required = true;
            kategoriaForm.style.display = 'block';
        } else {
            kategoriaInput.required = false;
            kategoriaForm.style.display = 'none';
            document.getElementById('kategoria-JS').value = kategoriaSelect.value;
        }
    });
</script>

<?php

if (isset($_POST['kategoria-JS']) && isset($_POST['nazov-JS']) && isset($_POST['zadanie-JS'])) {
    $kategoriaJS = $_POST['kategoria-JS'];
    $nazovJS = $_POST['nazov-JS'];
    $zadanieJS = $_POST['zadanie-JS'];
    $visibleVysledokJS = isset($_POST['visible-vysledok-JS']) && !empty($_POST['visible-vysledok-JS']);
    $downloadJS = isset($_POST['download-JS']) && !empty($_POST['download-JS']);
    $dokumentacia = $_POST['dokumentacia-JS'];

    $folderPathJS = '../priklady/js/' . $nazovJS;
    if (!file_exists($folderPathJS)) {
        mkdir($folderPathJS, 0777, true);
    }

    $htmlPathJS = '';
    if (isset($_FILES['html-JS']) && $_FILES['html-JS']['error'] === UPLOAD_ERR_OK) {
        $htmlNameJS = $_FILES['html-JS']['name'];
        $htmlTmpNameJS = $_FILES['html-JS']['tmp_name'];
        $htmlPathJS = $folderPathJS . '/' . $htmlNameJS;
        move_uploaded_file($htmlTmpNameJS, $htmlPathJS);
    }

    $cssPathJS = '';
    if (isset($_FILES['css-JS']) && $_FILES['css-JS']['error'] === UPLOAD_ERR_OK) {
        $cssNameJS = $_FILES['css-JS']['name'];
        $cssTmpNameJS = $_FILES['css-JS']['tmp_name'];
        $cssPathJS = $folderPathJS . '/' . $cssNameJS;
        move_uploaded_file($cssTmpNameJS, $cssPathJS);
    }

    $JSPathJS = '';
    if (isset($_FILES['JS-JS']) && $_FILES['JS-JS']['error'] === UPLOAD_ERR_OK) {
        $JSNameJS = $_FILES['JS-JS']['name'];
        $JSTmpNameJS = $_FILES['JS-JS']['tmp_name'];
        $JSPathJS = $folderPathJS . '/' . $JSNameJS;
        move_uploaded_file($JSTmpNameJS, $JSPathJS);
    }

    $jsonfPathJS = '';
    if (isset($_FILES['jsonf-JS']) && $_FILES['jsonf-JS']['error'] === UPLOAD_ERR_OK) {
        $jsonfNameJS = $_FILES['jsonf-JS']['name'];
        $jsonfTmpNameJS = $_FILES['jsonf-JS']['tmp_name'];
        $jsonfPathJS = $folderPathJS . '/' . $jsonfNameJS;
        move_uploaded_file($jsonfTmpNameJS, $jsonfPathJS);
    }

    $kniznicaPathJS = '';
    if (isset($_FILES['kniznica-JS']) && $_FILES['kniznica-JS']['error'] === UPLOAD_ERR_OK) {
        $kniznicaNameJS = $_FILES['kniznica-JS']['name'];
        $kniznicaTmpNameJS = $_FILES['kniznica-JS']['tmp_name'];
        $kniznicaPathJS = $folderPathJS . '/' . $kniznicaNameJS;
        move_uploaded_file($kniznicaTmpNameJS, $kniznicaPathJS);
    }

    $imagePathJS = '';
    if (isset($_FILES['image-JS']) && $_FILES['image-JS']['error'] === UPLOAD_ERR_OK) {
        $imageNameJS = $_FILES['image-JS']['name'];
        $imageTmpNameJS = $_FILES['image-JS']['tmp_name'];
        $imagePathJS = $folderPathJS . '/' . $imageNameJS;
        move_uploaded_file($imageTmpNameJS, $imagePathJS);
    }

    $videoPathJS = '';
    if (isset($_FILES['video-JS']) && $_FILES['video-JS']['error'] === UPLOAD_ERR_OK) {
        $videoNameJS = $_FILES['video-JS']['name'];
        $videoTmpNameJS = $_FILES['video-JS']['tmp_name'];
        $videoPathJS = $folderPathJS . '/' . $videoNameJS;
        move_uploaded_file($videoTmpNameJS, $videoPathJS);
    }

    $hostJS = 'zbierka-db';
    $portJS = 3306;
    $usernameJS = 'admin';
    $passwordJS = getenv('TEACHER_PASSWORD');
    $databaseJS = 'zbierka';

    $connectionJS = new mysqli($hostJS, $usernameJS, $passwordJS, $databaseJS, $portJS);

    if ($connectionJS->connect_error) {
        die('Connection failed: ' . $connectionJS->connect_error);
    }

    $stmtJS = $connectionJS->prepare("INSERT INTO JS (kategoria, nazov, zadanie, html, css, js, jsonf, kniznica, dokumentacia, obrazok, video, visibleVysledok, downloadJs) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmtJS->bind_param("sssssssssssss", $kategoriaJS, $nazovJS, $zadanieJS, $htmlPathJS, $cssPathJS, $JSPathJS, $jsonfPathJS, $kniznicaPathJS, $dokumentacia, $imagePathJS, $videoPathJS, $visibleVysledokJS, $downloadJS);

    if ($stmtJS->execute()) {
        $connectionJS->commit();
        echo "New record created successfully<br>";
    } else {
        exit();
    }

    $stmtJS->close();
    $connectionJS->close();
}
?>