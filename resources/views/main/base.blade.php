@extends('main.primarybase')
@section('content')
    <div class="container">
        <div class="row">
            @include('main.meniu')

            @include('main.video')

            @include('main.descriere')

            @include('main.produse')

            @include('main.publicitate')

            @include('main.footer')
        </div>
    </div>
@endsection

