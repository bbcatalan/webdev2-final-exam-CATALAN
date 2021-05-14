<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
 #container{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin-left: 30%;
  margin-right: 40%;
}

#container td, #container th {
  border: 2px solid #ddd;
  border-color: #000;
  padding: 8px;
}


#container th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #A45C40;
  color: white;
}
body {
            background-color: #F6EEE0;
        }

        h4 {
            color: #A45C40;
            text-align: center;
            padding-top: 30px;
            padding-bottom: 20px;
        }
</style>
</head>
<body>
    <h4>Bible Request Table</h4>
<div id="container">
    <div class="row" style="margin-top: 45px">
    <div class="col-md-6 col-md-offset-3">
    <table class="table table-hover">
    <thead>
        <tr>
            <th>Complete Name</th>
            <th>Email Address</th>
            <th>Contact Number</th>
            <th>Birthdate</th>
            <th>Religious Affiliation</th>
            <th>Bible Study Data</th>
            <th>Bible Study Time</th>
            <th>Bible Study Location</th>
        </tr>
        
    </thead>
    <tbody>
    @foreach($forms as $form)
        <tr>
        <td>{{$form['name']}}</td>
            <td>{{$form['email']}}</td>
            <td>{{$form['contact']}}</td>
            <td>{{$form['birthdate']}}</td>
            <td>{{$form['religion']}}</td>
            <td>{{$form['date']}}</td>
            <td>{{$form['time']}}</td>
            <td>{{$form['address']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>  
</div>
</body>
</html>

