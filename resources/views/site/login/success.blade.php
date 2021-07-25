<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-language" content="{{ str_replace('_', '-', app()->getLocale()) }}">

    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        body {
            font-family: "Montserrat", sans-serif;
            background: #1EB980; }

        .container {
            max-width: 900px; }

        a {
            display: inline-block;
            text-decoration: none; }

        input {
            outline: none !important; }



        section#formHolder {
            padding: 50px 0; }

        .brand {
            padding: 20px;
            background: url(https://goo.gl/A0ynht);
            background-size: cover;
            background-position: center center;
            color: #fff;
            min-height: 540px;
            position: relative;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
            transition: all 0.6s cubic-bezier(1, -0.375, 0.285, 0.995);
            border-radius:  10px;
            z-index: 9999; }
        .brand.active {
            width: 100%; }
        .brand::before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            border-radius:  10px;
            z-index: -1; }

        .brand .heading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            transition: all 0.6s;
            color: #1EB980; }
        .brand .heading.active {
            top: 100px;
            left: 100px;
            transform: translate(0); }
        .brand .heading h2 {
            font-size: 70px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 0; }
        .brand .heading p {
            font-size: 15px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 2px;
            white-space: 4px;
            font-family: "Raleway", sans-serif; }
        .brand .success-msg {
            width: 100%;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin-top: 60px; }
        .brand .success-msg p {
            font-size: 25px;
            font-weight: 400;
            font-family: "Raleway", sans-serif; }
        .brand .success-msg a {
            font-size: 12px;
            text-transform: uppercase;
            padding: 8px 30px;
            background: #1EB980;
            text-decoration: none;
            color: #fff;
            border-radius: 30px; }
        .brand .success-msg p, .brand .success-msg a {
            transition: all 0.9s;
            transform: translateY(20px);
            opacity: 0; }
        .brand .success-msg p.active, .brand .success-msg a.active {
            transform: translateY(0);
            opacity: 1; }


        @media (max-width: 768px) {
            .container {
                overflow: hidden; }
            section#formHolder {
                padding: 0; }
            section#formHolder div.brand {
                min-height: 200px !important; }
            section#formHolder div.brand.active {
                min-height: 100vh !important; }
            section#formHolder div.brand .heading.active {
                top: 200px;
                left: 50%;
                transform: translate(-50%, -50%); }
            section#formHolder div.brand .success-msg p {
                font-size: 16px; }
            section#formHolder div.brand .success-msg a {
                padding: 5px 30px;
                font-size: 10px; }
            section#formHolder .form {
                width: 80vw;
                min-height: 500px;
                margin-left: 10vw; }
            section#formHolder .form .form-peice {
                margin: 0;
                top: 0;
                left: 0;
                width: 100% !important;
                transition: all .5s ease-in-out; }
            section#formHolder .form .form-peice.switched {
                transform: translateY(-100%);
                width: 100%;
                left: 0; }
            section#formHolder .form .form-peice > form {
                width: 100% !important;
                padding: 60px;
                left: 50%; } }

        @media (max-width: 480px) {
            section#formHolder .form {
                width: 100vw;
                margin-left: 0; }
            h2 {
                font-size: 50px !important; } }


    </style>

<body>

<div class="container">
    <section id="formHolder">

        <div class="row">

            <!-- Brand Box -->
            <div class="col-sm-6 brand active">


                <div class="heading active">
                    <h2>OYINA</h2>
                    <p>Manaviy-ma'rifiy portal</p>
                </div>

                <div class="success-msg">
                    <p class="active">Great! You are one of our members now</p>
                    <a href="#" class="profile active">Your Profile</a>
                </div>
            </div>
        </div>

    </section>
</div>

</body>
</html>