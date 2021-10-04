@extends('layouts.auth')
@section('content')
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @push('js')
                <script>
                    toastr.error('{{ $message }}');
                </script>
            @endpush
        @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('email') is-invalid @enderror" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @push('js')
                <script>
                    toastr.error('{{ $message }}');
                </script>
            @endpush
        @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="{{ url('/forgot-password')}}">I forgot my password</a>
      </p>
    </div>
@endsection
@if (session('status'))
    @push('js')
        <script>
            toastr.success('{{ session('status') }}');
        </script>
    @endpush
@endif
