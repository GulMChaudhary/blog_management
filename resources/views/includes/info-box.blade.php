@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/common.css') }}">
@append

@if(\Illuminate\Support\Facades\Session::has('fail'))
    <section class="info-box fail">
        {{\Illuminate\Support\Facades\Session::get('fail')}}
    </section>
@endif

@if(\Illuminate\Support\Facades\Session::has('success'))
    <section class="info-box success">
        {{\Illuminate\Support\Facades\Session::get('success')}}

    </section>
@endif

@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
@endif

