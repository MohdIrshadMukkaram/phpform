function validateForm() {
var x = document.forms["form1"]["name"].value;
var y = document.forms["form1"]["mobile"].value;
var z = document.forms["form1"]["email"].value;
var a = document.forms["form1"]["pin"].value;
if (x == "") {
alert("Name must be filled out");
return false;
}
else if (y.length > 10) {
alert("Enter 10 digits in Mobile Number field");
return false;
}
else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(z)))
{
alert("You have entered an invalid email address!")
return false;
}
else if (a.length > 6)
{
alert("Enter 6 digits of pin code")
return false;
}

}
$('.toast').toast({delay: 2000});
$('.toast').toast('show');
