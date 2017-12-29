


// <script type="text/javascript"> {
// tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
// tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

// function GetClock(){
// var d=new Date();
// var dx=d.toGMTString();
// dx=dx.substr(0,dx.length -3);
// d.setTime(Date.parse(dx))
// d.setSeconds(d.getSeconds() + <?php date_default_timezone_set('America/New_York'); echo date('Z'); ?>);
// var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
// var nhour=d.getHours(),nmin=d.getMinutes();
// if(nmin<=9) nmin="0"+nmin

// document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+"";
// }

// window.onload=function(){
// GetClock();
// setInterval(GetClock,1000);
// }
// </script>
// <div id="clockbox"></div>

<script type="text/javascript">{
  function GetClock(){
  var d=new Date();
  var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
  if(nmin<=9) nmin="0"+nmin
  if(nsec<=9) nsec="0"+nsec;

  document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+":"+nsec+"";
  }

  window.onload=function(){
  GetClock();
  setInterval(GetClock,1000);
  }
}
</script>