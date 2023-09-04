<div class="main-content side-content pt-0">
    <div class="container-fluid ">
        <div class="inner-body">
            <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">Create Invoice</h1>
                </div>
            </div>
            <div class="card overflow-hidden">
                <div class="card-body">

                    <form id="addForm" action="<?php echo base_url('InterfaceController/addInvoice') ?>" method="Post">
                        <div class="row">
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">INVOICE DATE</p>
                                <input type="date" class="form-control" name="invoiceDate" id="invoiceDate">
                            </div>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">VEHICLE</p>
                                <input type="text" class="form-control" name="vehicle" id="vehicle">
                            </div>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">VEHICLE NO</p>
                                <input type="text" class="form-control" name="vehicleNo" id="vehicleNo">
                            </div>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">KILOMETERS</p>
                                <input type="text" class="form-control" name="kilometers" id="kilometers">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">CUSTOMER NAME</p>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">PHONE</p>
                                <input type="text" class="form-control" name="phone" id="phone">
                            </div>
                            <div class="col-md-12 mg-b-10">
                                <p class="mg-b-10">ADDRESS</p>
                                <textarea type="text" rows="2" class="form-control" name="address"
                                    id="address"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">WHEEL BALANCING: TESTING CHARGES</p>
                                <input type="text" class="form-control" name="testingCharges" id="testingCharges">
                            </div>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">PER WHL RS.</p>
                                <input type="text" class="form-control" name="testingPerCharge" id="testingPerCharge">
                            </div>

                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">WEIGHT RATES</p>
                                <input type="text" class="form-control" name="weightRates" id="weightRates">
                            </div>

                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">PER GM. RS</p>
                                <input type="text" class="form-control" name="weightRatePerCharge"
                                    id="weightRatePerCharge">
                            </div>

                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">SYNTHESTS BASIC WHEEL ALIGNMENT</p>
                                <select class="form-control form-control select-lg select2-no-search"
                                    id="wheelAlignment" name="wheelAlignment">
                                    <option selected="" disabled="">Select</option>
                                    <option value="FRONT">FRONT</option>
                                    <option value="REAR">REAR</option>
                                </select>
                            </div>
                            <div class="col-md-6 mg-b-10">
                                <p class="mg-b-10">TYRE ROTATION CHARGE</p>
                                <input type="text" class="form-control" name="tyreRotationCharge"
                                    id="tyreRotationCharge">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">LABOUR CHARGE</p>
                                <input type="text" class="form-control" name="labourCharge" id="labourCharge">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">TYRE CHANGE</p>
                                <input type="text" class="form-control" name="tyreChange" id="tyreChange">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">TYRE CHANGE CHARGE</p>
                                <input type="text" class="form-control" name="tyreChangeCharge" id="tyreChangeCharge">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">N,FILLING</p>
                                <input type="text" class="form-control" name="tyreChangeCharge" id="tyreChangeCharge">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">PUNCTURE</p>
                                <input type="text" class="form-control" name="tyreChangeCharge" id="tyreChangeCharge">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">TL. VALVE</p>
                                <input type="text" class="form-control" name="tlValue" id="tlValue">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">TL. VALVE CHARGE</p>
                                <input type="text" class="form-control" name="tlValueCharge" id="tlValueCharge">
                            </div>
                            <div class="col-md-4 mg-b-10">
                                <p class="mg-b-10">WATER WASH</p>
                                <input type="text" class="form-control" name="waterWash" id="waterWash">
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