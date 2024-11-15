<?php require_once 'views/layout/header.php' ?>

<body>

    <?php require_once 'views/layout/menu.php' ?>
    <div class="banner">
        <img src="./LayoutClient/img/slider_1.png" alt="">
    </div>
    <div class="container">
        <h2>Sản Phẩm Mới</h2>
        <button class="btn2">
            <h4>View all product</h4>
        </button>
        <div class="product">
            <?php foreach ($listSanPham as $key => $sanPham): ?>
                <div class="pro-item">
                    <img src="<?= BASE_URL . $sanPham['hinh'] ?>" alt="">

                    <?php
                    $ngayNhap = new DateTime($sanPham['ngay_nhap']);
                    $ngayHienTai = new DateTime();
                    $tinhNgay = $ngayHienTai->diff($ngayNhap);

                    if ($tinhNgay->days <= 7) {
                    ?>
                        <div class="product-label discount">
                            <span>New</span>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="ten"><?= $sanPham['ten_sp'] ?></div>
                    <div class="gia"><?= formatNumber($sanPham['gia']) ?> đ</div>
                    <div class="giamgia"><?= formatNumber($sanPham['giam_gia']) ?> đ</div>
                    <button class="btn1">Xem chi tiết</button>
                </div>
            <?php endforeach; ?>


        </div>
        <h2>Sản Phẩm HOT</h2>
        <button class="btn2">View all product</button>

        <div class="product">
            <?php foreach ($listSanPhamHot as $key => $sanPham): ?>
                <div class="pro-item">
                    <img src="<?= BASE_URL . $sanPham['hinh'] ?>" alt="">
                    <div class="ten"><?= $sanPham['ten_sp'] ?></div>
                    <div class="gia"><?= formatNumber($sanPham['gia']) ?> đ</div>
                    <div class="giamgia"><?= formatNumber($sanPham['giam_gia']) ?> đ</div>
                    <button class="btn1">Xem chi tiết</button>
                </div>
            <?php endforeach; ?>
        </div>



        <h2>Tin tức</h2>
        <button class="btn2">
            <h4>View all news</h4>
        </button>
        <div class="product2">
            <div class="pro-item">
                <img src="./LayoutClient/img/news1.png" alt="">
                <div class="date">
                    <span><img src="./LayoutClient/img/lich.png.png" alt="">
                        <p>14/11/2024</p>
                    </span>
                </div>
                <div class="ten">Giá bán iPhone tháng 11</div>
                <div class="new"><a href="">Xem chi tiết <img class="imgicon" src="./LayoutClient/img/muitenred.png" alt=""></a></div>
            </div>
            <div class="pro-item">
                <img src="./LayoutClient/img/news5.png" alt="">
                <div class="date">
                    <span><img src="./LayoutClient/img/lich.png.png" alt="">
                        <p>14/11/2024</p>
                    </span>
                </div>
                <div class="ten">Samsung chính hãng</div>
                <div class="new"><a href="">Xem chi tiết <img class="imgicon" src="./LayoutClient/img/muitenred.png" alt=""></a></div>

            </div>
            <div class="pro-item">
                <img src="./LayoutClient/img/news3.png" alt="">
                <div class="date">
                    <span><img src="./LayoutClient/img/lich.png.png" alt="">
                        <p>14/11/2024</p>
                    </span>
                </div>
                <div class="ten">Sản phẩm giảm giá</div>
                <div class="new"><a href="">Xem chi tiết <img class="imgicon" src="./LayoutClient/img/muitenred.png" alt=""></a></div>

            </div>
            <div class="pro-item">
                <img src="./LayoutClient/img/news4.png" alt="">
                <div class="date">
                    <span><img src="./LayoutClient/img/lich.png.png" alt="">
                        <p>14/11/2024</p>
                    </span>
                </div>
                <div class="ten">iPad chính hãng</div>
                <div class="new"><a href="">Xem chi tiết <img class="imgicon" src="./LayoutClient/img/muitenred.png" alt=""></a></div>

            </div>
        </div>
    </div>

    <?php require_once 'views/layout/footer.php' ?>
</body>

</html>