<html>
<head>
    <title>AEP 1</title>
</head>
<body>
    <div>
        <?php
            $nome=$_POST["Nome"];
            $ano=$_POST["ano"];
            $sexo=$_POST["sexo"];
            $idade=date("Y")-$ano;
            echo "$nome e $sexo e tem $idade anos";
        ?>
        <a href="post.html">Voltar</a>
    </div>
</body>
</html>