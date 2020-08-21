<html>
<body>
        <h2>welcome to blu's php playground</h2>
        <h3>a dumping ground for weird projects</h3>
</body>
</html>

<?php
if ($_GET["num"] < 251) { # checks to see if the num inserted is less than 250
echo "you wanted " . $_GET["num"] . " generated names. here they are: ";
echo "<br>";
$counter = 1;
$array = array($_GET['name1'], $_GET['name2'], $_GET['name3'], $_GET['name4'], $_GET['name5']); # creates an array with the inputs provided

while ($counter <= $_GET["num"]) { # loop this script for the specified number of times
shuffle($array); # uses a built in function to shuffle the array around
echo implode("", $array); # echos the array
echo "<br>";
$counter++; # adds one to the counter
}
} else {
    echo "dude i said the max was 250, go back and put in a proper number please";
}
?>
<br>
<a href="index.html">go back</a>
