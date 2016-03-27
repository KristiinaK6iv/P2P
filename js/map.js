var myCenter=new google.maps.LatLng(58.508742,25.0);
var Tallinn=new google.maps.LatLng(59.4248836,24.5978166);
var Kardla=new google.maps.LatLng(58.9943161,22.72424);
var Johvi=new google.maps.LatLng(59.3574144,27.3887147);
var Paide=new google.maps.LatLng(58.8850342,25.5251072);
var Jogeva=new google.maps.LatLng(58.7432361,26.3553561);
var Rakvere=new google.maps.LatLng(59.3452784,26.3264627);
var Haapsalu=new google.maps.LatLng(58.9338169,23.4598424);
var Parnu=new google.maps.LatLng(58.3789834,24.4578639);
var Polva=new google.maps.LatLng(58.0579179,27.038531);
var Rapla=new google.maps.LatLng(58.9994575,24.7744634);
var Kuressaare=new google.maps.LatLng(58.2432093,22.4147978);
var Tartu=new google.maps.LatLng(58.374960,26.692385);
var Valga=new google.maps.LatLng(57.7799417,26.0017434);
var Viljandi=new google.maps.LatLng(58.3561736,25.5585763);
var Voru=new google.maps.LatLng(57.8355271,26.9660841);


function initialize()
{
var mapProp = {
  center: myCenter,
  zoom:7,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

 
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: Tallinn
  });

var marker2 = new google.maps.Marker({
  position: Kardla
  });
var marker3 = new google.maps.Marker({
  position: Johvi
  });

var marker4 = new google.maps.Marker({
  position: Paide,
  });
var marker5 = new google.maps.Marker({
  position: Jogeva
  });
 var marker6 = new google.maps.Marker({
  position: Rakvere

  });
var marker7 = new google.maps.Marker({
  position: Haapsalu
  });

var marker8 = new google.maps.Marker({
  position: Parnu
  });
var marker9 = new google.maps.Marker({
  position: Polva
  });

var marker10 = new google.maps.Marker({
  position: Rapla
  });
  
var marker11 = new google.maps.Marker({
  position: Kuressaare
  });
 var marker12 = new google.maps.Marker({
  position: Tartu
  });
  var marker13 = new google.maps.Marker({
  position: Valga
  });
  var marker14 = new google.maps.Marker({
  position: Viljandi
  });
  var marker15 = new google.maps.Marker({
  position: Voru
  });

marker.setMap(map);
marker2.setMap(map);
marker3.setMap(map);
marker4.setMap(map);
marker5.setMap(map);
marker6.setMap(map);
marker7.setMap(map);
marker8.setMap(map);
marker9.setMap(map);
marker10.setMap(map);
marker11.setMap(map);
marker12.setMap(map);
marker13.setMap(map);
marker14.setMap(map);
marker15.setMap(map);

var div = document.getElementById("Tallinn");
var Tal = div.textContent;

var div1 = document.getElementById("Kardla");
var Kar = div1.textContent;

var div2 = document.getElementById("Johvi");
var Joh = div2.textContent;

var div3 = document.getElementById("Paide");
var Pai = div3.textContent;

var div4 = document.getElementById("Jogeva");
var Jog = div4.textContent;

var div5 = document.getElementById("Rakvere");
var Rak = div5.textContent;

var div6 = document.getElementById("Haapsalu");
var Haa = div6.textContent;

var div7 = document.getElementById("Parnu");
var Par = div7.textContent;

var div8 = document.getElementById("Polva");
var Pol = div8.textContent;

var div9 = document.getElementById("Rapla");
var Rap = div9.textContent;

var div10 = document.getElementById("Kuressaare");
var Kur = div10.textContent;

var div11 = document.getElementById("Tartu");
var Tar = div11.textContent;

var div12 = document.getElementById("Valga");
var Val = div12.textContent;

var div13 = document.getElementById("Viljandi");
var Vil = div13.textContent;

var div14 = document.getElementById("Voru");
var Vor = div14.textContent;


google.maps.event.addListener(marker,'click',function() {
  alert("Harjumaa: "+Tal+" kuulutust");
 
  });
google.maps.event.addListener(marker2,'click',function() {
  alert("Hiiumaa: "+Kar+" kuulutust");
 
  });
google.maps.event.addListener(marker3,'click',function() {
  alert("Ida-Virumaa: "+Joh+" kuulutust");
 
  });
google.maps.event.addListener(marker4,'click',function() {
  alert("Järvamaa: "+Pai+" kuulutust");
 
  });
google.maps.event.addListener(marker5,'click',function() {
  alert("Jõgevamaa: "+Jog+" kuulutust");
 
  });
google.maps.event.addListener(marker6,'click',function() {
  alert("Lääne-Virumaa: "+Rak+" kuulutust");
  
  });
google.maps.event.addListener(marker7,'click',function() {
  alert("Läänemaa: "+Haa+" kuulutust");
 
  });
google.maps.event.addListener(marker8,'click',function() {
  alert("Pärnumaa: "+Par+" kuulutust");
 
  });
google.maps.event.addListener(marker9,'click',function() {
  alert("Põlvamaa: "+Pol+" kuulutust");
 
  });
google.maps.event.addListener(marker10,'click',function() {
  alert("Raplamaa: "+Rap+" kuulutust");
 
  });
google.maps.event.addListener(marker11,'click',function() {
  alert("Saaremaa: "+Kur+" kuulutust");
 
  });
google.maps.event.addListener(marker12,'click',function() {
  alert("Tartumaa: "+Tar+" kuulutust");
  
  });
google.maps.event.addListener(marker13,'click',function() {
  alert("Valgamaa: "+Val+" kuulutust");
  
  });
google.maps.event.addListener(marker14,'click',function() {
  alert("Viljandimaa: "+Vil+" kuulutust");
  
  });
google.maps.event.addListener(marker15,'click',function() {
  alert("Võrumaa: "+Vor+" kuulutust");
 
  });
 
}
google.maps.event.addDomListener(window, 'load', initialize);