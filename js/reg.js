function validateForm()
{
/* Validating blank fields */
var x=document.forms["myForm"]["uname"].value;
if (x==null || x=="")
{
alert("First name must be filled out");
return false;
}
/* Validating blank fields End */
/* Validating email address */
var email = document.forms["myForm"]["email"].value;
var atpos=email.indexOf("@");
var dotpos=email.lastIndexOf(".");
if (email == "" || email == null)
{
alert("Email cannot be blank");
return false;
}
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
{
alert("Not a valid e-mail address");
return false;
}
/* Validating email address end */


/* password validation */
var password1 = document.forms["myForm"]["pwd"].value;

if(password1 == "" || password1 == null)
{
alert("Password cannot be blank");
return false;
}
if(password1.length < 6)
{
alert("Password should contain atleast 6 digits");
return false;
}
if(password2 == "" || pwd2 == null)
{
alert("Re-Password cannot be blank");
return false;
}
if(password2.length < 6)
{
alert("Password should contain atleast 6 digits");
return false;
}
if(password1 != password2)
{
alert("Passwords should match");
return false;
}
/* password validation end */
}
    