<?php 
	$name = $_SESSION['NAME'];
	$email = $_SESSION['EMAIL'];
	$phone = $_SESSION['PHONE'];
	$roomNo = $_SESSION['ROOM_NO'];
	$teacherId = $_SESSION['TEACHER_ID'];
?>

<div class="container">
	<div class="card col-md-10 ml-auto mr-auto col-sm-12 mt-2">
		<div class="card-body">
			<h2 class="text-center">Lecturer Dashboard</h2><hr>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<img src="/images/school.png" height="100" width="100" style="border-radius: 50%; border: 1px solid black">
				</div>
				<div class="col-md-8 col-sm-6">
					<div class="table table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<th>Lecturer ID:- </th>
									<td><?php echo $teacherId; ?></td>
								</tr>
								<tr>
									<th>Lecturer Name:- </th>
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
								<tr>
									<th>Room No:- </th>
									<td><?php echo $roomNo; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>