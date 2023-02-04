<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>List of products</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">CÓDIGO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">SECCIÓN</th>
                <th scope="col">PRECIO</th>
                <th scope="col">FECHA</th>
                <th scope="col">IMPORTADO</th>
                <th scope="col">PAÍS DE ORIGEN</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_products as $item) : ?>

                <tr>
                    <!-- <th scope="row">1</th> -->
                    <td> <?php echo $item['CÓDIGOARTÍCULO']; ?></td>
                    <td> <?php echo $item['NOMBREARTÍCULO']; ?></td>
                    <td> <?php echo $item['SECCIÓN']; ?></td>
                    <td> <?php echo $item['PRECIO']; ?></td>
                    <td> <?php echo $item['FECHA']; ?></td>
                    <td> <?php echo $item['IMPORTADO']; ?></td>
                    <td> <?php echo $item['PAÍSDEORIGEN']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>

</html>