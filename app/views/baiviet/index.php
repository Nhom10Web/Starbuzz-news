<?php include __DIR__ . '/../layout/header.php'; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Danh sách bài viết</h2>
    <a href="index.php?controller=baiviet&action=create" class="btn btn-primary">Thêm bài viết</a>
</div>
<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Chuyên mục</th>
            <th>Người đăng</th>
            <th>Ngày đăng</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($baiviets as $bv): ?>
        <tr>
            <td><?= $bv['id'] ?></td>
            <td><a href="index.php?controller=baiviet&action=detail&id=<?= $bv['id'] ?>"><?= htmlspecialchars($bv['tieu_de']) ?></a></td>
            <td><?= $bv['id_chude'] ?></td>
            <td><?= $bv['id_user'] ?></td>
            <td><?= $bv['ngay_dang'] ?></td>
            <td>
                <span class="badge <?= $bv['trang_thai']=='published'?'bg-success':'bg-secondary' ?>">
                    <?= $bv['trang_thai']=='published'?'Xuất bản':'Nháp' ?>
                </span>
            </td>
            <td>
                <a href="index.php?controller=baiviet&action=edit&id=<?= $bv['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                <a href="index.php?controller=baiviet&action=delete&id=<?= $bv['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Xoá bài này?')">Xoá</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include __DIR__ . '/../layout/footer.php'; ?>