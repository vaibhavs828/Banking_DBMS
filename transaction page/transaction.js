function requiredacn()
{
var empt = document.forms["form1"]["accountNumber"].value;
if (empt == "")
{
alert("Please enter account number");
return false;
}
}