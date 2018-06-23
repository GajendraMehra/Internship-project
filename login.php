<?php include('header.php') ?>


<div class="container1">
    <div class="customcardlogin">

        <div class="customcard-header">
            <h1>Login to your Account</h1>
        </div>

        <div class="customcard-content">
            <!-- action is set to # as we have nowhere to post to. -->
            <form class="form" action="./loginaction.php" method="post">

                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <div class="input-group" style="display:flex;flex-wrap:nowrap; ">Student<input type="radio" name="cat" value="Student" checked >
                    Employer <input type="radio" name="cat" value="Employer">
                </div>

                <div class="customcard-footer">
                    <button class="button" type="submit" name="btn-upload" id="submit_button">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/login.js"></script>
