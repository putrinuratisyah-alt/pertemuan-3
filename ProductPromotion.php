<?php
class Product {
    public function __construct(
        public string $name,
        public int $price
    ) {}
}

$p = new Product("Laptop", 15000);
echo "Nama: " . $p->name . "\n";
echo "Harga: " . $p->price . "\n";
