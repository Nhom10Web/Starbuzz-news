<?php
require_once __DIR__ . '/../models/BaiVietTag.php';

class BaiVietTagController {
    private $baivietTagModel;

    public function __construct() {
        $this->baivietTagModel = new BaiVietTag();
    }

    // Thêm tag cho bài viết
    public function store() {
        if (isset($_POST['id_baiviet'], $_POST['id_tag'])) {
            $id_baiviet = $_POST['id_baiviet'];
            $id_tag = $_POST['id_tag'];
            $this->baivietTagModel->add($id_baiviet, $id_tag);
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }

    // Xóa tag khỏi bài viết
    public function delete() {
        if (isset($_GET['id_baiviet'], $_GET['id_tag'])) {
            $id_baiviet = $_GET['id_baiviet'];
            $id_tag = $_GET['id_tag'];
            $this->baivietTagModel->delete($id_baiviet, $id_tag);
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
?>