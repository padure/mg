@extends("admin.base")
@section("content")
 <div class="container">
<div class="col-md-12 admin-produse">
    <div class="col-md-4">
        <img src="{{asset('allimages/produsimg/produs-default.jpg')}}"  class="imagine-produs" />
    </div>
    <div class="col-md-4 proprietati">
        
        <div class="col-md-12 colors">
            <div class="col-md-12">
            <b>Introduceti culoarea:</b>
            </div>
            <div class="col-md-6 color">
                <a class='btn btn-info'>Incarca Color</a>
                <input type="file" style="display:none;"/>
            </div>
            <div class="col-md-6 color">
                <a class='btn btn-info'>Incarca Color</a>
                <input type="file" style="display:none;"/>
            </div>
            
        </div>
        
        <div class="col-md-12 marimea">
            <div class="col-md-12">
            <b>Introduceti marimea</b>
            </div>
            <div class="col-md-12"><input type="text" class="form-control"/></div>
        </div>
        <div class="col-md-12 pret">
            <div class="col-md-12"><b>Introduceti pretul: </b></div>
            <div class="col-md-12"><input type="text" class="form-control"/></div>
        </div>
        
    </div>
    <div class="col-md-4">
        <b>Introduceti caracteristici: </b>
        <textarea rows="7" cols="49" class="form-control">
        </textarea>
        <button class="submit btn btn-success">Incarca</button>
    </div>
     
</div>
     </div>
@endsection
