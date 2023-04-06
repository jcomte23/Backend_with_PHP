<?php

namespace App;

class Post
{
    protected $comments=[];

    public function addComment(Comment $_comment)
    {
        $this->comments[]=$_comment;
    }

    public function countComments()
    {
        return count($this->comments);
    }

    public function getComments()
    {
        return $this->comments;
    }
}
