<html>
<head>
<title>BXR fitness\CONTACT</title>
<style>
body{
background-image:url("https://i.pinimg.com/564x/91/88/d2/9188d2ce85df25858fda610e0c1584db.jpg");
background-repeat:no-repeat;
background-size:1300px 1200px;
}
.navbar {
  position:sticky;
  border:0.2px solid black;
   background-color:rgba(0,0,0,0.4);
position: fixed;
  margin: -55px 0px 0px -8px;
  width: 100%;
  background-size: cover;
}


.nav-link {
  list-style: none;
  padding: 0px 30px 0 0;
  margin: -25px 0px 0px 0px;
}
ul {
  display: block ruby;
  text-align: right;
  margin: 100px 20px 26px 200px; 
  list-style:none;
}
a{
color: white;
  text-decoration-line: none;
  padding:6px 6px 6px 6px;
  border:1px solid black;
  width:10px;
  background-color:rgba(200,200,200,0.7);
  }
  
form{
background-color:rgba(0,0,0,0.5);
height:270px;
width:600px;
paddding:600px;
position:absolute;
margin:150px 0px 0px 290px;
border-radius:20px;
border:1px solid silver;
}
#a
{ position:absolute;
margin:45px 0px 0px 300px;
height:30px;
background-color:rgba(0,0,0,0.1);
border-radius:10px;
color:silver;
}
#b{
position:absolute;
margin:105px 0px 0px 300px;
height:30px;
background-color:rgba(0,0,0,0.1);
border-radius:10px;
color:silver;
}
#text0{
position:absolute;
margin:12px 0px 0px 238px;
color:silver;
}
#text1{
position:absolute;
margin:50px 0px 0px 70px;
color:silver;
}
#text2{
position:absolute;
margin:110px 0px 0px 70px;
color:silver;
}
#text3
{
position:absolute;
margin:200px 0px 0px 71px;
color:silver;
}
#c{
position:absolute;
margin:170px 0px 0px 304px;
height:77px;
border-radius:10px;
background-color:rgba(0,0,0,0.1);
color:silver;
}

</style>
</head>
<body>
<nav class="navbar">
<img src="" id="pic">
<ul>
<li class="nav-link"><a href="#">CONTACT US</a></li>
</ul>
</nav>
<form class="form1"method="get" action="" enctype="multipart/form-data">
<div id="text0">CONTACT US</div>
<div id="text1">Enter youer E-mail id *</div>
<input id="a"type="E-mail"placeholder="Enter E-mail"Name="E-mail"required>
<div id="text2">Enter your mobile number *</div>
<input id="b" type="text" placeholder="Enter Mobile Number" Name="Mobile Number" required onkeyup="test()">
<span id="error"></span>
<div id="text3">Message(optional) *</div>
<input id="c" type="text" placeholder="Message(optional)"Name="Message(optional)"required>
</form>
</body>
<script>
function test(){
 let x = document.getElementById("b").value;
 let e = document.getElementById("error");
 if(x.length == 11)
 {
 alert("Length Matched"); 
 }
 else if(x.length > 11)
 {
 alert("You entered more than 11 digits");
 }
 }
</script>
</html>
