<?php
include('parts/header.php');
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
    if($_SESSION['is_admin'] == true) {
        // Если пользователь является администратором, перенаправляем на административную страницу
        header('Location: admin.php');
        exit;
    }
}
?>

    <main>

    <div class="rozdel">
        <h2>
            <?php
            if(isset($_POST['user_login'])){
                $user_name = $_POST['email'];
                $password = $_POST['password'];

                // Добавим отладочную информацию
                error_log("Attempting to log in with email/username: " . $user_name);

                $user_object = new User();

                $login_success = $user_object->login($user_name,$password);
                if($login_success == true){
                    header('Location: admin.php');
                    die;
                }else{
                    echo 'wrong password or login';
                }
            }

            ?>
        </h2>
            <?php if (!isset($_POST['user_login'])): ?>
                <h2>LOGIN</h2>
            <?php endif; ?>

    </div>
    <div class="container-sm mt-5" id="albums">
        <div class="row justify-content-around custom-mb">
            <div class="col-md-4">
                <div class="col-100 text-center">
                    <form action="" method="POST">
                        <label for="email">Email or username</label>
                        <input type="text" id="email" name="email" required>
                        <br>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                        <br>
                        <button type="submit" name="user_login">LOGIN</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="big-h2 glow-text">Don't have an account yet?</h2>
                <br>
                <a href="registration.php" class="button_link">Register now</a>
            </div>
        </div>
    </div>

<?php include "parts/footer.php" ?>