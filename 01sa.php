<?php

//Practice 4-01
//TeamName is evo
$evo = Array ( 
    0 => Array ( "id" => 1 , 
                 "species" => 'Balbasaur', 
                 "type1" => 'Grass', 
                 "type2" => 'Poison', 
                 "ability" => 'Overgrow',
                 "hp" => '45',
                 "attack" => '49',
                 "defense" => '49'),
                
    1 => Array ( "id" => 2 , 
                 "species" => 'Ivysaur', 
                 "type1" => '        Grass', 
                 "type2" => 'Poison', 
                 "ability" => 'Overgrow',
                 "hp" => '60',
                 "attack" => '62',
                 "defense" => '63'),
                
    2 => Array ( "id" => 3 , 
                 "species" => 'Venusaur', 
                 "type1" => 'Grass', 
                 "type2" => 'Poison', 
                 "ability" => 'Overgrow',
                 "hp" => '80',
                 "attack" => '82',
                 "defense" => '83'), 
                
    3 => Array ( "id" => 4 , 
                 "species" => 'Charmander', 
                 "type1" => 'Fire', 
                 "type2" => 'N/A', 
                 "ability" => 'Blaze',
                 "hp" => '        39',
                 "attack" => '52',
                 "defense" => '53'),
                
     4 => Array ( "id" => 5 , 
                 "species" => 'Charmelon', 
                 "type1" => 'Fire', 
                 "type2" => 'N/A', 
                 "ability" => 'Blaze',
                 "hp" => '        58',
                 "attack" => '64',
                 "defense" => '58'),
                
    5 => Array ( "id" => 6 , 
                 "species" => 'Charizard', 
                 "type1" => 'Fire', 
                 "type2" => 'Flying', 
                 "ability" => 'Blaze',
                 "hp" => '        78',
                 "attack" => '84',
                 "defense" => '78'),
                
    6 => Array ( "id" => 7 , 
                 "species" => 'Squirtle', 
                 "type1" => 'Water', 
                 "type2" => 'N/A', 
                 "ability" => 'Torrent',
                 "hp" => '        44',
                 "attack" => '48',
                 "defense" => '65'),
                
    7 => Array ( "id" => 8 , 
                 "species" => 'Wartortle', 
                 "type1" => 'Water', 
                 "type2" => 'N/A', 
                 "ability" => 'Torrent',
                 "hp" => '        59',
                 "attack" => '63',
                 "defense" => '80'),
                
    8 => Array ( "id" => 9 , 
                 "species" => 'Blastoise', 
                 "type1" => 'Water', 
                 "type2" => 'N/A', 
                 "ability" => 'Torrent',
                 "hp" => '        79',
                 "attack" => '83',
                 "defense" => '100'),
                
    9 => Array ( "id" => 10 , 
                 "species" => 'Caterpie', 
                 "type1" => 'Bug', 
                 "type2" => 'N/A', 
                 "ability" => 'Shield Dust',
                 "hp" => '50',
                 "attack" => '20',
                 "defense" => '55'));

    echo "<pre>";
    echo "id \t species \ttype1 \t\ttype2 \t\tability \thp \tattack \tdefense";
    echo '<br>'; 
    foreach ( $evo as $var ) {
    echo "\n", $var['id'], "\t", $var['species'], "\t", $var['type1'], "\t\t", $var['type2'], "\t\t", $var['ability'], 
    "\t", $var['hp'], "\t", $var['attack'], "\t", $var['defense'];
}

//Number of elements in an array Evo
echo '<br>';
echo '<br>';
echo "Number of elements in Evo: ".count($evo); 

//Declare variable $favorite and assign your favorite specie 
$favorite = $evo[5]['species'];
echo '<br>';
echo '<br>';
echo "My Favorite Specie is: ".$favorite



?>

<?php
//Practice 4-02
//Using foreach display all the species in a list
echo '<br>';
echo '<br>';
$all_species = array('Bulbasaur',
                 'Ivysaur',
                 'Venusaur',
                 'Charmander',
                 'Charmeleon',
                 'Charizard',
                 'Squirtle',
                 'Wartortle',
                 'Blastoise',
                 'Caterpie');

echo 'List of all Species';
echo '<br>';
echo '<br>';
foreach($all_species as $species_list) {
	echo "<li><span>".$species_list."</span></li>";
	echo "<br>";
}

?>