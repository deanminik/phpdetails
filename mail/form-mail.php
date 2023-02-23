<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <form name="contact-form" method="post" action="send-mail.php">
            <div class="mb-3 row">
                <label for="inputName" class="col-4 col-form-label">Name</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputLastname" class="col-4 col-form-label">Lastname</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="inputLastname" id="inputLastname" placeholder="Last name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputMail" class="col-4 col-form-label">e-mail</label>
                <div class="col-8">
                    <input type="mail" class="form-control" name="inputMail" id="inputMail" placeholder="mail@gmail.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputMail" class="col-4 col-form-label">Phone number</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="inputPhone" id="inputPhone" placeholder="5555555">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>