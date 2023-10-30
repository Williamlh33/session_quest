<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?> 
<section class="cookies container-fluid">
    <div class="row">
        <!-- TODO : Display shopping cart items from $_SESSION here. -->
        <?php session_start();
        echo $catalog[$_SESSION['cookieName']]['name'];        
        ?>      
    </div>
</section>
<?php require 'inc/foot.php'; ?>
