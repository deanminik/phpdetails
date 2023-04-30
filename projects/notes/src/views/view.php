<?php

use Deandev\Notes\models\Note;

if (count($_POST) > 0) {
    //update 
    $title = $_POST['title'];
    $content = $_POST['content'];
    $uuid = $_POST['id'];

    $note = Note::get($uuid);
    $note->setTitle($title);
    $note->setContent($content);

    $note->updateNote();


} else if (isset($_GET['id'])) {

    $note = Note::get($_GET['id']);
} else {
    header('Location: http://localhost:3000/projects/notes/?view=home');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>

<body>
    <h1>View</h1>
    <?php if ($note) : ?>
        <form action="?view=create" method="POST">
            <input type="text" name="title" id="" value="<?php echo $note->getTitle() ?>">
            <input type="hidden" name="id" value="<?php echo $note->getUUID() ?>">
            <textarea name="content" id="" cols="30" rows="10"><?php echo $note->getContent() ?></textarea>
            <input type="submit" value="Create note">
        </form>
    <?php else : ?>
        <p>Note not found</p>
    <?php endif; ?>
</body>

</html>