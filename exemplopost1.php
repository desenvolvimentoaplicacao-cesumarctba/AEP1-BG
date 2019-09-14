<html>
<head>
    <title>AEP 1</title>
</head>
<body>
    <div>
        <?php
            $nome=$_POST["Nome"];
            $ano=$_POST["ano"];
            $idade=date("Y")-$ano;
            echo "$nome tem $idade anos";
        ?>
        <a href="exemplopost.html">Voltar</a>
    </div>
</body>
</html>