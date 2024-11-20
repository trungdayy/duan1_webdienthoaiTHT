<header>
    <img src="./LayoutClient/img/thtshop-removebg-preview.png" alt="">
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="<?= BASE_URL . '?act=san-pham' ?>">Products</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

    </nav>
    <div class="icon1">
        <form action="" id="search-box">
            <div class="search-container">
                <input type="text" id="search-text" placeholder="Bạn muốn tìm gì..." required>
                <button id="search-btn">
                    <i class="fa-solid fa-magnifying-glass" style="color: #fff;"></i>
                </button>
            </div>
        </form>
        <label for="">
            <?php if (isset($_SESSION['user_client'])) {
                echo $_SESSION['user_client'];
            } ?>
        </label>

        <?php if (!isset($_SESSION['user_client'])) { ?>
            <a href="<?= BASE_URL . '?act=login' ?>"><span class="material-symbols-outlined">person</span></a>
        <?php } else{ ?>
        <a href=""><span class="material-symbols-outlined"><i class="fas fa-user"></i></span></a>
        <?php } ?>
        <a href="<?= BASE_URL . '?act=gio-hang' ?>"><span class="material-symbols-outlined">
                shopping_cart
            </span></a>
    </div>
</header>
</div>