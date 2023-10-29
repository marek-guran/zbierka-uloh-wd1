<div class="modal fade" id="addHtmlModal" tabindex="-1" aria-labelledby="addHtmlModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addHtmlModalLabel">Pridať HTML Príklad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
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

                    $stmt = $connection->prepare("SELECT DISTINCT kategoria FROM HTML");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $categories = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($categories, $row['kategoria']);
                    }
                    $stmt->close();
                    $connection->close();
                    ?>
                    <div class="mb-3">
                        <label for="kategoria" class="form-label">Vyberte alebo pridajte kategóriu</label>
                        <select class="form-select" id="kategoria-select" name="kategoria-select">
                            <option value="new">Pridať novú kategóriu</option>
                            <?php
                            foreach ($categories as $category) {
                                echo "<option value=\"$category\">$category</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3" id="kategoria-form" style="display: none;">
                        <label for="kategoria" class="form-label">Kategória</label>
                        <input type="text" class="form-control" id="kategoria" name="kategoria" required>
                    </div>
                    <div class="mb-3">
                        <label for="nazov" class="form-label">Názov</label>
                        <input type="text" class="form-control" id="nazov" name="nazov" required>
                    </div>
                    <div class="mb-3">
                        <label for="zadanie" class="form-label">Zadanie</label>
                        <textarea class="form-control" id="zadanie" name="zadanie" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="html" class="form-label">HTML súbor</label>
                        <input type="file" class="form-control" id="html" name="html" accept=".html" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Obrázok k zadaniu (Nepovinné)</label>
                        <input type="file" class="form-control" id="image" name="image"
                            accept=".jpg,.jpeg,.png,.gif,.bmp,.svg,.ico,.webp,.tif,.tiff,.psd,.ai,.eps,.indd,.pdf"
                            optional>
                    </div>
                    <div class="mb-3">
                        <label for="video" class="form-label">Video k zadaniu (Nepovinné)</label>
                        <input type="file" class="form-control" id="video" name="video"
                            accept=".mp4,.avi,.mov,.wmv,.flv,.mkv" optional>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="visible-vysledok" name="visible-vysledok">
                        <label class="form-check-label" for="visible-vysledok">Viditeľný výsledok</label>
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
    const kategoriaInput = document.getElementById('kategoria');
    const kategoriaForm = document.getElementById('kategoria-form');
    kategoriaForm.style.display = 'block';
    kategoriaSelect.addEventListener('change', () => {
        if (kategoriaSelect.value === 'new') {
            kategoriaInput.required = true;
            kategoriaForm.style.display = 'block';
        } else {
            kategoriaInput.required = false;
            kategoriaForm.style.display = 'none';
            document.getElementById('kategoria').value = kategoriaSelect.value;
        }
    });
</script>

<?php

if (isset($_POST['nazov']) && isset($_POST['zadanie']) && isset($_POST['kategoria'])) {
    $kategoria = $_POST['kategoria'];
    $nazov = $_POST['nazov'];
    $zadanie = $_POST['zadanie'];
    $visibleVysledok = isset($_POST['visible-vysledok']) && !empty($_POST['visible-vysledok']);

    $folderPath = '../priklady/html/' . $nazov;
    if (!file_exists($folderPath)) {
        mkdir($folderPath, 0777, true);
    }

    $htmlPath = '';
    if (isset($_FILES['html']) && $_FILES['html']['error'] === UPLOAD_ERR_OK) {
        $htmlName = $_FILES['html']['name'];
        $htmlTmpName = $_FILES['html']['tmp_name'];
        $htmlPath = $folderPath . '/' . $htmlName;
        move_uploaded_file($htmlTmpName, $htmlPath);
    }

    $imagePath = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];
        $imagePath = $folderPath . '/' . $imageName;
        move_uploaded_file($imageTmpName, $imagePath);
    }

    $videoPath = '';
    if (isset($_FILES['video']) && $_FILES['video']['error'] === UPLOAD_ERR_OK) {
        $videoName = $_FILES['video']['name'];
        $videoTmpName = $_FILES['video']['tmp_name'];
        $videoPath = $folderPath . '/' . $videoName;
        move_uploaded_file($videoTmpName, $videoPath);
    }

    $host = 'zbierka-db';
    $port = 3306;
    $username = 'admin';
    $password = getenv('TEACHER_PASSWORD');
    $database = 'zbierka';

    $connection = new mysqli($host, $username, $password, $database, $port);

    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }

    $stmt = $connection->prepare("INSERT INTO HTML (kategoria, nazov, zadanie, html, obrazok, video, visibleVysledok) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $kategoria, $nazov, $zadanie, $htmlPath, $imagePath, $videoPath, $visibleVysledok);

    if ($stmt->execute()) {
        $connection->commit();
        echo "New record created successfully<br>";
    } else {
        exit();
    }

    $stmt->close();
    $connection->close();
}
?>