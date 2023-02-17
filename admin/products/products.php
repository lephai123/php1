<div class="text_label text-3xl">
    <p>Quản lý sản phẩm</p>
    
</div>

<article class="admin_article">
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Detail</th>
                <th></th>
            </tr>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['img'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['detail'] ?></td>
                    <td class="text-center text-red-600"> <a onclick="confirm('Bạn có chắc muốn xóa!!')" href="index.phpctr=delete">Sửa</a>/
                        <a onclick="confirm('Bạn có chắc muốn xóa!!')" href="index.phpctr=delete">Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</article>