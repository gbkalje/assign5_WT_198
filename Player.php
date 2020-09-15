<?php
class Player{
    public $name;
    public $email;
    public $password;
    public $age;
    public $address;
    public $state;
    public $city;
    public $mobil;

    private $conn;

    public function __construct($conn)
    {
        $this->conn=$conn;
        
    }
    public function insertplayer($obj){
        $sql="INSERT INTO `newplayer`(`name`, `email`, `password`, `age`, `address`, `state`, `city`, `mobile`) VALUES ('$obj->name','$obj->email','$obj->password','$obj->age','$obj->address','$obj->state','$obj->city','$obj->mobil');";
            $result=mysqli_query($this->conn,$sql);
            if($result==TRUE){
                $msg=["Form successfully submitted"];
            }
            else
            {
                $msg=["Error occurred while submitting information. Please try again later."];
            }
            
            return json_encode($msg);
    }
    public function getplayer(){
        $sql="SELECT * FROM newplayer;";
        $result=mysqli_query($this->conn,$sql);
        $arr=array();
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $arr[]=$row;
            }
        }
        return json_encode($arr);      
    }

}
?>