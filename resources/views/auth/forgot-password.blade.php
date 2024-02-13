@extends('layouts.master_authen')
@section('content')
<div class="limiter">
	<div class="container-login100">
   
		<div class="wrap-login100">
        
			<form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
        	@csrf
			
				
				
				<div class="wrap-input100 validate-input mt-4" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" name="email">
					<span class="focus-input100"></span>
					<span class="label-input100">Email</span>
				</div>
                <x-auth-session-status class="mb-4 text-success" :status="session('status')" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
				<div class="container-login100-form-btn mt-4">
					<button class="login100-form-btn">
                    Email Password Reset Link
					</button>
				</div>
                
				<div class="login100-form-social flex-c-m">
					<a href="{{route('login')}}" class="txt2 bo1"><br>
                    กลับเข้าสู่ระบบ
					</a>
				</div>
			</form>

			
			</div>
		</div>
	</div>
</div>
@endsection