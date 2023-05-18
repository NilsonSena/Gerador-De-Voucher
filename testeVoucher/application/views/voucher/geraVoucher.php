<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vouchers</title>
    <link rel="stylesheet" href="<?php echo base_url('../assets/bootstrap/css/bootstrap.min.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
    <style type="text/css">
        html { text-align: center }
        p {font-size: 30px}
    </style>
<body>

    <?php 
        include('navbar.php');
    ?>
    <div class="container">
        <table  class="table">
            <tr>
                <p><b>Código do Voucher</b></p>
            </tr>
            <br>
            <br>
            <tr>
                <p style="color: red"> <b><?=$voucher; ?></b></p>
            </tr>
            <br>
            <br>
            <tr>
                <td></td>
                <th>O Voucher é válido por duas horas a partir da data e horário  <?=$horario; ?></th>
            </tr>
        </table>
        <?php
            print_r("Se deseja gerar outro Voucher clique <a href=./Cadastro>Aqui</a>");
        ?>
    </div>

</body>

</html>