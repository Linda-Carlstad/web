@section('title', 'Registrera')
@extends('layouts.app')

@section('content')
            <div class="card bg-dark">
                <div class="card-header">{{ __('Registrera') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Namn') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Lösenord') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Upprepa lösenord') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idNumber" class="col-md-4 col-form-label text-md-right">{{ __('Personnummer') }}</label>

                            <div class="col-md-6">
                                <input id="idNumber" type="text" class="form-control{{ $errors->has('idNumber') ? ' is-invalid' : '' }}" name="idNumber" required>

                                @if ($errors->has('idNumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4">
                            <p>
                                Genom att registrera dig accepterar du
                                <a class="link" href="{{ route( 'policy' ) }}">avtalet</a>.
                            </p>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-red">
                                    {{ __('Registrera') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection
