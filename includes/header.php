<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand ml-3" href="../index.php">
            <img src="../img/logo-512x512.png" alt="Zbierka Úloh - WD1" style="width: 40px; height: 40px;" />
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto" style="margin-right: 0px!important;">
                <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php') {
                    echo 'desk-active';
                } ?>">
                    <a class="nav-link btn btn-outline-primary" href="../index.php">
                        <i class="fa-solid fa-house"></i><span class="icon-text"> Domov</span>
                    </a>
                </li>
                <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'html_page.php') !== false || strpos($_SERVER['REQUEST_URI'], 'html_page_priklad.php') !== false) {
                    echo 'desk-active';
                } ?>">
                    <a class="nav-link btn btn-outline-primary" href="../pages/html_page.php"><i
                            class="fa-brands fa-html5"></i><span class="icon-text"> HTML5</span></a>
                </li>
                <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'css_page.php') !== false || strpos($_SERVER['REQUEST_URI'], 'css_page_priklad.php') !== false) {
                    echo 'desk-active';
                } ?>">
                    <a class="nav-link btn btn-outline-primary" href="../pages/css_page.php"><i
                            class="fa-brands fa-css3-alt"></i><span class="icon-text"> CSS3</span></a>
                </li>
                <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'js_page.php') !== false || strpos($_SERVER['REQUEST_URI'], 'js_page_priklad.php') !== false) {
                    echo 'desk-active';
                } ?>">
                    <a class="nav-link btn btn-outline-primary" href="../pages/js_page.php"><i
                            class="fa-brands fa-js"></i><span class="icon-text"> JavaScript</span></a>
                </li>
                <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'ucitelske_zadania.php') !== false || strpos($_SERVER['REQUEST_URI'], 'pages/zadanie.php') !== false) {
                    echo 'desk-active';
                } ?>">
                    <a class="nav-link btn btn-outline-primary" href="../pages/ucitelske_zadania.php"><i
                            class="fa-solid fa-table-columns"></i><span class="icon-text"> Zadania</span></a>
                </li>
                <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'nastroje.php') !== false) {
                    echo 'desk-active';
                } ?>">
                    <a class="nav-link btn btn-outline-primary" href="../pages/nastroje.php"><i
                            class="fa-solid fa-code"></i><span class="icon-text"> Nástroje</span></a>
                </li>
                <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'o-zbierke.php') !== false) {
                    echo 'desk-active';
                } ?>">
                    <a class="nav-link btn btn-outline-primary" href="../pages/o-zbierke.php"><i
                            class="fa-solid fa-book-open"></i><span class="icon-text"> O Zbierke</span></a>
                </li>
            </ul>
        </div>

        <li class="navbar-brand admin">
            <a class="navbar-brand btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#adminModal">
                <i class="fa-solid fa-user"></i>
            </a>
        </li>
    </div>
</nav>

<div class="bottom-navbar">
    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php') {
        echo 'active';
    } ?>" href="../index.php">
        <i class="fa-solid fa-house"></i>
        <span>Domov</span>
    </a>
    <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'html_page.php') !== false || strpos($_SERVER['REQUEST_URI'], 'html_page_priklad.php') !== false) {
        echo 'active';
    } ?>" href="../pages/html_page.php">
        <i class="fa-brands fa-html5"></i>
        <span>HTML5</span>
    </a>
    <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'css_page.php') !== false || strpos($_SERVER['REQUEST_URI'], 'css_page_priklad.php') !== false) {
        echo 'active';
    } ?>" href="../pages/css_page.php">
        <i class="fa-brands fa-css3-alt"></i>
        <span>CSS3</span>
    </a>
    <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'js_page.php') !== false || strpos($_SERVER['REQUEST_URI'], 'js_page_priklad.php') !== false) {
        echo 'active';
    } ?>" href="../pages/js_page.php">
        <i class="fa-brands fa-js"></i>
        <span>JavaScript</span>
    </a>
    <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'ucitelske_zadania.php') !== false || strpos($_SERVER['REQUEST_URI'], 'pages/zadanie.php') !== false) {
        echo 'active';
    } ?>" href="../pages/ucitelske_zadania.php">
        <i class="fa-solid fa-table-columns"></i>
        <span>Zadania</span>
    </a>
    <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'nastroje.php') !== false) {
        echo 'active';
    } ?>" href="../pages/nastroje.php">
        <i class="fa-solid fa-code"></i>
        <span>Nástroje</span>
    </a>
    <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'o-zbierke.php') !== false) {
        echo 'active';
    } ?>" href="../pages/o-zbierke.php">
        <i class="fa-solid fa-book-open"></i>
        <span>O Zbierke</span>
    </a>
</div>

<?php include '../includes/admin-login.php'; ?>

<script>
    var discordWebhookUrl = "<?php echo getenv('DISCORD_WEBHOOK_URL'); ?>";
</script>
<script src="../js/connection-monitoring.js"></script>