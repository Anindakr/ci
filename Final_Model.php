<?php
Class Final_Model extends CI_Model
{
	function saverecords($name,$email,$address,$pass,$phn,$gender,$degree,$language,$folder)
	{
		$sql="INSERT INTO `ci_final`(`user_id`, `name`, `email`, `address`, `password`, `phone`, `gender`, `degree`, `language`, `picsource`) VALUES ('','$name','$email','$address','$pass','$phn','$gender','$degree','$language','$folder')";
		if($this->db->query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function disprecords()
	{
		$query= $this->db->query("SELECT * FROM ci_final");
		return $query->result(); //obj format
	}
	function loginrecords($email,$pass)
	{
		$sql=$this->db->query("SELECT * FROM `ci_final` WHERE email='$email' AND password='$pass'");
		if($sql->num_rows())
		{
			return true;
		}
		else
		{
			return false;
		
		}
	}
	function updaterecordsbyid($id)
	{
		$query= $this->db->query("SELECT * FROM ci_final WHERE user_id='$id'");
		return $query->result(); //obj format

	}
	function updaterecords($name,$email,$address,$phn,$gender,$degree,$language,$folder,$id)
	{
		$sql="UPDATE `ci_final` SET `name`='$name',`email`='$email',`address`='$address',`phone`='$phn',`gender`='$gender',`degree`='$degree',`language`='$language',`picsource`='$folder' WHERE user_id='$id'";
		if($this->db->query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function deleterecords($id)
	{
		$sql="DELETE FROM `ci_final` WHERE user_id='$id'";
		if($this->db->query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}


?>