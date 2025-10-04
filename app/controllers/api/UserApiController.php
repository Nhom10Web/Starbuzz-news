<?php
require_once __DIR__ . '/../../models/User.php';

class UserApiController {
    private $model;

    public function __construct() {
        $this->model = new User();
        header("Content-Type: application/json; charset=UTF-8");
    }

    public function index() {
        echo json_encode(['status' => 1, 'data' => $this->model->all()]);
    }

    public function store($input) {
        $id = $this->model->create($input);
        echo json_encode($id ? ['status' => 1, 'message' => 'Đăng ký thành công', 'id' => $id] : ['status' => 0, 'message' => 'Đăng ký thất bại']);
    }

    public function update($id, $input) {
        $result = $this->model->update($id, $input);
        echo json_encode($result ? ['status' => 1, 'message' => 'Cập nhật thành công'] : ['status' => 0, 'message' => 'Cập nhật thất bại']);
    }

    public function delete($id) {
        $result = $this->model->delete($id);
        echo json_encode($result ? ['status' => 1, 'message' => 'Xóa thành công'] : ['status' => 0, 'message' => 'Xóa thất bại']);
    }

    public function login($input) {
        $user = $this->model->login($input);
        if ($user) {
            echo json_encode(['status' => 1, 'message' => 'Đăng nhập thành công', 'user' => $user]);
        } else {
            echo json_encode(['status' => 0, 'message' => 'Đăng nhập thất bại']);
        }
    }
}
