@extends("admin.base")
@section("content")
<style>
    #alllists p{
        margin:0px;
    }
    #alllists p span{
        cursor:pointer;
        color:blue;
    }
</style>
<div class="col-md-12">
    <div class="col-md-12 gray">
        <h3>Livrare</h3>
        @if(!empty($post["livrare"] && count($post["livrare"])>0))
            <label>Titlu Livrare</label>
            <input type="text" class="form-control" name="ltitlu" value="{{$post["livrare"]->titlu}}"/>
            <label>Titlu Descriere Livrare</label>
            <input type="text" class="form-control" name="ltitludescriere" value="{{$post["livrare"]->titludescriere}}"/>
            <label>Descriere Livrare</label>
            <input type="text" class="form-control" name="ldescriere" value="{{$post["livrare"]->descriere}}"/>
        @else
            <label>Titlu Livrare</label>
            <input type="text" class="form-control" name="ltitlu"/>
            <label>Titlu Descriere Livrare</label>
            <input type="text" class="form-control" name="ltitludescriere"/>
            <label>Descriere Livrare</label>
            <input type="text" class="form-control" name="ldescriere"/>
        @endif
    </div>
    <div class="col-md-12 gray">
        <h3>Intoarcere si Schimb</h3>
        @if(!empty($post["intoarcere"]) && count($post["intoarcere"])>0)
            <label>Titlu Intorcere si Schimb</label>
            <input type="text" class="form-control" name="ititlu" value="{{$post["intoarcere"]->titlu}}"/>
            <label>Descriere Intorcere si Schimb</label>
            <input type="text" class="form-control" name="idescriere" value="{{$post["intoarcere"]->descriere}}"/>
        @else
            <label>Titlu Intorcere si Schimb</label>
            <input type="text" class="form-control" name="ititlu"/>
            <label>Descriere Intorcere si Schimb</label>
            <input type="text" class="form-control" name="idescriere"/>
        @endif
    </div>
    <div class="col-md-12 gray">
        <h3>Garantia</h3>
        @if(!empty($post["garantia"]) && count($post["garantia"])>0)
            <label>Titlu Garantia</label>
            <input type="text" class="form-control" name="gtitlu" value="{{$post["garantia"]->titlu}}"/>
            <label>Descriere Garantia</label>
            <input type="text" class="form-control" name="gdescriere" value="{{$post["garantia"]->descriere}}"/>
        @else
            <label>Titlu Garantia</label>
            <input type="text" class="form-control" name="gtitlu"/>
            <label>Descriere Garantia</label>
            <input type="text" class="form-control" name="gdescriere"/>
        @endif
    </div>
      <div class="col-md-12 gray">
        <h3>Indoieli</h3>
        @if(!empty($post["indoieli"]) && count($post["indoieli"])>0)
            <label>Titlu Indoieli</label>
            <input type="text" class="form-control" name="intitlu" value="{{$post["indoieli"]->titlu}}"/>
            <label>Descriere Indoieli</label>
            <input type="text" class="form-control" name="indescriere" value="{{$post["indoieli"]->descriere}}"/>
        @else
            <label>Titlu Indoieli</label>
            <input type="text" class="form-control" name="intitlu"/>
            <label>Descriere Indoieli</label>
            <input type="text" class="form-control" name="indescriere"/>
        @endif
    </div>
      <div class="col-md-12 gray">
        <h3>Descriere</h3>
        @if(!empty($post["descrierepub"]) && count($post["descrierepub"])>0)
            <textarea rows="4" cols="50" class="form-control" name="ddescriere">{{$post["descrierepub"]->descriere}}</textarea>
        @else
            <textarea rows="4" cols="50" class="form-control" name="ddescriere"></textarea>
        @endif
    </div>
    <div class="col-md-12 gray">
        <h3>Despre Livrare</h3>
        @if(!empty($post["despreliv"]) && count($post["despreliv"])>0)
            <label>Titlu Despre Livrare</label>
            <input type="text" class="form-control" name="livtitlu" value="{{$post["despreliv"]->titlu}}"/>
            <label>Descriere Despre Livrare</label>
            <textarea rows="4" cols="50" class="form-control" name="livdescriere">{{$post["despreliv"]->descriere}}</textarea>
        @else
            <label>Titlu Despre Livrare</label>
            <input type="text" class="form-control" name="livtitlu" />
            <label>Descriere Despre Livrare</label>
            <textarea rows="4" cols="50" class="form-control" name="livdescriere"></textarea>
        @endif
        <label>Titlu Lista</label>
        <div class="content" id="alllists">
            <?php $global=0;?>
            @if(!empty($post["livrarelista"]) && count($post["livrarelista"])>0)
                @foreach($post["livrarelista"] as $i)
                    <p>
                        <span id='{{$global}}' name='delete'>Sterge</span>
                    </p>
                    <input type='text' class='form-control' name='livlist' id='i{{$global}}' value="{{$i->lista}}"/>
                    <?php $global++;?>
                @endforeach
            @endif
        </div>
        <div class="col-md-12" style="padding: 15px;  padding-left: 0;">
            <button class="btn btn-primary" id="addlist">
                <span class="glyphicon glyphicon-plus"></span>
                Adauga element
            </button>
        </div>
    </div>
    <div class="col-md-12" style="padding: 15px; padding-left: 0;">
        <button class="btn btn-primary" id="save" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Se salveaza">
            Salveaza
        </button>
        <span class="text-success">
            <b id="salvat"></b>
        </span>
    </div>
</div>

<script>
    var global="{{$global}}";
    $("#addlist").on("click",function(){
        $("#alllists").append("<p>\n\
                                <span id='"+global+"' name='delete'>Sterge</span>\n\
                              </p>\n\
                             <input type='text' class='form-control' name='livlist' id='i"+global+"'/>");
        global++;
    });
    $("body").on("click","span[name=delete]",function(){
        var id=$(this).attr("id");
        $(this).remove();
        $("#i"+id).remove();
    });
    $("#save").on("click",function(){
        var elements=[];
        var permit=true;
        $("input[name=livlist]").each(
            function(index,val)
            {  
                if($(val).val().length===0){
                    $(val).css("border-color","red");
                    $(val).focus();
                    permit=false;
                }else{
                    elements[index]=$(val).val();
                    $(val).css("border-color","#ccc");
                }
            }
        );
        if(permit===true){
            $("#save").button("loading");
            $.ajax({  
                type: 'POST',  
                url: '{{ URL("/admin/savepublicitate") }}', 
                data: 
                    { 
                        ltitlu:$("input[name=ltitlu]").val(),
                        ltitludescriere:$("input[name=ltitludescriere]").val(),
                        ldescriere:$("input[name=ldescriere]").val(),
                        ititlu:$("input[name=ititlu]").val(),
                        idescriere:$("input[name=idescriere]").val(),
                        gtitlu:$("input[name=gtitlu]").val(),
                        gdescriere:$("input[name=gdescriere]").val(),
                        intitlu:$("input[name=intitlu]").val(),
                        indescriere:$("input[name=indescriere]").val(),
                        ddescriere:$("textarea[name=ddescriere]").val(),
                        livtitlu:$("input[name=livtitlu]").val(),
                        livdescriere:$("textarea[name=livdescriere]").val(),
                        elements:elements
                    },
                success: function(data) {
                    $("#save").button("reset");
                    $("#salvat").text("Sa salvat");
                },
                error:function(){
                    alert("A aparut o eroare");
                    $("#save").button("reset");
                }
            });
        }
    });
</script>
@endsection