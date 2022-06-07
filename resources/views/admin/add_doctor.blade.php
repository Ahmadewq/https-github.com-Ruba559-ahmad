<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>إنشاء حساب دكتور</title>
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/animate.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('asset/css/style.css') }}" type="text/css" rel="stylesheet" />
  <link href="{{ asset('asset/css/media.css') }}" type="text/css" rel="stylesheet" />
  <link href="{{ asset('asset/css/animate.css') }}" type="text/css" rel="stylesheet" />
</head>
<style>
    body{
        background-image:url("{{ asset('asset/ss.jpg') }}");
            background-repeat:no-repeat;
            background-size:cover;
    }

    form{
        text-align: center;
        margin-left: 50px;
      padding-top: 250px;
    }
    label{
        font-size: larger;
        color: black;
        text-align: center;
        margin-top:15px;
    }
    input{
        border: solid 1px rgb(0, 0, 0);
        border-radius: 7px;
        margin-left:auto;
    }
    .aa{
        font-weight: bolder;
        font-family: 'Courier New', Courier, monospace;
        border: solid 4px rgb(0, 162, 255);
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

      @if (\Session::has('message'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('message') !!}</li>
        </ul>
    </div>
@endif

    <form action="add_doctor" method="post">
        @csrf
        <label> Clinic Name: </label>
         <input type="text" name="name" placeholder="name" size="20" required/><br>

         <label> Doctor name: </label>
         <input type="text" name="doctor_name" placeholder="Doctor name" size="20" required/><br>
        
        <label>Phone:</label>
         <input type="text" name="phone" placeholder="mobile Phone"/><br>
        
        <label>Address:</label>
         <input class="a" type="text" name="address" placeholder="Current Area"/><br>
        <br>
        <label>Email:</label>
         <input type="email" name="email" placeholder="@gmail.com"/><br>
        
        <label>Password:</label>   
         <input type="password" name="password" placeholder="password"/><br><br>
          <input type="submit" value="Ok"><br><br>
    <br> <br> <br> <br> <br>
        </form>
</body>
</html>