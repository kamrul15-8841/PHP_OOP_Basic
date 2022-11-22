<?php include "includes/header.php"; ?>

	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<div class="card">
						<div class="card-header">
							<h4 class="text-center">Login Page</h4>
						</div>
						<div class="card-body">
							<H4 CLASS="text-center text-danger"><?php echo isset($message) ? $message : ''; ?></H4>
							<form action="action.php" method="POST">
								<div class="row mt-2">
									<label class="col-md-4">Email</label>
									<div class="col-md-8">
										<input type="email" name="email" placeholder="Enter Your Email" class="form-control">
									</div>
								</div>
								<div class="row mt-2">
									<label class="col-md-4">Password</label>
									<div class="col-md-8">
										<input type="password" name="password" placeholder="Enter Your Password" class="form-control">
									</div>
								</div>
								<div class="row mt-2">
									<label class="col-md-4"></label>
									<div class="col-md-8">
										<input type="submit" name="login_btn" class="btn btn-outline-info" value="Login">
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