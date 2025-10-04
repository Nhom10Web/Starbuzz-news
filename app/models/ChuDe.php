<?php
require_once 'Model.php';
class ChuDe extends Model {
    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM chude ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM chude WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function add($ten_chude, $mo_ta) {
        $stmt = $this->db->prepare("INSERT INTO chude (ten_chude, mo_ta) VALUES (?, ?)");
        return $stmt->execute([$ten_chude, $mo_ta]);
    }

    public function update($id, $ten_chude, $mo_ta) {
        $stmt = $this->db->prepare("UPDATE chude SET ten_chude = ?, mo_ta = ? WHERE id = ?");
        return $stmt->execute([$ten_chude, $mo_ta, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM chude WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>