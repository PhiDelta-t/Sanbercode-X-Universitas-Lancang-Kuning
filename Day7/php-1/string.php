<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>

<body>
    <h1>Berlatih String PHP</h1>

    <?php
    echo "<h3> Soal No 1 String</h3>";

    $first_sentence = "Hello PHP!";
    $second_sentence = "I'm ready for the challenges";

    $length_first = strlen($first_sentence);
    $words_first = str_word_count($first_sentence);
    $length_second = strlen($second_sentence);
    $words_second = str_word_count($second_sentence);

    echo "$first_sentence";
    echo "<p>Panjang string: $length_first, Jumlah kata: $words_first</p>";
    echo "$second_sentence";
    echo "<p>Panjang string: $length_second, Jumlah kata: $words_second</p>";

    echo "<h3> Soal No 2 String</h3>";

    $string2 = "I love PHP";

    echo "<label>String: </label> \"$string2\" <br>";
    echo "Kata pertama: " . strtok($string2, " ") . "<br>";
    echo "Kata kedua: " . strtok(" ") . "<br>";
    echo "Kata ketiga: " . strtok(" ") . "<br>";

    echo "<h3> Soal No 3 String</h3>";

    $string3 = "PHP is old but sexy!";

    $new_string = str_replace("sexy", "awesome", $string3);
    echo "String: \"$string3\" <br>";
    echo "OUTPUT : \"$new_string\"";
    ?>
</body>

</html>