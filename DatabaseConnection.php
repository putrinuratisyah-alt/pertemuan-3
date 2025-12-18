<?php
// Pastikan database 'test' ada di MySQL/MariaDB
class DatabaseConnection {
    private ?PDO $connection = null;

    public function __construct(string $dsn, string $user, string $pass) {
        echo "Membuka koneksi database...\n";
        // Pastikan error handling yang tepat ditambahkan di lingkungan nyata
        $this->connection = new PDO($dsn, $user, $pass);
    }

    public function query (string $sql) {
        return $this->connection->query($sql);
    }

    public function __destruct() {
        echo "Menutup koneksi database...\n";
        $this->connection = null; // Menutup koneksi PDO
    }
}

$db = new DatabaseConnection(
    "mysql:host=localhost;dbname=test", 
    "root", 
    "" // Ganti dengan password Anda
);

echo "Koneksi database aktif\n";
// Contoh penggunaan: $db->query("SELECT * FROM users");
