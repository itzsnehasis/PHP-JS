<x-header data="login"/>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-2">
            <h3>Login</h3>
            <form action="getdata" method="POST">
            @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your usernamer *" name="username"/>
                </div>
                <div class="form-group" style="color: white;">
                    @error('username'){{$message}}@enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Password *" name="password" />
                </div>
                <div class="form-group" style="color: white;">
                    @error('password'){{$message}}@enderror    
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
            </form>
        </div>
    </div>
</div
