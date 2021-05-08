<?php
class User extends BaseController 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	}

	public function index()
	{
		
		if($this->input->post('register'))
		{
		$k=$this->input->post('nick');
		$e=$this->input->post('email');
		$c=$this->input->post('contraseña');
		$n=$this->input->post('nombre');
		$a=$this->input->post('apellido');
        $i=$this->input->post('imagen');
        $b=$this->input->post('nacimiento');
        $d=$this->input->post('tipo');
		
		$que=$this->db->query("select * from usuario where email='".$e."'");
		$row = $que->num_rows();
		if($row)
		{
		$data['error']="<h3 style='color:red'>Este usuario ya exciste</h3>";
		}
		else
		{
		$que=$this->db->query("insert into student values('','$k','$e','$c','$n','$a', '$i','$b','$d')");
		
		$data['error']="<h3 style='color:blue'>Usuario creado correctamente</h3>";
		}			
				
		}
	$this->load->view('student_registration',@$data);	
	}
}
?>