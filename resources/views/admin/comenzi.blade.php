@extends("admin.base")
@section("content")
<div class="container">
    <div class="col-md-12">
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
                    Culoare
                </th>
                <th style="width: 100px;">
                    Produs
                </th>
                <th>
                    Pret
                </th>
                <th>
                    Setari
                </th>
            </tr>
            @for ($i = 1; $i < 6; $i++)
            <tr>
                <td>
                    {{ $i }}
                </td>
                <td>
                    Andrian
                </td>
                <td>
                    adrian@gmail.com
                </td>
                <td>
                    079343434
                </td>
                <td>
                    XXL
                </td>
                <td>
                    <img src="{{asset('images/pantone.png')}}" alt="" class="img-responsive">
                </td>
                <td>
                    <img src="{{asset('images/pantone.png')}}" alt="" class="img-responsive">
                </td>
                <td>
                    200 lei
                </td>
                <td>
                    20-06-2017
                    <a class="btn btn-danger pull-right">
                        <span class="glyphicon glyphicon-remove"></span>
                        Sterge
                    </a>
                </td>
            </tr>
            @endfor
        </table>
    </div>
</div>
@endsection