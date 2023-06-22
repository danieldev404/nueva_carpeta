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
            background-color: #EEEEEE;
            z-index: 5;
            position: fixed;
            right: 0 ;
            margin: 30px 30px;
            top: 0;
        }
        footer{
            display: flex;
            justify-content: center ;
            position: fixed;
            width: 100% !important;
            bottom: 0;
        }
        #hero{
        z-index: 1;
        min-width: 80%;
        position: relative;
        }
        video{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .capa{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #1c1c1d;
            opacity: 0.5;
            mix-blend-mode: overlay;
        }        
        #a{
            padding: 20%;
            font-size: larger;
            color: white;
            flex-direction: column;
            padding-top: 350px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 10;
            margin: auto;
        }
        a{
            color: #1c1c1d;
            text-decoration: none;
            display: block;
        }
        a:hover{
            color: #1c1c1d;
        }
        @media screen and (max-width: 450px) and (min-width: 300px){
         #hero { width: 100%;}
         #a {font-size: 18px;}
        }

    </style>
</head>
<body>
    