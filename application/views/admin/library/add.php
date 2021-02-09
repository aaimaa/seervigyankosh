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
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/library'); ?>">Library</a></li>
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
                        <form role="form" name="add_library" id="add_library" enctype="multipart/form-data">
                            
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" value="" placeholder="Enter name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Link <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="link" value="" placeholder="Enter link">
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

        var validator = $("#add_library").validate({
            rules: {
                name: {
                    required: true,
                },
                link: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please enter book name",
                }, 
                link: {
                    required: "Please enter book url",
                },
            },    
            submitHandler:function(form){
                var url = "<?php echo base_url('admin/library/store'); ?>";
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

                            window.location.replace(SITEURL+'admin/library');
                        }else{
                            $.notify({ message: message },{ type: 'danger' });
                        }
                    }
                }); 
            }          

        });

    })
</script>