    jQuery(function($) {
      $('#cc_number').payment('formatCardNumber');
      $('#cvv2_number').payment('formatCardCVC');
      $('.button').attr('disabled', true);

      $.fn.toggleInputError = function(erred) {
        this.parent('.field').toggleClass('has-error', erred);
        return this;
      };

      $(this).keyup(function(e) {
      
        e.preventDefault();

        var cardType = $.payment.cardType($('#cc_number').val());
        $('#cc_number').toggleInputError(!$.payment.validateCardNumber($('#cc_number').val()));
        $('#cvv2_number').toggleInputError(!$.payment.validateCardCVC($('#cvv2_number').val(), cardType));
        
        if ( $('[name="cc_holder"]').val().length > 5 ){
        	$('#cc_holder').removeClass('has-error');
        } else {
        	$('#cc_holder').addClass('has-error');
        }

        $('#cc_number').addClass($(cardType).length ? '' : 'valid');
        if ( cardType === 'amex' ){
        	$('#cvv2_number').attr('maxlength', '4');
        	$('#cvv2_number').addClass('amex');
        } else {
        	$('#cvv2_number').attr('maxlength', '3');
        	$('#cvv2_number').removeClass();
        }

      	if ( $('.has-error').length == 0 ){
	       	$('.button').attr('disabled', false);
        } else {
		      $('.button').attr('disabled', true);
        }
     
      });

    });