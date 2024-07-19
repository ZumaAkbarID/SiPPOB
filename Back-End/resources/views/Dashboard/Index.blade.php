@extends('Layouts.App')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card sales-card">

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
                                    <h5 class="card-title">Penjualan <span>| Bulan ini</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ number_format($trxMonth->count(), 0, ',', '.') }}</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card revenue-card">

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
                                    <h5 class="card-title">Saldo <span>| Provider</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Rp {{ number_format($remaining_balance['data']['deposit'], 0, ',', '.') }}
                                            </h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-3 col-md-6">

                            <div class="card info-card customers-card">

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
                                    <h5 class="card-title">Member Baru <span>| Tahun ini</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ number_format(count($new_member), 0, ',', '.') }}</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <div class="col-xxl-3 col-md-6">

                            <div class="card info-card customers-card">

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
                                    <h5 class="card-title">SETTING ENVIRONMENT</h5>

                                    <div class="ps-3">
                                        @livewire('setting-env')
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <div class="row">
                            <!-- Reports -->
                            <div class="col-lg-8">
                                <div class="card">

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
                                        <h5 class="card-title">Reports <span>/Bulan ini</span></h5>

                                        <!-- Line Chart -->
                                        <div id="reportsChart"></div>

                                        <script>
                                            document.addEventListener("DOMContentLoaded", function() {
                                                const paidData = @json($paidData);
                                                const unpaidData = @json($unpaidData);
                                                const expiredData = @json($expiredData);
                                                const salesData = @json($salesData);
                                                const categories = @json($categories);

                                                new ApexCharts(document.querySelector("#reportsChart"), {
                                                    series: [{
                                                        name: 'Paid',
                                                        data: paidData,
                                                    }, {
                                                        name: 'Unpaid',
                                                        data: unpaidData
                                                    }, {
                                                        name: 'Expired',
                                                        data: expiredData
                                                    }, {
                                                        name: 'Sales',
                                                        data: salesData
                                                    }],
                                                    chart: {
                                                        height: 350,
                                                        type: 'area',
                                                        toolbar: {
                                                            show: false
                                                        },
                                                    },
                                                    markers: {
                                                        size: 4
                                                    },
                                                    colors: ['#4154f1', '#2eca6a', '#ff771d', '#abcdef'],
                                                    fill: {
                                                        type: "gradient",
                                                        gradient: {
                                                            shadeIntensity: 1,
                                                            opacityFrom: 0.3,
                                                            opacityTo: 0.4,
                                                            stops: [0, 90, 100]
                                                        }
                                                    },
                                                    dataLabels: {
                                                        enabled: false
                                                    },
                                                    stroke: {
                                                        curve: 'smooth',
                                                        width: 2
                                                    },
                                                    xaxis: {
                                                        type: 'datetime',
                                                        categories: categories // tanggal yang diambil dari response
                                                    },
                                                    tooltip: {
                                                        x: {
                                                            format: 'dd/MM/yy'
                                                        },
                                                    }
                                                }).render();
                                            });
                                        </script>
                                        <!-- End Line Chart -->

                                    </div>

                                </div>
                            </div><!-- End Reports -->
                            <div class="col-lg-4">
                                <div class="card">

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
                                        <h5 class="card-title">Member terbaru <span></span></h5>

                                        <div class="table-responsive">
                                            <table class="table table-striped table-hovered">
                                                <thead>
                                                    <tr>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Tanggal Join</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i_mem = 1;
                                                    @endphp
                                                    @forelse ($new_member as $item)
                                                        <tr>
                                                            <td>{{ $item->username }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ date('d M Y H:i:s', strtotime($item->created_at)) }}</td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="3" class="text-center">Tidak ada data</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

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
                                    <h5 class="card-title">Transaksi terbaru <span>| Hari ini</span></h5>

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

                                            @foreach ($trxToday as $item)
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
