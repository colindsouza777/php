<title>Colin Dsouza</title>
<h1>MD5 cracker</h1>
<?php 
if($_GET['guess'] == null){
    echo "No value inputed";
}
else{
$x = (string)$_GET['guess'];
$guess = 1000;
var_dump($x).'\n';

// var_dump(hash('md5', $guess));
for($i = 1;$i<10000;$i++){
    $guesshash = hash('md5',$guess);
    // echo $guesshash;
    if($guesshash == $x){
        echo "Password is ";
        echo  $guess;
    break;
    }
    elseif($guess== 10000){
        echo "Password doesn't exist";
    break;
    }
    else{
        $guess++;
    }
}
}
?>