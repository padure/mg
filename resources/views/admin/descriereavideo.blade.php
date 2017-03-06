@extends("admin.base")
@section("content")
<style>
    span[name=stergedescrierea]{
        cursor: pointer;
        color:#0065b5;
    }
</style>
    <div class="content">
        <div class="content" id="alldescriere">
            @if(!empty($post) && count($post)>0)
                @for($i=0;$i< count($post);$i++)
                    <div id='d{{$i}}'>
                        <span name='stergedescrierea' id='{{$i}}'>Sterge</span>
                        <input type='text' name='descrierea' class='form-control' placeholder='text' value="{{$post[$i]->descrierea}}"/>
                   </div>
                @endfor
            @endif
        </div>
        <button class="btn btn-primary pull-right" id="savedescrierea" style="margin-top:10px;" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Se salveaza">
            Salveaza
        </button>
        <button class="btn btn-info" id="adddescriere" style="margin-top:10px;">
            Adauga descriere
        </button>
        <p class="text-right text-success" >
            <b id="salvatdescrierea">
            </b>
        </p>
    </div>
    <script>
        var nr="{{count($post)}}";
        $("#adddescriere").on("click",function(){
            $("#alldescriere").append("<div id='d"+nr+"'>\n\
                                            <span name='stergedescrierea' id='"+nr+"'>Sterge</span>\n\
                                            <input type='text' name='descrierea' class='form-control' placeholder='text'/>\n\
                                       </div>");
                nr++;
        });
        $("body").on("click","span[name=stergedescrierea]",function(){
            var id=$(this).attr("id");
            $("#d"+id).remove();
        });
        $("#savedescrierea").on("click",function(){
            $("#salvatdescrierea").text("");
            var permit=true;
            var descrierea=[];
            $("input[name=descrierea]").css("border-color","#ccc");
            $("input[name=descrierea]").each(
                function(index,val)
                {  
                    var attr = $(val).val();
                    if(attr.length===0 || attr.length>255){
                        $(val).css("border-color","red");
                        permit=false;
                    }else{
                        descrierea[index]=$(val).val();
                    }
                }
            );
            if(permit===true){
                $("#savedescrierea").button("loading");
                
                $.ajax({  
                    type: 'POST',  
                    url: '{{ URL("/admin/savedescriereavideo") }}', 
                    data: 
                        { 
                            descrierea:descrierea
                        },
                    success: function(data) {
                        $("#savedescrierea").button("reset");
                        $("#salvatdescrierea").text("Sa salvat");
                    },
                    error:function(){
                        alert("A aparut o eroare");
                        $("#savedescrierea").button("reset");
                    }
                });
            }
        });
    </script>
@endsection