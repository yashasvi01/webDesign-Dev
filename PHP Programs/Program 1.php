<h1>Program 1</h1>
<h2>PHP</h2>
<?php

$n=7;
for($i=0;$i<$n;$i++)
{

if($i==0 || $i==6){
for($j=0;$j<$n;$j++)
echo "*";
}
else
{
if($i<$n/2)
{
$x=2*$i -1;
}
else
{
$x=2*($n-$i-1)-1;
}
$y=($n-$x)/2;
$x=2*$x;
for($j=0;$j<$y;$j++)
echo "*";

echo str_repeat("&nbsp;", $x);
for($j=0;$j<$y;$j++)
echo "*";
}
echo nl2br("\n");
}

?>
