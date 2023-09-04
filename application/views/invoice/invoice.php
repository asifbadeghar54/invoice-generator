<style>
    .leftText {
        text-align: right;
    }

  
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/PrintArea/2.4.1/jquery.PrintArea.min.js"></script>

<div class="main-content side-content pt-0">
    <div class="container-fluid">
        <div class="inner-body">
            <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">Invoice</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12" id="printableArea">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-left" style="width:50%">
                                    <p class="h6">CASH/CREDIT MEMO :
                                        <?php if ($invoice->row())
                                            echo $invoice->row()->invoiceId ?>
                                        </p>
                                        <p class="h6">DATE :
                                            <?php
                                        echo $invoice->row()->invoiceDate ?>
                                    </p>
                                    <p class="h6">VEHICLE :
                                        <?php
                                        echo $invoice->row()->vehicle ?>
                                    </p>
                                    <p class="h6">VEHICLE NO :
                                        <?php
                                        echo $invoice->row()->vehicleNo ?>
                                    </p>
                                    <p class="h6">KILOMETERS :
                                        <?php
                                        echo $invoice->row()->kilometers ?>
                                    </p>
                                </div>
                                <div class=" text-right" style="width:50%">
                                    <p class="h6">GST No. 29AEUPT7287E1ZH</p>
                                    <h2 class="text-danger">SRI VINAYAK WHEELS</h2>
                                    <p class="h6">3D 4 CAMERA WHEEL ALIGNMENT & WHEEL BALANCING</p>
                                    <p class="h6">Opp.Toyota Showroom, Ground Floor, Site No. 24F/3, 24 F/4, 0,
                                        Bangalore Highway Road, Ganesh Nagar,</p>
                                    <p class="h6">VIJAYAPUR-586 104. Cell: 8147129261</p>
                                </div>
                            </div>
                            <hr class="mg-b-20">

                            <div class="d-flex">
                                <div class="text-left" style="width:80%">
                                    <h6>Name :
                                        <?php
                                        echo $invoice->row()->name ?>
                                    </h6>
                                </div>
                                <div class="text-left" style="width:50%">
                                    <h6>Phone :
                                        <?php
                                        echo $invoice->row()->phone ?>
                                    </h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="text-left" style="width:80%">
                                    <h6>Address :
                                        <?php
                                        echo $invoice->row()->address ?>
                                    </h6>
                                </div>
                            </div>
                            <div class="mg-b-20"></div>
                            <hr class="mg-b-10">
                            <div class="table-responsive mg-t-40">
                                <h3>Particulars</h3>
                                <table class="table table-invoice">
                                    <tr>
                                        <td>
                                            <p class="h6  text-left">WHEEL BALANCING: TESTING CHARGES</p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php
                                                echo $invoice->row()->testingCharges ?> WHEELS
                                            </p>
                                        </td>
                                        <td>
                                            <p class="h6">PER WHL. RS.
                                                <?php
                                                echo $invoice->row()->testingPerCharge ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php echo $this->Constant_Model->getTotalValueInAmount($invoice->row()->testingCharges, $invoice->row()->testingPerCharge) ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="h6 text-center">: WEIGHT RATES</p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php
                                                echo $invoice->row()->weightRates ?> GMS
                                            </p>
                                        </td>
                                        <td>
                                            <p class="h6">PER GM. RS.
                                                <?php
                                                echo $invoice->row()->weightRatePerCharge ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php echo $this->Constant_Model->getTotalValueInAmount($invoice->row()->weightRates, $invoice->row()->weightRatePerCharge) ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="h6 text-left">SYNTHESTS BASIC WHEEL ALIGNMENT</p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php
                                                echo $invoice->row()->wheelAlignment ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="h6">RS.
                                                <?php
                                                echo $invoice->row()->wheelAlignmentRupees ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php
                                                echo $invoice->row()->wheelAlignmentRupees ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span></span>
                                        </td>
                                        <td>
                                            <p class="h6">TYRE ROTATION CHARGE</p>
                                        </td>
                                        <td>
                                            <p class="h6"></p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php
                                                echo $invoice->row()->tyreRotationCharge ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <p class="h6">LABOUR CHARGE</p>
                                        </td>
                                        <td>
                                            <p class="h6"></p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php
                                                echo $invoice->row()->labourCharge ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <p class="h6">TYRE CHANGE :
                                                <?php
                                                echo $invoice->row()->tyreChange ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php
                                                echo $invoice->row()->tyreChangeCharge ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php echo $this->Constant_Model->getTotalValueInAmount($invoice->row()->tyreChange, $invoice->row()->tyreChangeCharge) ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="h6">N,FILLING</p>
                                        </td>
                                        <td>
                                            <p class="h6"></p>
                                        </td>
                                        <td>
                                            <p class="h6"></p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php
                                                echo $invoice->row()->filling ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="h6"> PUNCTURE</p>
                                        </td>
                                        <td>
                                            <p class="h6"></p>
                                        </td>
                                        <td>
                                            <p class="h6"></p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php
                                                echo $invoice->row()->puncture ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="h6">TL. VALUE</p>
                                        </td>
                                        <td>
                                            <p class="h6"></p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php
                                                echo $invoice->row()->tlValve ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php echo $this->Constant_Model->getTotalValueInAmount($invoice->row()->tlValve, $invoice->row()->tlValveCharge) ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="h6">RS.</p>
                                        </td>
                                        <td>
                                            <p class="h6"></p>
                                        </td>
                                        <td>
                                            <p class="h6">TOTAL</p>
                                        </td>
                                        <td>
                                            <p class="h6">
                                                <?php $amount = $this->Constant_Model->getTotalInvoice($invoice->row()->id); ?>
                                                <?php echo $amount; ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                <div class="valign-middle" colspan="2" rowspan="4">
                                    <div class="invoice-notes"><label class="main-content-label tx-13">Notes</label>
                                        <div class="d-flex">
                                            <p class="text-left" style="width:50%">We recommend the Wheel Balancing and
                                                the Wheel Alignment to be done after every
                                                <?php echo $invoice->row()->note ?> kms. to keep your Vehicle running in
                                                good condition kms.
                                            </p>
                                            <div class="text-right " style="width:50%">
                                                <h2 class="text-danger">For: SRI VINAYAK WHEELS</h2>
                                            </div>
                                        </div>
                                    </div><!-- invoice-notes -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
            <div class="card-footer text-center p-0"><button type="button" class="btn ripple btn-info mb-1"
                    onclick="printDiv('printableArea')"><i class="fe fe-printer mr-1"></i> Print Invoice</button> </div>
        </div>
    </div>
</div> <!-- End Main Content--> <!-- Main Footer-->


<script>
    $(document).ready(function () {
        $("#printButton").click(function () {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = { mode: mode, popClose: close };
            $("div.printableArea").printArea(options);
        });
    });
</script>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>