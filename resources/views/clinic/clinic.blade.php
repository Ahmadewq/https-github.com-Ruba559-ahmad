<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>clinic</title>
	<link rel="stylesheet" type="text/css" href="{{asset('asset/11.css')}}">
</head>
<body>
  <nav class="c1">
    <ul class="navbar">
      <li><h2>ELECTRONIC MEDICAL CLINIC</h2></li>
      <li><a href="https://www.google.com/search?q=GPS&oq=GPS&aqs=chrome..69i57j0i512l9.11276j0j7&sourceid=chrome&ie=UTF-8">GPS</a></li>
      <li><a href="/index_advice">Send Advice</a></li>
      <li><a href="/logout">Log out </a></li>
    </ul>
  </nav>
<fieldset>
  <form action="add_appointement" method="post">
    @csrf
   <legend><u>تحديد موعد</u></legend>
   <label><h3><i>:الرجاء تحديد العيادة المطلوبة</i></h3></label>
      <select class="s1" name="clinic_id">
        <optgroup label="العيادات المتوفرة"></optgroup>
        @foreach ($clinic as $item)
       
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        
        @endforeach
      </select><br>
    
      <label><h3><i>:الرجاء تحديد الوقت<i></h3></label>
      <select class="s2" name="time">
        <optgroup label="جدول الأوقات"></optgroup>
          <option value="صباحاٌ">صباحاٌ</option>
          <option value="ٌعصرا">عصراٌ</option>
          <option value="ٌمساءا">مساءاٌ</option>
        </select>
      </fieldset>
          <input type="date" name="date">
          <input type="submit" name="تم">
     
  </form>
</body>
</html>