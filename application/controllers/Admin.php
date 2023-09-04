<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("pagination");
    }
    public function index()
    {
        if (!$this->session->userdata('admin_username'))
            redirect('login');
        $this->load->view('layout/admin/header');
        $this->load->view('layout/admin/home');
        $this->load->view('layout/admin/footer');
    }
    public function dashboard()
    {
        if (!$this->session->userdata('admin_username'))
            redirect('login');
        $this->load->view('layout/admin/header');
        $this->load->view('layout/admin/home');
        $this->load->view('layout/admin/footer');
    }

    public function membersLists()
    {
        $config = array();
        $config["base_url"] = base_url() . "memberslist";
        $limit = $this->input->get('limit');
        $config["total_rows"] = $this->Fetch_Model->getMembersCounts();
        $config['full_tag_open'] = "<ul class='pagination pull-right'>";
        $config['full_tag_close'] = "</ul>";
        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;
        $config['anchor_class'] = 'class="page-link"';
        $config['prev_tag_open'] = "<li class='page-item'>";
        $config['prev_tag_close'] = "</li>";
        $config['cur_tag_open'] = "<li class='page-item active'><a class='page-link'>";
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = "<li class='page-item'>";
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = "<li class='page-item'>";
        $config['next_tagl_close'] = "</li>";
        $config['attributes'] = array('class' => 'page-link');
        $config['reuse_query_string'] = true;

        if ($limit) {
            if ($limit == "all") {
                $config["per_page"] = $config["total_rows"];
            } else {
                $config["per_page"] = $limit;
            }
        } else {
            $config["per_page"] = 25;
        }
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['members'] = $this->Fetch_Model->membersLimit($config["per_page"], $page);
        $data['resturants'] = $this->Fetch_Model->fetchQuery('resturant');
        $this->load->view('layout/admin/header');
        $this->load->view('layout/admin/memberlists', $data);
        $this->load->view('layout/admin/footer');
    }


    public function invoice($id)
    {
        $data['invoice'] = $this->Fetch_Model->fetchQueryById('invoices', 'id', $id);
        $this->load->view('layout/admin/header');
        $this->load->view('invoice/invoice', $data);
        $this->load->view('layout/admin/footer');
    }
    public function invoiceList()
    {
        $data['invoices'] = $this->Fetch_Model->fetchQuery('invoices');
        $this->load->view('layout/admin/header');
        $this->load->view('invoice/invoicelist', $data);
        $this->load->view('layout/admin/footer');
    }
    public function createInvoice()
    {
        $this->load->view('layout/admin/header');
        $this->load->view('invoice/create_invoice');
        $this->load->view('layout/admin/footer');
    }
    public function editInvoice($id)
    {
        $data['invoice'] = $this->Fetch_Model->fetchQueryById('invoices', 'id', $id);
        $this->load->view('layout/admin/header');
        $this->load->view('invoice/edit_invoice', $data);
        $this->load->view('layout/admin/footer');
    }
}