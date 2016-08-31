<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand"><span style="font-size: 36px; color: #FFFFFF;"><strong><span style="color: #84bbfc;">ACT</span>PANION</strong></span></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-group"></i> <span class="badge">1</span></a>
                    <ul class="dropdown-menu">
                      <li>
                          <a href="#"><img src="{{ Session::get('actimage') }}" alt="" height="20" width="20" class="img-circle"/> เฮไฮดร้า Want to join your party</a>
                      </li>
                      <li>
                          <a href="#"><strong>see more</strong>  <i class="fa fa-plus"></i></a>
                      </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-briefcase"></i> <span class="badge">1</span></a>
                    <ul class="dropdown-menu">
                      <li>
                          <a href="#"><strong>see more</strong>  <i class="fa fa-plus"></i></a>
                      </li>
                    </ul>
                </li>
                @if(Session::has('authpass'))
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ Session::get('actimage') }}" alt="" height="20" width="20"/> {{ Session::get('actname') }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li>
                              <a href="{{ url('myprofile') }}"><i class="fa fa-user"></i>  Profile</a>
                          </li>
                          <li>
                              <a href="{{ url('myparty') }}"><i class="fa fa-group"></i>  My Party</a>
                          </li>
                            <li>
                                <a href="{{ url('myactivities') }}"><i class="fa fa-suitcase"></i>  My Activities <span class="badge">0</span></a>
                            </li>
                            <li>
                                <a href="{{ url('logoutfb') }}"><i class="fa fa-sign-out"></i>  Logout</a>
                            </li>
                        </ul>
                    </li>
                @else
                  <li>
                      <a href="" data-toggle="modal" data-target="#loginModal"> LOGIN</a>
                  </li>
                @endif
            </ul>
            
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="row">
<form class="form-signin mg-btm">
<h3 class="heading-desc">
<button type="button" class="close pull-right" aria-hidden="true" data-dismiss="modal">×</button>
LOGIN TO <span style="color: #84bbfc;">ACT</span>PANION</h3>
<div class="social-box">
<div class="row mg-btm">
     <div class="col-md-12">
        <a href="{{ url('/fbauth') }}" class="btn btn-primary btn-block">
          <i class="fa fa-facebook-square"></i>    Login with Facebook
        </a>
</div>
</div>
</div>
<div class="login-footer">
<div class="row">
                <div class="col-xs-6 col-md-6">
                    <div class="left-section">
        <a href="">Forgot your password?</a>
        <a href="">Sign up now</a>
      </div>
                </div>
                <div class="col-xs-6 col-md-6 pull-right">
                    <button type="submit" class="btn btn-large btn-danger pull-right">Login</button>
                </div>
            </div>

</div>
</form>
</div>
  </div>
</div>
