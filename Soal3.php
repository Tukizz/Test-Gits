<?php
function balanceBracket($data) {
    $open = array("(", "[", "{");
	$close = array(")", "]", "}");
	$stack = array();

	for ($i = 0; $i < strlen($data); $i++) {
	   $char = $data[$i];

        if (in_array($char, $open)) {
			array_push($stack, $char);
		}

		if (in_array($char, $close)) {   
			$match = $open[array_search($char, $close)];
			$topOfStack = array_values(array_slice($stack, -1))[0];
			if ($topOfStack == $match) {   
				array_pop($stack);
			} else {
				echo "NO";
				break;
			}
		}

        if ((strlen($data) - 1) == $i) {
            echo "YES";
        }
	}
}
	balanceBracket("{[(])}");

?>