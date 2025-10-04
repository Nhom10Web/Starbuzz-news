<?php
require_once __DIR__ . '/../models/BaiViet.php';
require_once __DIR__ . '/../models/ChuDe.php';
require_once __DIR__ . '/../models/User.php';

class BaiVietController {
    private $baivietModel;
    private $chudeModel;
    private $userModel;

    public function __construct() {
        $this->baivietModel = new BaiViet();
        $this->chudeModel = new ChuDe();
        $this->userModel = new User();
    }

    // Hiển thị danh sách bài viết
    public function index() {
        $baiviets = $this->baivietModel->getAll();
        include __DIR__ . '/../views/baiviet/index.php';
    }

    // Xem chi tiết bài viết
    public function detail($id) {
        $baiviet = $this->baivietModel->getById($id);
        include __DIR__ . '/../views/baiviet/detail.php';
    }

    // Hiển thị form thêm bài viết
    public function create() {
        $chudes = $this->chudeModel->getAll();
        include __DIR__ . '/../views/baiviet/create.php';
    }

    // Xử lý thêm bài viết
    public function store() {
        if (isset($_POST['tieu_de'], $_POST['slug'], $_POST['tom_tat'], $_POST['noi_dung'], $_POST['id_chude'], $_POST['id_user'])) {
            $tieu_de = $_POST['tieu_de'];
            $slug = $_POST['slug'];
            $tom_tat = $_POST['tom_tat'];
            $noi_dung = $_POST['noi_dung'];
            $hinh_anh = $_POST['hinh_anh'] ?? null;
            $id_chude = $_POST['id_chude'];
            $id_user = $_POST['id_user'];
            $trang_thai = $_POST['trang_thai'] ?? 'draft';
            $this->baivietModel->add($tieu_de, $slug, $tom_tat, $noi_dung, $hinh_anh, $id_chude, $id_user, $trang_thai);
        }
        header("Location: index.php?controller=baiviet&action=index");
        exit;
    }

    // Hiển thị form sửa bài viết
    public function edit($id) {
        $baiviet = $this->baivietModel->getById($id);
        $chudes = $this->chudeModel->getAll();
        include __DIR__ . '/../views/baiviet/edit.php';
    }

    // Xử lý cập nhật bài viết
    public function update($id) {
        if (isset($_POST['tieu_de'], $_POST['slug'], $_POST['tom_tat'], $_POST['noi_dung'], $_POST['hinh_anh'], $_POST['id_chude'], $_POST['trang_thai'])) {
            $tieu_de = $_POST['tieu_de'];
            $slug = $_POST['slug'];
            $tom_tat = $_POST['tom_tat'];
            $noi_dung = $_POST['noi_dung'];
            $hinh_anh = $_POST['hinh_anh'] ?? null;
            $id_chude = $_POST['id_chude'];
            $trang_thai = $_POST['trang_thai'];
            $this->baivietModel->update($id, $tieu_de, $slug, $tom_tat, $noi_dung, $hinh_anh, $id_chude, $trang_thai);
        }
        header("Location: index.php?controller=baiviet&action=index");
        exit;
    }

    // Xóa bài viết
    public function delete($id) {
        $this->baivietModel->delete($id);
        header("Location: index.php?controller=baiviet&action=index");
        exit;
    }
}
?>