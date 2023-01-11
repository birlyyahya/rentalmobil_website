<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active': '' ?>"><a class="nav-link" href="<?=base_url()?>admin/dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
    <li class="menu-header">Billing</li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'billing' || $this->uri->segment(2) == 'getBilling'  ? 'active': '' ?>">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-dollar-sign"></i> <span>Billing   </span></a>
    <ul class="dropdown-menu">
        <li class="<?php echo $this->uri->segment(3) == 'paid' ? 'active': '' ?>"><a class="nav-link justify-content-between" href="<?= base_url('admin/getBilling/') ?>paid">Paid</a></li>
        <li class="<?php echo $this->uri->segment(3) == 'booked' ? 'active': '' ?>"><a class="nav-link justify-content-between" href="<?= base_url('admin/getBilling/') ?>booked">Booking </a></li>
        <li class="<?php echo $this->uri->segment(3) == 'pending' ? 'active': '' ?>"><a class="nav-link justify-content-between" href="<?= base_url('admin/getBilling/') ?>pending">Pending</a></li>
        <li class="<?php echo $this->uri->segment(3) == 'unpaid' ? 'active': '' ?>"><a class="nav-link justify-content-between" href="<?= base_url('admin/getBilling/') ?>unpaid">Unpaid</a></li>
        <li class="<?php echo $this->uri->segment(3) == 'cancel' ? 'active': '' ?>"><a class="nav-link justify-content-between" href="<?= base_url('admin/getBilling/') ?>cancel">Cancelled</a></li>
    </ul>
    </li>
    <li class="menu-header">Produk</li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kendaraan' || $this->uri->segment(2) == 'merek'   ? 'active': '' ?>">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-bolt"></i> <span>Kendaraan</span></a>
    <ul class="dropdown-menu">
        <li class="<?php echo $this->uri->segment(3) == 'mobil' || $this->uri->segment(2) == 'kendaraan' ? 'active': '' ?>"><a class="nav-link" href="<?= base_url('admin/kendaraan/mobil') ?>">Mobil</a></li>
        <li class="<?php echo $this->uri->segment(2) == 'merek' ? 'active': '' ?>"><a class="nav-link" href="<?= base_url('admin/merek') ?>">Setting Merek</a></li>
    </ul>
    </li>
    
    <li class="<?php echo $this->uri->segment(2) == 'clients' ? 'active': '' ?>"><a class="nav-link" href="<?= base_url('admin/clients') ?>"><i class="fas fa-users"></i> <span>Clients</span></a></li>
    <li class="<?php echo $this->uri->segment(2) == 'data_pembayaran' ? 'active': '' ?>"><a class="nav-link" href="<?= base_url('admin/data_pembayaran') ?>"><i class="fas fa-money-check"></i> <span>Data Pembayaran</span></a></li>
    <li class="<?php echo $this->uri->segment(2) == 'all_transaksi' ? 'active': '' ?>"><a class="nav-link" href="<?= base_url('admin/all_transaksi') ?>"><i class="fas fa-money-check"></i> <span>All Transaksi</span></a></li>
</ul>

<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="<?= base_url('admin/tambahkendaraan')?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
    <i class="fas fa-rocket"></i> Tambah Produk
    </a>
</div>
