<?php

//namespaces: Are useful to avoid collisions because you named a file with same name of another file

namespace Deandev\Notes\models;


use Deandev\Notes\lib\Database;



use PDO;



class Note extends Database
{

    private string $uuid;

    public function __construct(private string $title, private string $content)
    {
        parent::__construct(); //instantiate the database

        $this->uuid = uniqid(); // uniqid() is to generate to create a random value
    }

    public function createNote()
    {
        /*
        Placeholders (:) or (?) in PHP with SQL PDO are used to represent values in a SQL statement and 
        are used to prevent SQL injection attacks. Placeholders can be represented by a question
         mark (?) or a named parameter (such as :name) in the SQL statement

         NOW(): Now is a sql function to generate the currently date and time. Example: SELECT NOW(); output 2023-04-29 15:51:55
        */
        $query = $this->connect()->prepare("INSERT INTO notes (uuid, title, content, updated ) VALUES(:uuid,:title,:content, NOW())");

        //Part of the placeholder (:) to work so 'title' makes reference to :title 
        $query->execute(['title' => $this->title, 'uuid' => $this->uuid, 'content' => $this->content]);
    }

    public function updateNote()
    {
        $query = $this->connect()->prepare("UPDATE notes SET title = :title, content = :content, updated = NOW() WHERE uuid = :uuid ");
        $query->execute(['title' => $this->title, 'uuid' => $this->uuid, 'content' => $this->content]);
    }

    //static to call the method without an object created _construct(), just calling the class 
    public static function get($id)
    {
        $db = new Database();
        $query = $db->connect()->prepare("SELECT * FROM notes WHERE uuid = :id");
        $query->execute(['id' => $id]);
        $record = $query->fetch(PDO::FETCH_ASSOC);
        if (!$record) {
            return null;
        }
        return Note::createFromArray($record);
    }
    public static function getAll()
    {
        $notes = [];

        // Calling Database from here because if we want to call this method without an object, and another reason, we cannot use $this
        $db = new Database();
        $query = $db->connect()->query("SELECT * FROM notes");

        while ($record = $query->fetch(PDO::FETCH_ASSOC)) {
            $note = Note::createFromArray($record);
            array_push($notes, $note);
        }


        return $notes;
    }
    public static function createFromArray($arr): Note
    {
        //This function will create a new note
        $note = new Note($arr['title'], $arr['content']);
        $note->setUUID($arr['uuid']);
        return $note;
    }
    public function getUUID()
    {
        return $this->uuid;
    }
    public function setUUID($value)
    {
        $this->uuid = $value;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle($value)
    {
        $this->title = $value;
    }
    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent($value)
    {
        $this->content = $value;
    }
}
