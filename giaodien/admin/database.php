
<?php
    include "config.php";
?>




<?php
Class Database {
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "ivy_moda";


    public $link;
    public $error;

    public function __construct(){
        $this->connectDB();
    }

    public function connectDB()
    {
        $this->link = new  mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if(!$this->link){
            die("Connection failed: ".mysqli_connect_error());
        }
        else{
            // echo "Connected successfully";
        }
    }
// Select or Read data
public function select($query){
    $result = $this->link->query($query) or die($this->link->error.__LINE__);
    if($result->num_rows > 0){
        return $result;
    }
    else{
        return false;
    }
}

// Insert data
public function insert($query) {
    $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
    if($insert_row){
        return $insert_row;
    }
    else {
        return false;
    }
}

// Update data
public function update($query) {
    $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
    if($update_row){
        return $update_row;
    }
    else {
        return false;
    }
}

// Delete data
public function delete($query) {
    $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
    if($delete_row){
        return $delete_row;
    }
    else {
        return false;
    }
}



}
