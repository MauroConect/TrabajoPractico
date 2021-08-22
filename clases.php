<?php
//definir una clase, molde para crear objetos con caracteristicas parecidas

class Coche {

    //atributos o propiedades (variables)
    public $color="rojo";
    public $marca="ferrari";
    public $modelo="aventador";
    public $velocidad=300;

    //metodos, acciones que hace el objeto (funciones)

    public function getColor () {
        //buscar en la clase la propiedad x
        return $this->color;

    }

    //metodo para darle color
    public function setColor ($color) {
        $this->$color = $color;
    }

    //velocidad

    public function getVelocidad () {

        return $this->velocidad;

    }
    
    

}

//crear clase choche

$auto = new Coche ();

//var_dump ($auto);

//usar los metodos

echo $auto->getVelocidad();

?>