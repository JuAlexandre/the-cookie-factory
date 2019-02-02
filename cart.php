<?php
session_start();
if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <table class="table">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
            </tr>
            <?php foreach ($_COOKIE['cart'] as $product => $quantity):?>
            <tr>
                <td><img src="img/product-<?= $product ?>.jpg" alt="cookies choclate chips" class="img-responsive" style="height: 200px;"></td>
                <td><?= $quantity ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
