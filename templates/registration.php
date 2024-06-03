<?php

include 'parts/header.php' ?>
    <main>
    <div class="rozdel">
        <h2>
            <?php


            $user = new User();


            if (isset($_POST['user_register'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];
                $nickname = $_POST['nickname'];


                if ($password === $confirm_password) {

                    if ($user->register($email, $password, $nickname)) {
                        echo "<p>Your account created</p>";
                    } else {
                        echo "<p>Registration error</p>";
                    }
                } else {
                    echo "<p>Wrong password</p>";
                }
            }

            ?>
            <?php if (!isset($_POST['user_register'])): ?>
                <h2>CREATE AN ACCOUNT</h2>
            <?php endif; ?>

        </h2>
    </div>
    <div class="container-sm mt-5" id="albums">
        <div class="row justify-content-around custom-mb">
            <div class="col-md-4">
                <div class="col-100 text-center">

            <form action="" method="POST">
                <label for="email">Email</label>

                <input type="email" id="email" name="email" required>
                <br>
                <label for="nickname">Username</label>

                <input type="text" id="nickname" name="nickname" required>
                <br>
                <label for="password">Password</label>

                <input type="password" id="password" name="password" required>
                <br>
                <label for="confirm_password">Confirm Password</label>

                <input type="password" id="confirm_password" name="confirm_password" required>
                <br>
                <button type="submit" name="user_register">REGISTER</button>
            </form>
        </div>
            </div>
            <div class="col-md-6">
                <h2 class="big-h2 glow-text">NOTE</h2><br>
                <h2 class="small-p">Your username must be between 3 and 24 characters.</h2><br>
                <h2 class="small-p"> Your password must be at least 6 characters long.</h2><br>
                <h2 class="small-p"> Spaces, HTML tags and other special characters cannot be used. Numbers, letters, underscores and dashes are all good..<br></h2>
            </div>
        </div>
        </div>
<?php include 'parts/footer.php' ?>