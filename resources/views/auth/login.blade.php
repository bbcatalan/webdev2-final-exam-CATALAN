<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #F6EEE0;
        }
        .daily-verse {
            text-align: center;
            font-size: 25px;
            color: #C38370;
            padding-top: 10px;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
        }
        h1 {
            text-align: center;
            font-size: 35px;
            font-weight: bold;
            color: #A45C40;
            padding-top: 20px;
        }
        .container {
            margin-left: 40%;
             margin-right:25%;
             width: 100%;
             position: center;
        }
        .row {
            color: #C38370;
        }
        h4 {
            color: #A45C40;
            text-align: center;
        }
        a {
            color: #A45C40;
        }
        /*.links {
            text-align: center;
        } */
        .container2 {
            margin-left: 40%;
             margin-right:25%;
             width: 100%;
            position: center;
            padding-top: 25px;
        }
    </style>
</head>
<body>
    
    <h1>Bible Study Request</h1>

    <div class="daily-verse">
        <div id="ourmanna-verse"></div>
        <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
    </div> 

    <div class="container">
        <div class="row" style="margin-top: 45px;">
            <div class="col-md-4 col-md-offset-4">
                <h4>User Login</h4>

                <form action="{{ route('auth.check') }}" method="post">
                @csrf
                <div class="results">
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password"> 
                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                    <br>
                    <a href="register">Register Now!</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>