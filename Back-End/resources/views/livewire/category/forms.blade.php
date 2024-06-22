<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">AMBIL KATEGORI DARI API DIGIFLAZZ</h5>
            {{-- <div class="form-group">
                <label for="">Masukkan Laba : <small class="d-block text-muted">tanpa titik</small></label>
                <input type="number" name="" wire:model.live='laba' wire:ignore.self id=""
                    value="{{ $laba }}" class="form-control">
            </div> --}}
            <button wire:click='fetchData' class="btn btn-primary mt-3" wire:loading.attr="disabled">Ambil/Perbarui
                Kategori</button>
            <img src="/assets/loader.gif" wire:loading.class.remove='d-none' class="d-none" alt="" width="45">
        </div>
    </div>

    @if ($idEditGambar !== null)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">UBAH GAMBAR - id : {{ $idEditGambar }}</h5>

                <form wire:submit='saveGambar'>

                    <label for="">Pilih gambar</label>
                    <input type="file" name="" id="" wire:model='gambar' required
                        class="form-control" accept=".jpg,.jpeg,.png,.gif">

                    @if ($gambar)
                        <img src="{{ $gambar->temporaryUrl() }}" width="80" class="d-block">
                    @endif

                    <button type="submit" class="btn btn-primary mt-3" wire:loading.attr="disabled">Simpan
                        Gambar</button>
                    <img src="/assets/loader.gif" wire:loading.class.remove='d-none' class="d-none" alt=""
                        width="45">
                    <button wire:click='cancelGambar' class="btn btn-secondary mt-3"
                        wire:loading.attr="disabled">Batal</button>
                </form>

            </div>
        </div>
    @endif
</div>
