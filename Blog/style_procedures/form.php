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
        <form action="insert_content.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="inputTitle" class="col-4 col-form-label">Title</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="inputTitle" id="inputTitle" placeholder="Title">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputComment" class="col-4 col-form-label">Comment</label>
                <div class="col-8">
                    <textarea class="form-control" name="inputComment" id="inputComment" rows="3"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputFile" class="col-4 col-form-label">Select an image </label>
                <div class="col-8">
                    <input type="file" name="inputFile" id="inputFile">
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