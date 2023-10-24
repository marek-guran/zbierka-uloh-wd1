<div class="sidebar" id="mySidebar">
    <h2><strong>HTML5</strong></h2>
    <div class="sidebar-container">
        <ul class="nav flex-column side-menu">
            <li class="nav-item">
                <a class="nav-link" href="?pr=domov">Domov</a>
            </li>
            <?php
            // Define the directory path
            $directoryPath = '../includes/priklady/html/';

            // Get the list of directories in the specified path
            $folders = array_filter(glob($directoryPath . '*'), 'is_dir');

            // Sort the folders based on the number in their names as a float
            usort($folders, function($a, $b) {
                $aNumber = floatval(preg_replace('/[^0-9\.]/', '', basename($a)));
                $bNumber = floatval(preg_replace('/[^0-9\.]/', '', basename($b)));
                return $aNumber - $bNumber;
            });

            // Loop through the folders and generate menu items
            foreach ($folders as $folder) {
                $folderName = basename($folder);
                $firstPhpFile = findFirstPhpFile($folder);
                
                if ($firstPhpFile) {
                    $fileName = basename($firstPhpFile, ".php"); // Remove the .php extension
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="?pr=' . $folderName . '/' . $fileName . '">' . $folderName . '</a>';
                    echo '</li>';
                }
            }

            // Function to find the first PHP file in a folder
            function findFirstPhpFile($folder) {
                $files = glob($folder . '/*.php');
                return (count($files) > 0) ? $files[0] : null;
            }
            ?>
        </ul>
    </div>
    <button id="sidebarToggle" class="btn btn-dark">
        <i class="fas fa-arrow-right"></i>
    </button>
</div>