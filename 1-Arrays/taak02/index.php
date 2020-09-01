<?php
$medewerkers = [
    [
      'voornaam' => 'Willem',
      'achternaam' => 'van Oranje',
      'functie'  => 'koning'
    ],
    [
      'voornaam' => 'Donald',
      'achternaam' => 'Trump',
      'functie'  => 'president'
    ],
    [
      'voornaam' => 'Homer',
      'achternaam' => 'Simpson',
      'functie'  => 'fabrieksarbeider'
    ],
    [
      'voornaam' => 'Johan',
      'achternaam' => 'Cruyff',
      'functie'  => 'voetbalicoon'
    ]
    ,
    [
      'voornaam' => 'Badr',
      'achternaam' => 'Hari',
      'functie'  => 'Kickboxer'
    ]
  ];
  
  /*  De medewerkers-array heeft nu meerdere arrays. */
  
  echo $medewerkers[0]['voornaam']. ' ' . $medewerkers[$x=0]['achternaam'] . " is een " . $medewerkers[$x=0]['functie'] . '<br>'; 
  echo $medewerkers[1]['voornaam']. ' ' . $medewerkers[$x=1]['achternaam'] . " is een " . $medewerkers[$x=1]['functie'] . '<br>'; 
  echo $medewerkers[2]['voornaam']. ' ' . $medewerkers[$x=2]['achternaam'] . " is een " . $medewerkers[$x=2]['functie'] . '<br>'; 
  echo $medewerkers[3]['voornaam']. ' ' . $medewerkers[$x=3]['achternaam'] . " is een " . $medewerkers[$x=3]['functie'] . '<br>'; 
  echo $medewerkers[4]['voornaam']. ' ' . $medewerkers[$x=4]['achternaam'] . " is een " . $medewerkers[$x=4]['functie'] . '<br>'; 