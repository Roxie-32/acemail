<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<title style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"></title>
<link href="https://t11media.s3.amazonaws.com/email/transactional/fonts/fonts.css" rel="stylesheet" type="text/css" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
</head>
<style>
    .hold{
         display: flex;
        height: 100vh;

        justify-content: center;
        align-items: center;
    }
    
</style>
<body width="100%" bgcolor="#131416" style="margin: 0 !important;background-color: #131416;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 0 !important;height: 100% !important;width: 100% !important;">
<div style="background: #131416;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
<div class="hold">    
<div id="loginbox"  class="container mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
<div class=" panel panel-info" >
<div class="panel-heading">
<div class="panel-title"><h2>Welcome,</h2></div>

</div>     

<div style="padding-top:30px" class="panel-body" >

<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
    
<form id="loginform" method="POST" action="/store" class="form-horizontal" role="form">
         @csrf   
    <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                <input id="login-matric" type="text" class="form-control input-lg" name="matric_no" placeholder="Enter your Matric Number">                                        
            </div>

        <div style="margin-top:10px" class="form-group">
            <div class="col-sm-12 controls">
                <button  class="btn btn-success btn-lg">Submit</button>
            </div>
        </div>  
    </form>     



</div>                     
</div>  
</div>

</div>


</body>