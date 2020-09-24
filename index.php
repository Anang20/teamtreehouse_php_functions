<?php

// Create Function hello

function hello()
{
    echo "Hello, World!";
}

hello(); //Hello, World!

$current_user="Mike";

function is_mike()
{
    global $current_user;
    if($current_user == "Mike")
    {
        echo "\nYou Is Mike";
    }else{
        echo "Nope, You Not Mike";
    }
}
is_mike(); //You is mike

echo PHP_EOL;

function helloName($name)
{
    if(is_array($name) && !empty($name))
    {
        foreach($name as $key)
        {
            echo "Hello, $key \n";
        }
    }else{
        echo "Hello Friend !";
    }
}

helloName(["Mike", "Mohede", "Hompton"]);

function get_info($name,$title=Null)
{
    if($title)
    {
        echo "$name was arrived,and came as $title";
    }else
    {
        echo "$name was arrived,Welcome";
    }
}

get_info("Mike","frog");


function helloWorld()
{
    return "\nHello world";
}

$hello=helloWorld("You so good"); 

echo $hello;

echo PHP_EOL;

function addUp($a,$b)
{
    return [$a,$b,$a+$b]; //Array
}

print_r(addUp(2,4));

function sumArray($data)
{
    $result=0;
    foreach($data as $key)
    {
        $result+=$key;
    }

    return $result;
}


echo sumArray([1,4,5,5]);

//var_dump($sumArray([1,4,5,5])); //mengecek tipe data dari return



function answer()
{
    return "You answer the question";
}

$answer=answer(); // Save variable

echo PHP_EOL;

// Callback Function

$answer_cal="answer";

echo $answer_cal()."!!"; //Call function



// Anonymous Function

$askName="What is your name";
$name="Anang";

echo PHP_EOL;
function br(){
    echo PHP_EOL;
}
//use untuk memanggil variabel global ke dalam function
$ask=function()use($askName,$name){return "Ask the question,$askName $name ?";};

echo $ask();

br();
// Built-in string function

$magang="Magang TOP jos";

echo strlen($magang); // 14

br();

echo substr($magang,7); //TOP jos

br();

echo substr($magang,7,3); // TOP jo

br();

echo strpos($magang,"jos"); // 11

br();

echo $magang[11]; // j



$team=["Mike"=>"Developer","Chris"=>"Designer","Hompton"=>"Manager"];

print_r(array_keys($team));

var_dump(array_key_exists("John",$team));

if(array_key_exists("John",$team))
{
    echo"Mike found in \n$team";
}else
{
    echo "Key not found in \$team";
}

br();

array_walk($team,function($value,$key){
    
    echo " $key is a $value \n";
});