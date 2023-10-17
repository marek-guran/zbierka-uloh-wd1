<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand ml-3" href="../index.php">Zbierka Úloh - WD1</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto" style="margin-right: 0px!important;">
                <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php') {
                    echo 'desk-active';
                } ?>">
                    <a class="nav-link btn btn-outline-primary" href="../index.php">
                        <i class="fa-solid fa-house"></i><span class="icon-text"> Domov</span>
                    </a>
                </li>
                <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'html_page.php') !== false) {
                    echo 'desk-active';
                } ?>">
                    <a class="nav-link btn btn-outline-primary" href="../pages/html_page.php"><i
                            class="fa-brands fa-html5"></i><span class="icon-text"> HTML5</span></a>
                </li>
                <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'css_page.php') !== false) {
                    echo 'desk-active';
                } ?>">
                    <a class="nav-link btn btn-outline-primary" href="../pages/css_page.php"><i
                            class="fa-brands fa-css3-alt"></i><span class="icon-text"> CSS3</span></a>
                </li>
                <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'js_page.php') !== false) {
                    echo 'desk-active';
                } ?>">
                    <a class="nav-link btn btn-outline-primary" href="../pages/js_page.php"><i
                            class="fa-brands fa-js"></i><span class="icon-text"> JavaScript</span></a>
                </li>
                <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'studentske_prace.php') !== false) {
                    echo 'desk-active';
                } ?>">
                    <a class="nav-link btn btn-outline-primary" href="../pages/studentske_prace.php"><i
                            class="fa-solid fa-graduation-cap"></i><span class="icon-text"> Práce</span></a>
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
                            class="fa-solid fa-file-lines"></i><span class="icon-text"> O Zbierke</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="bottom-navbar">
    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php') {
        echo 'active';
    } ?>" href="../index.php">
        <i class="fa-solid fa-house"></i>
        <span>Domov</span>
    </a>
    <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'html_page.php') !== false) {
        echo 'active';
    } ?>" href="../pages/html_page.php">
        <i class="fa-brands fa-html5"></i>
        <span>HTML5</span>
    </a>
    <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'css_page.php') !== false) {
        echo 'active';
    } ?>" href="../pages/css_page.php">
        <i class="fa-brands fa-css3-alt"></i>
        <span>CSS3</span>
    </a>
    <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'js_page.php') !== false) {
        echo 'active';
    } ?>" href="../pages/js_page.php">
        <i class="fa-brands fa-js"></i>
        <span>JavaScript</span>
    </a>
    <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'studentske_prace.php') !== false) {
        echo 'active';
    } ?>" href="../pages/studentske_prace.php">
        <i class="fa-solid fa-graduation-cap"></i>
        <span>Práce</span>
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
        <i class="fa-solid fa-file-lines"></i>
        <span>O Zbierke</span>
    </a>
</div>