<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kignston5 Admin ">
    <meta name="author" content="Ifrahim Hernandez">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Kingston5 Productions Admin Panel</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">
      
      

      <form class="login-form" method="post" action="{{route('check_login')}}">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="col-md-12">
    
          @if (Session::has('message'))
          
          <div class="alert alert-block alert-danger fade in" >
              <ul >
                 <li style="list-style-type:disc">{{ Session::get('message') }}</li>
              </ul>
          </div>
               
          @endif
          
          @if (count($errors) > 0)
              <div class="alert alert-block alert-danger fade in">
                  <ul >
                      
                      @foreach ($errors->all() as $error)
                          <li style="list-style-type:disc">{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
      </div>
            <div class="input-group"> 
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Email" name="email" id="email" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </div>
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>

    </div>


  </body>
</html>