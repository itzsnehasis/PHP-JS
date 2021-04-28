<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/profile.css">
</head>
<!------ Include the above in your HEAD tag ---------->
<x-header data="profile"/>
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-6 img">
      <img src="{{$rows[0]->pic}}"  alt="" class="img-rounded" style="height: auto; width: 200px; border-radius: 10px;">
    </div>
    <div class="col-md-6 details">
      <blockquote>
        <h5>{{$rows[0]->username}}</h5>
        <small><cite title="Source Title">Chicago, United States of America  <i class="icon-map-marker"></i></cite></small>
      </blockquote>
      <p>
      {{$rows[0]->email}}<br>
      </p>
    </div>
  </div>
</div>
<center>
    <a class="btn btn-primary" href="logout" role="button">Logout</a>
</center>


    
    
    
    
    
    
    
    
    
    
    
    
    

