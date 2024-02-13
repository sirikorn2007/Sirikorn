@extends('layouts.master_authen')
@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(authen/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						reset-password
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('password.store') }}">
					@csrf
					<input type="hidden" name="token" value="{{ $request->route('token') }}">

					<div class="wrap-input100 validate-input m-b-26" data-validate="Email">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Enter email" value="{{$request->email}}">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Password">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Confirm Password">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">

						<div>
							<a href="{{route('login')}}" class="txt1">
								reset-password
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							ตกลง
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection