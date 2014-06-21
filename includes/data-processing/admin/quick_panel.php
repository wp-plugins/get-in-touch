<div id="quick-panel">
	<p class="selected-field"></p>
	<span id="close-quick-panel">X</span>
	<div class="input-fields-options">		
		<div class="text-field-container" style="display: none;">			
    	    <form name="content_form_text_fields" id="content_form_text_fields" action="#" method="post">					    	    	 
	            <table>
	            	<tr>
	            		<td>Name</td>
	            		<td>Id</td>
	            		<td>Class</td>
	            		<td>Size</td>	            		
	            	</tr>
	            	<tr>
	            		<td>
	            			<input type="text" id="git_text_name" name="git_text_name" data-for="name" value="" placeholder="Name">	        	    
	            		</td>
	            		<td>
	            			<input type="text" id="git_text_id" name="git_text_id" data-for="id" value="" placeholder="ID">	        	    
	            		</td>
	            		<td>
	            			<input type="text" id="git_text_class" name="git_text_class" data-for="class" value="" placeholder="Class">
	            		</td>
	            		<td>
	            			<input type="text" id="git_text_size" name="git_text_size" data-for="size" value="" placeholder="Size">
	            		</td>	            		
	            	</tr>
	            	<tr>
	            		<td>Maxlength</td>
	            		<td>Label</td>
	            		<td>Placeholder</td>
	            		<td>Is Required Field</td>	            		
	            	</tr>
	            	<tr>
	            		<td>
	            			<input type="text" id="git_text_maxlen" name="git_text_maxlen" data-for="maxlen" value="" placeholder="Max Length">
	            		</td>
	            		<td>
	            			<input type="text" id="git_text_label" name="git_text_label" data-for="label" value="" placeholder="Label">
	            		</td>
	            		<td>
	            			<input type="text" id="git_text_placeholder" name="git_text_placeholder" data-for="placeholder" value="" placeholder="placeholder">
	            		</td>
	            		<td>
	            			<input type="checkbox" checked id="git_text_check" name="git_text_check">
	            		</td>
	            	</tr>
	            </table>	                	            	            
		      	<button onClick="SubmitInputField('text-field');" class="git-btn" type="button" id="submit-text-field-form">Add Input Field</button>	        	    
	            <input type="hidden" name="git_text_hidden_url" id="git_text_hidden_url" value="<?php echo plugins_url().'/get-in-touch/includes/data-processing/admin/input_data_post.php'; ?>" />        							      					            	
            </form>
		</div>

		<div class="email-container" style="display: none;">			
    	    <form class="form-horizontal" name="content_form_email" id="content_form_email" action="#" method="post">
	            <table>
	            	<tr>
	            		<td>Name</td>
	            		<td>Id</td>
	            		<td>Class</td>
	            		<td>Size</td>	            		
	            	</tr>
	            	<tr>
	            		<td>
	            			<input type="text" id="git_email_name" name="git_email_name" data-for="name" value="" placeholder="Name">
	            		</td>
	            		<td>
	            			<input type="text" id="git_email_id" name="git_email_id" data-for="id" value="" placeholder="ID">
	            		</td>
	            		<td>
	            			<input type="text" id="git_email_class" name="git_email_class" data-for="class" value="" placeholder="Class">
	            		</td>
	            		<td>
	            			<input type="text" id="git_email_size" name="git_email_size" data-for="size" value="" placeholder="Size">
	            		</td>	            		
	            	</tr>
	            	<tr>
	            		<td>Maxlength</td>
	            		<td>Label</td>
	            		<td>Placeholder</td>
	            		<td>Is Required Field</td>	            		
	            	</tr>
	            	<tr>
	            		<td>
	            			<input type="text" id="git_email_maxlen" name="git_email_maxlen" data-for="maxlen" value="" placeholder="Max Length">
	            		</td>
	            		<td>
	            			<input type="text" id="git_email_label" name="git_email_label" data-for="label" value="" placeholder="Label">
	            		</td>
	            		<td>
	            			<input type="text" id="git_email_placeholder" name="git_email_placeholder" data-for="placeholder" value="" placeholder="placeholder">
	            		</td>
	            		<td>
	            			<input type="checkbox" checked id="git_email_check" name="git_email_check">
	            		</td>
	            	</tr>
	            </table>	          	            	            
	            <button onClick="SubmitInputField('email');" class="git-btn" type="button" id="submit-email-form">Add Input Field</button>
				<input type="hidden" id="git_email_hidden_type" name="git_email_hidden_type" value="email">		        							      					            	
            </form>	      	
		</div>

		<div class="phone-container" style="display: none;">			
    	    <form class="form-horizontal" name="content_form_phone" id="content_form_phone" action="#" method="post">					    	    	 
	            <table>
	            	<tr>
	            		<td>Name</td>
	            		<td>Id</td>
	            		<td>Class</td>
	            		<td>Size</td>	            		
	            	</tr>
	            	<tr>
	            		<td>
	            			<input type="text" id="git_phone_name" name="git_phone_name" data-for="name" value="" placeholder="Name">
	            		</td>
	            		<td>
	            			<input type="text" id="git_phone_id" name="git_phone_id" data-for="id" value="" placeholder="ID">
	            		</td>
	            		<td>
	            			<input type="text" id="git_phone_class" name="git_phone_class" data-for="class" value="" placeholder="Class">
	            		</td>
	            		<td>
	            			<input type="text" id="git_phone_size" name="git_phone_size" data-for="size" value="" placeholder="Size">
	            		</td>	            		
	            	</tr>
	            	<tr>
	            		<td>Maxlength</td>
	            		<td>Label</td>
	            		<td>Placeholder</td>
	            		<td>Is Required Field</td>	            		
	            	</tr>
	            	<tr>
	            		<td>
	            			<input type="text" id="git_phone_maxlen" name="git_phone_maxlen" data-for="maxlen" value="" placeholder="Max Length">
	            		</td>
	            		<td>
	            			<input type="text" id="git_phone_label" name="git_phone_label" data-for="label" value="" placeholder="Label">
	            		</td>
	            		<td>
	            			<input type="text" id="git_phone_placeholder" name="git_phone_placeholder" data-for="placeholder" value="" placeholder="placeholder">
	            		</td>
	            		<td>
	            			<input type="checkbox" checked id="git_phone_check" name="git_phone_check">
	            		</td>
	            	</tr>
	            </table>
		        <button onClick="SubmitInputField('phone');" class="git-btn" type="button" id="submit-phone-form">Add Input Field</button>	        	    
            </form>	      	
		</div>

		<div class="textarea-container" style="display: none;">			
    	    <form class="form-horizontal" name="content_form_textarea" id="content_form_textarea" action="#" method="post">					    	    	 
	            <table>
	            	<tr>
	            		<td>Name</td>
	            		<td>Id</td>
	            		<td>Class</td>
	            		<td>Cols</td>	            		
	            	</tr>
	            	<tr>
	            		<td>
	            			<input type="text" id="git_textarea_name" name="git_textarea_name" data-for="name" value="" placeholder="Name">
	            		</td>
	            		<td>
	            			<input type="text" id="git_textarea_id" name="git_textarea_id" data-for="id" value="" placeholder="ID">
	            		</td>
	            		<td>
	            			<input type="text" id="git_textarea_class" name="git_textarea_class" data-for="class" value="" placeholder="Class">
	            		</td>
	            		<td>
	            			<input type="text" id="git_textarea_cols" name="git_textarea_cols" data-for="column" value="" placeholder="Column">
	            		</td>	            		
	            	</tr>
	            	<tr>
	            		<td>Rows</td>
	            		<td>Label</td>
	            		<td>Placeholder</td>
	            		<td>Is Required Field</td>	            		
	            	</tr>
	            	<tr>
	            		<td>
	            			<input type="text" id="git_textarea_rows" name="git_textarea_rows" data-for="row" value="" placeholder="Row">
	            		</td>
	            		<td>
	            			<input type="text" id="git_textarea_label" name="git_textarea_label" data-for="label" value="" placeholder="Label">
	            		</td>
	            		<td>
	            			<input type="text" id="git_textarea_placeholder" name="git_textarea_placeholder" data-for="placeholder" value="" placeholder="placeholder">
	            		</td>
	            		<td>
	            			<input type="checkbox" checked id="git_textarea_check" name="git_textarea_check">		        	    
	            		</td>
	            	</tr>
	            </table>
	            <button onClick="SubmitInputField('textarea');" class="git-btn" type="button" id="submit-textarea-form">Add Input Field</button>	        	
            </form>	      	
		</div>

		<div class="map-container" style="display: none;">			
    	    <form class="form-horizontal" name="content_form_map" id="content_form_map" action="#" method="post">
	           	 <table>
	            	<tr>
	            		<td>Lang</td>
	            		<td>Lat</td>
	            		<td>Height: (Pixel)</td>   	            		         	
	            		<td>Width: (Pixel)</td>   
	            	</tr>
	            	<tr>
	            		<td>
	            			<input type="text" id="git_map_lang" name="git_map_lang" data-for="lang" value="" placeholder="Enter Langitude">
	            		</td>
	            		<td>
	            			<input type="text" id="git_map_lat" name="git_map_lat" data-for="lat" value="" placeholder="Enter Latitude">
	            		</td>
	            		<td>
	            			<input type="text" id="git_map_height" name="git_map_height" data-for="height" value="" placeholder="Enter Height for Map">
	            		</td>
	            		<td>
	            			<input type="text" id="git_map_width" name="git_map_width" data-for="width" value="" placeholder="Enter Width for Map">
	            		</td>            		
	            	</tr>
	            	<tr>
	            		<td>Title</td>	            		            	
	            	</tr>
	            	<tr>	            		
	            		<td>
	            			<input type="text" id="git_map_title" name="git_map_title" data-for="title" value="" placeholder="Enter Title for Map">
	            		</td>	            		
	            	</tr>
	            </table>	            
	            <input type="hidden" id="map_check" name="map_check" value="">
		       	<button onClick="SubmitInputField('map');" class="git-btn" type="button" id="submit-map-form">Add Input Field</button>	        	 
            </form>	      	
		</div>
	</div>
</div>
