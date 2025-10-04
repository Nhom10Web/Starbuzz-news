<?php include __DIR__ . '/../layout/header.php'; ?>
<div class="row">
    <div class="col-md-8">
        <div class="card mb-3">
            <?php if(!empty($baiviet['hinh_anh'])): ?>
                <img src="public/images/<?= htmlspecialchars($baiviet['hinh_anh']) ?>" class="card-img-top" alt="<?= htmlspecialchars($baiviet['tieu_de']) ?>">
            <?php endif; ?>
            <div class="card-body">
                <h2 class="card-title"><?= htmlspecialchars($baiviet['tieu_de']) ?></h2>
                <div class="mb-2 text-muted">
                    <small>Chuyên mục: 
                        <a href="index.php?controller=chude&action=index&id=<?= $baiviet['id_chude'] ?>">
                            <?= htmlspecialchars($baiviet['id_chude']) ?>
                        </a>
                    </small>
                    <span class="mx-2">|</span>
                    <small>Ngày đăng: <?= $baiviet['ngay_dang'] ?></small>
                </div>
                <p class="card-text"><b>Tóm tắt:</b> <?= htmlspecialchars($baiviet['tom_tat']) ?></p>
                <div>
                    <?= nl2br(htmlspecialchars($baiviet['noi_dung'])) ?>
                </div>
            </div>
        </div>

        <!-- Nhúng bình luận -->
        <?php
        // $binhluans là danh sách bình luận truyền từ Controller
        include __DIR__ . '/../binhluan/index.php';
        ?>
        <!-- Form bình luận -->
        <?php if(isset($_SESSION['user'])): ?>
            <form method="post" action="index.php?controller=binhluan&action=store" class="mt-3">
                <input type="hidden" name="id_baiviet" value="<?= $baiviet['id'] ?>">
                <input type="hidden" name="id_user" value="<?= $_SESSION['user']['id'] ?>">
                <div class="mb-3">
                    <label class="form-label">Bình luận của bạn:</label>
                    <textarea name="noi_dung" rows="3" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi bình luận</button>
            </form>
        <?php else: ?>
            <div class="alert alert-info mt-3">
                <a href="index.php?controller=user&action=login">Đăng nhập</a> để bình luận.
            </div>
        <?php endif; ?>
    </div>
</div>
<?php include __DIR__ . '/../layout/footer.php'; ?>