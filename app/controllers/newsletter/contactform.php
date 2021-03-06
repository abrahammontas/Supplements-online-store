<?PHP

require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('youremail@yourdomain.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	<title>Newsletter</title>
	<style type="text/css">@import url("http://fonts.googleapis.com/css?family=PT+Sans");</style>
	<style type="text/css">@import url("http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz");</style>
	<link rel="stylesheet" type="text/css" href="contact.css" />
	<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      
</head>
<body>

<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
	<fieldset>
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
		<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
		<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
		<input type='text' name='email' id='email' value='Your Email' maxlength="50" onFocus="if(this.value=='Your Email')this.value='';" onBlur="if(this.value=='')this.value='Your Email';"/>
		<input type='submit' name='Submit' value='Subscribe' class="button highlight small"/>
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

</body>
</html>