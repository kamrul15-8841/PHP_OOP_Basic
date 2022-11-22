<?php include "includes/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">

                    <div class="card-header">
                        <h3 class="text-center">Add Product</h3>
                    </div>

                    <div class="card-body">

	                   <h3 class="text-center text-info"> <?php echo isset($message) ? $message : ''; ?></h3>

                        <form action="action.php" method="POST" enctype="multipart/form-data">


                            <div class="row mt-2">
                                <label for="" class="col-md-4">Category Name</label>
                                <div class="col-md-8">

                                    <select name="category_id" class="form-control">
                                        <option value="">Select A Category</option>
                                        <?php foreach ($categories as $category) { ?>
                                            <option value="<?php echo $category['category_id'] ?>"> <?php echo $category['name'] ?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>

                            <div class="row mt-2">
                                <label for="" class="col-md-4">Brand Name</label>
                                <div class="col-md-8">

                                    <select name="brand_id" class="form-control">
                                        <option value="">Select A Brand</option>
                                        <?php foreach ($brands as $brand) { ?>
                                            <option value="<?php echo $brand['brand_id'] ?>"> <?php echo $brand['brand_name'] ?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>

                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Price</label>
                                <div class="col-md-8">
                                    <input type="number" name="price" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control" accept="image/*">
<!--                                    <input type="file" name="image[]" class="form-control" multiple accept="image/*"> this is for add multi Image-->
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8 d-grid mt-2">
                                    <input type="submit" name="product_btn" class="btn btn-outline-info" value="Add Product">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>

