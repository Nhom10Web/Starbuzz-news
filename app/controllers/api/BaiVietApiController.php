<?php
require_once __DIR__ . '/../../models/BaiViet.php';

class BaiVietApiController {
    private $model;

    public function __construct() {
        $this->model = new BaiViet();
        header("Content-Type: application/json; charset=UTF-8");
    }

    public function index() {
        $data = $this->model->all();
        echo json_encode(['status' => 1, 'data' => $data]);
    }

    public function detail($id) {
        $bv = $this->model->find($id);
        if ($bv) {
            echo json_encode(['status' => 1, 'data' => $bv]);
        } else {
            echo json_encode(['status' => 0, 'message' => 'Bài viết không tồn tại']);
        }
    }

    public function store($input) {
        $id = $this->model->create($input);
        if ($id) {
            echo json_encode(['status' => 1, 'message' => 'Thêm bài viết thành công', 'id' => $id]);
        } else {
            echo json_encode(['status' => 0, 'message' => 'Thêm bài viết thất bại']);
        }
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
