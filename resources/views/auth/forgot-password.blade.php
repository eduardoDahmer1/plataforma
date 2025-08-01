<style>
// Set background image (pattern)

* {
    -ms-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    border: 0;
}

html,
body {
    width: 100%;
    height: 100%;
    background: url(https://subtlepatterns.com/patterns/sativa.png) repeat fixed;
    font-family: 'Open Sans', sans-serif;
    font-weight: 200;
}

// Start styles in form

.login {
    position: relative;
    top: 50%;
    width: 250px;
    display: table;
    margin: -150px auto 0 auto;
    background: #fff;
    border-radius: 4px;
}

.legend {
    position: relative;
    width: 100%;
    display: block;
    background: #FF7052;
    padding: 15px;
    color: #fff;
    font-size: 20px;

    &:after {
        content: "";
        background-image: url(http://simpleicon.com/wp-content/uploads/multy-user.png);
        background-size: 100px 100px;
        background-repeat: no-repeat;
        background-position: 152px -16px;
        opacity: 0.06;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        position: absolute;
    }
}

.input {
    position: relative;
    width: 90%;
    margin: 15px auto;

    span {
        position: absolute;
        display: block;
        color: darken(#EDEDED, 10%);
        left: 10px;
        top: 8px;
        font-size: 20px;
    }

    input {
        width: 100%;
        padding: 10px 5px 10px 40px;
        display: block;
        border: 1px solid #EDEDED;
        border-radius: 4px;
        transition: 0.2s ease-out;
        color: darken(#EDEDED, 30%);

        &:focus {
            padding: 10px 5px 10px 10px;
            outline: 0;
            border-color: #FF7052;
        }
    }
}

.submit {
    width: 45px;
    height: 45px;
    display: block;
    margin: 0 auto -15px auto;
    background: #fff;
    border-radius: 100%;
    border: 1px solid #FF7052;
    color: #FF7052;
    font-size: 24px;
    cursor: pointer;
    box-shadow: 0px 0px 0px 7px #fff;
    transition: 0.2s ease-out;

    &:hover,
    &:focus {
        background: #FF7052;
        color: #fff;
        outline: 0;
    }
}

.feedback {
    position: absolute;
    bottom: -70px;
    width: 100%;
    text-align: center;
    color: #fff;
    background: #2ecc71;
    padding: 10px 0;
    font-size: 12px;
    display: none;
    opacity: 0;

    &:before {
        bottom: 100%;
        left: 50%;
        border: solid transparent;
        content: "";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(46, 204, 113, 0);
        border-bottom-color: #2ecc71;
        border-width: 10px;
        margin-left: -10px;

    }
}
</style>

<x-guest-layout>

    <div class="container">
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form class="login" method="POST" action="{{ route('password.email') }}">
            @csrf
            <fieldset>
                <legend class="legend">Forgot Your Password?</legend>

                <div class="input">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required
                        autofocus />
                    <span><i class="fa fa-envelope-o"></i></span>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="submit"><i class="fa fa-long-arrow-right"></i></button>
                </div>
            </fieldset>

            @if(session('status'))
            <div class="feedback">
                {{ session('status') }}
            </div>
            @endif
        </form>
    </div>
</x-guest-layout>

<script>
$(".input").focusin(function() {
    $(this).find("span").animate({
        "opacity": "0"
    }, 200);
});

$(".input").focusout(function() {
    $(this).find("span").animate({
        "opacity": "1"
    }, 300);
});

$(".login").submit(function() {
    $(this).find(".submit i").removeAttr('class').addClass("fa fa-check").css({
        "color": "#fff"
    });
    $(".submit").css({
        "background": "#2ecc71",
        "border-color": "#2ecc71"
    });
    $(".feedback").show().animate({
        "opacity": "1",
        "bottom": "-80px"
    }, 400);
    $("input").css({
        "border-color": "#2ecc71"
    });
    return false;
});
</script>