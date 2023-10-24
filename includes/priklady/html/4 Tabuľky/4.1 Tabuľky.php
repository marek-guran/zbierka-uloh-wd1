<?php
if (isset($_GET['pr'])) {
    $jsonData = file_get_contents('../includes/priklady/zadania.json');

    if ($jsonData !== false) {
        $data = json_decode($jsonData, true);

        $prValue = $_GET['pr'];

        $parts = explode('/', $prValue);
        $prValue = end($parts);

        if (isset($data['HTML'])) {
            foreach ($data['HTML'] as $category) {
                foreach ($category['items'] as $item) {
                    if ($item['nazov'] === $prValue) {
                        $nazov = $item['nazov'];
                        $zadanie = $item['zadanie'];
                        $htmlPath = $item['html'];
                        $imagePath = $item['image'];
                        $videoPath = $item['video'];
                        $categoryName = $category['category'];
                        $categoryItems = $category['items'];
                        break 2;
                    }
                }
            }
        }
    }
}
?>

<?php if (isset($categoryItems) && count($categoryItems) > 1): ?>
    <?php include '../includes/menu-prikladov.php'; ?>
<?php endif; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="priklad card-text">
                <?php
                if (isset($nazov)) {
                    echo "<h2>$nazov</h2>";
                }
                ?>
                <?php
                if (isset($zadanie)) {
                    echo "<p>$zadanie</p>";
                }
                ?>
            </div>
        </div>
        <?php if (!empty($imagePath) || !empty($videoPath)): ?>
            <div class="col-md-6">
                <?php if (!empty($imagePath)): ?>
                    <div class="img-container">
                        <a href='<?php echo $imagePath ?>' target='_blank'>
                            <img src='<?php echo $imagePath ?>' alt='Zadanie príkladu' class='img-zadania'>
                            <div class='img-overlay'>
                                <i class='fas fa-image'></i>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if (!empty($videoPath)): ?>
                    <div class="video-container">
                        <video src='<?php echo $videoPath ?>' alt='Video príkladu' controls></video>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="code-wrapper container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <?php
    if (isset($htmlPath)) {
        echo "<a href='$htmlPath' target='_blank'>";
        echo "<button class='btn btn-primary' style='margin-left: 5px;'>Výsledná Stránka</button>";
        echo "</a>";
        echo "<pre id='code' style='display: none;' class='code'>" . htmlspecialchars(file_get_contents($htmlPath)) . "</pre>";
    } else {
        echo 'File not found or unable to read.';
    }
    ?>
</div>