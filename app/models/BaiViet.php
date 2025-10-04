<?php
require_once 'Model.php';
class BaiViet extends Model {
    // Lấy tất cả bài viết (có thể phân trang bổ sung thêm)
    public function getAll($limit = 20, $offset = 0) {
        $stmt = $this->db->prepare("SELECT * FROM baiviet ORDER BY ngay_dang DESC LIMIT ? OFFSET ?");
        $stmt->bindValue(1, (int)$limit, PDO::PARAM_INT);
        $stmt->bindValue(2, (int)$offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM baiviet WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getBySlug($slug) {
        $stmt = $this->db->prepare("SELECT * FROM baiviet WHERE slug = ?");
        $stmt->execute([$slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function add($tieu_de, $slug, $tom_tat, $noi_dung, $hinh_anh, $id_chude, $id_user, $trang_thai = 'draft') {
        $stmt = $this->db->prepare("INSERT INTO baiviet (tieu_de, slug, tom_tat, noi_dung, hinh_anh, id_chude, id_user, trang_thai) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$tieu_de, $slug, $tom_tat, $noi_dung, $hinh_anh, $id_chude, $id_user, $trang_thai]);
    }
    public function update($id, $tieu_de, $slug, $tom_tat, $noi_dung, $hinh_anh, $id_chude, $trang_thai) {
        $stmt = $this->db->prepare("UPDATE baiviet SET tieu_de=?, slug=?, tom_tat=?, noi_dung=?, hinh_anh=?, id_chude=?, trang_thai=? WHERE id=?");
        return $stmt->execute([$tieu_de, $slug, $tom_tat, $noi_dung, $hinh_anh, $id_chude, $trang_thai, $id]);
    }
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM baiviet WHERE id = ?");
        return $stmt->execute([$id]);
    }
    public function getByCategory($id_chude, $limit = 20) {
        $stmt = $this->db->prepare("SELECT * FROM baiviet WHERE id_chude = ? AND trang_thai = 'published' ORDER BY ngay_dang DESC LIMIT ?");
        $stmt->execute([$id_chude, $limit]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getPublished($limit = 10) {
        $stmt = $this->db->prepare("SELECT * FROM baiviet WHERE trang_thai = 'published' ORDER BY ngay_dang DESC LIMIT ?");
        $stmt->execute([$limit]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // ... các phương thức tìm kiếm, lọc, v.v. bổ sung nếu cần
}
?>