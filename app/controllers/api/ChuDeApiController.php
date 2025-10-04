<?php
require_once __DIR__ . '/../../models/ChuDe.php';

class ChuDeApiController {
    private $model;

    public function __construct() {
        $this->model = new ChuDe();
        header("Content-Type: application/json; charset=UTF-8");
    }

    public function index() {
        echo json_encode(['status' => 1, 'data' => $this->model->all()]);
    }

    public function store($input) {
        $id = $this->model->create($input);
        echo json_encode($id ? ['status' => 1, 'message' => 'Thêm chuyên mục thành công', 'id' => $id] : ['status' => 0, 'message' => 'Thêm thất bại']);
    }

    public function update($id, $input) {
        $result = $this->model->update($id, $input);
        echo json_encode($result ? ['status' => 1, 'message' => 'Cập nhật thành công'] : ['status' => 0, 'message' => 'Cập nhật thất bại']);
    }

    public function delete($id) {
        $result = $this->model->delete($id);
        echo json_encode($result ? ['status' => 1, 'message' => 'Xóa thành công'] : ['status' => 0, 'message' => 'Xóa thất bại']);
    }
}
