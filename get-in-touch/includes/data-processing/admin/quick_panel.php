<div id="quick-panel">
	<center><p id="selected-field"></p></center>
	<span id="close-quick-panel"></span>
	<div id="input-fields-options">		
		<div id="text-field-container" style="display: none;">
			<div class="form-group">
	    	    <form class="form-horizontal" name="content_form_text_fields" id="content_form_text_fields" action="" method="post">					    	    	 
		            <div class="control-group">
		                <label class="control-label" for="name">Name:</label>
		                <div class="controls">
			        	    <input type="text" id="git_text_name" name="git_text_name" for="name" value="" placeholder="Name">
		        	    </div>
		            </div>				
		            <div class="control-group">
		                <label class="control-label" for="name">Id:</label>
		                <div class="controls">
			        	    <input type="text" id="git_text_id" name="git_text_id" for="id" value="" placeholder="ID">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Class:</label>
		                <div class="controls">
			        	    <input type="text" id="git_text_class" name="git_text_class" for="class" value="" placeholder="Class">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Size:</label>
		                <div class="controls">
			        	    <input type="text" id="git_text_size" name="git_text_size" for="size" value="" placeholder="Size">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Maxlength:</label>
		                <div class="controls">
			        	    <input type="text" id="git_text_maxlen" name="git_text_maxlen" for="maxlen" value="" placeholder="Max Length">
		        	    </div>
		            </div>						           
		            <div class="control-group">
		                <label class="control-label" for="name">Label:</label>
		                <div class="controls">
			        	    <input type="text" id="git_text_label" name="git_text_label" for="label" value="" placeholder="Label">
		        	    </div>
		            </div>
		             <div class="control-group">
		                <label class="control-label" for="name">Is Required Field:</label>
		                <div class="controls">
			        	    <input type="checkbox" checked id="git_text_check" name="git_text_check">
		        	    </div>
		            </div>							            						            
		            <input type="hidden" name="git_text_hidden_url" id="git_text_hidden_url" value="<?php echo plugins_url().'/get-in-touch/includes/data-processing/admin/input_data_post.php'; ?>" />
		            <div class="control-group btn-style">
		                <label class="control-label" for="name"></label>
		                <div class="controls">
			        	    <button onClick="SubmitInputField('text-field');" class="btn btn-success" type="button" id="submit-text-field-form">Add Input Field</button>
		        	    </div>
		            </div>						        							      					            	
	            </form>
	      	</div>
		</div>

		<div id="email-container" style="display: none;">
			<div class="form-group">
	    	    <form class="form-horizontal" name="content_form_email" id="content_form_email" action="#" method="post">
		            <div class="control-group">
		                <label class="control-label" for="name">Name:</label>
		                <div class="controls">
			        	    <input type="text" id="git_email_name" name="git_email_name" for="name" value="" placeholder="Name">
		        	    </div>
		            </div>				
		            <div class="control-group">
		                <label class="control-label" for="name">Id:</label>
		                <div class="controls">
			        	    <input type="text" id="git_email_id" name="git_email_id" for="id" value="" placeholder="ID">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Class:</label>
		                <div class="controls">
			        	    <input type="text" id="git_email_class" name="git_email_class" for="class" value="" placeholder="Class">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Size:</label>
		                <div class="controls">
			        	    <input type="text" id="git_email_size" name="git_email_size" for="size" value="" placeholder="Size">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Maxlength:</label>
		                <div class="controls">
			        	    <input type="text" id="git_email_maxlen" name="git_email_maxlen" for="maxlen" value="" placeholder="Max Length">
		        	    </div>
		            </div>						           
		            <div class="control-group">
		                <label class="control-label" for="name">Label:</label>
		                <div class="controls">
			        	    <input type="text" id="git_email_label" name="git_email_label" for="label" value="" placeholder="Label">
		        	    </div>
		            </div>
		             <div class="control-group">
		                <label class="control-label" for="name">Is Required Field:</label>
		                <div class="controls">
			        	    <input type="checkbox" checked id="git_email_check" name="git_email_check">
		        	    </div>
		            </div>	
		            <input type="hidden" id="git_email_hidden_type" name="git_email_hidden_type" value="email">
		            <div class="control-group btn-style">
		                <label class="control-label" for="name"></label>
		                <div class="controls">
			        	    <button onClick="SubmitInputField('email');" class="btn btn-success" type="button" id="submit-email-form">Add Input Field</button>
		        	    </div>
		            </div>						        							      					            	
	            </form>
	      	</div>
		</div>

		<div id="phone-container" style="display: none;">
			<div class="form-group">
	    	    <form class="form-horizontal" name="content_form_phone" id="content_form_phone" action="#" method="post">					    	    	 
		            <div class="control-group">
		                <label class="control-label" for="name">Name:</label>
		                <div class="controls">
			        	    <input type="text" id="git_phone_name" name="git_phone_name" for="name" value="" placeholder="Name">
		        	    </div>
		            </div>				
		            <div class="control-group">
		                <label class="control-label" for="name">Id:</label>
		                <div class="controls">
			        	    <input type="text" id="git_phone_id" name="git_phone_id" for="id" value="" placeholder="ID">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Class:</label>
		                <div class="controls">
			        	    <input type="text" id="git_phone_class" name="git_phone_class" for="class" value="" placeholder="Class">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Size:</label>
		                <div class="controls">
			        	    <input type="text" id="git_phone_size" name="git_phone_size" for="size" value="" placeholder="Size">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Maxlength:</label>
		                <div class="controls">
			        	    <input type="text" id="git_phone_maxlen" name="git_phone_maxlen" for="maxlen" value="" placeholder="Max Length">
		        	    </div>
		            </div>						         
		            <div class="control-group">
		                <label class="control-label" for="name">Label:</label>
		                <div class="controls">
			        	    <input type="text" id="git_phone_label" name="git_phone_label" for="label" value="" placeholder="Label">
		        	    </div>
		            </div>
		             <div class="control-group">
		                <label class="control-label" for="name">Is Required Field:</label>
		                <div class="controls">
			        	    <input type="checkbox" checked id="git_phone_check" name="git_phone_check">
		        	    </div>
		            </div>	
		            <div class="control-group btn-style">
		                <label class="control-label" for="name"></label>
		                <div class="controls">
			        	    <button onClick="SubmitInputField('phone');" class="btn btn-success" type="button" id="submit-phone-form">Add Input Field</button>
		        	    </div>
		            </div>						        							      					            	
	            </form>
	      	</div>
		</div>

		<div id="textarea-container" style="display: none;">
			<div class="form-group">
	    	    <form class="form-horizontal" name="content_form_textarea" id="content_form_textarea" action="#" method="post">					    	    	 
		            <div class="control-group">
		                <label class="control-label" for="name">Name:</label>
		                <div class="controls">
			        	    <input type="text" id="git_textarea_name" name="git_textarea_name" for="name" value="" placeholder="Name">
		        	    </div>
		            </div>				
		            <div class="control-group">
		                <label class="control-label" for="name">Id:</label>
		                <div class="controls">
			        	    <input type="text" id="git_textarea_id" name="git_textarea_id" for="id" value="" placeholder="ID">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Class:</label>
		                <div class="controls">
			        	    <input type="text" id="git_textarea_class" name="git_textarea_class" for="class" value="" placeholder="Class">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Cols:</label>
		                <div class="controls">
			        	    <input type="text" id="git_textarea_cols" name="git_textarea_cols" for="column" value="" placeholder="Column">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Rows:</label>
		                <div class="controls">
			        	    <input type="text" id="git_textarea_rows" name="git_textarea_rows" for="row" value="" placeholder="Row">
		        	    </div>
		            </div>						           
		            <div class="control-group">
		                <label class="control-label" for="name">Label:</label>
		                <div class="controls">
			        	    <input type="text" id="git_textarea_label" name="git_textarea_label" for="label" value="" placeholder="Label">
		        	    </div>
		            </div>
		             <div class="control-group">
		                <label class="control-label" checked for="name">Is Required Field:</label>
		                <div class="controls">
			        	    <input type="checkbox" id="git_textarea_check" name="git_textarea_check">
		        	    </div>
		            </div>	
		            <div class="control-group btn-style">
		                <label class="control-label" for="name"></label>
		                <div class="controls">
			        	    <button onClick="SubmitInputField('textarea');" class="btn btn-success" type="button" id="submit-textarea-form">Add Input Field</button>
		        	    </div>
		            </div>						        							      					            	
	            </form>
	      	</div>
		</div>

		<div id="map-container" style="display: none;">
			<div class="form-group">
	    	    <form class="form-horizontal" name="content_form_map" id="content_form_map" action="#" method="post">
		            <div class="control-group">
		                <label class="control-label" for="name">Lang:</label>
		                <div class="controls">
			        	    <input type="text" id="git_map_lang" name="git_map_lang" for="lang" value="" placeholder="Enter Langitude">
		        	    </div>
		            </div>				
		            <div class="control-group">
		                <label class="control-label" for="name">Lat:</label>
		                <div class="controls">
			        	    <input type="text" id="git_map_lat" name="git_map_lat" for="lat" value="" placeholder="Enter Latitude">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Color:</label>
		                <div class="controls">
			        	    <input type="text" id="git_map_color" name="git_map_color" for="color" value="" placeholder="Select Color">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Height: (Pixel)</label>
		                <div class="controls">
			        	    <input type="text" id="git_map_height" name="git_map_height" for="height" value="" placeholder="Enter Height for Map">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Width: (Pixel)</label>
		                <div class="controls">
			        	    <input type="text" id="git_map_width" name="git_map_width" for="width" value="" placeholder="Enter Width for Map">
		        	    </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="name">Title:</label>
		                <div class="controls">
			        	    <input type="text" id="git_map_title" name="git_map_title" for="title" value="" placeholder="Enter Title for Map">
		        	    </div>
		            </div>
		           <div class="control-group btn-style">
		                <label class="control-label" for="name"></label>
		                <div class="controls">
		                	<input type="hidden" id="map_check" name="map_check" value="">
			        	    <button onClick="SubmitInputField('map');" class="btn btn-success" type="button" id="submit-map-form">Add Input Field</button>
		        	    </div>
		            </div>						        							      					            	
	            </form>
	      	</div>
		</div>

		<div id="captcha-container" style="display: none;">
			<div class="form-group">
	    	    <form class="form-horizontal" name="content_form_captcha" id="content_form_captcha" action="#" method="post">		            
		            <div class="control-group">
		                <label class="control-label" for="name">Title:</label>
		                <div class="controls">
			        	    <input type="text" id="git_captcha_title" name="git_captcha_title" for="title" value="" placeholder="Enter Title for Captcha">
		        	    </div>
		            </div>
		           <div class="control-group btn-style">
		                <label class="control-label" for="name"></label>
		                <div class="controls">
		                	<input type="hidden" id="captcha_check" name="captcha_check" value="">
			        	    <button onClick="SubmitInputField('captcha');" class="btn btn-success" type="button" id="submit-captcha-form">Add Input Field</button>
		        	    </div>
		            </div>						        							      					            	
	            </form>
	      	</div>
		</div>
	</div>
</div>
