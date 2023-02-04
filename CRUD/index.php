<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>CRUD</title>
</head>

<body>
    <?php
    include("./connection.php");
    //---------------pagination start

    $count_registers_per_page_to_show = 3;

    if (isset($_GET['pag'])) { // execute this after press a number pag 
        if ($_GET['pag'] == 1) {
            //If the value I am sharing in the url (?page) is == to 1 
            //Send me to this page
            header("Location:index.php");
        } else {
            //If not == to 1, then store the new page number 

            $page = $_GET['pag'];
        }
    } else {
        $page = 1; // the when we load the content for the first time
    }


    $start_from = ($page - 1) * $count_registers_per_page_to_show;

    $sql = "SELECT * FROM user_data";

    $result = $conn->prepare($sql);
    $result->execute(array());

    $numb_rows_from_db = $result->rowCount();

    $pages_total = ceil($numb_rows_from_db / $count_registers_per_page_to_show);
    //ceil function is to delete decimal

    //-------------------pagination end

    $stmt = $conn->query("SELECT * FROM user_data LIMIT $start_from, $count_registers_per_page_to_show");

    //Now we need to store our result set in an object array 

    $registers = $stmt->fetchAll(PDO::FETCH_OBJ); //Our objects Array

    if (isset($_POST["inputInsert"])) {
        //if you have pushed the input with the name inputInsert, then do this ->
        $name = $_POST["inputName"];
        $lastname = $_POST["inputLastname"];
        $address = $_POST["inputAddress"];

        $sql = "INSERT INTO user_data (ud_name, ud_lastname, ud_address) VALUES (:name, :lastname, :address)";
        $result = $conn->prepare($sql);
        $result->execute(array(":name" => $name, ":lastname" => $lastname, ":address" => $address));
        header("Location:index.php");
    }

    ?>
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

                        <?php foreach ($registers as $person) : ?>

                            <tr>
                                <!-- $person->id calling an object with its property  PDO::FETCH_OBJ-->
                                <!-- $person['id']; calling an value using a index ASSOC PDO::FETCH_ASSOC-->
                                <td><?php echo $person->id ?></td>
                                <td><?php echo $person->ud_name ?></td>
                                <td><?php echo $person->ud_lastname ?></td>
                                <td><?php echo $person->ud_address ?></td>

                                <td>
                                    <a href="delete.php?id=<?php echo $person->id ?>" type="button" class="btn btn-danger">Delete</a>
                                    <a href="edit.php?id=<?php echo $person->id ?>& name=<?php echo $person->ud_name ?> & lastname=<?php echo $person->ud_lastname ?> & address=<?php echo $person->ud_address ?>"><input class="btn btn-warning" type="button" name="inputUpdate" value="Update"></a>
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
        //-------------------pagination-------------
        for ($i = 1; $i < $pages_total; $i++) {

            echo "<a href='?pag= " . $i . "'>" . $i . "</a> ";
        }
        ?>
    </div>

</body>

</html>