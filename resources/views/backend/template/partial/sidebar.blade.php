<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('storage/images/me.jpg') }}" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>
                    Alexander Pierce
                </p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Main</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active">
                <a href="admin.dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-edit"></i> <span>Content Management</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">Content 1</a>
                    </li>
                    <li>
                        <a href="#">Content 2</a>
                    </li>
                    <li>
                        <a href="#">Content 3</a>
                    </li>
                </ul>
            </li>
            <li class="header">Settings</li>
            <li class="treeview">
                <a href="#"><span>Multilevel</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">Link in level 2</a>
                    </li>
                    <li>
                        <a href="#">Link in level 2</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>