
               <!-- Cart Body -->
               <div class="cart-body" style="Overflow-x:scroll">
            <div class="close-btn">
                <button class="close-cart"><img src="images/close.png" alt="">Close</button>
            </div>
           
            <div class="crt-bd-box">
                <div class="cart-heading text-center">
                    <h5>Shopping Cart</h5>
                </div>
                <div class="cart-content">

                <?php
                $id = $_SESSION['login_c'];
                $select = $connect -> query ("SELECT * FROM cart WHERE client_id = '$id'");
                $sum = 0;
                $sum_s = 0;


                foreach($select as $row){
                    ?>  <?php
                    
                    $id_prod = $row['prod_id'];
                    $select = $connect -> query("SELECT * FROM products WHERE id = '$id_prod'");
                    $details = $select -> fetch_assoc();
                    $details_id = $details['id'];
                    // $total = $details['price'] * $row['quan'];

                    $sum+=$details['price'] * $row['quan'];
                    $sum_s+=$details['sale'];


                    ?>
                    
                    <div class="content-item d-flex justify-content-between">
                        <div class="cart-img">
                            <a href="#"><img style="width:75px;" src="admin/image/<?php $arr=explode("/",$details['img']); echo$arr[0]; ?>" alt=""></a>
                        </div>
                        <div class="cart-disc">
                            <p><a href="#"><?php echo$details['name'] ?></a></p>
                            <span><?php echo$row['quan'] ?> x $ <?php echo$details['price'] ?></span>
                        </div>
                        <div class="delete-btn">
                        <button class="btn btn-danger x_delete" prod_id="<?php echo$details['id']?>" client_id="<?php echo$id?>"><i class="fa fa-trash-o"></i></button>
                        </div>

                    </div>
                    
                    
                <?php }
                 ?>
                
                    

                    
                </div>
                
                <div class="cart-btm">
                    <p class="text-right">Sub Total: <span>$ <?php echo $sum - $sum_s  ?></span></p>
                    <a href="#">Checkout</a>
                </div>
            </div>
        </div>
        <div class="cart-overlay"></div>
        <!-- End Cart Body -->