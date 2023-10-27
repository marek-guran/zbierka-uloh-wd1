<div class="sidebar" id="mySidebar">
    <h2><strong>JavaScript</strong></h2>
    <div class="sidebar-container">
        <ul class="nav flex-column side-menu">
            <li class="nav-item">
                <a class="nav-link<?php if (!isset($_GET['pr'])) { echo ' active'; } ?>" href="../pages/js_page.php">Domov</a>
            </li>
            <?php
            $host_menu = 'zbierka-db';
            $port_menu = 3306;
            $username_menu = 'admin';
            $password_menu = getenv('TEACHER_PASSWORD');
            $database_menu = 'zbierka';

            $connection_menu = new mysqli($host_menu, $username_menu, $password_menu, $database_menu, $port_menu);

            if ($connection_menu->connect_error) {
                die('Connection failed: ' . $connection_menu->connect_error);
            }

            $stmt_menu = $connection_menu->prepare("SELECT kategoria, MIN(nazov) FROM JS GROUP BY kategoria ORDER BY CAST(kategoria AS UNSIGNED), kategoria");
            $stmt_menu->execute();
            $stmt_menu->bind_result($category_menu, $name_menu);
            while ($stmt_menu->fetch()) {
                $active_menu = '';
                if (isset($_GET['pr']) && $_GET['pr'] == $category_menu . '/' . $name_menu) {
                    $active_menu = ' active';
                }
                echo '<li class="nav-item">';
                echo '<a class="nav-link' . $active_menu . '" href="../pages/js_page_priklad.php?pr=' . $name_menu . '">' . $category_menu . '</a>';
                echo '</li>';
            }
            $stmt_menu->close();
            ?>
        </ul>
    </div>
    <button id="sidebarToggle" class="btn btn-dark">
        <i class="fas fa-arrow-right"></i>
    </button>
</div>