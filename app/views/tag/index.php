<?php include __DIR__ . '/../layout/header.php'; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Danh sách Tag</h2>
    <a href="index.php?controller=tag&action=create" class="btn btn-primary">Thêm tag</a>
</div>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên Tag</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tags as $tg): ?>
    <tr>
        <td><?= $tg['id'] ?></td>
        <td><?= htmlspecialchars($tg['ten_tag']) ?></td>
        <td>
            <a href="index.php?controller=tag&action=edit&id=<?= $tg['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
            <a href="index.php?controller=tag&action=delete&id=<?= $tg['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Xoá tag này?')">Xoá</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php include __DIR__ . '/../layout/footer.php'; ?>