<?php
/**
 * @package Internals
 */
// Dashboard
function git_home_function()
{
?>
<div class="git-container">
	<div class="git-row">
		<div class="git-12">
			<div class="main_dashboard">
				<div class="git-row">
					<div class="git-12">
						<img src="<?php echo plugins_url('get-in-touch/img/get-in-touch.jpg'); ?>" alt="Get In Touch" class="git-banner">
					
						<div class="dashboard-title">				
							<h4><a href="<?php echo admin_url(); ?>admin.php?page=add-form" class="plugin_name">Get In Touch</a></h4>			
							<div class="social-holder">
								<a href="http://www.think201.com/contact-us" target="_blank" class="social">Say <i>Hello!</i></a>
								<a href="http://www.twitter.com/think201" target="_blank"><span class="twitter"></span></a>				
								<a href="http://www.facebook.com/think201" target="_blank"><span class="fb"></span></a>
							</div>						
						</div>
					</div>
				</div>
				<div class="git-row">
					<div class="git-7">
						<div class="plugin_section">
							<p>
								Get In Touch plug-in allows you to generate form by adding input controls to it dynamically. This plug-in allows you to integrate map along with your form and have a track of mails received.<br/>
							</p>
							<h4>Description: </h4>
							<p>
								Get In Touch plug-in allows you to generate form by adding input controls to it dynamically. This plug-in allows you to integrate map along with your form and have a track of mails received.<br/>
							</p>
							<h4>Salient Features: </h4>	
							<ul>
								<li>
									Add any number of input controls to your form.
								</li>
								<li>
									Include maps with your form.
								</li>
								<li>
									Colour Customization of map used.
								</li>
								<li>
									Track mails received through your form.
								</li>
							</ul>	

							<a href="http://developer.think201.com" target="_blank" class="git-btn plugin_site">Visit Plugin Site</a>
						</div>
					</div>
					<div class="git-5">
						<div class="extra_section">				
						<div class="about_think201">
							<a href="http://www.think201.com" target="_blank" class="think201"></a>
							<p>Bangalore based Website Designing &amp; Development company which masters in creating magnificent products &amp; incredibly stunning websites.</p>
						</div>				
						<div class="about_developer">
							<h5><a href="http://developer.think201.com/" target="_blank">Think201 Developer Network</a></h5>
							<p>
							Think201 Developer Network is an initiative from Think201 to give back to developer community re-usable code in terms of utility functions. Our main focus is in web domain using technologies PHP, MySQL, WordPress and would slowly expand our contributions in other technologies. 
							We are also open to accept utility request and serve the community by developing them after reviewing their usability globally. </p>
							<p>Help us grow and contribute. Leave your requests <a class="" target="_blank" href="http://developer.think201.com/request-for-utility">here</a> and share the word with others.
							</p>
						</div>
					</div>
					</div>
				</div>				
			</div>
		</div>
	</div>	
</div>
<?php	
}

// Add contact from
function git_add_form()
{
?>
<div class="git-container">
	<img class="git-loader" style="display: none;" src="<?php echo plugins_url('get-in-touch/img/loader.gif' ) ?>">
	<p class="StatusShow"></p>
	<h1>Get In Touch</h1>
	<div class="git-row">
		<div class="box">
			<div class="box-header well">
				<p style="color:#606060;">Get In Touch ><a id="add-form" onclick="CreateForm();" style="color:#606060;" href="#"> Add Form</a>
					<span class="git-input-field-status">Input Field has been added!</span>
				</p>											
			</div>
			<div class="box-content">
				<p id="form-submit-success" style="display: none;">Your form has been created.</p>
				<div id="input-options">					
					<ul>
						<li id="text-field">
							<p>Text Field<p>
						</li>
						<li id="email">
							<p>Email</p>
						</li>
						<li id="phone">
							<p>Phone</p>
						</li>
						<li id="textarea">
							<p>Textarea</p>
						</li>
<!-- 						<li id="captcha">
							<p>Captcha<p>
						</li> -->											
						<li id="map">
							<p>Map</p>
						</li>						
					</ul>		
				</div>				
				<?php require_once('quick_panel.php'); ?>					
				<div style="display: none;" id="ini_form_content">					
		    	    <form name="ini_form_content_form" id="ini_form_content_form" action="#" method="post">
		    	    	<div class="git-fields-container" id="from-title"></div>	
				      	<div class="git-fields-container">	
				      		<label for="subject">Form Title:</label>     
		    	    		<input type="text" name="update_form_label" value="Contact Form" id="update_form_label" class="">	        			        				    	    		
				      	</div>					      	
				      	<div class="git-fields-container">	
			        	    <label for="subject">Form Content:</label>        	    
			            	<textarea readonly="readonly" class="git-disable" rows="5" name="ini_form_content_area" id="ini_form_content_area" placeholder="Please select input fields from top panel"></textarea>	            	
			            </div>

			            <h1>Mail Template</h1>
			            <div class="git-fields-container">	
			            	<label for="subject">Subject Field:</label>
			            	<input type="text" value="Inquery Request" id="mail-subject" name="mail-subject" placeholder="Input Subject">
				      	</div>	
				      	<div class="git-fields-container">	
				      		<label for="subject">Sender Name:</label>
				      		<input type="text" value="Administrator" id="mail-sender-name" name="mail-sender-name" placeholder="Your Name">
				      	</div>	
				      	<div class="git-fields-container">	
				      		<label for="subject">Sender MailId:</label>
				      		<input type="text" value="<?php echo get_option('admin_email'); ?>" id="mail-sender-mail" name="mail-sender-mail" placeholder="Your MailId">
				      	</div>	
				      	<div class="git-fields-container">	
			        	    <label for="subject">Email Message to User:</label>        	    
			            	<input placeholder="Enter Message" name="ini_form_mail_message" id="ini_form_mail_message" value="Thank You! We Would Get In Touch with you soon !!">
			            </div>				            
			            <h1>Options</h1>
			            <hr>
			            <div class="git-fields-container">	
			        	    <label for="subject">Contact Form Width:</label><br/>  	    
			            	<input value="450" name="user_form_width" id="user_form_width">				            	
							<span class="git-tip">Ex: 450 (in px)</span>			            	
			            </div>
			            <div class="git-fields-container">	
			        	    <label for="subject">Contact Form Loader:</label><br/>  	    
			            	<select id="user_form_loader" name="user_form_loader">
			            		<option value="yes">Yes</option>
			            		<option value="no">No</option>
			            	</select>
			            </div>
			            <div class="git-fields-container">	
			        	    <label for="subject">Contact Form Hide After Success:</label><br/>  	    
			            	<select id="user_form_hide" name="user_form_hide">
			            		<option value="yes">Yes</option>
			            		<option value="no">No</option>
			            	</select>
			            </div>
			            <div class="git-fields-container">	
			        	    <label for="subject">Contact Form Alignment:</label><br/>  	    
			            	<select id="contact_form_alignment" name="contact_form_alignment">
			            		<option value="vertical">Vertical</option>
			            		<!-- <option value="horizontal">Horizontal</option> -->
			            	</select>
			            </div>


			            <div class="git-fields-container">	
			        	    <label for="subject">Submit Button Text:</label><br/>  	    
			            	<input value="Get In Touch" name="user_button_text" id="user_button_text">				            	
			            </div>	
			            <div class="git-fields-container">	
			        	    <label for="subject">Submit Button Color:</label><br/>  	    				            	
			            	<input type="hidden" value="5bb75b" name="user_button_color" id="user_button_color">
			            </div>	
			            <div class="git-fields-container">	
			        	    <label for="subject">Contact Form Success Message:</label><br/>  	    
			            	<input value="Thanks, We would get in touch with you soon." name="user_success_text" id="user_success_text">
			            </div>
			            <div class="git-fields-container">	
			        	    <label for="subject">Contact Form Validation Error Message:</label><br/>  	    
			            	<input value="Please provide us valid details." name="user_error_validation_text" id="user_error_validation_text">
			            </div>
			            <div class="git-fields-container">	
			        	    <label for="subject">Contact Form Mail Validation Error Message:</label><br/>  	    
			            	<input value="Please provide us valid mail address." name="user_error_email_validation_text" id="user_error_email_validation_text">
			            </div>
			            <div class="git-fields-container">	
			        	    <label for="subject">Display Required Fields:</label>
			            	<input type="checkbox" id="git_mail_form_required_fields_text" name="git_mail_form_required_fields_text">
			            </div>				       				            					            				            	           
			            <div class="git-fields-container">	
			            	<label for="subject">Send mail to User:</label>
			            	<input type="checkbox" checked id="git_mail_copy_to_user_check" name="git_mail_copy_to_user_check">
				      	</div>
				      	<div class="git-fields-container">	
			            	<label for="subject">I want to stor the contact form data of user who contacted me:</label>
			            	<input type="checkbox" checked id="git_check_for_stor_contact_form_data" name="git_check_for_stor_contact_form_data">
				      	</div>
			            <div class="git-fields-container">	
			            	<label for="subject">Recipient MailId:</label>
			            	<input type="text" id="mail-recipient" name="mail-recipient" value="<?php echo get_option('admin_email'); ?>" placeholder="Inter Recipient Mailing Address">
				      	</div>	
				      	<input type="hidden" name="last-form-inserted-id" id="last-form-inserted-id">
			            <input type="hidden" name="form-shown" id="form-shown" value="true">
		            	<hr>	            	
		            	<button onClick="ValidateForm()" class="git-btn" type="button" id="submit-form">Create Form</button>
            		</form>    	  			
				</div>			
			</div>
		</div>
	</div>
</div>
<?php
}

function redirect($url)
{
    if (headers_sent())
    {
      die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
    }
    else
    {
      header('Location: ' . $url);
      die();
    }    
}

// Get list of all contact forms
function git_view_forms()
{
	//Create a Object of Class to call method to insert data		
	$GetClass = new GetData();	
	$PostClass = new PostData();	

	//Calling Function Get All Form Data
	$AllForms = $GetClass->get_all_forms_from_db();		

	//Get Action Value and ID to be action performed
	if(isset($_GET['action']) && isset($_GET['id']))
	{
		$action = $_GET['action'];	
		$id = $_GET['id'];	
		if($action === 'delete' && wp_verify_nonce( $_GET['_wpnonce'], 'delete_link' ))
		{	
			$deleted_id = $PostClass->delete_form_from_db($id);
			if($deleted_id === true)
			{
				redirect('admin.php?page=view-forms');
			}	
		}
		else if($action === 'edit' && wp_verify_nonce( $_GET['_wpnonce'], 'edit_link' ))
		{		
			get_all_forms_data_for_update($id);				
		}
		else if($action === 'copy' && wp_verify_nonce( $_GET['_wpnonce'], 'copy_link' ))
		{		
			$copy_id = $PostClass->create_copy_of_this_form($id);
			if($copy_id === true)
			{
				redirect('admin.php?page=view-forms');
			}			
		}
		else 
		{
			die( 'Security check' );
		}
	}	
	else
	{
?>	
	<div class="git-container">
		<h1>Get In Touch</h1>
		<div class="git-row">
			<div class="box">
				<div class="box-header well">
					<p style="color:#606060;">Get In Touch ><a id="add-form" onclick="" style="color:#606060;" href="#"> Contact Forms</a></p>											
				</div>
				<div class="box-content">
<?php		
					if(!empty($AllForms))
					{					
?>
					<table class="form-view-container">							
						<tr class="forms-view-head">
						  <td>No</td>
						  <td>Title</td>
						  <td>Form SortCode</td>
						  <td>Map SortCode</td>
						  <td>Form Function</td>						  
						  <td>Map Function</td>						  
						  <td>GIT Action</td>
						</tr>
<?php
					}
?>					
<?php			
					$i = 1;
					foreach($AllForms as $Forms)
					{
						if(!empty($Forms->Form_Data))
						{							
							$shortcodedetails = unserialize($Forms->Shortcode_Name);									
							$functiondetails = unserialize($Forms->Function_Name);												
?>						
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php if($Forms->Form_Label !== ''){ echo $Forms->Form_Label;}else {echo 'No Title';} ?></td>						  	
<?php
 							if(!empty($shortcodedetails['FormSortcode']) && !empty($shortcodedetails['MapSortcode']) &&
 								!empty($functiondetails['FormFunction']) && !empty($functiondetails['MapFunction']))
 							{
?>
								<td><input type="text" value='<?php echo $shortcodedetails['FormSortcode']; ?>' readonly="readonly" onfocus="this.select();"></td>
								<td><input type="text" value='<?php echo $shortcodedetails['MapSortcode']; ?>' readonly="readonly" onfocus="this.select();"></td>	
								<td><input type="text" value='<?php echo $functiondetails['FormFunction']; ?>' readonly="readonly" onfocus="this.select();"></td>	
								<td><input type="text" value='<?php echo $functiondetails['MapFunction']; ?>' readonly="readonly" onfocus="this.select();"></td>									
<?php
							}							
 							if(!empty($shortcodedetails['FormSortcode']) && empty($shortcodedetails['MapSortcode']) &&
 								!empty($functiondetails['FormFunction']) && empty($functiondetails['MapFunction']))
 							{
?>									
								<td><input type="text" value='<?php echo $shortcodedetails['FormSortcode']; ?>' readonly="readonly" onfocus="this.select();"></td>
								<td>Map not added</td>								
								<td><input type="text" value='<?php echo $functiondetails['FormFunction']; ?>' readonly="readonly" onfocus="this.select();"></td>
								<td>Map not added</td>
<?php
							}							
 							if(empty($shortcodedetails['FormSortcode']) && !empty($shortcodedetails['MapSortcode']) &&
 								empty($functiondetails['FormFunction']) && !empty($functiondetails['MapFunction']))
 							{
?>
								<td>Form not added</td>								
								<td><input type="text" value='<?php echo $shortcodedetails['MapSortcode']; ?>' readonly="readonly" onfocus="this.select();"></td>
								<td>Form not added</td>								
								<td><input type="text" value='<?php echo $functiondetails['MapFunction']; ?>' readonly="readonly" onfocus="this.select();"></td>
<?php
							}							
?>
						  	<td>						  		
						  			<?php $EditUrl = 'admin.php?page=view-forms&action=edit&id='.$Forms->Form_Id;?>
						  			<?php $CopyUrl = 'admin.php?page=view-forms&action=copy&id='.$Forms->Form_Id;?>
						  			<?php $DeleteUrl = 'admin.php?page=view-forms&action=delete&id='.$Forms->Form_Id;?>
						  			<a id="copy" href="<?php echo wp_nonce_url($CopyUrl, 'copy_link' ); ?>">CLONE</a>
							  		<a id="edit" href="<?php echo wp_nonce_url($EditUrl, 'edit_link' ); ?>">EDIT</a>
							  		<a id="delete" href="<?php echo wp_nonce_url($DeleteUrl, 'delete_link' ); ?>">DELETE</a>
						  	</td>	  
						</tr>													
<?php							
						}	
						$i++;						
					}									
?>
					</table>  
				</div>
			</div>
		</div>
	<div>
<?php
	}
}

//Call Form for Update
function get_all_forms_data_for_update($form_id)
{	
	// Create Object of Get Data Class
	$GetClass = new GetData();	
	
	$GetAllFormData = $GetClass->get_form_details_by_id($form_id);		
	$GetAllInputData = $GetClass->get_input_details_by_id($form_id);	


	$FormOptions = unserialize($GetAllFormData->Form_Options);	
?>
<h1>Get In Touch</h1>
<div class="git-container">
	<div class="git-row">
		<div class="box">
			<div class="box-header well">
				<p style="color:#606060;">Get In Touch ><a id="update-form" style="color:#606060;" href="#"> Update Form</a></p>											
			</div>
			<div class="box-content">
				<p id="form-submit-success" style="display: none;">Your form has been updated.</p>				

				<div style="display: none;" id="update_form_content">
					<div class="form-group">
			    	    <form name="ini_form_content_form" id="ini_form_content_form" action="#" method="post">
			    	    	<div class="git-fields-container" id="from-title">
			    	    	    <input type="hidden" readonly="readonly" name="update_form_title" id="update_form_title" class="contact-form-title" value="<?php echo $GetAllFormData->Form_Name; ?>">	        			        	
			    	    	    <input type="text" name="update_form_label" id="update_form_label" value="<?php echo $GetAllFormData->Form_Label; ?>">	        			        	
					      	</div>	
					      	<div class="git-fields-container">
				        	    <label for="subject">Form Content:</label>        	    
				            	<textarea class="form-control" readonly="readonly" rows="10" name="ini_form_content_area" id="ini_form_content_area" placeholder="Please select input fields from top panel"><?php echo $GetAllFormData->Form_Data; ?></textarea>	            	
				            </div>

				            <h1>Mail Template</h1>
				            <hr>
				            <div class="git-fields-container">
				            	<label for="subject">Subject Field:</label>
				            	<input type="text" value="Inquery Request" id="update-mail-subject" name="update-mail-subject" value="<?php echo $GetAllFormData->Mail_Subject; ?>" placeholder="Input Subject">
					      	</div>	
					      	<div class="git-fields-container">
					      		<label for="subject">Sender Name:</label>
					      		<input type="text" value="<?php echo $GetAllFormData->Mail_Sender_Name; ?>" id="update-sender-name" name="update-sender-name" placeholder="Your Name">
					      	</div>	
					      	<div class="git-fields-container">
					      		<label for="subject">Sender MailId:</label>
					      		<input type="text" value="<?php echo $GetAllFormData->Mail_Sender_Email; ?>" id="update-sender-mail" name="update-sender-mail" placeholder="Your MailId">
					      	</div>	
					      	<div class="git-fields-container">
				        	    <label for="subject">Email Message to user:</label>        	    
				            	<textarea rows="5" placeholder="Enter Message" name="update_form_mail_message" id="update_form_mail_message"><?php echo $GetAllFormData->Form_MailData; ?></textarea>
				            </div>				            

				            <h1>Options</h1>
				            <hr>
				        <div class="git-fields-container">	
			        	    <label for="subject">Contact Form Width:</label><br/>  	    
			            	<input value="<?php echo $FormOptions['form_width']; ?>" name="user_form_width" id="user_form_width">				            	
							<span class="git-tip">Ex: 450 (in px)</span>			            	
			            </div>
			            <div class="git-fields-container">	
			        	    <label for="subject">Contact Form Loader:</label><br/>  	    
			            	<select id="user_form_loader" name="user_form_loader">
<?php 
			            		if($FormOptions['form_loader'] ==='yes')
			            		{
?>
									<option value="yes">Yes</option>
									<option value="no">No</option>
<?php
			            		}
			            		else
			            		{
?>
									<option value="no">No</option>
									<option value="yes">Yes</option>
<?php
			            		}
?>			            					            		
			            	</select>
			            </div>
			            <div class="git-fields-container">	
			        	    <label for="subject">Contact Form Hide After Success:</label><br/>  	    
			            	<select id="user_form_hide" name="user_form_hide">
<?php 
			            		if($FormOptions['form_hide'] ==='yes')
			            		{
?>
									<option value="yes">Yes</option>
									<option value="no">No</option>
<?php
			            		}
			            		else
			            		{
?>
									<option value="no">No</option>
									<option value="yes">Yes</option>
<?php
			            		}
?>
			            	</select>
			            </div>
			            <div class="git-fields-container">	
			        	    <label for="subject">Contact Form Alignment:</label><br/>  	    
			            	<select id="contact_form_alignment" name="contact_form_alignment">
			            		<option value="vertical"><?php echo $FormOptions['form_alignment']; ?></option>
			            		<!-- <option value="horizontal">Horizontal</option> -->
			            	</select>
			            </div>


				            <div class="git-fields-container">
				        	    <label for="subject">Submit Button Text:</label><br/>  	    
				            	<input type="text" value="<?php echo $FormOptions['button_text']; ?>" name="user_button_text" id="user_button_text">				            	
				            </div>	
				            <div class="git-fields-container">
				        	    <label for="subject">Submit Button Color:</label><br/>  	    				            	
				            	<input type="hidden" class="form-control" value="<?php echo $FormOptions['button_color']; ?>" name="user_button_color" id="user_button_color">
				            </div>	
				            <div class="git-fields-container">
				        	    <label for="subject">Contact Form Success Message:</label><br/>  	    
				            	<input type="text" value="<?php echo $FormOptions['user_success_text']; ?>" name="user_success_text" id="user_success_text">
				            </div>
				            <div class="git-fields-container">
				        	    <label for="subject">Contact Form Validation Error Message:</label><br/>  	    
				            	<input type="text" value="<?php echo $FormOptions['user_error_validation_text']; ?>" name="user_error_validation_text" id="user_error_validation_text">
				            </div>
				            <div class="git-fields-container">
				        	    <label for="subject">Contact Form Mail Validation Error Message:</label><br/>  	    
				            	<input type="text" value="<?php echo $FormOptions['user_error_email_validation_text']; ?>" name="user_error_email_validation_text" id="user_error_email_validation_text">
				            </div>

				            <div class="git-fields-container">
				            	<label for="subject">Display Text this is Required Fields:</label>
				            	<?php if($FormOptions['git_mail_form_required_fields_text'] === 'true')
				            	{
				            	?>
				            		<input type="checkbox" checked id="git_mail_form_required_fields_text" name="git_mail_form_required_fields_text">
				            	<?php
				            	}
				            	else
				            	{
				            	?>
				            		<input type="checkbox" id="git_mail_form_required_fields_text" name="git_mail_form_required_fields_text">
				            	<?php
				            	}
				            	?>				            	
					      	</div>					      

				            <div class="git-fields-container">
				            	<label for="subject">Send mail to user:</label>
				            	<?php if($GetAllFormData->Mail_Copy_To_User === 'true')
				            	{
				            	?>
				            		<input type="checkbox" id="update_mail_copy_to_user_check" name="update_mail_copy_to_user_check" checked>
				            	<?php
				            	}
				            	else
				            	{
				            	?>
				            		<input type="checkbox" id="update_mail_copy_to_user_check" name="update_mail_copy_to_user_check">
				            	<?php
				            	}
				            	?>				            	
					      	</div>

					      	<div class="git-fields-container">
				            	<label for="subject">I want to store the contact form data of user who contacted me:</label>
				            	<?php if($FormOptions['git_check_for_stor_contact_form_data'] === 'true')
				            	{
				            	?>
				            		<input type="checkbox" checked id="git_check_for_stor_contact_form_data" name="git_check_for_stor_contact_form_data">
				            	<?php
				            	}
				            	else
				            	{
				            	?>
				            		<input type="checkbox" id="git_check_for_stor_contact_form_data" name="git_check_for_stor_contact_form_data">
				            	<?php
				            	}
				            	?>						            	
					      	</div>

				            <div class="git-fields-container">
				            	<label for="subject">Recipient MailId:</label>
				            	<input type="text" id="update-mail-recipient" name="update-mail-recipient" 
				            	value="<?php echo $GetAllFormData->Form_Recipient; ?>" placeholder="Inter Recipient Mailing Address">
					      	</div>						      	
				            <input type="hidden" name="form-shown" id="form-shown" value="true">				            
			            	<hr>	            	
			            	<button onClick="SubmitUpdatedForm('<?php echo $form_id; ?>')" class="git-btn" type="button" id="submit-form">Update Form</button>
	            		</form>
    	  			</div>
				</div>			
			</div>
		</div>
	</div>
</div>
<?php
}
?>