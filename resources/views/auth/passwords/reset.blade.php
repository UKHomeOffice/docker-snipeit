@extends('layouts/basic')


{{-- Page content --}}
@section('content')


    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
        {!! csrf_field() !!}

        <div class="container">
            <div class="row">



                <div class="col-md-6 col-md-offset-3">

                    <div class="box login-box" style="width: 100%">
                        <div class="box-header">
                            <h3 class="box-title"> {{ trans('auth/general.reset_password')  }}</h3>
                        </div>


                        <div class="login-box-body">
                            <div class="row">

                                <!-- Notifications -->
                                @include('notifications')



                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label class="col-md-4 control-label">{{ trans('admin/users/table.email')  }}</label>

                                        <div class="col-md-6">
                                            <input type="email" class="form-control" name="email" maxlength="250" value="{{ $email or old('email') }}">
                                            {!! $errors->first('email', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">{{ trans('admin/users/table.password')  }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                                {!! $errors->first('password', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">{{ trans('admin/users/table.password_confirm')  }}</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                                {!! $errors->first('password_confirmation', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}

                            </div>
                        </div>


                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                {{ trans('auth/general.reset_password')  }}
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</form>

@stop

