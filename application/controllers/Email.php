<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller
{

    function  __construct()
    {
        parent::__construct();
    }

   public function send(){
	$this->load->library('email');
	$config['protocol'] = 'sendmail';
    $config['wordwrap'] = TRUE;
    $this->email->initialize($config);
   	$this->email->set_newline("\r\n");
    $this->email->from('report.vpnpanel.co.uk','VPN SERVER');
    $this->email->to($_POST['email']); 
    $this->email->subject("King Khan");
    $this->email->message("King Khan");
    $this->email->send();
}
}?>