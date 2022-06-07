<!DOCTYPE HTML>

<html lang="en-gb" class="no-js">

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
    h1{
      text-align: center;
      color: rgb(8, 63, 88);
      font-family:Ink Free;
      font-style: italic;
      font-size: 40px;
      background-color: rgb(2, 235, 252);
    }
    .dd{
      border: 2px solid;
      border-color:rgb(0, 0, 0);
    }
    label
    {
        margin-left: 100px;
    }
    .ll{
        margin-left: 200px;
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
                                    <a class="nav-link active" href="#">GPS</a>
    
    
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#"> About the clinie </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Contact.html">New Acoount</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="About.html">About Use</a>
                                </li>
                               
    
    
                            </ul>
                        </div>
                </nav>
            </div>
        </div>
        <div class="  container">
            <div class="Admin">
                <p>Welcome M.s Admin</p>
            </div>
            
        </div> 
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="col-xs-12 col-sm-3 ">
                        <div class="part">
                         <div>
                             <span class="user">count Users</span>
                             <span class="new">New</span>
                         </div>
                         <div class="text-center number">
                            <p class="">200</p>
                         </div>
                    
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 ">
                        <div class="part">
                            <div>
                                <span class="user">visitors</span>
                                <span class="new">New</span>
                            </div>
                            <div class="text-center number">
                               <p class="">200</p>
                            </div>
                       
                           </div>
                    </div>
             
                <div class="col-xs-12 col-sm-3 ">
                    <div class="part">
                        <div>
                            <span class="user">reservations</span>
                            <span class="new">New</span>
                        </div>
                        <div class="text-center number">
                           <p class="">200</p>
                        </div>
                   
                       </div>
                </div>
                <div class="col-xs-12 col-sm-3 ">
                    <div class="part">
                        <div>
                            <span class="user">Consulting</span>
                            <span class="new">New</span>
                        </div>
                        <div class="text-center number">
                           <p class="">200</p>
                        </div>
                   
                       </div>
                </div>
            </div>
            </div>
        </div> 
      
    </div>
    <h1>جدول المواعيد</h1>
    <br>
    <div class="dd">
        <label>Patient name</label>
        <label>Clinic name</label>
        <label>Date</label>
        <label>Time</label>
        <label></label>
      </div>
@foreach ($appointement as $item)

    <div class="dd">
        <label>{{ $item->clinic->name }}</label>
        <label>{{ $item->user->name }}</label>
        <label>{{ $item->date }}</label>
        <label>{{ $item->time }}</label>
        <form action="add_accept" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
        <label class="ll"><button type="submit" class="btn btn-info">Accept</button></label>
        </form>
    </div>

    @endforeach

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrept.js"></script>
</body>

</html>