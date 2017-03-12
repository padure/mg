@extends('main.primarybase')
@section('content')
<div class="container">
    <div class="row">
        @include('main.meniu')
        <div class="content font livrare-bak">
           
            <div class="col-md-12">
                @if(!empty($despre) && count($despre)>0)
                    <h1>{{$despre->titlu}}</h1>
                    <p class="liv-description">{{$despre->descriere}}<p>
                @endif
                @if(!empty($lista) && count($lista)>0)
                    <ul>
                        @foreach($lista as $i)
                            <li>{{$i->lista}}</li>
                        @endforeach
                    </ul>
                @endif
                </div>
            
        </div>
        @include('main.footer')
    </div>
</div>
@endsection
