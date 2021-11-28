<?= $this->extend('templplate/admin') ?>

<? $this->section('content') ?>

<?php 

  echo session()->getflashdata('info');

?>

<h1> INSERT DATA </h1>

<form action="<? =base_url()?>/admin/kategori/insert" method="post">

   Kategori : <input type="text" name="kategori" required>
   <be>
   Keterangan : <input type="text" name="keterangan" required>
   <be>
   <input type="submit" name="simpan" value="SIMPAN">

</form>

<? $this->endsection() ?>