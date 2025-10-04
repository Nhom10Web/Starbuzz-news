<?php include __DIR__ . '/../layout/header.php'; ?>
<h2>Thêm bài viết mới</h2>
<form method="post" action="index.php?controller=baiviet&action=store" class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Tiêu đề:</label>
        <input type="text" name="tieu_de" required class="form-control">
    </div>
    <div class="col-md-6">
        <label class="form-label">Slug:</label>
        <input type="text" name="slug" required class="form-control">
    </div>
    <div class="col-12">
        <label class="form-label">Tóm tắt:</label>
        <textarea name="tom_tat" class="form-control"></textarea>
    </div>
    <div class="col-12">
        <label class="form-label">Nội dung:</label>
        <textarea name="noi_dung" class="form-control"></textarea>
    </div>
    <div class="col-md-6">
        <label class="form-label">Hình ảnh:</label>
        <input type="text" name="hinh_anh" class="form-control">
    </div>
    <div class="col-md-3">
        <label class="form-label">Chuyên mục:</label>
        <select name="id_chude" class="form-select">
            <?php foreach($chudes as $cd): ?>
                <option value="<?= $cd['id'] ?>"><?= htmlspecialchars($cd['ten_chude']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-3">
        <label class="form-label">Người đăng (ID):</label>
        <input type="number" name="id_user" value="1" class="form-control">
    </div>
    <div class="col-md-3">
        <label class="form-label">Trạng thái:</label>
        <select name="trang_thai" class="form-select">
            <option value="draft">Nháp</option>
            <option value="published">Xuất bản</option>
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-success">Lưu</button>
    </div>
</form>
<?php include __DIR__ . '/../layout/footer.php'; ?>