<?php include('../../templates/header.php')?>


<!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <h3>Product Grid</h3>
                </div>
            </div>
            </div>
        </div>
    </section>
<!-- end inner page section -->
        

    <!-- Our Product <> H2 -->
    <div class="heading_container heading_center mt-4">
        <h2>
            Our <span>products</span>
        </h2>
    </div>

    <div class="d-flex my-2">
        <!-- output success or failed message. -->
        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
        <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
    </div>

    <div class="row main-section">
    <?php 
        include('../../connect.php');
        $SelSql = "SELECT * FROM `products`";
        $res = mysqli_query($connection, $SelSql);
        $num_of_rows = mysqli_num_rows($res);
        if ($num_of_rows > 0) {
            // output data of each row
            while($num_of_rows > 0) {
                $num_of_rows--;
                $r = mysqli_fetch_assoc($res);
                include('../../templates/product.php');
                
            }
    } else echo "No Products";?>
    </div>



    <!-- Footer2 -->
 <?php require('../../templates/footer2.php') ?>