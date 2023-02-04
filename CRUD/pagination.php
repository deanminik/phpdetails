<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
</head>

<body>
    <?php
    try {
        include("./connection.php");

        $count_registers_per_page_to_show = 3;

        if (isset($_GET['pag'])) { // execute this after press a number pag 
            if ($_GET['pag'] == 1) {
                //If the value I am sharing in the url (?page) is == to 1 
                //Send me to this page
                header("Location:pagination.php");
            } else {
                //If not == to 1, then store the new page number 

                $page = $_GET['pag'];
            }
        } else {
            $page = 1; // the when we load the content for the first time
        }


        $start_from = ($page - 1) * $count_registers_per_page_to_show;

        $sql = "SELECT * FROM PRODUCTOS WHERE SECCIÓN='DEPORTES'";

        $result = $conn->prepare($sql);
        $result->execute(array());

        $numb_rows_from_db = $result->rowCount();

        $pages_total = ceil($numb_rows_from_db / $count_registers_per_page_to_show);
        //ceil function is to delete decimal

        echo "Numbers of registers from de query: " . $numb_rows_from_db . " <br>";
        echo "Show: " . $count_registers_per_page_to_show . " registers per page " . " <br>";
        echo "Show the page: " . $page . "of " . $pages_total . " <br>";



        $limit_sql = "SELECT * FROM PRODUCTOS WHERE SECCIÓN='DEPORTES' LIMIT $start_from, $count_registers_per_page_to_show";
        $result = $conn->prepare($limit_sql);
        $result->execute(array());


        while ($register = $result->fetch(PDO::FETCH_ASSOC)) {

            echo " CÓDIGOARTÍCULO: " . $register["CÓDIGOARTÍCULO"] .
                " SECCIÓN: " . $register["SECCIÓN"] .
                " NOMBREARTÍCULO: " . $register["NOMBREARTÍCULO"] .
                " PRECIO: " . $register["PRECIO"] .
                " FECHA: " . $register["FECHA"] .
                " IMPORTADO: " . $register["IMPORTADO"] .
                " PAÍSDEORIGEN: " . $register["PAÍSDEORIGEN"] . "<br>";
        }

        $result->closeCursor();
    } catch (Exception $e) {
        echo "The line with the error is: " . $e->getLine();
    }

    //-------------------pagination-------------
    for ($i = 1; $i < $pages_total; $i++) {
        echo "<a href='?pag= " . $i . "'>" . $i . "</a>  ";
    }
    ?>
</body>

</html>