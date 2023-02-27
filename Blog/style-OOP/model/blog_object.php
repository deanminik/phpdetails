<?php

// Create objects 

class Blog_object
{
    private $id;
    private $title;
    private $comment;
    private $image;
    private $date;


    public function get_id()
    {
        return $this->id;
    }
    public function set_id($id)
    {
        $this->id = $id;
    }
    public function get_title()
    {
        return $this->title;
    }
    public function set_title($title)
    {
        $this->title = $title;
    }
    public function get_comment()
    {
        return $this->comment;
    }
    public function set_comment($comment)
    {
        $this->comment = $comment;
    }
    public function get_image()
    {
        return $this->image;
    }
    public function set_image($image)
    {
        $this->image = $image;
    }
    public function get_date()
    {
        return $this->date;
    }
    public function set_date($date)
    {
        $this->date = $date;
    }
}
