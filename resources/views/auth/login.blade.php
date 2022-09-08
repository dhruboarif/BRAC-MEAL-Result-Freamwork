@extends('layouts.auth')

@section('title', 'User Authentication')

@section('style')
@endsection

@section('content')
    <section class="cd-intro">
        <div class="cd-intro-content mask"> <img class="fade-in" style="margin-bottom: 40px" src="{{ asset('assets/images/brac-logo-trn.png') }}" width="250" alt="logo">
            <h1 data-content="Archiving System"><span>Archiving System</span>
                <p>Automated Dashboard Manager &amp; Tracking</p>
            </h1>
            <div class="action-wrapper">
                <p>
                <div class="cd-btn main-action fade-in" onclick="openForm()">Get started</div>
                </p>
            </div>
        </div>
    </section>
    <div id="mainButton">
        <div class="modal">
            <div class="close-button" onclick="closeForm()">X</div>
            <img class="fade-in" style="margin-bottom: 30px" src="{{ asset('assets/images/brac-logo.png') }}" width="150" alt="logo">
            <div class="form-title">Sign In</div>
            <form id="loginForm" name="loginForm"  action="javascript:void(0)" method="POST" >
                @csrf
                <div class="input-group">
                    <input type="text" name="email" id="email" value="{{ old('email') }}" onblur="checkInput(this)"  autocomplete="email" autofocus  />
                    <label for="name">Username</label>
                    <div class="error" id="emailErr"></div>
                </div>
                <div class="input-group">
                <span class="btn-show-pass">
                    <img src="{{ asset('assets/images/eye.png') }}" alt="icon" width="20">
                </span>
                    <input type="password" name="password" id="password" onblur="checkInput(this)" autocomplete="off" autofocus maxlength="15" />
                    <label for="password">Password</label>
                    <div class="error" id="passErr"></div>
                </div>

                <input class="form-button" id="submit" type="submit" name="" value="Login" />
            </form>
            <!--<p style=" color:rgba(63,63,63,1.00); padding-top: 20px; font-size:14px; letter-spacing: 2px; cursor:pointer">Forgot Password? <a href="{{url('/register')}}">Register</a> </p>-->
            <div class="brk-by"></div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var button = document.getElementById('mainButton');

        var openForm = function() {
            button.className = 'active';
        };

        var checkInput = function(input) {
            if (input.value.length > 0) {
                input.className = 'active';
            } else {
                input.className = '';
            }
        };

        var closeForm = function() {
            button.className = '';
        };

        document.addEventListener("keyup", function(e) {
            if (e.keyCode == 27 || e.keyCode == 13) {
                closeForm();
            }
        });
    </script>

    <script>
        $('#email').val('');
        $('#password').val('');

        function limitText(field, maxChar){
            $(field).attr('maxlength',maxChar);
        }
        // Defining a function to display error message
        function printError(elemId, hintMsg) {
            $('.error').hide();
            $('#'+elemId).show();
            document.getElementById(elemId).innerHTML = hintMsg;
        }

        /*==================================================================
         [ Show pass ]*/
        var showPass = 0;
        $('.btn-show-pass').on('click', function(){
            if(showPass == 0) {
                $(this).next('input').attr('type','text');
                $(this).find('i').removeClass('zmdi-eye');
                $(this).find('i').addClass('zmdi-eye-off');
                showPass = 1;
            }
            else {
                $(this).next('input').attr('type','password');
                $(this).find('i').addClass('zmdi-eye');
                $(this).find('i').removeClass('zmdi-eye-off');
                showPass = 0;
            }
        });

        $('#submit').click(function (event) {
            var that = this;
            event.preventDefault();
            var email = $('#email').val();
            var password = $('#password').val()
            if( email === ''){
                printError("emailErr", 'The email field is required.');

            }else if(password === ''){
                printError("passErr", 'The password field is required.');

            }else{
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "{{ route('login') }}",
                    data: {
                        'email': email,
                        'password': password
                    },
                    beforeSend: function() {
                        $(that).attr("disabled", true);
                        $(that).val('Processing...');
                        /*swal({
                            title: 'Processing...',
                            showCancelButton: false,
                            showConfirmButton: false,
                        });*/
                    },
                    success: function(data) {
                        window.location = "{{ url('/home') }}";
                    },
                    error: function(data) {
                        printError("passErr", data.responseJSON.errors.email[0]);
                        $(that).val('Login');
                        $(that).attr("disabled", false);
                        // swal.close();
                    }
                });
            }

        });
    </script>
@endsection
