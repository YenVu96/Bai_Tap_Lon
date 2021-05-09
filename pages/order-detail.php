<div class="content"> 
    <?php  
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    ?>
    <h2 class="heading-text">Giỏ hàng</h2>
    <form action="index.php?page=update-cart" method="POST" name="cart">
        <table id="cart" class="table__cart"> 
            <thead> 
                <tr> 
                    <th style="width=30%">Sản phẩm</th> 
                    <th style="width=20%">Giá</th> 
                    <th style="width=20%">Số lượng</th> 
                    <th style="width=20%">Thành tiền</th> 
                    <th style="width=10%"></th> 
                </tr> 
            </thead> 
            <tbody>
                <?php 
                    $_SESSION['sum_total'] = 0;
                    foreach ($_SESSION['cart'] as $key => $value) {
                ?>
                <tr> 
                    <td class="product__cart__item"> 
                        <div class="product__cart__item__pic">
                            <img src="assets/img/<?php echo $value['images']; ?>" alt="" width="80px" /></div>
                        <div class="product__cart__item__text">
                            <h6><?php echo $value['name']; ?></h6>
                        </div>
                    </td>
                    
                    <td class="price__item">
                        <div class="price">
                            <h5><?php echo $value['price']; ?></h5>
                        </div>
                    </td>
                    <td class="quantity__item">
                        <div class="quantity">
                            <div class="pro-qty-2">
                                <input min="1" max="5" type="number"  class="update-cart" name="<?php echo $value['id']; ?>" value="<?php echo $value['qty']; ?>">
                            </div>
                        </div>
                    </td> 
                    <td class="cart__price">
                        <?php  
                            $total = $value['price'] * $value['qty']; // Tổng tiền cho từng sản phẩm
                            $_SESSION['sum_total'] += $total; // Tổng tiền cho cả đơn hàng
                            echo $total.' VNĐ';
                        ?>
                    </td>
                    <td class="cart__close" width="100">
                        <a onclick="return confirm('Xóa sản phẩm khỏi giỏ hàng? ');" href="index.php?page=del-cart&id=<?php echo $value['id']; ?>">
                        <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                    
                </tr> 
            
        </tbody>
        <?php
            }
        ?>
        </table>
            <div class="continue">
                <div class="continue__btn">
                    <button class="btn-continue"><a href="index.php?page=order">Tiếp tục mua hàng</a></button>
                </div>
                <div class="update__btn">
                    <button type="submit" name="submit_cart" class="update">Cập nhật giỏ hàng</button>
                </div>
            </div>
        <div class="cart__total">
            <ul>
                <li>Tổng tiền: <span><?php echo $_SESSION['sum_total']; ?> VNĐ</span></li>
            </ul>
        <!-- <a href="index.php?page=checkout" class="primary-btn">Proceed to checkout</a> -->
     </div>
    </form>
    
    <?php
        }else{
    ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Giỏ hàng hiện tại đang trống</strong> <a href="index.php">Quay lại</a>
        </div>
        <?php
            }
        ?>
</div>

