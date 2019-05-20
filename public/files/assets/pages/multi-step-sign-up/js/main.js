/* services duration */
$(document).ready(function(){
    var maxField2 = 5; //Input fields increment limitation
    var addButton2 = $('.add_button2'); //Add button selector
    var wrapper2 = $('.field_wrapper2'); //Input field wrapper
    var fieldHTML2 = '<div class="row"><div class="col-md-4"><div class="form-group"><input type="text" name="service_name[]" id="service_name[]" class="form-control" placeholder="Service name"></div></div><div class="col-md-4"><div class="form-group"><select class="form-control service_duration" name="service_duration[]" id="service_duration"><option value="">Duration</option><option value="15 minutes">15 minutes</option><option value="30 minutes">30 minutes</option><option value="45 minutes">45 minutes</option><option value="1 hour">1 hour</option></select></div></div><div class="col-md-3"><div class="form-group"><input type="text" name="service_price[]" id="service_price[]" class="form-control" placeholder="Service price"></div></div><a href="javascript:void(0);" class="remove_button2 text-danger">Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton2).click(function(){
        //Check maximum number of input fields
        if(x < maxField2){
            x++; //Increment field counter
            $(wrapper2).append(fieldHTML2); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper2).on('click', '.remove_button2', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});


/* services staff name */
$(document).ready(function(){
    var maxField = 5; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="row"><div class="col-md-5"><div class="form-group"><input type="text" name="onboard_staff_name[]" class="form-control" placeholder="Staff name"></div></div><div class="col-md-5"><div class="form-group"><input type="text" name="onboard_staff_email[]" class="form-control" placeholder="Staff email"></div></div><a href="javascript:void(0);" class="remove_button text-danger">Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});

/* services hour*/

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").on('click',function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
				'transform': 'scale('+scale+')',
				'position': 'absolute'
			});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").on('click',function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

//$(".submit").on('click',function(){
function submitServiceValue(){
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	var sun_business_hours_am = $('#sun_business_hours_am').val();
	var sun_business_hours_pm = $('#sun_business_hours_pm').val();

	var mon_business_hours_am = $('#mon_business_hours_am').val();
	var mon_business_hours_pm = $('#mon_business_hours_pm').val();

	var tue_business_hours_am = $('#tue_business_hours_am').val();
	var tue_business_hours_pm = $('#tue_business_hours_pm').val();

	var wed_business_hours_am = $('#wed_business_hours_am').val();
	var wed_business_hours_pm = $('#wed_business_hours_pm').val();

	var thu_business_hours_am = $('#thu_business_hours_am').val();
	var thu_business_hours_pm = $('#thu_business_hours_pm').val();

	var fri_business_hours_am = $('#fri_business_hours_am').val();
	var fri_business_hours_pm = $('#fri_business_hours_pm').val();

	var sat_business_hours_am = $('#sat_business_hours_am').val();
	var sat_business_hours_pm = $('#sat_business_hours_pm').val();

	var tue_business_hours_am = $('#tue_business_hours_am').val();
	var tue_business_hours_pm = $('#tue_business_hours_pm').val();

	/*var n = $("input[name^= 'onboard_staff_name']").length;
	var array = $("input[name^='onboard_staff_name']");*/
	/*for(i=0; i < n; i++) {

	   card_value = array.eq(i).val(); 
	   //  it'd be .eq(i).val(); (if you wanted the text value)
	   alert(card_value);
	}*/
	/*var n = $("input[name^= 'onboard_staff_email']").length;
	var array = $("input[name^='onboard_staff_email']");

	for(i=0; i < n; i++) {

	   card_value = array.eq(i).val(); 
	   //  it'd be .eq(i).val(); (if you wanted the text value)
	   alert(card_value);
	}*/
	var onboard_staff_name = [];
	$("input[name^='onboard_staff_name']").each(function() {
	    console.log($(this).val());
	    onboard_staff_name.push($(this).val());
	});
	//onboard_staff_name= JSON.stringify(onboard_staff_name);

	var onboard_staff_email = [];
	$("input[name^='onboard_staff_email']").each(function() {
	    console.log($(this).val());
	    onboard_staff_email.push($(this).val());
	});
	//onboard_staff_email= JSON.stringify(onboard_staff_email);

	var service_name = [];
	$("input[name^='service_name']").each(function() {
	    console.log($(this).val());
	    service_name.push($(this).val());
	});
	//service_name= JSON.stringify(service_name);

	/*var service_duration = [];
	$("#service_duration :selected").each(function() {
	    console.log($(this).val());
	    service_duration.push($(this).val());
	});
	service_duration= JSON.stringify(service_duration);*/

	var service_duration = [];
    $.each($(".service_duration option:selected"), function(){   
    	console.log($(this).val());     
        service_duration.push($(this).val());
    });

	var service_price = [];
	$("input[name^='service_price']").each(function() {
	    console.log($(this).val());
	    service_price.push($(this).val());
	});
	//service_price= JSON.stringify(service_price);

	alert('sss');
	//var formData = $("input[name^='onboard_staff_email']").serialize();
	

	$.ajax({
            type:'POST',
            url:'/serviceOnboard',
            data: {_token:CSRF_TOKEN, sun_business_hours_am:sun_business_hours_am, sun_business_hours_pm:sun_business_hours_pm, mon_business_hours_am:mon_business_hours_am, mon_business_hours_pm:mon_business_hours_pm, tue_business_hours_am:tue_business_hours_am, tue_business_hours_pm:tue_business_hours_pm, wed_business_hours_am:wed_business_hours_am, wed_business_hours_pm:wed_business_hours_pm, thu_business_hours_am:thu_business_hours_am, thu_business_hours_pm:thu_business_hours_pm, fri_business_hours_am:fri_business_hours_am, fri_business_hours_pm:fri_business_hours_pm, sat_business_hours_am:sat_business_hours_am, sat_business_hours_pm:sat_business_hours_pm, onboard_staff_name:onboard_staff_name, onboard_staff_email:onboard_staff_email, service_name:service_name, service_duration:service_duration, service_price:service_price },
            dataType:'json',
            success:function(data){
                console.log(data.success);
                console.log(data.message);
                console.log(data.service);
                console.log(data.value);
                if(data.success == 'ok'){
                    console.log('ok, success');
                }else{
                    console.log('error return');
                }
               
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            } 
        });
	
	return false;
}