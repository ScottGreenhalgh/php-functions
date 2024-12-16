<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // define and call
    function praisePHP()
    {
        echo nl2br("print string\n");
    }
    praisePHP();

    // return function
    function printStringReturnNumber()
    {
        echo nl2br("print this string\n");
        return 5;
    }
    $my_num = printStringReturnNumber();
    echo nl2br($my_num . "\n");

    // executing multiple function returns
    function first()
    {
        return "You did it!\n";
    }
    function second()
    {
        return "You're amazing!\n";
    }
    function third()
    {
        return "You're a coding hero!\n";
    }
    echo nl2br(first() . second() . third());

    // returning null
    function createVacuum()
    {
        echo nl2br("This function returns null\n");
    }
    echo nl2br(createVacuum() * 10 . "\n");

    // parameters (placeholder variables)
    function increaseEnthusiasm($string)
    {
        return $string . "!\n";
    }
    echo nl2br(increaseEnthusiasm("hi"));
    function repeatThreeTimes($string)
    {
        return $string . $string . $string;
    }
    echo nl2br(repeatThreeTimes("Go ") . "\n");

    // multiple params
    function calculateArea($height, $width)
    {
        return $height * $width;
    }
    echo nl2br(calculateArea(5, 4) . "\n");
    function calculateVolume($height, $width, $depth)
    {
        return $height * $width * $depth;
    }
    echo nl2br(calculateVolume(5, 4, 2) . "\n");

    // default params
    function calculateTip($total, $tip = 20)
    {
        return $total * (1 + $tip / 100);
    }
    echo nl2br(calculateTip(100, 25) . "\n");
    echo nl2br(calculateTip(100) . "\n");

    // pass by reference
    $string_one = "you have teeth";
    $string_two = "toads are nice";
    $string_three = "brown is my favorite color";
    function convertToQuestion(&$string)
    {
        $string = "Do you think " . $string . "?\n";
    }
    convertToQuestion($string_one);
    convertToQuestion($string_two);
    convertToQuestion($string_three);

    echo nl2br($string_one);
    echo nl2br($string_two);
    echo nl2br($string_three);

    // vairable scope
    $language = "PHP";
    $topic = "scope";
    function generateLessonName($concept)
    {
        global $language; //needed to access language from global scope
        // alternative, pass it as a param
        return $language . ": " . $concept;
    }
    echo nl2br(generateLessonName($topic) . "\n");

    // story function
    function generateStory($singular_noun, $verb, $color, $distance_unit)
    {
        $story = "The " . $singular_noun . "s" . " are lovely, $color, and deep.
But I have promises to keep,
And $distance_unit to go before I $verb,
And $distance_unit to go before I $verb.";
        return $story;
    }
    echo nl2br(generateStory("motorcycle", "advance", "purple", "kilometers") . "\n");

    // variable functions
    $first = "Welcome to the magical world of built-in functions.";
    $second = 82137012983;
    echo nl2br(gettype($first) . "\n");
    echo nl2br(gettype($second) . "\n");
    var_dump($first);
    echo nl2br("\n");
    var_dump($second);
    echo nl2br("\n");

    // string functions
    echo nl2br(strrev(".pu ti peeK .taerg gniod er'uoY") . "\n");
    echo nl2br(strtolower("SOON, tHiS WILL Look NoRmAL.") . "\n");
    echo nl2br(str_repeat("\nThere's no place like home.\n", 3));

    // substrings
    $essay_one = "I really enjoyed the book. I thought the characters were really interesting. The plot of the novel was really engaging. I really felt the characters' emotions. They were really well-written. I really wish the ending had been different though.";
    $essay_two = "Obviously this is a really good book. You obviously would not have made us read it if it wasn't. I felt like the ending was too obvious though. It was so obvious who did it right away. I think the thing with the light was obviously a metaphor for life. It would have been better if the characters were less obvious about their secrets.";
    echo nl2br(substr_count($essay_one, "really") . "\n");
    echo nl2br(substr_count($essay_two, "obvious") . "\n");

    // distance between two values
    function calculateDistance($one, $two)
    {
        return abs($one - $two);
    };
    echo nl2br(calculateDistance(-1, 4) . "\n");
    echo nl2br(calculateDistance(4, -1) . "\n");
    echo nl2br(calculateDistance(3, 7) . "\n");
    echo nl2br(calculateDistance(7, 3) . "\n");

    // add 18% tip 
    function calculateTips($total)
    {
        return round($total + ($total * 0.18));
    };
    echo nl2br(calculateTips(100) . "\n");
    echo nl2br(calculateTips(35) . "\n");
    echo nl2br(calculateTips(88.77) . "\n");

    // random numbers
    echo nl2br(getrandmax() . "\n");
    echo nl2br(rand() . "\n");
    echo nl2br(rand(1, 52) . "\n");

    // reading documentation
    // substr_count ( string $haystack , string $needle [, int $offset = 0 [, int $length ]] ) : int
    $a = 29;
    $b = "You did it!";
    $c = STR_PAD_BOTH;
    $d = "*~*";
    echo nl2br(str_pad($b, $a, $d, $c) . "\n");

    // finding functions
    function convertToShout($string)
    {
        return strtoupper($string) . "!\n";
    };
    echo nl2br(convertToShout("woah there, buddy"));
    echo nl2br(convertToShout("i just don't know"));
    echo nl2br(convertToShout("oh, ok, that's fine"));
    echo nl2br(convertToShout("it's nice to meet you"));

    function tipGenerously($int)
    {
        return ceil($int + ($int * 0.2)) . "\n";
    };
    echo nl2br(tipGenerously(100.00));
    echo nl2br(tipGenerously(982.27));
    echo nl2br(tipGenerously(15.67));
    echo nl2br(tipGenerously(66.18));
    echo nl2br(tipGenerously(21.65));

    function calculateCircleArea($diam)
    {
        return pi() * pow(($diam / 2), 2) . "\n";
    };
    echo nl2br(calculateCircleArea(25));
    echo nl2br(calculateCircleArea(30));
    echo nl2br(calculateCircleArea(872));
    echo nl2br(calculateCircleArea(6));
    echo nl2br(calculateCircleArea(29));

    ?>
</body>

</html>