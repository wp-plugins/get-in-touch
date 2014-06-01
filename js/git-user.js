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
});

// Function to show and hide Loader
function Loader(Status)
{
	if(Status == 'show')
	{
		$('.loader').fadeIn();
	}
	if(Status == 'hide')
	{
		$('.loader').fadeOut();
	}
}

function initialize() 
{
	var lang = $('#map_lang').val();
	var lat = $('#map_lat').val();
	var color = $('#map_color').val();
	var title = $('#map_title').val();
  // Create an array of styles.
  var styles = [
    {
      stylers: [
        { hue: "#cccccc" },
        { saturation: -20 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },
    {
      featureType: "water",          
      stylers: [
        { color: "#"+color }           
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

  var myLatlng = new google.maps.LatLng(lang,lat);

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,{
                                                          name: "Styled Map"
                                                        });

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var map_can = document.getElementById('map_can');
  var mapOptions = {
    zoom: 12,
    draggable: true,        
    scrollwheel: false,        
    clickable: false, 
    center: myLatlng,
    mapTypeControlOptions: {
    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  var map = new google.maps.Map(map_can, mapOptions);

  var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Get In Touch'
    });

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
 }

var urlpara = GetUrlValueUser('page');
var checkIsDashboard = $('#IdDashboard').val();

if(typeof(urlpara) === "undefined" && checkIsDashboard !== 'true')
{	
	$(function(){
		google.maps.event.addDomListener(window, 'load', initialize);
	});	
}

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
	var url = $("#url_send_mail").val();
	var formid = $("#contact_form_formid").val();	
	var i;
	var ContactFormData = $('#git-ui-contact-form').serializeArray();    	    	
	var KeyObj = {};
	var DataObj = {}; 
	var FormDataObj = {};       		
	var hasError = false;
	var emailReg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var thanktext = $('.thanks-text');
	var errtext = $('.error-text');
	var mailerrtext = $('.mailerror-text');
	var FormName = $('#git-ui-contact-form');
	var DBCheck = $('#db_check').val();
	var j = 0;
	var EmailVal = $('.emailtest').val();
	var PhoneVal = $('.phone').val();

	$(ContactFormData).each(function(i, field){			
		FormDataObj[j] = field.value;	
	  	DataObj = field.value;	
	  	KeyObj = field.name;	    					 
	  	++j;	  	

	  	if(DataObj == '')
	    {		 		    	
	    	if(FormName.find('textarea').hasClass('required'))
	    	{
	    		errtext.fadeIn('slow');	        		    		
				hasError = true;
	    	}
	    	else if(FormName.find('input').hasClass('required'))
	    	{
	    		errtext.fadeIn('slow');
				hasError = true;
	    	}	    		    		
	    }
	    else if(!emailReg.test(EmailVal))
	    {	    	
	    	mailerrtext.fadeIn('slow');	        	
			hasError = true;
	    }
	    StatusInterval();
	});		

	if(hasError === false)
    {
    	Loader(Show);
		errtext.hide();
		mailerrtext.hide();			
		$.ajax({
	        url: UserAjax.url,
	       	type: 'post',       	    
		    data: 
			    {
			    	usermail:EmailVal,
			    	DataObj :FormDataObj,
			    	form_id :formid,
			    	db_check :DBCheck
		    	},
	        success: function(data, status) {        	                			        		        			

	        			thanktext.fadeIn('slow');
	        			$('#submit-contact-form').hide();
	        			$('#git-ui-contact-form').hide();
	        			$('#git-ui-contact-form')[0].reset();
	                 },
	        error: function(data, status){ 
	        	alert(data, status);
	           }	              				
	    	});	
	        Loader(Hide);
			StatusInterval();		
	}		
	return false;
}