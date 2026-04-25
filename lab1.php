<!DOCTYPE html>
<?php include 'index.php'; ?>
<html>
    
<head>
    <title>Lab 1 - My Favorite Fruits</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

/* Simple spacing */
.wrapper {
    max-width: 500px;
}

/* Labels and inputs */
label {
    display: block;
    margin-top: 10px;
}

input[type="text"] {
    width: 100%;
    padding: 5px;
    margin-top: 3px;
}

/* Button */
input[type="submit"] {
    margin-top: 10px;
    padding: 5px 10px;
}

/* Results */
.result-card {
    margin-top: 20px;
}

ul {
    margin-top: 10px;
}
</style>



<body>
<div class="wrapper">
     <div class="form-card">
    <h1>My Favorite Fruits</h1>
    
    <form action="lab1.php" method="post">
    <div class="mainfruit">

    <label>Fruit 1:</label>
    <input type="text" name="fruit1">

    <label>Fruit 2:</label>
    <input type="text" name="fruit2">

    <label>Fruit 3:</label>
    <input type="text" name="fruit3">

    <label>Fruit 4:</label>
    <input type="text" name="fruit4">

    <label>Fruit 5:</label>
    <input type="text" name="fruit5">

    <input type="submit" value="Save My Fruits">

</div>
</div>
    </form>
        
   
    
    
<div class="result-card">
    <?php
    
         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
             echo "<p>Your Fruits Choices is Submitted!</p>";
    $fruits = array(
        $_POST["fruit1"],
        $_POST["fruit2"],
        $_POST["fruit3"],
        $_POST["fruit4"],
        $_POST["fruit5"]
    );

    echo "<h2>Your Fruits:</h2>";
    echo "<ul>";

    foreach ($fruits as $fruit) {
    echo "<li class='fruits'>" . $fruit . "</li>";
    }   

echo "</ul>";

    echo "<h3>Your Favorite Fruit: " . $fruits[0] . "</h3>";
}

        
        
    ?>
    </div>

</div> 
</body>
</html>