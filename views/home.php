<nav class="gird_nav">
    <!-- menu dọc -->
    <div class="nav_1">
        <div class="-200 w-64">
            <div class="p-6 font-medium">
                <span class="text-2xl"><b>Chọn theo hãng</b></span>
                <hr>
            </div>
            <div class="text-sm font-medium">
                <a href="#" class="block p-4 hover:bg-gray-200 transition-all duration-300 ">iPhone</a>
                <a href="#" class="block p-4 hover:bg-gray-200 transition-all duration-300 ">Samsung</a>
                <a href="#" class="block p-4 hover:bg-gray-200 transition-all duration-300 ">Xiaomi</a>
                <a href="#" class="block p-4 hover:bg-gray-200 transition-all duration-300 ">OPPO</a>
                <a href="#" class="block p-4 hover:bg-gray-200 transition-all duration-300 ">vivo</a>
                <a href="#" class="block p-4 hover:bg-gray-200 transition-all duration-300 ">Nokia</a>
                <a href="#" class="block p-4 hover:bg-gray-200 transition-all duration-300  ">realme</a>
            </div>
        </div>



    </div>
    <!-- slide show -->
    <div class="nav_2 slideshow">

        <img class="w-full h-full object-cover" src="img/image2.jpg" id="slideshow-image">


    </div>
    <!-- ảnh tĩnh -->
    <div class="nav_3">
        <div>
            <img src="img/slideShow/img10.webp" alt="">
        </div>
        <div>
            <img src="img/slideShow/img8.webp" alt="">
        </div>
        <div>
            <img src="img/slideShow/img9.webp" alt="">
        </div>

    </div>
</nav>

<article>
    <div class="grid_product">
        <?php foreach ($products as $product) { ?>

            <div class="grid-item">
                <div>
                    <img src="img/logo.png" alt="">

                </div>
                <div align="center">
                    <span><?= $product['id'] ?></span>
                    <p><?= $product['name'] ?></p>

                </div>
                <button class="more_button">Thêm vào giỏ hàng.</button>
            </div>
        <?php } ?>
    </div>

</article>