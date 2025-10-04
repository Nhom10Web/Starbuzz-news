<?php include __DIR__ . '/../layout/header.php'; ?>
<h2>Thêm tag mới</h2>
<form method="post" action="index.php?controller=tag&action=store">
    <label>Tên tag: <input type="text" name="ten_tag" required></label><br>
    <button type="submit">Thêm</button>
</form>
<?php include __DIR__ . '/../layout/footer.php'; ?>