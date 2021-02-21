<html>
<head>
<title>AVstudy</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap');
body{
  background-color:#434C55;
  font-family:'Cairo', sans-serif;
}
#top{
  text-align:left;
}
h1{
  color:white;
  }
h2{
  color:white;
  font-weight:100;
}
.sectop{
  margin-top:30px;
  margin-bottom:45px;
  height:520px;
  text-align:center;
  color:white;
}
.intro{
  color:white;
  font-family:arial;
  font-weight:100;
  letter-spacing:15px;
 text-align:center;
}
#name,#sml{
  padding-top:220px;
}
.secmid{
  padding-top:20px;
  margin-top:30px;
  margin-bottom:15px;
  background-color:white;
  min-height:450px;
  text-align:center;
  color:#434C55;
  overflow:hidden;
}
.secbot{
  padding-top:5px;
  margin-top:10px;
  margin-bottom:45px;
  min-height:240px;
  text-align:center;
  
}

.circle{
  margin-top:2%;
  margin-right: 6%;
  text-align:center;
  height:100px;
  width:100px;
  background-color:white;
  border-radius:50%;
  border:1px solid;
  box-shadow: 6px 10px 12px black;
  display:inline-block;
}
.circle:hover{
  transform:scale(1.09);
  transition:all 0.2s ease-in-out;
}

.card{
  margin-top:3%;
  margin-right:4%;
  text-align:center;
  height:160px;
  width:130px;
  background-color:#434C55;
  color:white;
  border-radius:4%;
  border:sloid  1px ;
  box-shadow: 6px 10px 12px black;
  display:inline-block;
}
.card:hover{
  transform:scale(1.09);
  transition:all 0.2s ease-in-out;
}
</style>

<body>
<div class="sectop">
   <a style="text-decoration:none" href="https://avstudy.herokuapp.com/"><h2 id="top">AV-STUDY</h2></a>
  <hr>
  <br>
  <h3 class="intro">STUDY <br><br>RESOURCES</h3>
   <h2 id="name">By Aman Vashishth</h2>
  <small id="sml">(Only 4th Sem Content is available here)</small>
</div>
<section class="secmid">  
  <h3>Time Table</h3>
  <img src="https://avstudy.herokuapp.com/ttable.png" height="300"> 
</section>
<section class="secbot">
 <h2>Syllabus</h2>
<a style="text-decoration:none" href="https://avstudy.herokuapp.com/syl/pijsyl.php"><div class="circle"><p>P.I.J</p></div></a>
<a style="text-decoration:none" href="https://avstudy.herokuapp.com/syl/wdsyl.php"><div class="circle"><p>W.D</p></div></a>
<a style="text-decoration:none" href="https://avstudy.herokuapp.com/syl/ntmsyl.php"><div class="circle"><p>N.T.M</p></div> </a>
<a style="text-decoration:none" href="https://avstudy.herokuapp.com/syl/edmsyl.php"><div class="circle"><p>E.D.M</p></div></a>
<a style="text-decoration:none" href="https://avstudy.herokuapp.com/syl/llabsyl.php"><div class="circle"><p>L. Lab</p></div></a>
</section>



<section class="secmid">
  <h3>Notes</h3>
  
  <div class="card"><p>P.I.J</p></div>
<div class="card"><p>W.D</p></div>
<div class="card"><p>N.T.M</p></div>
<div class="card"><p>E.D.M</p></div>
<div class="card"><p>L. Lab</p></div>
  
</section>


</body>
</html>
