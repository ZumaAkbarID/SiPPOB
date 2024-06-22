@extends('Layouts.App')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Kategori</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6 order-lg-0 order-sm-1">

                    @livewire('category.table-list')

                </div>

                <div class="col-lg-6 order-lg-1 order-sm-0">

                    @livewire('category.forms')

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

@section('js')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

    <script>
        new DataTable('#produkList');
        document.addEventListener('livewire:init', () => {
            Livewire.on('updatedProduct', (event) => {
                new DataTable('#produkList');
            });
        });
    </script>
@endsection
