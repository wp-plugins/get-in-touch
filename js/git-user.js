/******* Jquery No Conflict Function *******/
window.$ = jQuery.noConflict();	

// Global Variable Declariation
var Status;
var Show = 'show';
var Hide = 'hide';

$(function(){
	// Dont allow to enter Character in Contact Us Phone Number Field
	$('#git-ui-contact-form #phone .required').on('input', function (event) { 
    	this.value = this.value.replace(/[^0-9]/g, '');
	});

	$('#git-user-container .git-fields-container p').on('click', function(){
		$(this).fadeOut();
		$(this).parent().siblings().removeClass('git-error');
	});
});

// Function to show and hide Loader
function Loader(Status)
{
	if(Status == 'show')
	{
		$('.git-loader').fadeIn();
	}
	if(Status == 'hide')
	{
		$('.git-loader').fadeOut();
	}
}

function initialize() 
{
	var lang = $('#git_map_lang').val();
	var lat = $('#git_map_lat').val();	
	var title = $('#git_map_title').val();	

  	var myLatlng = new google.maps.LatLng(lang,lat);
  	
  	var map_can = document.getElementById('map_can');
  	var mapOptions = {
    	zoom: 12,
    	draggable: true,        
    	scrollwheel: false,        
    	clickable: false, 
    	center: myLatlng    	
  	};
  	var map = new google.maps.Map(map_can, mapOptions);

  	var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: title
    });
 }

$(function(){
	var git_map_check = $('#git_map_check').val();
	if(git_map_check === 'true')
	{
		google.maps.event.addDomListener(window, 'load', initialize);
	}	
});	

// Get URL parameter
function GetUrlValueUser(Getvalue)
{
	var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == Getvalue) 
        {
            return sParameterName[1];
        }
    }
}

function StatusInterval()
{
	setTimeout(function(){
		$('.error-text').fadeOut(3000);	
		$('.mailerror-text').fadeOut(3000);			
		$('.thanks-text').fadeOut(3000);
	},5000);
}

//Validate Form Fields before Submit
function GITSubmitContactForm()
{
	window.$ = jQuery.noConflict();		
	var formhide = $('#git_form_hide').val();
	var url = $("#git_url_send_mail").val();
	var formid = $("#git_contact_form_formid").val();	
	var i;
	var contactformdata = $('#git-ui-contact-form').serializeArray();    	    	
	var keyobj = {};
	var dataobj = {}; 
	var formdataobj = {};       		
	var haserror = false;
	var emailreg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var textfield = $('.git_textfield');
	var phone = $('.git_phone');
	var mail = $('.git_emailtest');
	var textarea = $('.git_textareatest');
	var thanktext = $('.git_thanks_text');
	var errtextfield = $('.git_error_text');
	var errphone = $('.git_error_phone');
	var errmail = $('.git_error_mail');
	var errtextarea = $('.git_error_textarea');
	var errcaptcha  = $('.git_error_captcha');
	var formname = $('#git-ui-contact-form');
	var dbcheck = $('#git_db_check').val();	
	var captcahres = $('#recaptcha_response_field').val();
	var privatekey = $('#git_captcha_privatekey').val();
	var j = 0;

	if(captcahres === '')
	{
		errcaptcha.text('Please enter valid string');
		errcaptcha.fadeIn();
		haserror = true;
	}

	if(formname.find(textfield).hasClass('required'))
	{
		if(formname.find(textfield).val() === '')
		{			
			formname.find(textfield).addClass('git-error');
			formname.find(errtextfield).fadeIn();
			haserror = true;
		}
		else
		{
			formname.find(errtextfield).fadeOut();			
			formname.find(textfield).removeClass('git-error');
		}
	}
	if(formname.find(phone).hasClass('required'))
	{
		if(formname.find(phone).val() === '')
		{
			formname.find(phone).addClass('git-error');
			formname.find(errphone).fadeIn();
			haserror = true;
		}
		else
		{
			formname.find(errphone).fadeOut();		
			formname.find(phone).removeClass('git-error');	
		}
	}
	if(formname.find(mail).hasClass('required'))
	{
		if(formname.find(mail).val() === '')
		{
			formname.find(mail).addClass('git-error');
			formname.find(errmail).fadeIn();			
			haserror = true;
		}
		else if(!emailreg.test(formname.find(mail).val()))
		{
			formname.find(mail).addClass('git-error');
			formname.find(errmail).fadeIn();			
			haserror = true;
		}
		else
		{
			formname.find(mail).removeClass('git-error');
			formname.find(errmail).fadeOut();			
		}
	}
	if(formname.find(textarea).hasClass('required'))
	{
		if(formname.find(textarea).val() === '')
		{
			formname.find(textarea).addClass('git-error');
			formname.find(errtextarea).fadeIn();
			haserror = true;
		}
		else
		{
			formname.find(textarea).removeClass('git-error');
			formname.find(errtextarea).fadeOut();			
		}
	}

	$(contactformdata).each(function(i, field){			
		formdataobj[j] = field.value;	
	  	dataobj = field.value;	
	  	keyobj = field.name;	    					 
	  	++j;	  	
	    StatusInterval();
	});		

	if(haserror === false)
    {
    	Loader(Show);		
		$.ajax({
	        url: UserAjax.url,
	       	type: 'post',       	    
		    data: 
			    {
			    	usermail:mail.val(),
			    	dataobj :formdataobj,
			    	form_id :formid,
			    	db_check :dbcheck,
			    	captchadata: formname.serializeArray()
		    	},
	        success: function(data, status) {      	        	
	        			if(data === 'incorrect-captcha-sol')
	        			{
	        				errcaptcha.text('Please enter valid string');
	        				errcaptcha.fadeIn();
	        				Recaptcha.reload();
	        				return false;
	        			}
	        			else
	        			{
	        				if(formhide === 'true')
		        			{
		        				$('#git-ui-contact-form').hide();
		        			}
		        			thanktext.fadeIn('slow');	        				        			
		        			$('#git-ui-contact-form')[0].reset();
		        			Recaptcha.reload();
	        			}	        				        			
	                 },
	        error: function(data, status){ 
	        	Recaptcha.reload();
	           }	              				
	    	});	
	        Loader(Hide);
			StatusInterval();		
	}		
	return false;
}