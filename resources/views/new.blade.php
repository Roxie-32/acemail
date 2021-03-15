<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<title style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"></title>
<link href="https://t11media.s3.amazonaws.com/email/transactional/fonts/fonts.css" rel="stylesheet" type="text/css" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
</head>
<style>
    .mainbox{
        font-size: 30px;!important
        
 }  
 @media only screen and (min-width: 768px) {
            .mainbox{font-size:3rem;!important;
 }}
     
    .hold{
         display: flex;
        height: 100vh;

        justify-content: center;
        align-items: center;
    }
    .holder{
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<body width="100%" bgcolor="#131416" style="margin: 0 !important;background-color: #131416;padding: 0 !important;height: 100% !important;width: 100% !important;">
<div style="background: #131416;">
<div class="hold">    
<div id="loginbox"  class="container mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
<div class=" panel panel-info" >
<div class="panel-heading">
<div class="panel-title"><h2>Welcome {{$result->surname}},</h2></div>

</div>     

<div style="padding-top:30px" class="panel-body" >

<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
    
<h3>Here are your details:</h3>
<div class="holder">
    <div class="">
<h4>Surname:   <strong> {{$result->surname}}</strong></h4>
<h4>First Name: <strong>{{$result->first_Name}}</strong></h4>
<h4>Middle Name: <strong>{{$result->middle_Name}}</strong></h4>
<h4>Matric Number: <strong>{{$result->matric_No}}</strong></h4>
<h4>Email:  <strong>{{$result->email}}</strong></h4>
<h4>Default Password: <strong>student@1234</strong></h4>
    </div>
</div>



</div>                     
</div>  
</div>

</div>


</body>