<?php

function test($num, $func)
{
	while ($num)
		{$func($num); $num--;}
}

$anonEn = function ()
	{ echo "hello<br \>"; };

$anonFr = function ()
	{ echo "bonjour<br \>"; };

        $language = 'E';
if ($language == 'E')
    test(5, $anonEn);
else
    test(5, $anonFr);