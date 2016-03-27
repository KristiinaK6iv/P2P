window.fbAsyncInit = function() {
	FB.init({
	appId      : '',
	cookie     : true,  // enable cookies to allow the server to access 
	                    // the session
	status  : true,
	xfbml      : true,  // parse social plugins on this page
	version    : 'v2.5' // use any version
});
	
};
function login() {
  FB.login(function (response) {
    if (response.authResponse) {
    	
    window.location.replace('http://localhost/P2P/fb/facebook-login-callback.php');	
     
      
    } else {
      alert("Sisselogimine katkestatud!");
    }
  }, { scope: 'public_profile, email' });

}



function logout() {
	
  
        FB.logout(function(response) { 
        	window.location.replace('http://localhost/P2P/logout.php');	
        	 });
    
}



// Load the SDK asynchronously
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
