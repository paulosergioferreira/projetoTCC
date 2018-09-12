<?php 

require_once 'ClienteController.php';
require_once 'VendaController.php';
require_once 'Model.php';
$vdc = new VendaController();
$cc = new ClienteController();


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Vendas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">
    <div class="row form-cadastro">
        <div class="col-md-12">
           <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>COD.VENDA</th>
                    <th>DESTINO</th>
                    <th>TRANSPORTE</th>
                    <th>DIARIA</th>
                    <th>PAGAMENTO</th>
                    <th>CLIENTE</th>
                    <th>PREÇO</th>
                    
                  
                    
                  </tr>
                </thead>

                <?php foreach ($vdc->findAll() as $key => $value) : ?>
                    <tbody>
                    <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->destino; ?></td>
                    <td><?php echo $value->transporte; ?></td>
                    <td><?php echo $value->diaria; ?></td>
                    <td><?php echo $value->tipo; ?></td>
                    <td><?= $cc->find($value->usuarioId)->nome ?></td>
                        <td><?php echo $value->preco; ?></td>
                     
                    </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="col-md-12">
            <a href="Menu.php" class="btn btn-danger btn-block">Voltar</a>
        </div>
    </div>
</div>
</table>
</body>
</html>