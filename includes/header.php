<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand ml-3" href="../index.php">Zbierka Úloh - WD1</a>

        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto" style="margin-right: 0px!important;">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" href="../index.php">Domov</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" href="../pages/html_page.php">HTML5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" href="../pages/css_page.php">CSS3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" href="../pages/js_page.php">JavaScript</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" href="../pages/teoria.php">Teória</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" href="../pages/nastroje.php">Nástroje</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" href="../pages/o-zbierke.php">O Zbierke</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
  var discordWebhookUrl = "<?php echo getenv('DISCORD_WEBHOOK_URL'); ?>";
</script>
<script src="../js/connection-monitoring.js"></script>