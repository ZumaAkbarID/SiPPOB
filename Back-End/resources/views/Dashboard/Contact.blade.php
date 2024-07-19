@extends('Layouts.App')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Kontak</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Kontak</li>
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
                                    <h5 class="card-title">Kontak</h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Tipe</th>
                                                <th scope="col">Pesan</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($contacts as $item)
                                                <tr>
                                                    <th scope="row">{{ $item->id }}
                                                    </th>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->tipe }}</td>
                                                    <td>{{ $item->pesan }}</td>
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