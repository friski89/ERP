@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Karyawan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Data Karyawan</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('users.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                Edit Data Karyawan
            </h4>

            <x-form
                method="PUT"
                action="{{ route('users.update', $user) }}"
                has-files
                class="mt-4"
            >
                @include('app.users.form-inputs')

                <div class="mt-4">
                    <a href="{{ route('users.index') }}" class="btn btn-light">
                        <i class="icon ion-md-return-left text-primary"></i>
                        @lang('crud.common.back')
                    </a>

                    <a href="{{ route('users.create') }}" class="btn btn-light">
                        <i class="icon ion-md-add text-primary"></i>
                        @lang('crud.common.create')
                    </a>

                    <button type="submit" class="btn btn-primary float-right">
                        <i class="icon ion-md-save"></i>
                        @lang('crud.common.update')
                    </button>
                </div>
            </x-form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            $('#date_of_birth').change(function(){
                var date=$(this).val();

                var today = new Date();
                var birthday = new Date(date);
                var year = 0;
                if (today.getMonth() < birthday.getMonth()) {
                    year = 1;
                } else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
                    year = 1;
                }
                var age = today.getFullYear() - birthday.getFullYear() - year;

                if(age < 0){
                    age = 0;
                }

               $('#age').val(age);
            });
        })
    </script>
@endpush
