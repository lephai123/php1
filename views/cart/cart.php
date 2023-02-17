<article class="gird_cart">
    <div class="item_cart1">
        <h1>Shoping Cart</h1>
        <div>
            <table>
                <tr>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th></th>
                </tr>
                <tr>
                    <td><img src="img/image1.jpg" alt="Image of Product 1"></td>
                    <td>Sản phẩm 1</td>
                    <td>100.000đ</td>
                    <td>5</td>
                    <td>500.000đ</td>
                    <td><a href="">Xóa</a></td>
                </tr>

            </table>

        </div>
    </div>
    <div class="item_cart2">
        <span class="text-3x1">Summary</span>
        <form action="index.php?ctr=cart" method="post">

            <div class="form-group">
                <label for="name">Tên người đặt hàng:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone">
            </div>
            <br>

            <div class="btn_cart"><button type="submit">Đặt hàng</button></div>
        </form>

    </div>
</article>