<?php
require_once ("config.php");

class Test extends Db_object{

    protected static $db_table = "users";
    protected static $db_table_fields = array("id","username" , "password", "user_roal");
    public $id;
    public $username;
    public $password;
    public $user_roal;



}