<!doctype html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Minha Loja</title>

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

    session_start();

    if (empty($_SESSION['id_user'])) {
        header('location:formLogon.php');
    }

    include 'conexao.php';
    include 'nav.php';

    $id_user = $_SESSION['id_user'];
    $consultaVenda = $conexao->query("SELECT * from vendas WHERE id_comprador='$id_user' GROUP BY pedido");

    ?>

    <div class="container-fluid text-center">

        <div class="row text-center" style="margin-top: 15px;">
            <h1>Meus Pedidos</h1>
        </div>


        <div class="row" style="margin-top: 15px;">

            <div class="col-sm-1 col-sm-offset-5">
                <h4>Data</h4>
            </div>
            <div class="col-sm-1">
                <h4>Ticket</h4>
            </div>

        </div>

        <?php while ($exibeVenda = $consultaVenda->fetch(PDO::FETCH_ASSOC)) { ?>

            <div class="row" style="margin-top: 15px;">

                <div class="col-sm-1 col-sm-offset-5"> <?php echo date('d/m/Y', strtotime($exibeVenda['data'])); ?> </div>
                <div class="col-sm-1">
                    <a href="ticket.php?ticket=<?php echo $exibeVenda['pedido']; ?>">
                        <?php echo $exibeVenda['pedido']; ?>
                    </a>
                </div>

            </div>
        <?php } ?>

    </div>

    <?php

    include 'footer.html';

    ?>

</body>

</html>