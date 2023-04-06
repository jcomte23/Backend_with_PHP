<?php

interface Search
{
    public function all();
}

class Users implements Search
{
    public function all(){
        return "obtenemos todos los usuarios en xml";
    }
}

class Posts implements Search
{
    public function all(){
        return "obtenemos todos los posts en JSON";
    }
}

$users=new Users();
echo $users->all();
echo "<br>";
$post=new Posts();
echo $post->all();

