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
  body
{
background-repeat: no-repeat;
background-image: url("{{ asset('asset/ss.jpg') }}");
background-size: cover;
text-align: center;
}
div{
   padding-top: 1px;
}
.aa{
  text-align: center;
  font-size:xx-large;
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
                                <a class="nav-link" href="/logout">Log Out</a>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrept.js"></script>
     <h2 class="aa">استشارة طبية</h2>
     <form method="post" action="add_advice">
         @csrf
       <label><h3><i>:الرجاء تحديد العيادة المطلوبة</i></h3></label><br>
          <select class="s1" name="clinic_id">
           <optgroup label="العيادات المتوفرة" class="la"></optgroup>
           @foreach ($clinic as $item)
       
           <option value="{{ $item->id }}">{{ $item->name }}</option>

          @endforeach
          </select><br><br><br>
     <label class="txt"><h5>Enter Medical Advice</h5></label><br>
       <textarea class="txt" name="description" rows="7" cols=" 30" placeholder="Write your Dscription Here ..."></textarea> 
        <br><br> 
       <button type="submit" value="send information" > send </button>
</form>
</body>
</html>
