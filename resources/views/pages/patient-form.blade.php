@extends('layout')

@section('title', 'Authentication')

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

    <div class="flex items-center justify-center md:justify-start">

        <form method="POST" class="space-y-6 flex flex-col pt-10 w-full " action="{{ $patient->exists ? route('patient.update', $patient->id) : route('patient.store') }}">
            @csrf

            @if ($patient->exists)
                @method('PUT')
            @endif

            <div class="form-group flex flex-col m-auto w-full">
                <label for="firstname" class="text-xs font-semibold pb-1">First Name</label>
                <input type="text" id="firstname" name="firstname" class="form-control bg-secondary-light-green rounded-[6px] h-10 shadow-sm" value="{{ old('firstname', $patient->firstname) }}" required>
            </div>

            <div class="form-group flex flex-col m-auto w-full">
                <label for="lastname" class="text-xs font-semibold pb-1">Last Name</label>
                <input type="text" id="lastname" name="lastname" class="form-control bg-secondary-light-green rounded-[6px]  h-10 shadow-sm" value="{{ old('lastname', $patient->lastname) }}" required>
            </div>

            <div class="form-group flex flex-col m-auto w-full">
                <label for="email" class="text-xs font-semibold pb-1">Email Address</label>
                <input type="email" id="email" name="email" class="form-control bg-secondary-light-green rounded-[6px] h-10 shadow-sm" value="{{ old('email', $patient->email) }}" required>
            </div>

            <div class="form-group flex flex-col m-auto w-full">
                <label for="phone" class="text-xs font-semibold pb-1">Phone Number</label>
                <input type="text" id="phone" name="phone" class="form-control bg-secondary-light-green rounded-[6px]  h-10 shadow-sm" value="{{ old('phone', $patient->phone) }}" required>
            </div>

            <div class="form-group flex flex-col m-auto w-full">
                <label for="nhs_number" class="text-xs font-semibold pb-1">NHS Number</label>
                <input type="text" id="nhs_number" name="nhs_number" class="form-control bg-secondary-light-green rounded-[6px]  h-10 shadow-sm" value="{{ old('nhs_number', $patient->nhs_number) }}" required>
            </div>

            <div class="form-group flex flex-col m-auto w-full">
                <label for="street" class="text-xs font-semibold pb-1">Street</label>
                <input type="text" id="street" name="street" class="form-control bg-secondary-light-green rounded-[6px]  h-10 shadow-sm" value="{{ old('street', $patient->street) }}" required>
            </div>

            <div class="form-group flex flex-col m-auto w-full">
                <label for="city" class="text-xs font-semibold pb-1">City</label>
                <input type="text" id="city" name="city" class="form-control bg-secondary-light-green rounded-[6px]  h-10 shadow-sm" value="{{ old('city', $patient->city) }}" required>
            </div>

            <div class="form-group flex flex-col m-auto w-full">
                <label for="postcode" class="text-xs font-semibold pb-1">Postcode</label>
                <input type="text" id="postcode" name="postcode" class="form-control bg-secondary-light-green rounded-[6px]  h-10 shadow-sm" value="{{ old('postcode', $patient->postcode) }}" required>
            </div>

            <div class="flex flex-col w-full">
                <label for="dob" class="text-sm font-semibold">Date of Birth</label>
                <input type="date" id="dob" name="dob" class="form-control bg-secondary-light-green rounded-[6px]  h-10 shadow-sm" value="{{ old('dob', $patient->dob) }}" required>
            </div>

            <div class="flex flex-col">
                <label for="gender" class="text-sm font-semibold">Gender</label>
                <select id="gender" name="gender" class="form-control bg-secondary-light-green rounded-[8px]  h-10 shadow-sm" required>
                    <option value="" disabled>Select Gender</option>
                    <option value="Male" {{ old('gender', $patient->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender', $patient->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Other" {{ old('gender', $patient->gender) == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <input hidden type="number" id="status" name="status" value="1" required>

            <div class="flex flex-row justify-between items-center pb-20 pt-10 text-sm">
                <button type="submit" class="btn btn-primary bg-primary-dark-green rounded-[6px] w-[120px] h-10 text-white shadow-sm">Save</button>
                <a class="text-primary-dark-green font-semibold" href="{{ route('patients') }}">Cancel</a>
            </div>

        </form>

    </div>

@endsection
