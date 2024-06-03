<!-- models/ChatModel.php -->
<?php
require_once '../config/database.php';

class ChatModel
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }
    public function getNewMessages($pengirim, $penerima, $lastId)
{
    $query = "SELECT * FROM pesan WHERE id > ? AND ((pengirim = ? AND penerima = ?) OR (pengirim = ? AND penerima = ?)) ORDER BY waktu ASC";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute([$lastId, $pengirim, $penerima, $penerima, $pengirim]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    public function getPesan($pengirim, $penerima)
    {
        $query = "SELECT * FROM pesan WHERE (pengirim = ? AND penerima = ?) OR (pengirim = ? AND penerima = ?) ORDER BY waktu ASC";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$pengirim, $penerima, $penerima, $pengirim]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function kirimPesan($pengirim, $penerima, $pesan)
    {
        $query = "INSERT INTO pesan (pengirim, penerima, pesan, waktu) VALUES (?, ?, ?, NOW())";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$pengirim, $penerima, $pesan]);
    }
}