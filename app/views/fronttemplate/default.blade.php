<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ACTPANION</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }} " rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('assets/css/modern-business.css') }} " rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('assets/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet" type="text/css">

    <style>
    .form-signin {
  background-color: #f7f7f7;
}
.main{
	padding: 38px;
}
.social-box{
  margin: 0 auto;
  padding: 38px;
  border-bottom:1px #ccc solid;
}
.social-box a{
  font-weight:bold;
  font-size:18px;
  padding:8px;
}
.social-box a i{
  font-weight:bold;
  font-size:20px;
}
.heading-desc{
	font-size:20px;
	font-weight:bold;
	padding:38px 38px 0px 38px;

}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: 20px;
  padding: 20px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: 10px;
  border-radius: 5px;

}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-radius: 5px;
}
.login-footer{
	background:#f0f0f0;
	margin: 0 auto;
	border-top: 1px solid #dadada;
	padding:20px;
}
.login-footer .left-section a{
	font-weight:bold;
	color:#8a8a8a;
	line-height:19px;
}
.mg-btm{
	margin-bottom:20px;
}
    </style>
    @yield('custom-css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    @include('fronttemplate.topmenu')
    @yield('content')

        

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-6">
                    <p>Copyright &copy; www.ACTPANION.com 2016</p>
                    <p>
                      By EsanOne Team
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="col-md-4 text-center">
                      Where To Find Us
                      <div class="row">
                        <i class="fa fa-facebook-square fa-3x"></i>
                        <i class="fa fa-instagram fa-3x"></i>
                        <i class="fa fa-pinterest-square fa-3x"></i>
                      </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{ url('assets/js/jquery.js') }} "></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('assets/js/bootstrap.min.js') }} "></script>

    @yield('custom-js')


</body>

</html>
