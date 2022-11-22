<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day19-php6</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<nav class="navbar navbar-expand-md bg-info navbar-dark shadow-lg">
    <div class="container">
        <a href="action.php?page=home" class="navbar-brand text-uppercase fw-bold shadow-lg"><span class="text-primary">ka</span><span class="text-danger">mr</span><span class="text-secondary">ul</span></a>
        <ul class="navbar-nav">
            <li class="dropdown">
<!--	            <a href="" class="dropdown-toggle nav-link text-uppercase fw-bold text-light shadow-lg" data-bs-toggle="dropdown">Home</a>-->
	            <a href="action.php?page=home" class="dropdown-toggle nav-link text-uppercase fw-bold text-light shadow-lg" data-bs-toggle="dropdown">Home</a>
	            <ul class="dropdown-menu">

                    <?php foreach ($categories as $category) { ?>
			            <li><a href="action.php?page=home&&category_id=<?php echo $category['category_id']; ?>" class="dropdown-item"><?php echo $category['name']; ?></a></li>
                    <?php } ?>

	            </ul>
            </li>
            <li><a href="action.php?page=all-product" class="nav-link text-uppercase fw-bold text-light shadow-lg">All Products</a></li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle nav-link text-uppercase fw-bold text-light shadow-lg" data-bs-toggle="dropdown">Category</a>
                <ul class="dropdown-menu">

                    <?php foreach ($categories as $category) { ?>
                        <li><a href="action.php?page=category&&category_id=<?php echo $category['category_id']; ?>" class="dropdown-item"><?php echo $category['name']; ?></a></li>
                    <?php } ?>

                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle nav-link text-uppercase fw-bold text-light shadow-lg" data-bs-toggle="dropdown">Brands</a>
                <ul class="dropdown-menu">

                    <?php foreach ($brands as $brand) { ?>
                        <li><a href="action.php?page=brand&&brand_id=<?php echo $brand['brand_id']; ?>" class="dropdown-item"><?php echo $brand['brand_name']; ?></a></li>
                    <?php } ?>

                </ul>
            </li>
            <li><a href="action.php?page=add-product" class="nav-link text-uppercase fw-bold text-light shadow-lg">Add Product</a></li>
            <li><a href="action.php?page=add-category" class="nav-link text-uppercase fw-bold text-light shadow-lg">Add Category</a></li>
            <li><a href="action.php?page=add-brand" class="nav-link text-uppercase fw-bold text-light shadow-lg">Add Brand</a></li>
	        <li><a href="action.php?page=login" class="nav-link text-uppercase fw-bold text-light shadow-lg">Login</a></li>
	        <li><a href="action.php?page=register" class="nav-link text-uppercase fw-bold text-light shadow-lg">Registration</a></li>
        </ul>
    </div>
</nav>
