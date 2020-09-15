<!DOCTYPE html>
<html>
<head>
  <!--meta charset="utf-8"-->
  <meta charset="windows-1252">
 <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <title>Admission Form</title>
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>

        #frm{
          margin-left: 50px;
          margin-right: 50%;
        }
    
  
      </style>
</head>

<body>


<header>
    
    <h1 style="text-align: center; color:yellow"><i>PRO CRICKET</i></h1>
    <nav class="navbar navbar-style">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse" id="micon">
          <div class="nav navbar-nav navbar-right">
            
            <button id="butt" onclick="reg11();">Register Here    </button>
            <button id="butt" onclick="registertab();">Show registration </button>
          </div>
          
        </div>
      </div>
  </header>



  
  
<div class="cont">
  
  <div class="tab"id="tab"  style="display: none;  padding: 30px;" > 

   <form id="frm">
    <div class="form-row">
        <div class="form-group">
      <label for="nm">Player Name</label>
      <input type="text" class="form-control" id="name" placeholder="Full Name">
    </div>
    <div class="form-group">
      <label for="eml">Email</label>
      <input type="email" class="form-control" id="eml" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="pass">Password</label>
      <input type="text" class="form-control" id="pass" placeholder="Password">
    </div>
  </div>
    <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" placeholder="Age">
  </div>
  <div class="form-group">
    <label for="adder">Address</label>
    <input type="text" class="form-control" id="adder" placeholder="1234 Main St">
  </div>
    <div class="form-group">
      <label for="stat">State</label>
      <select id="stat" class="form-control">
        <option selected>Choose...</option>
        <option>Maharashtra</option>
        <option>Goa</option>
        <option>MP</option>
      </select>
    </div>
      <div class="form-row">
    <div class="form-group">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city">
    </div>
    <div class="form-group">
      <label for="mob">Mobile No</label>
      <input type="number" class="form-control" id="mob" placeholder="Mobile number">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" value="submit" onclick="getthedata();">Submit</button>
</form>
  </div>


</div>



<div class="tab tab-1" id="registration-table"  style="display: none;  padding: 30px;">
   
<div id="data" class="container-fluid"> 

   </div>
  </div>

    







  
  <script src="jquery-3.5.1.min.js"></script>
<script src="main.js"></script>

<script >



function reg11() {
  var x = document.getElementById("tab");
 
  var z = document.getElementById("registration-table");
    
    x.style.display  ="block";
   // y.style.display = "none";
    z.style.display = "none";
   
}

function registertab() {
  var a = document.getElementById("registration-table");
 // var b = document.getElementById("main");
  var c = document.getElementById("tab");

   a.style.display ="block";
   //b.style.display = "none";
    c .style.display = "none";
}


  

    
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
    </body>
</html>

</body>
</html>