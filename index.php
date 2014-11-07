<! DOCKTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-4 Andmetüübid (2)
	</title>
</head>
<body>
<h1>Arvutamine murd- ja täisarvudega</h1>
<?php echo $float = 3.14; ?><br> 
<?php echo $float +7; ?><br>
<?php echo 4/3; ?><br>
<h2>Murdarvude ümardamine</h2>
<?php echo round($float, 1)?> <br>
<?php echo ceil($float)?><br>
<?php echo floor($float)?><br>
<h2>Andmetüübi funktsioonid</h2>
<?php is_int($integer = 3); ?><br>
<?php echo "Kas {$integer} on integer? " . is_int($integer); ?><br>
<?php is_int($integer = $float); ?><br>
<?php echo "Kas {$integer} on integer? " . is_int($integer); ?><br>
<h2>Jadad (array)</h2>
<?php
    $numbers = array(4,8,15,16,23,42);
?>
<?php echo $numbers[1]; ?><br>
<?php echo $numbers[0]; ?><br>
<?php echo $numbers[2]; ?><br>
<?php echo $numbers[3]; ?><br>
<?php echo $numbers[4]; ?><br>
<?php echo $numbers[5]; ?><br><br>
<pre>
<?php $mixed= array(6, "rebane", "koer", 5.5, array("x", "y", "z")); ?><br>
<?php echo $mixed[0];?><br>
<?php echo $mixed[1];?><br>
<?php echo $mixed[2];?><br>
<?php echo $mixed[3];?><br>
<?php echo $mixed[4][0];?><br>
<?php echo $mixed[4][1];?><br>
<?php echo $mixed[4][2];?><br>
<?php $mixed[2] = "kass"; ?>
<?php echo $mixed[2];?><br>
<?php $mixed[5] = "kass"; ?>
<?php $mixed[] = "hobune"; ?>
</pre>
<h2>Associative arrays</h2>
<?php $assoc = array("first_name" => "Marko", "last_name" => " Aia", "e-mail" => "marko.aia@khk.ee"); ?>
<?php echo $assoc["last_name"]; ?> 
<?php echo $assoc["first_name"] ?><br>
<?php $assoc["first_name"] = " Peeter" ?>
<?php echo $assoc["last_name"]; ?>
<?php echo $assoc["first_name"] ?><br><br>
<?php $assoc["first_name"] = "Marko " ?>
<?php echo "Minu nimi on {$assoc["first_name"]}{$assoc["last_name"]}. Minu e-post on {$assoc["e-mail"]}"?><br>
<h2>Array functions</h2>
<?php $numbers_2 = array(8,23,15,42,16,4); ?>
<?php echo count($numbers_2) ?><br>
<?php echo max($numbers_2) ?><br>
<?php echo min($numbers_2) ?><br>
<?php
    sort($numbers_2);
    print_r($numbers_2);
?><br>
<?php
    rsort($numbers_2);
    print_r($numbers_2);
?><br>
<?php $num_string = implode(" ja ", $numbers_2); ?>
<?php echo $num_string; ?><br>
<?php print_r(explode(" ja ", $num_string)); ?>
</body>
</html>