<?php

class BankAccount {
    private $accountNumber;
    private $balance;
    private $accountHolderName;

    public function __construct($accountNumber, $balance, $accountHolderName) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        $this->accountHolderName = $accountHolderName;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }

    public function getAccountHolderName() {
        return $this->accountHolderName;
    }

    public function setAccountHolderName($accountHolderName) {
        $this->accountHolderName = $accountHolderName;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
            echo 'Insufficient funds';
        }
    }
}


// Include the BankAccount class
include 'bank_account.php';

// Check if the form has been submitted
if (isset($_POST['accountNumber']) && isset($_POST['balance']) && isset($_POST['accountHolderName'])) {
   
}else{
    echo (" Weiter");
}

?>




<!DOCTYPE html>
<html>
<head>
    <title>Bank Account Management System</title>
</head>
<body>
    <h1>Bank Account Management System</h1>

    <h2>Create Account</h2>
    <form method="post" action="create_account.php">
        <label for="accountNumber">Account Number:</label>
        <input type="text" id="accountNumber" name="accountNumber" required><br>

        <label for="balance">Balance:</label>
        <input type="number" id="balance" name="balance" min="0" required><br>

        <label for="accountHolderName">Account Holder Name:</label>
        <input type="text" id="accountHolderName" name="accountHolderName" required><br>

        <input type="submit" value="Create Account">
    </form>

    <h2>Deposit/Withdraw</h2>
    <form method="post" action="deposit_withdraw.php">
        <label for="accountNumber">Account Number:</label>
        <input type="text" id="accountNumber" name="accountNumber" required><br>

        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" min="0" required><br>

        <label for="transactionType">Transaction Type:</label>
        <select id="transactionType" name="transactionType" required>
            <option value="deposit">Deposit</option>
            <option value="withdraw">Withdraw</option>
        </select><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
// Include the BankAccount class
include 'bank_account.php';

// Check if the form has been submitted
if (isset($_POST['accountNumber']) && isset($_POST['amount']) && isset($_POST['transactionType'])) {
    // Get the form data
    $accountNumber = $_POST['accountNumber'];
    $amount = $_POST['amount'];
    $transactionType = $_POST['transactionType'];

    
    if ($transactionType == 'deposit') {
        // Deposit the amount into the account
        $account->deposit($amount);
        echo '<h3>Deposit Successful</h3>';
        echo 'Account Number: ' . $account->getAccountNumber() . '<br>';
        echo 'New Balance: $' . $account->getBalance() . '<br>';
    } else {
        // Withdraw the amount from the account
        $account->withdraw($amount);
        echo '<h3>Withdrawal Successful</h3>';
        echo 'Account Number: ' . $account->getAccountNumber() . '<br>';
        echo 'New Balance: $' . $account->getBalance() . '<br>';
    }
}

// Get the form data
$accountNumber = $_POST['accountNumber'];
$balance = $_POST['balance'];
$accountHolderName = $_POST['accountHolderName'];

// Create a new BankAccount object
$account = new BankAccount($accountNumber, $balance, $accountHolderName);

// Print out the details of the new account
echo '<h3>Account Created</h3>';
echo 'Account Number: ' . $account->getAccountNumber() . '<br>';
echo 'Balance: $' . $account->getBalance() . '<br>';
echo 'Account Holder Name: ' . $account->getAccountHolderName() . '<br>';
?>

