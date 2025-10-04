<div class="mt-4">
    <h4>Bình luận</h4>
    <?php if (isset($binhluans) && count($binhluans) > 0): ?>
        <?php foreach($binhluans as $bl): ?>
        <div class="border rounded p-2 mb-2 bg-light">
            <strong><?= htmlspecialchars($bl['username']) ?>:</strong>
            <?= htmlspecialchars($bl['noi_dung']) ?>
            <small class="text-muted float-end"><?= $bl['ngay_dang'] ?></small>
        </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Chưa có bình luận nào.</p>
    <?php endif; ?>
</div>