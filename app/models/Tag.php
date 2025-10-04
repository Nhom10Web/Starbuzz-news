<?php
require_once 'Model.php';
class Tag extends Model {
    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM tag ORDER BY ten_tag ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM tag WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getByName($ten_tag) {
        $stmt = $this->db->prepare("SELECT * FROM tag WHERE ten_tag = ?");
        $stmt->execute([$ten_tag]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function add($ten_tag) {
        $stmt = $this->db->prepare("INSERT INTO tag (ten_tag) VALUES (?)");
        return $stmt->execute([$ten_tag]);
    }
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM tag WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>