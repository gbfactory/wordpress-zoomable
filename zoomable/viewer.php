<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Visualizza Immagine</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <div id="openseadragon1">
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/openseadragon/2.4.1/openseadragon.min.js"></script>

    <script type="text/javascript">
        var viewer = OpenSeadragon({
            id: "openseadragon1",
            prefixUrl: "https://cdnjs.cloudflare.com/ajax/libs/openseadragon/2.4.1/images/",
            tileSources: ["./unzip.php?id=<?= $_GET['id'] ?>&file="],
            autoHideControls: false,
        });
    </script>
</body>

</html>