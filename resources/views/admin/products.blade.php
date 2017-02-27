@extends("admin.base")
@section("content")
<style>
    .colorclass{
        padding:0px;
        height: 40px;
        overflow: hidden;
    }
    .imageclass{
        height: 40px;
        overflow: hidden;
    }
</style>
<div class="container">
    <div class="col-md-12 admin-produse">
        <div class="col-md-4">
            <form id="upload" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label class="file" style="cursor: pointer;">
                    <img src="{{asset('allimages/system/upload.png')}}" class="imagine-produs" id="defaultimagepreview"/>
                    <input type="file" name="file" style="display:none;"><br>
                </label>
                <p id="imageeror" class="text-danger"></p>
            </form>
        </div>
        <div class="col-md-4 proprietati">
            <div class="col-md-12 colors">
                <div class="col-md-12">
                    <b>Introduceti culoarea:</b>
                </div>
                <div class="col-md-12" id="allcolors">
                    
                </div>
                <div class="col-md-12 color">
                    <form id="uploadcolor" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label class="file">
                            <a class='btn btn-info btn-xs' id="colorbutton" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Se incarca">
                                Incarca culoare
                            </a>
                            <input type="file" name="file" style="display:none;"><br>
                        </label>
                        <p id="coloreror" class="text-danger"></p>
                    </form>
                </div>
            </div>
            <div class="col-md-12 marimea">
                <div class="col-md-12">
                    <b>Introduceti marimea</b>
                </div>
                <div class="col-md-12" id="marimile">
                    
                </div>
                <div class="col-md-4">
                    <button class="btn btn-info" id="addmarimi">Adauga marime</button>
                </div>
            </div>
            <div class="col-md-12 pret">
                <div class="col-md-12">
                    <b>Introduceti pretul: </b>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="price" placeholder="100 $ "/>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <b>Introduceti caracteristici: </b>
            <textarea rows="7" cols="49" class="form-control" name="description"></textarea>
        </div>
    </div>
    <button class="submit btn btn-success" id="save" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Se incarca">
        Incarca
    </button>
</div>
<form id="uploadimage" enctype="multipart/form-data" style="display:none;">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label class="file" id="image-color">
        <a class='btn btn-info btn-xs' >
        </a>
        <input type="file" name="file" style="display:none;"><br>
    </label>
</form>
<div class="col-md-12">
    <div class="col-md-12">
        <h3>Produse</h3>
    </div>
    <div class="col-md-12">
        <button class="btn btn-primary add-produs">
            <span class="glyphicon glyphicon-plus"></span>
            Adauga Produs
        </button>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered">
            <tr>
                <th>ID</th><th>Imagine</th><th>Culorile</th><th>Marimea</th><th>Pretul</th><th>Caracteristica</th><th>Setari</th>
            </tr>
            <tr>
                <td>1</td><td><img src="{{asset('images/sac.jpg')}}" class="img-responsive afis-produs"/></td>
                <td>
                    <img src="{{asset('images/color1.jpg')}}" class="img-responsive" id="a">
                    <img src="{{asset('images/sac.jpg')}}" class="img-responsive" id="a">
                </td>
                <td><p>X</p></td><td>130 lei</td><td><p>Caracteristici</p></td>
            <td><a href="#"><span class="glyphicon glyphicon-cog"></span>Modifica</a>  
                <a class="delete-produs"href="#"><span class="glyphicon glyphicon-remove"></span>Sterge</a>
            </td>
            </tr>
        </table>
    </div>
</div>
<script>
    var button;
    var global=0;
    var globalmarime=0;
    var image="";
    $("#save").on("click",function(e){
        var permit=true;
        var colors=[];
        var imagecolors=[];
        var marimi=[];
        var price=$("#price").val();
        var imagine=image;
        var description=$("textarea[name=description]").val();
        $("input[name=colorandimage]").each(
            function(index,val)
            {  
                var attr = $(val).attr('valuei');
                if(typeof attr === typeof undefined || attr === false){
                    $("button[name=uploadimage]").css("border-color","red");
                    permit=false;
                }else{
                    colors[index]=$(val).attr('valuec');
                    imagecolors[index]=$(val).attr('valuei');
                }
            }
        );
        $("input[name=marims]").each(
            function(index,val)
            {  
                var value = $(val).val();
                if(value.length===0 || value.length>100){
                    $(val).css("border-color","red");
                    permit=false;
                }else{
                    $(val).css("border-color","#ccc");
                    marimi[index]=value;
                }
            }
        );
        if(price.length===0){
            $("#price").focus();
            $("#price").css("border-color","red");
            permit=false;
        }else{
            $("#price").css("border-color","#ccc");
        }
        if(imagine.length===0){
            permit=false;
            $("#defaultimagepreview").css("border-color","red");
        }else{
            $("#defaultimagepreview").css("border-color","gray");
        }
        if(permit===true){
            $("#save").button("loading");
            $.ajax({  
                type: 'POST',  
                url: '{{ URL("/admin/save") }}', 
                data: 
                    { 
                        imagine:imagine,
                        colors:colors,
                        imagecolors:imagecolors,
                        marimi:marimi,
                        price:price,
                        description:description
                    },
                success: function(data) {
                    $("#save").button("reset");
                    //window.location.href="{{URL('/admin/events')}}";
                },
                error:function(){
                    alert("A aparut o eroare");
                    $("#save").button("reset");
                }
            });
        }
    });
    $("#addmarimi").on("click",function(){
        $("#marimile").append("<div class='col-md-4' id='m"+globalmarime+"'>\n\
                                    <span name='stergemarime' id='"+globalmarime+"'>Sterge</span>\n\
                                    <input type='text' name='marims' class='form-control' placeholder='XL'/>\n\
                               </div>");
            globalmarime++;
    });
    $('#upload').on('submit',(function(e) {
        e.preventDefault();
        $("#defaultimagepreview").attr("src",'{{asset("/allimages/system/loader.gif")}}');
        var formData = new FormData(this);
        formData.append("image",image);
        $("#imageeror").html("");
        $.ajax({
            type:'POST',
            url: "{{URL('/admin/defaultupload')}}",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                if(data.succes===true){
                    image=data.image;
                    $("#defaultimagepreview").attr("src",'{{asset("/")}}'+data.image);
                }else{
                    $("#imageeror").html("A aparut o eroare la incarcare");
                    if(image.length>=2){
                        $("#defaultimagepreview").attr("src",'{{asset("/")}}'+image);
                    }else{
                        $("#defaultimagepreview").attr("src",'{{asset("/allimages/system/upload.png")}}');
                    }
                }
            },
            error:function(){
                $("#imageeror").html("A aparut o eroare la incarcare");
                if(image.length>=2){
                    $("#defaultimagepreview").attr("src",'{{asset("/")}}'+image);
                }else{
                    $("#defaultimagepreview").attr("src",'{{asset("/allimages/system/upload.png")}}');
                }
            }
        });
    }));
    $("#upload").on("change",function(){
        $("#upload").submit();
    });
    $("#uploadimage").on("submit",function(e){
        e.preventDefault();
        button.button("loading");
        var formData = new FormData(this);
        $(this)[0].reset();
        $.ajax({
            type:'POST',
            url: "{{URL('/admin/uploadimage')}}",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                if(data.succes===true){
                    var id=button.attr("idimg");
                    $("#i"+id).attr("valuei",data.image);
                    button.replaceWith("<img src='{{asset('/')}}"+data.image+"' class='img-responsive'/>");
                }
                button.button("reset");
            },
            error:function(){
                button.button("reset");
            }
        });
    });
    $("#uploadimage").on("change",function(){
        $("#uploadimage").submit();
    });
    $("body").on("click","button[name=uploadimage]",function(){
        $("#image-color").click();
        button=$(this);
    });
    $("body").on("click","span[name=stergemarime]",function(){
        var id=$(this).attr("id");
        $(this).remove();
        $("#m"+id).remove();
    });
    $("body").on("click","span[name=stergecolor]",function(){
        var id=$(this).attr("id");
        $(this).remove();
        $("#a"+id).remove();
    });
    $("#uploadcolor").on("submit",function(e){
        e.preventDefault();
        $("#colorbutton").button("loading");
        $("#coloreror").html("");
        var formData = new FormData(this);
        $(this)[0].reset();
        $.ajax({
            type:'POST',
            url: "{{URL('/admin/uploadcolor')}}",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                if(data.succes===true){
                    $("#allcolors").append("<p><span id='"+global+"' name='stergecolor'>Sterge</span></p>\n\
                                            <div id='a"+global+"'>\n\
                                                <div class='col-md-6 colorclass'>\n\
                                                    <img src='{{asset('/')}}"+data.image+"' class='img-responsive'/>\n\
                                                    <input type='hidden' id='i"+global+"' name='colorandimage' valuec='"+data.image+"'/>\n\
                                                </div>\n\
                                                <div class='col-md-6 imageclass'>\n\
                                                    <button class='btn btn-info btn-sm' name='uploadimage' idimg='"+global+"'>\n\
                                                        Incarca imagine\n\
                                                    </button>\n\
                                                </div>\n\
                                            </div>");
                    global++;
                }else{
                    $("#coloreror").html("fisierul nu este imagine");
                }
                $("#colorbutton").button("reset");
            },
            error:function(){
                $("#coloreror").html("A aparut o eroare la incarcarea acestui fisier");
                $("#colorbutton").button("reset");
            }
        });
    });
    $("#uploadcolor").on("change",function(){
        $("#uploadcolor").submit();
    });
</script>
@endsection
