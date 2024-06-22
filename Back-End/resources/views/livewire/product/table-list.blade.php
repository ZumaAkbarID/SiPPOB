<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">List Produk</h5>
            <div class="table-responsive">
                <table id="produkList" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="fw-bold">
                            <th>No.</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Buyer SKU</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->brand }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->buyer_sku_code }}</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-danger"
                                        wire:click='hapus({{ $product->id }})'>Hapus</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Produk tidak ditemukan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
