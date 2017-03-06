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
                <th>
                    Setari
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
                <td>
                    <a class="btn btn-danger pull-right" name="stergecomanda" id="{{$i->id}}">
                        <span class="glyphicon glyphicon-remove"></span>
                        Sterge
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        @else
        <h1 class="text-center">Nu sunt comenzi</h1>
        @endif
    </div>
</div>
<div class="modal fade" id="comfirm_delete" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Sterge comanda</h4>
        </div>
        <div class="modal-body text-center">
            <h2 class="calibri" style="margin: 0px 0px 15px 0px;">Sigur doriti sa stergeti acesta comanda?</h2>
            <button class="btn btn-default" id="yesdelete">Da</button>
            <button class="btn btn-primary" data-dismiss="modal">Nu</button>
        </div>
      </div>
    </div>
</div>
<script>
    $("a[name=stergecomanda]").on("click",function(){
        var id=$(this).attr("id");
        $("#comfirm_delete").modal();
        $("#yesdelete").attr("idprod",id);
    });
    $("#yesdelete").on("click",function(){
        $("#comfirm_delete").modal("hide");
        var id=$(this).attr("idprod");
        $.ajax({  
            type: 'POST',  
            url: "{{URL('/admin/deleteprod')}}", 
            data: 
                { 
                    id:id
                },
            success: function(data) {
                $("#comanda"+id).remove();
            }
        });
    });
</script>
@endsection