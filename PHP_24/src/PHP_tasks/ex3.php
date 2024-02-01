<?php
$title = "Exerices 3: Variables, Strings & Operators ";
$md="Please use appropriate meta Description";
include 'header.php'; ?>

<form method = "post" action = "process1.php">
    FirstName: <input type= "text" name = "firstname" require>
    <br>
    <br>
    LastName: <input type= "text" name = "lastname" require>
    <br>
    <br>
    <input type = "submit" value = "submit">

</form>

<div class="container mt-4">
    <h2>Bootstrap Styled Table</h2>

    <!-- Bootstrap-styled HTML Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>25</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>30</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bob Johnson</td>
                <td>22</td>
            </tr>
        </tbody>
    </table>
</div>


 <?php
    $str1 = "Hello";
    $str2 = "World";
    $combinedString = $str1 . $str2;
    echo "<p>Combined String: $combinedString</p>";

    $numbers = array(298, 234, 46);
    $sum = array_sum($numbers);
    echo "<p>Sum of Numbers: $sum</p>";

    $number1 = 298;
    $number2 = 234;
    $number3 = 46;

    $sum1 = $number1 + $number2 + $number3;

    echo "<p>Sum of Numbers: $sum1</p>";

    ?>
    <!-- PHP script for browser detection -->
    <?php
    $browser = $_SERVER['HTTP_USER_AGENT'];
    echo "<p>Your browser: $browser</p>";
    ?>
    
    <?php include 'footer.php'; ?>
