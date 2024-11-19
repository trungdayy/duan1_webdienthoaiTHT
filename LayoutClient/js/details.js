    // Chọn các phần tử cần thiết từ DOM
    const capacityButtons = document.querySelectorAll('.capacity-options .capacity');
    const contactMessage = document.querySelector('.contact-message');
    const quantityMain = document.querySelector('.quantity-main');
    const price = document.querySelector('.price');
    const purchaseButtons = document.querySelector('.purchase-buttons');
    const quantityInput = document.getElementById('quantity');
    const originalPriceElement = document.getElementById('original-price');
    const totalPriceElement = document.getElementById('total-price');
    const errorMessage = document.getElementById('error-message');
    
    // Hàm xử lý khi người dùng chọn dung lượng
    function handleCapacitySelection(event) {
        const selectedCapacity = event.target.dataset.value;
    
        if (selectedCapacity === '256GB' || selectedCapacity === '512GB') {
            contactMessage.style.display = 'block'; 
            quantityMain.style.display = 'none';
            price.style.display = 'none'; 
            purchaseButtons.style.display = 'none'; 
        } else {
            contactMessage.style.display = 'none';
            quantityMain.style.display = 'block'; 
            price.style.display = 'block'; 
            purchaseButtons.style.display = 'block'; 
        }
    }
    
    // Gán sự kiện cho các nút dung lượng
    capacityButtons.forEach(button => {
        button.addEventListener('click', handleCapacitySelection);
    });
    
    // Hàm thay đổi hình ảnh chính
    function changeMainImage(thumbnail) {
        const mainImage = document.querySelector('.img-main img');
        mainImage.src = thumbnail.src;
    }
    
    // Kiểm tra thông tin trước khi gửi form
    document.getElementById('productForm').addEventListener('submit', function (e) {
        const color = document.querySelector('input[name="color"]:checked');
        const capacity = document.querySelector('input[name="capacity"]:checked');
        const quantity = quantityInput.value;
    
        // Reset thông báo lỗi
        errorMessage.style.display = "none";
        errorMessage.textContent = "";
    
        // Kiểm tra màu sắc
        if (!color) {
            errorMessage.textContent = "Vui lòng chọn màu sắc.";
            errorMessage.style.display = "block";
            e.preventDefault();
            return;
        }
    
        // Kiểm tra dung lượng
        if (!capacity) {
            errorMessage.textContent = "Vui lòng chọn dung lượng.";
            errorMessage.style.display = "block";
            e.preventDefault();
            return;
        }
    
        // Kiểm tra số lượng
        if (!quantity || quantity <= 0 || isNaN(quantity)) {
            errorMessage.textContent = "Số lượng không hợp lệ.";
            errorMessage.style.display = "block";
            e.preventDefault();
        }
    });
    
    // Cập nhật giá khi người dùng thay đổi số lượng
    document.addEventListener('DOMContentLoaded', function() {
        // Lấy giá gốc từ HTML
        const originalPriceElement = document.getElementById('original-price');
        const originalPrice = parseFloat(originalPriceElement.textContent.replace(/[^0-9.-]+/g, ""));
    
        // Lấy phần tử tổng giá
        const totalPriceElement = document.getElementById('total-price');
    
        // Cập nhật giá khi người dùng thay đổi số lượng
        const quantityInput = document.getElementById('quantity');
        
        quantityInput.addEventListener('input', function() {
            const quantityValue = parseInt(quantityInput.value);
    
            // Kiểm tra số lượng hợp lệ
            if (isNaN(quantityValue) || quantityValue < 1) {
                totalPriceElement.textContent = formatNumber(originalPrice) + ' đ';
                return;
            }
    
            // Tính toán giá tổng
            const totalPrice = originalPrice * quantityValue;
            totalPriceElement.textContent = formatNumber(totalPrice) + ' đ';
        });
    
        // Hàm định dạng số tiền
        function formatNumber(num) {
            return num.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
        }
    
        // Khởi tạo giá ban đầu
        totalPriceElement.textContent = formatNumber(originalPrice) + ' đ';
    });
    