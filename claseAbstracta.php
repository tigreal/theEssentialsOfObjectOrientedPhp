<?php
abstract class auto 
{
    // las clases abstractas tienen metodos abstractos
    // las clases abstractas comprometen a que se escriba el codigo de los metodos abstractos en las clases hijas
    // las clases abstractas tambien pueden tener propiedades y las propiedades no puedes ser abastractas 
    // las clases abstractas pueden tener metodos no abastactos con su codig pero no llevan la palabra por delante abstract
    // los metodos abstractos llevan por delante la palabra abstract esto quiere decir que no tienen cuerpo o codigo en su interior asi que no llevan corchetes solo tendrian la definicion con parentesis y sus variables y al final punto y coma abstract function xfuncion($valor1,$valor2);
    // este es el concepto de abstaccion, que tambien se puede ver mediante el uso de interfaces
    protected $volumenDelTanque;
    public function colocarVolumentDelTanque($volumen)
    {
        $this->volumenDelTanque=$volumen;
    }

    abstract public function calcularMillasEnTanqueLLeno();
    

}
class honda extends auto{
    public function calcularMillasEnTanqueLLeno()
    {
        $millas=$this->volumenDelTanque * 30;
        return $millas;
    }


} 
class toyota extends auto{
    public function calcularMillasEnTanqueLLeno()
    {
        $millas=$this->volumenDelTanque*33;
        return $millas;
    }
    public function getColor()
    {
        return "beish";
    }
}
$toyota1 = new toyota();
$toyota1->colocarVolumentDelTanque(10);
print($toyota1->calcularMillasEnTanqueLLeno()." ");
print($toyota1->getColor());




?>