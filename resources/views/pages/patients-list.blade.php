@extends('layout')

@section('title', 'Authentication')

@section('content')

    <div class="flex flex-col w-full">
        <div class="flex flex-row justify-between mt-10">
            <h1 class="text-primary-dark-green font-semibold text-3xl ">Patients</h1>
            <a class="bg-primary-dark-green rounded text-white py-2 px-6" href="{{route('patient.create')}}">Add New</a>
        </div>

        <div class="mt-8 space-y-6">
            @foreach($patients as $patient)
                <div class="flex flex-row items-center bg-secondary-light-green rounded p-6 justify-between">
                    <p>{{ $patient->firstname }}  {{ $patient->lastname }}</p>
                    <div class="flex flex-row justify-evenly">
                        <a href="{{route('patient', $patient->id)}}" class="hover:text-primary-dark-green">View</a>
                        <span class="text-primary-dark-green font-bold px-2"> | </span>
                        <a href="{{route('patient.edit', $patient->id)}}" class="hover:text-primary-dark-green">Edit</a>
                        <span class="text-primary-dark-green font-bold px-2"> | </span>
                        <form method="POST" action="{{ route('patient.delete', $patient->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="hover:text-primary-dark-green" type="submit">Delete</button>
                        </form>
                    </div>

                </div>
            @endforeach
        </div>

    </div>

@endsection
