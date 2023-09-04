<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Constant_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function getCurrencyValue($number)
    {
        setlocale(LC_MONETARY, "en_US");
        $amount = number_format($number, 2);
        return  $amount;
    }

    public function getimagesize($image, $mode)
    {
        list($width, $height, $type, $attr) = getimagesize($image);
        if ($mode == 'width') {
            return $width;
        } else if ($mode == 'height') {
            return $height;
        } else {
            return $width + '' + $height;
        }
    }
    public function getStatusText($status)
    {

        if ($status == 0) {
            return 'Offline';
        } else if ($status == 1) {
            return 'Working';
        } else {
            return 'No Internet';
        }
    }

    public function getTotalValueInAmount($val1,$val2){
        $amount=0;
        if($val2){
            $amount=$val1*$val2;
        }else{
            $amount=$val1; 
        }
        $formattedAmount = number_format($amount, 2, '.', ',');
        return $formattedAmount;
    }
    public function getTotalInvoice($id){
        $totals=$this->Fetch_Model->fetchQueryById('invoices', 'id', $id)->row();
        $wheelBalancing = $totals->testingCharges * $totals->testingPerCharge;
        $weelRates = $totals->weightRates * $totals->weightRatePerCharge;
        $wheelAlignment = $totals->wheelAlignmentRupees;
        $tyreRotationCharge = $totals->tyreRotationCharge;
        $labourCharge = $totals->labourCharge;
        $tyreChange = $totals->tyreChange * $totals->tyreChangeCharge;
        $filling=$totals->filling;
        $puncture=$totals->puncture;
        $tlValve=$totals->tlValve*$totals->tlValveCharge;
        $mainTotal=$wheelBalancing+$weelRates+$wheelAlignment+$tyreRotationCharge+$labourCharge+$tyreChange+$filling+$puncture+$puncture+$tlValve;
        $amount=$this->getTotalValueInAmount($mainTotal,'');
        return $amount;
    }
}
