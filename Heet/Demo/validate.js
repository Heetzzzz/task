function validate(){

	var count    = 0;
	var name     = document.getElementById("name").value;
	var namepatt = /^[A-Za-z]$/;

	if(name == "")
	{
		document.getElementById("error1").innerHTML = "Please enter name";
		count++;
	}
	else if((name.length < 3) && (name == namepatt))
	{
		document.getElementById("error1").innerHTML = "Please enter more than 3 character";
		count++;
	}
	else
	{
		document.getElementById("error1").innerHTML = "";
	}

	if(count > 0)
	{
		return false;
	}

}