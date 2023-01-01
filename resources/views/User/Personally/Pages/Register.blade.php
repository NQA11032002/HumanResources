@extends('User.Personally.Layouts.Layout_connect')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/User/Personally/register.css') }}">
@endsection

@section('title_content')
    <div class="connect__title--content">
        <h1 class="h4 fw-bold text-center pt-3">Chào mừng bạn đến với NQA</h1>
        <p class="text-center pt-1">Cùng xây dựng một hồ sơ nổi bật và nhận được các cơ hội sự nghiệp lý tưởng</p>
    </div>
@endsection

@section('content')
    <form class="form_submit form_submit--register" action="{{ route('register.post-register') }}" method="POST">
        <div class="d-flex">
            <div class="form__input w-100 position-relative">
                <input type="text" value="{{ old('firstName') }}" name="firstName" id="firstName"
                    class="input__name w-100 form_input--information" placeholder=" ">
                <label for="firstName" class="form_input--label position-absolute"><span>*</span> First Name</label>
            </div>

            <div class="form__input w-100 position-relative form__input--lastname">
                <input type="text" id="lastName" value="{{ old('lastName') }}" name="lastName"
                    class="input__name w-100 form_input--information" placeholder=" ">
                <label for="lastName" class="form_input--label position-absolute"><span>*</span> Last Name</label>
            </div>
        </div>

        @error('firstName')
            <p class="form__error">{{ $message }}</p>
        @enderror

        @error('lastName')
            <p class="form__error">{{ $message }}</p>
        @enderror

        <div class="form__input w-100 position-relative">
            <input type="email" name="email" id="email" class="input__email w-100 form_input--information"
                placeholder=" ">
            <label for="email" class="form_input--label position-absolute"><span>*</span> Email</label>
        </div>

        @error('email')
            <p class="form__error">{{ $message }}</p>
        @enderror

        @if (session('email'))
            <p class="form__error">{{ session('email') }}</p>
        @endif

        <div class="form__input w-100 position-relative">
            <input type="password" name="password" id="passwords" class="input__passwords w-100 form_input--information"
                placeholder=" ">
            <label for="passwords" class="form_input--label position-absolute"><span>*</span> Password</label>
        </div>

        @error('password')
            <p class="form__error">{{ $message }}</p>
        @enderror

        <div class="regulation d-flex">
            <input type="checkbox">
            <p>Tôi đồng ý với các <a href="https://support.jobo.vn/dieu-khoan-su-dung.html"> Điều khoản</a>
                và <a href="https://support.jobo.vn/chinh-sach-quyen-rieng-tu.html"> Chính sách</a></p>
        </div>

        <input type="submit" class="submit_form" value="Đăng ký">

        <div class="form__user">
            <p>Bạn đã có tài khoản?<a href="{{ route('login.show') }}"> Đăng nhập</a></p>
        </div>

        @csrf
    </form>
@endsection

@section('js')
@endsection
