<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>

<body>
   
    <div class="content">
      
        <div class="title">
            <h2>Welcome {{$result->surname}},</h2>
            <img src="{{url('/img/logo.png')}}" width="70px" alt="">
        </div>
        <div class="holder">
            <div class="basic">
                <i class="boldit">Here are your details:</i><br><br>
                <p class="boldit"><span>Surname:</span> {{$result->surname}}</p>
                <p class="boldit"><span>First Name:</span> {{$result->first_Name}}</p>
                <p class="boldit"><span>Middle Name:</span> {{$result->middle_Name}}</p>
                <p class="boldit"><span>Matric Number:</span> {{$result->matric_No}}</p>
                <p class="boldit"><span>Email:</span> {{$result->email}}</p>
                <p class="boldit"><span>Default Password:</span> student@1234</p>
            </div>

            <hr>

            <div class="inner">
                <i class="boldit"> Steps to login to your Institutional mail</i>
                <p> 1. Open any browser on your Smart Device</p>
                <p>3. Go to <a href="https://www.gmail.com">gmail.com</a></p>
                <p>4. Enter your Email and password. </p>
                <p>5. If a user is logged in and you need to sign in to a different account, click Use another account</p>
                <p>Tip: If you're signing in to a public computer, make sure to sign out before leaving the computer.</p>
                <p>To sign out:</p>
                <p> 1.On your gmail, at the top right corner, click your photo or the icon with the first alphabet of your name. </p>
                <p>3. Click Sign Out</p>
                <p><strong>You are required to change your default password at your first login to access your inbox</strong></p>
            </div>
       
    </div>
   


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
            padding: 25px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        hr{
            display: none;
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

        .boldit {
            font-weight: bold;
        }

        span {
            text-transform: uppercase;
            font-weight: lighter;
        }

        .basic{
            width: 40%;
        }

        .inner {
            width: 60%;
            font-size: 15px;
            line-height: 15px;

        }
        .center{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0.7rem;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .content {
                margin-top: 30px;
                width: 99%;
                padding-top: 180px;
            }

            .holder {
                padding: 25px 15px;
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                flex-direction: column;
            }

            hr{
                display: block;
                width: 100%;
                height: 2px;
                border:none;
                background-color: rgba(0, 128, 0, 0.753);
                border-radius: 10px;
                margin: 20px 0;
            }

            .basic,.inner{
                width: 100%;
            }

            body {
                width: 96%;
            }
        }
    </style>

</body>

</html>