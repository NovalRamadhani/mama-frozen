@extends('layouts.app')

@section('title', 'Home Page - Mama Frozen')
@section('content')

    <div class="content">
        <div class="title m-b-md">
            <a href="{{ url('/') }}"><img src="{{ url('admin/images/logo.png') }}" class="rounded mx-auto d-block"
                    width="400" alt=""></a>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Selamat Datang Di Website Mama Frozen</h5>
                        <p class="card-text">
                            Mama Frozen merupakan merek dagang yang secara konsep merupakan toko online sederhana yang
                            dibuat untuk keperluan tugas sekolah dengan berbasis bahasa Pemrogramman PHP dan menggunakan
                            framework laravel.
                        </p>
                        <div>
                            Klik tombol dibawah untuk mulai belanja: <br />
                            <a href="{{ url('/collections') }}">
                                <button class="btn btn-primary">Belanja</button>
                            </a>
                        </div>
                        <br />
                        <div>
                            Hubungi <a href="mailto:mamafrozenmlg@gmail.com" target="_blank">kami</a> untuk saran dan
                            masukan, saran dan masukan dari anda sangat akan bermakna bagi kami.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light">

        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Tranding Products</h4>
                        <div class="underline mb-4"></div>
                    </div>
    
                    @if ($trendingProducts)
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme four-carausel" >
                                @foreach ($trendingProducts as $productItem)
                                    <div class="item">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <label class="stock bg-danger">New</label>
    
                                                @if ($productItem->productImages->count() > 0)
                                                    <a
                                                        href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                        <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                            alt="{{ $productItem->name }}">
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="product-card-body">
                                                <p class="product-brand">{{ $productItem->brand }}</p>
                                                <h5 class="product-name">
                                                    <a
                                                        href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                        {{ $productItem->name }}
                                                    </a>
                                                </h5>
                                                <div>
                                                    <span class="selling-price">Rp. {{ $productItem->selling_price }}</span>
                                                    <span class="original-price">Rp. {{ $productItem->original_price }}</span>
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="col-md-12">
                            <div class="py-2">
                                <h4>No Products Available</h4>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Produk Baru
                            <a href="{{ url('/new-arrivals') }}" class="btn btn-warning float-end">View More</a>
                        </h4>
                        <div class="underline mb-4"></div>
                    </div>
    
                    @if ($newArrivalsProducts)
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme four-carausel" >
                                @foreach ($newArrivalsProducts as $productItem)
                                    <div class="item">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <label class="stock bg-danger">New</label>
    
                                                @if ($productItem->productImages->count() > 0)
                                                    <a
                                                        href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                        <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                            alt="{{ $productItem->name }}">
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="product-card-body">
                                                <p class="product-brand">{{ $productItem->brand }}</p>
                                                <h5 class="product-name">
                                                    <a
                                                        href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                        {{ $productItem->name }}
                                                    </a>
                                                </h5>
                                                <div>
                                                    <span class="selling-price">Rp. {{ $productItem->selling_price }}</span>
                                                    <span class="original-price">Rp. {{ $productItem->original_price }}</span>
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="col-md-12">
                            <div class="py-2">
                                <h4>No Products Available</h4>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Produk Unggulan
                            <a href="{{ url('/featured-products') }}" class="btn btn-warning float-end">View More</a>
                        </h4>
                        <div class="underline mb-4"></div>
                    </div>
    
                    @if ($featuredProducts)
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme four-carausel" >
                                @foreach ($featuredProducts as $productItem)
                                    <div class="item">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                <label class="stock bg-danger">New</label>
    
                                                @if ($productItem->productImages->count() > 0)
                                                    <a
                                                        href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                        <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                            alt="{{ $productItem->name }}">
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="product-card-body">
                                                <p class="product-brand">{{ $productItem->brand }}</p>
                                                <h5 class="product-name">
                                                    <a
                                                        href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                        {{ $productItem->name }}
                                                    </a>
                                                </h5>
                                                <div>
                                                    <span class="selling-price">Rp. {{ $productItem->selling_price }}</span>
                                                    <span class="original-price">Rp. {{ $productItem->original_price }}</span>
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="col-md-12">
                            <div class="py-2">
                                <h4>No Products Available</h4>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')
    <script>
        $('.four-carausel').owlCarousel({
            loop: true,
            margin: 10,
            dots: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
@endsection
