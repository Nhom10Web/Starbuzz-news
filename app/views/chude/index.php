<?php include __DIR__ . '/../layout/header.php'; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Chuyên mục</h2>
    <a href="index.php?controller=chude&action=create" class="btn btn-primary">Thêm chuyên mục</a>
</div>
<table class="table table-bordered table-hover">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Tên chuyên mục</th>
            <th>Mô tả</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($chudes as $cd): ?>
    <tr>
        <td><?= $cd['id'] ?></td>
        <td><?= htmlspecialchars($cd['ten_chude']) ?></td>
        <td><?= htmlspecialchars($cd['mo_ta']) ?></td>
        <td>
            <a href="index.php?controller=chude&action=edit&id=<?= $cd['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
            <a href="index.php?controller=chude&action=delete&id=<?= $cd['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Xoá chuyên mục này?')">Xoá</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php include __DIR__ . '/../layout/footer.php'; ?>