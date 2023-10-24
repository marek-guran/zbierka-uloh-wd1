<?php
function listFolderFiles($dir, $root) {
    $ffs = scandir($dir);
    echo '<div class="row">';
    $folders = array();
    foreach ($ffs as $ff) {
        if ($ff != '.' && $ff != '..' && $ff != 'domov.php') {
            if (is_dir($dir . '/' . $ff)) {
                $foldername = preg_replace('/^(\d+\.\d+)\s+(.*)$/', '$1 $2', $ff); // Remove decimal from start of folder name
                echo '<div class="col-md-2"><h2>' . $foldername . '</h2>';
                listFolderFiles($dir . '/' . $ff, $root);
                echo '</div>';
            } else {
                $extension = pathinfo($ff, PATHINFO_EXTENSION);
                if ($extension == 'php') {
                    $filename = pathinfo($ff, PATHINFO_FILENAME);
                    $filepath = ltrim(str_replace($root, '', $dir) . '/' . $filename, '/'); // Remove first slash
                    $active = '';
                    if (isset($_GET['pr']) && $_GET['pr'] == $filename) {
                        $active = ' class="active"';
                        setcookie('active-pr', $filepath, time() + 3600, '/');
                    }
                    echo '<p><a href="?pr=' . $filepath . '"' . $active . '>' . $filename . '</a></p>';
                } else {
                    echo '<p>' . $ff . '</p>';
                }
            }
        }
    }
    echo '</div>';
}

$root = realpath('../includes/priklady/html/');
echo '<div class="container">';
listFolderFiles($root, $root);
echo '</div>';
?>