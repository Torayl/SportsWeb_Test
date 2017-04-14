function vérifierLogin() {
	var login = document.getElementById("login"), confirmlogin = document.getElementById("confirmlogin");
	if (login.value != confirmlogin.value) {
		confirmlogin.setCustomValidity("Les logins ne correspondent pas");
		confirmlogin.style.backgroundColor = "#D04C3E";
	} else {
		confirmlogin.setCustomValidity('');
		confirmlogin.style.backgroundColor = "#6B9949";
	}
}