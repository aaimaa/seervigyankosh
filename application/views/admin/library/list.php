<?php $this->load->view('admin/layouts/header');?>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $title;?></h1>
        </div>   
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Dashboard</a></li>
            <li class="breadcrumb-item active"><?php echo $title;?></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo $title;?> List</h3>
              <a href="<?php echo base_url('admin/library/add');?>" class="btn btn-primary float-sm-right">Add New</a>
              <!-- <a h class="btn btn-primary float-sm-right print" style="margin: 0px 10px;">Print List</a> -->
              <!-- <button class="btn btn-primary float-sm-right print print" style="margin: 0px 10px;">Print List</button> -->
            </div>
            <!-- /.card-header -->
            
            <div class="card-body">
            <div class="col-md-12"><span class="float-sm-right"><?php echo !empty($total_due) ? ('<b>Total Due:</b> '. $total_due->due_amount) : ''; ?></span></div><br>
              <table id="example2" class="table table-bordered table-hover" id="printable">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Link</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php $this->load->view('admin/layouts/footer');?>

<script>
  var table = $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "ajax": {
      url : "<?php echo base_url('admin/library-list'); ?>",
      type : 'GET'
    },
  });

  function confirmDelete(id){
    swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: false
    },
    function(){
      $.ajax({
        url: "<?php echo base_url('admin/library/delete')?>",
        type: "GET",
        data: {"id":id,"table": 'library'},
        dataType:"json",
        success: function () {
          swal("Deleted!", "Your records has been deleted.", "success");
          table.ajax.reload();
        },
        error: function (xhr, ajaxOptions, thrownError) {
          swal("Error deleting!", "Please try again", "error");
        }
      });
    });
  }

</script>

<script type='text/javascript'>
$('.print').click(function(){
     $("#printable").print();
});
</script> 
