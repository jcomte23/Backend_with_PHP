<?php

class MichiExeption extends Exception{
  function getMichi(){
    return "Meow";
  }
}

class RabbitExeption extends Exception{
  function getRabbit(){
    return "Rabbit";
  }
}

try {
  $exeptionUser = readline("que exeption quieres lanzar?");
  if($exeptionUser == "michi")
    throw new MichiExeption("Michi incorrecto");
  else
    throw new RabbitExeption("Conejo incorrecto");
} catch (MichiExeption $e) {
  $e->getMessage();
  $e->getMichi();
} catch(RabbitExeption $e){
  $e->getMessage();
  $e->getRabbit();
}
