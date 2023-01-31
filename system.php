<!--CARD 2AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA-->
<div class="columnzz" id="zogoDiv" >
<div class="cardzz">


<!--  system access ticket -->


<!-- 111111111111111111111111111111111111111111111111111111111111 -->

<div style="background-color: #000090; width: cover; height: 20px; padding-left:10px; margin-bottom: 10px; color: white; left: 50%;">
    <h4>SYSTEM USER ACCESS & PROFILE FORM</h4>
</div>

           <!--Rights Timeframe-->
    <div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('Rights Timeframe') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="Rights_Timeframe" id="Rights_Timeframe" class="form-control select_box " style="width: 100%"
                                     >
                                           
                                                    <option value="Temporary" >Temporary</option>
                                                    <option value="Permanent" >Permanent</option>
                                                    
                                                    
                                        </select>
                                   
                                </div>
                            </div>


                              <!--If Temporary state time in hours-->
                            <div class="form-group" id="TemporaryDIV">
                                <label class="col-lg-3 control-label"><?= lang('Time') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="" name="Rights_Timeframe_time"  placeholder='time in hours' id="Rights_Timeframe_time">
                                </div>
                            </div>


    <!--JS -------->
                         <script type="text/javascript">
                          $("#Rights_Timeframe").change(function() {
                            if ($(this).val() == "Temporary") {
                            $('#TemporaryDIV').show();
                            
                            $('#Rights_Timeframe_time').attr('required', '');
                            $('#Rights_Timeframe_time').attr('data-error', 'This field is required.');
                            } else {
                            $('#TemporaryDIV').hide();
                            
                            $('#Rights_Timeframe_time').removeAttr('required');
                            $('#Rights_Timeframe_time').removeAttr('data-error');
                            }
                            });
                            $("#Rights_Timeframe").trigger("change");



                      </script>  


    <!--END OF JS-->


<div style="background-color: #000090; width: cover; height: 20px; padding-left:10px; margin-bottom: 10px; color: white;">
    <h5>Existing system access</h5>
</div>


<!-- existing system access-->
<div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('Existing system access') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="existing_system_access[]" id="existing_system_access" class="form-control select_box select2" style="width: 100%"
                                       multiple="multiple" >
                                           
                                                    <option value="Domain" >Domain</option>
                                                    <option value="Oracle (iMAL)" >Oracle (iMAL)</option>
                                                    <option value="Telephone Number Assignment" >Telephone Number Assignment</option>
                                                    <option value="iMAL" >iMAL</option>
                                                    <option value="MS-SQL (MIPS)" >MS-SQL (MIPS)</option>
                                                    
                                                    <option value="Internet" >Internet</option>
                                                    <option value="MIPS" >MIPS</option>
                                                    <option value="Email" >Email</option>
                                                    <option value="HR System" >HR System</option>
                                                    
                                                    <option value="Not applicable" >Not applicable</option>
                                                    <option value="Other" >Other</option>
                                               
                                        </select>
                                   
                                </div>
                            </div>



<!-- generic role at present-->

<div style="background-color: #5F9EA0; width: 20%; height: 20px; padding-left:10px; margin-bottom: 10px; color: white; font-style: italic;">
    <h5>Generic role at present</h5>
</div>
<div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('Generic role at present') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="generic_role_at_present_existing_system_access[]" id="generic_role_at_present_existing_system_access" class="form-control select_box select2" style="width: 100%"
                                       multiple="multiple" >
                                           
                                                    <option value="Maker/Inputter" >Maker/Inputter</option>
                                                    <option value="Checker/Authoriser" >Checker/Authoriser</option>
                                                    <option value="Administrative" >Administrative</option>
                                                    <option value="N/A" >N/A</option>
                                                    
                                               
                                        </select>
                                   
                                </div>
                            </div>

<div style="background-color: #5F9EA0; width: 20%; height: 20px; padding-left:10px; margin-bottom: 10px; color: white; font-style: italic;">
    <h5>User access credentials</h5>
</div>

<!--user access credentials-->
                            <!--1-->
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('Domain Username') ?> <span
                                        class="text-danger"></span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="" name="Domain_Username"  id="Domain_Username"  placeholder='e.g john doe'>
                                </div>
                            </div>

                            <!--2-->
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('iMAL Username ID') ?> <span
                                        class="text-danger"></span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="" name="iMAL_Username_ID" id="iMAL_Username_ID"  placeholder='e.g john doe'>
                                </div>
                            </div>


                            <!--3-->
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('MIPS Username ID') ?> <span
                                        class="text-danger"></span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="" name="MIPS_Username_ID" id="MIPS_Username_ID"  placeholder='e.g john doe'>
                                </div>
                            </div>

                            <!--4-->
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('iMAL Database Username') ?> <span
                                        class="text-danger"></span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="" name="iMAL_Database_Username" id="iMAL_Database_Username"  placeholder='e.g john doe'>
                                </div>
                            </div>

                            <!--5-->
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('MIPs Database Username') ?> <span
                                        class="text-danger"></span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="" name="MIPs_Database_Username" id="MIPs_Database_Username"  placeholder='e.g john doe'>
                                </div>
                            </div>

                            <!--6-->
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('HR System Username') ?> <span
                                        class="text-danger"></span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="" name="HR_System_Username" id="HR_System_Username"  placeholder='e.g john doe'>
                                </div>
                            </div>



                            
<!-- 22222222222222222222222222222222222222222222222222222222222 -->

<div style="background-color: #000090; width: cover; height: 20px; padding-left:10px; margin-bottom: 10px; color: white;">
    <h5>Requested action</h5>
</div>

<!-- requested action-->
<div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('Requested action') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="Requested_action[]" id="Requested_action" class="form-control select_box select2" style="width: 100%"
                                       multiple="multiple" >
                                           
                                                    <option value="Create New User" >Create New User</option>
                                                    <option value="Delete User" >Delete User</option>
                                                    <option value="Enable User" >Enable User</option>
                                                    <option value="Disable User" >Disable User</option>
                                                    <option value="Change User Rights" >Change User Rights</option>
                                                    
                                                    <option value="Reset Password" >Reset Password</option>
                                                    <option value="Revoke Previous Rights" >Revoke Previous Rights</option>
                                                   
                                               
                                        </select>
                                   
                                </div>
                            </div>



<!-- generic role at present-->

<div style="background-color: #5F9EA0; width: 20%; height: 20px; padding-left:10px; margin-bottom: 10px; color: white; font-style: italic;">
    <h5>Generic role at present</h5>
</div>
<div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('Generic role at present') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="generic_role_at_present_requested_action[]" id="generic_role_at_present_requested_action" class="form-control select_box select2" style="width: 100%"
                                       multiple="multiple" >
                                           
                                                    <option value="Maker/Inputter" >Maker/Inputter</option>
                                                    <option value="Checker/Authoriser" >Checker/Authoriser</option>
                                                    <option value="Administrative" >Administrative</option>
                                                    <option value="N/A" >N/A</option>
                                                    
                                               
                                        </select>
                                   
                                </div>
                            </div>




<!-- 33333333333333333333333333333333333333333333333333333333333 -->

<div style="background-color: #000090; width: cover; height: 20px; padding-left:10px; margin-bottom: 10px; color: white;">
    <h5>Requested system access</h5>
</div>

<!-- requested action-->
<div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('Requested system access') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="Requested_system_access[]" id="Requested_system_access" class="form-control select_box select2" style="width: 100%"
                                       multiple="multiple" >
                                           
                                                     <option value="Domain" >Domain</option>
                                                    <option value="Oracle (iMAL)" >Oracle (iMAL)</option>
                                                    <option value="Telephone Number Assignment" >Telephone Number Assignment</option>
                                                    <option value="iMAL" >iMAL</option>
                                                    <option value="MS-SQL (MIPS)" >MS-SQL (MIPS)</option>
                                                    
                                                    <option value="Internet" >Internet</option>
                                                    <option value="MIPS" >MIPS</option>
                                                    <option value="Email" >Email</option>
                                                    <option value="HR System" >HR System</option>
                                                    
                                                    <option value="Not applicable" >Not applicable</option>
                                                    <option value="Other" >Other</option>
                                                   
                                               
                                        </select>
                                   
                                </div>
                            </div>





<!-- 44444444444444444444444444444444444444444444444444 -->

<div style="background-color: #000090; width: cover; height: 20px; padding-left:10px; margin-bottom: 10px; color: white;">
    <h5>User access profiles</h5>
</div>


<!-- iMAL User Profile-->
<div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('iMAL User Profile') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="iMAL_User_Profile[]" id="iMAL_User_Profile" class="form-control select_box select2" style="width: 100%"
                                       multiple="multiple" >
                                           
                                                    <option value="Administrator" >Administrator</option>
                                                    <option value="Head Teller" >Head Teller</option>
                                                    <option value="General Inquiry" >General Inquiry</option>
                                                    <option value="Branch manager" >Branch manager</option>
                                                    <option value="Customer Service" >Customer Service</option>
                                                    
                                                    <option value="Representative (CSR)" >Representative (CSR)</option>
                                                    <option value="Teller" >Teller</option>
                                                    <option value="Operations Manager" >Operations Manager</option>
                                                    <option value="Other" >Other</option>
                                                    
                                        
                                               
                                        </select>
                                   
                                </div>
                            </div>


                              <!--other specify-->
                            <div class="form-group" id="Reason_iMAL_User_Profile_otherDIV">
                                <label class="col-lg-3 control-label"><?= lang('Reason') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="" name="Reason_iMAL_User_Profile_other" id="Reason_iMAL_User_Profile_other" placeholder='State the reason for granting the role'>
                                </div>
                            </div>
 <!--JS -------->
                         <script type="text/javascript">
                          $("#iMAL_User_Profile").change(function() {
                            if ($(this).val() == "Other") {
                            $('#Reason_iMAL_User_Profile_otherDIV').show();
                            
                            $('#Reason_iMAL_User_Profile_other').attr('required', '');
                            $('#Reason_iMAL_User_Profile_other').attr('data-error', 'This field is required.');
                            } else {
                            $('#Reason_iMAL_User_Profile_otherDIV').hide();
                            
                            $('#Reason_iMAL_User_Profile_other').removeAttr('required');
                            $('#Reason_iMAL_User_Profile_other').removeAttr('data-error');
                            }
                            });
                            $("#iMAL_User_Profile").trigger("change");



                      </script>  


    <!--END OF JS-->
                              

<!-- MIPs User Profile-->
<div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('MIPs User Profile') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="MIPs_User_Profile[]" id="MIPs_User_Profile" class="form-control select_box select2" style="width: 100%"
                                       multiple="multiple" >
                                           
                                                    <option value="Maker" >Maker</option>
                                                    <option value="Authorizer" >Authorizer</option>
                                                    
                                               
                                        </select>
                                   
                                </div>
                            </div>

<!--Database access (iMAL)-->
    <div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('Database access (iMAL)') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="Database_access_iMAL[]" id="Database_access_iMAL" class="form-control select_box select2" style="width: 100%"
                                       multiple="multiple" >
                                           
                                                    <option value="Database Administrator" >Database Administrator</option>
                                                    <option value="View access" >View access</option>
                                                    <option value="Amend tables" >Amend tables</option>
                                                    
                                        </select>
                                   
                                </div>
                            </div>


                              <!--If amend/view, please list the required tables-->
                            <div class="form-group" id="Required_tables_Database_access_iMALDIV">
                                <label class="col-lg-3 control-label"><?= lang('Required tables database access (iMAL)') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="" name="Required_tables_Database_access_iMAL" id="Required_tables_Database_access_iMAL"  placeholder='list the required tables'>
                                </div>
                            </div>

                    
                <!--JS -------->
                         <script type="text/javascript">
                          $("#Database_access_iMAL").change(function() {
                            if ($(this).val() == ("View access") || $(this).val() == ("Amend tables") ) {
                            $('#Required_tables_Database_access_iMALDIV').show();
                            
                            $('#Required_tables_Database_access_iMAL').attr('required', '');
                            $('#Required_tables_Database_access_iMAL').attr('data-error', 'This field is required.');
                            } else {
                            $('#Required_tables_Database_access_iMALDIV').hide();
                            
                            $('#Required_tables_Database_access_iMAL').removeAttr('required');
                            $('#Required_tables_Database_access_iMAL').removeAttr('data-error');
                            }
                            });
                            $("#Database_access_iMAL").trigger("change");



                      </script>  


    <!--END OF JS-->          

           <!--Database access (MIPS)-->
    <div class="form-group" >
                                <label class="col-lg-3 control-label"><?= lang('Database access (MIPS)') ?> <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                  
                                        <select name="Database_access_MIPS[]" id="Database_access_MIPS" class="form-control select_box select2" style="width: 100%"
                                       multiple="multiple" >
                                           
                                                    <option value="Database Administrator" >Database Administrator</option>
                                                    <option value="View access" >View access</option>
                                                    <option value="Amend tables" >Amend tables</option>
                                                    
                                        </select>
                                   
                                </div>
                            </div>


                              <!--If amend/view, please list the required tables-->
                            <div class="form-group" id="Required_tables_Database_access_MIPSDIV">
                                <label class="col-lg-3 control-label"><?= lang('Required tables database access (MIPS)') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="" name="Required_tables_Database_access_MIPS" id="Required_tables_Database_access_MIPS" placeholder='list the required tables'>
                                </div>
                            </div>

     
                <!--JS -------->
                         <script type="text/javascript">
                          $("#Database_access_MIPS").change(function() {
                             if ($(this).val() == ("View access") || $(this).val() == ("Amend tables") || $(this).val() == ("Amend tables" & "View access") ) {
                            $('#Required_tables_Database_access_MIPSDIV').show();
                            
                            $('#Required_tables_Database_access_MIPS').attr('required', '');
                            $('#Required_tables_Database_access_MIPS').attr('data-error', 'This field is required.');
                            } else {
                            $('#Required_tables_Database_access_MIPSDIV').hide();
                            
                            $('#Required_tables_Database_access_MIPS').removeAttr('required');
                            $('#Required_tables_Database_access_MIPS').removeAttr('data-error');
                            }
                            });
                            $("#Database_access_MIPS").trigger("change");



                      </script>  


    <!--END OF JS-->          



<!--
 Rights_Timeframe
Rights_Timeframe_time
existing_system_access[]
generic_role_at_present_existing_system_access[]

Domain_Username
iMAL_Username_ID
MIPS_Username_ID
iMAL_Database_Username
MIPs_Database_Username
HR_System_Username

Requested_action[]
generic_role_at_present_requested_action[]

Requested_system_access[]

iMAL_User_Profile[]
Reason_iMAL_User_Profile_other

MIPs_User_Profile[]
Database_access_iMAL[]
Required_tables_Database_access_iMAL

Database_access_MIPS[]
Required_tables_Database_access_MIPS
 -->

                              





</div>
</div>


 
                     <script type="text/javascript">
                          $("#ticket_type").change(function() {
                            if ($(this).val() == "System access ticket") {
                            $('#sat_otherFieldDiv2').show();
                            document.getElementById("hide-showMulti-Step").innerHTML = "System access ticket details";
                            $('#zogoDiv').show();
                            $('#sat_otherFiel1').attr('required', '');
                            $('#sat_otherFiel1').attr('data-error', 'This field is required.');



                            //required 
                            //1
                            $('#Rights_Timeframe').attr('required', '');
                            $('#Rights_Timeframe').attr('data-error', 'This field is required.');
                            //2
                            $('#existing_system_access').attr('required', '');
                            $('#existing_system_access').attr('data-error', 'This field is required.');

                            //3
                            $('#generic_role_at_present_existing_system_access').attr('required', '');
                            $('#generic_role_at_present_existing_system_access').attr('data-error', 'This field is required.');


                            //4
                            $('#Requested_action').attr('required', '');
                            $('#Requested_action').attr('data-error', 'This field is required.');

                            //5
                            $('#generic_role_at_present_requested_action').attr('required', '');
                            $('#generic_role_at_present_requested_action').attr('data-error', 'This field is required.');
                            //6
                            $('#Requested_system_access').attr('required', '');
                            $('#Requested_system_access').attr('data-error', 'This field is required.');
                            //7
                            $('#iMAL_User_Profile').attr('required', '');
                            $('#iMAL_User_Profile').attr('data-error', 'This field is required.');
                            //8
                            $('#MIPs_User_Profile').attr('required', '');
                            $('#MIPs_User_Profile').attr('data-error', 'This field is required.');
                            //9
                            $('#Database_access_iMAL').attr('required', '');
                            $('#Database_access_iMAL').attr('data-error', 'This field is required.');
                            //10
                            $('#Database_access_MIPS').attr('required', '');
                            $('#Database_access_MIPS').attr('data-error', 'This field is required.');

                            stepsformcontrol();


                            } else {
                            $('#sat_otherFieldDiv2').hide();
                            $('#zogoDiv').hide();
                            $('#sat_otherFiel1').removeAttr('required');
                            $('#sat_otherFiel1').removeAttr('data-error');

                            //required 
                            //1
                            $('#Rights_Timeframe').removeAttr('required');
                            $('#Rights_Timeframe').removeAttr('data-error');
                            //2
                            $('#existing_system_access').removeAttr('required');
                            $('#existing_system_access').removeAttr('data-error');

                            //3
                            $('#generic_role_at_present_existing_system_access').removeAttr('required');
                            $('#generic_role_at_present_existing_system_access').removeAttr('data-error');


                            //4
                            $('#Requested_action').removeAttr('required');
                            $('#Requested_action').removeAttr('data-error');

                            //5
                            $('#generic_role_at_present_requested_action').removeAttr('required');
                            $('#generic_role_at_present_requested_action').removeAttr('data-error');
                            //6
                            $('#Requested_system_access').removeAttr('required');
                            $('#Requested_system_access').removeAttr('data-error');
                            //7
                            $('#iMAL_User_Profile').removeAttr('required');
                            $('#iMAL_User_Profile').removeAttr('data-error');
                            //8
                            $('#MIPs_User_Profile').removeAttr('required');
                            $('#MIPs_User_Profile').removeAttr('data-error');
                            //9
                            $('#Database_access_iMAL').removeAttr('required');
                            $('#Database_access_iMAL').removeAttr('data-error');
                            //10
                            $('#Database_access_MIPS').removeAttr('required');
                            $('#Database_access_MIPS').removeAttr('data-error');
                            }
                            });
                            $("#ticket_type").trigger("change");



                      </script>  


