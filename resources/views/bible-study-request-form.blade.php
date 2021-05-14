<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Form</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    body {
            background-color: #F6EEE0;
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
            padding-bottom: 20px;
        }
        .container2 {
            margin-left: 0%;
             margin-right:25%;
             width: 100%;
            position: center;
            padding-top: 25px;
        }

</style>
</head>
<body>
    
<div class="container">
        <div class="row" style="margin-top: 45px;">
            <div class="col-md-4 col-md-offset-4">
                <h4>Fill up the form</h4>
       
        <form action="{{ route('auth.create2', 'auth.check2') }}" method="post" class="was-validated">
           @csrf 
           <div class="results">
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
            <div class="form-group">
                        <label for="name">Complete Name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter complete name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact No.:</label>
                        <input type="text" class="form-control" name="contact" placeholder="Enter number" value="{{ old('contact') }}"> 
                        <span class="text-danger">@error('contact') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birthdate:</label>
                        <input type="date" class="form-control" name="birthdate" placeholder="" value="{{ old('birthdate') }}"> 
                        <span class="text-danger">@error('birthdate') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="religion">Religious Affiliation:</label>
                        <input type="text" class="form-control" name="religion" placeholder="Religion" value="{{ old('religion') }}"> 
                        <span class="text-danger">@error('religion') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="date">Bible Study Date:</label>
                        <input type="date" class="form-control" name="date" placeholder="" value="{{ old('date') }}"> 
                        <span class="text-danger">@error('date') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="time">Bible Study Time:</label>
                        <input type="time" class="form-control" name="time" placeholder="" value="{{ old('time') }}"> 
                        <span class="text-danger">@error('date') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="address">Bible Study Location:</label>
                        <input type="address" class="form-control" name="address" placeholder="Location" value="{{ old('address') }}"> 
                        <span class="text-danger">@error('address') {{ $message }} @enderror</span>
                    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form> 

<div class="container2">
        <a href="\bible-study-requests" class="btn btn-info" role="button">Bible Study Requests</a>

</div>
</body>
</html>