<?php
class Test extends CI_Controller {

	
	public function index()
	{
		$this->load->view('test');
	}
	public function hello()
	{
		echo "Hello";
	}
	public function shoes($sandals, $id)
        {
                echo $sandals;
                echo $id;
        }
}
