<div class="main-content side-content pt-0">
    <div class="container-fluid ">
        <div class="inner-body">
        <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">Edit Invoice</h1>
                </div>
            </div>
            <div class="card overflow-hidden">
                <div class="card-body">
                    <form id="addForm" action="<?php echo base_url('InterfaceController/updateInvoice') ?>"
                        method="Post">
                        <div class="row">
                            <input type="hidden" name="editId" value="<?php echo $invoice->row()->id?>"/>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">INVOICE DATE</p>
                                <input type="date" class="form-control" name="invoiceDate" id="invoiceDate"
                                    value="<?php echo $invoice->row()->invoiceDate ?>">
                            </div>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">VEHICLE</p>
                                <input type="text" class="form-control" name="vehicle" id="vehicle"
                                    value="<?php echo $invoice->row()->vehicle ?>">
                            </div>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">VEHICLE NO</p>
                                <input type="text" class="form-control" name="vehicleNo" id="vehicleNo"
                                    value="<?php echo $invoice->row()->vehicleNo ?>">
                            </div>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">KILOMETERS</p>
                                <input type="text" class="form-control" name="kilometers" id="kilometers"
                                    value="<?php echo $invoice->row()->kilometers ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">CUSTOMER NAME</p>
                                <input type="text" class="form-control" name="name" id="name"
                                    value="<?php echo $invoice->row()->name ?>">
                            </div>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">PHONE</p>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    value="<?php echo $invoice->row()->phone ?>">
                            </div>
                            <div class="col-md-12 mg-b-10">
                                <p class="mg-b-10">ADDRESS</p>
                                <textarea type="text" rows="2" class="form-control" name="address"
                                    id="address"><?php echo $invoice->row()->address ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">WHEEL BALANCING: TESTING CHARGES</p>
                                <input type="text" class="form-control" name="testingCharges" id="testingCharges"
                                    value="<?php echo $invoice->row()->testingCharges ?>">
                            </div>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">PER WHL RS.</p>
                                <input type="text" class="form-control" name="testingPerCharge" id="testingPerCharge"
                                    value="<?php echo $invoice->row()->testingPerCharge ?>">
                            </div>

                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">WEIGHT RATES</p>
                                <input type="text" class="form-control" name="weightRates" id="weightRates"
                                    value="<?php echo $invoice->row()->weightRates ?>">
                            </div>

                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">PER GM. RS</p>
                                <input type="text" class="form-control" name="weightRatePerCharge"
                                    id="weightRatePerCharge" value="<?php echo $invoice->row()->weightRatePerCharge ?>">
                            </div>

                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">SYNTHESTS BASIC WHEEL ALIGNMENT</p>
                                <select class="form-control form-control select-lg select2-no-search"
                                    id="wheelAlignment" name="wheelAlignment">
                                    <option selected="" disabled="">Select</option>
                                    <option value="FRONT" <?php echo $invoice->row()->wheelAlignment == "FRONT" ? 'selected' : '' ?>>FRONT</option>
                                    <option value="REAR" <?php echo $invoice->row()->wheelAlignment == "REAR" ? 'selected' : '' ?>>REAR</option>
                                </select>
                            </div>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">TYRE ROTATION CHARGE</p>
                                <input type="text" class="form-control" name="tyreRotationCharge"
                                    id="tyreRotationCharge" value="<?php echo $invoice->row()->tyreRotationCharge ?>">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">LABOUR CHARGE</p>
                                <input type="text" class="form-control" name="labourCharge" id="labourCharge"
                                    value="<?php echo $invoice->row()->labourCharge ?>">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">TYRE CHANGE</p>
                                <input type="text" class="form-control" name="tyreChange" id="tyreChange"
                                    value="<?php echo $invoice->row()->tyreChange ?>">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">TYRE CHANGE CHARGE</p>
                                <input type="text" class="form-control" name="tyreChangeCharge" id="tyreChangeCharge"
                                    value="<?php echo $invoice->row()->tyreChangeCharge ?>">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">N,FILLING</p>
                                <input type="text" class="form-control" name="filling" id="filling"
                                    value="<?php echo $invoice->row()->filling ?>">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">PUNCTURE</p>
                                <input type="text" class="form-control" name="puncture" id="puncture"
                                    value="<?php echo $invoice->row()->puncture ?>">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">TL. VALVE</p>
                                <input type="text" class="form-control" name="tlValve" id="tlValve"
                                    value="<?php echo $invoice->row()->tlValve ?>">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">TL. VALVE CHARGE</p>
                                <input type="text" class="form-control" name="tlValveCharge" id="tlValveCharge"
                                    value="<?php echo $invoice->row()->tlValveCharge ?>">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">WATER WASH</p>
                                <input type="text" class="form-control" name="waterWash" id="waterWash"
                                    value="<?php echo $invoice->row()->waterWash ?>">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">Note:Wheel Balancing and the Wheel Alignment</p>
                                <input type="text" class="form-control" name="note" id="note">
                            </div>
                        </div>
                        <div class="text-center mg-t-20 mg-b-20">
                            <button class="btn ripple btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<script>
    $(document).ready(function () {
        $('#addForm').bootstrapValidator({
            fields: {
                invoiceDate: {
                    validators: {
                        notEmpty: {
                            message: 'The invoice date  is required'
                        },
                    }
                },
                vehicle: {
                    validators: {
                        notEmpty: {
                            message: 'The vehicle name  is required'
                        },
                    }
                },
                vehicleNo: {
                    validators: {
                        notEmpty: {
                            message: 'The vehicle number  is required'
                        },
                    }
                },
                name: {
                    validators: {
                        notEmpty: {
                            message: 'The customer name  is required'
                        },
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'The phone  is required'
                        },
                    }
                },
            }
        }).on('success.form.bv', function (e) {
            $(this)[0].submit();
        });
    });
</script>