<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Task 1: Output a Message</h3>
    <?php
        // Task 1: Output a Message
        echo "Hello world! My name is \"YangPengpeng\"";
    ?>

    <h3>Task 2: Use PHP Variable in Heading 4</h3>
    <?php
        // Task 2: Use PHP Variable in Heading 4
        $title = "PHP is interesting.";
        echo "<h4>$title</h4>";
    ?>

    <h3>Task 3: Display Grades in HTML Table</h3>
    <?php
        // Task 3: Display Grades in HTML Table
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;
    ?>

    <table border="1">
        <tr>
            <th>S.n.</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Student 1</td>
            <td><?php echo $g1; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Student 2</td>
            <td><?php echo $g2; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Student 3</td>
            <td><?php echo $g3; ?></td>
        </tr>
    </table>
    <h3>Development Environment Setup</h3>
<img src="images/development environment setup.jpg" alt="Development Environment Screenshot">


</body>
</html>