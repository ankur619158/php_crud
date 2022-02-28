<?php
class database{

    private $host;
    private $dbusername;
    private $dbpassword;
    private $dbname;

    protected function connect(){
        $this->host = 'localhost';
        $this->dbusername = "root";
        $this->dbpassword = "Test@123";
        $this->dbname = "crud";
        $conn = new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
        if ($conn){
            return $conn;
        }
        else{
            return 0;
        }
    }
}



class query extends database{
    public function getData(){
        $sql = "SELECT * FROM employees";
        $result = $this->connect()->query($sql); 
        if($result->num_rows>0){
            $arr = array();
            while($row = $result->fetch_assoc()){
                $arr[] = $row;
            }
            return $arr;
        }   
        else{
            return 0;
        }
    }


    

    public function insertData($name,$email,$password,$phone){
        $sql = "INSERT INTO employees (`name`,`email`,`password`,`phone`) VALUES ('$name', 
        '$email','$password','$phone')";
        
        if(mysqli_query($this->connect(), $sql)){
            echo "sucessfull";
             
        } 
        else{
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
    }
    

    public function showdata(){
        $obj = new query();
        $result = $obj->getData(); // pass id for specific data or let it be empty for all data.
        echo '<pre>';
        return($result);


    }

    

    public function editData(){
       
    }


    

    public function deleteData($id , $table){
        $sql = "DELETE FROM $table WHERE id = $id";
        $result = mysqli_query($this->connect() , $sql);
        if($result){
            echo "suceesfull";
        }
        else{
            echo "unsucessfull";
        }
    }

}


?>
