<nav class="navbar navbar-dark bg-inverse navbar-fixed-top navbar-no-fixed">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
    
    </button>
    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar">
        <a class="navbar-brand text-xs-center" href="<?= base_url() ?>Homeadmin"><img style="height: 20px;" src="<?php echo base_url() ?>images/logo_ft.png" alt="placeholder+image"></a>
        <ul class="nav navbar-nav float-xs-left nav-ul">
            <li class="nav-item">
                <a class="nav-link navl" href="<?php echo base_url() ?>News/cateNews"><i class="fa fa-list-alt" aria-hidden="true"></i> Danh mục tin <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link navl" href="<?php echo base_url() ?>News/qlNews"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin tức</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navl" href="<?php echo base_url() ?>Dish/loadMeal"><i class="fa fa-moon-o" aria-hidden="true"></i> Bữa ăn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navl" href="<?php echo base_url() ?>Dish/qlDish"><i class="fa fa-cutlery" aria-hidden="true"></i> Món ăn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navl" href="<?php echo base_url() ?>Booking/"><i class="fa fa-calendar" aria-hidden="true"></i> Đặt bàn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navl" href="<?php echo base_url() ?>User/listUser"><i class="fa fa-users" aria-hidden="true"></i> Tài khoản</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navl" href="<?php echo base_url() ?>Slide/"><i class="fa fa-picture-o" aria-hidden="true"></i> Slide</a>
            </li>
        </ul>
        <ul class="nav navbar-nav float-xs-right nav-ul">
            <li class="nav-item">
                <a class="nav-link navl" href="<?php echo base_url() ?>"><i class="fa fa-home" aria-hidden="true"></i> Nhà hàng  </a>
            </li>
            <li class="nav-item">
                <a class="nav-link navl"><i class="fa fa-user"></i> <?php echo $this->session->userdata('login'); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link navl" href="<?php echo base_url() . 'Homepage/logout' ?>" ><i class="fa fa-sign-out"></i>Đăng xuất</a>
            </li>
        </ul>
    </div>
</nav>