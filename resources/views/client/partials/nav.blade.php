<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <a href="/" class="logo m-0 float-start">Property</a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li class="active"><a href="/">Trang Chủ</a></li>
                    <li class="has-children">
                        <a href="properties.html">Bất Động Sản</a>
                        <ul class="dropdown">
                            <li class="has-children">
                                <a href="#">Loại Hình</a>
                                <ul class="dropdown">
                                    @foreach ($categories as $item)
                                        <li><a href="{{ route('page.fill', $item->id) }}">{{ $item->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="#">Mua Bất Động Sản</a></li>
                            <li><a href="#">Giảm Giá</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">Dịch Vụ</a></li>
                    <li><a href="about.html">Về Chúng Tôi</a></li>
                    <li><a href="contact.html">Liên Hệ</a></li>
                    <li class="has-children">

                        @if (Auth::check())
                            <a href="#">Xin chào: {{ Auth::user()->username }}</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('profile') }}">Thông tin tài khoản</a></li>
                                @if (Auth::user()->roll == 'admin')
                                    <li><a href="{{ route('admin.dashbroad') }}">Vào trang quản trị</a></li>
                                @endif
                                <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                            </ul>
                        @else
                            <a href="#">Tài khoản</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('signIn') }}">Đăng nhập</a></li>
                                <li><a href="{{ route('signUp') }}">Đăng ký</a></li>
                            </ul>
                        @endif

                    </li>

                    <a href="#"
                        class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                        data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
            </div>
        </div>
    </div>
</nav>
