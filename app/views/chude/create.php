<?php include __DIR__ . '/../layout/header.php'; ?>
<h2>Thêm chuyên mục</h2>
<form method="post" action="index.php?controller=chude&action=store">
    <label>Tên chuyên mục: <input type="text" name="ten_chude" required></label><br>
    <label>Mô tả: <textarea name="mo_ta"></textarea></label><br>
    <button type="submit">Thêm</button>
</form>
<?php include __DIR__ . '/../layout/footer.php'; ?>