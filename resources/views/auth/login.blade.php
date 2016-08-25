@extends('layouts.app')

@section('head')
		<!--content-->
		<div class="container">
			<div class="register">
		  	  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}"> 
		  	  	 {{ csrf_field() }}
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					<div class="mation">
						<span> 账户</span>
						<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
						 <span>密码</span>
						 <input id="password" type="password" class="form-control" name="password">
					</div>
					<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                    <label>
                                        <input   type="checkbox" name="remember"> 记住密码
                                    </label>
                          </div>
                    </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button style="margin-left:0px; margin-top:0px" type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> 登陆
                                </button>
				<div style="margin-left:0px; margin-top:0px" class="btn btn-primary-qu">
                                    <i class="fa fa-btn fa-sign-in"></i><a style="color:#fff;" href="{{ url('register')}}"> 注册</a>
                                </div>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">忘记密码?</a>
                            </div>
                        </div>
					 
				</div>
				    
				</form>
				<div class="clearfix"> </div>
</div>
</div>	
		<!--content-->

</body>
</html>
@endsection
