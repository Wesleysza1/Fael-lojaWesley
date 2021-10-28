<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Wesley Games - Alteração Realizada </title>

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

    <script type='text/javascript'>
        alert('Produto alterado com sucesso!!')
    </script>

    <script type='text/javascript'>
        location.href = 'lista.php'
    </script>

    <?php include 'footer.html' ?>




</body>

</html>