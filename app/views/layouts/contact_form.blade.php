<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/contact.css" />
</head>
<body>
<!-- Form Code Start -->
<form id='contactus' action='/contacto' method='post' accept-charset='UTF-8'>
	<fieldset>
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<input type='hidden' name='CnRrspl1FyEylUj' value='CnRrspl1FyEylUj'/>
		<input type='text'  class='spmhidip' name='CnRrspl1FyEylUjCnRrspl1FyEylUj' />
		@if($errors->any())
			@foreach($errors->all() as $error)
			<span class='error'>{{ $error }}</span>
			@endforeach
		@endif
		<input type='text' name='name' id='name' placeHolder="Name" value="{{ Input::old('name') }}" maxlength="50" onFocus="if(this.value=='Name')this.value='';" onBlur="if(this.value=='')this.value='Name';"/><br/>
		<input type='text' name='email' id='email' placeHolder="Email" value="{{ Input::old('email') }}" value='Email' maxlength="50" onFocus="if(this.value=='Email')this.value='';" onBlur="if(this.value=='')this.value='Email';"/><br/>
		<textarea rows="10" cols="50" name='message' id='message' placeHolder="Message...">{{ Input::old('message') }}</textarea>
		<input type='submit' name='Submit' value='Submit' class="button highlight small"/>
	</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

// ]]>
</script>

<script type='text/javascript' src='/js/gen_validatorv31.js'></script>
</body>
</html>