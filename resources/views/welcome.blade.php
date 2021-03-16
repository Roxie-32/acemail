<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="title">
            <h2>Welcome,</h2>
            <img src="{{url('/img/logo.png')}}" width="70px" alt="">
        </div>
        
        <form method="post" action="/store">
            @csrf
            <div >
                <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                <input id="login-matric" class="matric" type="text" class="form-control input-lg" name="matric_no"
                    placeholder="Enter your Matric Number">
            </div>
    
            <div >
                <div class="">
                    <button class="btn">Submit</button>
                </div>
            </div>
        </form>
    </div>



    <style>
        body{
            background-color: #131416;
            width: 98%;
            height: 97vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        .content{
            background-color: #fff;
            border-radius: 5px;
            width: 30%;
            border-bottom:5px solid rgba(0, 128, 0, 0.753);
        }

        .title{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(0, 128, 0, 0.753);
            padding: 15px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            color: #fff;
        }

        form{
            margin: 25px 15px;
            width: 100%;
        }
        

        .matric{
            width: 90%;
            padding: 13px 10px;
        }

        .matric:focus{
            outline: none;
            border: 2px solid rgba(0, 128, 0, 0.753);
            border-radius: 2px;
        }

        .btn{
            background-color: rgba(0, 128, 0, 0.753);
            border:none;
            padding: 15px 20px;
            color:#fff;
            font-size: 15px;
            margin: 15px 0 0 0;
            border-radius: 2px;
            cursor: pointer;
        }
        .btn:focus{
            outline: none;
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