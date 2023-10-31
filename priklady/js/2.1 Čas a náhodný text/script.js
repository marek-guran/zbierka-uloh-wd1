$(document).ready(function() {
    var countdownInterval;
    var quoteIntervalTime = 10000;

    function getCurrentTime() {
        var now = new Date();
        var timeString = now.toLocaleTimeString('sk-SK');
        $('#current-time').text(timeString);
    }

    function getRandomSentence() {
        var quotes = [
            "HTTP status code 404, známy ako 'Not Found', bol prvýkrát definovaný v roku 1992 v HTTP/1.0 špecifikácii.",
            "HTTP status code 403, 'Forbidden', je často používaný keď server rozumie požiadavku, ale odmieta ju splniť.",
            "HTTP status code 500, 'Internal Server Error', je všeobecná chybová správa, keď server narazí na neočakávanú situáciu a nevie ako pokračovať.",
            "Chybová stránka 404 sa stala ikonou webu. Je to jedna z mála vecí, ktoré spájajú všetkých používateľov internetu.",
            "Chybové kódy HTTP, ako 404, 403 a 500, sú dôležitou súčasťou komunikácie medzi webovými klientmi a servermi."
        ];
        var randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
        $('#quote').text(randomQuote);
        startCountdown();
    }

    function startCountdown() {
        clearInterval(countdownInterval);
        var countdownTime = quoteIntervalTime / 1000;
        $('#countdown').text(countdownTime);
        countdownInterval = setInterval(function() {
            countdownTime--;
            if (countdownTime < 0) {
                clearInterval(countdownInterval);
            } else {
                $('#countdown').text(countdownTime);
            }
        }, 1000);
    }
    setInterval(getCurrentTime, 1000);
    setInterval(getRandomSentence, 10000);

    getCurrentTime();
    getRandomSentence();
});