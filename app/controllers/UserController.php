<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    private $userModel;
    public function __construct() {
        $this->userModel = new User();
    }

    // Hiển thị danh sách user
    public function index() {
        $users = $this->userModel->getAll();
        include __DIR__ . '/../views/user/index.php';
    }

    // Hiển thị form đăng ký
    public function create() {
        include __DIR__ . '/../views/user/create.php';
    }

    // Xử lý đăng ký user
    public function store() {
        if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = md5($_POST['password']); // Lưu ý: chỉ dùng md5 cho demo, thực tế nên dùng password_hash
            $role = $_POST['role'] ?? 'member';
            $this->userModel->add($username, $email, $password, $role);
        }
        header("Location: index.php?controller=user&action=index");
        exit;
    }

    // Hiển thị form sửa user
    public function edit($id) {
        $user = $this->userModel->getById($id);
        include __DIR__ . '/../views/user/edit.php';
    }

    // Xử lý cập nhật user
    public function update($id) {
        if (isset($_POST['username'], $_POST['email'], $_POST['role'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $this->userModel->update($id, $username, $email, $role);
        }
        header("Location: index.php?controller=user&action=index");
        exit;
    }

    // Xóa user
    public function delete($id) {
        $this->userModel->delete($id);
        header("Location: index.php?controller=user&action=index");
        exit;
    }

    // Đăng nhập
    public function login() {
        include __DIR__ . '/../views/user/login.php';
    }

    // Xử lý đăng nhập
    public function checkLogin() {
        if (isset($_POST['username'], $_POST['password'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $user = $this->userModel->checkLogin($username, $password);
            if ($user) {
                $_SESSION['user'] = $user;
                header("Location: index.php");
                exit;
            } else {
                $error = "Sai tài khoản hoặc mật khẩu!";
                include __DIR__ . '/../views/user/login.php';
            }
        }
    }

    // Đăng xuất
    public function logout() {
        unset($_SESSION['user']);
        header("Location: index.php");
        exit;
    }
}
?>