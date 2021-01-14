@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="alert text-center" style="background-color:#99decc" role="alert">
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Registarasi Akun </div></h3>
            </div>
        </div>
    </div>

<hr> <br>

<div class="row justify-content-center">

  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-header"> <h5>Register Sebagai Admin Panitia </h5></div> 
      <div class="card-body">  
        <p class="card-text"> Pembuatan akun kegiatan PKK-MB khusus untuk Admin Panitia PKK-MB</p>
        <button type="button" class="btn" style="background-color:#6c10a1; color:white;" data-toggle="modal" data-target="#RegisterAdmin">
            Pilih
        </button>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-center">
      <div class="card-header"> <h5>Register Sebagai Mahasiswa Baru </h5></div>  
      <div class="card-body">
        <p class="card-text"> Pembuatan akun untuk Mahasiswa Baru yang ingin mendaftar kegiatan PKK-MB</p>
        <button type="button" class="btn" style="background-color:#6c10a1; color:white;" data-toggle="modal" data-target="#RegisterMaba">
            Pilih 
        </button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal Register Admin Panitia -->
<div class="modal fade" id="RegisterAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

    <form method="POST" action="{{ route('register') }}">
    @csrf

        <div class="modal-header ">
            <h5 class="modal-title text-center" id="exampleModalCenterTitle"><h4> <div style="font-family:gill sans mt; font-weight:bold;">Registrasi Admin Panitia </div></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div>
                <input type="hidden" name="level" value="1">
            </div>
                  
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  class="btn" style="background-color:#6c10a1; color:white;">Register</button>
      </div>

    </form>
    </div>
  </div>
</div>


<!-- Modal Register Mahasiswa Baru-->
<div class="modal fade" id="RegisterMaba" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

    <form method="POST" action="{{ route('register') }}">
    @csrf

        <div class="modal-header ">
            <h5 class="modal-title text-center" id="exampleModalCenterTitle"><h4>  <div style="font-family:gill sans mt; font-weight:bold;"> Registrasi Mahasiswa Baru </div></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div>
                <input type="hidden" name="level" value="2">
            </div>
                  
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  class="btn" style="background-color:#6c10a1; color:white;">Register</button>
      </div>

    </form>
    </div>
  </div>
</div>
@endsection
