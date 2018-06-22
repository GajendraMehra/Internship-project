<?php include('header.php') ?>


<div class="container1">
    <div class="customcard">

        <div class="customcard-header">
            <h1>Sign Up Here</h1>
        </div>

        <div class="customcard-content">
            <!-- action is set to # as we have nowhere to post to. -->
            <form class="form" action="#" method="post">
                <div class="input-group">
                    <input type="text" id="name" placeholder="Full Name" required>
                    <label for="name">Full Name</label>
                </div>
                <div class="input-group">
                    <input type="tel" id="phoneNumber" placeholder="Phone Number" size="10" minlength="10" maxlength="10" required>
                    <label for="phoneNumber">Phone Numbe</label>
                </div>
                <div class="input-group">
                    <input type="number" id="age" placeholder="Age" min="1" max="100" required>
                    <label for="age">Age</label>
                </div>
                <div class="input-group">
                    <input type="email" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <div class="input-group">
                    <input type="password" id="confirm_password" placeholder="Confirm-Password" required>
                    <label for="confirm_password">Confirm Password</label>
                </div>

                <div class="customcard-footer">
                    <button class="button" type="submit" id="submit_button">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/login.js"></script>
