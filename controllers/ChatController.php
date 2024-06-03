<!-- controllers/ChatController.php -->
<?php
require_once '../models/ChatModel.php';

class ChatController
{
    public $model;

    public function __construct()
    {
        $this->model = new ChatModel();
    }

    public function index($pengirim, $penerima)
    {
        $pesan = $this->model->getPesan($pengirim, $penerima);
        require_once '../views/chat.php';
    }

    public function kirimPesan()
    {
        $pengirim = $_POST['pengirim'];
        $penerima = $_POST['penerima'];
        $pesan = $_POST['pesan'];
        $this->model->kirimPesan($pengirim, $penerima, $pesan);
    }
    public function getNewMessages($pengirim, $penerima, $lastId)
{
    $model = new ChatModel();
    $messages = $model->getNewMessages($pengirim, $penerima, $lastId);
    echo json_encode($messages);
}
}