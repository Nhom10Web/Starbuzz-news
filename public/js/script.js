// Ví dụ: thông báo khi nhấn nút "Xem chi tiết"
document.addEventListener('DOMContentLoaded', function() {
    let buttons = document.querySelectorAll('.btn-primary');
    buttons.forEach(function(btn){
        btn.addEventListener('click', function(e){
            e.preventDefault();
            alert('Chức năng xem chi tiết sẽ được cập nhật!');
        });
    });
});