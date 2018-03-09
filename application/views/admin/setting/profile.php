<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="<?php echo ($action == 'change-profile' || $action == "") ? 'active' : ''; ?>"><a href="#chnage_profile" data-toggle="tab" aria-expanded="false">Change Profile</a></li> 
        <li class="<?php echo $action == 'change-password' ? 'active' : ''; ?>"><a href="#change_password" data-toggle="tab" aria-expanded="false">Change Password</a></li> 
    </ul>
    <div class="tab-content">
        <div class="tab-pane <?php echo ($action == 'change-profile' || $action == "") ? 'active' : ''; ?>" id="chnage_profile">
            <div class="row">
                <div class="col-lg-6"> 
                    <?php echo form_open('admin/settings/profile', array("id" => "change-profile-form", "method" => "post")); ?>

                    <div class="form-group <?php echo form_error('email') != "" ? 'has-error' : ''; ?>">
                        <label class="control-label" for="email">Email <em>*</em></label>
                        <?php echo form_input("email", set_value("email", isset($data->email) ? $data->email : ""), "id='email' class='form-control' disabled='disabled'"); ?>
                        <?php echo form_error('email'); ?>
                    </div>

                    <div class="form-group <?php echo form_error('first_name') != "" ? 'has-error' : ''; ?>">
                        <label class="control-label" for="first_name">First Name <em>*</em></label>
                        <?php echo form_input("first_name", set_value("first_name", isset($data->first_name) ? $data->first_name : "", FALSE), "id='first_name' class='form-control'"); ?>
                        <?php echo form_error('first_name'); ?>
                    </div>

                    <div class="form-group <?php echo form_error('last_name') != "" ? 'has-error' : ''; ?>">
                        <label class="control-label" for="title">Last Name</label>
                        <?php echo form_input("last_name", set_value("last_name", isset($data->last_name) ? $data->last_name : "", FALSE), "id='last_name' class='form-control'"); ?>
                        <?php echo form_error('last_name'); ?>
                    </div>  

                    <div class="form-group <?php echo form_error('phone') != "" ? 'has-error' : ''; ?>">
                        <label class="control-label" for="phone">Phone</label>
                        <?php echo form_input("phone", set_value("phone", isset($data->phone) ? $data->phone : ""), "id='phone' class='form-control'"); ?>
                        <?php echo form_error('phone'); ?>
                    </div>

                    <?php echo form_hidden('action', 'change-profile'); ?>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-default" onclick="window.location.href = '<?php echo site_url("admin/dashboard"); ?>'">Cancel</button>
                    <?php echo form_close(); ?> 
                </div>
            </div>
            <!-- /.col-lg-6 (nested) -->  
        </div>
        <div class="tab-pane <?php echo $action == 'change-password' ? 'active' : ''; ?>" id="change_password">
            <div class="row">
                <div class="col-lg-6"> 
                    <?php echo form_open('admin/settings/profile', array("id" => "change-password-form", "method" => "post")); ?>
                    <div class="form-group <?php echo form_error('password') != ""  ? 'has-error'   : ''; ?>">
                                <label class="control-label" for="password">Old Password</label>
                                <?php echo form_password("password", set_value("password"), "id='password' class='form-control'"); ?>
                                <?php echo form_error('password'); ?>
                            </div>

                            <div class="form-group <?php echo form_error('new_password') != "" ? 'has-error' : ''; ?>"> 
                                <label class="control-label" for="new_password">New Password</label>
                                <?php echo form_password("new_password", set_value("new_password"), "id='new_password' class='form-control'"); ?>
                                <?php echo form_error('new_password'); ?>
                            </div>

                            <div class="form-group <?php echo form_error('confirm_password') != "" ? 'has-error' : ''; ?>">
                                <label class="control-label" for="confirm_password">Confirm Password</label>
                                <?php echo form_password("confirm_password", set_value("confirm_password"), "id='confirm_password' class='form-control'"); ?>
                                <?php echo form_error('confirm_password'); ?>
                            </div>  
                            <?php echo form_hidden('action', 'change-password'); ?>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-default" onclick="window.location.href = '<?php echo site_url("admin/dashboard"); ?>'">Cancel</button>
                            <?php echo form_close(); ?>               
                </div>
            </div>
            <!-- /.col-lg-6 (nested) -->  
        </div>
        <!-- /.tab-pane --> 
    </div>
    <!-- /.tab-content -->
</div>


