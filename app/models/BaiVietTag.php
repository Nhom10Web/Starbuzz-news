<?php
require_once 'Model.php';
class BaiVietTag extends Model {
    public function getTagsByBaiViet($id_baiviet) {
        $stmt = $this->db->prepare("SELECT tag.* FROM baiviet_tag JOIN tag ON baiviet_tag.id_tag = tag.id WHERE baiviet_tag.id_baiviet = ?");
        $stmt->execute([$id_baiviet]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getBaiVietByTag($id_tag) {
        $stmt = $this->db->prepare("SELECT baiviet.* FROM baiviet_tag JOIN baiviet ON baiviet_tag.id_baiviet = baiviet.id WHERE baiviet_tag.id_tag = ?");
        $stmt->execute([$id_tag]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function add($id_baiviet, $id_tag) {
        $stmt = $this->db->prepare("INSERT IGNORE INTO baiviet_tag (id_baiviet, id_tag) VALUES (?, ?)");
        return $stmt->execute([$id_baiviet, $id_tag]);
    }
    public function delete($id_baiviet, $id_tag) {
        $stmt = $this->db->prepare("DELETE FROM baiviet_tag WHERE id_baiviet = ? AND id_tag = ?");
        return $stmt->execute([$id_baiviet, $id_tag]);
    }
}
?>