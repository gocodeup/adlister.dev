// displays error messages after input that failed
function displayValidateFailMessage(input, message)
{
	input.addClass('has-error');
	input.after('<span class="custom-error-message">' + message + '</span>');
}

// removes error messages that were displayed from a previous attempt
function removeDisplayedErrorMessages(form)
{
	form.find('.custom-error-message').remove();
}

// removes error class from inputs in the form
function removeInputErrorClass(form)
{
	var error_inputs = form.find('.has-error');
	error_inputs.each(function () {
		$(this).removeClass('has-error');
	})
}

// removes white space before and after input's value
function trimInputValues(form)
{
	var inputs = form.find(':input');
	inputs.each(function ()
	{
		var value = $(this).val();
		$(this).val( value.trim() );
	})
}

// the inputs value must not be only whitespace or nothing
function required(input)
{

	var form = input.closest('form');
	var required_message = form.data('requiredMessage');

	if ( input.val().search(/[\S]+/) < 0 || ( input.prop('type') == 'checkbox' && ! input.prop('checked') ))
	{
		displayValidateFailMessage( input, required_message );
		return false;
	}
	return true;
}

// input's value can be anything
function anything(input)
{
	if ( input.val() != '' && input.val().search(/[\s\S]+/) < 0 )
	{
		displayValidateFailMessage( input, input.data('message') );
		return false;
	}
	return true;
}

// looks for international phone numbers and their formatting
function phone(input)
{
	if ( input.val().search(/^((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?[0-9]{1,12}){1,2}(\s*(ext|x)\s*\.?:?\s*([0-9]+))?$/) < 0 )
	{
		displayValidateFailMessage( input, input.data('message') );
		return false;
	}
	return true;
}

// only valid emails will pass
// WILL PASS: username@domain.com
// WILL FAIL: username@domain
function email(input)
{
	if ( input.val().search(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i) < 0 )
	{
		displayValidateFailMessage( input, input.data('message') );
		return false;
	}
	return true;
}

// only valid domains will pass
function domain(input)
{
	if ( ! (input.val().search(/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i) < 0) )
	{
		displayValidateFailMessage( input, input.data('message') );
		return false;
	}
	return true;
}

// only whole numbers in the input's value
function number(input)
{
	if ( ! (input.val().search(/[^0-9]/) < 0) )
	{
		displayValidateFailMessage( input, input.data('message') );
		return false;
	}
	return true;
}

// only whole numbers or decimals in the input's value
function decimal(input)
{
	if ( ! (input.val().search(/[^0-9.]/) < 0) )
	{
		displayValidateFailMessage( input, input.data('message') );
		return false;
	}
	return true;
}

// only currency(numbers, decimals, commas and $) in the input's value
function currency(input)
{
	if ( ! (input.val().search(/[^0-9.,$]/) < 0) )
	{
		displayValidateFailMessage( input, input.data('message') );
		return false;
	}
	return true;
}

// runs validation functions on specific input given
function validateInput(input)
{
	// only runs required check on inputs with data-required and if it fails returns false to skip next validation step
	if( input.is('[data-required]') && ! required( input ) )
	{
		return false;
	}

	// gets validation type from data attribute
	var validate_function = input.data('validate');
	if (validate_function != null) {
		// window[ funciton_name ]( arguments )
		return window[validate_function]( input );
	}
	return true;
}

// resets form, trims input values and loops through all inputs to send to validation functions
function validateForm(form)
{
	var passed = true;
	removeDisplayedErrorMessages( form );
	removeInputErrorClass( form );
	trimInputValues( form );

	var validate_inputs = form.find(':input');
	validate_inputs.each(function ()
	{
		if( ! validateInput( $(this) ) )
		{
			passed = false;
		}
	})

	return passed;
}

// submit listener for all forms with data-validation attribute to run validation code
$(document).on('submit', 'form[data-validation]', function (e)
{
	var form = $(this);
	var form_button = $(this).find('button');
	form_button.html('Sending...');

	if( ! validateForm( form ) ) {
		e.preventDefault();
		form_button.html('Submit');
	}
})