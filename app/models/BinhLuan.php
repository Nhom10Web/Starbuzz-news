<?php
require_once 'Model.php';
class BinhLuan extends Model {
    public function getAllByBaiViet($id_baiviet) {
        $stmt = $this->db->prepare("SELECT binhluan.*, user.username FROM binhluan JOIN user ON binhluan.id_user = user.id WHERE binhluan.id_baiviet = ? ORDER BY ngay_dang ASC");
        $stmt->execute([$id_baiviet]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function add($id_baiviet, $id_user, $noi_dung) {
        $stmt = $this->db->prepare("INSERT INTO binhluan (id_baiviet, id_user, noi_dung) VALUES (?, ?, ?)");
        return $stmt->execute([$id_baiviet, $id_user, $noi_dung]);
    }
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM binhluan WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>