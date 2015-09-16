<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/contact.css" />
</head>
<body>

<!-- Form Code Start -->
<form id='contactus' action='/contacto_email' method='post' accept-charset='UTF-8'>
	<fieldset>
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<input type='hidden' name='CnRrspl1FyEylUj' value='CnRrspl1FyEylUj'/>
		<input type='text'  class='spmhidip' name='CnRrspl1FyEylUjCnRrspl1FyEylUj' />
		@if($errors->any())
			@foreach($errors->all() as $error)
			<span class='error'>{{ $error }}</span>
			@endforeach
		@endif
		<table>
			<tr>
				<td><input type='text' name='email' id='email' placeHolder="Email" value="{{ Input::old('email') }}" value='Email' maxlength="50" onFocus="if(this.value=='Email')this.value='';" onBlur="if(this.value=='')this.value='Email';"/></td>
				<td style="text-align:right"><input type='submit' name='Submit' value='Submit' class="button highlight action"/></td>
			</tr>
		</table>
	</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("email","req","Email required");

    frmvalidator.addValidation("email","email","Email required");

// ]]>
</script>

<script type='text/javascript' src='/js/gen_validatorv31.js'></script>
</body>
</html>