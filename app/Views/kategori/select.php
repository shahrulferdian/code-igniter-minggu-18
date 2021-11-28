<?= $this->extend('templplate/admin') ?>

<? $this->section('content') ?>

<a class="btn btn-primary" href="#<?= base_url('/admin/kategori') ?>" role="button">TAMBAH DATA </a>

<h1> <?php= $judul; ?></h1>

<table class="table">

   <tr>

      <th>No</th>
      <th>Kategori</th>
      <th>Keterangan</th>
      <th>Hapus</th>
      <tr>Ubah</tr>

   </tr>
   <?php $no=1 ?>
    <?php foreach $kategori as key =>value): ?>
   <tr>
       <td><?= $no++ ?></td>
       <td><?= $value['kategori'] ?></td>
       <td><?= $value['keterangan'] ?></td>
       <td><a href="<? base_url()?>/admin/kategori/delete"><?= $value['idkategori'] ?>Hapus</a></td>
       <td><a href="<? base_url()?>/admin/kategori/fine"><?= $value['idkategori'] ?>Ubah</a></td>

   </tr>
    
    <?php endforeach ?>  

</table>

<? $pager->links('group1','bootstrap') ?>

<? $this->endsection() ?>
