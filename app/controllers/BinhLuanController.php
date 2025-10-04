<?php
require_once __DIR__ . '/../models/BinhLuan.php';

class BinhLuanController {
    private $binhluanModel;

    public function __construct() {
        $this->binhluanModel = new BinhLuan();
    }

    // Hiển thị tất cả bình luận của một bài viết
    public function index($id_baiviet) {
        $binhluans = $this->binhluanModel->getAllByBaiViet($id_baiviet);
        include __DIR__ . '/../views/binhluan/index.php';
    }

    // Xử lý thêm bình luận
    public function store() {
        if (isset($_POST['id_baiviet'], $_POST['id_user'], $_POST['noi_dung'])) {
            $id_baiviet = $_POST['id_baiviet'];
            $id_user = $_POST['id_user'];
            $noi_dung = $_POST['noi_dung'];
            $this->binhluanModel->add($id_baiviet, $id_user, $noi_dung);
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }

    // Xóa bình luận
    public function delete($id) {
        $this->binhluanModel->delete($id);
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
?>