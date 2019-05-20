<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=base_url('assets/img/avatar.png');?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?=$this->session->userdata('username');?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header text-center">Development</li>
            <li><a href="<?=base_url('Backend/Dashboard');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="<?=base_url('Backend/Forum');?>"><i class="fa fa-comment"></i> <span>Forum</span></a></li>
            <li><a href="<?=base_url('Backend/Options');?>"><i class="fa fa-gears"></i> <span>Options</span></a></li>
            <li><a href="<?=base_url('Backend/Users');?>"><i class="fa fa-users"></i> <span>Users</span></a></li>
            <li><a href="<?=base_url('Auth/Logout');?>"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
        </ul>
    </section>
</aside>
