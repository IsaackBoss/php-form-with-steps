<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-tagsinput/fm.tagator.jquery.js"></script>
<!--CARD CSS-->
<style>
* {
  box-sizing: border-box;
}


/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 10px 10px;
  

}

.columnzz {
  float: left;
  width: 100%;
  padding: 10px 10px;
 

}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.cardz {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  
  background-color: #f1f1f1;
}

.cardzz {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  
  background-color: #f1f1f1;
}
</style>

<!--END OF CARD CSS-->


<!--STEPS CSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS-->

<style type="text/css">
 
#multi-step-form-container {
    margin-top: 5rem;
}

.mx-auto {
    margin-left: auto;
    margin-right: auto;
}
.pl-0 {
    padding-left: 0;
}
.buttonz {
    padding: 0.7rem 1.5rem;
    border: 1px solid #4361ee;
    background-color: #4361ee;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
}
.submit-btn {
    border: 1px solid #0e9594;
    background-color: #0e9594;
}
.mt-3 {
    margin-top: 2rem;
}
.d-none {
    display: none;
}
.form-step {
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    padding: 3rem;
}
.font-normal {
    font-weight: normal;
}
ul.form-stepper {
    counter-reset: section;
    margin-bottom: 3rem;
}
ul.form-stepper .form-stepper-circle {
    position: relative;
}
ul.form-stepper .form-stepper-circle span {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
}
.form-stepper-horizontal {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
ul.form-stepper > li:not(:last-of-type) {
    margin-bottom: 0.625rem;
    -webkit-transition: margin-bottom 0.4s;
    -o-transition: margin-bottom 0.4s;
    transition: margin-bottom 0.4s;
}
.form-stepper-horizontal > li:not(:last-of-type) {
    margin-bottom: 0 !important;
}
.form-stepper-horizontal li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: start;
    -webkit-transition: 0.5s;
    transition: 0.5s;
}
.form-stepper-horizontal li:not(:last-child):after {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    height: 1px;
    content: "";
    top: 32%;
}
.form-stepper-horizontal li:after {
    background-color: #dee2e6;
}
.form-stepper-horizontal li.form-stepper-completed:after {
    background-color: #4da3ff;
}
.form-stepper-horizontal li:last-child {
    flex: unset;
}
ul.form-stepper li a .form-stepper-circle {
    display: inline-block;
    width: 40px;
    height: 40px;
    margin-right: 0;
    line-height: 1.7rem;
    text-align: center;
    background: rgba(0, 0, 0, 0.38);
    border-radius: 50%;
}
.form-stepper .form-stepper-active .form-stepper-circle {
    background-color: #4361ee !important;
    color: #fff;
}
.form-stepper .form-stepper-active .label {
    color: #4361ee !important;
}
.form-stepper .form-stepper-active .form-stepper-circle:hover {
    background-color: #4361ee !important;
    color: #fff !important;
}
.form-stepper .form-stepper-unfinished .form-stepper-circle {
    background-color: #f8f7ff;
}
.form-stepper .form-stepper-completed .form-stepper-circle {
    background-color: #0e9594 !important;
    color: #fff;
}
.form-stepper .form-stepper-completed .label {
    color: #0e9594 !important;
}
.form-stepper .form-stepper-completed .form-stepper-circle:hover {
    background-color: #0e9594 !important;
    color: #fff !important;
}
.form-stepper .form-stepper-active span.text-muted {
    color: #fff !important;
}
.form-stepper .form-stepper-completed span.text-muted {
    color: #fff !important;
}
.form-stepper .label {
    font-size: 1rem;
    margin-top: 0.5rem;
}
.form-stepper a {
    cursor: default;
}
</style>







<div id="all_projects_state_report_div">

</div>

<?= message_box('success'); ?>
<?= message_box('error');
$all_customer_group = $this->db->where('type', 'projects')->order_by('customer_group_id', 'DESC')->get('tbl_customer_group')->result();
$all_client = $this->items_model->get_permission('tbl_client');
$created = can_action('57', 'created');
$edited = can_action('57', 'edited');
$deleted = can_action('57', 'deleted');
if (!empty($created) || !empty($edited)) {
?>
<div class="row">
    <div class="col-sm-12">
        <?php $is_department_head = is_department_head();
        $current_userid = $this->session->userdata('user_type');

            if ($this->session->userdata('user_type') == 1 || !empty($is_department_head)) { ?>
        <div class="btn-group pull-right btn-with-tooltip-group _filter_data filtered" data-toggle="tooltip"
            data-title="<?php echo lang('filter_by'); ?>">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-filter" aria-hidden="true"></i>
            </button>
            <ul class="dropdown-menu group animated zoomIn" style="width:300px;">
                <li class="filter_by all_filter"><a href="#"><?php echo lang('all'); ?></a></li>
                <li class="divider"></li>

                <li class="dropdown-submenu pull-left  " id="from_account">
                    <a href="#" tabindex="-1"><?php echo lang('by') . ' ' . lang('client'); ?></a>
                    <ul class="dropdown-menu dropdown-menu-left from_account" style="">
                        <?php
                                if (!empty($all_client)) {
                                    foreach ($all_client as $v_client) {
                                ?>
                        <li class="filter_by" id="<?= $v_client->client_id ?>" search-type="by_client">
                            <a href="#"><?php echo $v_client->name; ?></a>
                        </li>
                        <?php }
                                }
                                ?>
                    </ul>
                </li>
                <div class="clearfix"></div>
                <li class="dropdown-submenu pull-left " id="to_account">
                    <a href="#" tabindex="-1"><?php echo lang('by') . ' ' . lang('staff'); ?></a>
                    <ul class="dropdown-menu dropdown-menu-left to_account" style="">
                        <?php if (admin()) { ?>
                        <li class="filter_by" id="everyone" search-type="by_staff">
                            <a href="#"><?php echo lang('everyone'); ?></a>
                        </li>
                        <?php } ?>
                        <?php
                                if (count($assign_user) > 0) { ?>
                        <?php foreach ($assign_user as $v_staff) {
                                    ?>
                        <li class="filter_by" id="<?= $v_staff->user_id ?>" search-type="by_staff">
                            <a href="#"><?php echo fullname($v_staff->user_id); ?></a>
                        </li>
                        <?php }
                                    ?>
                        <div class="clearfix"></div>
                        <?php } ?>
                    </ul>
                </li>
                <div class="clearfix"></div>
                <li class="dropdown-submenu pull-left " id="by_category">
                    <a href="#" tabindex="-1"><?php echo lang('by') . ' ' . lang('categories'); ?></a>
                    <ul class="dropdown-menu dropdown-menu-left by_category" style="">
                        <?php
                                if (count($all_customer_group) > 0) { ?>
                        <?php foreach ($all_customer_group as $group) {
                                    ?>
                        <li class="filter_by" id="<?= $group->customer_group_id ?>" search-type="by_category">
                            <a href="#"><?php echo $group->customer_group; ?></a>
                        </li>
                        <?php }
                                    ?>
                        <div class="clearfix"></div>
                        <?php } ?>
                    </ul>
                </li>

            </ul>
        </div>
        <?php } ?>

        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs">
                <li class="<?= $active == 1 ? 'active' : ''; ?>"><a
                        href="<?= base_url('admin/projects') ?>"><?= lang('all') . ' ' . lang($tab) ?></a>
                </li>

                <li class="<?= $active == 2 ? 'active' : ''; ?>"><a
                        href="<?= base_url('admin/projects/create') ?>"><?= lang('new_project') ?></a>
                </li>
                <li><a class="import"
                        href="<?= base_url() ?>admin/projects/import"><?= lang('import') . ' ' . lang('project') ?></a>
                </li>
            </ul>
            <div class="tab-content bg-white">

                <?php
                    $client_project = $this->uri->segment(4);
                    if ($client_project == 'client_project') {
                        $client_id = $this->uri->segment(5);
                    }
                    if (!empty($project_info)) {
                        $projects_id = $project_info->project_id;
                    } else {
                        $projects_id = null;
                    }
                    ?>


<!---START OF FORMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM-->
                <div class="tab-pane <?= $active == 2 ? 'active' : ''; ?>" id="create">
                    <?php echo form_open(base_url('admin/projects/saved_project/' . $projects_id), array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'data-parsley-validate' => '', 'role' => 'form')); ?>
                    <div class="panel-body">



<!--STEPS HEADINGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG-->
<div>
    <div >
  
    <div id="multi-step-form-container">
        <!-- Form Steps / Progress Bar -->
        <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
            <!-- Step 1 -->
            <li class="form-stepper-active text-center form-stepper-list" step="1">
                <a class="mx-2">
                    <span class="form-stepper-circle">
                        <span>1</span>
                    </span>
                    <div class="label">Basic ticket Details</div>
                </a>
            </li>
            <!-- Step 2 -->
            <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                <a class="mx-2">
                    <span class="form-stepper-circle text-muted">
                        <span>2</span>
                    </span>
                    <div class="label text-muted" id="hide-showMulti-Step">Submit ticket details</div>
                </a>
            </li>
            <!-- Step 3 -->
           <!--  <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                <a class="mx-2">
                    <span class="form-stepper-circle text-muted">
                        <span>3</span>
                    </span>
                    <div class="label text-muted">Personal Details</div>
                </a>
            </li> -->
        </ul>

        </div>
        
   

<!--FIRST SECTIONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN-->
                    <section id="step-1" class="form-step">

                        <div class="row" >

<!--CARD 1-->
                       <div class="columnzz mt-3 ">
                       <div class="cardzz">


                           
  
<!--ticket id-->
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('Ticket no') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="<?php
                                                                                        if (!empty($project_info)) {
                                                                                            echo $project_info->project_no;
                                                                                        } else {
                                                                                            if (empty(config_item('projects_number_format'))) {
                                                                                                echo config_item('projects_prefix');
                                                                                            }
                                                                                            echo $this->items_model->generate_projects_number();
                                                                                        }
                                                                                        ?>" name="project_no" readonly>
                                </div>
                            </div>


<!--ticket type-->

                       

                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('Ticket type') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                <select name="ticket_type" id="ticket_type" class="form-control select_box" style="width: 100%"
                                        required="">
                                            <?php
                                            $tbl_ticket_type = $this->db->get('tbl_ticket_type')->result();
                                            if (!empty($tbl_ticket_type)) {
                                                foreach ($tbl_ticket_type as $v_tbl_ticket_type):
                                                    ?>
                                                    <option value="<?= $v_tbl_ticket_type->type_name ?>" ><?= ($v_tbl_ticket_type->type_name) ?></option>
                                                <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                   
                                </div>
                            </div>


                       
                          <script type="text/javascript">
                          $("#ticket_type").change(function() {
                            if ($(this).val() == "Normal ticket") {
                             document.getElementById("hide-showMulti-Step").innerHTML = "Submit Normal ticket details";
                             // $('#savebutton1').show();
                              //$('#savebutton2').hide();
                             $('#nextbutton').hide();
                            } else if ($(this).val() == "CCTV image request ticket") {
                             document.getElementById("hide-showMulti-Step").innerHTML = "Submit CCTV image request ticket details";
                            }else if ($(this).val() == "System change request ticket") {
                             document.getElementById("hide-showMulti-Step").innerHTML = "Submit System change request ticket details";
                            }else if ($(this).val() == "Incident management ticket") {
                             document.getElementById("hide-showMulti-Step").innerHTML = "Submit Incident management ticket details";
                            }else{
                              //$('#savebutton2').show();
                             $('#nextbutton').show();  
                            }
                            });
                            $("#ticket_type").trigger("change");
                            </script>  

<!-- 1111111111111111111  system access ticket supervisor-->
                       

                            <div class="form-group" id="otherFieldDiv2">
                                <label class="col-lg-3 control-label"><?= lang('Approval Supervisor') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="approval_supervisor" class="form-control select_box" style="width: 100%"
                                        id="otherFiel1">
                                            <?php
                                            $tbl_account_details = $this->db->get('tbl_account_details')->result();
                                            if (!empty($tbl_account_details)) {
                                                foreach ($tbl_account_details as $v_tbl_account_details):
                                                    ?>
                                                    <option value="<?= $v_tbl_account_details->user_id ?>" ><?= ($v_tbl_account_details->fullname) ?></option>
                                                <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                   
                                </div>


                            </div>

<!--supervisor system accesss--->
                            <div class="form-group" id="sat_otherFieldDiv2">
                                <label class="col-lg-3 control-label"><?= lang('Approval Supervisor') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="sat_approval_supervisor" class="form-control select_box" style="width: 100%"
                                        id="sat_otherFiel1">
                                            <?php
                                            $tbl_account_details = $this->db->get('tbl_account_details')->result();
                                            if (!empty($tbl_account_details)) {
                                                foreach ($tbl_account_details as $v_tbl_account_details):
                                                    ?>
                                                    <option value="<?= $v_tbl_account_details->user_id ?>" ><?= ($v_tbl_account_details->fullname) ?></option>
                                                <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                   
                                </div>


                            </div>


<!--ticket name-->
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('project_name') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="<?php
                                                                                        if (!empty($project_info)) {
                                                                                            echo $project_info->project_name;
                                                                                        }
                                                                                        ?>" name="project_name"
                                        required=""  placeholder='e.g Password Reset/Windows unlock e.t.c'>
                                </div>
                            </div>

<!--ticket priority-->

                        <?php   if ($current_userid==3) { ?>

                        <input name="priority" value="Medium" type="hidden">

                       
                        <? }else{?>

                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('priority') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                    <div class=" ">
                                        <select name="priority" class="form-control">
                                            <?php
                                            $priorities = $this->db->get('tbl_priority')->result();
                                            if (!empty($priorities)) {
                                                foreach ($priorities as $v_priorities):
                                                    ?>
                                                    <option value="<?= $v_priorities->priority ?>" <?php
                                                    if (!empty($tickets_info) && $tickets_info->priority == $v_priorities->priority || config_item('default_priority') == $v_priorities->priority) {
                                                        echo 'selected';
                                                    }
                                                    ?>><?= ($v_priorities->priority) ?></option>
                                                <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        <? } ?>



<!--ticket category--> 
                <?php if ($current_userid==3) {?>
                
                <? }else { ?>                      
                            <div class="form-group" >
                                <label
                                    class="col-sm-3 control-label"><?= lang('select') . ' ' . lang('SLA') ?></label>
                                <div class="col-sm-8">
                                    <div class="input-group">

                                        

                                    <select name="category_id" class="form-control select_box" style="width: 100%" >
                                             <?php

                                    if ($current_userid==3) {
                                        //echo '<option value="OPEN" readonly>OPEN</option>';
                                    }else{
                                      $add_sla = $this->db->get('tbl_sla')->result();
                                         if (!empty($add_sla)) {
                                         foreach ($add_sla as $v_add_sla):
                                                ?>
                                                <option value="<?= $v_add_sla->sla_id ?>" maxlength="2"><?= ($v_add_sla->sla_item) ?></option>
                                            <?php
                                        endforeach;
                                        }
                                    }
                                    ?>
                                        </select>

                                         <div class="input-group-addon"
                                            title="<?= lang('new') . ' ' . lang('SLA') ?>" data-toggle="tooltip"
                                            data-placement="top">
                                            <a data-toggle="modal" data-target="#myModalZZZZZZZZZZZZZZZ"
                                                href="<?= base_url() ?>admin/projects/new_category"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                       
                                        


                                        <!-- <select name="category_id" class="form-control select_box" style="width: 100%">
                                            <?php
                                                if (!empty($all_customer_group)) {
                                                    foreach ($all_customer_group as $customer_group) : ?>
                                            <option value="<?= $customer_group->customer_group_id ?>"
                                                <?php
                                                                                                                    if (!empty($project_info->category_id) && $project_info->category_id == $customer_group->customer_group_id) {
                                                                                                                        echo 'selected';
                                                                                                                    } ?>>
                                                <?= $customer_group->customer_group; ?></option>
                                            <?php endforeach;
                                                }
                                                $created = can_action('125', 'created');
                                                ?>
                                        </select>
                                        <?php if (!empty($created)) { ?>
                                        <div class="input-group-addon"
                                            title="<?= lang('new') . ' ' . lang('categories') ?>" data-toggle="tooltip"
                                            data-placement="top">
                                            <a data-toggle="modal" data-target="#myModal"
                                                href="<?= base_url() ?>admin/projects/new_category"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                        <?php } ?> -->
                                    </div>
                                </div>
                            </div>

                   <? } ?>

<!--client-->
<!--client-->

                <input type="hidden" name="client_id" value="1">
                           <!-- <div class="form-group" id="myDIVz">
                                <label class="col-lg-3 control-label"><?= lang('select_client') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <select name="client_id" class="form-control select_box" style="width: 100%"
                                            required="">
                                            <option value=""><?= lang('select_client') ?></option>
                                            <?php
                                                $all_client = $this->db->get('tbl_client')->result();
                                                if (!empty($all_client)) {
                                                    foreach ($all_client as $v_client) {
                                                ?>
                                            <option value="<?= $v_client->client_id ?>" <?php
                                                                                                    if (!empty($project_info) && $project_info->client_id == $v_client->client_id) {
                                                                                                        echo 'selected';
                                                                                                    } else if (!empty($client_id) && $client_id == $v_client->client_id) {
                                                                                                        echo 'selected';
                                                                                                    }
                                                                                                    ?>>
                                                <?= $v_client->name ?></option>
                                            <?php
                                                    }
                                                }
                                                $acreated = can_action('4', 'created');
                                                ?>
                                        </select>
                                        <?php if (!empty($acreated)) { ?>
                                        <div class="input-group-addon" title="<?= lang('new') . ' ' . lang('client') ?>"
                                            data-toggle="tooltip" data-placement="top">
                                            <a data-toggle="modal" data-target="#myModal"
                                                href="<?= base_url() ?>admin/client/new_client"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div> 


                            <script>
                            myFunctionz()
                            function myFunctionz() {
                            var x = document.getElementById("myDIVz");
                            if (x.style.display === "none") {
                            x.style.display = "block";
                            } else {
                            x.style.display = "none";
                            }
                            }
                            </script>-->






                            <script src="<?= base_url() ?>assets/js/jquery-ui.js"></script>
                            <?php $direction = $this->session->userdata('direction');
                                if (!empty($direction) && $direction == 'rtl') {
                                    $RTL = 'on';
                                } else {
                                    $RTL = config_item('RTL');
                                }
                                ?>
                            <?php
                                if (!empty($RTL)) { ?>
                            <!-- bootstrap-editable -->
                            <script type="text/javascript"
                                src="<?= base_url() ?>assets/plugins/jquery-ui/jquery.ui.slider-rtl.js">
                            </script>
                            <?php }
                                ?>
                            <style>
                            .ui-widget.ui-widget-content {
                                border: 1px solid #dde6e9;
                            }

                            .ui-corner-all,
                            .ui-corner-bottom,
                            .ui-corner-left,
                            .ui-corner-bl {
                                border: 7px solid #28a9f1;
                            }

                            .ui-widget-content {
                                border: 1px solid #dddddd;
                                /*background: #E1E4E9;*/
                                color: #333333;
                            }

                            .ui-slider {
                                position: relative;
                                text-align: left;
                            }

                            .ui-slider-horizontal {
                                height: 1em;
                            }

                            .ui-state-default,
                            .ui-widget-content .ui-state-default,
                            .ui-widget-header .ui-state-default,
                            .ui-button,
                            html .ui-button.ui-state-disabled:hover,
                            html .ui-button.ui-state-disabled:active {
                                border: 1px solid #1797be;
                                background: #1797be;
                                font-weight: normal;
                                color: #454545;
                            }

                            .ui-slider-horizontal .ui-slider-handle {
                                top: -.3em;
                                margin-left: -.1em;
                                ;
                                margin-right: -.1em;
                                ;
                            }

                            .ui-slider .ui-slider-handle:hover {
                                background: #1797be;
                            }

                            .ui-slider .ui-slider-handle {
                                position: absolute;
                                z-index: 2;
                                width: 1.2em;
                                ;
                                height: 1.5em;
                                cursor: default;
                                -ms-touch-action: none;
                                touch-action: none;

                            }

                            .ui-state-disabled,
                            .ui-widget-content .ui-state-disabled,
                            .ui-widget-header .ui-state-disabled {
                                opacity: .35;
                                filter: Alpha(Opacity=35);
                                background-image: none;
                            }

                            .ui-state-disabled {
                                cursor: default !important;
                                pointer-events: none;
                            }

                            .ui-slider.ui-state-disabled .ui-slider-handle,
                            .ui-slider.ui-state-disabled .ui-slider-range {
                                filter: inherit;
                            }

                            .ui-slider-range,
                            .ui-widget-header,
                            .ui-slider-handle:before,
                            .list-group-item.active,
                            .list-group-item.active:hover,
                            .list-group-item.active:focus,
                            .icon-frame {
                                background-image: none;
                                background: #28a9f1;
                            }
                            </style>

                        <div id="myDIV">
                            <?php
                                if (!empty($project_info)) {
                                    $value = $this->items_model->get_project_progress($project_info->project_id);
                                } else {
                                    $value = 0;
                                }
                                ?>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?php echo lang('progress'); ?> </label>
                                <div class="col-lg-8">
                                    <?php echo form_hidden('progress', $value); ?>
                                    <div class="project_progress_slider project_progress_slider_horizontal mbot15">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <div class="">
                                                <div class="pull-left mt">
                                                    <?php echo lang('progress'); ?>
                                                    <span class="label_progress "><?php echo $value; ?>%</span>
                                                </div>
                                                <div class="checkbox c-checkbox pull-right" data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="<?php echo lang('calculate_progress_through_tasks'); ?>">
                                                    <label class="needsclick">
                                                        <input class="select_one" type="checkbox" <?php if ((!empty($project_info) && $project_info->calculate_progress == 'through_tasks')) {
                                                                                                            echo 'checked';
                                                                                                        } ?>
                                                            name="calculate_progress" value="through_tasks"
                                                            id="progress_from_tasks">
                                                        <span class="fa fa-check"></span>
                                                        <small><?php echo lang('through_tasks'); ?></small>
                                                    </label>
                                                </div>
                                                <div class="checkbox c-checkbox pull-right" data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="<?php echo lang('calculate_progress_through_project_hours'); ?>">
                                                    <label class="needsclick">
                                                        <input class="select_one" type="checkbox" <?php if ((!empty($project_info) && $project_info->calculate_progress == 'through_project_hours')) {
                                                                                                            echo 'checked';
                                                                                                        } ?>
                                                            name="calculate_progress" value="through_project_hours"
                                                            id="through_project_hours">
                                                        <span class="fa fa-check"></span>
                                                        <small><?php echo lang('through_project_hours'); ?></small>
                                                    </label>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                            <script>
                            $(document).ready(function() {
                                var progress_input = $('input[name="progress"]');
                                <?php if ((!empty($project_info) && $project_info->calculate_progress == 'through_project_hours')) { ?>
                                var progress_from_tasks = $('#through_project_hours');
                                <?php } elseif ((!empty($project_info) && $project_info->calculate_progress == 'through_tasks')) { ?>
                                var progress_from_tasks = $('#progress_from_tasks');
                                <?php } else { ?>
                                var progress_from_tasks = $('.select_one');
                                <?php } ?>

                                var progress = progress_input.val();
                                $('.project_progress_slider').slider({
                                    range: "min",
                                    <?php
                                            if (!empty($RTL)) { ?>
                                    isRTL: true,
                                    <?php }
                                            ?>
                                    min: 0,
                                    max: 100,
                                    value: progress,
                                    disabled: progress_from_tasks.prop('checked'),
                                    slide: function(event, ui) {
                                        progress_input.val(ui.value);
                                        $('.label_progress').html(ui.value + '%');
                                    }
                                });
                                progress_from_tasks.on('change', function() {
                                    var _checked = $(this).prop('checked');
                                    $('.project_progress_slider').slider({
                                        disabled: _checked,
                                    });
                                });
                            });
                            </script>

                            <script>
                            myFunction()
                            function myFunction() {
                            var x = document.getElementById("myDIV");
                            if (x.style.display === "none") {
                            x.style.display = "block";
                            } else {
                            x.style.display = "none";
                            }
                            }
                            </script>




                            <!--start and end date-->

                            <div id="myDIVzD">

                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('start_date') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input  type="text" name="start_date" class="form-control start_date"
                                           value="0">

                                           <!--  value="<?php
                                                                                                                                    if (!empty($project_info->start_date)) {
                                                                                                                                        echo date('Y-m-d', strtotime($project_info->start_date));
                                                                                                                                    }
                                                                                                                                    ?>" 
                                            data-date-format="<?= config_item('date_picker_format'); ?>"-->
                                        <div class="input-group-addon">
                                            <a href="#"><i class="fa fa-calendar"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('end_date') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input  type="text" name="end_date" class="form-control end_date"
                                           value="0">

                                            <!-- value="<?php
                                                                                                                                if (!empty($project_info->end_date)) {
                                                                                                                                    echo date('Y-m-d', strtotime($project_info->end_date));
                                                                                                                                }
                                                                                                                                ?>"
                                            data-date-format="<?= config_item('date_picker_format'); ?>" -->
                                        <div class="input-group-addon">
                                            <a href="#"><i class="fa fa-calendar"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                              <script>
                           myFunctionzD()
                            function myFunctionzD() {
                            var x = document.getElementById("myDIVzD");
                            if (x.style.display === "none") {
                            x.style.display = "block";
                            } else {
                            x.style.display = "none";
                            }
                            }
                            </script>









                            <!--billing here-->
                            <div class="form-group"  id="myDIVzB">
                                <label class="col-lg-3 control-label"><?= lang('billing_type') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <select name="billing_type" onchange="get_billing_value(this.value)"
                                        class="form-control select_box" style="width: 100%" required="">
                                        <option <?php
                                                    if (!empty($project_info->billing_type)) {
                                                        echo $project_info->billing_type == 'fixed_rate' ? 'selected' : null;
                                                    } ?> value="fixed_rate"><?= lang('fixed_rate') ?></option>
                                        <option <?php
                                                    if (!empty($project_info->billing_type)) {
                                                        echo $project_info->billing_type == 'project_hours' ? 'selected' : null;
                                                    } ?> value="project_hours">
                                            <?= lang('only') . ' ' . lang('project_hours') ?>
                                        </option>
                                        <option <?php
                                                    if (!empty($project_info->billing_type)) {
                                                        echo $project_info->billing_type == 'tasks_hours' ? 'selected' : null;
                                                    } ?> value="tasks_hours">
                                            <?= lang('only') . ' ' . lang('tasks_hours') ?></option>
                                        <option <?php
                                                    if (!empty($project_info->billing_type)) {
                                                        echo $project_info->billing_type == 'tasks_and_project_hours' ? 'selected' : null;
                                                    } ?> value="tasks_and_project_hours">
                                            <?= lang('tasks_and_project_hours') ?>
                                        </option>
                                    </select>
                                    <small class="based_on_tasks_hour"
                                        <?php
                                                                            if (!empty($project_info) && $project_info->billing_type == 'tasks_hours' || !empty($project_info) && $project_info->billing_type == 'tasks_and_project_hours') {
                                                                                echo 'style="display: block;"';
                                                                            } else {
                                                                                echo 'style="display: none;"';
                                                                            } ?>><?php echo lang('based_on_hourly_rate') ?></small>
                                </div>
                            </div>
                            <div class="form-group fixed_rate " <?php
                                                                    if (!empty($project_info) && $project_info->billing_type == 'fixed_rate') {
                                                                        echo 'style="display: block;"';
                                                                    } elseif (!empty($project_info) && $project_info->billing_type != 'fixed_rate') {
                                                                        echo 'style="display: none;"';
                                                                    }
                                                                    ?>>
                                <!--<label class="col-lg-3 control-label"><?= lang('fixed_price') ?></label>-->
                                <div class="col-lg-8">
                                    <input data-parsley-type="number" type="hidden" class="form-control fixed_rate"
                                        value="<?php
                                                                                                                                if (!empty($project_info->project_cost)) {
                                                                                                                                    echo $project_info->project_cost;
                                                                                                                                }
                                                                                                                                ?>" placeholder="50" name="project_cost">
                                </div>
                            </div>

                            <div class="form-group hourly_rate " <?php
                                                                        if (!empty($project_info) && $project_info->billing_type == 'project_hours' || !empty($project_info) && $project_info->billing_type == 'tasks_and_project_hours') {
                                                                            echo 'style="display: block;"';
                                                                        } elseif (!empty($project_info) && $project_info->billing_type == 'fixed_rate' || !empty($project_info) && $project_info->billing_type == 'tasks_hours') {
                                                                            echo 'style="display: none;"';
                                                                        }
                                                                        ?>>
                                <!--<label class="col-lg-3 control-label"><?= lang('project_hourly_rate') ?></label>-->
                                <div class="col-lg-8">
                                    <input data-parsley-type="number" type="hidden" class="form-control hourly_rate"
                                        value="<?php
                                                                                                                                if (!empty($project_info->hourly_rate)) {
                                                                                                                                    echo $project_info->hourly_rate;
                                                                                                                                }
                                                                                                                                ?>"
                                        placeholder="50" name="hourly_rate">
                                </div>
                            </div>


                            <div class="form-group">
                                <!--<label class="col-lg-3 control-label"><?= lang('estimate_hours') ?></label>-->
                                <div class="col-lg-8">
                                    <input type="hidden" step="0.01" value="<?php
                                                                                if (!empty($project_info->estimate_hours)) {
                                                                                    $result = explode(':', $project_info->estimate_hours);
                                                                                    echo $result[0] . '.' . $result[1];
                                                                                }
                                                                                ?>" class="form-control"
                                        name="estimate_hours">
                                </div>
                            </div>

                    


                             <script>
                           myFunctionzB()
                            function myFunctionzB() {
                            var x = document.getElementById("myDIVzB");
                            if (x.style.display === "none") {
                            x.style.display = "block";
                            } else {
                            x.style.display = "none";
                            }
                            }
                            </script>







                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('status') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <select name="project_status" class="form-control select_box" style="width: 100%"
                                        required="">
                                       <!--  <option <?php
                                                    if (!empty($project_info->project_status)) {
                                                        echo $project_info->project_status == 'started' ? 'selected' : null;
                                                    } ?> value="started"><?= lang('started') ?></option>
                                        <option <?php
                                                    if (!empty($project_info->project_status)) {
                                                        echo $project_info->project_status == 'in_progress' ? 'selected' : null;
                                                    } ?> value="in_progress"><?= lang('in_progress') ?></option>
                                        <option <?php
                                                    if (!empty($project_info->project_status)) {
                                                        echo $project_info->project_status == 'on_hold' ? 'selected' : null;
                                                    } ?> value="on_hold"><?= lang('on_hold') ?></option>
                                        <option <?php
                                                    if (!empty($project_info->project_status)) {
                                                        echo $project_info->project_status == 'cancel' ? 'selected' : null;
                                                    } ?> value="cancel"><?= lang('cancel') ?></option>
                                        <option <?php
                                                    if (!empty($project_info->project_status)) {
                                                        echo $project_info->project_status == 'completed' ? 'selected' : null;
                                                    } ?> value="completed"><?= lang('completed') ?></option> -->
                                   

                                    <?php

                                    if ($current_userid==3) {
                                        echo '<option value="OPEN" readonly>OPEN</option>';
                                    }else{
                                      $project_status = $this->db->get('tbl_status')->result();
                                         if (!empty($project_status)) {
                                         foreach ($project_status as $v_project_status):
                                                ?>
                                                <option value="<?= $v_project_status->status ?>" ><?= ($v_project_status->status) ?></option>
                                            <?php
                                        endforeach;
                                        }
                                    }
                                    ?>
                                    </select>


                                     
                                </div>

                               
                            </div>
                        
                        <div id="myDIVzDT">  
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('demo_url') ?></label>
                                <div class="col-lg-8">
                                    <input type="text" value="<?php
                                                                    if (!empty($project_info->demo_url)) {
                                                                        echo $project_info->demo_url;
                                                                    }
                                                                    ?>" class="form-control"
                                        placeholder="http://www.demourl.com" name="demo_url">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('tags') ?></label>
                                <div class="col-lg-7">
                                    <input type="text" name="tags" data-role="tagsinput" class="form-control"
                                        value="<?php
                                                                                                                            if (!empty($project_info->tags)) {
                                                                                                                                echo $project_info->tags;
                                                                                                                            }
                                                                                                                            ?>">
                                </div>
                            </div>

                        </div>


                             <script>
                           myFunctionzDT()
                            function myFunctionzDT() {
                            var x = document.getElementById("myDIVzDT");
                            if (x.style.display === "none") {
                            x.style.display = "block";
                            } else {
                            x.style.display = "none";
                            }
                            }
                            </script>

                    </div>
                </div>



<!--END OF CARD 1-->




<!--CARD 2BBBBBBBBBBBBBBBBBBBBBBBBBBBBBB-->

    <div class="columnzz" id="myDIVASSN">
    <div class="cardzz">

   <div  >
                            <?php
                                if (!empty($project_info)) {
                                    $project_id = $project_info->project_id;
                                } else {
                                    $project_id = null;
                                }
                                ?>
                            <?= custom_form_Fields(4, $project_id); ?>

                            <?php
                                $permissionL = null;
                                if (!empty($project_info->permission)) {
                                    $permissionL = $project_info->permission;
                                }
                                ?>

                            <?= get_permission(3, 8, $assign_user, $permissionL, lang('assined_to')); ?>

                        </div>


                        
                            
                        </div>



 
<!--permissions-->


                        <div class="col-sm-5" id="myDIVzP">
                            <!-- checkbox -->
                            <?php
                                $project_permissions = $this->db->get('tbl_project_settings')->result();
                                if (!empty($project_info->project_settings)) {
                                    $current_permissions = $project_info->project_settings;
                                    if ($current_permissions == NULL) {
                                        $current_permissions = '{"settings":"on"}';
                                    }
                                    $get_permissions = json_decode($current_permissions);
                                }

                                foreach ($project_permissions as $v_permissions) {
                                ?>
                            <div class="checkbox c-checkbox">
                                <label class="needsclick">
                                    <input name="<?= $v_permissions->settings_id ?>"
                                        value="<?= $v_permissions->settings ?>"
                                        <?php
                                                                                                                                        if (!empty($project_info->project_settings)) {
                                                                                                                                            if (in_array($v_permissions->settings, $get_permissions)) {
                                                                                                                                                echo "checked=\"checked\"";
                                                                                                                                            }
                                                                                                                                        } else {
                                                                                                                                            echo "checked=\"checked\"";
                                                                                                                                        }
                                                                                                                                        ?> type="checkbox">
                                    <span class="fa fa-check"></span>
                                    <?= lang($v_permissions->settings) ?>
                                </label>
                            </div>
                            <hr class="mt-sm mb-sm" />
                            <?php } ?>
                        </div>


                        <script type="text/javascript">
                            myFunctionzP()
                            function myFunctionzP() {
                            var x = document.getElementById("myDIVzP");
                            if (x.style.display === "none") {
                            x.style.display = "block";
                            } else {
                            x.style.display = "none";
                            }
                            }

                           
                            </script>


                     





</div>
</div>


<script>

 
                           
                            function myFunctionASSN() {
                            var xASSN = document.getElementById("myDIVASSN");
                            if (xASSN.style.display === "none") {
                            xASSN.style.display = "block";
                            } else {
                            xASSN.style.display = "none";
                            }
                            }
                            
</script>

<?php 
if ($current_userid==staff() or $current_userid==admin()) { ?>
 
 <script>
  myFunctionASSN();  
 </script>

<? }else{
//echo 'zogooooooo';
}



?>



<!--END OF CARD 2-->






<!--CARD 3 DESCRIPTION-->


<div class="columnzz">
    <div class="cardzz">


                        <div class="col-sm-121">
                            <div class="form-group">
                                <label style="float: left" 
                            ><?= lang('description') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-10">

                                    <textarea style="" name="description" class="form-control textarea_"
                                        placeholder="<?= lang('description') ?>"><?php
                                                                                                                                                        if (!empty($project_info->description)) {
                                                                                                                                                            echo $project_info->description;
                                                                                                                                                        }
                                                                                                                                                        ?></textarea>
                                </div>
                            </div>


        </div>
    </div>
    <!--END OF CARD 3-->

     <div class="mt-3">
                    <button class="button btn-navigate-form-step buttonz" type="button" step_number="2" id="nextbutton">Next</button>
                    <button type="submit" class="btn btn-sm btn-primary button submit-btn buttonz" id="savebutton1"><?= lang('save') ?></button>

                     <!--SAVE BUTTON HEREEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE-->
                          
                </div>
                </div>

    </section>


<!--SECOND SECTIONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN-->

<section id="step-2" class="form-step d-none">

<!--THIS IS FOR SYSTEM ACCESS TICKETS -->
<?php  $this->load->view('admin/projects/form_system_access_tickets'); //page load?>
<!--END OF SYSTEM ACCESS TICKETSSSS-->

<!--THIS IS FOR SECURITY ACCESS TICKETS -->
<?php  $this->load->view('admin/projects/form_security_access_control'); //page load?>
<!--THIS IS FOR SECURITY ACCESS TICKETS-->

  <div class="mt-3">
                    <button class="button btn-navigate-form-step buttonz" type="button" step_number="1">Prev</button>
                    <!-- <button class="button btn-navigate-form-step buttonz" type="button" step_number="3">Next</button> -->
                    <!--SAVE BUTTON HEREEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE-->
                            <div class="btn-bottom-toolbar text-right"  id="savebutton2">
                                <?php
                                    if (!empty($project_info)) { ?>
                                <button type="submit" class="btn btn-sm btn-primary"><?= lang('updates') ?></button>
                                <button type="button" onclick="goBack()"
                                    class="btn btn-sm btn-danger"><?= lang('cancel') ?></button>
                                <?php } else {
                                    ?>
                                <button type="submit" class="btn btn-sm btn-primary button submit-btn buttonz"><?= lang('save') ?></button>
                                <?php }
                                    ?>
                            </div>
                        </div>


                    </div>
                    <?php echo form_close(); ?>
                </div>
                <?php } else { ?>
            </div>
  
          <?php } ?>
                </div>

</section>


 <!-- Step 3 Content, default hidden on page load. -->
            <!-- <section id="step-3" class="form-step d-none">
                <h2 class="font-normal">Personal Details</h2> -->
                <!-- Step 3 input fields -->
              <!--   <div class="mt-3">
                    Step 3 input fields goes here..
                </div>
                <div class="mt-3">
                    <button class="button btn-navigate-form-step buttonz" type="button" step_number="2">Prev</button> -->
                   <!--  <button class="button submit-btn buttonz" type="submit">Save</button> -->

                     

                <!-- </div>
            </section> -->


   
          <!--BUTTONS FOR THE STEPS FORMMMMMMMMMMMMMMMMM-->

</div>
</div>

<!--STEPS JSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS-->
<!--script-->

<script type="text/javascript">

stepsformcontrol();

function stepsformcontrol(){
    /**
 * Define a function to navigate betweens form steps.
 * It accepts one parameter. That is - step number.
 */
const navigateToFormStep = (stepNumber) => {
    /**
     * Hide all form steps.
     */
    document.querySelectorAll(".form-step").forEach((formStepElement) => {
        formStepElement.classList.add("d-none");
    });
    /**
     * Mark all form steps as unfinished.
     */
    document.querySelectorAll(".form-stepper-list").forEach((formStepHeader) => {
        formStepHeader.classList.add("form-stepper-unfinished");
        formStepHeader.classList.remove("form-stepper-active", "form-stepper-completed");
    });
    /**
     * Show the current form step (as passed to the function).
     */
    document.querySelector("#step-" + stepNumber).classList.remove("d-none");
    /**
     * Select the form step circle (progress bar).
     */
    const formStepCircle = document.querySelector('li[step="' + stepNumber + '"]');
    /**
     * Mark the current form step as active.
     */
    formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
    formStepCircle.classList.add("form-stepper-active");
    /**
     * Loop through each form step circles.
     * This loop will continue up to the current step number.
     * Example: If the current step is 3,
     * then the loop will perform operations for step 1 and 2.
     */
    for (let index = 0; index < stepNumber; index++) {
        /**
         * Select the form step circle (progress bar).
         */
        const formStepCircle = document.querySelector('li[step="' + index + '"]');
        /**
         * Check if the element exist. If yes, then proceed.
         */
        if (formStepCircle) {
            /**
             * Mark the form step as completed.
             */
            formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-active");
            formStepCircle.classList.add("form-stepper-completed");
        }
    }
};
/**
 * Select all form navigation buttons, and loop through them.
 */
document.querySelectorAll(".btn-navigate-form-step").forEach((formNavigationBtn) => {
    /**
     * Add a click event listener to the button.
     */
    formNavigationBtn.addEventListener("click", () => {
        /**
         * Get the value of the step.
         */
        const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));
        /**
         * Call the function to navigate to the target form step.
         */
        navigateToFormStep(stepNumber);
    });
});

}
</script>