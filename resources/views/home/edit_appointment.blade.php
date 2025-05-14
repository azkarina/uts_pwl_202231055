<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Appointment</title>
    <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>
<body>
    @include('home.header')

    <div class="container" style="padding: 70px;">

        {{-- Notifikasi sukses --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        @endif

        {{-- Notifikasi error --}}
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        @endif

        {{-- Error validasi --}}
        @if($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        @endif

        <h2 align="center">Edit Appointment</h2>
        
        <form action="{{ route('update_appoint', $appointment->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $appointment->date }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" required>{{ $appointment->message }}</textarea>
            </div>

            <div class="form-group mb-4">
                <label for="departement">Department</label>
                <select class="form-control" id="departement" name="departement" required>
                    <option value="psychiatry" {{ $appointment->departement == 'psychiatry' ? 'selected' : '' }}>Psychiatry</option>
                    <option value="mental" {{ $appointment->departement == 'mental' ? 'selected' : '' }}>Mental Health</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Appointment</button>
        </form>
    </div>
    
@include('home.footer')
    {{-- Script Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
