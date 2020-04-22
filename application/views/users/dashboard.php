<div class="container">
	<div class="card col-md-10 col-sm-12 mt-2">
		<div class="card-body">
			<?php if ($_SESSION['role'] == 'Teacher'): ?>
				<h1>Hi I am a teacher!</h1>
			<?php endif ?>
			<?php if ($_SESSION['role'] == 'Student'){ 
				$name = $_SESSION['name'];
				$email = $_SESSION['email'];
				$email = $_SESSION['email'];
				
			?>
				
			<?php } ?>
		</div>
	</div>
</div>