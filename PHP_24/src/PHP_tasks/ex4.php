<?php
$title = "Exercise 4: Control flow and loops";
$md="Please use appropriate meta Description";
include 'header.php'; ?>

<div>
    <h1>Exercise 4: Control flow and loops</h1>

    <h3>If-Else</h3>

    <?php
    // If-Else

    $age = 20; 
    $name = "Tylor Swift"; 

    if ($age >= 18) {
        echo "<p>$name is eligible for voting.</p>";
    } else {
        echo "<p>$name is not eligible for voting.</p>";
    }
    ?>
    <h3>Switch Case</h3>

    <?php
    //Switch Case

    $currentMonth = date('F');
    
    switch ($currentMonth) {
        case 'August':
            echo "<p>It's August, so it's still holiday.</p>";
            break;
        default:
            echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
            echo "<p>But Chinese New Year is coming, I still can celebrate. oh yeah!</p>";
            break;
    }
    ?>

    <h3>For Loop</h3>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Enter a number: <input type="text" name="n">
    <input type="submit" value="SUBMIT">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["n"])) {
    
    $n = $_POST["n"];

    if (is_numeric($n)) {
        echo "<p>Multiplication table for $n:</p>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<p>$n * $i = " . ($n * $i) . "</p>";
        }
    } else {
        echo "<p>Please enter a valid number.</p>";
    }
}
        echo"<br>";
    ?>


    <h3>While Loop</h3>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Enter a number: <input type="text" name="m">
    <input type="submit" value="SUBMIT">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["m"])) {
   
    $m = $_POST["m"];

    
    if (is_numeric($m)) {
        echo "<p>Numbers from 1 to $m:</p>";
        $j = 1;
        while ($j <= $m) {
            echo "<p>$j</p>";
            $j++;
        }
    } else {
        echo "<p>Please enter a valid number.</p>";
    }
}
?>


    <h3>Foreach Loop</h3>
    <?php
    $myArray = array("Cherry", "Pineapple", "Mango");

    echo "<p>Elements of the array:</p>";
    foreach ($myArray as $element) {
        echo "<p>$element</p>";
    }
    ?>
</div>


<?php include 'footer.php'; ?>