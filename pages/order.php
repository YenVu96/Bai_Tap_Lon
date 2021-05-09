<?php
include_once 'function/product/product.php';
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $product = getProductID($id);
         //$_SESSION['cart']= array();
        if(!isset($_SESSION['cart']) && empty($_SESSION['cart'])) {
            $_SESSION[
                'cart'][$id] = $product;
            $_SESSION['cart'][$id]['qty'] = 1;
            
        }else {
            if(array_key_exists($id, $_SESSION['cart'] )){
                $_SESSION['cart'][$id]['qty'] +=1;
            }else{
                $_SESSION['cart'][$id] = $product;
                $_SESSION['cart'][$id]['qty'] = 1;
            }
        }
        $_SESSION['noti-cart'] = '<p><b>Đã thêm vào giỏ hàng!</b></p><a href="index.php?page=order-detail"><button class="btn-info">Xem chi tiết</button></a>';
        header('location: index.php?page=product');
    }else {
        header('location: index.php?page=product');
    }
?>
    }
?>