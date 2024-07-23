@extends('layout')

@section('title', 'Register')

@section('content')

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="p-0 m-0 bg-white  md:bg-primary-dark-green h-full px-10">

        <div class="container m-auto flex md:flex-row flex-col pt-16 items-center justify-center">

            <div class="bg-white flex flex-1 rounded-s items-center justify-center">

                <form method="POST" class="space-y-4 flex flex-col pt-10 " action="{{ route('register') }}">
                    @csrf

                    <div class="form-group flex flex-col m-auto">
                        <label for="firstname" class="text-xs font-semibold pb-1">First Name</label>
                        <input type="text" id="firstname" name="firstname" class="form-control bg-secondary-light-green rounded-[8px] w-[260px] h-8 shadow-sm" required>
                    </div>

                    <div class="form-group flex flex-col m-auto">
                        <label for="firstname" class="text-xs font-semibold pb-1">Surname</label>
                        <input type="text" id="surname" name="surname" class="form-control bg-secondary-light-green rounded-[8px] w-[260px] h-8 shadow-sm" required>
                    </div>

                    <div class="form-group flex flex-col m-auto">
                        <label for="email" class="text-xs font-semibold pb-1">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control bg-secondary-light-green rounded-[8px] w-[260px] h-8 shadow-sm" required>
                    </div>

                    <div class="form-group  flex flex-col m-auto">
                        <label for="password" class="text-xs font-semibold pb-1">Password</label>
                        <input type="password" id="password" name="password" class="form-control bg-secondary-light-green rounded-[8px] w-[260px] h-8 shadow-sm	" required>
                    </div>

                    <div class="form-group  flex flex-col m-auto">
                        <label for="password" class="text-xs font-semibold pb-1">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control bg-secondary-light-green rounded-[8px] w-[260px] h-8 shadow-sm	" required>
                    </div>

                    <input hidden type="number" id="role" name="role" value="1">
                    <input hidden type="number" id="status" name="status" value="1">


                    <div class="form-group flex justify-center  pt-6">
                        <button type="submit" class="btn btn-primary bg-primary-dark-green rounded-full w-[180px] h-10 text-white shadow-sm	">Register</button>
                    </div>

                    <div class="flex flex-col justify-center pb-20 text-sm">
                        <p class="m-auto">Already have an account?</p>
                        <p class="m-auto">Click <a class="text-primary-dark-green font-semibold" href="{{ route('login') }}">here</a> to sign in.</p>
                    </div>

                </form>

            </div>

            <div class="hidden md:flex bg-accent-light-orange flex-1 rounded-e h-[500px]">
                <div class="bg-accent-light-orange w-full">
                    <img src="{{ asset('img/banner.jpg') }}" alt="banner" class="w-full h-full object-cover">
                </div>

            </div>

        </div>
    </div>

@endsection
