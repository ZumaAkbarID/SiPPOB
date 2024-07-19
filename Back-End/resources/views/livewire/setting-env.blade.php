<div>
    <div class="row container">
        <div class="text-end">
            <small>TRANSAKSI ASLI?</small>
            <div class="form-check form-switch d-inline">
                <input class="form-check-input" type="checkbox" wire:model.live='env'
                    @if ($env) checked @endif id="flexSwitchCheckDefault">
            </div>
        </div>
        <small class="text-secondary fw-bold" style="font-size: 10px">ON = TRANSAKSI
            ASLI TAPI
            SALDO SEKARAT <br>OFF =
            TRANSAKSI FAKE ALIAS GA AKAN DIPROSES</small>
    </div>
</div>
