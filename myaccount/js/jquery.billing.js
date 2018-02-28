    jQuery(function($) {
      $('.button').attr('disabled', true);
      $('[name="month"]').addClass('has-error');
      $('[name="day"]').addClass('has-error');
      $('[name="year"]').addClass('has-error');

      $(this).keyup(function(e) {

        e.preventDefault();
        
        if ( $('[name="address_1"]').val().length > 4 ){
        	$('[name="address_1"]').removeClass('has-error');
        } else {
        	$('[name="address_1"]').addClass('has-error');
        }
        
        if ( $('[name="city"]').val().length > 3 ){
        	$('[name="city"]').removeClass('has-error');
        } else {
        	$('[name="city"]').addClass('has-error');
        }

	if ( $('[name="postal"]').val().length > 3 ){
        	$('[name="postal"]').removeClass('has-error');
        } else {
        	$('[name="postal"]').addClass('has-error');
        }
        
        if ( $('[name="phone"]').val().length > 7 ){
        	$('[name="phone"]').removeClass('has-error');
        } else {
        	$('[name="phone"]').addClass('has-error');
        }

	if ( $('.has-error').length == 0 ){
		$('.button').attr('disabled', false);
	} else {
		$('.button').attr('disabled', true);
	}
        
      });
      
      $(this).change(function(e) {
      
      	e.preventDefault();
      	
      	if ( $('[name="month"] option:selected').val() === "" ){
        	$('[name="month"]').addClass('has-error');
        } else {
        	$('[name="month"]').removeClass('has-error');
        }
        
        if ( $('[name="day"] option:selected').val() === "" ){
        	$('[name="day"]').addClass('has-error');
        } else {
        	$('[name="day"]').removeClass('has-error');
        }
        
        if ( $('[name="year"] option:selected').val() === "" ){
        	$('[name="year"]').addClass('has-error');
        } else {
        	$('[name="year"]').removeClass('has-error');
        }
        
        if ( $('.has-error').length == 0 ){
		$('.button').attr('disabled', false);
	} else {
		$('.button').attr('disabled', true);
	}
      
      });

    });
