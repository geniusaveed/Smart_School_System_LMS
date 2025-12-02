<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-key"></i> <?php echo $this->lang->line('change_password'); ?><small><?php echo $this->lang->line('setting1'); ?></small>        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <br/>
                    <form action="<?php echo site_url('admin/licence') ?>"  method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                        <?php if ($this->session->flashdata('msg')) { ?>
                            <?php echo $this->session->flashdata('msg') ?>
                        <?php } ?>                      
                        
                        <?php echo $this->customlib->getCSRF(); ?>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><?php echo $this->lang->line('email'); ?><span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  name="email" required="required" class="form-control col-md-7 col-xs-12" type="email"  value="<?php echo set_value('email'); ?>">
                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                            </div>
                        </div>
                      
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-info"><?php echo "Generate Licence"; ?></button>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                           
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Key"><?php echo "Your Licence Key is:"; ?>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <h3> <span class="text-success"><?php echo $key; ?></span></h3>
                            </div>
                            
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
</div>
