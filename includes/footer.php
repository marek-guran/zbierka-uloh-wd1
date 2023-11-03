<link rel="stylesheet" href="/fonts/fontawesome-free-6.4.2-web/css/all.css">
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <button class="btn btn-primary" style="margin-bottom: 5px;" onclick="window.open('http://status.wd1.site', '_blank')">
                    <i class="fa-solid fa-heart-pulse"></i> Status
                </button>
                <p><i class="fa-regular fa-copyright"></i><strong>
                        <?php echo date("Y"); ?> Marek Guráň
                    </strong>
                </p>
            </div>
        </div>
    </div>
</footer>

<script>
    function checkZavolaj() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    var url = data.url;
                    var timestamp = new Date(data.timestamp);
                    var now = new Date();
                    var diff = (now - timestamp) / 1000;

                    if (diff <= 10 && url !== window.location.href) {
                        var message = "Vyučujúci vás volá na stránku. Presmerovať?";
                        var confirmed = window.confirm(message);
                        if (confirmed) {
                            window.location.href = url;
                        }
                    }
                }
            }
        };
        xhr.open("GET", "/zavolaj.json", true);
        xhr.send();
    }

    setInterval(checkZavolaj, 5000);
</script>