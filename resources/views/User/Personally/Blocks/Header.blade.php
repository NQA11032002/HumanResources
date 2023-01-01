<header>
    <ul class="nav justify-content-between align-items-center nav_pagination">
        <ul class="nav justify-content-between pagination align-items-center">
            <li>
                <a href="">
                    <img class="logo" src="{{ asset('images/logo.png') }}" alt="">
                </a>
            </li>
        </ul>

        <ul class="nav justify-content-between pagination align-items-center">
            <li class="nav-item">
                <a class="nav-link active" data-page='home' aria-current="page" href="{{ route('home-post-hot') }}">Trang
                    chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-page='posts' href="{{ route('post.posts') }}">Tìm việc làm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tính lương</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dịch vụ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hỗ trợ</a>
            </li>
        </ul>

        <ul class="nav justify-content-between pagination align-items-center">
            <li><i class="fa-solid fa-bell notify"></i></li>
            <li><span class="stripes">|</span></li>

            @if (session('logined'))
                <li class="nav-item nav-logined">
                    <div class="logined d-flex align-items-center justify-content-center">
                        @if (session('logined')[0]->image)
                            <img src="{{ session('logined')[0]->image }}" alt="">
                        @else
                            <img src="{{ asset('images/avatar/default.png') }}" alt="">
                        @endif
                        <p> {{ session('logined')[0]->lastname }} {{ session('logined')[0]->firstname }}</p>
                    </div>
                    <div class="logined__contain">
                        <ul class="pagination">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Quản lý hồ sơ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Công việc quan tâm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Lịch sử ứng tuyển</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" tabindex="-1">Đăng Xuất</a>
                            </li>
                        </ul>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.show') }}" tabindex="-1">Đăng nhập</a>
                </li>
                <li><span class="stripes">|</span></li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('register.show') }}" tabindex="-1">Đăng ký</a>
                </li>
            @endif

            <li>
                <a href="" class="d-flex align-items-center pagination_employer">
                    <i class="fa-solid fa-right-to-bracket"></i>

                    <div class="pagination_employer--content">
                        <p class="h5">Dành cho nhà tuyển dụng</p>
                        <p class="h6">Đăng tuyển, Tìm ứng viên</p>
                    </div>
                </a>
            </li>
        </ul>
    </ul>
</header>

<script src="{{ asset('js/User/blocks/header.js') }}"></script>
