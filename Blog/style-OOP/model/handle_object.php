<?php
include_once 'blog_object.php';


class Handle_object
{
    private $connection;
    public function __construct($connection)
    {
        $this->setConnection($connection);
    }

    public function setConnection(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getContentByDate()
    {
        $myarray = array();
        $count = 0;
        $result = $this->connection->query("SELECT * FROM BDBlog.content ORDER BY date_content DESC");

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            $blog = new Blog_object();
            $blog->set_id($row['id_content']);
            $blog->set_title($row['title_content']);
            $blog->set_comment($row['comment_content']);
            $blog->set_image($row['image_content']);
            $blog->set_date($row['date_content']);
             
            //Save this new object in the array in this number of index
            $myarray[$count] = $blog;
            $count++;
        }
        return $myarray;
    }
    public function insertContent(Blog_object $blog){
        $query = "INSERT INTO content (title_content, comment_content, image_content, date_content) VALUES (:title, :comment, :image, :date)";
        $result = $this->connection->prepare($query);
        $result->bindValue(':title', $blog->get_title());
        $result->bindValue(':comment', $blog->get_comment());
        $result->bindValue(':image', $blog->get_image());
        $result->bindValue(':date', $blog->get_date());
        $result->execute();
    }
}
