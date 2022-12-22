@extends('User.Personally.Layouts.Layout_connect')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/User/Personally/recover.css') }}">
@endsection

@section('title_content')
    <div class="connect__title--content">
        <h1 class="h4 fw-bold text-center pt-3">Quên mật khẩu</h1>
        <p class="text-center pt-1">Nhập Email tài khoản của bạn và kiểm tra mã xác thực trong hồm thư Email để lấy lại mật
            khẩu
        </p>
    </div>
@endsection

@section('content')
    <form class="form_submit form__submit--recover" action="" method="GET">
        <div class="form__input w-100 position-relative">
            <input type="text" id="email" class="input__email w-100 form_input--information" placeholder=" ">
            <label for="email" class="form_input--label position-absolute"><span>*</span> Email</label>
        </div>

        <p class="form__error">error</p>

        <div class="d-flex justify-content-between">
            <div class="form__input w-100 position-relative">
                <input type="otp" id="otp" class="input__otp w-100 form_input--information" placeholder=" ">
                <label for="otp" class="form_input--label position-absolute"><span>*</span> OTP</label>
            </div>

            <button class="send__otp">Nhận mã xác thực</button>
        </div>

        <p class="form__error">error</p>

        <div class="form__input w-100 position-relative">
            <input type="password" id="password" class="input__password w-100 form_input--information" placeholder=" ">
            <label for="password" class="form_input--label position-absolute"><span>*</span> New password</label>
        </div>

        <p class="form__error">error</p>

        <input type="submit" class="submit_form" value="Lấy lại mật khẩu">

        <div class="form__user">
            <p class=" text-right">Quay lại trang: <a href="{{ route('login.show') }}"> Đăng nhập</a></p>
        </div>
    </form>
@endsection

@section('js')
@endsection
