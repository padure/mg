@extends("admin.base")
@section("content")
<div class="col-md-12">
    <div class="col-md-12 gray">
        <h3>Livrare</h3>
        <label>Titlu Livrare</label>
        <input type="text" class="form-control"/>
        <label>Titlu Descriere Livrare</label>
        <input type="text" class="form-control"/>
        <label>Descriere Livrare</label>
        <input type="text" class="form-control"/>
    </div>
    <div class="col-md-12" style="padding: 15px;">
        <button class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span>Modifica</button>
         <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Sterge</button>
    </div>
    <div class="col-md-12 b">
        <h3>Intorcere si Schimb</h3>
        <label>Titlu Intorcere si Schimb</label>
        <input type="text" class="form-control"/>
        <label>Descriere Intorcere si Schimb</label>
        <input type="text" class="form-control"/>
    </div>
    <div class="col-md-12" style="padding: 15px;">
        <button class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span>Modifica</button>
         <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Sterge</button>
    </div>
    <div class="col-md-12 gray">
        <h3>Garantia</h3>
        <label>Titlu Garantia</label>
        <input type="text" class="form-control"/>
        <label>Descriere Garantia</label>
        <input type="text" class="form-control"/>
    </div>
    <div class="col-md-12" style="padding: 15px;">
        <button class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span>Modifica</button>
         <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Sterge</button>
    </div>
      <div class="col-md-12 b">
        <h3>Indoieli</h3>
        <label>Titlu Indoieli</label>
        <input type="text" class="form-control"/>
        <label>Descriere Indoieli</label>
        <input type="text" class="form-control"/>
    </div>
    <div class="col-md-12" style="padding: 15px;">
        <button class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span>Modifica</button>
         <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Sterge</button>
    </div>
      <div class="col-md-12 gray">
        <h3>Descriere</h3>
        <textarea rows="4" cols="50" class="form-control"></textarea>
    </div>
    <div class="col-md-12" style="padding: 15px;">
        <button class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span>Modifica</button>
         <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Sterge</button>
    </div>
    <div class="col-md-12 b">
        <h3>Despre Livrare</h3>
        <label>Titlu Despre Livrare</label>
        <input type="text" class="form-control"/>
        <label>Descriere Despre Livrare</label>
        <textarea rows="4" cols="50" class="form-control"></textarea>
        <label>Titlu Lista</label>
        <input type="text" class="form-control"/>
        <div class="col-md-12" style="padding: 15px;  padding-left: 0;">
            <button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Adauga element</button>
        </div>
    </div>
    <div class="col-md-12" style="padding: 15px;">
        <button class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span>Modifica</button>
        <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Sterge</button>
    </div>
</div>
@endsection