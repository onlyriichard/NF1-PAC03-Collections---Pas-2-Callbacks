<?php
abstract class Observable {

  private $observers = array();

  public function addObserver(Observer & $observer) {
         array_push($this->observers, $observer);
  }

  public function notifyObservers() {
         for ($i = 0; $i < count($this->observers); $i++) {
                 $widget = $this->observers[$i];
                 $widget->update($this);
         }
     }

//Model 2

  private $observers2 = array();


     public function addObserver2(Observer & $observer) {
         array_push($this->observers2, $observer);
  }

  public function notifyObservers2() {
         for ($i = 0; $i < count($this->observers2); $i++) {
                 $widget = $this->observers2[$i];
                 $widget->update($this);
         }
     }

//Model 3
    private $observers3 = array();


     public function addObserver3(Observer & $observer) {
       array_push($this->observers3, $observer);
     }

     public function notifyObservers3() {
       for ($i = 0; $i < count($this->observers3); $i++) {
         $widget = $this->observers3[$i];
         $widget->update($this);
       }
    }
}


class DataSource extends Observable {

  private $names;
  private $prices;
  private $years;

  function __construct() {
         $this->names = array();
         $this->prices = array();
         $this->years = array();
  }

  public function addRecord($name, $price, $year) {
         array_push($this->names, $name);
         array_push($this->prices, $price);
         array_push($this->years, $year);
         $this->notifyObservers();
  }

  public function getData() {
         return array($this->names, $this->prices, $this->years);
  }
}

//Model 2

class DataSourceRichard extends Observable {

  private $nombre;
  private $apellidos;
  private $fechaNacimiento;
  private $curso;
  private $telefono;

  function __construct() {
         $this->nombre = array();
         $this->apellidos = array();
         $this->fechaNacimiento = array();
         $this->curso = array();
        $this->telefono = array();
  }

  public function addRecord2($name, $surname, $birthDate, $class, $phone) {
         array_push($this->nombre, $name);
         array_push($this->apellidos, $surname);
         array_push($this->fechaNacimiento, $birthDate);
         array_push($this->curso, $class);
         array_push($this->telefono, $phone);
         $this->notifyObservers2();
  }

  public function getData() {
         return array($this->nombre, $this->apellidos, $this->fechaNacimiento, $this->curso, $this->telefono);
  }
}


//Model 3

class DataSourceMenu extends Observable {

  private $ingredient;
  private $pes;
  private $calories;

  function __construct() {
         $this->ingredient = array();
         $this->pes = array();
         $this->calories = array();
  }

  public function addRecord3($ingredients, $peso, $calor) {
         array_push($this->ingredient, $ingredients);
         array_push($this->pes, $peso);
         array_push($this->calories, $calor);
         $this->notifyObservers3();
  }

  public function getData() {
         return array($this->ingredient, $this->pes, $this->calories);
  }
}

?>
