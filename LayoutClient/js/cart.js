document.addEventListener('DOMContentLoaded', () => {
    // Lấy tất cả các dòng sản phẩm
    const quantityControls = document.querySelectorAll('.pro-qty');
    const checkoutButton = document.querySelector('.checkout-btn');

    quantityControls.forEach(control => {
        const input = control.querySelector('.qty-input');
        const incrementBtn = control.querySelector('.increment');
        const decrementBtn = control.querySelector('.decrement');

        // Xử lý sự kiện tăng số lượng
        incrementBtn.addEventListener('click', () => {
            let quantity = parseInt(input.value);
            if (!isNaN(quantity)) {
                input.value = quantity + 1;
            }
        });

        // Xử lý sự kiện giảm số lượng
        decrementBtn.addEventListener('click', () => {
            let quantity = parseInt(input.value);
            if (!isNaN(quantity) && quantity > 1) {
                input.value = quantity - 1;
            }
        });

        // Đảm bảo giá trị nhập vào là số hợp lệ
        input.addEventListener('input', () => {
            let value = parseInt(input.value);
            if (isNaN(value) || value <= 0) {
                input.value = 1;
            }
        });

        checkoutButton.addEventListener('click', () => {
            // Đường dẫn tới trang đích
            window.location.href = '?act=thanh-toan';
        });
    });
});
