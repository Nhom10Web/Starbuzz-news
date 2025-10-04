<?php
require_once __DIR__ . '/../models/Tag.php';

class TagController {
    private $tagModel;

    public function __construct() {
        $this->tagModel = new Tag();
    }

    public function index() {
        $tags = $this->tagModel->getAll();
        include __DIR__ . '/../views/tag/index.php';
    }

    public function create() {
        include __DIR__ . '/../views/tag/create.php';
    }

    public function store() {
        if (isset($_POST['ten_tag'])) {
            $ten_tag = $_POST['ten_tag'];
            $this->tagModel->add($ten_tag);
        }
        header("Location: index.php?controller=tag&action=index");
        exit;
    }

    public function delete($id) {
        $this->tagModel->delete($id);
        header("Location: index.php?controller=tag&action=index");
        exit;
    }
}
?>