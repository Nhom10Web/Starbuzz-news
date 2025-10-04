<?php include __DIR__ . '/../layout/header.php'; ?>
<h2>Đăng ký người dùng mới</h2>
<form method="post" action="index.php?controller=user&action=store">
    <label>Tên đăng nhập: <input type="text" name="username" required></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Mật khẩu: <input type="password" name="password" required></label><br>
    <label>Vai trò:
        <select name="role">
            <option value="member">Thành viên</option>
            <option value="admin">Quản trị viên</option>
        </select>
    </label><br>
    <button type="submit">Đăng ký</button>
</form>
<?php include __DIR__ . '/../layout/footer.php'; ?>