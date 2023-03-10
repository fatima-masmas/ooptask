<?php
class Stock {
    private $symbol;
    private $price;

    public function __construct($symbol, $price) {
        $this->symbol = $symbol;
        $this->price = $price;
    }

    public function getSymbol() {
        return $this->symbol;
    }

    public function getPrice() {
        return $this->price;
    }
}

class Portfolio {
    private $stocks = array();

    public function addStock($stock) {
        $this->stocks[] = $stock;
    }

    public function removeStock($index) {
        if (isset($this->stocks[$index])) {
            unset($this->stocks[$index]);
        }
    }

    public function getStocks() {
        return $this->stocks;
    }

    public function getTotalValue() {
        $total = 0;
        foreach ($this->stocks as $stock) {
            $total += $stock->getPrice();
        }
        return $total;
    }
}

class User {
    private $name;
    private $portfolio;

    public function __construct($name, $portfolio) {
        $this->name = $name;
        $this->portfolio = $portfolio;
    }

    public function getName() {
        return $this->name;
    }

    public function getPortfolio() {
        return $this->portfolio;
    }

    public function buyStock($stock, $quantity) {
        for ($i = 0; $i < $quantity; $i++) {
            $this->portfolio->addStock($stock);
        }
    }

    public function sellStock($symbol, $quantity) {
        $stocks = $this->portfolio->getStocks();
        $count = 0;
        foreach ($stocks as $index => $stock) {
            if ($stock->getSymbol() == $symbol) {
                $this->portfolio->removeStock($index);
                $count++;
                if ($count == $quantity) {
                    break;
                }
            }
        }
    }
}

// Create some stocks
$apple = new Stock("AAPL", 125.5);
$google = new Stock("GOOGL", 2125.75);
$microsoft = new Stock("MSFT", 231.6);

// Create a portfolio
$portfolio = new Portfolio();
$portfolio->addStock($apple);
$portfolio->addStock($google);
$portfolio->addStock($microsoft);

// Create a user
$user = new User("John Doe", $portfolio);

// Buy some stocks
$user->buyStock($apple, 2);
$user->buyStock($google, 1);

// Sell some stocks
$user->sellStock("AAPL", 1);

// Display the user's name and portfolio value
echo "<h2>User: " . $user->getName() . "</h2>";
echo "<p>Portfolio value: $" . $user->getPortfolio()->getTotalValue() . "</p>";

// Display the user's portfolio
echo "<h2>Portfolio</h2>";
echo "<ul>";
foreach ($user->getPortfolio()->getStocks() as $stock) {
    echo "<li>" . $stock->getSymbol() . " - $" . $stock->getPrice() . "</li>";
}
echo "</ul>";
?>
<p>Dies ist ein Beispielabsatz.</p>

