<?php
class user{
    protected $nombre;
    private $apellido;
 
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    

}
class Admin extends user
{
    public function expressYourRole()
    {
        return "Admin";
    }
    public function diHola()
    {
        return "hola admin ". $this->getNombre();
    }
}

$admin1 =new Admin("Osmar");
print($admin1->diHola());

?>
