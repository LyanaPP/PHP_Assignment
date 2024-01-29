<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title;?> 
    </title> 
    <style>
        /* Header Styles */
        header {
            padding: 15px;
            text-align: center;
            background-image: url(images/bg1.jpg);
        }

        /* Navigation Styles */
        nav {
            display: flex;
            justify-content: space-around;
            background-color: rgb(241, 165, 176);
            padding: 10px;
        }

        nav a {
            text-decoration: none;
            color: darkgreen;
            font-weight: bold;
        }

        h1 {
            color: darkgreen;
            text-align: left;
        }

        /* Sidebar Styles */
        aside {
            width: 200px;
            padding: 15px;
            background-color: lightblue;
        }

        /* Content Styles */
        section {
            padding: 20px;
            background-color: #fff;
            flex: 1;
        }

        footer {
            padding: 15px;
            background-color: orange;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>Learn PHP </h1>
    </header>

    <nav>
        <a href="ex1.php">ex1</a>
        <a href="ex2.php">ex2</a>
        <a href="#">ex3</a>
        <a href="#">ex4</a>
        <a href="#">ex5</a>
        <a href="#">ex6</a>
        <a href="#">ex7</a>
        

    </nav>

    <div style="display: flex;">
        <!-- Sidebar -->
        <aside>
            <!-- Sidebar content goes here -->
            <h2>Sidebar</h2>
            <p>This is my sidebar content.</p>
        </aside>
        <section>

       
