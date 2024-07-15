<div>
    <div class="alert alert-info">
        Pengambilan ini pada dasarnya hanya mengambil data produk dari provider.
        Proses create dilakukan di backend ketika tombol dibawah diklik. Untuk harga sudah disetting melalui dashboard
        provider tampilan seperti dibawah ini.
        <img src="https://i.ibb.co.com/DQBx8Xg/image.png" class="img-fluid" alt="">
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">AMBIL DATA DARI API DIGIFLAZZ</h5>
            {{-- <div class="form-group">
                <label for="">Masukkan Laba : <small class="d-block text-muted">tanpa titik</small></label>
                <input type="number" name="" wire:model.live='laba' wire:ignore.self id=""
                    value="{{ $laba }}" class="form-control">
            </div> --}}
            <button wire:click='fetchData' class="btn btn-primary mt-3" wire:loading.attr="disabled">Ambil/Perbarui
                Produk</button>
            <img src="/assets/loader.gif" wire:loading.class.remove='d-none' class="d-none" alt=""
                width="45">
        </div>
    </div>
</div>
