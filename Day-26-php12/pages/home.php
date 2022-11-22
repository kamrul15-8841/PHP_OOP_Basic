<?php include "includes/header.php"; ?>


<?php
//	session_start();
//	$_SESSION['name'] = 'khk';
//	echo $_SESSION['name'];
//	unset($_SESSION['name']);
//
//?>

<!--<h1 class="text-info text-center text-uppercase mt-5">Welcome To Home Page</h1>-->

<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-10 mx-auto">
				<div class="card">
					<div class="card-header">
						<h3 class="text-center">All Products</h3>
					</div>
					<div class="card-body">
						<table class="table table-hover table-striped text-center">
							<thead>
							<th>#</th>
							<th>Categories Name</th>
							<th>Brand Name</th>
							<th>Product Name</th>
							<th>Product Price</th>
							<th>Product Description</th>
							<th>Product Image</th>
							<th>Action</th>
							</thead>

							<tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($products as $product) { ?>
	                            <tr>
		                            <td> <?php echo $i++; ?></td>
<!--		                            <td> --><?php //echo $product['category_id']; ?><!--</td>-->
		                            <td>

			                            <?php
			                               foreach ($categories as $category)
			                               {
			                               	if ($product['category_id'] == $category['category_id'])
			                                {
			                                	echo $category['name'];
			                                }
			                               }
			                            ?>

		                            </td>
                                    <td>

			                            <?php
			                               foreach ($brands as $brand)
			                               {
			                               	if ($product['brand_id'] == $brand['brand_id'])
			                                {
			                                	echo $brand['brand_name'];
			                                }
			                               }
			                            ?>

		                            </td>
		                            <td><?php echo $product['name']; ?></td>
		                            <td><?php echo $product['price']; ?></td>
		                            <td><?php echo $product['description']; ?></td>
		                            <td>
			                            <img src="<?php echo $product['image']; ?>" alt="Image" height="100" width="100">
		                            </td>
		                            <td>
			                            <a href="" class="btn btn-warning">Edit</a>
			                            <a href="" class="btn btn-danger">Delete</a>
		                            </td>
	                            </tr>

                            <?php } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include "includes/footer.php"; ?>
