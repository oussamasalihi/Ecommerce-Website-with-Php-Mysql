<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/ecom/";

require_once($path . 'connect.php');

$id = $_GET['id'];
$SelSql = "SELECT * FROM `orders` WHERE id=$id";
$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);

if(isset($_POST) & !empty($_POST)){
	$quantity = ($_POST['quantity']);
	$phone = ($_POST['phone']);
	$address = ($_POST['address']);

	$UpdateSql = "UPDATE `orders` SET quantity='$quantity', u_contact='$phone', u_address='$address' WHERE id='$id' ";
	$res = mysqli_query($connection, $UpdateSql);
	if($res){
		header('location: view.php');
	}else{
		$fmsg = "Failed to Update data.";
	}
}
?>
<?php require($path . 'templates/header.php') ?>

	<div class="container">
	<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<form method="post">
            <div class="form-group">
                <label>No. of items</label>
				<input type="text" class="form-control" name="quantity" value="<?php echo $r['quantity']; ?>"/>
            </div> 
            <div class="form-group">
                <label>Phone Number</label>
				<input type="text" class="form-control" name="phone" value="<?php echo $r['u_contact']; ?>"/>
            </div> 
            <div class="form-group">
                <label>No. of items</label>
				<input type="text" class="form-control" name="address" value="<?php echo $r['u_address']; ?>"/>
            </div> 
			<input type="submit" class="btn btn-primary" value="Update" />
		</form>
	</div>
	
