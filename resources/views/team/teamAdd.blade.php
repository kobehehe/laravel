@extends('layouts.app')

@section('head')
        <!--content-->
    <div class="container">
        <div class="register">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('team') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">队名</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="team_name" value="{{ old('team_name') }}">

                                @if ($errors->has('team_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">队长名字</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="team_captain_name" value="{{ old('team_captain_name') }}">

                                @if ($errors->has('team_captain_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_captain_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">队员数量</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="team_number">

                                @if ($errors->has('team_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">上传球队logo</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="file" class="form-control" name="team_logo">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> 保存
                                </button>
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
