<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Number: <input type="number" name="num"><br>
<input type="submit">
</form>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $n = test_input($_POST["num"]);
}

function test_input($data) {
if (filter_var($data, FILTER_VALIDATE_INT)) {
  if($data >=2 && $data <=100){
  echo "$data is valid.";
echo nl2br("\n");
$count=0;
for ( $i=1; $i<=$data; $i++)
{
if (($data%$i)==0)
{
$count++;
}
}
if ($count<3){
echo "$data is a Prime No.";
fibo($data);

}
else{
echo "$data is not a Prime No.";
facto($data);
echo nl2br("\n");
}

 }
  else
  echo "$data is not valid.";

}
else{
    echo "$data is not valid.";
}
}

function fibo($n){
$num = 0;
$n1 = 0;
$n2 = 1;
$n3 =0;
echo "<h3>Fibonacci series for first $n numbers: </h3>";
echo nl2br("\n");
echo $n1.' '.$n2.' ';
while (($n2 + $n1) <= $n)
{
    $n3 = $n2 + $n1;
    echo $n3.' ';
    $n1 = $n2;
    $n2 = $n3;
    $num = $num + 1;
}
}
function facto($n){
$f = 1;
for ($x=$n; $x>=1; $x--)
{
  $f = $f * $x;
}
echo "<h3>Factorial of $n is $f .</h3>";
}

?>

</body>
</html>
