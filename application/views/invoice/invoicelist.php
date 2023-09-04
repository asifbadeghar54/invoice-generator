<!-- Row -->
<div class="main-content side-content pt-0" style="margin-top: 20px">

    <div class="container-fluid">
        <div class="inner-body">
            <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">Invoice</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div>
                                <div class="d-flex flex-row justify-content-end mg-b-20">
                                    <a href="<?php echo base_url('create-invoice') ?>">
                                        <button class="btn ripple btn-primary ">Add</button>
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="customDatatable"
                                    class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Sl. No</th>
                                            <th>CASH/CREDIT MEMO</th>
                                            <th>VEHICLE</th>
                                            <th>Name</th>
                                            <th>phone</th>
                                            <th>Total Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($invoices))
                                            $i = 1;
                                        foreach ($invoices->result() as $row) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->invoiceId ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->vehicle ?>
                                                </td>

                                                <td>
                                                    <?php echo $row->name ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->phone ?>
                                                </td>
                                                <td>
                                                    <?php $amount = $this->Constant_Model->getTotalInvoice($row->id); ?>
                                                    <?php echo $amount; ?>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url('edit-invoice/' . $row->id) ?>">
                                                        <button class="btn ripple btn-success btn-sm"><i
                                                                class=" fe fe-edit"></i>
                                                            Edit Invoice </button> </a>


                                                    <a href="<?php echo base_url('invoice/' . $row->id) ?>">
                                                        <button class="btn ripple btn-primary btn-sm"><i
                                                                class=" fe fe-eye"></i>
                                                            View Invoice</button> </a>
                                                    <button onclick="setDeleteFunction('<?php echo $row->id; ?>')"
                                                        data-target="#deleteModal" data-toggle="modal"
                                                        class="btn ripple btn-danger btn-sm"><i class="fe fe-trash"></i>
                                                        Delete</button>
                                                </td>

                                            </tr>
                                            <?php $i++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete modal -->
            <div class="modal fade" id="deleteModal">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content modal-content-demo " style="border-radius:20px">
                        <form id="deleteForm" action="<?php echo base_url('InterfaceController/deleteInvoice') ?>"
                            method="Post">
                            <div class="modal-body">
                                <h2 class="text-center">
                                    <i class="fe fe-x-circle text-warning" style="font-size:60px"></i>
                                </h2>

                                <h3 class="mt-4 mb-3 text-warning text-center">Message Warning</h3>
                                <input type="hidden" name="deleteId" id="deleteId" />
                                <p class="tx-14 text-center text-dark">Are you sure to delete this you won't recover it
                                    after delete</p>

                            </div>
                            <div class="text-center pb-3">
                                <button class="btn ripple btn-primary " type="submit">Yes</button>
                                <button class="btn ripple btn-danger " data-dismiss="modal" type="button">No</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Scripts -->
<script>
    $(document).ready(function () {
        $('#customDatatable').DataTable({
            paging: false,
            ordering: false,
            info: false,
            dom: 'Bfrtip',
            sizeof: 'A4',
            buttons: [

                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [0,]
                    },
                    title: '',
                    orientation: 'landscape',
                    pageSize: 'legal'
                },
                {
                    extend: 'csvHtml5',
                    exportOptions: {
                        columns: [0,]
                    },
                    title: '',
                    orientation: 'landscape',
                    pageSize: 'legal'
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [0,]
                    },
                    title: '',
                    orientation: 'landscape',
                    pageSize: 'legal'
                },
            ]
        });
    });
</script>

<script>
    function setDeleteFunction(id) {
        $('#deleteId').val(id);
        $('.deleteModal').modal('show');
    }
</script>

<?php if ($this->session->flashdata('error')) { ?>
    <Script>
        swal({
            title: 'Form Failed to Add!',
            text: '<?php echo $this->session->flashdata('error') ?>',
            type: 'error',
            timer: 3000,
            showConfirmButton: false
        });
    </Script>
<?php } ?>
<?php if ($this->session->flashdata('success')) { ?>
    <Script>
        swal({
            title: 'Well done!',
            text: '<?php echo $this->session->flashdata('success') ?>',
            type: 'success',
            timer: 3000,
            showConfirmButton: false
        });
    </Script>
<?php } ?>

<?php if ($this->session->flashdata('update')) { ?>
    <Script>
        swal({
            title: 'Well done!',
            text: 'caste update successfully!',
            type: 'success',
            timer: 3000,
            showConfirmButton: false
        });
    </Script>
<?php } ?>
<?php if ($this->session->flashdata('delete')) { ?>
    <Script>
        swal({
            title: 'Well done!',
            text: 'caste deleted successfully!',
            type: 'success',
            timer: 3000,
            showConfirmButton: false
        });
    </Script>
<?php } ?>