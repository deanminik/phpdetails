<?php
// require_once 'api/models/Person.php';
// require_once 'api/controllers/personController.php';

//Instead of require many files, we can use the autoload
spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

// Person::show();// Calling like this doesn't because the namespace is not defined 

api\models\Person::show(); // It is a require to use the namespace at the beginning

//So if you have another class with the same name, you can use the namespace 
//to call, and also the class has the same method, with namespace you won't have problems

api\controllers\personController::show();
