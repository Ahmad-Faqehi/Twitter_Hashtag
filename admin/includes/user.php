<?php
require_once ("config.php");

class User extends Db_object{
    protected static $db_table = "users";
    protected static $db_table_fields = array("id","username" , "password", "user_roal", "email");
    public $id;
    public $username;
    public $password;
    public $user_roal;
    public $email;




    public static function  verify_user($username, $password){
        global $database;
        $username = $database->escape_string($username);
        $password = $database->escape_string($password);

        $sql  = "SELECT * FROM ". self::$db_table. " ";
        $sql .= "WHERE username = '{$username}' ";
        $sql .= "AND password = '{$password}' ";
        $sql .= "LIMIT 1";

        $the_result_array = self::find_by_query($sql);

        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function  verify_username($username){
        global $database;
        $username = $database->escape_string($username);

        $sql  = "SELECT * FROM ". self::$db_table. " ";
        $sql .= "WHERE username = '{$username}' ";
        $sql .= "LIMIT 1";

        $the_result_array = self::find_by_query($sql);

        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }


    public function delete_user(){
        if($this->delete()) {
            if (!empty($this->user_image)) {
                $target_path = SITE_ROOT . DS . "admin" . DS . $this->upload_directory . DS . $this->user_image;
                unlink($target_path);
            }
            return true;
        }else{
            return false;
        }
    }

    public function check_roal(){

        if($this->user_roal == 1){
            echo '<div class="btn btn-success btn-circle btn-sm"><i class="fas fa-check"></i></div>';
        }else{
            echo '<div class="btn btn-warning btn-circle btn-sm"><i class="fas fa-exclamation-triangle"></i></div>';
        }

    }

    public function check_password($username,$user_pass){
        global $database;
        $sql = $database->query("SELECT * FROM users WHERE username = '{$database->escape_string($username)}' LIMIT 1");
        $row = mysqli_fetch_array($sql);
        if(mysqli_num_rows($sql) > 0) {

            if(password_verify($user_pass,$row["password"])){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }

    public function check_email($email){

        global $database;
        $sql = $database->query("SELECT * FROM ". self::$db_table. " WHERE email = '{$database->escape_string($email)}' LIMIT 1");
        if(mysqli_num_rows($sql) > 0) {
            return true;
        }else{
            return false;
        }

    }

    public function check_username($username){

        global $database;
        $sql = $database->query("SELECT * FROM ". self::$db_table. " WHERE username = '{$database->escape_string($username)}' LIMIT 1");
        if(mysqli_num_rows($sql) > 0) {
            return true;
        }else{
            return false;
        }

    }

    public function create_token($email){

        global $database;
        $token = generateNewString();
        $sql = $database->query("UPDATE ". self::$db_table. " set token = '{$database->escape_string($token)}' , token_end = DATE_ADD(NOW(), INTERVAL 5 MINUTE)  WHERE email = '{$database->escape_string($email)}' ");

        return $token;
    }

    public function send_mail($email,$token){


   }



}