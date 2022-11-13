@extends('layouts.app')

@section('title', 'Thank You for Shopping - Mama Frozen')
@section('content')

    <div class="content">
        <div class="title m-b-md">
            <a href="{{ url('/') }}"><img src="{{ url('admin/images/logo.png') }}" class="rounded  mx-auto d-block"
                    width="260" alt=""></a>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body aligth-center text-center">
                        <h5 class="card-title text-center">Terima kasih telah berbelanja dengan Toko Mama Frozen</h5>
                        <div>
                            Klik tombol dibawah untuk kembali belanja: <br />
                            <a href="{{ url('/collections') }}">
                                <button class="btn btn-primary">Belanja Sekarang</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
