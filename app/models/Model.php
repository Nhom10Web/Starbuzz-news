<?php
class Model {
    protected $db;

    public function __construct() {
        // Thay đổi thông tin kết nối cho phù hợp
        $host = 'localhost';
        $dbname = 'db_tintuc'; // Đúng tên db của bạn
        $username = 'root'; // Nếu bạn đổi user thì thay lại
        $password = '';     // XAMPP mặc định là rỗng
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Lỗi kết nối DB: " . $e->getMessage());
        }
    }
}
?>