<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function addInvoice()
    {
        $allRows = $this->Fetch_Model->fetchQuery('invoices');
        $invoiceId = $allRows->num_rows();
        $data = array(
            'invoiceId' => $invoiceId + 1,
            'invoiceDate' => $this->input->post('invoiceDate'),
            'vehicle' => $this->input->post('vehicle'),
            'vehicleNo' => $this->input->post('vehicleNo'),
            'kilometers' => $this->input->post('kilometers'),
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'testingCharges' => $this->input->post('testingCharges'),
            'testingPerCharge' => $this->input->post('testingPerCharge'),
            'weightRates' => $this->input->post('weightRates'),
            'weightRatePerCharge' => $this->input->post('weightRatePerCharge'),
            'wheelAlignment' => $this->input->post('wheelAlignment'),
            'wheelAlignmentRupees' => $this->input->post('wheelAlignmentRupees'),
            'tyreRotationCharge' => $this->input->post('tyreRotationCharge'),
            'labourCharge' => $this->input->post('labourCharge'),
            'tyreChange' => $this->input->post('tyreChange'),
            'tyreChangeCharge' => $this->input->post('tyreChangeCharge'),
            'filling' => $this->input->post('filling'),
            'puncture' => $this->input->post('puncture'),
            'tlValve' => $this->input->post('tlValve'),
            'tlValveCharge' => $this->input->post('tlValveCharge'),
            'waterWash' => $this->input->post('waterWash'),
            'note' => $this->input->post('note'),
            'created_date' => date('Y-m-d H:i:s'),
        );
        $result = $this->db->insert('invoices', $data);
        $this->session->set_flashdata('success', 'added successfully!!!');
        redirect('invoicelist');
    }
    public function updateInvoice()
    {
        $id = $this->input->post('editId');
        $data = array(
            'invoiceDate' => $this->input->post('invoiceDate'),
            'vehicle' => $this->input->post('vehicle'),
            'vehicleNo' => $this->input->post('vehicleNo'),
            'kilometers' => $this->input->post('kilometers'),
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'testingCharges' => $this->input->post('testingCharges'),
            'testingPerCharge' => $this->input->post('testingPerCharge'),
            'weightRates' => $this->input->post('weightRates'),
            'weightRatePerCharge' => $this->input->post('weightRatePerCharge'),
            'wheelAlignment' => $this->input->post('wheelAlignment'),
            'wheelAlignmentRupees' => $this->input->post('wheelAlignmentRupees'),
            'tyreRotationCharge' => $this->input->post('tyreRotationCharge'),
            'labourCharge' => $this->input->post('labourCharge'),
            'tyreChange' => $this->input->post('tyreChange'),
            'tyreChangeCharge' => $this->input->post('tyreChangeCharge'),
            'filling' => $this->input->post('filling'),
            'puncture' => $this->input->post('puncture'),
            'tlValve' => $this->input->post('tlValve'),
            'tlValveCharge' => $this->input->post('tlValveCharge'),
            'waterWash' => $this->input->post('waterWash'),
            'note' => $this->input->post('note'),
        );
        $result = $this->db->set($data)->where('id', $id)->update('invoices');
        $this->session->set_flashdata('success', 'added successfully!!!');
        redirect('invoicelist');
    }

    public function deleteInvoice()
    {
        $this->db->where('id', $this->input->post('deleteId'));
        $this->db->delete('invoices');
        $this->session->set_flashdata('success', 'deleted successfully!!!');
        redirect('invoicelist');
    }
}