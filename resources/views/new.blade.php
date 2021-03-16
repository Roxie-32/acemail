<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if(!$result)
    <div class="content">
        <h4 class="box">Invalid Matric Number!  </h4>
        
        
    </div>To sign out:

    1.On your email
    @else
    <div class="content">
        <div class="title">
            <h2>Welcome {{$result->surname}},</h2>
            <img src="{{url('/img/logo.png')}}" width="70px" alt="">
        </div>

        <div class="holder">
            <div class="box">
            
           
               <div class="">
                <i class="boldit">Here are your details:</i><br><br>
                <p>Surname:  <strong>{{$result->surname}}</strong></p>
                <p>First Name: <strong>{{$result->first_Name}}</strong></p>
                <p>Middle Name: <strong>{{$result->middle_Name}}</strong></p>
                <p>Matric Number: <strong>{{$result->matric_No}}</strong> </p>
                <p>Email: <strong>{{$result->email}}</strong></p>
                <p>Default Password:<strong>student@1234</strong></p>
               </div>

               <div class="inner">
               <i class="boldit"> Steps to login to your Institutional mail</i>
                <p> 1. Open any browser on your Smart Device</p>
                <p>3. Go to <a href="https://www.gmail.com">gmail.com</a></p>
                    <p>4. Enter your  Email and password. </p>
                    <p>5. If a user is logged in  and you need to sign in to a different account,
                    <br> click Use another account</p>
                    <p>Tip: If you're signing in to a public computer, make sure to <br> sign out before leaving the computer.</p>
                    <p>To sign out:</p> 
                    <p> 1.On your gmail, at the top right corner, click your photo or the icon <br> with the  first alphabet of your name. </p>
                    <p>3. Click Sign Out</p>

                    <p><strong>You are required to change your default password <br> at your first login to  access your inbox</strong> </p>
                </div>

               
               
            </div>
        </div>
    </div>
    @endif


    <style>
        body {
            background-color: #131416;
            width: 98%;
            height: 97vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .content {
            background-color: #fff;
            /* padding: 25px; */
            border-radius: 5px;
            width: 70%;
            border-bottom: 5px solid rgba(0, 128, 0, 0.753);
        }

        .title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(0, 128, 0, 0.753);
            padding: 15px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            color: #fff;
        }

        .holder {
            margin: 25px 15px;
            width: 100%;
        }


        .matric {
            width: 90%;
            padding: 13px 10px;
        }

        .matric:focus {
            outline: none;
            border: 2px solid rgba(0, 128, 0, 0.753);
            border-radius: 2px;
        }

        .boldit{
            font-weight: bold;
        }

        span{
            text-transform: uppercase;
            font-weight: lighter;
        }
        .box{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .inner{
            width: 55%;
            font-size: 15px;
            line-height: 15px;
            
        }
      

        @media only screen and (max-width: 600px) {
            .content {
                width: 98%;
            }
            body{
                width: 96%;
            }
           
        }
    </style>

</body>

</html>