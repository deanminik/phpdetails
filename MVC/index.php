<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <h1 style="text-align: center;">Model View Controller</h1>
    </div>
</div>
<?php
try {
   
    // require_once("./controller/controller_products.php");
    require_once("./controller/controller_persons.php");
} catch (\Throwable $th) {
    echo $th;
}



?>