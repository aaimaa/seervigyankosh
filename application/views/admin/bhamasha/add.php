<?php $this->load->view('admin/layouts/header');?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $title;?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/bhamashah'); ?>">Bhamashah</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo $title;?></h3>
                        </div>
                        <form role="form" name="add_bhamashah" id="add_bhamashah" enctype="multipart/form-data">
                            
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <p>Bhamashah Add list</p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" value="" placeholder="Enter name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>City/Village <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="city" value="" placeholder="Enter City/Village">
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Amount <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="amount" value="" placeholder="Enter Amount">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="date" value="" placeholder="Enter date">
                                        </div>
                                    </div>
                                </div>
                               
                            <div class="card-footer">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="reset" class="btn btn-danger" value="Cancel">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="msg"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('admin/layouts/footer');?>
<script type="text/javascript">
    $(document).ready(function(){

        var validator = $("#add_bhamashah").validate({
            rules: {

                name: {
                    required: true,
                },

                city: {
                    required: true,
                }, 
                amount: {
                    required: true,
                    number: true
                }, 

                date: {
                    required: true,
                }, 


            },

            messages: {

                name: {
                    required: "Please Enter Name",
                }, 

                city: {
                    required: "Please Enter City",
                }, 
                amount: {
                    required: "Please Enter Amount",
                    number:"Please Enter Valid Amount",
                }, 

                date: {
                    required: "Please Enter Date",
                }, 


            },    

            submitHandler:function(form){
                var url = "<?php echo base_url('admin/bhamashah/store'); ?>";
                var form_data= new FormData(form);

                $.ajax({
                    url: url,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    data: form_data,
                    success: function(result){

                        var res = $.parseJSON(result);
                        var message = res.message;

                        if(res.success == true){
                            $.notify({ message: message },{ type: 'success' });

                            window.location.replace(SITEURL+'admin/bhamashah');
                        }else{
                            $.notify({ message: message },{ type: 'danger' });
                        }
                    }
                }); 
            }          

        });

    })
</script>