@extends('User.Personally.Layouts.Layout_connect')

@section('css')
@endsection

@section('title_content')
    <div class="connect__title--content">
        <h1 class="h4 fw-bold text-center pt-3">Chào mừng bạn đến với NQA</h1>
        <p class="text-center pt-1">Cùng xây dựng một hồ sơ nổi bật và nhận được các cơ hội sự nghiệp lý tưởng</p>
    </div>
@endsection

@section('content')
    <form class="form_submit" action="{{ route('login.login-check') }}" method="GET">
        <div class="form__input w-100 position-relative">
            <input type="email" id="email" name="email" value="{{ old('email') }}"
                class="input__email w-100 form_input--information" placeholder=" ">
            <label for="email" class="form_input--label position-absolute"><span>*</span> Email</label>
        </div>

        @error('email')
            <p class="form__error">{{ $message }}</p>
        @enderror

        <div class="form__input w-100 position-relative">
            <input type="password" name="password" value="{{ old('password') }}" id="passwords"
                class="input__passwords w-100 form_input--information" placeholder=" ">
            <label for="passwords" class="form_input--label position-absolute"><span>*</span> Password</label>
        </div>

        @error('password')
            <p class="form__error">{{ $message }}</p>
        @enderror

        @if (session('login_error'))
            <p class="form__error">{{ session('login_error') }}</p>
        @endif

        <input type="submit" class="submit_form" value="Đăng nhập">

        <div class="d-flex justify-content-between form__user">
            <p>Bạn chưa có tài khoản?<a href="{{ route('register.show') }}"> Đăng ký</a></p>
            <a href="{{ route('recover.show') }}">Quên mật khẩu?</a>
        </div>
    </form>
@endsection

@section('js')
@endsection
