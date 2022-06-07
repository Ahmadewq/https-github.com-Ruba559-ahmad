<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>index</title>
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="fonts/font-awesome.css" />
  <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/animate.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('asset/css/style.css') }}" type="text/css" rel="stylesheet" />
  <link href="{{ asset('asset/css/media.css') }}" type="text/css" rel="stylesheet" />
  <link href="{{ asset('asset/css/animate.css') }}" type="text/css" rel="stylesheet" />
</head>
<style>

body{
  background-color:rgb(225, 235, 235);
}
fieldset{
  border: 2px solid rgb(0, 89, 255);
  margin: 80px;
  padding-top: 20px;
  padding-bottom: 40px;
}
  h3{
    color: rgb(1, 0, 5);
    font-family: cursive;
    padding-bottom: -2px;
  }
  textarea{ width: 100%;
  height: 300px;
  font-style:italic;
width: 50px;
  }
 form{
   text-align: center;
 }
 .su{
   font-size: large;
   font-family: cursive;
   width: 75%;
   background-color: turquoise;
  
 }
</style>
<body>
  <div class="">
  <div class="">
      <div class="col-xs-12" style="padding: 0px;">
          <nav class="navbar navbar1 " role="navigation">
              <div class="text-center container">
                  <div class="navbar-header navbar-header1">
                      <button type="button" class="navbar-toggle navbar-toggle1" data-target="#nav"
                          data-toggle="collapse">
                          <i class="fa fa-bars "></i>
                      </button>
                      <div class="span2">
                      <p>ELECTRONIC MEDICAL CLINIC</p>
                      </div>
                  </div>
                  <div class="collapse navbar-collapse" id="nav">
                      <ul class="nav navbar-nav navbar-right nav-link1">

                          <li class="nav-item ">
                              <a class="nav-link" href="#">schedule Appointments</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link " href="#">consultation schedule</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="Contact.html">visiting schedule</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="About.html">Log Out</a>
                          </li>
                      </ul>
                  </div>
          </nav>
      </div>
  </div>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scrept.js"></script>

  <body>
    <fieldset>
    <form method="post" action="reply_store">
      @csrf
      <div class="form-group">
        <h3><label for="exampleFormControlTextarea1">REPLAY ADVICE..</label></h3><br>
       <label> <textarea name="reply" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="type replay.."></textarea>
     <br>
        <input type="hidden" name="clinic_id" value="{{ $clinic_id }}">
        <input type="hidden" name="patient_id" value="{{ $patient_id }}">
      <input class="su" type="submit" name="" value="click to send">
     </label>
    </div>
    </form>
</fieldset>
</body>