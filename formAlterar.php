<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Wesley Games - Alteração de Produtos</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="jquery.mask.js"></script>

    <script>
        $(document).ready(function() {

            $('#preco').mask('000.000.000.000.000,00', {
                reverse: true
            });

        });
    </script>

    <style>
        .navbar {
            margin-bottom: 0;
        }
    </style>




</head>

<body>

    <?php

    session_start();


    if (empty($_SESSION['adm']) || $_SESSION['adm'] != 1) {

        header('location:index.php');
    }


    $id_prod = $_GET['id'];


    include 'conexao.php';
    include 'nav.php';


    $consulta = $conexao->query("SELECT * FROM produtos WHERE id='$id_prod'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC)

    ?>


    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-4 col-sm-offset-4">

                <h2>Alteração de produto</h2>

                <form method="post" action="alterarProduto.php?id=<?php echo $id_prod; ?>" name="alterarProd" enctype="multipart/form-data">

                    <div class="form-group">

                        <label for="nome">Produto</label>
                        <input type="text" name="nome" value="<?php echo $exibe['nome']; ?>" class="form-control" required id="nome">
                    </div>

                    <div class="form-group">


                        <label for="marca">Marca</label>

                        <select class="form-control" name="marca">
                            <option value="XBOX" <?= ($exibe['marca'] == 'XBOX') ? 'selected' : '' ?>>XBOX</option>
                            <option value="PLAYSTATION" <?= ($exibe['marca'] == 'PLAYSTATION') ? 'selected' : '' ?>>PLAYSTATION</option>
                            <option value="OUTROS" <?= ($exibe['marca'] == 'OUTROS') ? 'selected' : '' ?>>OUTROS</option>
                        </select>


                    </div>



                    <div class="form-group">

                        <label for="departamento">Departamento</label>

                        <select class="form-control" name="departamento">
                            <option value="JOGOS" <?= ($exibe['departamento'] == 'JOGOS') ? 'selected' : '' ?>>JOGOS</option>
                            <option value="CONSOLES" <?= ($exibe['departamento'] == 'CONSOLES') ? 'selected' : '' ?>>CONSOLES</option>
                            <option value="ACESSORIOS" <?= ($exibe['departamento'] == 'ACESSORIOS') ? 'selected' : '' ?>>ACESSORIOS</option>
                            <option value="OUTROS" <?= ($exibe['departamento'] == 'OUTROS') ? 'selected' : '' ?>>OUTROS</option>
                        </select>

                    </div>


                    <div class="form-group">

                        <label for="secao">Seção</label>

                        <select class="form-control" name="secao">
                            <option value="JOGOS" <?= ($exibe['secao'] == 'JOGOS') ? 'selected' : '' ?>>JOGOS</option>
                            <option value="CONSOLES" <?= ($exibe['secao'] == 'CONSOLES') ? 'selected' : '' ?>>CONSOLES</option>
                            <option value="ACESSORIOS" <?= ($exibe['secao'] == 'ACESSORIOS') ? 'selected' : '' ?>>ACESSORIOS</option>
                            <option value="OUTROS" <?= ($exibe['secao'] == 'OUTROS') ? 'selected' : '' ?>>OUTROS</option>
                        </select>


                    </div>


                    <div class="form-group">

                        <label for="descricao">Descrição</label>

                        <textarea rows="5" class="form-control" name="descricao"><?php echo $exibe['descricao']; ?></textarea>


                    </div>



                    <div class="form-group">

                        <label for="estoque">Quantidade</label>

                        <input type="number" class="form-control" required name="estoque" value="<?php echo $exibe['estoque']; ?>" id="estoque">

                    </div>



                    <div class="form-group">

                        <label for="preco">Preço</label>

                        <input type="text" class="form-control" required name="preco" value="<?php echo $exibe['preco']; ?>" id="preco">

                    </div>



                    <div class="form-group">

                        <img src="images/<?php echo $exibe['foto1']; ?>" width="100px">

                    </div>
                    <div class="form-group">

                        <label for="foto1">Foto Principal</label>

                        <input type="file" accept="image/*" class="form-control" name="foto1" id="foto1">

                    </div>


                    <div class="form-group">

                        <img src="images/<?php echo $exibe['foto2']; ?>" width="100px">

                    </div>
                    <div class="form-group">

                        <label for="foto2">Foto 2</label>

                        <input type="file" accept="image/*" class="form-control" name="foto2" id="foto2">

                    </div>


                    <div class="form-group">

                        <img src="images/<?php echo $exibe['foto3']; ?>" width="100px">

                    </div>
                    <div class="form-group">

                        <label for="foto3">Foto 3</label>

                        <input type="file" accept="image/*" class="form-control" name="foto3" id="foto3">

                    </div>

                    <button type="submit" class="btn btn-lg btn-default">

                        <span class="glyphicon glyphicon-pencil"> Alterar </span>

                    </button>

                </form>

            </div>
        </div>
    </div>

    <?php include 'footer.html' ?>

</body>

</html>