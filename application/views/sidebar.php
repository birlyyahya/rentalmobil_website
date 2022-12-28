<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active': '' ?>"><a class="nav-link" href="<?=base_url()?>admin/dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
    <li class="menu-header">Billing</li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'billing' ? 'active': '' ?>">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-dollar-sign"></i> <span>Billing   </span></a>
    <ul class="dropdown-menu">
        <li class="<?php echo $this->uri->segment(3) == 'paid' ? 'active': '' ?>"><a class="nav-link justify-content-between" href="<?=base_url('admin/billing/paid')?>">Paid  <span class="badge badge-primary w-25">4</span></a></li>
        <li class="<?php echo $this->uri->segment(3) == 'Booked' ? 'active': '' ?>"><a class="nav-link justify-content-between" href="<?=base_url('admin/billing/booking')?>">Booking  <span class="badge badge-warning w-25">4</span></a></li>
        <li class="<?php echo $this->uri->segment(3) == 'unpaid' ? 'active': '' ?>"><a class="nav-link justify-content-between" href="<?=base_url('admin/billing/unpaid')?>">Unpaid <span class="badge badge-danger w-25">100</span></a></li>
        <li class="<?php echo $this->uri->segment(3) == 'cancel' ? 'active': '' ?>"><a class="nav-link justify-content-between" href="<?=base_url('admin/billing/cancel')?>">Cancelled <span class="badge badge-light w-25">4</span></a></li>
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
</ul>

<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="<?= base_url('admin/tambah')?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
    <i class="fas fa-rocket"></i> Tambah Produk
    </a>
</div>
