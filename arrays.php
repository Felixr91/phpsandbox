<?php

                //Indexed Arrays

$people = array('Felix', 'Rachel', 'Kevin');
// echo $people[1];

$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = 'Chevy';
$cars[]='BMW';
// echo $cars[3];
// echo $cars[4];

// echo count($cars);

//Print out an entire array
// print_r($cars);

// var_dump($cars);

              //Associative Arrays
//allows you to define the key and the value

//Name is key and number is the value - you could do opposite
//This people array will override the people array on line 5
$people = array('Brad'=>35, 'Jose'=>32, 'Felix'=>31);
// echo $people['Felix'];

$ids = [31 => 'Felix', 100 => 'Dalmations', 2 => "Tommy"];
// echo $ids[31]

$people['Jill'] = 42;
// echo $people['Jill'];
// print_r($people);
// var_dump($people);

            //Multidimensional Arrays

$myguitars = array(
  array('Fender', 1960, 20), 
  array('Epiphone', 1950, 30),
  array('Gibson', 1970, 20)
);

echo $myguitars[1][0];


?>