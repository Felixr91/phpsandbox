<?php


//For Loop

echo 'For Loop <br>';

for($i=0;$i<10;$i++){
  echo 'Number '.$i;
  echo '<br>';
}

//While Loop (param and condition)

echo '<br>';
echo 'While Loop';

$i = 0;

while($i<10){
  echo '<br>';
  echo $i;
  $i++;
}

//Do... While Loop ((do)params/action and (while)condition) 
//Always runs at least once no matter what

echo '<br>';
echo 'Do... While Loop';
echo '<br>';

$i=0;

do{
  echo $i;
  echo '<br>';
  $i++;
}

while($i<10);

//For each (array method)

//indexed array below
$people = array('Brad', 'Jose', 'Felix');

echo '<br>';
echo 'For Each (array method)';
echo '<br>';

foreach($people as $person){
  echo $person;
  echo '<br>';
}

//associative array
$pokemon = array('Squirtle'=>'water', 'Charmander'=>'fire', 'Bulbasuar'=>'plant');

foreach($pokemon as $poke=>$type){
  echo $poke. ': '.$type;
  echo '<br>';
}

?>