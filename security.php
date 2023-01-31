<!--CARD 2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->
<div class="columnzz" id="zogoSECURITYDiv" >
<div class="cardzz">


<!--  security access control ticket -->


<!-- 111111111111111111111111111111111111111111111111111111111111 -->

<div style="background-color: #000090; width: cover; height: 20px; padding-left:10px; margin-bottom: 10px; color: white; left: 50%;">
    <h4>ACCESS CONTROL USER REQUEST FORM/PROFILE FORM</h4>
</div>

           <!--sac Rights Timeframe-->
    <div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('Rights Timeframe') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="sac_Rights_Timeframe" id="sac_Rights_Timeframe" class="form-control select_box " style="width: 100%"
                                     >
                                           
                                                    <option value="Temporary" >Temporary</option>
                                                    <option value="Permanent" >Permanent</option>
                                                    
                                                    
                                        </select>
                                   
                                </div>
                            </div>


                              <!--If Temporary state time in hours-->
                            <div class="form-group" id="sac_TemporaryDIV">
                                <label class="col-lg-3 control-label"><?= lang('Time') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="" name="sac_Rights_Timeframe_time"  placeholder='time in hours' id="sac_Rights_Timeframe_time">
                                </div>
                            </div>


    <!--JS -------->
                         <script type="text/javascript">
                          $("#sac_Rights_Timeframe").change(function() {
                            if ($(this).val() == "Temporary") {
                            $('#sac_TemporaryDIV').show();
                            
                            $('#sac_Rights_Timeframe_time').attr('required', '');
                            $('#sac_Rights_Timeframe_time').attr('data-error', 'This field is required.');
                            } else {
                            $('#sac_TemporaryDIV').hide();
                            
                            $('#sac_Rights_Timeframe_time').removeAttr('required');
                            $('#sac_Rights_Timeframe_time').removeAttr('data-error');
                            }
                            });
                            $("#sac_Rights_Timeframe").trigger("change");



                      </script>  


    <!--END OF JS-->



<!-- existing system access rights-->
<div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('Existing access rights') ?> <span
                                        class="text-danger"></span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="" name="Existing_access_rights"  id="Existing_access_rights"  placeholder='Existing access rights (if any)'>
                                </div>
                            </div>


<!--Requested action-->

<div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('Requested action') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="sac_Requested_action[]" id="sac_Requested_action" class="form-control select_box select2" style="width: 100%"
                                       multiple="multiple" >
                                           
                                                    <option value="New user" >New user</option>
                                                    <option value="Existing user" >Existing user</option>
                                                    <option value="Reset user rights" >Reset user rights</option>
                                                    
                                               
                                        </select>
                                   
                                </div>
                            </div>


<!--Branch-->
                <div class="form-group" id="BranchDiv2">
                                <label class="col-lg-3 control-label"><?= lang('Branch') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="Branch_sac" class="form-control select_box" style="width: 100%"
                                        id="Branch_sac" multiple="multiple" >
                                            <?php
                                            $tbl_branches = $this->db->get('tbl_branches')->result();
                                            if (!empty($tbl_branches)) {
                                                foreach ($tbl_branches as $v_tbl_branches):
                                                    ?>
                                                    <option value="<?= $v_tbl_branches->branch_name ?>" ><?= ($v_tbl_branches->branch_name) ?></option>
                                                <?php
                                                endforeach;
                                            }
                                            ?>
                                        </select>
                                   
                                </div>


                            </div>



<!--access rights-->
<div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('Access rights') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="sac_Access_rights[]" id="sac_Access_rights" class="form-control select_box select2" style="width: 100%"
                                       multiple="multiple" >
                                           
                                                    <option value="Back office" >Back office</option>
                                                    <option value="Server(s)" >Server(s)</option>
                                                    <option value="Vault" >Vault</option>
                                                    <option value="DRC" >DRC</option>
                                                    <option value="IT office" >IT office</option>
                                                    <option value="South C Main Door" >South C Main Door</option>
                                                    <option value="Cash Center" >Cash Center</option>
                                                    <option value="Registry" >Registry</option>
                                                    <option value="Reception(s)" >Reception(s)</option>
                                                    <option value="Back Office IT" >Back Office IT</option>
                                                    
                                               
                                        </select>
                                   
                                </div>
                            </div>


<!--
 sac_Rights_Timeframe
sac_Rights_Timeframe_time
Existing_access_rights
sac_Requested_action
Branch_sac
sac_Access_rights
 -->

                              





</div>
</div>


 
                     <script type="text/javascript">
                          $("#ticket_type").change(function() {
                            if ($(this).val() == "Security access control ticket") {
                           
                            $('#zogoSECURITYDiv').show();

                             $('#otherFieldDiv2').show();

                             document.getElementById("hide-showMulti-Step").innerHTML = "Security access control details";
                            
                            $('#otherFiel1').attr('required', '');
                            $('#otherFiel1').attr('data-error', 'This field is required.');
                            
                            //required 
                            //1
                             $('#sac_Rights_Timeframe').attr('required', '');
                             $('#sac_Rights_Timeframe').attr('data-error', 'This field is required.');
                            // //2
                             $('#sac_Requested_action').attr('required', '');
                             $('#sac_Requested_action').attr('data-error', 'This field is required.');

                              // //3
                             $('#Branch_sac').attr('required', '');
                             $('#Branch_sac').attr('data-error', 'This field is required.');

                             // //4
                             $('#sac_Access_rights').attr('required', '');
                             $('#sac_Access_rights').attr('data-error', 'This field is required.');

                             stepsformcontrol();

                            
                            } else {
                            
                            $('#zogoSECURITYDiv').hide();
                            $('#otherFieldDiv2').hide();
                            
                            $('#otherFiel1').removeAttr('required');
                            $('#otherFiel1').removeAttr('data-error');
                            

                             //required 
                            //1
                             $('#sac_Rights_Timeframe').removeAttr('required');
                             $('#sac_Rights_Timeframe').removeAttr('data-error');
                            // //2
                             $('#sac_Requested_action').removeAttr('required');
                             $('#sac_Requested_action').removeAttr('data-error');

                              // //3
                             $('#Branch_sac').removeAttr('required');
                             $('#Branch_sac').removeAttr('data-error');

                             // //4
                             $('#sac_Access_rights').removeAttr('required');
                             $('#sac_Access_rights').removeAttr('data-error');



                            
                            }
                            });
                            $("#ticket_type").trigger("change");



                      </script>  


