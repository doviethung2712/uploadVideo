@foreach ($data as $value)
    <video width="300" height="300" autoplay muted>
        <source src="{{ asset('upload') }}/{{ $value->video }}" type='video/mp4'>
    </video>
@endforeach
