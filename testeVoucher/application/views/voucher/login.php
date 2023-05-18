<?php
//Criado em 07/06/2019
//Por Nilson Sena e Bruno Diniz
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Área de Login</title>
    <link rel="stylesheet" href="<?php echo base_url('../assets/bootstrap/css/bootstrap.min.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
</head>

<body>
    
    <?php 
        include('navbar.php');
        include('destroy.php');
    ?>

    <div class="container-fluid">
        <div class="col-md-6 col-md-offset-3 painel-login">
            <form action="cadastro" method="POST" >
                <h2 class="text-center"> Área de Login </h2>
                <div class="form-group col-md-12">
                    <label for="usuario">Usuário:</label>
                    <input name="usuario" class="form-control" type="text" required>
                </div>

                <div class="form-group col-md-12">
                    <label for="senha">Senha:</label>
                    <input name="senha" class="form-control" type="password" required>
                </div>

                <div class="form-group col-md-12">
                    <input type="submit" class="btn btn-large btn-block btn-success" value="Entrar"></button>
                </div>
                
                <div class="col-md-12 text-center">   
                    <?php
                        if(isset($_POST["erro"])) {
                            echo '<span class="alert alert-danger col-md-12">' . $_POST["erro"] . '</span>';
                        }
                    ?>
                </div>
            
            </form>
        </div>
    </div>

</body>

</html>