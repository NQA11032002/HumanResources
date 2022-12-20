@extends('User.Personally.Pages.Home')

@section('posts_employer')
    @if (!@empty($worksNew))
        @foreach ($worksNew as $item)
            <a href="#" class="nav-item d-flex nav-item__post position-relative">
                <div class="nav-item__image home-item--image">
                    <img src="{{ asset($item->logo) }}" alt="">
                </div>

                <div class="nav-item__content d-flex justify-content-between position-relative">
                    <div class="nav-item__content--left">
                        <p class="h4">{{ $item->title }}</p>
                        <p class="h6">{{ $item->name }}</p>
                        <p class="salary"><i class="fa-solid fa-dollar-sign"></i> Lương: <span class="salary-content">{{
                                number_format($item->salary_from, 0, ',', '.') }}đ -
                                {{ number_format($item->salary_to, 0, ',', '.') }}đ</span> </p>
                        <p class="address"><i class="fa-solid fa-location-dot"></i> {{ $item->address_work }}</p>
                        <p class="typework">
                            <i class = "fa-solid fa-location-dot"></i> {{ $item->name_Tyework }} <span class='experiences'>(Kinh nghiệm: {{ $item->experience }} năm)</span>
                        </p>
                        <p class="date-at"><i class="fa-solid fa-clock"></i> Đăng ngày
                            {{date('d-m-Y',strtotime($item->created_at))}}
                            . Cập nhật ngày {{date('d-m-Y',strtotime($item->updated_at))}}
                        </p>
                    </div>

                    @if(date('Y',strtotime($item->created_at)) >= date('Y') && date('m',strtotime($item->created_at)) >= date('m') && date('d') - date('d',strtotime($item->created_at)) <= 7
                    || date('Y',strtotime($item->updated_at)) >= date('Y')  && date('m',strtotime($item->updated_at)) >= date('m')  && date('d') - date('d',strtotime($item->updated_at)) <= 7)
                        <span class="title--icon title--icon--new">(New)</span>
                    @endif
                </div>
            </a>
        @endforeach
    @endif
@endsection

@section('pagination')
<div class="nav__pagination">
    {{ $worksNew->links() }}
</div>
@endsection
