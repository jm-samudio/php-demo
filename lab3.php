<!DOCTYPE html>
<html>
    <?php include 'index.php'; ?>
<head>
    <title> ATM Machine Simulation</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

/* Page width */
.page {
    max-width: 500px;
}

/* Simple card spacing */
.card {
    margin-bottom: 20px;
}

/* Form elements */
label {
    display: block;
    margin-top: 10px;
}

input, select {
    width: 100%;
    padding: 5px;
    margin-top: 3px;
}

/* Button */
input[type="submit"] {
    margin-top: 10px;
    padding: 5px;
    width: auto;
}

/* Result section */
.result {
    margin-top: 10px;
}
</style>
<body>
<div class="page">
     <div class="card">
    <h1>ATM Machine Simulation</h1>

    
    <form method="post">
    <label>Account Name:</label><br>
    <input type="text" name="account_name"><br><br>

    <label>Initial Balance:</label><br>
    <input type="number" name="initial_balance"><br><br>

    <label>Action:</label><br>
    <select name="action">
        <option value="check">Check Balance</option>
        <option value="deposit">Deposit</option>
        <option value="withdraw">Withdraw</option>
    </select><br><br>

    <label>Amount:</label><br>
    <input type="number" name="amount"><br><br>

    <input type="submit" value="Submit">

    </form>
</div>
<div class="card">
    <?php
        
        
        class ATM {
            private $accountName;
            private $balance;
            
            function __construct($accountName, $balance) {
                $this->accountName = $accountName;
                $this->balance = $balance;
            }

            public function getAccountName(){
            return $this->accountName;
            }
            
            public function getBalance() {
                return $this->balance;
            }
            public function deposit($amount) {
                $this->balance += $amount;
                return "Deposited: $" . $amount;
            }

          public function withdraw($amount) {
            if ($amount > $this->balance) {
            return "Insufficient balance!";
        } else {
            $this->balance -= $amount;
            return "Withdrawn: $" . $amount;
         }
        

        }
        
 }
   
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $accountName = $_POST["account_name"];
    $initialBalance = $_POST["initial_balance"];
    $action = $_POST["action"];
    $amount = $_POST["amount"];

    $atm = new ATM($accountName, $initialBalance);

    echo "<div class='result'>";

   echo "<h3>Account: " . $atm->getAccountName() . "</h3>";
    $actionLabel = "";

    if ($action == "check") {
    $actionLabel = "Balance Check";
    } elseif ($action == "deposit") {
    $actionLabel = "Deposit of $" . $amount;
    } elseif ($action == "withdraw") {
    $actionLabel = "Withdrawal of $". $amount;
    }

echo "<p>Action: " . $actionLabel . "</p>";

    if ($action == "check") {
        echo "Current Balance: $" . $atm->getBalance();
    }

    elseif ($action == "deposit") {
        echo $atm->deposit($amount);
        echo "<br>New Balance: $" . $atm->getBalance();
    }

    elseif ($action == "withdraw") {
        echo $atm->withdraw($amount);
        echo "<br>Current Balance: $" . $atm->getBalance();
    }

    echo "</div>";
    
}
 
       
    ?>
    </div>
    </div>

</body>
</html>