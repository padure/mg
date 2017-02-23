@extends("admin.base")
@section("content")
<div class="col-md-4">
    <p id='curentlogo'>
        @if(!empty($post['logo']) && count($post['logo'])>0)
            <img src='{{asset($post['logo']->valuevariable)}}' class='img-responsive'/>
        @else
            <b>Siteul nu are logo</b>
        @endif
    </p>
    <form id="upload" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label class="file">
            <a class='btn btn-info' id="logosite" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Se incarca">Incarca logo</a>
            <input type="file" name="file" style="display:none;"><br>
        </label>
        <p id="imageeror" class="text-danger"></p>
    </form>
</div>
<div class="col-md-4">
    <form name="oredelucru">
        <label>Cimpurile nu sunt obligatorii</label>
        <div class="form-group">
            @if(!empty($post['ore'][0]) && count($post['ore'][0])>0)
                <input type="text" class="form-control" name="ora1" placeholder="Luni-Vineri 08:00-17:00" value="{{$post['ore'][0]->valuevariable}}"/>
            @else
                <input type="text" class="form-control" name="ora1" placeholder="Luni-Vineri 08:00-17:00"/>
            @endif
        </div>
        <div class="form-group">
            @if(!empty($post['ore'][1]) && count($post['ore'][1])>0)
                <input type="text" class="form-control" name="ora2" placeholder="Simbata-Duminica 09:00-15:00" value="{{$post['ore'][1]->valuevariable}}"/>
            @else
                <input type="text" class="form-control" name="ora2" placeholder="Simbata-Duminica 09:00-15:00"/>
            @endif
        </div>
        <div class="form-group">
            @if(!empty($post['ore'][2]) && count($post['ore'][2])>0)
                <input type="text" class="form-control" name="ora3" placeholder="Pauza de masa 13:00-14:00" value="{{$post['ore'][2]->valuevariable}}"/>
            @else
                <input type="text" class="form-control" name="ora3" placeholder="Pauza de masa 13:00-14:00"/>
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-primary" id="oredelucru" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Se salveaza">
                Salveaza
            </button>
            <br>
            <label id="salvatore" class="text-success"></label>
        </div>
    </form>
</div>

<div class="col-md-4">
    <form name="numartelefon">
        <label>Nr telefon</label>
        <div class="form-group">
            @if(!empty($post['nrtel']) && count($post['nrtel'])>0)
                <input type="text" class="form-control" name="nrtel" placeholder="078 000 000" value="{{$post['nrtel']->valuevariable}}"/>
            @else
                <input type="text" class="form-control" name="nrtel" placeholder="078 000 000"/>
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-primary" id="nrtel" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Se salveaza">
                Salveaza
            </button>
            <br>
            <label id="salvattel" class="text-success"></label>
        </div>
    </form>
</div>
<script>
    $(document).ready(function(){
        $("form[name=numartelefon]").on("submit",function(e){
            e.preventDefault();
            $("#nrtel").button("loading");
            $.ajax({
                type:'POST',
                url: "{{URL('/admin/addtelefon')}}",
                data:{
                    telefon:$("input[name=nrtel]").val()
                },
                success:function(){
                    $("#nrtel").button("reset");
                    $("#salvattel").text("Sa salvat");
                },
                error:function(){
                    location.reload();
                }
            });
        });
        
        $("form[name=oredelucru]").on("submit",function(e){
            e.preventDefault();
            $("#oredelucru").button("loading");
            $.ajax({
                type:'POST',
                url: "{{URL('/admin/addoredelucru')}}",
                data:{
                    ora1:$("input[name=ora1]").val(),
                    ora2:$("input[name=ora2]").val(),
                    ora3:$("input[name=ora3]").val()
                    
                },
                success:function(){
                    $("#oredelucru").button("reset");
                    $("#salvatore").text("Sa salvat");
                },
                error:function(){
                    location.reload();
                }
            });
        });
        $("#upload").on("submit",function(e){
            e.preventDefault();
            $("#logosite").button("loading");
            $("#imageeror").html("");
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{URL('/admin/uploadlogo')}}",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    if(data.succes===true){
                        $("#curentlogo").html("<img src='{{asset('/')}}"+data.image+"' class='img-responsive'/>");
                    }else{
                        $("#imageeror").html("fisierul nu este imagine");
                    }
                    $("#logosite").button("reset");
                },
                error:function(){
                    $("#imageeror").html("A aparut o eroare");
                    $("#logosite").button("reset");
                }
            });
        });
        $("#upload").on("change", function() {
            $("#upload").submit();
        });
    });
</script>
@endsection
