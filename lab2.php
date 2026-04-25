<!DOCTYPE html>
<html>
    <?php include 'index.php'; ?>
<head>
    <title>Lab 2 - Temperature Converter</title>
</head>
<style>
 body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h1 {
    margin-bottom: 15px;
}

.container {
    max-width: 400px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"] {
    padding: 5px;
    width: 100%;
    margin-bottom: 10px;
}

input[type="submit"] {
    padding: 5px 10px;
}

h3 {
    margin-top: 15px;
}

</style>
<body>


    <h1>Temperature Converter</h1>
    <div class="container">
     <form method="post">
        <label>Enter Celsius:</label> 
        <input type="text" name="temperature"> <input type="submit" value="Enter Fahrenheit">
     </form>


    <?php


        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $celsius = $_POST["temperature"];

        $fahrenheit = celsiusToFahrenheit($celsius);

        echo "<h3>Result:</h3>";
        echo $celsius . "°C = " . $fahrenheit . "°F";
}
        
        function celsiusToFahrenheit($celsius) {
            return ($celsius * 9/5) + 32;
        }
        

    ?>
</div>
</body>
</html>