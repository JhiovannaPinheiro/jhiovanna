	<?php

		const URL = "https://pokeapi.co/api/v2/pokemon/"; #2
		$pokemon = [];

		for ($i = 1; $i <= 15; $i++) {

    		$id = $i;
    		$url = URL . $id;

    			$resultado = file_get_contents($url);
    			$pokeMatriz = json_decode($result, true);

    				$pokemon[$i]['nome'] = $pokeMatriz['forms'][0]['name'];
    				$pokemon[$i]['altura'] = $pokeMatriz['height'];
    				$pokemon[$i]['peso'] = $pokeMatriz['weight'];
    				$pokemon[$i]['habilidade'] = $pokeMatriz['ability'];
    				$pokemon[$i]['imagem'] = $pokeMatriz['sprites']['other']['dream_world']['front_default'];
	
		}

		// echo "<pre>";
		// print_r($pokemon);
		// echo "</pre>";
		// exit;

	include "pokemon.view.php";