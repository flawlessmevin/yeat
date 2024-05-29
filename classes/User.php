<?php
class User extends Database{

    public function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password){
        try{
            $sql = "SELECT * FROM users WHERE email = :user_name OR nickname = :user_name";
            $query_run = $this->db->prepare($sql);
            $query_run->execute([':user_name' => $username]);
            $user = $query_run->fetch(PDO::FETCH_ASSOC);

            if ($user) {

                if (password_verify($password, $user['password'])) {
                    // login successful
                    $_SESSION['logged_in'] = true;
                    // Проверяем роль пользователя, чтобы установить, является ли он администратором
                    $_SESSION['is_admin'] = $user['role'] == 1;
                    return true;
                } else {
                    error_log("Password verification failed for user: " . $username); // Отладочная информация
                }
            } else {
                error_log("No user found for: " . $username); // Отладочная информация
            }
            return false;
        } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function register($email, $password, $nickname) {
        try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            error_log("Hashed password: " . $hashed_password);
            $reg_date = date('Y-m-d H:i:s');
            $sql = "INSERT INTO users (email, password, role, nickname, reg_date) VALUES (:user_email, :user_password, :user_role, :user_nickname, :user_date_reg)";
            $query_run = $this->db->prepare($sql);
            $query_run->execute([
                ':user_email' => $email,
                ':user_password' => $hashed_password,
                ':user_role' => '0',
                ':user_nickname' => $nickname,
                ':user_date_reg' => $reg_date
            ]);
            return true;
        } catch(PDOException $e) {
            echo "Error during registration: " . $e->getMessage();
            return false;
        }
    }

}

?>