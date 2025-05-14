<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Appointment</title>
    <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo (2).png') }}" type="image/webp">
</head>
<body>
    @include('home.header')

    <div style="padding: 70px";>
      <h1 class="text-center wow fadeInUp mb-5">My Appointment</h1>
    <table class="table table-hover table-striped-columns table-bordered text-center">
      <tr >
        <th style="padding: 10px; ">Department</th>
        <th style="padding: 10px; ">Date</th>
        <th style="padding: 10px; ">Message</th>
        <th style="padding: 10px; ">Status</th>
        <th style="padding: 10px; ">Actions</th>
      </tr>
      @foreach ($appoint as $appoints)
      <tr>
        <td>
            @if($appoints->departement == 'psychiatry')
                Psychiatry
            @elseif($appoints->departement == 'mental')
                Mental Health
            @else
                {{ $appoints->departement }}
            @endif
        </td>
        <td>{{ $appoints -> date}}</td>
        <td>{{ $appoints -> message}}</td>
        <td>{{ $appoints -> status}}</td>
        <td style="display: flex; gap: 5px; justify-content: center; align-items: center;">
    <a class="btn btn-primary" href="{{ route('edit_appoint', $appoints->id) }}">Edit</a>
    <form action="{{ route('cancel_appoint', $appoints->id) }}" method="POST" style="margin: 0;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            Cancel
        </button>
        </form>
    </td>
        
        </td>
      </tr>
      @endforeach

    </table>
    </div>

@include('home.footer')
</body>
</html>