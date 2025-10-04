<?php include __DIR__ . '/../layout/header.php'; ?>
<h2>Sửa thông tin người dùng</h2>
<form method="post" action="index.php?controller=user&action=update&id=<?= $user['id'] ?>">
    <label>Tên đăng nhập: <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>"></label><br>
    <label>Email: <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>"></label><br>
    <label>Vai trò:
        <select name="role">
            <option value="member" <?= $user['role']=='member'?'selected':'' ?>>Thành viên</option>
            <option value="admin" <?= $user['role']=='admin'?'selected':'' ?>>Quản trị viên</option>
        </select>
    </label><br>
    <button type="submit">Lưu thay đổi</button>
</form>
<?php include __DIR__ . '/../layout/footer.php'; ?>