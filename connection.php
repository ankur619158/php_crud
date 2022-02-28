<?php
class database{

    private $host;
    private $dbusername;
    private $dbpassword;
    private $dbname;

    protected function connect(){
        $this->host = 'localhost';
        $this->dbusername = "root";
        $this->dbpassword = "";
        $this->dbname = "travel";
        $conn = new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
        return $conn; 
    }
}

class operation extends database{

    public function getData($condition=''){
        $sql = "select * from userdatas";
        if ($condition!=''){
            $sql.=' where ';
            $c = count($condition);
            $i = 1;
            foreach($condition as $key=>$val){
                if($i==$c){
                   $sql.="$key='$val'";
                }
                else{
                    $sql.="$key='$val' and "; 
                }
                $i++;
            }
        }
        $result = $this->connect()->query($sql);
        if($result->num_rows>0){
            $arr = array();
            while ($row=$result->fetch_assoc()) {
                $arr[] = $row;
            }
            return $arr;
        }
        else{
            return 0;
        }
    }
    
    public function insertData($condition){
        if ($condition!= ''){
            foreach($condition as $key=>$val){
                $fieldArr[] = $key;
                $dataArr[] = $val;
            }
            $field = implode(",",$fieldArr);
            $value = implode("','", $dataArr);
            $value = "'".$value."'";
            $sql = "INSERT INTO users($field) values ($value) ";
            $result = $this->connect()->query($sql);
        }
    }

    public function delteData($condition){
        if ($condition!= ''){
            $sql = "DELETE FROM users where ";
            $c = count($condition);
            $i = 1;
            foreach($condition as $key=>$val){
                if($i==$c){
                    $sql.="$key='$val'";
                }
                else{
                    $sql.="$key='$val' and ";
                }
                $i++;
            }
         
           $result=$this->connect()->query($sql);
        }
    }
    public function updateData($condition,$which_field,$which_value){
        $sql = "UPDATE users set ";
        $c = count($condition);
        $i = 1;
        foreach($condition as $key=>$val){
            if ($i==$c){
                $sql.="$key='$val'";
            }
            else{
                $sql.="$key='$val', ";
            }
            $i++;
        }
        $sql.=" where $which_field='$which_value' ";
        $result = $this->connect()->query($sql);
    }
}

