
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {
	
	
	public function index()
	{
		if($this->session->userdata('my_session')=="")
		{
			$message['msg']="";
			$this->load->view('login/login',$message);
		}
		else
		{ 
				$row=$this->session->userdata('my_session');	
					if($row['role']=="admin")
						return redirect('admin/admin_dashboard');
					if($row['role']=="manager")
						return redirect('manager/manager_dashboard');
					if($row['role']=="employee")
						return redirect('employee/employee_dashboard');
		}	
	}
	public function check_login()
	{
		if($_POST==null)
		{
			return redirect('login');
		}
		else
		{		
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|callback_username_check');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_password_check');
			$this->load->model('LoginModel');
			$this->username=$_POST['username'];
			$this->password=$_POST['password'];
			$this->mylist=$_POST['mylist'];
			
			$user=$_POST['mylist'];
			
			$row=$this->LoginModel->select_users($this);	
				
			if($row)
			{
				date_default_timezone_set("Asia/Kolkata");
				$last_login= date("Y-m-d h:i:sa");
				$this->load->model('LoginModel');
				$this->LoginModel->set_last_login($last_login,$this->username);
				
				//session begins
				
				$session_array=array('first_name'=>$row[0]->first_name,
				'last_name'=>$row[0]->last_name,'role'=>$row[0]->role);	
				$this->load->library('session');
				$this->session->set_userdata('my_session',$session_array);
				
					if($_POST['mylist']=="admin")
						return redirect('admin/admin_dashboard');
					if($_POST['mylist']=="manager")
						return redirect('manager/manager_dashboard');
					if($_POST['mylist']=="employee")
						return redirect('employee/employee_dashboard');
				
			}
			else
			{	
				
			   $message['msg']="invalid username or password";
				$this->load->view('login/login',$message);
			  
			}
		}	
	}
	
	

	public function logout()
	{
		
		$this->session->unset_userdata('my_session');
		return redirect('welcome');
	}	
	

	
}

