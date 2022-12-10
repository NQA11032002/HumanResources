@extends('User.Personally.Layouts.Main')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/User/Personally/Home.css') }}">
@endsection

@section('content')
    <section id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                class="active btn-slider__banner" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="btn-slider__banner"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="btn-slider__banner"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" class="btn-slider__banner"
                aria-label="Slide 4"></button>
        </div>

        <div class="col-1 search-quickly">
            <div class="search-quickly__content">
                <h3 class="h4">Đón lấy thành công với</h3>
                <h5 class="h6">23,166 cơ hội nghề nghiệp</h5>
                <form>
                    <div class="mb-3 container-input--form">
                        <i class="fa-solid fa-magnifying-glass position-absolute container-input--form-icon"></i>
                        <input type="email" class="form-control input-form" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder=" ">
                        <label for="exampleInputEmail1" class="form-label" for="exampleInputEmail1">Email address</label>
                    </div>
                    <div class="container-select--form">
                        <select class="form-select col" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select col" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                        <select class="form-select col" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select col" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <p class="search-quickly__reset"><i class="fa-solid fa-rotate-left "></i> Reset</p>

                    <button type="submit" class="btn btn-success btn-search--quickly">Tìm việc ngay</button>
                    <a href="" class="btn btn-warning pagination-register--profile">Đăng ngay</a>
                </form>
            </div>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100 banner-personally" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100 banner-personally" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner5.jpg') }}" class="d-block w-100 banner-personally" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner4.jpg') }}" class="d-block w-100 banner-personally" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev arrow" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next arrow" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>

    <section class="home__epmloyer">
        <div class="title">
            <h1 class="title-why text-center h2 font-bold m-5"><b>Nhà tuyển dụng hàng đầu</b></h1>
        </div>

        <div class="post_employer-tabs">
            <ul class="d-flex nav-tabs">
                <span class="nav-tabs__slider"></span>
                <li class="nav-item nav-tab--item">
                    <a class="nav-tabs__link h4" data='hot' href="{{ route('personally.home-post-hot') }}">Việc Làm
                        Nổi Bật</a>
                </li>
                <li class="nav-item nav-tab--item">
                    <a class="nav-tabs__link h4" data='vip' href="{{ route('personally.home-post-vip') }}">Việc Làm
                        VIP ($1000+)</a>
                </li>
                <li class="nav-item nav-tab--item">
                    <a class="nav-tabs__link h4" data='new' href="{{ route('personally.home-post-new') }}">Việc làm
                        mới cập nhật</a>
                </li>
            </ul>

            <div class="posts_employer">
                <div class="nav nav-items">
                    @yield('posts_employer')
                </div>
                @yield('pagination')
            </div>
        </div>
    </section>

    <section class="home__reason">
        <img src="{{ asset('images/decor6.9a137693.png') }}" alt=""
            class="home__reason-image home__reason-image-one">

        <div class="title">
            <h1 class="text-center h2 font-bold m-5"><b>Tại sao NQA là <span class="title-why">giải pháp tối ưu cho <br>
                        ứng viên tìm việc làm phổ thông?</span></b></h1>
        </div>

        <div class="home__reason--items">
            <div class="home__reson--item">
                <div class="home__reson--item-content">
                    <h1 class="h4 text-center">Bản đồ nguồn việc làm <br><span>trải dài 63 tỉnh thành</span></h1>
                    <img src="{{ asset('images/w1.d6c98c4a.png') }}" alt="">
                </div>
            </div>
            <div class="home__reson--item">
                <div class="home__reson--item-content">
                    <h1 class="h4 text-center">Tự động tìm kiếm & matching tuyển dụng với <br><span>công việc phù hợp chỉ
                            trong 5 phút</span></h1>
                    <img src="{{ asset('images/w2.92a857d2.png') }}" alt="">
                </div>
            </div>
            <div class="home__reson--item">
                <div class="home__reson--item-content">
                    <h1 class="h4 text-center">Nhà tuyển dụng phù hợp với <br><span>công việc chỉ trong tối đa 24H</span>
                    </h1>
                    <img src="{{ asset('images/w3.d4815415.png') }}" alt="">
                </div>
            </div>
            <div class="home__reson--item">
                <div class="home__reson--item-content">
                    <h1 class="h4 text-center">Vận hành tự động, chính xác <br><span>hơn nhờ AI & Big Data</span></h1>
                    <img src="{{ asset('images/w4.7e37349a.png') }}" alt="">
                </div>
            </div>
        </div>

        <img src="{{ asset('images/item5.831000b1.png') }}" alt=""
            class="home__reason-image home__reason--image-two">
    </section>

    <section class="home_top-career">
        <div class="title">
            <h1 class="title-why text-center h2 font-bold m-5"><b><span>Ngành nghề trọng điểm</span></b></h1>
        </div>

        <div class="home_top-career__content">
            <div class="slider_top-career--items">
                <a href="#" class="slider_top-career--item-nav">
                    <img src="{{ asset('images/career_1.png') }}" class="slider_top-career--item-image" alt="">

                    <div class="slider_top-career--item__content">
                        <h2 class="h5">Ngân hàng</h2>
                        <p>(3.264 việc làm)</p>
                    </div>
                </a>

                <a href="#" class="slider_top-career--item-nav">
                    <img src="{{ asset('images/career_2.png') }}" class="slider_top-career--item-image" alt="">

                    <div class="slider_top-career--item__content">
                        <h2 class="h5">Dịch vụ khách hàng</h2>
                        <p>(3.264 việc làm)</p>
                    </div>
                </a>

                <a href="#" class="slider_top-career--item-nav">
                    <img src="{{ asset('images/career_3.png') }}" class="slider_top-career--item-image" alt="">

                    <div class="slider_top-career--item__content">
                        <h2 class="h5">Ngân hàng</h2>
                        <p>(3.264 việc làm)</p>
                    </div>
                </a>

                <a href="#" class="slider_top-career--item-nav">
                    <img src="{{ asset('images/career_4.png') }}" class="slider_top-career--item-image" alt="">

                    <div class="slider_top-career--item__content">
                        <h2 class="h5">Ngân hàng</h2>
                        <p>(3.264 việc làm)</p>
                    </div>
                </a>

                <a href="#" class="slider_top-career--item-nav">
                    <img src="{{ asset('images/career_5.png') }}" class="slider_top-career--item-image" alt="">

                    <div class="slider_top-career--item__content">
                        <h2 class="h5">Ngân hàng</h2>
                        <p>(3.264 việc làm)</p>
                    </div>
                </a>

                <a href="#" class="slider_top-career--item-nav">
                    <img src="{{ asset('images/career_6.png') }}" class="slider_top-career--item-image" alt="">

                    <div class="slider_top-career--item__content">
                        <h2 class="h5">Ngân hàng</h2>
                        <p>(3.264 việc làm)</p>
                    </div>
                </a>

                <a href="#" class="slider_top-career--item-nav">
                    <img src="{{ asset('images/career_7.png') }}" class="slider_top-career--item-image" alt="">

                    <div class="slider_top-career--item__content">
                        <h2 class="h5">Ngân hàng</h2>
                        <p>(3.264 việc làm)</p>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <section>
        <div class="d-flex justify-content-center align-items-center home__brands">
            <div class="home__brands-title">
                <img class="home__brands-title--image" src="{{ asset('images/decor3.4a5d109c.png') }}" alt="">
                <div class="home__brands-title--content">
                    <h1 class="h3">Gia tăng cơ hội nghề nghiệp</h1>
                    <p class="h6">khi kết nối cùng các công ty hàng đầu tại <span>NQA</span> </p>
                </div>
            </div>

            <div class="home__brands-item">
                <div class="home__brand">
                    <img src="{{ asset('images/brand1.jpg') }}" alt="">
                </div>

                <div class="home__brand">
                    <img src="{{ asset('images/brand2.jpg') }}" alt="">
                </div>

                <div class="home__brand">
                    <img src="{{ asset('images/brand3.jpg') }}" alt="">
                </div>

                <div class="home__brand">
                    <img src="{{ asset('images/brand4.png') }}" alt="">
                </div>

                <div class="home__brand">
                    <img src="{{ asset('images/brand5.png') }}" alt="">
                </div>

                <div class="home__brand">
                    <img src="{{ asset('images/brand6.jpg') }}" alt="">
                </div>

                <div class="home__brand">
                    <img src="{{ asset('images/brand7.png') }}" alt="">
                </div>

                <div class="home__brand">
                    <img src="{{ asset('images/brand8.png') }}" alt="">
                </div>

                <div class="home__brand">
                    <img src="{{ asset('images/brand1.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="home__about-us position-relative">

            <div>
                <img class="home__about-us--image" src="{{ asset('images/item7.b20ddf66.png') }}" alt="">
                <img class="foot--image position-absolute" src="{{ asset('images/item8.eb68ec74.png') }}"
                    alt="">
            </div>

            <div class="home__about-us__container">
                <div class="home__about-us__top d-flex justify-content-between">
                    <div class="home__about-us__content">
                        <h1 class="title-why">Về chúng tôi</h1>
                        <h1 class="h2">Sứ mệnh</h1>
                        <p>Tạo cơ hội việc làm và phát triển cho mọi lực lượng lao động ở Việt Nam.</p>
                        <h1 class="h2">Tầm nhìn</h1>
                        <p>Trở thành mạng xã hội việc làm phổ thông lớn nhất tại Việt Nam tầm nhìn đến năm 2025</p>
                        <p><b>Tinh thần trách nhiệm là phẩm chất cốt lõi:</b> Mỗi thành viên của NQA luôn đề cao trách nhiệm
                            với khách hàng, với bản thân và với công ty.</p>
                        <p><b>Công nghệ là nền tảng: </b>NQA ứng dụng công nghệ trong mọi hoạt động vận hành nội bộ cũng như
                            quá trình bán dịch vụ nhằm tối ưu hiệu quả.</p>
                        <p><b>Dịch vụ khách hàng với WOW SERVICE: </b>NQA mang đến những trải nghiệm WOW đối với khách hàng
                            thông qua những dịch vụ vượt trội. Với nhà tuyển dụng,
                            NQA cung cấp dịch vụ tư vấn chuyên nghiệp, tốc độ tìm kiếm nhân sự tối ưu, cam kết đầu ra đi kèm
                            với chính sách bảo hành. Với ứng viên,
                            NQA mang đến trải nghiệm tìm kiếm việc làm dễ dàng, nhanh chóng và uy tín</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/img-p1.16802923.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('js/User/Personally/home.js') }}"></script>
    <script>
        const tabs = document.querySelectorAll('.nav-tabs__link');
        const currentSlider = document.querySelector('.nav-tabs__slider');

        let url = location.href.split('-');

        let temp = url[1].split('?');

        tabs.forEach(e => {
            let data = e.getAttribute("data");

            if (temp[0] === data || url[1] == data) {
                currentSlider.style.left = e.offsetLeft + 'px';
                currentSlider.style.width = e.offsetWidth + 'px';
            }
        });
    </script>
@endsection
