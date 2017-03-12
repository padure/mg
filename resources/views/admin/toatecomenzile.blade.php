@extends("admin.base")
@section("content")
<div class="container">
    <div class="col-md-12">
        @if(!empty($post) && count($post)>0)
        <table class="table table-striped table-bordered">
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Nume
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    Telefon
                </th>
                <th>
                    Marime
                </th>
                <th style="width: 100px;">
                    Produs
                </th>
                <th style="width: 100px;">
                    Culoare
                </th>
                <th>
                    Pret
                </th>
                <th>
                    Data
                </th>
            </tr>
            @foreach($post as $i)
            <tr id="comanda{{$i->id}}">
                <td>
                    {{$i->id}}
                </td>
                <td>
                    {{$i->nume}}
                </td>
                <td>
                    {{$i->email}}
                </td>
                <td>
                    {{$i->telefon}}
                </td>
                <td>
                    {{$i->marime}}
                </td>
                <td>
                    <img src="{{asset($i->produs)}}" alt="" class="img-responsive">
                </td>
                <td>
                    <img src="{{asset($i->culoare)}}" alt="" class="img-responsive">
                </td>
                <td>
                    {{$i->pret}}
                </td>
                <td>
                    {{date('d-m-Y', strtotime($i->created_at))}}
                </td>
            </tr>
            @endforeach
        </table>
        @else
        <h1 class="text-center">Nu sunt comenzi</h1>
        @endif
    </div>
</div>
@endsection