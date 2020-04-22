<?php 
	$name = $_SESSION['NAME'];
	$email = $_SESSION['EMAIL'];
	$phone = $_SESSION['PHONE'];
?>

<div class="container">
	<div class="card col-md-10 ml-auto mr-auto col-sm-12 mt-2">
		<div class="card-body">
			<h2 class="text-center">Student Dashboard</h2><hr>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<img src="/images/student.png" height="100" width="100" style="border-radius: 50%; border: 1px solid black">
				</div>
				<div class="col-md-8 col-sm-6">
					<div class="table table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<th>Student Name:- </th>
									<td><?php echo $name; ?></td>
								</tr>
								<tr>
									<th>Phone:- </th>
									<td><?php echo $phone; ?></td>
								</tr>
								<tr>
									<th>Email:- </th>
									<td><?php echo $email; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a class="btn btn-success" href="<?php echo base_url('users/studentDashboard?showAttandance'); ?>">Show My Attandance</a>
			</div>
		</div>
	</div>
</div>