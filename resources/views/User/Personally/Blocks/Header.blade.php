<header>
    <ul class="nav justify-content-between align-items-center nav_pagination">
        <ul class="nav justify-content-between pagination align-items-center">
            <li>
                <a href="" >
                    <img class="logo" src="{{ asset("images/logo.png") }}" alt="">
                </a>
            </li>
        </ul>

        <ul class="nav justify-content-between pagination align-items-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route("personally.home") }}">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tìm việc làm</a>
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
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1">Đăng nhập</a>
            </li>
            <li><span class="stripes">|</span></li>
            <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1">Đăng ký</a>
            </li>
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
