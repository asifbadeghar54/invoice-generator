<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InterfaceController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("pagination");
    }
    
    public function addInvoice()
    {
        $this->Admin_Model->addInvoice();
    }
    public function updateInvoice()
    {
        $this->Admin_Model->updateInvoice();
    }
    public function deleteInvoice()
    {
        $this->Admin_Model->deleteInvoice();
    }

}