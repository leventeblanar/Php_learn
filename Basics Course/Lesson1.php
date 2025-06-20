
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning site for Php</title>
</head>
<body>
    <?php
    // this is a comment
    
    echo "What is happening my man?";
    echo "<br>";


    // Set variables - they are case sensitive, except anything else
    // At this point I am not listing them up, but these are the same for php as for all languages, int, float, string, boolean (1,2)

    $variable1 = "PHP";
    $Variable2 = "Weird PHP";
    echo $Variable2;
    echo "<br>";

    //  Arrays: in Php an array can store different datatypes
    // Indexed array
    $a = array(1, 2, "three");
    echo 'Array: ';
    print_r($a);
    echo "<br>";

    // Associative Array
    $a = array("Name" => "Aman", "Age" => 99);
    echo "Associative Array: ";
    print_r($a);
    echo "<br>";
    echo "Element: ";
    echo $a['Name'];
    echo "<br>";
    $a = array("Name" => "Aman", -6 => 11, null => "IDK");
    echo "Associative Array: ";
    print_r($a);
    echo "<br>";


    // Objects

    class Video{
        public $title="Whatever bro!";
    }
    $my_video = new Video();
    echo $my_video->title;
    echo "<br>";

    //  Resource

    $fileHandle =fopen("hi.txt", "r");
    if (is_resource($fileHandle)) {
        echo "file handle is resource";
    }
    echo "<br>";

    // Null

    $a = NULL;
    is_resource($a);
    is_null($a);
    is_int($a);
    is_float($a);
    is_string($a);
    is_bool($a);
    is_array($a);
    is_object($a);


    // if statements

    $hemini = "";
    if ($hemini=="AI") {
        echo "Gemini is an AI";
    }
    else {
        echo "Gemini is not an AI";
    }
    echo "<br>";

    // Switch statement

    $number = 1;
    switch( $number ) {
        case 1:
            echo "One";
            break;
        case 2:
            echo "Two";
            break;
        default:
            echo "IDK";
            break;
    }
    echo "<br>";

    // While loop
    $number = 1;
    while($number <= 10) {
        echo "$number ";
        $number++;
    }

    // Do While Loop

    $number = 11;

    do {
        echo "$number ";
        $number++;
    } while($number <= 10); 
    echo "<br>";

    // For loop

    for($i=1; $i<=4; $i++){
        echo "Hello";
    }
    echo "<br>";

    // foreach loop

    $a = array("hi ", "you ", "dropped ", "this");
    foreach($a as $value){
        echo "$value";
    }
    echo "<br>";


    // functions

    function say($name){
        echo "bye $name";
    }
    say("bro");

    ?>
</body>
</html>
