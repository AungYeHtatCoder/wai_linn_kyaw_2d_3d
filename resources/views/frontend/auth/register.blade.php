@extends('user_layouts.master')

@section('style')
<style>
    .input-group{
        border-radius: 30px !important;
        background: #fff;
        padding: 5px;
    }
    .fa-user-circle{
        font-size: 25px;
    }
    input:focus {
        box-shadow: none !important;
        border: none !important;
    }
    #login{
        max-height: 100vh;
        padding-top:100px;
    }

</style>
@endsection

@section('content')
<div class="container" id="login">
    {{-- <h1 class="text-center">Register Here</h1> --}}
    <div class="row">
        <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
            <a href="{{ url('/') }}" class="text-center text-decoration-none text-white">
                <h3 class="mb-4">DELIGHT 2D | 3D</h3>
            </a>
            <h5 class="text-center mb-4">Sign Up</h5>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white border border-0"><i class="fa-regular fa-user-circle text-purple"></i></span>
                        <input type="text" name="name" class="form-control border border-0" placeholder="အမည်">
                        {{-- <span class="input-group-text bg-white border border-0">.00</span> --}}
                    </div>
                    @error('name')
                    <span class="text-danger d-block ps-3 pt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white border border-0"><i class="fas fa-envelope text-purple"></i></span>
                        <input type="email" name="email" class="form-control border border-0" placeholder="အီးမေးလ်">
                        {{-- <span class="input-group-text bg-white border border-0">.00</span> --}}
                    </div>
                    @error('email')
                    <span class="text-danger d-block ps-3 pt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white border border-0"><i class="fas fa-phone-volume text-purple"></i></span>
                        <input type="number" name="phone" class="form-control border border-0" placeholder="ဖုန်းနံပါတ်">
                        {{-- <span class="input-group-text bg-white border border-0">.00</span> --}}
                    </div>
                    @error('phone')
                    <span class="text-danger d-block ps-3 pt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white border border-0"><i class="fas fa-key text-purple"></i></span>
                        <input type="password" name="password" id="password" class="form-control border border-0" placeholder="လျှို့ဝှက်နံပါတ်ထည့်ပါ">
                        <span class="input-group-text bg-white border border-0"><i class="fas fa-eye text-purple" id="eye" onclick="PwdView()" style="cursor: pointer;"></i></span>
                    </div>
                    @error('password')
                    <span class="text-danger d-block ps-3 pt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white border border-0"><i class="fas fa-key text-purple"></i></span>
                        <input type="password" name="password_confirmation" id="password1" class="form-control border border-0" placeholder="လျှို့ဝှက်နံပါတ်ထပ်ထည့်ပါ">
                        <span class="input-group-text bg-white border border-0"><i class="fas fa-eye text-purple" id="eye1" onclick="PwdView1()" style="cursor: pointer;"></i></span>
                    </div>
                    @error('password_confirmation')
                    <span class="text-danger d-block ps-3 pt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-5">
                    {{-- <div class="d-flex justify-content-end mb-4">
                        <a href="" class="text-decoration-none text-white">Forget Password?</a>
                    </div> --}}
                    <button class="btn btn-purple text-white w-100" style="border-radius: 30px;" type="submit">Create Account</button>
                    <div class="d-flex justify-content-center mt-4">
                        <span>Already Have An Account?</span>
                        <a href="{{ route('login') }}" class="text-white ms-2">Sign In</a>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>
@endsection

@section('script')
<script>
    function PwdView() {
        var x = document.getElementById("password");
        var y = document.getElementById("eye");

        if (x.type === "password") {
            x.type = "text";
            y.classList.remove('fa-eye');
            y.classList.add('fa-eye-slash');
        } else {
            x.type = "password";
            y.classList.remove('fa-eye-slash');
            y.classList.add('fa-eye');
        }
    }
    function PwdView1() {
        var x = document.getElementById("password1");
        var y = document.getElementById("eye1");

        if (x.type === "password") {
            x.type = "text";
            y.classList.remove('fa-eye');
            y.classList.add('fa-eye-slash');
        } else {
            x.type = "password";
            y.classList.remove('fa-eye-slash');
            y.classList.add('fa-eye');
        }
    }

</script>
@endsection
