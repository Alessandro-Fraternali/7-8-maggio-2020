<?php

  function stampa($key, $valore){
    echo "<div>" . $key . "<br> Nome: " . $valore['Nome:'] . "</div>";
    echo "<div> Tipo: " . $valore['Tipo:'] . "</div>";
    echo "<div> Abilità: " . $valore['Abilità:'] . "</div>";
    echo "<div> Statistiche: </div>";
    foreach ($valore['Stats:'] as $ke => $stat) {
      echo $stat . "<br>";
    }
    echo "<br><br>";
  }

  $pkmn = [
    1 => [
      'Nome:' => 'Blastoise',
      'Tipo:' => 'Acqua',
      'Abilità:' => 'Copripioggia',
      'Stats:' => [
        8,
        4,
        6,
        3
      ]
    ],
    [
      'Nome:' => 'Porygon',
      'Tipo:' => 'Normale',
      'Abilità:' => 'Download',
      'Stats:' => [
        4,
        6,
        4,
        4
      ]
    ],
    [
      'Nome:' => 'Gengar',
      'Tipo:' => 'Spettro',
      'Abilità:' => 'Levitazione',
      'Stats:' => [
        3,
        9,
        4,
        7
      ]
    ]
  ];

  foreach ($pkmn as $key => $ditto) {
    stampa($key, $ditto);
  }

 ?>
