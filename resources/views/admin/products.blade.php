@extends("admin.base")
@section("content")
<div class="col-md-12">
    <div class="col-md-12">
        <p class="text-right">
            <a href="{{URL("/admin/newproduct")}}" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus"></span>
                Adauga Produs
            </a>
        </p>
    </div>
    @if(!empty($post) && count($post)>0)
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 30%;">Imagine</th>
                    <th>Culori</th>
                    <th>Marimi</th>
                    <th style="width: 230px;">Setari</th>
                </tr>
                @foreach($post as $key=>$i)
                    <tr id="p{{$i["product"]->product_id}}">
                        <td>
                            <img src="{{asset($i["product"]->image)}}" class="img-responsive"/>
                        </td>
                        <td>
                            {{$i["product"]->countcolors}} culori
                        </td>
                        <td>
                            {{$i["countmarimi"]}} marimi
                        </td>
                        <td>
                            <a href="{{URL('admin/modproduct/'.$i["product"]->product_id)}}" class="btn btn-primary">
                                <span class="glyphicon glyphicon-cog"></span>
                                Modifica
                            </a>  
                            <a class="btn btn-danger" iddel="{{$i["product"]->product_id}}" name="deleteprod">
                                <span class="glyphicon glyphicon-remove"></span>
                                Sterge
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="modal fade" id="comfirm_delete" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center">Sterge produs</h4>
                    </div>
                    <div class="modal-body text-center">
                        <h2 class="calibri" style="margin: 0px 0px 15px 0px;">Sigur doriti sa stergeti acest produs?</h2>
                        <button class="btn btn-default" id="yesdelete">Da</button>
                        <button class="btn btn-primary" data-dismiss="modal">Nu</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $("a[name=deleteprod]").on("click",function(){
                var id=$(this).attr("iddel");
                $("#yesdelete").attr("iddel",id);
                $("#comfirm_delete").modal();
            });
            $("#yesdelete").on("click",function(){
                var id=$("#yesdelete").attr("iddel");
                $.ajax({  
                    type: 'POST',  
                    url: "{{URL('/admin/delprodus')}}", 
                    data: 
                        { 
                            id:id
                        },
                    success: function(data){
                        $("#p"+id).remove();
                        $("#comfirm_delete").modal("hide");
                    }
                });
            });
        </script>
    @else
        <h1 class="calibri text-center">Nu sunt produse</h1>
    @endif
</div>
@endsection