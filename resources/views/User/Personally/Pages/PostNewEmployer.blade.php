@extends('User.Personally.Pages.Home')

@section('posts_employer')
    @if (!@empty($worksNew))
        @foreach ($worksNew as $item)
            <div class="nav-item d-flex nav-item__post">
                <a href="" class="nav-item__image">
                    <img src="{{ asset($item->logo) }}" alt="">
                </a>

                <div class="nav-item__content d-flex justify-content-between">
                    <div class="nav-item__content--left">
                        <a href="#" class="h4">{{ $item->title }}</a><br>
                        <a href="#" class="h6">{{ $item->name }}</a>
                        <p class="salary"><i class="fa-solid fa-dollar-sign"></i> Lương: <span
                                class="salary-content">{{ number_format($item->salary_from, 0, ',', '.') }}đ -
                                {{ number_format($item->salary_to, 0, ',', '.') }}đ</span> </p>
                        <p class="address"><i class="fa-solid fa-location-dot"></i> {{ $item->address_work }}</p>
                    </div>
                    <div class="nav-item__content--right">
                        <span class="btn title--icon">New</span>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection

@section('pagination')
    <div>
        {{ $worksNew->links() }}
    </div>
@endsection
