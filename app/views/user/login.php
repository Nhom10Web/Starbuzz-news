<?php include __DIR__ . '/../layout/header.php'; ?>
<h2 class="text-center">Đăng nhập</h2>
<?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
<form method="post" action="index.php?controller=user&action=checkLogin" class="w-50 mx-auto">
    <div class="mb-3">
        <label for="username" class="form-label">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required class="form-control">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mật khẩu:</label>
        <input type="password" id="password" name="password" required class="form-control">
    </div>
    <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
</form>
<?php include __DIR__ . '/../layout/footer.php'; ?>