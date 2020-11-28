<?= $this->include('about/about_header') ?>
<body>
    <center>
    <?php $session = session(); ?>
    <div class="image">
                <img src="<?php echo base_url('themes/dist'); ?>/img/download.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
     <h1><?php echo "ABOUT ME, ";  ?></h1>
     <p>Assalamualaikum warohmatullahi wabarokatuh,, Hello temen-temen semunya, apa kabar kalian ? pasti sehat kan :)...</p>
     <p>Terima kasih telah mengunjungi situs web ini yah,, Sebelumnya biar lebih jelas perkenalkan terlebih dulu, Nama saya Nia Nur Atika, boleh panggil Nia, Ika, atau tika</p>
     <p>Sekarang lagi menjalankan pendidikan di Universitas Lampung, yang pastinya temen-temen semua sudah pada tau dong dimana universitas tersebut.</p>
     <p>NPM saya 1817051015, 18 berarti saya angkatan 18 yah temen-temen, hehehehe :D, lahir di Berastagi, 13 Maret 1999.</p>
     <P>Dalam kesempatan kali ini, saya membuat sistem informasi penjualan yang mana dalam sistem ini, kita dapat mengisi, edit, update, dan delete. </p>
     <p>Di sistem ini juga terdapat halama register dan login, dashboard, category, product, transaksi, about dan tombol log out. </p>
     <p>Terima Kasih</p>
     
     <a href="<?php echo base_url('/dashboard'); ?>" class="btn btn-lg btn-secondary">Home</a>
     
    </center>
</body>
<?= $this->include('about/about_footer') ?>