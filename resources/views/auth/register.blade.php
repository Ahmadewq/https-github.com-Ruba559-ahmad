<!DOCTYPE html>
<html>
<head>
    <title>إنشاء حساب</title>
    <style>
        html{direction:rtl;
            background-image:url(IFAfj9.jpg);
            background-repeat:no-repeat;
            background-size:cover;
            }
          form{ direction:rtl;
                margin-top:20px ;
                margin-right:110px;
                margin-bottom:50px;
                 margin-left:100px ;
         }
        label{font-weight: bold;
            font-size: 20px; }    
        p{margin-top:100px ;
          margin-right: 700px;}
         input{ margin-top:10px;
                border-radius:12px;
                border-width:3px;
                border-color: #77ddff;
                font-size:20px; 
                width: 200px;     
            padding-right: 30px;   }
        input[type = "button"]{background-color: #77ddff;
                               position: relative;right: 100px;}
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
            h2{ margin-left: 40px;
                margin-right: 200px;
                font-family: copperblate gothic light;}
    
                
     </style>   
</head>
<body>
<nav>
<ul class="navbar">
<li><h2>ELECTRONIC MEDICAL CLINIC</h2><li>
<li><a href="https://www.google.com/search?q=GPS&oq=GPS&aqs=chrome..69i57j0i512l9.11276j0j7&sourceid=chrome&ie=UTF-8">GPS</a><li>
<li><a href="حول الموقع.html">About The Clinic </a><li>
<li><a href="amjd.html">Already Existing Account </a><li>
</nav>
    <form action="{{ route('register') }}" method="post"><p>
        @csrf
<label> الاسم الكامل :</label>
<input type="text" name="name" placeholder="ادخل الاسم الكامل" size="20" required/><br>
<label>تاريخ الميلاد :</label>
<input type="date" name="age" size="30" required/><br>
<label> الجنس :</label>
<input type="text" name="gender" placeholder="ذكر\أنثى"size="20" required/><br>
<label>رقم الهاتف :</label>
<input type="text" name="phone" placeholder="أدخل رقم الهاتف"/><br>
<label>العنوان :</label>
<input type="text" name="address" placeholder="أدخل عنوانك"/><br>
<label>البريد الالكتروني :</label>
<input type="email" name="email" placeholder="@email"/><br>
<label>كلمة السر :</label>   
 <input type="password" name="password" placeholder="أدخل كلمة السر"/>
<input type="submit" value="متابعة"><br><br>
</p>
   </form>

</body>
</html> 