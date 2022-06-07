
<!DOCTYPE html>
<html>
    <head><title>حساب موجود مسبقا</title>
    <style>
         
         html{direction:ltr;
            background-image:url(images.jpg);
              background-repeat:no-repeat;
            background-size:cover;
        
             }
          form{
                margin-top:20px ;
                margin-right:110px;
                margin-bottom:50px;
                 margin-left:100px ;
         }
         label{
           font-weight: bold;
            font-size: 20px;

         }
            p{margin-top:100px ;
              margin-right: 500px;}
          input{ margin-top:10px;
                border-radius:12px;
                border-width:3px;
                border-color: #77ddff;
                font-size:20px; }
                input[type = "submit"]{background-color: #77ddff;
                               }
                input[type = "button"]{background-color: #77ddff;
                               }
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
         <li><a href="حول الموقع.html">About the clinic </a><li>
         <li><a href="esraa.html">New account </a><li>
            </ul>
         </nav>
        <form action="{{ route('login') }}" method="post"><p>
            @csrf

            <input type="text" name="email" placeholder="ادخل البريد الالكتروني"><label>:البريد الالكتروني</label><br><br>
            <input type="password" name="password" placeholder="ادخل كلمة السر"><label> :كلمة السر   </label><br><br>
            <input type="submit" name="submit" value="تسجيل دخول"><br><br>
            <a href="esraa22.html">هل نسيت كلمة السر؟</a><br><br>
             
            <a href="https://www.google.com/search?gs_ssp=eJzj4tLP1TfIyK1MKy5TYDRgdGDw4r3ZeLPrxmaFGytudtxsBgCsnA07&q=%D9%81%D9%8A%D8%B3+%D8%A8%D9%88%D9%83&oq=%D9%81%D9%8A%D8%B3&aqs=chrome.1.69i57j46i199i465i512j0i512l5j0i10i512j0i512.6163j0j7&sourceid=chrome&ie=UTF-8"><input type="button" value="متابعة بحساب الفيسبوك"></a><br><br>
           <a href="http://www.google.com"><input type="button" value="متابعة بحساب غوغل"></a><br><br>
           <a href="esraa.html">انشاءحساب؟</a><br>
            </p>
            
        </form>
            


    </body>
</html>

