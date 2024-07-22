@extends('layout')

@section('title', 'Authentication')

@section('content')

    <div class="p-0 m-0 bg-white  md:bg-primary-dark-green h-full px-10">

        <div class="container m-auto flex md:flex-row flex-col pt-16 items-center justify-center">

            <div class="bg-white flex flex-1 rounded-s h-[500px] items-center justify-center">

                <form method="POST" class="space-y-4 flex flex-col pt-10 " action="{{ route('login') }}">
                    @csrf

                    <div class="form-group flex flex-col m-auto">
                        <label for="email" class="text-xs font-semibold pb-1">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control bg-secondary-light-green rounded-[8px] w-[260px] h-8 shadow-sm" required>
                    </div>

                    <div class="form-group  flex flex-col m-auto">
                        <label for="password" class="text-xs font-semibold pb-1">Password</label>
                        <input type="password" id="password" name="password" class="form-control bg-secondary-light-green rounded-[8px] w-[260px] h-8 shadow-sm	" required>
                    </div>

                    <div class="form-group flex justify-center  pt-6">
                        <button type="submit" class="btn btn-primary bg-primary-dark-green rounded-full w-[180px] h-10 text-white shadow-sm	">Sign in</button>
                    </div>

                    <div class="flex flex-col justify-center pb-20 text-sm">
                        <p class="m-auto">Don't have an account?</p>
                        <p class="m-auto">Click <a class="text-primary-dark-green font-semibold" href="{{ route('register') }}">here</a> to register.</p>
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
