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

if (isset($_POST['login'])) {
    header("Refresh:0");
}

?>

<div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="adminModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminModalLabel">
                    <?php if (!$isTeacher) { ?>
                        Prihlásiť sa
                    <?php } else { ?>
                        Odhlásiť sa
                    <?php } ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if (!$isTeacher) { ?>
                    <form method="post">
                        <div class="mb-3">
                            <label for="password" class="form-label">
                                <h2><strong>Učiteľské Heslo</strong></h2>
                            </label>
                            <input type="password" class="form-control formular" id="password" name="password" required>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i>
                            Prihlásiť sa</button>
                    </form>
                <?php } else { ?>
                    <form method="post">
                        <button type="submit" name="logout" class="btn btn-danger"><i
                                class="fa-solid fa-right-from-bracket"></i> Odhlásiť sa</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>