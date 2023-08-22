<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/ecom/";

require_once($path . 'connect.php');

// Initialize the session
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['role'] == 'admin') {
	$ReadSql = "SELECT * FROM `orders`";
	# code...
}else {
	$u_id = $_SESSION['id'];
	$ReadSql = "SELECT * FROM `orders` WHERE u_id='$u_id'";
}
$res = mysqli_query($connection, $ReadSql);

?>
<?php require($path . 'templates/header.php') ?>

	<div class="container-fluid my-4">
		<div class="row my-2">
			<h2>L7atta Fashion - Orders</h2>	
		</div>
		<table class="table "> 
		<thead> 
			<tr> 
				<th>Order No.</th> 
				<th>Product Id</th> 
				<th>Product Name</th> 
				<th>Customer Id</th> 
				<th>Ordered By</th> 
				<th>Quantity</th> 
				<th>User Contact</th> 
				<th>Delivery Address</th> 
				<th>Action</th>
			</tr> 
		</thead> 
		<tbody> 
		<?php 
		while($r = mysqli_fetch_assoc($res)){
		?>
			<tr> 
				<th scope="row"><?php echo $r['id']; ?></th> 
				<td><?php echo $r['p_id']; ?></td> 
				<td><?php echo $r['p_name']; ?></td> 
				<td><?php echo $r['u_id']; ?></td> 
				<td><?php echo $r['u_name']; ?></td> 
				<td><?php echo $r['quantity']; ?></td>
				<td><?php echo $r['u_contact']; ?></td>
				<td><?php echo $r['u_address']; ?></td> 
				<td>
					<a href="update.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-info">Edit</button></a>

					<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $r['id']; ?>">Delete</button>

					<!-- Modal -->
					  <div class="modal fade" id="myModal<?php echo $r['id']; ?>" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
                            <h5 class="modal-title">Delete Booking</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
					        </button>
					        </div>
					        <div class="modal-body">
					          <p>Are you sure?</p>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					          <a href="delete.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-danger"> Yes, Delete</button></a>
					        </div>
					      </div>
					      
					    </div>
					  </div>

				</td>
			</tr> 
		<?php } ?>
		</tbody> 
		</table>
	</div>  


<div id="confirm" class="modal hide fade">
  <div class="modal-body">
    Are you sure?
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
  </div>
</div>
