function login() {
	var state = document.querySelector('#login').innerHTML;
	console.log(state);
	if(state = 'Log in'){
		document.querySelector('#login').innerHTML = 'Log out';
	} else if(state = 'Log out'){
		document.querySelector('#login').innerHTML = 'Log in';
	}
};

