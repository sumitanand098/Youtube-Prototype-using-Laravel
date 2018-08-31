<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel in">
    <div class="pull-left image">
      <img src="{{Auth::user()->image}}" class="img-circle" style="height: 45px !important; alt="User Image">
    </div>
    <div class="pull-left info">
      <p>{{Auth::user()->name}}</p>
    </div>
  </div>
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>

    <li id="dashboardash">
      <a href="{{ route('dashboard') }}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
        </span>
      </a>
    </li>
    <!-- user -->
    <li id="users" class="treeview">
      <a href="#">
        <i class="fa fa-user"></i>
        <span>Users</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li id="userscreate"><a href="{{ route('users.create') }}"><i class="fa fa-circle-o"></i> Add User</a></li>
        <li id="usersindex"><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> View Users</a></li>
      </ul>
    </li>
 <!-- user -->
    <li id="videos" class="treeview">
      <a href="#">
        <i class="fa fa-video-camera"></i>
        <span>Videos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li id="videoscreate"><a href="{{ route('videos.create') }}"><i class="fa fa-circle-o"></i> Upload Video</a></li>
        <li id="videosindex"><a href="{{ route('videos.index') }}"><i class="fa fa-circle-o"></i> View Videos</a></li>
      </ul>
    </li>
    <li id="web" class="treeview">
      <a href="#">
        <i class="fa fa-globe"></i>
        <span>Website</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li id="webindex"><a href="{{ route('web.index') }}"><i class="fa fa-circle-o"></i> Site Details</a></li>
        <li id="webedit"><a href="{{ route('web.edit') }}"><i class="fa fa-circle-o"></i> Site Edit</a></li>
      </ul>
    </li>
    <li id="admin" class="treeview">
      <a href="#">
        <i class="fa fa-user"></i>
        <span>Admin</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li id="adminview"><a href="{{ route('admin.view') }}"><i class="fa fa-circle-o"></i> View Admin Page</a></li>
        <li id="adminedit"><a href="{{ route('users.edit') }}/1 "><i class="fa fa-circle-o"></i> Edit Admin Details</a></li>
      </ul>
    </li>
  </ul>
</section>
<!-- /.sidebar -->