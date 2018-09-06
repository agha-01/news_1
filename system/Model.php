<?php 

class Model{
	public $host="localhost";
	public $username="root";
	private $password="";
	public $dbname="news";
	public $conn;
	public $nSelect;
	public function GetPass(){
		return $this->password;
	}
	public function __construct(){
			$this->conn=mysqli_connect($this->host,$this->username,$this->GetPass(),$this->dbname);
			if ($this->conn) {
				// echo "success";
			}
			else{
				echo "db error";
			}
		
	}
	public $uInsert;
	public function uInsert($name,$lname,$email,$pass,$gender,$confirm){
		$this->uInsert=mysqli_query($this->conn,"INSERT INTO `users`(`name`, `lname`, `email`, `pass`, `gender`, `confirm`) VALUES ('$name','$lname','$email','$pass','$gender','$confirm')");
		return $this->uInsert;
	}
	public $uSelect;
	public function uSelect($email){
		$this->uSelect=mysqli_query($this->conn,"SELECT * FROM users WHERE email='$email'");
		return $this->uSelect;
	}
	public $newsSelect;
	public function newsSelect($strr){
		$this->newsSelect=mysqli_query($this->conn,"SELECT * FROM ".$strr."");
		return $this->newsSelect;
	}

}

?>