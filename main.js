
let attempt = 3;
function validate() {
	let badgenumber = document.getElementById("badgenumber").value; 
	let password = document.getElementById("password").value; 

	if (badgenumber == "102" && password == "cutecat2") { 
		alert("Logged in successfully");
		window.location = "index2.html"; 
		return false;
	}
	else {
		attempt--; 
		alert("You have left " + attempt + " attempt!");

		
		if (attempt == 0) {
			document.getElementById("badgenumber").disabled = true;
			document.getElementById("password").disabled = true;
			document.getElementById("submit").disabled = true;
			return false;
		}
	}
}