<?php
// las interfaces pueden tener metodos abstractos y no metodos definidos
// las interfaces pueden tener constantes pero no variables concretas
// los metodos abstractos de las interfaces deben definirse en las clases hijas
// todos los metodos abstractos de las interfaces deben estar en el ambito publico, quiere decir que todos los metodos deben llevar el prefijo public
// una interface puede implementarse mas de una vez es la solicion para usar la herencia multiple a diferencia de una clase abstract que se puede heredar una sola vez

/*




*/

interface auto{
    public function colocarModelo($modelo);
    public function obtenerModelo();
    
    
}
interface vehiculo{
    public function colocarRuedas($bool);
    public function obtenerRuedas();
    
    
}
class miniAuto implements auto, vehiculo{

    private $modelo;
    private $tieneRueda;
    public function colocarModelo($modelo)
    {
        $this->modelo=$modelo;
    }
    public function obtenerModelo()
    {
        return $this->modelo;
    }
    public function colocarRuedas($bool)
    {       
        $this->tieneRueda=$bool;
    }
    public function obtenerRuedas()
    {
        return ($this->tieneRueda)?"tiene rueda":"no tiene rueda";
    }

}
