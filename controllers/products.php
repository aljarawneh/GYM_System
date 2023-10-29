<?php



interface GymProduct
{
    public function getName(): string;
    public function getPrice(): float;
}

class DEGOL_Skipping_Rope implements GymProduct
{
    private string $name;
    private float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

class Treadmill implements GymProduct
{
    private string $name;
    private float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

class GymProductFactory
{
    public static function createProduct(string $type, string $name, float $price): GymProduct
    {
        switch ($type) {
            case 'DEGOL_Skipping_Rope':
                return new DEGOL_Skipping_Rope($name, $price);
            case 'treadmill':
                return new Treadmill($name, $price);
            default:
                throw new InvalidArgumentException('Invalid product type');
        }
    }
}

$DEGOL = GymProductFactory::createProduct('DEGOL_Skipping_Rope', 'DEGOL_Skipping_Rope', 170);
$treadmill = GymProductFactory::createProduct('treadmill', 'Treadmill 2000', 500.0);

echo $DEGOL->getName() . ' costs ' . $DEGOL->getPrice() . PHP_EOL . "<br>";
echo $treadmill->getName() . ' costs ' . $treadmill->getPrice() . PHP_EOL . "<br>";



 //require "views/products.view.php"; 
