<?php

//abstraccion y polimorfismo

//CREAMOS LA CLASE ABSTRACTA PRINCIPAL
abstract class Base
{
    // definimos un parametro que solo puede ser absedido por esta clase o otras clases que hereden
    // de ella
    protected $name;

    //creamos un metodo para usarlo desde otras clases
    public function login()
    {
        return "<p>Mi nombre es $this->name desde la clase {$this->getClassName()} <br><p>";
    }

    //creamos otro metodo PERO NO puede ser usado en otras clases
    private function getClassName()
    {
        return get_called_class();
    }
}

//Al heredar de la clase pabre:Base tenemos acceso a el atributo name y el metodo login
class Guest extends Base
{
    protected $name = 'invitado';
}

class User extends Base
{
    public function __construct($_name)
    {
        $this->name = $_name;
    }
}

class Admin extends Base
{
    public function __construct($_name)
    {
        $this->name = $_name;
    }
}

//de esta manera sobrescribimos una clase
$guest = new Guest();
echo $guest->login();

$user = new User('John Moore');
echo $user->login();

$admin = new Admin('Helena');
echo $admin->login();
