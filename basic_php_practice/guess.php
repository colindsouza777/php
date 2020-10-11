<title>Colin Dsouza</title>
<h1>Welcome to my guessing game</h1>
<?php 
$x = 42;
// print_r ($_GET);
if($_GET == null){
    echo "Missing guess parameter";
}
elseif($_GET["guess"] == null){
    echo "Your guess is too short";
}
elseif(!is_numeric($_GET["guess"])){
    echo "Your guess is not a number";
}
elseif($_GET["guess"] == 42){
    echo "Congratulations - You are right";
}
elseif($_GET["guess"] < 42){
    echo "Your guess is too low";
}
elseif($_GET["guess"] >42){
    echo "Your guess is too high";
}
?>