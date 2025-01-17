{{-- <form class="form bravo-form-register" method="post">
    @csrf
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="first_name" autocomplete="off" placeholder="{{__("First Name")}}">
                <i class="input-icon field-icon icofont-waiter-alt"></i>
                <span class="invalid-feedback error error-first_name"></span>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="last_name" autocomplete="off" placeholder="{{__("Last Name")}}">
                <i class="input-icon field-icon icofont-waiter-alt"></i>
                <span class="invalid-feedback error error-last_name"></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="phone" autocomplete="off" placeholder="{{__('Phone')}}">
        <i class="input-icon field-icon icofont-ui-touch-phone"></i>
        <span class="invalid-feedback error error-email"></span>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" autocomplete="off" placeholder="{{__('Email address')}}">
        <i class="input-icon field-icon icofont-mail"></i>
        <span class="invalid-feedback error error-email"></span>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" autocomplete="off" placeholder="{{__('Password')}}">
        <i class="input-icon field-icon icofont-ui-password"></i>
        <span class="invalid-feedback error error-password"></span>
    </div>
    <div class="form-group">
        <label for="term">
            <input id="term" type="checkbox" name="term" class="mr5">
            {!! __("I have read and accept the <a href=':link' target='_blank'>Terms and Privacy Policy</a>",['link'=>get_page_url(setting_item('booking_term_conditions'))]) !!}
            <span class="checkmark fcheckbox"></span>
        </label>
        <div><span class="invalid-feedback error error-term"></span></div>
    </div>
    @if(setting_item("user_enable_register_recaptcha"))
        <div class="form-group">
            {{recaptcha_field($captcha_action ?? 'register')}}
        </div>
        <div><span class="invalid-feedback error error-g-recaptcha-response"></span></div>
    @endif
    <div class="error message-error invalid-feedback"></div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary form-submit btn-account">
            {{ __('Sign Up') }}
            <span class="spinner-grow spinner-grow-sm icon-loading" role="status" aria-hidden="true"></span>
        </button>
    </div>
    @if(setting_item('facebook_enable') or setting_item('google_enable') or setting_item('twitter_enable'))
        <div class="advanced">
            <p class="text-center f14 c-grey">{{__("or continue with")}}</p>
            <div class="row">
                @if(setting_item('facebook_enable'))
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{url('/social-login/facebook')}}" class="btn btn_login_fb_link"
                           data-channel="facebook">
                            <i class="input-icon fa fa-facebook"></i>
                            {{__('Facebook')}}
                        </a>
                    </div>
                @endif
                @if(setting_item('google_enable'))
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{url('social-login/google')}}" class="btn btn_login_gg_link" data-channel="google">
                            <i class="input-icon fa fa-google"></i>
                            {{__('Google')}}
                        </a>
                    </div>
                @endif
                @if(setting_item('twitter_enable'))
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{url('social-login/twitter')}}" class="btn btn_login_tw_link" data-channel="twitter">
                            <i class="input-icon fa fa-twitter"></i>
                            {{__('Twitter')}}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    @endif
    <div class="c-grey f14 text-center">
       {{__(" Already have an account?")}}
        <a href="#" data-target="#login" data-toggle="modal">{{__("Log In")}}</a>
    </div>
</form> --}}


<form action="#" class="form bravo-form-register-owner" method="post">
    @csrf
    @if(setting_item('facebook_enable') or setting_item('google_enable') or setting_item('twitter_enable'))
        <div class="row">
            @if(setting_item('facebook_enable'))
                <div class="col-lg-12">
                    <a href="{{url('/social-login/facebook')}}" class="btn_login_fb_link" data-channel="facebook">
                        <button type="button" class="btn btn-block btn-fb"><i class="fa fa-facebook float-left mt5"></i> {{ __('Login with Facebook') }}</button>
                    </a>
                </div>
            @endif
            @if(setting_item('google_enable'))
                <div class="col-lg-12">
                    <a href="{{url('social-login/google')}}">
                        <button type="button" class="btn btn-block btn-googl"><i class="fa fa-google float-left mt5"></i> {{ __('Login with Google') }}</button>
                    </a>
                </div>
            @endif

            @if(setting_item('twitter_enable'))
                <div class="col-lg-12">
                    <a href="{{url('social-login/twitter')}}">
                        <button type="button" class="btn btn-block btn-tw"><i class="fa fa-twitter float-left mt5"></i> {{ __('Login with Twitter') }}</button>
                    </a>
                </div>
            @endif
        </div>
        <hr>
    @endif
    <div class="form-group input-group">
        <input type="text" class="form-control"  name="first_name" autocomplete="off" placeholder="{{__("First Name")}}">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="flaticon-user"></i></div>
        </div>
        <span class="invalid-feedback error error-first_name"></span>
    </div>
    <div class="form-group input-group">
        <input type="text" class="form-control"  name="last_name" autocomplete="off" placeholder="{{__("Last Name")}}">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="flaticon-user"></i></div>
        </div>
        <span class="invalid-feedback error error-last_name"></span>
    </div>
    <div class="form-group input-group">
        <input type="email" class="form-control"  name="email" autocomplete="off" placeholder="{{__('Email address')}}">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
        </div>
        <span class="invalid-feedback error error-email"></span>
    </div>
    {{-- <div class="form-group input-group">
        <input type="text" class="form-control" name="phone" autocomplete="off" placeholder="{{__('Phone')}}">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-phone"></i></div>
        </div>
        <span class="invalid-feedback error error-phone"></span>
    </div> --}}
    <div class="form-group input-group">
        <input type="password" class="form-control" id="exampleInputPassword2" name="password" autocomplete="off" placeholder="{{__('Password')}}">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="flaticon-password"></i></div>
        </div>
        <span class="invalid-feedback error error-password"></span>
    </div> 
    <div class="form-group custom-control custom-checkbox" style = "display:none">
       
        <input type="radio" id="ower" name="type_role" value="Owner" checked>
        <label for="owner">Owner</label>
        <span class="invalid-feedback error error-type_role"></span>
        
    </div>

    <div class="form-group custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="term" id="exampleCheck12">
        <label class="custom-control-label" for="exampleCheck12">{{ __('I have read and accept the Terms and Privacy Policy?') }}</label>
    </div>
    <div><span class="invalid-feedback error error-term"></span></div>

    @if(setting_item("user_enable_register_recaptcha"))
        <div class="form-group">
            {{recaptcha_field($captcha_action ?? 'register')}}
        </div>
        <div><span class="invalid-feedback error error-g-recaptcha-response"></span></div>
    @endif
    <div class="error message-error invalid-feedback"></div>
    <button type="submit" class="btn btn-log btn-block btn-thm">{{ __('Sign Up') }}</button>
    <p class="text-center">{{ __('Already have an account? ') }}<a class="text-thm" href="javascript:void(0)" data-target="#login" data-toggle="modal">{{ __('Log In') }}</a></p>
</form>
