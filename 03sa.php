<?php  
//practice 4_04
$evo = array(

	array(1, "Bulbasaur",
             "Grass",
             "Poison",
             "Overgrow", 
              45, 49, 49),

	array(2, "Ivysaur", 
             "Grass", 
             "Poison",
             "Overgrow", 
             60, 62, 63),

	array(3, "Venusaur", 
             "Grass", 
             "Poison",
             "Overgrow", 
             80, 82, 83),

	array(4, "Charmander", 
             "Fire", 
             "N/A", 
             "Blaze", 
             39, 52, 43),

	array(5, "Charmeleon", 
             "Fire", 
             "N/A", 
             "Blaze", 
             58, 64, 58),

	array(6, "Charizard", 
             "Fire", 
             "Flying", 
             "Blaze", 
             78, 84, 78),

	array(7, "Squirtle", 
             "Water", 
             "N/A", 
             "Torrent", 
             44, 48, 65),

	array(8, "Wartortle", 
             "Water", "N/A", 
             "Torrent", 
             59, 63, 80),

	array(9, "Blastoise", 
             "Water", "N/A", 
             "Torrent", 
             79, 83, 100), 

	array(10, "Caterpie", 
              "Bug", 
              "N/A", 
              "Shield Dust", 
              50, 20, 25),

);

function pokemon_defense($myarr, $limit_number){

	for($i = 0; $i < 10; $i++){
		if($myarr[$i][7] >= $limit_number){
		echo "<p>".$myarr[$i][1];
		}
	}
}

#sample output
pokemon_defense($evo, 60)



?>
<style>
       p{ 
        font-weight: bold;
        font-family: papyrus;
        font-size:20px;
        border-radius: 5px;
        padding: 10px;
        margin: 20px;
        color: black;
        background-color: #83f28f; 
        width: 200px;
        text-align:center;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);
       }
     </style>