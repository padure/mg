@extends("admin.base")
@section("content")
    <table class="table table-striped table-bordered">
            <tr>
                <th style="width: 10%;">
                    Id
                </th>
                <th style="width: 35%;">
                    Nume, Prenume
                </th>
                <th style="width: 35%;">
                    Telefon
                </th>
                <th>
                    Data
                </th>
                <th style="width: 10%;">
                    Setari
                </th>
            </tr>
            @for ($i = 1; $i < 6; $i++)
            <tr>
                <td>
                    {{ $i }}
                </td>
                <td>
                    Andrian Ion
                </td>
                <td>
                    079343434
                </td>
                <td>
                    24-03-2017
                </td>
                <td>
                    <a class="btn btn-danger pull-right">
                        <span class="glyphicon glyphicon-remove"></span>
                        Sterge
                    </a>
                </td>
            </tr>
            @endfor
        </table>
@endsection