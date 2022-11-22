<?php include "includes/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">

            <?php foreach ($products as $product) { ?>

                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="<?php echo $product['image']; ?>" class="card-img-top" width="250" height="250">
                        <div class="card-body">
                            <h4><?php echo $product['name']; ?></h4>
                            <p><?php echo $product['price']; ?></p>
                            <a href="action.php?page=detail" class="btn btn-outline-info">View</a>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>

