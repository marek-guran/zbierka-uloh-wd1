<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <title>Stránka nenájdená (404)</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap-5.3.2.css">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 50px;
            text-align: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .not-found {
            font-size: 68px;
            margin-bottom: 25px;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        button {
            font-size: 24px!important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <p class="not-found"><strong>404</strong></p>
            <h1><strong>Stránka sa nenašla</strong></h1>
            <p>Ospravedlňujeme sa, ale stránka, ktorú hľadáte, sa nenašla. Tento typ chyby sa nazýva "404 error" a
                znamená to, že server nemôže nájsť požadovanú stránku.</p>
            <p>Chyba 404 sa objavila prvýkrát v roku 1992, keď Tim Berners-Lee, tvorca World Wide Webu, navrhol protokol
                HTTP. V tom čase sa však ešte nezobrazovala žiadna špeciálna stránka pre túto chybu.</p>
            <p>Dnes sa stránka 404 používa na informovanie návštevníkov o tom, že stránka, ktorú hľadajú, neexistuje
                alebo sa presunula na inú adresu.
            </p>
                <button class="btn btn-primary" onclick="window.location.href='/';"><strong>DOMOV</strong></button>
        </div>
    </div>
    <script src="../js/bootstrap-5.3.2.js"></script>
</body>

</html>