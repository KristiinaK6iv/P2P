//address_listener.js
$(document).ready(function(){$.address.change(function(t){""!=t.value.split("/")[1]&&load_data_ajax(t.value.split("/")[1],"http://p2pkuulutused.cs.ut.ee/index.php")}),$(".categoryButton").click(function(){$.address.value($(this).attr("id"))})});
//ads.js
$(document).ready(function(){$("#show").click(function(){$("#hided").show(),$("#show").hide()})});
//ajax.script
function load_data_ajax(a,e){$.ajax({url:e+"/Categories/get_new_category",type:"POST",data:{type:a},success:function(e){$.address.value(a);var t=$("#byCategory");e&&t.html(e).hide().fadeIn()}})}
// load_more.js
$(document).ready(function(){size_li=$("#KKK li").size(),x=5,$("#KKK li:lt("+x+")").show(),$("#KKK h4:lt("+x+")").show(),$("#loadMore").click(function(){x=x+10<=size_li?x+10:size_li,$("#KKK li:lt("+x+")").show(),$("#KKK h4:lt("+x+")").show(),$("#loadMore").hide()})});
// long_poller.js
function addmsg(t){$("#total").html(t)}function waitForMsg(){$.ajax({type:"GET",url:"/index.php/Poll/msg",async:!0,cache:!1,timeout:5e4,success:function(t){addmsg(t),setTimeout(waitForMsg,5e3)},error:function(t,o,e){addmsg(o+" ("+e+")"),setTimeout(waitForMsg,15e3)}})}$(document).ready(function(){waitForMsg()});
//translation.js
var currenturl=window.location;window.onload=function(){"http://p2pkuulutused.cs.ut.ee/index.php/welcome/enReklaam"==currenturl&&(console.log(document.getElementById("selgitus").innerHTML),document.getElementById("selgitus").innerHTML="You can add commercials to the website for just 150 Euros. You can pay here:",document.getElementById("mn").innerHTML="Your name",document.getElementById("mk").innerHTML="Account nr.",document.getElementById("inp").value="Pay")};
