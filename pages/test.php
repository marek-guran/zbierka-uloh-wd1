<!DOCTYPE html>
<html>
<head>
    <title>Edit HTML Príklad</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit HTML Príklad</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="zadanie" class="form-label">Zadanie</label>
                <textarea class="form-control" id="zadanie" name="zadanieEdit" rows="3"
                    required><?php echo $zadanie; ?></textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="visible-vysledok"
                    name="visible-vysledokEdit" <?php if ($visibleVysledokEdit) {
                        echo 'checked';
                    } ?>>
                <label class="form-check-label" for="visible-vysledok">Viditeľný výsledok</label>
            </div>
            <button type="submit" class="btn btn-primary">Upraviť</button>
        </form>
        <?php
        if (isset($_POST['zadanieEdit'])) {
            $idEdit = 10;
            $zadanieEdit = $_POST['zadanieEdit'];
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
            $stmtEdit = $connectionEdit->prepare("UPDATE HTML SET zadanie = ?, visibleVysledok = ? WHERE id = ?");
            $stmtEdit->bind_param("ssi", $zadanieEdit, $visibleVysledokEdit, $idEdit);

            if ($stmtEdit->execute()) {
                $connectionEdit->commit();
                echo "Record updated successfully<br>";
            } else {
                echo "Error updating record: " . $stmtEdit->error;
            }

            $stmtEdit->close();
            $connectionEdit->close();
        }
        ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>