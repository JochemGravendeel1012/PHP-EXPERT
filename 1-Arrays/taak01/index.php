<?php
$medewerkers = [
    [
      'voornaam' => ' Willem ',
      'achternaam' => ' van Oranje ',
      'functie'  => ' koning '
    ],
    [
      'voornaam' => ' Donald ',
      'achternaam' => ' Trump ',
      'functie'  => ' president '
    ]
  ];

  echo $medewerkers [0]['voornaam'];
  echo $medewerkers [0]['achternaam'];
  echo ' is een '.$medewerkers [0]['functie'] . '<br>';

  echo $medewerkers [1]['voornaam'];
  echo $medewerkers [1]['achternaam'];
  echo ' is een '.$medewerkers [1]['functie'] . '<br>';

  
