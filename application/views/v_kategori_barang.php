<div class="main-container-kategori">
    <!-- Banner vertikal -->
    <div class="banner-vertical-kategori"></div>

    <!-- Tempatkan coding produk yang sudah ada di sini -->
    <div>
        <!----------------- Title Kategori ------------------>
        <h1 class="title-kategori"><span><?= $title ?></span> Category</h1>
        <p class="des-title-kategori">Temukan koleksi terbaik kami untuk setiap ruangan.</p>
        <!----------------- Title Kategori ------------------>

        <!---------------- Produk Kategori ------------------>
        <div class="mt-2 container-3 grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
            <?php foreach ($barang as $key => $value) { ?>
                <div class="bg-grid">
                    <?php
                    echo form_open('belanja/add');
                    echo form_hidden('id', $value->id_barang);
                    echo form_hidden('qty', 1);
                    echo form_hidden('price', $value->harga);
                    echo form_hidden('name', $value->nama_barang);
                    echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                    ?>
                    <article class="group">
                        <a href="#">
                            <h1 class="title-produk">— <?= $value->nama_barang ?> —</h1>
                        </a>
                        <img
                            alt=""
                            src="<?= base_url('img/kategori/' . $value->gambar) ?>"
                            class="img-produk h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />

                        <div class="p-3">
                            <p class="harga-produk" align="center">IDR. <?= number_format($value->harga, 0) ?>.-</p>
                            <button
                                class="inline-block rounded btn-produk-cart px-3 py-2 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-teal-700"
                                type="submit" style="margin-left: px;">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>

                            <a
                                class="inline-block rounded btn-produk-detail px-3 py-2 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-yellow-500"
                                href="<?= base_url('home/detail_barang/' . $value->id_barang) ?>" style="margin-left: px;">
                                <i class="fa-solid fa-circle-info"></i> View Detail
                            </a>
                        </div>
                    </article>
                    <?php echo form_close(); ?>
                </div>
            <?php } ?>
        </div>
        <!---------------- Produk Kategori ------------------>
    </div>
</div>

<!-- Tambahkan elemen alert -->
<?php if ($this->session->flashdata('pesan')) { ?>
    <div class="mt-5 alert fixed top-12 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-lg transition-opacity duration-500 opacity-100" id="cartAlert">
        <strong class="font-bold"><i class="icon fas fa-check"></i> Sukses!</strong>
        <span class="block sm:inline"><?= $this->session->flashdata('pesan'); ?></span>
    </div>
<?php } ?>

<!-- Tambahkan script di bagian bawah -->
<script>
    // Fungsi untuk menyembunyikan alert setelah 3 detik
    window.addEventListener('DOMContentLoaded', (event) => {
        const alertElement = document.getElementById('cartAlert');
        if (alertElement) {
            // Hilangkan alert setelah 3 detik
            setTimeout(() => {
                alertElement.classList.add('opacity-0');
                setTimeout(() => alertElement.classList.add('hidden'), 500);
            }, 3000);
        }
    });
</script>