<div class="modal fade" id="editJsModal" tabindex="-1" aria-labelledby="editJsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addHtmlModalLabel">Upraviť JavaScript Príklad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="kategoria" class="form-label">Kategória</label>
                        <select class="form-select" id="kategoria-select" name="kategoriaEdit" required>
                            <option value="new">Pridať novú kategóriu</option>
                            <?php
                            $hostEdit = 'zbierka-db';
                            $portEdit = 3306;
                            $usernameEdit = 'admin';
                            $passwordEdit = getenv('TEACHER_PASSWORD');
                            $databaseEdit = 'zbierka';

                            $connectionEdit = new mysqli($hostEdit, $usernameEdit, $passwordEdit, $databaseEdit, $portEdit);

                            if ($connectionEdit->connect_error) {
                                die('Connection failed: ' . $connectionEdit->connect_error);
                            }

                            // Get the existing categories
                            $stmtCategories = $connectionEdit->prepare("SELECT DISTINCT kategoria FROM JS");
                            $stmtCategories->execute();
                            $resultCategories = $stmtCategories->get_result();

                            // Loop through the categories and add them to the dropdown
                            while ($rowCategories = $resultCategories->fetch_assoc()) {
                                $category = $rowCategories['kategoria'];
                                if ($category == $kategoria) {
                                    echo "<option value=\"$category\" selected>$category</option>";
                                } else {
                                    echo "<option value=\"$category\">$category</option>";
                                }
                            }

                            $stmtCategories->close();
                            $connectionEdit->close();
                            ?>
                        </select>
                    </div>
                    <div class="mb-3" id="kategoria-form" style="display: none;">
                        <label for="kategoria" class="form-label">Nová kategória</label>
                        <input type="text" class="form-control" id="kategoria" name="kategoria">
                    </div>
                    <div class="mb-3">
                        <label for="nazov" class="form-label">Názov</label>
                        <input type="text" class="form-control" id="nazov" name="nazovEdit"
                            value="<?php echo $nazov; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="zadanie" class="form-label">Zadanie</label>
                        <textarea class="form-control" id="zadanie" name="zadanieEdit" rows="3"
                            required><?php echo $zadanie; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="dokumentacia" class="form-label">Dokumentácia - link (Nepovinné)</label>
                        <input class="form-control" id="dokumentacia" name="dokumentaciaEdit"
                            value="<?php echo $dokumentacia; ?>" optional>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="downloadJsEdit" name="downloadJsEdit" <?php if ($downloadJS == "1") {
                            echo 'checked';
                        } ?>>
                        <label class="form-check-label" for="downloadJsEdit">Stiahnuteľný JavaScript kód</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="visibleVysledokEdit"
                            name="visible-vysledokEdit" <?php if ($visibleVysledok == "1") {
                                echo 'checked';
                            } ?>>
                        <label class="form-check-label" for="visibleVysledokEdit">Viditeľný výsledok</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zrušiť</button>
                    <button type="submit" class="btn btn-primary">Upraviť</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const kategoriaSelect = document.getElementById('kategoria-select');
    const kategoriaInput = document.getElementById('kategoria');
    const kategoriaForm = document.getElementById('kategoria-form');
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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idEdit = $id;
    $kategoriaEdit = $_POST['kategoriaEdit'];
    if ($kategoriaEdit === 'new') {
        $kategoriaEdit = $_POST['kategoria'];
    }
    $nazovEdit = $_POST['nazovEdit'];
    $zadanieEdit = $_POST['zadanieEdit'];
    $dokumentaciaEdit = $_POST['dokumentaciaEdit'];
    $downloadJsEdit = isset($_POST['downloadJsEdit']) && !empty($_POST['downloadJsEdit']);
    $visibleVysledokEdit = isset($_POST['visible-vysledokEdit']) && !empty($_POST['visible-vysledokEdit']);

    $hostEdit = 'zbierka-db';
    $portEdit = 3306;
    $usernameEdit = 'admin';
    $passwordEdit = getenv('TEACHER_PASSWORD');
    $databaseEdit = 'zbierka';

    $connectionEdit = new mysqli($hostEdit, $usernameEdit, $passwordEdit, $databaseEdit, $portEdit);

    if ($connectionEdit->connect_error) {
        die('Connection failed: ' . $connectionEdit->connect_error);
    }

    // Update the item in the database
    $stmtEdit = $connectionEdit->prepare("UPDATE JS SET kategoria = ?, nazov = ?, zadanie = ?,  downloadJs = ?, visibleVysledok = ?, dokumentacia = ? WHERE id = ?");
    $stmtEdit->bind_param("ssssssi", $kategoriaEdit, $nazovEdit, $zadanieEdit, $downloadJsEdit, $visibleVysledokEdit, $dokumentaciaEdit, $idEdit);

    if ($stmtEdit->execute()) {
        $connectionEdit->commit();
    } else {
        echo "Error updating record: " . $stmtEdit->error;
    }

    if ($stmtEdit->execute()) {
        $connectionEdit->commit();

        // Rename the folder
        $oldFolderName = '../priklady/js/' . $nazov;
        $newFolderName = '../priklady/js/' . $nazovEdit;
        if (is_dir($oldFolderName)) {
            if (rename($oldFolderName, $newFolderName)) {
                echo 'Folder renamed successfully.';

                // Update the rows in the HTML table
                $stmtUpdate = $connectionEdit->prepare("UPDATE JS SET nazov = REPLACE(nazov, ?, ?), html = REPLACE(html, ?, ?), css = REPLACE(css, ?, ?), js = REPLACE(js, ?, ?), jsonf = REPLACE(jsonf, ?, ?), kniznica = REPLACE(kniznica, ?, ?), obrazok = REPLACE(obrazok, ?, ?), video = REPLACE(video, ?, ?) WHERE id = ?");
                $stmtUpdate->bind_param("ssssssssssssssssi", $oldFolderName, $newFolderName, $oldFolderName, $newFolderName, $oldFolderName, $newFolderName, $oldFolderName, $newFolderName, $oldFolderName, $newFolderName, $oldFolderName, $newFolderName, $oldFolderName, $newFolderName, $oldFolderName, $newFolderName, $idEdit);
                $stmtUpdate->execute();
                $stmtUpdate->close();
            }
        }
    }

    $stmtEdit->close();
    $connectionEdit->close();
}
?>