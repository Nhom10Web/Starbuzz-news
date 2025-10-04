<?php include __DIR__ . '/../layout/header.php'; ?>
<h2>Sửa bài viết</h2>
<form method="post" action="index.php?controller=baiviet&action=update&id=<?= $baiviet['id'] ?>">
    <label>Tiêu đề: <input type="text" name="tieu_de" value="<?= htmlspecialchars($baiviet['tieu_de']) ?>"></label><br>
    <label>Slug: <input type="text" name="slug" value="<?= htmlspecialchars($baiviet['slug']) ?>"></label><br>
    <label>Tóm tắt: <textarea name="tom_tat"><?= htmlspecialchars($baiviet['tom_tat']) ?></textarea></label><br>
    <label>Nội dung: <textarea name="noi_dung"><?= htmlspecialchars($baiviet['noi_dung']) ?></textarea></label><br>
    <label>Hình ảnh: <input type="text" name="hinh_anh" value="<?= htmlspecialchars($baiviet['hinh_anh']) ?>"></label><br>
    <label>Chuyên mục:
        <select name="id_chude">
            <?php foreach($chudes as $cd): ?>
                <option value="<?= $cd['id'] ?>" <?= $baiviet['id_chude']==$cd['id']?'selected':'' ?>>
                    <?= htmlspecialchars($cd['ten_chude']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label><br>
    <label>Trạng thái:
        <select name="trang_thai">
            <option value="draft" <?= $baiviet['trang_thai']=='draft'?'selected':'' ?>>Nháp</option>
            <option value="published" <?= $baiviet['trang_thai']=='published'?'selected':'' ?>>Xuất bản</option>
        </select>
    </label><br>
    <button type="submit">Cập nhật</button>
</form>
<?php include __DIR__ . '/../layout/footer.php'; ?>