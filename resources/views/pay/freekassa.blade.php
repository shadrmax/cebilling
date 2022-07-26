@extends('layouts.ample')
@section('content')
    <div class="row">
        <div class="col-md-5 col-sm-1">
            <form method='post' action='/pay/step2'>
                @csrf
                <input type='hidden' name='m' value='{{  env('FREEKASSA_MERCHANT_ID') }}'>
                <input type='text' name='oa' placeholder="10.00">
                <input type='hidden' name='o' value='Пополнение баланса пользователя, {{ Auth::user()->name }}'>
                <input type='hidden' name='currency' value='RUB'>
                <input type='hidden' name='lang' value='ru'>
                <input type='hidden' name='us_login' value='{{ Auth::user()->name }}'>
                <input type='submit' name='pay' value='Оплатить'>
            </form>
        </div>
    </div>
@endsection
