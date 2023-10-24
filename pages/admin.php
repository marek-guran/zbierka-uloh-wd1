<?php

$isTeacher = false;
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password === getenv('TEACHER_PASSWORD')) {
        setcookie('isTeacher', 'true', time() + (86400 * 30), "/");
        $isTeacher = true;
    }
} elseif (isset($_COOKIE['isTeacher'])) {
    $isTeacher = true;
}

if (isset($_POST['logout'])) {
    setcookie('isTeacher', 'false', time() - 360000, "/");
    header("Refresh:0");
}

?>

<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
                            <form method="post">
                                <button type="submit" name="logout" class="btn btn-danger"><i class="fa-solid fa-right-from-bracket"></i> Odhlásiť sa</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>

    <script src="../js/jquery-3.7.1.js"></script>
    <script src="../js/bootstrap-5.3.2.js"></script>
    <script src="../js/destroy-cookie-sidebar.js"></script>
</body>

</html>