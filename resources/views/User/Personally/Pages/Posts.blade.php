@extends('User.Personally.Layouts.Main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/User/Personally/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/User/Personally/posts.css') }}">
@endsection

@section('content')
    <section class="container">
        <div class="search">
            <div class="search__histories">
                <a href="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Tìm gần đây: <span>Cong nghe thong tin</span>
                </a>
                <a href="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Từ khóa hot: <span>Marketing</span>
                </a>
                <a href="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Từ khóa hot: <span>Thực tập</span>
                </a>
                <a href="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Từ khóa hot: <span>Việt làm fulltime</span>
                </a>

                <a class="amount-work--search">
                    Tổng <span>59000</span> việc làm <span>Makerting</span> Tại <span> Việt Nam</span>
                </a>
            </div>

            <form action="{{ route('post.posts') }}" method="GET" class="post-search d-flex">
                <div class="mb-3 container-input--form w-100">
                    <i class="fa-solid fa-magnifying-glass position-absolute container-input--form-icon"></i>
                    <input value='{{ request()->search_keywords }}' type="text" class="form-control keyword-search input-form" name="search_keywords" id="quickly-name" placeholder=" ">
                    <label for="quickly-name" class="form-label">Tên công ty, tiêu đề</label>
                </div>

                <div class="search__city w-100">
                    <select class="form-select selected-address col" name="search_address" aria-label="Default select example">
                        <option value="0" selected>Tất cả địa điểm</option>

                        @foreach ($cities as $city)
                            <option {{ request()->search_address == $city->matp ? 'selected' : false }} value={{ $city->matp }}>{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>

                <input type="submit" class="search-submit w-25" value="Tìm kiếm">
            </form>
        </div>

        <div class="posts">
            <div class="posts__container">
                <div class="posts-sidebar">
                    <div class="posts-sidebar__items">
                        <ul class="posts-sidebar__item">
                            <li class="d-flex justify-content-between title-sidebar">
                                <h3 class="h5">Lọc tìm việc làm</h3>
                                <p><i class="fa-solid fa-rotate-left"></i> Đặt lại</p>
                            </li>
                        </ul>
                        <ul class="posts-sidebar__item">
                            <li>
                                <h3 class="h6">Sắp xếp theo</h3>
                            </li>
                            <li>
                                <select name="" class="form-select col post-item--sort-select" id="">
                                    <option value="0">Bài viết hôm nay</option>
                                    <option value="">Bài viết gần đây</option>
                                </select>

                                <select name="" class="form-select col post-item--sort-select" id="">
                                    <option value="0">Mức lương</option>
                                    <option value="3000000">Từ 3.000.000 đ</option>
                                    <option value="5000000">Từ 5.000.000 đ</option>
                                    <option value="7000000">Từ 7.000.000 đ</option>
                                    <option value="10000000">Từ 10.000.000 đ</option>
                                    <option value="15000000">Từ 15.000.000 đ</option>
                                    <option value="2000000">Từ 20.000.000 đ</option>
                                    <option value="3000000">Từ 30.000.000 đ</option>
                                    <option value="4000000">Từ 40.000.000 đ</option>
                                    <option value="5000000">Từ 50.000.000 đ</option>
                                    <option value="6000000">Từ 60.000.000 đ</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="posts-sidebar__item">
                            <li>
                                <h3 class="h6">Hình thức làm việc</h3>
                            </li>
                            @foreach ($typeWorks as $typeWork)
                                <li>
                                    <label for="typework_{{ $typeWork->id }}">
                                        <input type="checkbox" id="typework_{{ $typeWork->id }}" name=""
                                            value="{{ $typeWork->id }}">
                                        {{ $typeWork->name }}</label>
                                </li>
                            @endforeach
                        </ul>
                        <ul class="posts-sidebar__item">
                            <li>
                                <h3 class="h6">Kinh nghiệm</h3>
                            </li>
                            <li>
                                <label for="experience_1">
                                    <input id='experience_1' type="checkbox" value="0" data-to=1> Dưới 1 năm
                                </label>
                            </li>
                            <li>
                                <label for="experience_2">
                                    <input id='experience_2' type="checkbox" value="1" data-to=3> Từ 1-3 năm
                                </label>
                            </li>
                            <li>
                                <label for="experience_3">
                                    <input id='experience_3' type="checkbox" value="3" data-to=5> Từ 3-5 năm
                                </label>
                            </li>
                            <li>
                                <label for="experience_4">
                                    <input id='experience_4' type="checkbox" value="5" data-to=10> Từ 5-10 năm
                                </label>
                            </li>
                            <li>
                                <label for="experience_5">
                                    <input id='experience_5' type="checkbox" value="11" data-to=60> Trên 10 năm
                                </label>
                            </li>
                        </ul>
                        <ul class="posts-sidebar__item">
                            <li>
                                <h3 class="h6">Danh mục công việc</h3>
                            </li>
                            @foreach ($careers as $career)
                                <li>
                                    <label for="career_{{ $career->id }}">
                                        <input id="career_{{ $career->id }}" type="checkbox" name=""
                                            value="{{ $career->id }}">
                                        {{ $career->name }}</label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="posts-items">
                    {{--  @if ($posts)


                    @endif  --}}
                    @csrf
                    @method('DELETE')


                    <div class="pagination posts-pagination">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/User/Personally/interested.js') }}"></script>
    <script src="{{ asset('js/User/Personally/post.js') }}"></script>

@endsection
