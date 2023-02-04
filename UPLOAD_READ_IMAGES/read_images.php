
<body>
    <?php require_once('connection_db.php');
    $stmt = $conn->prepare('SELECT * FROM PRODUCTOS WHERE CÓDIGOARTÍCULO = "AR01"');
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $route = $row['FOTO'];
    }

    echo $route;

    $conn = null;
    ?>
    <div>
        <img src="/UPLOAD_IMAGES/images/<?php echo $route; ?>" alt="">
    </div>
</body>

</html>