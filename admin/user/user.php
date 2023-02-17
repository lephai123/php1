<div class="text_label text-3xl">
    <p>Quản lý người dùng</p>
</div>

<article class="admin_article">
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th></th>
            </tr>
            <?php foreach ($user as $users) { ?>
                <tr>
                    <td><?= $users['id'] ?></td>
                    <td><?= $users['name'] ?></td>
                    <td><?= $users['email'] ?></td>
                    <td><?= $users['password'] ?></td>
                    <td class="text-center text-red-600"> <a onclick="confirm('Bạn có chắc muốn xóa!!')" href="index.php?ctr=delete">Xóa</a></td>
                </tr><?php } ?>
        </table>
    </div>
</article>