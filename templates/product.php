<?php if(isset($_POST) & !empty($_POST)){
	$p_id = ($_POST['p_id']);
	$p_name = ($_POST['p_name']);
	$u_id = ($_POST['u_id']);
	$u_name = ($_POST['u_name']);
	$quantity = ($_POST['quantity']);
	$phone = ($_POST['phone']);
	$address = ($_POST['address']);

	$CreateSql = "INSERT INTO `orders` (p_id, p_name, u_id, u_name, quantity, u_contact, u_address) VALUES 
    ('$p_id', '$p_name', '$u_id', '$u_name', '$quantity', '$phone', '$address')";
	$res = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
	if($res){
		$smsg = "Order Successful.";
	}else{
		$fmsg = "Order Not Successful. Please try again later.";
	}
}?>



<div class="col-3 my-2 ">
<!-- Mod class -->
<div class="card m-auto text-center product" style="width: 20rem;height:600px">
	<img class="card-img-top" src="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . "/ecom/img/products/" . $r['img'] ?> " alt="Card image cap" style="height:318px">
	<div class="card-body ">
		<h4 class="card-title"><?php echo $r['name']; ?></h4>
		<p class="card-text"><?php echo $r['detail']; ?></p>
		<p>$<?php echo $r['price']; ?></p>

		<!-- show form only if the user is logged in -->
		<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
		<form method="post">
			<input type="text" name="p_id" value="<?php echo $r['id']; ?>" hidden="hidden" />
			<input type="text" name="p_name" value="<?php echo $r['name']; ?>" hidden="hidden" />
			<input type="text" name="u_id" value="<?php echo $_SESSION['id']; ?>" hidden="hidden" />
			<input type="text" name="u_name" value="<?php echo $_SESSION['username']; ?>" hidden="hidden" />
			<!-- Quantity -->
			<div class="d-flex mb-2  d-flex align-items-center justify-content-center">
				<label for="qty<?php echo $r['id']; ?>">Quantity</label>
				<input type="number" id="qty<?php echo $r['id']; ?>" name="quantity" class="mx-2" value="1" />
			</div>



			<!-- Button Buy  -->
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmOrder">
				<span class="text-white"><i class="fa fa-shopping-cart text-white"></i> Buy</span>
			</button>

			<!-- Order Confirm -->
			<div class="modal" id="confirmOrder" tabindex="-1" role="dialog" aria-labelledby="confirmTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="modal-title" id="confirmTitle">Confirm Order</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="form-group">
					    <label>Contact</label>
					    <input type="text" name="phone" class="form-control" placeholder="contact number" required="true">
					</div>
					<div class="form-group">
					    <label>Delivery Address</label>
					    <input type="text" name="address" class="form-control" placeholder="Delivery Address" required="true">
					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			        <button type="submit" class="btn btn-danger">Confirm</button>
			      </div>
			    </div>
			  </div>
			</div>



		</form>
			<?php
		}else echo "sign in to buy"; ?>
	</div>
</div>
</div>