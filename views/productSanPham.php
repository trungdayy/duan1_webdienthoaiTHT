<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Poppins, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }


        header {
            display: flex;
            align-items: center;
            max-height: 70px;
            width: 100%;
            justify-content: space-between;
            /* font-weight: bold; */
            /* position: fixed; */
            background: #fff;
            transition: top 0.3s ease, opacity 0.3s ease;
            /* Thêm chuyển động mượt */
            opacity: 1;
        }

        header img {
            width: 10%;
            margin-left: 30px;
            display: flex;
            justify-content: space-between;

        }

        .icon1 {
            margin-right: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            box-sizing: border-box;
        }

        #search-box {
            display: flex;
            align-items: center;
        }

        .search-container {
            position: relative;
        }

        #search-text {
            padding: 10px 15px;
            font-size: 10px;
            outline: none;
            border: 1px solid orange;
            border-radius: 50px;
            width: 0;
            opacity: 0;
            transition: width 0.3s ease, opacity 0.3s ease;
        }

        #search-btn {
            position: absolute;
            right: 1px;
            top: 50%;
            transform: translateY(-50%);
            background: orange;
            border: none;
            cursor: pointer;
            padding: 6px 10px;
            color: #fff;
            font-size: 18px;
            border-radius: 50px;
        }

        .search-container:hover #search-text {
            width: 200px;
            /* Chiều rộng của ô input khi hover */
            opacity: 1;
            padding-right: 40px;
            /* Thêm khoảng trống cho icon */
        }


        .material-symbols-outlined {
            font-size: 24px;
            margin-left: 15px;
            cursor: pointer;
            color: orange;
        }

        /* banner */
        .banner img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
        }

        .banner {
            position: relative;
            overflow: hidden;
            width: 100%;
            /* max-width: 1200px; */
            margin: auto;
        }

        .slider {
            position: relative;
            width: 100%;
            overflow: hidden;
            height: 420px;
            /* Chiều cao slider */
        }

        .slides {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            /* Ban đầu các slide đều ẩn */
            transition: opacity 1s ease-in-out;
            /* Hiệu ứng mờ dần */
            background: lightgray;
            /* Background tạm thời */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .slide.active {
            opacity: 1;
            /* Slide đang hoạt động sẽ hiển thị */
            z-index: 1;
            /* Đưa slide đang hoạt động lên trên */
        }

        .dots {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .dot {
            width: 12px;
            height: 12px;
            background-color: #fff;
            border-radius: 50%;
            cursor: pointer;
            opacity: 0.5;
            transition: opacity 0.3s, background-color 0.3s;
        }

        .dot.active {
            opacity: 1;
            background-color: #555;
        }


        .banner img {
            width: 100%;
            max-height: 500px;
            /* Giới hạn chiều cao tối đa */
            object-fit: cover;
            /* Giữ tỷ lệ ảnh và điều chỉnh phù hợp với khung */
        }

        /* Nút điều hướng */
        button.prev,
        button.next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 15px;
            z-index: 20;
            font-size: 18px;
            border-radius: 50%;
        }

        button.prev {
            left: 10px;
            /* Căn trái */
        }

        button.next {
            right: 10px;
            /* Căn phải */
        }

        button.prev:hover,
        button.next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* menu */
        nav ul {
            display: flex;
            text-align: center;
            gap: 50px;

            font-size: 22px;
            /* justify-content: space-between; */

        }

        nav ul li {
            list-style: none;
        }

        nav ul li a {
            text-decoration: none;
            color: black;
            transition: 0.3s ease, color 0.3s ease;
            padding: 10px 10px;

        }

        nav ul li a:hover {
            color: #fff;
            background-color: orange;
            border-radius: 5px;
        }


        .container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .categories {
            width: 20%;
            /* position: fixed; */

        }

        .categories h3 {
            margin-bottom: 10px;
            color: #333;
        }

        .categories ul {
            list-style: none;
        }

        .categories ul li {
            margin-bottom: 5px;
        }

        .categories ul li a {
            color: #333;
            text-decoration: none;
        }

        .categories ul li a:hover {
            color: #FF6600;
        }

        .product-list {
            width: 80%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .product {
            background-color: #f9f9f9;
            border: 1px solid orange;
            padding: 15px;
            /* text-align: center; */
            border-radius: 5px;
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .product h4 {
            font-size: 1.1em;
            margin-top: 10px;
        }

        .product p {
            color: #555;
        }

        .product .price {
            font-weight: bold;
            color: #FF6600;
            margin-top: 5px;
            margin-left: 0 55px;
        }

        .product button {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #FF6600;
            background-color: white;
            color: #FF6600;
            cursor: pointer;
            border-radius: 5px;
            width: 250px;

        }

        .product button:hover {
            background-color: #FF6600;
            color: white;
        }

        .pagination button {
            padding: 10px 20px;
            margin: 5px;
            border: 1px solid #FF6600;
            background-color: white;
            color: #FF6600;
            /* cursor: pointer; */
            border-radius: 5px;
        }

        .pagination button:hover {
            background-color: #FF6600;
            color: white;
        }

        /* footer */
        .footer1 {
            height: 186px;
            background-color: #fff7ed;
            display: flex;
            align-items: center;
            grid-gap: 180px;
            justify-content: center;
            font-weight: bold;
            line-height: 10px;
        }

        .icon img {
            width: 50px;
            display: flex;
            align-items: center;
            padding-bottom: 10px;

        }

        footer {
            background-color: #333;
            color: #fff;
            padding: auto;
            text-align: center;
            padding: 30px 90px;
        }

        .container2 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            height: 300px;

        }

        .footer-column {
            flex: 1;
            /* max-width: 200px; */
            margin: 0 80px;
        }

        .logo {
            text-align: center;
            justify-content: center;
            float: left;
        }

        .logo img {
            width: 20%;
            /* margin-left: 30px; */
            display: flex;
            /* justify-content: space-between; */
        }

        .logo p {
            margin-left: 5px;
            float: left;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #fff;
        }

        .footer-column p,
        .footer-column a {
            color: #b5b5b5;
            font-size: 14px;
            text-decoration: none;
            line-height: 1.6;
        }

        .footer-column a:hover {
            color: #fff;
        }

        p3 {
            margin-bottom: -15px 0;
            text-align: center;
        }

        /* Copyright Section */
        .footer-bottom {
            text-align: center;
            color: #b5b5b5;
            padding: 20px 0;
            font-size: 12px;
            border-top: 1px solid #444;
        }
    </style>
</head>

<body>

    <?php require_once 'views/layout/menu.php' ?>
    <div class="banner">
        <div class="slider" id="slider">
            <div class="slide active">
                <img src="./LayoutClient/img/slider_1.png" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="./LayoutClient/img/slider_2.png" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="./LayoutClient/img/slider_3.png" alt="Slide 3">
            </div>
            <div class="slide">
                <img src="./LayoutClient/img/slider_4.png" alt="Slide 3">
            </div>
            <div class="slide">
                <img src="./LayoutClient/img/slider_5.png" alt="Slide 3">
            </div>
        </div>
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
        <div class="dots" id="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>


    <div class="container">
        <div class="categories">
            <h3>Products</h3>
            <ul>
                <?php foreach ($listDanhMuc as $danhMuc): ?>
                    <li>
                        <a href="<?= BASE_URL . '?act=san-pham-theo-danh-muc&id=' . $danhMuc['id']; ?>">
                            <?= $danhMuc['ten_loai']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="product-list">
            <?php foreach ($listSanPham as $sanPham): ?>
                <div class="product">
                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id_sanpham=' . $sanPham['id']; ?>">
                        <img src="<?= BASE_URL . $sanPham['hinh']; ?>" alt="<?= $sanPham['ten_sp']; ?>">
                        <h4><?= $sanPham['ten_sp']; ?></h4>
                    </a>
                    <p class="price">
                        <?php if ($sanPham['giam_gia'] > 0): ?>
                            <span class="original-price"><?= number_format($sanPham['gia'], 0, ',', '.') . 'đ'; ?></span>
                            <span class="discounted-price"><?= number_format($sanPham['gia'] - $sanPham['giam_gia'], 0, ',', '.') . 'đ'; ?></span>
                        <?php else: ?>
                            <?= number_format($sanPham['gia'], 0, ',', '.') . 'đ'; ?>
                        <?php endif; ?>
                    </p>
                    <button>Add to cart</button>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
       
    </div>

    <script>
        const slides = document.querySelectorAll(".slide");
        const dots = document.querySelectorAll(".dot");
        const prevButton = document.querySelector(".prev");
        const nextButton = document.querySelector(".next");

        let currentIndex = 0;

        // Hàm hiển thị slide
        function showSlide(index) {
            // Đảm bảo chỉ số luôn trong giới hạn
            if (index < 0) {
                index = slides.length - 1;
            } else if (index >= slides.length) {
                index = 0;
            }

            // Cập nhật chỉ số hiện tại
            currentIndex = index;

            // Xóa lớp active khỏi tất cả các slide và nút
            slides.forEach((slide, i) => {
                slide.classList.remove("active");
                dots[i].classList.remove("active");
            });

            // Thêm lớp active vào slide và nút hiện tại
            slides[currentIndex].classList.add("active");
            dots[currentIndex].classList.add("active");
        }

        // Chuyển sang slide tiếp theo
        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        // Chuyển về slide trước đó
        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        // Lắng nghe sự kiện click vào nút Next và Back
        nextButton.addEventListener("click", nextSlide);
        prevButton.addEventListener("click", prevSlide);

        // Lắng nghe sự kiện click vào các nút chấm (dots)
        dots.forEach((dot, index) => {
            dot.addEventListener("click", () => {
                showSlide(index);
            });
        });

        // Tự động chuyển slide sau mỗi 3 giây
        setInterval(nextSlide, 5000);
    </script>

    <?php require_once 'views/layout/footer.php' ?>
</body>

</html>