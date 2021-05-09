<?php 
    include_once 'function/product/product.php'; 
    $product = getProduct();
    if(isset($_SESSION['noti-cart'])){
        ?>
            <div id="notification">
                <div class="alert alert-success">
                    <button type="button" data-dismiss="alert" aria-hidden="true"></button>
                    <?php echo $_SESSION['noti-cart']; ?>
                </div>
            </div>
        <?php 
            }
            unset($_SESSION['noti-cart']);
        ?>
        
<div class="product_list">
        <?php  
            foreach ($product as $value) {
        ?>
            <div class="product_blog">
                <img src="assets/img/<?php echo $value['images']; ?>" alt="" class="product_blog-img">
                <div class="product_blog-text">
                    <h4 class="product_blog-name">
                        <?php echo $value['name']; ?>
                    </h4>
                    <div class="product_blog-price">
                        <?php echo $value['price']; ?>
                    </div>
                    <a href="index.php?page=order&id=<?php echo $value['id']; ?>" class="Mua ngay"><center><button class="buynow" >Mua ngay</button> </center></a>
                </div>
                
            </div>
        <?php } ?>
</div>
