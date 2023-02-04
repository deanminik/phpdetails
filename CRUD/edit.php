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
    if (!isset($_POST["inputUpdate"])) {
        //came from another form (external)
        $id = $_GET["id"];
        $name = $_GET["name"];
        $lastname = $_GET["lastname"];
        $address = $_GET["address"];
    } else {
        //came from php_self form 
        $id = $_POST['id'];
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $address = $_POST["address"];

        $sql = "UPDATE user_data SET ud_name=:theName, ud_lastname=:theLastName, ud_address=:theAddress WHERE id =:theId";
        $result = $conn->prepare($sql);
        $result->execute(array(":theId" => $id, ":theName" => $name,  ":theLastName" => $lastname, ":theAddress" => $address));

        header("Location:index.php");
    }


    ?>
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
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
                        <tr>
                            <td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
                            <td><input type="text" name="name" value="<?php echo $name ?>"></td>
                            <td><input type="text" name="lastname" value="<?php echo $lastname ?>"></td>
                            <td><input type="text" name="address" value="<?php echo $address ?>"></td>
                            <td>
                                <input class="btn btn-warning" type="submit" name="inputUpdate" value="Update">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>


</body>

</html>