<?php include __DIR__ . '/../layout/header.php'; ?>
<h2>Sửa chuyên mục</h2>
<form method="post" action="index.php?controller=chude&action=update&id=<?= $chude['id'] ?>">
    <label>Tên chuyên mục: <input type="text" name="ten_chude" value="<?= htmlspecialchars($chude['ten_chude']) ?>"></label><br>
    <label>Mô tả: <textarea name="mo_ta"><?= htmlspecialchars($chude['mo_ta']) ?></textarea></label><br>
    <button type="submit">Cập nhật</button>
</form>
<?php include __DIR__ . '/../layout/footer.php'; ?>