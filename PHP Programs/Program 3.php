<h1>Program 3</h1>
<h3>Color Change</h3>

<?php

$colors = array("red", "yellow", "pink","blue","green","white","brown","orange","violet","maroon","aqua");
$i = rand(0,9);
$change = $colors[$i];
echo "<body style='background-color: $change '>";
?>
