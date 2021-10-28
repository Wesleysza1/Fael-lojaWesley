<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Wesley Games - Logon</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
        .navbar {
            margin-bottom: 0;
        }
    </style>


</head>

<body>

    <?php

    include 'conexao.php';
    include 'nav.php';

    ?>

    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 text-center">

                <h2>Muito Obrigado pela Confiança!!</h2>
                <h4>Sua compra foi registrada, o número do pedido é:<strong> <?php echo $ticket ?> </strong></h4>

                <a href="index.php" class="btn btn-block btn-info" role="button">Retornar à Loja</a>



            </div>
        </div>
    </div>

    <?php include 'footer.html' ?>




</body>

</html>