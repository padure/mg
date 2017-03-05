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
<div class="clearfix"></div>

<form class="form-inline socialicons" name="social">
    <div class="form-group">
        <label for="fb">
            <img src="{{asset('allimages/system/fb.png')}}"/>
        </label>
        @if(!empty($post['social'][0]) && count($post['social'][0])>0)
            <input type="text" class="form-control" name="fb" placeholder="FaceBook" value="{{$post['social'][0]->link}}">
        @else
            <input type="text" class="form-control" name="fb" placeholder="FaceBook">
        @endif
    </div>
    <div class="form-group">
        <label for="ok">
            <img src="{{asset('allimages/system/ok.png')}}"/>
        </label>
        @if(!empty($post['social'][1]) && count($post['social'][1])>0)
            <input type="text" class="form-control" name="ok" placeholder="Odnoklassniki" value="{{$post['social'][1]->link}}">
        @else
            <input type="text" class="form-control" name="ok" placeholder="Odnoklassniki">
        @endif
    </div>
    <div class="form-group">
        <label for="instagram">
            <img src="{{asset('allimages/system/instagram.png')}}"/>
        </label>
        @if(!empty($post['social'][2]) && count($post['social'][2])>0)
            <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="{{$post['social'][2]->link}}">
        @else
            <input type="text" class="form-control" name="instagram" placeholder="Instagram">
        @endif
    </div>
    <div class="form-group">
        <label for="vk">
            <img src="{{asset('allimages/system/vk.png')}}"/>
        </label>
        @if(!empty($post['social'][3]) && count($post['social'][3])>0)
            <input type="text" class="form-control" name="vk" placeholder="Bkontakte" value="{{$post['social'][3]->link}}">
        @else
            <input type="text" class="form-control" name="vk" placeholder="Bkontakte">
        @endif
        
    </div>
    <div class="form-group">
        <label for="skype">
            <img src="{{asset('allimages/system/skype.png')}}"/>
        </label>
        @if(!empty($post['social'][4]) && count($post['social'][4])>0)
            <input type="text" class="form-control" name="skype" placeholder="Skype" value="{{$post['social'][4]->link}}">
        @else
            <input type="text" class="form-control" name="skype" placeholder="Skype">
        @endif
        
    </div>
    <button type="submit" id="socialbutton" class="btn btn-primary" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Se salveaza">
        Salveaza
    </button>
    <label id="salvatsocial" class="text-success"></label>
</form>
<div class="clearfix"></div>
<br>
<form name="descrierea">
    <label>Descrierea siteului</label>
    <div class="form-group">
        @if(!empty($post['descrierea']) && count($post['descrierea'])>0)
            <input type="text" class="form-control" name="descrierea" placeholder="text" value="{{$post['descrierea']->valuevariable}}"/>
        @else
            <input type="text" class="form-control" name="descrierea" placeholder="text"/>
        @endif
    </div>
    <div class="form-group">
        <button class="btn btn-primary" id="descrierea" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Se salveaza">
            Salveaza
        </button>
        <br>
        <label id="salvatdescrierea" class="text-success"></label>
    </div>
</form>
<div class="clearfix"></div>
<form name="descriereaformei">
    <label>Descrierea formei pentru contact</label>
    <div class="form-group">
        @if(!empty($post['descriereaformei']) && count($post['descriereaformei'])>0)
            <input type="text" class="form-control" name="descriereaformei" placeholder="text" value="{{$post['descriereaformei']->valuevariable}}"/>
        @else
            <input type="text" class="form-control" name="descriereaformei" placeholder="text"/>
        @endif
    </div>
    <div class="form-group">
        <button class="btn btn-primary" id="descriereaformei" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Se salveaza">
            Salveaza
        </button>
        <br>
        <label id="salvatdescriereaformei" class="text-success"></label>
    </div>
</form>
<div class="clearfix"></div>
<form name="video">
    <label>Video link youtube</label>
    <div class="form-group">
        @if(!empty($post['video']) && count($post['video'])>0)
            <input type="text" class="form-control" name="video" placeholder="text" value="{{$post['video']->valuevariable}}"/>
        @else
            <input type="text" class="form-control" name="video" placeholder="text"/>
        @endif
    </div>
    <div class="form-group">
        <button class="btn btn-primary" id="video" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Se salveaza">
            Salveaza
        </button>
        <br>
        <label id="salvatvideo" class="text-success"></label>
    </div>
</form>
<script>
    $(document).ready(function(){
        $("form[name=video]").on("submit",function(e){
            e.preventDefault();
            $("#video").button("loading");
            $.ajax({
                type:'POST',
                url: "{{URL('/admin/addvideo')}}",
                data:{
                    video:$("input[name=video]").val()
                },
                success:function(){
                    $("#video").button("reset");
                    $("#salvatvideo").text("Sa salvat");
                },
                error:function(){
                    location.reload();
                }
            });
        });
        $("form[name=descrierea]").on("submit",function(e){
            e.preventDefault();
            $("#descrierea").button("loading");
            $.ajax({
                type:'POST',
                url: "{{URL('/admin/adddescrierea')}}",
                data:{
                    descrierea:$("input[name=descrierea]").val()
                },
                success:function(){
                    $("#descrierea").button("reset");
                    $("#salvatdescrierea").text("Sa salvat");
                },
                error:function(){
                    location.reload();
                }
            });
        });
        
        $("form[name=descriereaformei]").on("submit",function(e){
            e.preventDefault();
            $("#descriereaformei").button("loading");
            $.ajax({
                type:'POST',
                url: "{{URL('/admin/adddescriereaformei')}}",
                data:{
                    descrierea:$("input[name=descriereaformei]").val()
                },
                success:function(){
                    $("#descriereaformei").button("reset");
                    $("#salvatdescriereaformei").text("Sa salvat");
                },
                error:function(){
                    location.reload();
                }
            });
        });
        
        $("form[name=social]").on("submit",function(e){
            e.preventDefault();
            $("#socialbutton").button("loading");
            $.ajax({
                type:'POST',
                url: "{{URL('/admin/addsocial')}}",
                data:{
                    fb:$("input[name=fb]").val(),
                    ok:$("input[name=ok]").val(),
                    instagram:$("input[name=instagram]").val(),
                    vk:$("input[name=vk]").val(),
                    skype:$("input[name=skype]").val()
                },
                success:function(){
                    $("#socialbutton").button("reset");
                    $("#salvatsocial").text("Sa salvat");
                },
                error:function(){
                    location.reload();
                }
            });
        });
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
