@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card mx-4">
            <div class="card-body p-4">

                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <h1>{{ trans('panel.site_title') }}</h1>
                    <p class="text-muted">{{ trans('global.register') }}</p>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ trans('global.user_name') }}" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope fa-fw"></i>
                            </span>
                        </div>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ trans('global.login_email') }}" value="{{ old('email') }}" required autocomplete="email">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock fa-fw"></i>
                            </span>
                        </div>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ trans('global.login_password') }}" required autocomplete="new-password">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock fa-fw"></i>
                            </span>
                        </div>
                        <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="{{ trans('global.login_password_confirmation') }}" required autocomplete="new-password">
                    </div>

                    <button class="btn btn-block btn-primary mt-1">
                        {{ trans('global.register') }}
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>

@endsection

@section('scripts')
@endsection