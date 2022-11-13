<div>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="footer-heading">{{ $appSetting->website_name ?? 'website_name' }}</h4>
                    <div class="footer-underline"></div>
                    <p>
                        Mama Frozen merupakan merek dagang yang secara konsep merupakan toko online sederhana yang
                        dibuat untuk keperluan tugas sekolah dengan berbasis bahasa Pemrogramman PHP dan menggunakan
                        framework laravel.
                    </p>
                </div>
                {{-- <div class="col-md-3">
                    <h4 class="footer-heading">Quick Links</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-white">Home</a></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-white">About Us</a></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-white">Contact Us</a></div>
                    <div class="mb-2"><a href="" class="text-white">Blogs</a></div>
                    <div class="mb-2"><a href="" class="text-white">Sitemaps</a></div>
                </div> --}}
                <div class="col-md-3">
                    <h4 class="footer-heading">Belanja Sekarang</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="{{ url('/collections') }}" class="text-white">Collections</a></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-white">Trending Products</a></div>
                    <div class="mb-2"><a href="{{ url('/new-arrivals') }}" class="text-white">New Arrivals Products</a></div>
                    <div class="mb-2"><a href="{{ url('/featured-products') }}" class="text-white">Featured Products</a></div>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Hubungi Kami</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2">
                        <p>
                            <i class="fa fa-map-marker"></i> 
                            {{ $appSetting->address ?? 'address' }}
                        </p>
                    </div>
                    <div class="mb-2">
                        <a href="" class="text-white">
                            <i class="fa fa-phone"></i> {{ $appSetting->phone1 ?? 'phone1' }}
                        </a>
                    </div>
                    <div class="mb-2">
                        <a href="" class="text-white">
                            <i class="fa fa-envelope"></i> {{ $appSetting->email1 ?? 'email1' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class=""> &copy; 2022 - Mama Frozen of Web IT - Ecommerce. All rights reserved.</p>
                </div>
                <div class="col-md-4">
                    <div class="social-media">
                        Get Connected:
                        <a href="https://shopee.co.id/mamafrozenmlg"><i class="fa fa-shopping-basket"> Shopee</i></a>
                        <a href="https://www.instagram.com/mamafrozenmlg/"><i class="fa fa-instagram"> Instagram</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
