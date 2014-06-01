<?php
/**
 * @package Internals
 */

function git_form($form_id)
{
  if(empty($form_id)){
    return false;
  }
  $GetClass = new GetData();  

  $InputDataById = $GetClass->get_input_details_by_id($form_id);
  $FormDataById = $GetClass->get_form_details_by_id($form_id);  
  if(empty($InputDataById) && empty($FormDataById))
  {
    return false;
  }     
  $FormOptions = unserialize($FormDataById->Form_Options);  
?>    
    <p style="display: none;" class="thanks-text"><?php echo $FormOptions['user_success_text']; ?></p>
    <img class="loader" style="display: none;" src="<?php echo plugins_url( 'get-in-touch/img/loader.gif' ) ?>">
    <input type="hidden" name="url_send_mail" id="url_send_mail" value="<?php echo plugins_url().'/get-in-touch/includes/data-processing/user/send_contact_form_data.php'; ?>" />
    <input type="hidden" name="contact_form_formid" id="contact_form_formid" value="<?php echo $form_id; ?>" />   
    <input type="hidden" value="<?php echo $FormOptions['git_check_for_stor_contact_form_data']; ?>" name="db_check" id="db_check" >    
    <form class="contact-form" name="git-ui-contact-form" id="git-ui-contact-form" action="" method="post">       
<?php
    foreach($InputDataById as $InputData)
    {           
      $UnserializedInputData = unserialize($InputData->Input_Data);       
      if($InputData->Input_Type === 'text-field')
      {
?>
      <div class="form-group">
        <label for="name"><?php echo $UnserializedInputData[5];?><?php if($FormOptions['git_mail_form_required_fields_text'] === 'true' && $UnserializedInputData[6] === 'true'){echo '<span style="color: #e04545;"> (Required)</span>';}?></label>
        <input type="text" class="<?php if($UnserializedInputData[6] === 'true'){echo 'required';}?> <?php echo $UnserializedInputData[2].' form-control'; ?>" 
        id="git_contact_form_defined_text <?php echo $UnserializedInputData[1]; ?>" name="<?php echo $UnserializedInputData[0]; ?>"
        size="<?php echo $UnserializedInputData[3]; ?>" maxlength="<?php echo $UnserializedInputData[4]; ?>">
      </div>
<?php
      }
      if($InputData->Input_Type === 'phone')
      {
?>
      <div class="form-group" id="phone">
        <label for="name"><?php echo $UnserializedInputData[5];?><?php if($FormOptions['git_mail_form_required_fields_text'] === 'true' && $UnserializedInputData[6] === 'true'){echo '<span style="color: #e04545;"> (Required)';}?></label>
        <input type="text" class="phone <?php if($UnserializedInputData[6] === 'true'){echo 'required';}?> <?php echo $UnserializedInputData[2].' form-control'; ?>" 
        id="git_contact_form_defined_text <?php echo $UnserializedInputData[1]; ?>" name="<?php echo $UnserializedInputData[0]; ?>"
        size="<?php echo $UnserializedInputData[3]; ?>" maxlength="<?php echo $UnserializedInputData[4]; ?>">
      </div>
<?php
      }
      if($InputData->Input_Type === 'email')
      {
?>
      <div class="form-group">
        <label for="name"><?php echo $UnserializedInputData[5];?><?php if($FormOptions['git_mail_form_required_fields_text'] === 'true' && $UnserializedInputData[6] === 'true'){echo '<span style="color: #e04545;"> (Required)';}?></label>
        <input type="email" class="emailtest <?php if($UnserializedInputData[6] === 'true'){echo 'required';}?> <?php echo $UnserializedInputData[2].' form-control'; ?>" 
        id="git_contact_form_defined_text <?php echo $UnserializedInputData[1]; ?>" name="<?php echo $UnserializedInputData[0]; ?>"
        size="<?php echo $UnserializedInputData[3]; ?>" maxlength="<?php echo $UnserializedInputData[4]; ?>">
        <p style="display: none;" class="mailerror-text"><?php echo $FormOptions['user_error_email_validation_text']; ?></p>
      </div>
<?php
      }
      if($InputData->Input_Type === 'textarea')
      {        
?>
      <div class="form-group">
        <label for="name"><?php echo $UnserializedInputData[5];?><?php if($FormOptions['git_mail_form_required_fields_text'] === 'true' && $UnserializedInputData[6] === 'true'){echo '<span style="color: #e04545;"> (Required)';}?></label>
        <textarea class="<?php if($UnserializedInputData[6] === 'true'){echo 'required';}?> <?php echo $UnserializedInputData[2].' form-control'; ?>" 
        id="git_contact_form_defined_text <?php echo $UnserializedInputData[1]; ?>" name="<?php echo $UnserializedInputData[0]; ?>"
        cols="<?php echo $UnserializedInputData[3]; ?>" rows="<?php echo $UnserializedInputData[4]; ?>"> </textarea>
      </div>
<?php
      }
      if($InputData->Input_Type === 'captcha')
      {
?>
      <div class="form-group">
        <label for="name"><?php echo $UnserializedInputData[0];?></label>
        <input type="text" class="form-control" id="captchaText" name="captchaText" placeholder="Enter Captcha string">
        <img src="<?php echo 'http://think201.org'; ?>">                                                                                    
        <span onClick="window.location.reload();" class="btn btn-default">Refresh</span>
      </div>
<?php        
      }
    }
?>     
<?php 
      if(!isset($_GET['page']))
      {
?>
        <button style="background-color: <?php echo '#'.$FormOptions['button_color']; ?>" type="button" name="submit-contact-form" id="submit-contact-form" onClick="GITSubmitContactForm()" class="btn"><?php echo $FormOptions['button_text']; ?></button>                      
        <p style="display: none;" class="error-text"><?php echo $FormOptions['user_error_validation_text']; ?></p>
<?php        
      }   
?>                 
      </div>   
    </form>                     
<?php
}

function git_map($form_id)
{
  if(empty($form_id)){
    return false;
  }

	$GetClass = new GetData();	

	$InputMapById = $GetClass->get_map_details_by_id($form_id);

  if(empty($InputMapById)){
    return false;
  }

  $UnserializedInputMap = unserialize($InputMapById[0]->Input_Data);   
?>
  <input type="hidden" id="map_lang" value="<?php echo $UnserializedInputMap[0];?>">
  <input type="hidden" id="map_lat" value="<?php echo $UnserializedInputMap[1];?>">
  <input type="hidden" id="map_color" value="<?php echo $UnserializedInputMap[2];?>">
  <input type="hidden" id="map_title" value="<?php echo $UnserializedInputMap[5];?>">
  <div style="background-color: #FFFFFF;border: 1px solid #CCCCCC;box-shadow: 0 0 10px -8px #888888; height: <?php echo $UnserializedInputMap[3]+12;?>px;padding: 5px; width: <?php echo $UnserializedInputMap[4]+12;?>px;" class="git-map-container">
    <div style="margin: 0px; padding: 0px; height: <?php echo $UnserializedInputMap[3];?>px; width: <?php echo $UnserializedInputMap[4];?>px;" id="map_can">
    </div> 
  </div>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>    
<?php
}

function git_view_contact_form_submitted()
{
  //Object of Get Data Class
  $GetClass = new GetData();  
  $ContactFormData = $GetClass->GetAllContactFormData();  
?>  
  <div class="container">
    <h1>Get In Touch</h1>  
<?php 
    if(!empty($ContactFormData))
    {
?>  
<?php
    }
?>  
    <div class="row">
      <div class="box">
        <div class="box-header well">
          <p style="color:#606060;">Get In Touch ><a id="add-form" onclick="" style="color:#606060;" href="#"> Contact Forms</a></p>                      
        </div>
        <div class="box-content">
<?php 
          if(!empty($ContactFormData))
          {
?>  
          <table class="table table-bordered">              
            <tr class="forms-view-head">
              <td>Select</td>
              <td>Before</td>
              <td>IP Address</td>             
              <td>Contact Form Details</td> 
              <td>Action</td>   
              <td>Important</td>              
            </tr>
<?php
          }
?>          
<?php
            $i = 1;
            foreach($ContactFormData as $ContactData)
            {
              $UnserializeContactFormData = unserialize($ContactData->ContactForm_Data);                           
?>
              <tr>
                <td><?php echo $i; ?></td>
                <td>
<?php
                  $DBTime =  strtotime($ContactData->ContactForm_Time);                     
                  // Calling function to get Human Readable Time
                  $HTime = humanTiming($DBTime);
                  echo $HTime.' Ago.';
?>
                </td>
                <td>
                  <?php echo $ContactData->User_IP; ?>
                </td>
                <td>
<?php                
                foreach($UnserializeContactFormData as $key => $value) 
                {
?>                  
                  <h4><?php echo $value; ?></h4>
<?php                 
                }
?>                  
                </td> 
                <td><a id="delete" class="deleteformdata" onclick="DeleteFormData(<?php echo $ContactData->ContactForm_Id; ?>);" href="#">DELETE</a></td>               
                <td>
                  <select class="form-control data_inportance" id="<?php echo $ContactData->ContactForm_Id; ?>" name="data_inportance">                    
                    <option value="<?php echo $ContactData->Form_RatingData; ?>"><?php echo $ContactData->Form_RatingData; ?></option>
<?php               if($ContactData->Form_RatingData === 'Important')
                    {
?>
                      <option value="Very Important">Very Important</option>
                      <option value="Average">Average</option>                       
<?php                      
                    }
                    else if($ContactData->Form_RatingData === 'Average')
                    {
?>                     
                      <option value="Important">Important</option> 
                      <option value="Very Important">Very Important</option> 
<?php
                    }
                    else if($ContactData->Form_RatingData === 'Very Important')
                    {
?>                     
                      <option value="Important">Important</option> 
                      <option value="Average">Average</option>                        
<?php
                    }
?>                                                                                 
                  </select>
                </td>
              </tr>
<?php             
              $i++;
            }
?>                        
          </table>
        </div>
      </div>
    </div>
  </div>
<?php
}
//Function to Get Time in Human Readable Form
function humanTiming($time)
{   
  $time = time() - $time;
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );
    foreach ($tokens as $unit => $text) 
    {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }
}
?>