<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

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

    <div class="container2">
        <a href="\bible-study-requests" class="btn btn-info" role="button">Bible Study Requests</a>
        <a href="\bible-study-request-form" class="btn btn-info" role="button">Bible Study Request Form</a>
    </div>

</body>
</html>