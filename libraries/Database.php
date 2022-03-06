<?php


class Database {
    public $host      = DB_HOST;
    public $username  = DB_USER;
    public $password  = DB_PASS;
    public $dbname    = DB_NAME;


    public $link;
    public $error;

    public function __construct() {

        // $this->host = $host;
        // $this->username = $username;
        // $this->password = $password;
        // $this->dbname = $dbname;

        $this->connect();

    }



    private function connect() {

        $this->link = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);

        if($this->link == true) {
           // echo "cool";
        } else {
            echo  "error";
        }
    }

    public function select($query) {

        $result = $this->link->query($query) or die("error");

        $result->execute();

        //$result->fetch(PDO::FETCH_OBJ);

        if($result->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }

    }



        	  /*
	   * Insert
	   */
	   public function insert($query){
        $insert_row = $this->link->query($query) or die("error");
        
        //Validate Insert
        if($insert_row){
            header("Location: index.php?msg=".urlencode('Record Added'));
            exit();
        } else {
            die('Error : ('. $this->link->errno .') '. $this->link->error);
        }
   }
   
   /*
   * Update
   */
   public function update($query){
        $update_row = $this->link->query($query) or die("error");
        
        //Validate Insert
        if($update_row){
            header("Location: index.php?msg=".urlencode('Record Updated'));
            exit();
        } else {
            die('Error : ('. $this->link->errno .') '. $this->link->error);
        }
   }
   
    /*
   * Delete
   */
        public function delete($query){
                $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
                
                //Validate Insert
                if($delete_row){
                    header("Location: index.php?msg=".urlencode('Record Deleted'));
                    exit();
                } else {
                    die('Error : ('. $this->link->errno .') '. $this->link->error);
                }
        }
    

}
  


    