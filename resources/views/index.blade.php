<html>
<head><title></title>
<style>
 html{direction:ltr;
            background-image:url(PicsArt_05-14-09.38.58.jpg);
              background-repeat:no-repeat;
            background-size:cover;}
            .navbar
{
    direction:ltr;
    list-style:none;
    margin:0;
    padding:0;
}
.navbar li
{
       display:inline-block;
}
.navbar a
{
    display:block;
    padding:0 20px;
    text-decoration:none;
    font-size:20px;
}
.navbar a:hover{
    color:blue;
    border-bottom: 2px solid blue;
  }
                  .aa input{
                    background-color: #0c85ad;                            
                    position: relative;top: 500px;left: 1000px;
                     border: #0c85ad;
                     border-radius:12px;
                     border-width:15px;
                     font-size:20px; } 
                     label{font-weight: bold;
                        font-size: 20px;
                        position: relative;top: 500px;left: 1070px;
                        color: #0d6886;
                        text-shadow:2px 2px 5px #0d6886; }            
                     .ee input{
                    background-color: #0c85ad;                            
                    position: relative;top: 455px;left: 300px;
                     border: #08495f;
                     border-radius:12px;
                     border-width:20px;
                     font-size:20px; 
                     width: 100px; }                 
</style>
</head>
<body>
    <nav>
        <ul class="navbar">
        <li><a href="https://www.google.com/search?q=GPS&oq=GPS&aqs=chrome..69i57j0i512l9.11276j0j7&sourceid=chrome&ie=UTF-8">GPS</a></li>
        <li><a href="حول الموقع.html">About The Clinic </a></li>
        <li><a href="esraa.html">New Account </a></li>
            <li><a href="amjd.html">Already Existing Account </a></li>
        </nav>
  <form action="" method="get" class="aa">
    @csrf
    <label>إنشاء حساب</label><br>
    <a href="esraa.html" ><input type="button" value="Patient"></a>
    {{-- <a href=""><input type="button" value="Doctor"></a> --}}
    </form>
    <form action="" method="get" class="ee">
    <a href="/login" ><input type="button" value="login"></a> 
      
      </form>
</body>
</html>