<?php
class User {
    public function __construct(
        public string $name = "Guest",
        public int $age = 0
    ) {}
}

$u1 = new User();
$u2 = new User("Rani", 22);

echo "User 1: " . $u1->name . "\n";
echo "User 2: " . $u2->name . "\n";
