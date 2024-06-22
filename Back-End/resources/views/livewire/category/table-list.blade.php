<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">List Kategori</h5>
            <div class="table-responsive">
                <table id="produkList" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="fw-bold">
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($category as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <img src="/storage/product/{{ $product->image ? $product->image : 'default.png' }}"
                                        alt="" width="80">
                                </td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->brand }}</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-info"
                                        wire:click='gantiGambar({{ $product->id }})'>Ganti Gambar</button>
                                    <button class="btn btn-sm btn-danger"
                                        wire:click='hapus({{ $product->id }})'>Hapus</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Kategori tidak ditemukan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
