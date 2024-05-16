<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Conditional</title>
</head>

<body>
    <h1>Berlatih Function Conditional PHP</h1>

    <?php
    echo "<h3> Soal No 1 Greetings</h3>";

    function greetings($name)
    {
        echo "Halo " . ucfirst($name) . ", Selamat Datang di Sanbercode!";
    }

    greetings("Bagas");
    echo "<br>";
    greetings("Wahyu");
    echo "<br>";
    greetings("Maghribi");

    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";

    function reverseString($str)
    {
        $length = strlen($str);
        $reversedString = '';
        for ($i = $length - 1; $i >= 0; $i--) {
            $reversedString .= $str[$i];
        }
        return $reversedString;
    }

    echo reverseString("Maghribi");
    echo "<br>";
    echo reverseString("Sanbercode");
    echo "<br>";
    echo reverseString("We Are Sanbers Developers");

    echo "<br>";

    echo "<h3>Soal No 3 Palindrome </h3>";

    function palindrome($str)
    {
        $reversedStr = reverseString($str);
        if ($str === $reversedStr) {
            echo "true";
        } else {
            echo "false";
        }
    }
    echo "civic";
    echo " ";
    palindrome("civic");
    echo "<br>";
    echo "nababan";
    echo " ";
    palindrome("nababan");
    echo "<br>";
    echo "jambaban";
    echo " ";
    palindrome("jambaban");
    echo "<br>";
    echo "racecar";
    echo " ";
    palindrome("racecar");

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";

    function tentukan_nilai($score)
    {
        if ($score >= 85 && $score <= 100) {
            return "Sangat Baik";
        } elseif ($score >= 70 && $score < 85) {
            return "Baik";
        } elseif ($score >= 60 && $score < 70) {
            return "Cukup";
        } else {
            return "Kurang";
        }
    }

    echo "98 = " . tentukan_nilai("98");
    echo "<br>";
    echo "76 = " . tentukan_nilai("76");
    echo "<br>";
    echo "67 = " . tentukan_nilai("67");
    echo "<br>";
    echo "43 = " . tentukan_nilai("43");
    echo "<br>";

    ?>
</body>

</html>