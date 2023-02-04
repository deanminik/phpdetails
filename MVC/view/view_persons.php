<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>List of persons</title>
</head>

<body>


    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($list_persons as $person) : ?>

                            <tr>
                                <td> <?php echo $person['id']; ?></td>
                                <td> <?php echo $person['ud_name']; ?></td>
                                <td> <?php echo $person['ud_lastname']; ?></td>
                                <td> <?php echo $person['ud_address']; ?></td>

                                <td>
                                    <a href="../../CRUD/delete.php?id=<?php echo $person['id']; ?>" type="button" class="btn btn-danger">Delete</a>
                                    <a href="edit.php?id=<?php echo $person['id']; ?>& name=<?php echo $person['ud_name']; ?> & lastname=<?php echo $person['ud_lastname']; ?> & address=<?php echo $person['ud_address']; ?>"><input class="btn btn-warning" type="button" name="inputUpdate" value="Update"></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td></td>
                            <td><input type="text" name="inputName"></input></td>
                            <td><input type="text" name="inputLastname"></input></td>
                            <td><input type="text" name="inputAddress"></input></td>
                            <td>
                                <button type="submit" class="btn btn-success" name="inputInsert">Insert</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <div style="text-align: center;">

        <?php
        // -------------------pagination-------------
        include("./model/pagination.php");
        
        for ($i = 1; $i < $pages_total; $i++) {

            echo "<a href='?pag= " . $i . "'>" . $i . "</a> ";
        }
        ?>
    </div>



</body>

</html>