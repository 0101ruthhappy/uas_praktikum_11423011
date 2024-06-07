@extends('layout.template')

@section('title', 'DEL Badminton')

@section('header5', 'header5')

@section('content')
    
    <!---->
	<div class="back">
		<h2>Login</h2>
	</div>
	<!---->
	<div class="container">

		<div class="account_grid">
			<div class=" login-right" style="color: #333; background-color: #f9f9f9;">
				<h3 style="color: #0056b3;">LOGIN USER</h3>
				@if (session('message_success'))
					<ol class="breadcrumb" style="background-color: green; color: #fff;">
						<li class="">{{ session('message_success') }}</li>
					</ol>
				@endif
				
				@if (session('message_fail'))
					<ol class="breadcrumb" style="background-color: #ff5d56; color: #fff;">
						<li class="">{{ session('message_fail') }}</li>
					</ol>
				@endif
				<form action="{{ route('user.masuk') }}" method="POST">
                    @csrf
					<div>
						<span>Username / Email</span>
						<input type="text" class="input" name="username" placeholder="Masukkan Username / Email">
					</div>
					<div>
						<span>Password</span>
						<input type="password" class="input" name="password" placeholder="Masukkan Password">
					</div>
					<a class="forgot" href="{{ route('password.request') }}" style="color: #ff0000; text-decoration: underline;">Lupa Password?</a>
					<input type="submit" value="Login" style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
					<a href="admin" style="color: #ff0000; text-decoration: none; margin-left: 10px;">Login Sebagai Admin</a>
					
					
				</form>
			</div>
			<div class="login-left" style="color: #333; background-color: #f9f9f9;">
				<h3 style="color: #0056b3;">PENGGGUNA BARU</h3>
				<a  href="{{ route('daftar') }}" style="color: #fff; background-color: #007bff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Buat Akun</a>
			</div>
			

		</div>

	</div>
	<!---->

@endsection