<?php include __DIR__ . '/../layout/header.php'; ?>
<h2>Danh sách người dùng</h2>
<a href="index.php?controller=user&action=create">Đăng ký thành viên</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Tên đăng nhập</th>
        <th>Email</th>
        <th>Vai trò</th>
        <th>Thao tác</th>
    </tr>
    <?php foreach ($users as $u): ?>
    <tr>
        <td><?= $u['id'] ?></td>
        <td><?= htmlspecialchars($u['username']) ?></td>
        <td><?= htmlspecialchars($u['email']) ?></td>
        <td><?= $u['role'] ?></td>
        <td>
            <a href="index.php?controller=user&action=edit&id=<?= $u['id'] ?>">Sửa</a> |
            <a href="index.php?controller=user&action=delete&id=<?= $u['id'] ?>" onclick="return confirm('Xoá?')">Xoá</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include __DIR__ . '/../layout/footer.php'; ?>