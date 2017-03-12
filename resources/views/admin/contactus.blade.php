@extends("admin.base")
@section("content")
    <table class="table table-striped table-bordered">
        @if(!empty($post) && count($post)>0)
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
            @foreach($post as $i)
            <tr id="telefon{{$i->id}}">
                <td>
                    {{ $i->id }}
                </td>
                <td>
                    {{ $i->nume }}
                </td>
                <td>
                    {{ $i->telefon }}
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
            <h1 class="text-center">Nu sunt telefoane</h1>
        @endif
<div class="modal fade" id="comfirm_delete" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Sterge contactul</h4>
        </div>
        <div class="modal-body text-center">
            <h2 class="calibri" style="margin: 0px 0px 15px 0px;">Sigur doriti sa stergeti acest contact?</h2>
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
            url: "{{URL('/admin/deletetelefon')}}", 
            data: 
                { 
                    id:id
                },
            success: function(data) {
                $("#telefon"+id).remove();
            }
        });
    });
</script>
@endsection