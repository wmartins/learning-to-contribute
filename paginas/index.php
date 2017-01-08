<?php

	$elements_of_life = array(
		'mulher',
		'rapadura',
		'tangerina',
		'suco de melancia',
		'PHP',
		'OpenSource',
		'Praia'
	);


	foreach ($elements_of_life as $key => $value) {
		echo '<h2>'.$key.' - '. $value .' is life!</h2>';
	}
	echo '<footer><small>Increment this list.</small></footer>';