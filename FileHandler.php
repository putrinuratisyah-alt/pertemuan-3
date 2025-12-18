<?php
class FileHandler {
    private $handle;

    public function __construct(string $filename) {
        echo "Membuka file...\n";
        $this->handle = fopen($filename, "w");
        if ($this->handle === false) {
             die("Gagal membuka file: $filename");
        }
    }

    public function write (string $text) {
        fwrite($this->handle, $text);
    }

    public function __destruct() {
        if (is_resource($this->handle)) {
            echo "Menutup file...\n";
            fclose($this->handle);
        }
    }
}

$f = new FileHandler("output.txt");
$f->write("Halo, ini baris pertama\n");
$f->write("Ini baris kedua\n");
echo "Selesai menulis ke file\n";

