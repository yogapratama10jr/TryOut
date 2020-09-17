    <html>
    <head>
    <title>Find Palindrome</title>
    </head>
    <body>
    <center>
    <form action="" method="post">
    <input type="text" name="string" /></br>
    <input type="submit" value="Palindrome Check";/>
    </form
    </body>
    </html>
<?php
    if($_POST){
    $string = $_POST['string'];
    $string = str_replace(' ','', $string);
    $string = preg_replace('/[^A-Za-z0-9\-]/', "", $string);
    $string = strtolower($string);
    $strlength = strlen($string);

    echo 'Characters = ';
    echo $strlength;

    $reverse = strrev($string);
        if(strlen($string) >= 9223372036854775808){
        echo '<br><b>Max Characters >= 9223372036854775808)';
    }else
        if($string == $reverse){
        echo "<p><b>It is Palindrome</p>";
    }else{
        echo "</p><b>Not Palindrome</p>";
    }
}
?>