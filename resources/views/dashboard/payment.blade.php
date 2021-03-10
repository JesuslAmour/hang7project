@extends('dashboard.layouts.master', ['title' => 'Payment'])

@section('body')
<div class='box'>
    <div class='box-form'>
        <div class='box-login-tab'></div>
        <div class='box-login-title'>
            <div class='i i-login'></div><h2>PAYEMENT</h2>
        </div>
        <div class='box-login'>
            <div class='fieldset-body' id='login_form'>
                <p class='field'>
                    <label for='user'>Nom du contribuable</label>
                    <input type='text' id='user' name='user' title='Username' />
                    <span id='valida' class='i i-warning'></span>
                </p>
                <p class='field'>
                    <label for='pass'>Type de Regime</label>
                    <input type='password' id='pass' name='pass' title='Password' />
                    <span id='valida' class='i i-close'></span>
                </p>
                <p class='field'>
                    <label for='pass'>Montant</label>
                    <input type='password' id='pass' name='pass' title='Password' />
                    <span id='valida' class='i i-close'></span>
                </p>
                <p class='field'>
                    <label for='pass'>Personnel ID</label>
                    <input type='password' id='pass' name='pass' title='Password' />
                    <span id='valida' class='i i-close'></span>
                </p>

                <button onclick="openLoginInfo();" class='b b-form' title='Mais Informações'>Mode de payement<span class='i i-login'></span></button>
                <label >
                    <!-- <input type='checkbox' value='TRUE' title='Keep me Signed in' /> Keep me Signed in -->
                </label>

                <input type='submit' id='do_login' value='VALIDER le PAYEMENT' title='Get Started' />
            </div>
        </div>
    </div>
    <div class='box-info'>
        <p><button onclick="closeLoginInfo();" class='b b-info i i-left' title='Back to Sign In'></button><h3>procédure</h3>
        </p>
        <div class='line-wh'></div>
        <div class="operator">
            <img src="{{ url('dashboard/img/om.png') }}" alt="OM">
            <input type="Number" placeholder="+237 691057942">
        </div>
        <div class="operator">
            <img src="{{ url('dashboard/img/momo.jpeg') }}" alt="MOMO">
            <input type="Number" placeholder="+237 652479128">
        </div>
        <button onclick="" class='b-support' title='Forgot Password?'><img src="{{ url('dashboard/img/paypal.png') }}" alt="MOMO"></button>
        <div class='line-wh'></div>
        <button onclick="" class='b-cta' title='Sign up now!'> PAYEMENT</button>
    </div>
</div>

<div class='icon-credits'>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a>, <a href="http://www.flaticon.com/authors/budi-tanrim" title="Budi Tanrim">Budi Tanrim</a> & <a href="http://www.flaticon.com/authors/nice-and-serious" title="Nice and Serious">Nice and Serious</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
@stop

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('dashboard/css/payment.css') }}"/>
@stop

@section('script.footer')
    <script src="{{ asset('dashboard/js/payment.js') }}"></script>
@stop

