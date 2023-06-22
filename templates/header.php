<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problemas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <script src="./../config/main.js" defer></script>
    <style>

        body{
            background-color: #EEEEEE;
            color: black;
            font-family: 'Diphylleia', serif;
        }
        .sidenav{
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 10;
            top: 0;
            right: 0;
            background-color: #AFAEAE;
            overflow-x: hidden;
            padding-top: 60px;
            transition: 0.5s;
            flex-direction: column;
        }
        .sidenav a{
            color: black;
            padding: 10px 10px 10px 30px;
            text-decoration: none;
            tab-size: 50px;
            display: block;
            transform-origin: 0.3s;
        }
        .sidenav a:hover{
            color: #EEEEEE;
        }
        .main{
            transition: margin-left .5s;
            padding: 20px;
        }
        @media screen and (max-height: 450px) {
         .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }
        #btnmenu{
            position: fixed;
            right: 0 ;
            margin: 30px 30px;
            top: 0;
        }


    </style>
</head>
<body>
    