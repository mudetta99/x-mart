        <!-- Logo Area -->
        <section class="logo-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-5 " >
                        <form action="#" class="search-bar" >
                            <input type="text" name="search-bar" placeholder="I'm looking for..." class="btn-search" >
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <div class="out_search"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="carts-area d-flex">
                            <div class="call-box d-flex">
                                <div class="call-ico">
                                    <img src="images/call.png" alt="">
                                </div>
                                <div class="call-content">
                                    <span>Call Us</span>
                                    <p>+1 (111) 426 6573</p>
                                </div>
                            </div>
                            <div class="cart-box ml-auto text-center">
                                <a href="#" class="cart-btn">
                                    <img src="images/cart.png" alt="cart">
                                    <span>2</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Area -->

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
                            <a href="#" class="x_delete" prod_id="<?php echo$details['id']?>" client_id="<?php echo$id?>" ><i class="fa fa-trash-o"></i></a>
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
        <!-- End Cart Body --