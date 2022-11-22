<?php include "includes/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">

                    <div class="card-header">
                        <h3 class="text-center">Add Brand</h3>
                    </div>

                    <div class="card-body">

                        <h3 class="text-center text-info"> <?php echo isset($message) ? $message : ''; ?></h3>

                        <form action="action.php" method="POST">


                            <div class="row mt-2">
                                <label for="" class="col-md-4">Brand Id</label>
                                <div class="col-md-8">
                                    <input type="number" name="brand_id" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label for="" class="col-md-4">Brand Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="brand_name" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8 d-grid mt-2">
                                    <input type="submit" name="brand_btn" class="btn btn-outline-info" value="Add Brand">
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


