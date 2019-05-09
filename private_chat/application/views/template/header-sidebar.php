<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?=base_url()?>assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            Helpdesk
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="http://www.creative-tim.com" class="simple-text">
            HD
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="<?=base_url()?>assets/img/default-avatar.png" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <?=$this->session->userdata('nama')?>
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">My Profile</a>
                        </li>
                        <li>
                            <a href="#">Edit Profile</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="">
                <a href="<?=base_url()?>Dashboard">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="">
                <a href="<?=base_url()?>Pesan">
                    <i class="material-icons">add</i>
                    <p>Buat Pesan</p>
                </a>
            </li>
            <?php if($this->session->userdata('client') == TRUE){ ?>
                <li>
                    <a data-toggle="collapse" href="#pesan">
                        <i class="material-icons">receipt</i>
                        <p>Pesan
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pesan">
                        <ul class="nav">
                            <li>
                                <a href="<?=base_url('Tiket/TiketMasuk')?>">Pesan Masuk</a>
                            </li>
                            <li>
                                <a href="<?=base_url('Tiket/DaftarTiket')?>">Pesan Terkirim</a>
                            </li>
                            <li>
                                <a href="<?=base_url('Tiket/DaftarTiket')?>">Draft Pesan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php }else if($this->session->userdata('pakar') == TRUE){ ?>
                <li>
                    <a data-toggle="collapse" href="#tiket">
                        <i class="material-icons">receipt</i>
                        <p>Tiket
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="tiket">
                        <ul class="nav">
                            <li>
                                <a href="<?=base_url('Tiket/TiketMasuk')?>">Tiket Masuk</a>
                            </li>
                            <li>
                                <a href="<?=base_url('Tiket/DaftarTiket')?>">Daftar Tiket</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#biodata">
                        <i class="material-icons">people</i>
                        <p>Biodata
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="biodata">
                        <ul class="nav">
                            <li>
                                <a href="<?=base_url('Staff/')?>">Staff</a>
                            </li>
                            <li>
                                <a href="<?=base_url('Mahasiswa/')?>">Mahasiswa</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>