<html>
    <head>
        <title>Celular</title>
    </head>
    <body>
    <pre>
        <?php
            require_once 'celular.php';
            
            $c1= new Celular;
            $c1->ligarcelular();
            $c1->fazerligacao();
            $c1->encerrarligacao();
            //$c1->maisVolume();
            $c1->desmutar();
            $c1->desligarcelular();
            print_r($c1);

        ?>
    </pre>
    </body>
</html>