<div class="navigation mt-3" role="group" aria-label="Button Group">
    <?php
    $callingFilePath = debug_backtrace()[0]['file'];
    $directoryPath = dirname($callingFilePath) . '/';

    $phpFiles = array_filter(glob($directoryPath . '*.php'), 'is_file');

    sort($phpFiles);

    foreach ($phpFiles as $phpFile) {
        $fileName = basename($phpFile, '.php');
        $folderName = basename(dirname($phpFile));
        $active = '';
        if (isset($_GET['pr']) && $_GET['pr'] == $folderName . '/' . $fileName) {
            $active = ' active';
        }
        echo '<a href="?pr=' . $folderName . '/' . $fileName . '" class="btn btn-primary btn-sm btn-group-toggle' . $active . '" style="margin-right: 2px; margin-left: 2px">' . $fileName . '</a>';
    }
    ?>
</div>
