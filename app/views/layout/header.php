<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang tin tức giải trí</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- b5-navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
      <div class="container">
        <a class="navbar-brand" href="index.php">Tin tức Giải trí</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php?controller=baiviet&action=index">Bài viết</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?controller=chude&action=index">Chuyên mục</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?controller=tag&action=index">Tag</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?controller=user&action=index">Người dùng</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <?php if(isset($_SESSION['user'])): ?>
              <li class="nav-item"><a class="nav-link" href="#"><?= htmlspecialchars($_SESSION['user']['username']) ?></a></li>
              <li class="nav-item"><a class="nav-link" href="index.php?controller=user&action=logout">Đăng xuất</a></li>
            <?php else: ?>
              <li class="nav-item"><a class="nav-link" href="index.php?controller=user&action=login">Đăng nhập</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">