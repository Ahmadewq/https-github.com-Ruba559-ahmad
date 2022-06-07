<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>controler admins</title>
<style>

  </style>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
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

    <div class="container">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2>Advice Medicale</h2>
          </div>
       
        </div>
      </div>
    <div class="table-wrapper">
      <div class="table-title">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Patient name</th>
          <th scope="col">Clinic name</th>
          <th scope="col">description</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($adviceMedical as $item)
        <tr>
          <th>{{ $item->user->name }}</th>
          <td>{{ $item->clinic->name }}</td>
          <td>{{ $item->description }}</td>
        <form action="index_reply" method="POST">
          @csrf
          <input type="hidden" name="patient_id" value="{{ $item->user->id }}">
          <input type="hidden" name="clinic_id" value="{{ $item->clinic->id }}">
          <td><button type="submit" class="btn btn-info">Reply</button></td>
        </form>
        </tr>
        @endforeach
      </tbody>
    </table>
      </div>
    </div>
    </div>
</body>
</html>