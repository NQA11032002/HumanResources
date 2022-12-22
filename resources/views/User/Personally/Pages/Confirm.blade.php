@extends('User.Personally.Layouts.Layout_connect')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/User/Personally/register.css') }}">
@endsection

@section('title_content')
    <div class="connect__title--content">
        <h1 class="h4 fw-bold text-center pt-3">Xác minh tài khoản</h1>
        <p class="text-center pt-1">Chúng tôi sẽ gửi mã OTP qua Email bạn đã đăng ký.!!! Vui lòng xác minh Email để thực hiện
            đăng nhập</p>
    </div>
@endsection

@section('content')
    <form class="form_submit form__submit--confirm" action="" method="POST">
        <div class="d-flex contain__otp align-items-center justify-content-center">
            <input type="text" placeholder=" ">
            <span>-</span>
            <input type="text" placeholder=" ">
            <span>-</span>
            <input type="text" placeholder=" ">
            <span>-</span>
            <input type="text" placeholder=" ">
        </div>

        <p class="form__error text-center">error</p>

        <div class="otp">
            <p>Mã OTP hết hạn trong: <span class="time__otp">5:55</span></p>
            <button class="send__otp">Yêu cầu gửi lại mã</button>
        </div>

        <input type="submit" class="submit_form" value="Xác nhận">

    </form>
@endsection

@section('js')
@endsection
