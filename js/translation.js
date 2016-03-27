var currenturl = window.location;
window.onload = function halla(){if (currenturl=='http://p2pkuulutused.cs.ut.ee/index.php/welcome/enReklaam'){
	// change h3 text and the fields :)
	console.log(document.getElementById("selgitus").innerHTML);
	document.getElementById('selgitus').innerHTML="You can add commercials to the website for just 150 Euros. You can pay here:";
	document.getElementById('mn').innerHTML="Your name";
	document.getElementById('mk').innerHTML="Account nr.";
	document.getElementById('inp').value="Pay";
}}
