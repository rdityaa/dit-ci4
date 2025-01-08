<div class="container mt-4">
    <div class="d-flex flex-nowrap">
        <?php foreach ($toko as $brg): ?>
            <div class="col-sm-3 p-3">
                <div class="card" style="width: 100%;">
                    <img 
                        src="<?= esc($brg['gambar']) ?>" 
                        class="card-img-top img-fluid" 
                        style="height: 250px; object-fit: cover;" 
                        alt="<?= esc($brg['nama_barang']) ?>"
                    >
                    <div class="card-body">
                        <span class="text-black-400 line-through">
                            Rp. <?= number_format($brg['harga'], 0, ',', '.') ?>
                        </span>
                        <h5 class="card-title"><?= esc($brg['nama_barang']) ?></h5>
                        <p class="card-text" style="max-height: 100px; overflow: hidden; min-height: 100px;">
                            <?= esc($brg['deskripsi']) ?>
                        </p>
                        <div class="text-center">
                            <a href="#" class="btn btn-block text-center btn-dark">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
