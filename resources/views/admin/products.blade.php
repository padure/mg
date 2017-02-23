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
            <div class="col-md-3">
                <img src="{{asset('allimages/produsimg/color/color1.jpg')}}"  class="color" />
            </div>
            <div class="col-md-3">
                <img src="{{asset('allimages/produsimg/color/color2.jpg')}}"  class="color" />
            </div>
            <div class="col-md-3">
                <img src="{{asset('allimages/produsimg/color/color3.jpg')}}"  class="color" />
            </div>
            <div class="col-md-3">
                <img src="{{asset('allimages/produsimg/color/color4.jpg')}}"  class="color" />
            </div>
        </div>
        
        <div class="col-md-12 marimea">
            <div class="col-md-12">
            <b>Introduceti marimea</b>
            </div>
            <div class="col-md-4">
               <div>M</div>
            </div>
            <div class="col-md-4">
                <div>L</div>
            </div>
            <div class="col-md-4">
                <div>XL</div>
            </div>
        </div>
        <div class="col-md-12 pret">
            <div class="col-md-12"><b>Introduceti pretul: </b></div>
            <div class="col-md-12"><input type="text"/></div>
        </div>
    </div>
    <div class="col-md-4">
        <b>Introduceti caracteristici: </b>
        <ul >
            <li>H habh ba bhabhb habdh </li>
            <li>H habh ba bhabhb habdh </li>
            <li>H habh ba bhabhb habdh </li>
            <li>H habh ba bhabhb habdh </li>
            <li>H habh ba bhabhb habdh </li>
            <li>H habh ba bhabhb habdh </li>
            <li>H habh ba bhabhb habdh </li>
            <li>H habh ba bhabhb habdh </li>
        </ul>
    </div>
     <button class="submit">Incarca</button>
</div>
     </div>
@endsection
