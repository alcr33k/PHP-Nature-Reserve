<?php
    abstract class Animal {
        abstract protected function makeSound();
    }
    class Apa extends Animal {
        private $sound = 'Makak';
        private $name = 'Apa';
        function makeSound() {
            return 'En ' .$this->name . ' säger ' . $this->sound;
        }   
    }
    class Giraff extends Animal {
        private $sound = 'SchloSchloSchlo';                                   
        private $name = 'Giraff';
        function makeSound() {
            return 'En ' .$this->name . ' säger ' . $this->sound;
        }                                 
    }
    class Kokosnöt extends Animal {
        private $sound ='KLA KLO';
        private $name ='Kokosnöt';       
        function makeSound() {
            return 'En ' .$this->name . ' säger ' . $this->sound;
        }                               
    }
    class Tiger extends Animal {
        private $sound = 'Rawr';
        private $name = 'Tiger';
        function makeSound() {
            return 'En ' .$this->name . ' säger ' . $this->sound;
        }   
    }

    $numApor = $_POST["apor"];
    $numGiraffer = $_POST["giraffer"];
    $numTigrar = $_POST["tigrar"];
    $numKokosnötter = $_POST["kokosnötter"];
    $giraff = new Giraff();
    $apa = new Apa();
    $tiger = new Tiger();
    $kokosNöt = new Kokosnöt();
    
    $toAdd = "";
    for($i=0; $i < $numApor; $i++) {
        $toAdd .= '<img src="src/apa.jpg" alt="apa" class="apa" onClick="alert(\''. $apa->makeSound() .'\');">';
    }
    for($i=0; $i < $numGiraffer; $i++) {
        $toAdd .= '<img src="src/giraff.jpg" alt="giraff" class="giraff" onClick="alert(\''. $giraff->makeSound() .'\');">';
    }
    for($i=0; $i < $numTigrar; $i++) {
        $toAdd .= '<img src="src/tiger.jpg" alt="tiger" class="tiger" onClick="alert(\''. $tiger->makeSound() .'\');">';
    }
    for($i=0; $i < $numKokosnötter; $i++) {
        $toAdd .= '<img src="src/kokosnöt.jpg" alt="kokosnöt" class="kokosnöt" onClick="alert(\''. $kokosNöt->makeSound() .'\');">';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="djurbilder">
        <?php echo $toAdd; ?>
    </div>
</body>
</html>