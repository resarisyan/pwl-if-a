@extends('master')

@section('title', 'Halaman Hello')
@section('content')
<div class="container">
    <h1 class="mt-5">Hello World</h1>
    @foreach ($fruits as $f)
        <p>{{$f}}</p>
    @endforeach

    <x-alert theme="danger" caption="Ini Adalah Alert Danger" closeable />
    <x-alert theme="success" caption="Ini Adalah Alert Success" />
</div>
@endsection
