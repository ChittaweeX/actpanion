<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li {{ Request::segment('2')=='dashboard'?'class="active"':'' }}>
        <a href="{{ url('admin/dashboard') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-picture-o"></i><span>Activities</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li {{ Request::segment('2')=='activities'?'class="active"':'' }}>
            <a href="{{ url('admin/activities') }}">
              <i class="fa fa fa-picture-o"></i> <span>Activities</span>
            </a>
          </li>
          <li><a href="{{ url('admin/activitiescategory') }}"><i class="fa fa-sitemap"></i>Category</a></li>
        </ul>
      </li>
      <li {{ Request::segment('2')=='adminuser'?'class="active"':'' }}>
        <a href="{{ url('admin/adminuser') }}">
          <i class="fa fa-user"></i> <span>Admin user</span>
        </a>
      </li>
      <li {{ Request::segment('2')=='member'?'class="active"':'' }}>
        <a href="{{ url('admin/member') }}">
          <i class="fa fa-user"></i> <span>Member</span>
        </a>
      </li>
      <li class="header">PAGE MANAGEMENT</li>
      <li {{ Request::segment('2')=='x'?'class="active"':'' }}>
        <a href="{{ url('admin/user') }}">
          <i class="fa fa-picture-o"></i> <span>Image Stock</span>
        </a>
      </li>
      <li {{ Request::segment('2')=='x'?'class="active"':'' }}>
        <a href="{{ url('admin/user') }}">
          <i class="fa fa-lightbulb-o"></i> <span>Infomation</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
