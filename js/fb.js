window.fbAsyncInit = function() {
    FB.init({
      appId      : '1266078760075547',
      xfbml      : true,
      version    : 'v2.5'
    });
  };
 (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

function trial(){
FB.login(function(response) {
if (response.status === 'connected') {
  document.getElementById('facebook').innerHTML = 'Sisse logitud.';
  document.getElementById('login').style.visibility = 'hidden';
} else if (response.status === 'not_authorized') {
document.getElementById('facebook').innerHTML = 'Sisene Facebookiga'
} else {
document.getElementById('facebook').innerHTML = 'Sisene Facebookiga';
		    	}
   // handle the response
 }, {scope: 'public_profile,email'});
};


