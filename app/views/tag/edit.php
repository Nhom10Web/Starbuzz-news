<?php include __DIR__ . '/../layout/header.php'; ?>
<h2>Sửa tag</h2>
<form method="post" action="index.php?controller=tag&action=update&id=<?= $tag['id'] ?>" class="w-50 mx-auto">
    <div class="mb-3">
        <label class="form-label">Tên tag:</label>
        <input type="text" name="ten_tag" value="<?= htmlspecialchars($tag['ten_tag']) ?>" required class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Cập nhật</button>
</form>
<?php include __DIR__ . '/../layout/footer.php'; ?>