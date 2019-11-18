<?php

	$json = '{"api":"alfa","class":"list","method":"airport","filters":"from=;to=;"}';

	print_r( $json);

	echo "\n\n";

	print_r( json_decode( $json));

	echo "\n";

	print_r ( json_decode( $json, TRUE));

