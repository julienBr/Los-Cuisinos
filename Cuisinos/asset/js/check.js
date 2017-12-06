function check(input) {
	if(input.value != document.getElementById('pwd').value)
		input.setCustomValidity('Les deux mots de passe doivent correspondre.');
	else input.setCustomValidity('');
}