<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Mukta');

        body {
            font-family: 'Mukta', sans-serif;
            height: 100vh;
            min-height: 550px;
            background-image: url(http://www.planwallpaper.com/static/images/Free-Wallpaper-Nature-Scenes.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
             margin: 300px 0 0 0; 
        }
        
       /* form{
          height: 500px;
          
      
       } */

        a {
            text-decoration: none;
            color: #444444;
        }

        .login-reg-panel {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            width: 70%;
            right: 0;
            left: 0;
            margin: auto;
            height: 400px;
            background-color: rgba(236, 48, 20, 0.9);
        }

        .white-panel {
            background-color: rgba(255, 255, 255, 1);
            height: 500px;
            position: absolute;
            top: -50px;
            width: 50%;
            right: calc(50% - 50px);
            transition: .3s ease-in-out;
            z-index: 0;
            box-shadow: 0 0 15px 9px #00000096;
        }

        .login-reg-panel input[type="radio"] {
            position: relative;
            display: none;
        }

        .login-reg-panel {
            color: #B8B8B8;
        }

        .login-reg-panel #label-login,
        .login-reg-panel #label-register {
            border: 1px solid #9E9E9E;
            padding: 5px 5px;
            width: 150px;
            display: block;
            text-align: center;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            font-size: 18px;
        }

        .login-info-box {
            width: 30%;
            padding: 0 50px;
            top: 20%;
            left: 0;
            position: absolute;
            text-align: left;
        }

        .register-info-box {
            width: 30%;
            padding: 0 50px;
            top: 20%;
            right: 0;
            position: absolute;
            text-align: left;

        }

        .right-log {
            right: 50px !important;
        }

        .login-show,
        .register-show {
            z-index: 1;
            display: none;
            opacity: 0;
            transition: 0.3s ease-in-out;
            color: #242424;
            text-align: left;
            padding: 50px;
        }

        .show-log-panel {
            display: block;
            opacity: 0.9;
        }

        .login-show input[type="text"],
        .login-show input[type="password"] {
            width: 100%;
            display: block;
            padding: 15px;
            border: 1px solid #b5b5b5;
            outline: none;
        }

        .login-show input[type="button"] {
            max-width: 150px;
            width: 100%;
            background: #444444;
            color: #f9f9f9;
            border: none;
            padding: 10px;
            text-transform: uppercase;
            border-radius: 2px;
            float: right;
            cursor: pointer;
        }

        .login-show a {
            display: inline-block;
            padding: 10px 0;
        }

        .register-show input[type="text"],
        .register-show input[type="password"] {
            width: 100%;
            display: block;
            border: 1px solid #b5b5b5;
            outline: none;
        }

        .register-show input[type="button"] {
            max-width: 150px;
            width: 100%;
            background: #444444;
            color: #f9f9f9;
            border: none;
            text-transform: uppercase;
            border-radius: 2px;
            float: right;
            cursor: pointer;
        }

        .credit {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: #3B3B25;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1px;
            z-index: 99;
        }

        a {
            text-decoration: none;
            color: #2c7715;
        }

        button {
            max-width: 150px;
            width: 100%;
            background: #444444;
            color: #f9f9f9;
            border: none;
            padding: 10px;
            text-transform: uppercase;
            border-radius: 2px;
            float: right;
            cursor: pointer;
        }

        .table-secondary, .table-secondary>td, .table-secondary>th{
            background-color:rgba(236, 48, 20, 0.9)
        }
        .container{
            margin: 25px auto auto auto;
        }
        .btn-warning{
            background-color:#B8B8B8;
            border-color:#B8B8B8;
        }

        .btn-danger{
            background-color:rgba(236, 48, 20, 0.9);
            border-color:rgba(236, 48, 20, 0.9);
        }
    </style>
</head>

<body>


    <div class="container">
        <form class="hi" method="POST" action="form">

            @csrf
            <div class="row">
                <div class="login-reg-panel">
                    <div class="login-info-box">
                        <h2>Have an account?</h2>
                        <p>Lorem ipsum dolor sit amet</p>
                        <label id="label-register" for="log-reg-show">Login</label>
                        <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
                    </div>
                    <div class="register-info-box">
                        <h2>Don't have an account?</h2>
                        <p>Lorem ipsum dolor sit amet</p>
                        <label id="label-login" for="log-login-show">Register</label>
                        <input type="radio" name="active-log-panel" id="log-login-show">
                    </div>

                    <div class="white-panel">
                        <div class="login-show">
                            <h2>LOGIN</h2>
                            <div class="form-group @error('email') has-error @enderror">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group @error('password') has-error @enderror">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="button" value="Login">
                            <a href="">Forgot password?</a>
                        </div>
                        <div class="register-show">
                            <h2>REGISTER</h2>
                            <!-- <div class="form-group @error('username') has-error @enderror">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" value="{{ old('username') }}">
                                @error('username')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> -->
                            <div class="form-group @error('email') has-error @enderror">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group @error('password') has-error @enderror">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" value="{{ old('password') }}">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group @error('mobile') has-error @enderror">
                                <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter Mobile" value="{{ old('mobile') }}">
                                @error('mobile')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group @error('fullname') has-error @enderror">
                                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter Full Name" value="{{ old('fullname') }}">
                                @error('fullname')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>



             @if ($errors->any())
            <div class="alert alert-danger">
               <strong>Whoops!</strong> Please correct errors and try again!.
               <br />
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
             @endif 

        </form>
    </div>

    <div class="container">
        <table class="table ">
            <thead>
                <tr class="table-secondary">

                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Delete</th>
					<th scope="col">Edit</th>

                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->fullname}}</th>
                    <td>{{$user->email}}</td>
                    <td>{{$user->mobile}}</td>
                    <td><a type="button" href="/destroy/{{$user->userid}}" style="color:#fff"class="btn btn-danger ">Delete</a></td>
					<td><a type="button" href="/edit/{{$user->userid}}" style="color:#fff"class="btn btn-warning">Edit</a></td>

                   
                </tr>
                @endforeach
            </tbody>
        </table>



        <!--main end-->
    </div>

    <script>
        $(document).ready(function() {
            $('.login-info-box').fadeOut();
            $('.login-show').addClass('show-log-panel');
        });


        $('.login-reg-panel input[type="radio"]').on('change', function() {
            if ($('#log-login-show').is(':checked')) {
                $('.register-info-box').fadeOut();
                $('.login-info-box').fadeIn();

                $('.white-panel').addClass('right-log');
                $('.register-show').addClass('show-log-panel');
                $('.login-show').removeClass('show-log-panel');

            } else if ($('#log-reg-show').is(':checked')) {
                $('.register-info-box').fadeIn();
                $('.login-info-box').fadeOut();

                $('.white-panel').removeClass('right-log');

                $('.login-show').addClass('show-log-panel');
                $('.register-show').removeClass('show-log-panel');
            }
        });
    </script>




</body>

</html>