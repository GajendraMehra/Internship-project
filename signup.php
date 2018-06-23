<?php include('header.php') ?>


<div class="container1">
    <div class="customcard">

        <div class="customcard-header">
            <h1>Sign Up Here</h1>
        </div>

        <div class="customcard-content">
            <!-- action is set to # as we have nowhere to post to. -->
            <form class="form" action="signupaction.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="input-group">
                    <input type="text" id="name" name="name" placeholder="Full Name" required>
                    <label for="name">Full Name</label>
                </div>
                <div class="input-group">
                    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" size="10" minlength="10" maxlength="10" required>
                    <label for="phoneNumber">Phone Number</label>
                </div>
                <div class="input-group">
                    <input type="date" id="DateofBirth" name="DateofBirth" placeholder="Date of Birth"  required>
                    <label for="age">Date of Birth</label>
                </div>

                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Email" pattern="[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*"required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <div class="input-group">
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm-Password" required>
                    <label for="confirm_password">Confirm Password</label>
                </div>
                <div class="input-group" style="display:flex;flex-wrap:nowrap; ">Student<input type="radio" name="cat" value="Student" checked >
                    Employer <input type="radio" name="cat" value="Employer">
                </div>
                <div class="customcard-footer">
                    <button class="button" type="submit"name="btn-upload" id="submit_button">Submit</button>

                    <a class="btn btn-info btn-lg" id="alert-target" onclick="toastr.info('Hi! I am info message.');" >Click me!</a>

                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/login.js"></script>
