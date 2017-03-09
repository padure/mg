@extends("admin.base")
@section("content")
<div class="col-md-12">
    <div class="col-md-12 gray">
        <h3>Livrare</h3>
        <label>Titlu Livrare</label>
        <input type="text" class="form-control" name="ltitlu"/>
        <label>Titlu Descriere Livrare</label>
        <input type="text" class="form-control" name="ltitludescriere"/>
        <label>Descriere Livrare</label>
        <input type="text" class="form-control" name="ldescriere"/>
    </div>
    <div class="col-md-12 gray">
        <h3>Intoarcere si Schimb</h3>
        <label>Titlu Intorcere si Schimb</label>
        <input type="text" class="form-control" name="ititlu"/>
        <label>Descriere Intorcere si Schimb</label>
        <input type="text" class="form-control" name="idescriere"/>
    </div>
    <div class="col-md-12 gray">
        <h3>Garantia</h3>
        <label>Titlu Garantia</label>
        <input type="text" class="form-control" name="gtitlu"/>
        <label>Descriere Garantia</label>
        <input type="text" class="form-control" name="gdescriere"/>
    </div>
      <div class="col-md-12 gray">
        <h3>Indoieli</h3>
        <label>Titlu Indoieli</label>
        <input type="text" class="form-control" name="intitlu"/>
        <label>Descriere Indoieli</label>
        <input type="text" class="form-control" name="indescriere"/>
    </div>
      <div class="col-md-12 gray">
        <h3>Descriere</h3>
        <textarea rows="4" cols="50" class="form-control" name="ddescriere"></textarea>
    </div>
    <div class="col-md-12 gray">
        <h3>Despre Livrare</h3>
        <label>Titlu Despre Livrare</label>
        <input type="text" class="form-control" name="livtitlu"/>
        <label>Descriere Despre Livrare</label>
        <textarea rows="4" cols="50" class="form-control" name="livdescriere"></textarea>
        <label>Titlu Lista</label>
        <input type="text" class="form-control" name="livlist"/>
        <div class="col-md-12" style="padding: 15px;  padding-left: 0;">
            <button class="btn btn-primary">
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
    $("#save").on("click",function(){
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
                    ddescriere:$("input[name=ddescriere]").val(),
                    livtitlu:$("input[name=livtitlu]").val(),
                    livdescriere:$("input[name=livdescriere]").val()
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
    });
</script>
@endsection