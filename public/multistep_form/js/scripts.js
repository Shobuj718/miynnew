
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/1.jpg");
    
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$.backstretch("resize");
    });
    
    /*
        Form
    */
    $('.registration-form fieldset:first-child').fadeIn('slow');
    
    $('.registration-form input[type="text"], .registration-form input[type="password"], .registration-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    // next step
    $('.registration-form .btn-next').on('click', function() {
    	var parent_fieldset = $(this).parents('fieldset');
    	var next_step = true;
    	
    	parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function() {
    		if( $(this).val() == "" ) {
    			$(this).addClass('input-error');
    			next_step = false;
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    	if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
	    		$(this).next().fadeIn();
	    	});
    	}
    	
    });
    
    // previous step
    $('.registration-form .btn-previous').on('click', function() {
    	$(this).parents('fieldset').fadeOut(400, function() {
    		$(this).prev().fadeIn();
    	});
    });
    
    // submit
    $('.registration-form').on('submit', function(e) {
    	
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        

        var industry_id = $('#industry_id').val();
        var profession_id = $('#profession_id').val();
        var country_with_code = $('#country_with_code').val();
        var phone_number = $('#phone_number').val();
        var persons = $('#persons').val();
        var web_url = $('#web_url').val();
        var address = $('#address').val();
        var present_number_address = $('#present_number_address:checked').val();
        var user_id = $('#user_id').val();

        var manage_client_records = $('#manage_client_records:checked').val();
        var send_email_sms_promotions = $('#send_email_sms_promotions:checked').val();
        var send_email_sms_reminders = $('#send_email_sms_reminders:checked').val();
        var add_online_scheduling = $('#add_online_scheduling:checked').val();
        var invoices_estimates = $('#invoices_estimates:checked').val();
        var accept_payments = $('#accept_payments:checked').val();

        alert(industry_id);
        alert(manage_client_records);

         $.ajax({
                type:'POST',
                url:'{{url("/business")}}',
                data:{_token:CSRF_TOKEN, industry_id:industry_id, profession_id:profession_id, country_with_code:country_with_code, phone_number:phone_number, persons:persons, web_url:web_url, address:address, present_number_address:present_number_address, user_id:user_id, manage_client_records:manage_client_records, send_email_sms_promotions:send_email_sms_promotions, send_email_sms_reminders:send_email_sms_reminders, add_online_scheduling:add_online_scheduling, invoices_estimates:invoices_estimates, accept_payments:accept_payments },
                dataType:'json',
                success:function(data){
                    console.log(data.success);
                    console.log(data.message);
                    console.log(data.profession_id);
                    if(data.success == 'ok2'){
                        window.location = '/dashboard';
                    }else{
                        $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                    }
                    $('.submitBtn').removeAttr("disabled");
                    $('.modal-body').css('opacity', '');
                }
            });


    	$(this).find('input[type="text"], input[type="password"], textarea').each(function() {
            alert('hi modal');
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });
    
    
});
