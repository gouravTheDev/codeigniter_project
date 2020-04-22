<div class="container">
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
	
    <!-- Login form -->
    <div class="card col-md-8 ml-auto mr-auto mt-2">
        <div class="card-body">
            <h2 class="text-center mb-5">Login to Your Account</h2>
            <form action="" method="post" class="form">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="User Name" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <select name="role" class="form-control">
                        <option value="">Select the Option</option>
                        <option value="Student">Student</option>
                        <option value="Lecturer">Lecturer</option>
                        <option value="Manager">Manager</option>
                        <option value="Administrator">Administrator</option>
                    </select>
                </div>
                <div class="send-button">
                    <input type="submit" class="btn btn-success" name="loginSubmit" value="LOGIN">
                </div>
            </form>
            <p>Don't have an account? <a href="<?php echo base_url('users/registration'); ?>">Register</a></p>
        </div>
    </div>
</div>
<!-- <?php 

if ($this->isUserLoggedIn) { ?>
    


<div class="container">
    <h2>Welcome <?php echo $user['first_name']; ?>!</h2>
    <a href="<?php echo base_url('users/logout'); ?>" class="logout">Logout</a>
    <div class="regisFrm">
        <p><b>Name: </b><?php echo $user['first_name'].' '.$user['last_name']; ?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
        <p><b>Phone: </b><?php echo $user['phone']; ?></p>
        <p><b>Gender: </b><?php echo $user['gender']; ?></p>
    </div>
</div>
<?php
}
 ?> -->