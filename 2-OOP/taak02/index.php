<?php

class auto {
   public $merk;
   public $kleur;
   public $type;
   public $uitvoering;
   public $brandstof;
}

$nieuweAuto = new auto;
$nieuweAuto->merk = "tesla";
$nieuweAuto->kleur = "Wit";
$nieuweAuto->type = "Model S";
$nieuweAuto->uitvoering = "Model 3";
$nieuweAuto->brandstof = "Elektrisch";
echo $nieuweAuto->merk . " " .$nieuweAuto->kleur . " " . $nieuweAuto->type . " " . $nieuweAuto->uitvoering . " " . $nieuweAuto->brandstof;

$nogEenAndereAuto = new auto;