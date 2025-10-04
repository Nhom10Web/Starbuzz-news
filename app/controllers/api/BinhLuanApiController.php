<?php
require_once __DIR__ . '/../../models/BinhLuan.php';

class BinhLuanApiController {
    private $model;

    public function __construct() {
        $this->model = new BinhLuan();
        header("Content-Type: application/json; charset=UTF-8");
    }

    public function getByBaiViet($id_baiviet) {
        $binhluans = $this->model->getByBaiViet($id_baiviet);
        echo json_encode(['status' => 1, 'data' => $binhluans]);
    }

    public function store($input) {
        $id = $this->model->create($input);
        echo json_encode($id ? ['status' => 1, 'message' => 'Thêm bình luận thành công', 'id' => $id] : ['status' => 0, 'message' => 'Thêm bình luận thất bại']);
    }

    public function delete($id) {
        $result = $this->model->delete($id);
        echo json_encode($result ? ['status' => 1, 'message' => 'Xóa bình luận thành công'] : ['status' => 0, 'message' => 'Xóa thất bại']);
    }
}
