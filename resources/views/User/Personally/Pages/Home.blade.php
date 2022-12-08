@extends("User.Personally.Layouts.Main")

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section("content")
    <section id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active btn-slider__banner" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="btn-slider__banner" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="btn-slider__banner" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" class="btn-slider__banner" aria-label="Slide 4"></button>
        </div>

        <div class="col-1 search-quickly">
            <div class="search-quickly__content">
                <h3 class="h4">Đón lấy thành công với</h3>
                <h5 class="h6">23,166 cơ hội nghề nghiệp</h5>
                <form>
                    <div class="mb-3 container-input--form">
                        <i class="fa-solid fa-magnifying-glass position-absolute container-input--form-icon"></i>
                        <input type="email" class="form-control input-form" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
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
                <img src="{{ asset("images/banner1.jpg") }}" class="d-block w-100 banner-personally" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset("images/banner2.jpg") }}" class="d-block w-100 banner-personally" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset("images/banner5.jpg") }}" class="d-block w-100 banner-personally" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset("images/banner4.jpg") }}" class="d-block w-100 banner-personally" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev arrow" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next arrow" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>

    <section>
        <div class="title">
            <h1 class="title-why text-center h2 font-bold m-5"><b>Nhà tuyển dụng hàng đầu</b></h1>
        </div>

            <div class="post_employer-tabs">
                <ul class="d-flex nav-tabs">
                    <span class="nav-tabs__slider"></span>
                    <li class="nav-item nav-tab--item">
                      <a class="nav-tabs__link h4" data='hot' href="{{ route("personally.posts_hot_employer") }}">Việc Làm Nổi Bật</a>
                    </li>
                    <li class="nav-item nav-tab--item">
                      <a class="nav-tabs__link h4" data='vip' href="{{ route("personally.posts_vip_employer") }}">Việc Làm VIP ($1000+)</a>
                    </li>
                    <li class="nav-item nav-tab--item">
                      <a class="nav-tabs__link h4" data='more' href="#">Việc làm mới cập nhật</a>
                    </li>
                </ul>

                <div class="posts_employer">
                    @yield("posts_employer")
                </div>
            </div>
    </section>

    <section class="home__reason">
        <img src="{{ asset('images/decor6.9a137693.png') }}" alt="" class="home__reason-image home__reason-image-one">

        <div class="title">
            <h1 class="text-center h2 font-bold m-5"><b>Tại sao NQA là <span class="title-why">giải pháp tối ưu cho <br> ứng viên tìm việc làm phổ thông?</span></b></h1>
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
                    <h1 class="h4 text-center">Tự động tìm kiếm & matching tuyển dụng với <br><span>công việc phù hợp chỉ trong 5 phút</span></h1>
                    <img src="{{ asset('images/w2.92a857d2.png') }}" alt="">
                </div>
            </div>
            <div class="home__reson--item">
                <div class="home__reson--item-content">
                    <h1 class="h4 text-center">Nhà tuyển dụng phù hợp với <br><span>công việc chỉ trong tối đa 24H</span></h1>
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

        <img src="{{ asset('images/item5.831000b1.png') }}" alt="" class="home__reason-image home__reason--image-two">
    </section>

    <section class="home_top-career">
        <div class="title">
            <h1 class="text-center h2 font-bold m-5"><b><span class="title-why">Ngành nghề trọng điểm</span></b></h1>
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

                <a href="#"  class="slider_top-career--item-nav">
                    <img src="{{ asset('images/career_2.png') }}" class="slider_top-career--item-image" alt="">

                    <div class="slider_top-career--item__content">
                        <h2 class="h5">Dịch vụ khách hàng</h2>
                        <p>(3.264 việc làm)</p>
                    </div>
                </a>

                <a href="#"  class="slider_top-career--item-nav">
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
@endsection

@section("js")
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" ></script>
<script src="{{ asset('js/User/Personally/home.js') }}"></script>
<script>
        const tabs = document.querySelectorAll('.nav-tabs__link');
        const currentSlider= document.querySelector('.nav-tabs__slider');

        let url = location.href.split('-');

        tabs.forEach(e => {
            let data = e.getAttribute("data");

            if(url[1] === data)
            {
                currentSlider.style.left = e.offsetLeft + 'px';
                currentSlider.style.width = e.offsetWidth + 'px';
            }
        });
    </script>
@endsection
