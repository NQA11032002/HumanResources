@extends("User.Personally.Pages.Home")

@section("posts_employer")
@if (!@empty($worksHot))
@foreach ($worksHot as $item)
<div class="nav-item d-flex nav-item__post position-relative">
    <a href="" class="nav-item__image">
        <img src="{{ asset($item->logo) }}" alt="">
    </a>

    <div class="nav-item__content d-flex justify-content-between position-relative">
        <div class="nav-item__content--left">
            <a href="#" class="h4">{{ $item->title }}</a><br>
            <a href="#" class="h6">{{ $item->name }}</a>
            <p class="salary"><i class="fa-solid fa-dollar-sign"></i> Lương: <span class="salary-content">{{
                    number_format($item->salary_from, 0, ',', '.') }}đ -
                    {{ number_format($item->salary_to, 0, ',', '.') }}đ</span> </p>
            <p class="address"><i class="fa-solid fa-location-dot"></i> {{ $item->address_work }}</p>
            <p class="date-at"><i class="fa-solid fa-clock"></i> Đăng ngày
                {{date('m-d-Y',strtotime($item->created_at))}}
                . Cập nhật ngày {{date('m-d-Y',strtotime($item->updated_at))}}
            </p>
        </div>


        <span class="title--icon title--icon--new">(Hot)</span>
    </div>

    @if(in_array($item->id,$interests))
    <i class="fa-solid fa-bookmark icon-interested icon-interested--save" data-id={{$item->id}}></i>
    @else
    <i class="fa-solid fa-bookmark icon-interested icon-interested--unsave" data-id={{ $item->id }}></i>
    @endif
</div>
@endforeach
@endif
@endsection


@section('pagination')
<div class="nav__pagination">
    {{ $worksHot->links() }}
</div>
@endsection
