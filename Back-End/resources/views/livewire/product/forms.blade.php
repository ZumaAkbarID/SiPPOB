<div>
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
            <img src="/assets/loader.gif" wire:loading.class.remove='d-none' class="d-none" alt="" width="45">
        </div>
    </div>
</div>
