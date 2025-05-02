function valid()
{
if(document.frm.name.value=="")
{
alert('Please enter your Name')
document.frm.name.focus();
return false;
}
if(document.frm.fname.value=="")
{
alert('Please enter your FirstName')
document.frm.fname.focus();
return false;
}
if(document.frm.lname.value=="")
{
alert('Please enter your LastName')
document.frm.lname.focus();
return false;
}
if(document.frm.email.value=="")
{
alert('Please enter your Email')
document.frm.email.focus();
return false;
}
// check valid email address via R.E 
var em=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

if(!em.test(document.frm.email.value))
{
alert('Please enter your valid email address here')
document.frm.email.focus();
return false;
}
    

if(document.frm.password.value=="")
{
alert('Please enter your Password')
document.frm.password.focus();
return false;
}

}