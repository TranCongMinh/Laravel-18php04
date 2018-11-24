 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/Avatar/" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-users"></i> <span>Quản lý nhân viên</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php?action=add_nhanvien""><i class="fa fa-circle-o"></i> Thêm Nhân Viên</a></li>
            <li class="active"><a href="admin.php?action=list_nhanvien""><i class="fa fa-circle-o"></i> Danh Sách Nhân Viên</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-cubes"></i>
            <span>Quản lý điện thoại</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php?action=add_dienthoai""><i class="fa fa-circle-o"></i> Thêm điện thoại</a></li>
            <li><a href="admin.php?action=list_dienthoai""><i class="fa fa-circle-o"></i> Danh sách điện thoại</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-cubes"></i>
            <span>Quản lý đơn hàng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php?action=ordermanage"><i class="fa fa-circle-o"></i> Order Manage </a></li>
            
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>