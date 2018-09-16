<?php
class SampleBootstrapTimepicker extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		if (!$this->input->post())
		{
			$this->load->view('samplebootstraptimepicker/index');
			return;
		}
		var_dump($this->input->post());
		$this->load->view('samplebootstraptimepicker/index');
	}
}
