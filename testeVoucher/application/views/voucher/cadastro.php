<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="<?php echo base_url('../assets/bootstrap/css/bootstrap.min.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <?php 
        include('navbar.php');
    ?>
    <div class="container-fluid">
        <div class="col-md-6 col-md-offset-3 painel-cadastro">
            <form action="geraVoucher" method="POST" >
                <h2 class="text-center"> Cadastro para uso de Vouchers </h2>
                <div class="form-group col-md-12">
                    <label for="nome">Nome:</label>
                    <input name="nome" class="form-control" type="text" required>
                </div>
               
                <div class="form-group col-md-12">
                    <label for="CPF">CPF:</label>
                    <input name="CPF" class="form-control" type="text" required>
                </div>

                <div class="form-group col-md-12">
                    <label for="Telefone">Telefone:</label>
                    <input name="Telefone" class="form-control" type="text" required>
                </div>

                <div class="form-group col-md-12">
                    <input type="submit" class="btn btn-large btn-block btn-success" value="Gerar Voucher"></button>
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