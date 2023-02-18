<?php
Class Hello extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Final_Model");
		$this->load->library("session");
	}
	function savedata()
	{
		$this->load->view("forminsert");
		if($this->input->post("submit")) 
		{
			$name= $this->input->post("name");
			$email=$this->input->post("email");
			$address=$this->input->post("address");
			$pass=md5($this->input->post("password"));
			$phn=$this->input->post("phone");
			$gender=$this->input->post("gender");
			$degree=$this->input->post("degree");
			$language=implode(",",$this->input->post("language"));
			$filename= $_FILES["uploadimage"]["name"];
			$tmpname=$_FILES["uploadimage"]["tmp_name"];
			$folder="image/".$filename;
			move_uploaded_file($tmpname,$folder);
			
			//echo $name,$email,$address,$pass,$phn,$gender,$degree,$language,$folder;
			if($this->Final_Model->saverecords($name,$email,$address,$pass,$phn,$gender,$degree,$language,$folder))
			{
				//echo "Insert data successful";
				//redirect("Hello/logindata");
				redirect("Hello/dispdata");
			}
			else
			{
				echo "not inserted";
			}
		}
	}
	function dispdata() 
	{
		$id=$_SESSION["email"];
		$result['data']= $this->Final_Model->disprecords();
		$_SESSION["oldimg"]=$result["data"][0]->picsource;
		//print_r($result);
		$this->load->view("display",$result);
	}
	function logindata()
	{
		$this->load->view("login");
		if($this->input->post("submit")) 
		{
			
			$email=$this->input->post("email");
			$pass=md5($this->input->post("password"));
			if($this->Final_Model->loginrecords($email,$pass))
			{
				//echo "login successful";
				redirect("Hello/dispdata");
			}
			else
			{
				echo "login failure";
			}
		}
	}
	function editdata()
	{
		$id= $this->input->get("ep");
		//echo $id;
		$result['data']= $this->Final_Model->updaterecordsbyid($id);
		//print_r($result);
		$this->load->view("edit",$result);
		if($this->input->post("submit")) 
		{
			$name= $this->input->post("name");
			$email=$this->input->post("email");
			$address=$this->input->post("address");
			$phn=$this->input->post("phone");
			$gender=$this->input->post("gender");
			$degree=$this->input->post("degree");
			$language=implode(",",$this->input->post("language"));
			$filename= $_FILES["uploadimage"]["name"];
			$tmpname=$_FILES["uploadimage"]["tmp_name"];
			$folder="image/".$filename;
			move_uploaded_file($tmpname,$folder);
			$oldimage= $_SESSION["oldimg"];
			if($folder=="image/")
			{
				if($this->Final_Model->updaterecords($name,$email,$address,$phn,$gender,$degree,$language,$oldimage,$id))
				{
					//echo "Update data successful";
					redirect("Hello/dispdata");
				}
				else
				{
					echo "not updated";
				}
			}
			else
			{
				//echo $name,$email,$pass,$phn;
				if($this->Final_Model->updaterecords($name,$email,$address,$phn,$gender,$degree,$language,$folder,$id))
				{
					//echo "Update data successful";
					redirect("Hello/dispdata");
				}
				else
				{
					echo "not updated";
				}
			}
		}
	}
	function deletedata()
	{
		$id= $this->input->get("del");
		//echo "$id";
		if ($this->Final_Model->deleterecords($id)) 
		{
			//echo "Delete successful";
			redirect("Hello/dispdata");
		}
		else
		{
			echo "not deleted";
		}
	}
}
?>