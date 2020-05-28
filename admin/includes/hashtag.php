<?php
require_once ("config.php");

class Hashtag extends Db_object{
    protected static $db_table = "hashtag";
    protected static $db_table_fields = array("id", "hashtag_name" , "code", "code2", "explains");
    public $id;
    public $hashtag_name;
    public $code;
    public $code2;
    public $explains;


    public function delete_symbol($word){

       $word =  str_replace("#","",$word);
       $word =  str_replace(" ","",$word);
       $word =  str_replace(".","",$word);
       $word =  str_replace("__","",$word);
        $word =  str_replace("___","",$word);
        $word =  str_replace("______","",$word);
        $word =  str_replace("_____","",$word);

       return $word;
    }

}