@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="did-floating-label-content">

                            <input class="did-floating-input @error('name') is-invalid @enderror" name="name" type="name" placeholder=" ">
                            <label class="did-floating-label">Nama Lengkap</label>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row mb-3">

                            <input class="did-floating-input @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" type="date" placeholder=" ">
                            <label class="did-floating-label">Tanggal Lahir</label>

                            @error('tanggal_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="row mb-3">

                            <input class="did-floating-input @error('password') is-invalid @enderror" name="email" type="email" placeholder=" ">
                            <label class="did-floating-label">Email</label>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row mb-3">

                            <input class="did-floating-input @error('nomor_hp') is-invalid @enderror" name="nomor_hp" type="nomor_hp" placeholder=" ">
                            <label class="did-floating-label">No. HP</label>

                            @error('nomor_hp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Refarral Code <em>(optional)</em></label>

                            <div class="col-md-6">
                                <input class="form-control @error('referal_id') is-invalid @enderror" name="referal_id" type="name" placeholder=" ">
                            </div>


                            @error('referal_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>



                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
