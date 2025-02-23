
<?php 

echo "hello world ";
print_r(" ". "it's php");
echo"<br>";
echo".................." . "<br>";
#Variable by reference
echo"<br>";
$a = 10;  
$b = $a;  
$b = 20;  
echo "a = $a <br>";  
echo "b = $b <br>";  
echo"<br>";
echo".................." . "<br>";
echo "hello $a";
echo"<br>";
echo 'hello $a' ; 
echo"<br>";
echo".................." . "<br>";
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<?= "hello world"?>
</body>
</html>
<?php
echo"<br>";
echo".................." . "<br>";
#constants
define("SITE_NAME", "My Awesome Website");
echo SITE_NAME;
echo"<br>";
const PI = 3.14;
echo PI; 
echo"<br>";

echo".................." . "<br>";
#Variable variables 
$name = "ahmed";
$$name = "hello";
echo $ahmed;
echo"<br>";
echo".................." . "<br>";
#type juglling
echo"<br>";function sum(int $x, int $y){
 var_dump($x,$y);
 return $x+$y;
}
echo"<br>";
$sum = sum("3",2);
echo $sum;
echo"<br>";

echo".................." . "<br>";
#type casting
echo"<br>";
$age = (string)10;
var_dump($age);
echo"<br>";
echo".................." . "<br>";
$c = 0x400; //hex
$f= 0b11100;//binary
$j=077;//oct
echo $c ."<br>";
echo $f;
echo"<br>";
echo $j;
echo"<br>";
var_dump(value: is_integer($f));
echo"<br>";
echo".................." . "<br>";
?>
<?php
echo"heredoc". "<br>";
$name = "martina";
$age = 21;

$text = <<<"text"
Hello, my name is $name.
I am $age years old.
text;

echo $text . "<br>";
echo"nowdoc". "<br>";
$name = "martina";
$age = 21;
$text = <<<'text'
Hello, my name is $name.
I am $age years old.
text;
echo $text. "<br>";
echo".................." . "<br>";
echo "array";
#$lang=array("php","python");
$lang=["php","python"];
print_r($lang);
echo $lang[0]."<br>";
var_dump(isset($lang[2]))."<br>";
$school = [
    "Class A" => ["Ahmed", "Ali", "Sara"],
    "Class B" => ["Mona", "Omar", "Hassan"],
    "Class C" => ["Nada", "Youssef", "Khaled"]
];
echo"<pre>";
print_r($school)."<br>";
echo"</pre>";
echo $school["Class B"][0]."<br>"; // Mona
print_r(array_pop(array: $school)) ;
print_r ($school)."<br>";
echo"<br>";
//unset($school["Class A"][0]);
//print_r ($school) . "<br>";
echo".................." . "<br>";
echo"operators"."<br>";
$g=10;
$s=2;
var_dump( fdiv( $g, $s))  . "<br>";
echo"<br>";
echo".................." . "<br>";
echo"Null Coalescing Operator"."<br>";
$user_input = null;
$default_name = "Anonymous";
$name = $user_input ?? $default_name;
echo "User: $name". "<br>"; 
//Bitwise Operators in  PHP tele
echo"<br>";
echo".................." . "<br>";
echo"if condition"."<br>";
$score=96;
if ($score>95){
    echo"a";
}elseif($score>50){echo"b";}
else{echo "f";}
echo"<br>";
echo".................." . "<br>";
echo"if condition"."<br>";

?>
<?php
//if condition in html with php
//  user login
$user = [
    "username" => "martina",
    "role" => "admin", 
    "is_logged_in" => true
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<body>

    <?php if ($user["is_logged_in"]): ?>
        <h1>Welcome, <?php echo $user["username"]; ?>!</h1>

        <?php if ($user["role"] == "admin"): ?>
            <p class="admin"> You are an Admin with full access.</p>
            <ul>
                <li><a href="#">Manage Users</a></li>
                <li><a href="#">Site Settings</a></li>
                <li><a href="#">System Reports</a></li>
            </ul>
        <?php else: ?>
            <p class="user"> You are a regular user with limited access.</p>
            <ul>
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">View Content</a></li>
            </ul>
        <?php endif; ?>

        <a href="logout.php">Logout</a>

    <?php else: ?>
        <h1>Please log in to access the page.</h1>
        <a href="login.php">Login</a>
    <?php endif; ?>
    <br>

</body>
</html>
<?php
echo".................." . "<br>";
echo "while loops"."<br>";
$i=0;
while ($i<=15){
    echo $i++ . " ";
}
echo"<br>";
echo".................." . "<br>";
echo"foreach";
echo"<br>";
$names = ["Ahmed", "Sara", "Mona", "Ali"];
foreach ($names as $name) {
    echo "Hello, $name! <br>";
}
;
echo".................." . "<br>";
echo"functions";
echo"<br>";
function foo(): int|array|string|null{
    return null;
} 
#or
function boo(): mixed{
    return null;
} 
function greet($name) { // $name ده parameter
    echo "Welcome, $name!";
}

greet("martina")."<br>"; // "martina" ده argument
echo "<br>";
echo".................." . "<br>";
echo"splat operator";
echo "<br>";
function sumall(...$nums){
    return array_sum($nums);
}
echo sumall(5,6,6,7,8,9,9);
echo "<br>";
echo".................." . "<br>";
echo"arrays";
echo "<br>";
$arr= [1,2,3,4,5,67,8];
$chunk = array_chunk($arr,3);
print_r($chunk);
echo "<br>";
$numbers = [1, 2, 3, 4, 5, 6];
$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 == 0;
});
print_r($evenNumbers);
$evenNumbers= array_values($evenNumbers);
print_r($evenNumbers);
echo "<br>";
echo".................." . "<br>";
echo"file systems";
echo "<br>";
$dir = scandir(__DIR__);
var_dump($dir);

?>
