@extends('layouts.app')

@section('head')
        <!--content-->
    <div class="container">
        <div class="register">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('applyMessage') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">姓名</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="player_name" value="{{ old('player_name') }}">
				<input type="hidden" name="team_id" value="{{ $teamId }}">

                                @if ($errors->has('player_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('player_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">年龄</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="player_age" value="{{ old('player_age') }}">

                                @if ($errors->has('player_age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('player_age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">球场位置</label>

                            <div class="col-md-6">
                				<select name="player_position">
                					<option value="1">控球后卫</option>
                					<option value="2">得分后卫</option>
                					<option value="3">小前锋</option>
                					<option value="3">大前锋</option>
                					<option value="3">中锋</option>
                				</select>
                            </div>
                        </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">申请信息</label>
                            <div class="col-md-6">
                                <textarea name="message" autofocus>
                                </textarea>
                            </div>
            </div>            

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> 加入
                                </button>
                            </div>
			                 <div class="col-md-6 col-md-offset-4">
                                <div  class="btn btn-primary-qu">
                                    <i class="fa fa-btn fa-user"></i> <a style="color:white" href="{{ url('/') }}">取消</a>
                                </div>
                            </div>
                        </div>
                    </form>  
            <div class="clearfix"> </div>
</div>
</div>  
        <!--content-->
    <!--footer-->

</body>
</html>
@endsection
