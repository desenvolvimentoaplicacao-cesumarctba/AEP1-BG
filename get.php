<html>
<head>
    <title>AEP 1</title>
</head>
<body>
    <div>
        <?php
            $nome=$_GET["nome"];
            $ano=$_GET["ano"];
            $idade=date("Y")-$ano;
            echo "$nome tem $idade anos";
        ?>
        <a href="get.html">Voltar</a>
    </div>
</body>
</html>