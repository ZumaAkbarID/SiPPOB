@extends('Layouts.App')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Penjualan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Penjualan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Underdevelopment</h6>
                                        </li>

                                        {{-- <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li> --}}
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Transaksi <span>| All</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">WhatsApp</th>
                                                <th scope="col">Produk</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Status Payment</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($trxs as $item)
                                                <tr>
                                                    <th scope="row"><a
                                                            href="{{ env('FE_URL') }}/pembayaran?order_id={{ $item->reff_id }}">{{ $item->reff_id }}</a>
                                                    </th>
                                                    <td>{{ $item->whatsapp }}</td>
                                                    <td><a href="{{ env('FE_URL') }}/produk/{{ $item->category_id }}"
                                                            class="text-primary">{{ $item->product_name }}</a>
                                                    </td>
                                                    <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                                    <td>
                                                        <span
                                                            class="badge 
                                                        @if ($item->payment == 'Unpaid') bg-warning
                                                        @elseif($item->payment == 'Paid')
                                                        bg-success
                                                        @else
                                                        bg-danger @endif
                                                        ">{{ $item->payment }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
