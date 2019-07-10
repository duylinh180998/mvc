<?php
require_once 'views/layouts/header.php';
?>
    <button type="button" class="ADD btn btn-primary" onclick="add();">+ADD NEW BOOK</button>
    <table cellpadding="5" cellspacing="0" border="1px" style="text-align: center">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Create At</th>
            <th>Action</th>
        </tr>
        <?php if (empty($books)): ?>
            <tr>
                <td colspan="6">Khong co ban ghi nao</td>
            </tr>
        <?php else: ?>
            <?php foreach ($books as $book):?>
                <tr>
                    <td><?php echo $book['id'];?></td>
                    <td><?php echo $book['name'];?></td>
                    <td><?php echo $book['created_at'];?></td>
                    <td><a href="#" id="read"><i class="far fa-eye"></i></a> <a id="update" href="#"><i class="fas fa-pen"></i></a> <a id="delete" href="#"><i class="fas fa-trash-alt"></i></a> </td>

                </tr>
            <?php endforeach;?>
        <?php endif;?>
    </table>
<?php
require_once 'views/layouts/footer.php';
?>