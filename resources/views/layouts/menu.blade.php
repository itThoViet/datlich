<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo.png') }}" alt="" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Trang Chủ</a>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Thông Tin Thợ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Vị Trí Thợ</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Thông tin thợ</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Thông Tin Thợ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Báo Giá</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sản Phẩm</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Khách định kỳ</a></li>
                    </ul>
                </li> --}}
            </ul>
            <div class="d-flex nab-menu-cus">
                <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-between">
                    {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-chat-dots-fill"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bell-fill"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                            
                            <div id="newWork" >
                                <ul class="box-noti">
                                    <li class="header-noti">Thông báo từ ứng dụng</li>
                                    <ul class="main-noti" id="menu_notiAppMobile"></ul>
                                    <li class="footer-noti"><a href="{{ asset('/notification-mobile')}}">Xem tất cả thông báo</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                            {{-- <li><a class="dropdown-item" href="#">Thông tin tài khoản</a></li>
                            <li><a class="dropdown-item" href="#"></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li> --}}
                            <li><a class="dropdown-item" href="#">Thoát</a></li>
                        </ul>
                    </li>
                </ul>
               
            </div>
        </div>
    </div>
</nav>
