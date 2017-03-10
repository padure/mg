<div class="content publicitate">
    <div class="col-md-6 img-pub" style="margin-right: 2%;">
        @if(!empty($publicitate["livrare"]) && count($publicitate["livrare"])>0)
            <h2>{{$publicitate["livrare"]->titlu}}</h2>
            <img src="{{asset('images/livrare.png')}}" alt="" class="img-responsive livrare-icon">
            <p class="title-l">{{$publicitate["livrare"]->titludescriere}}</p>
            <p class="description-l">{{$publicitate["livrare"]->descriere}}</p>
        @else
            <img src="{{asset('images/livrare.png')}}" alt="" class="img-responsive livrare-icon">
        @endif
    </div>
    <div class="col-md-6 title-pub">
        @if(!empty($publicitate["intoarcere"]) && count($publicitate["intoarcere"])>0)
            <h2 class="intoarce-l">{{$publicitate["intoarcere"]->titlu}}</h2>
            <img src="{{asset('images/intoarce.png')}}" alt="" class="img-responsive" style="padding: 0; width: 40%;">
            <p class="description-l intoarce-l">{{$publicitate["intoarcere"]->descriere}}</p>
        @else
            <img src="{{asset('images/intoarce.png')}}" alt="" class="img-responsive" style="padding: 0; width: 40%;">
        @endif
        <u><a href="{{URL("/abaut-livrare")}}" class="abaut-l">Mai mult...</a></u>
    </div>
</div>
<div class="content col-md-12 font" style="margin-top: 20px; margin-bottom: 20px;">
    <div class="col-md-12 desc-liv">
        @if(!empty($publicitate["descrierepub"]) && count($publicitate["descrierepub"])>0)
            <p class="liv-description">{{$publicitate["descrierepub"]->descriere}}</p>   
        @endif
    </div>
    <div class="content publicitate" style="margin-bottom: 0; margin-top: 0;">
        <div class="col-md-6 title-pub" style="margin-right: 2%; height: 500px;">
            @if(!empty($publicitate["garantia"]) && count($publicitate["garantia"])>0)
                <div class="col-md-12 atentie-t">
                    <p>{{$publicitate["garantia"]->titlu}}</p>
                </div>
                <img src="{{asset('images/shield.png')}}" alt="" class="img-responsive" style="padding: 0; width: 40%;">
                <div class="col-md-12 atentie-d">
                    <p>{{$publicitate["garantia"]->descriere}}</p>
                </div>
            @else
                <img src="{{asset('images/shield.png')}}" alt="" class="img-responsive" style="padding: 0; width: 40%;">
            @endif
        </div>
        <div class="col-md-6 img-pub" style="height: 500px;">
            @if(!empty($publicitate["indoieli"]) && count($publicitate["indoieli"])>0)
                <div class="col-md-12 atentie-t at-t">
                    <p>{{$publicitate["indoieli"]->titlu}}</p>
                </div>
                <img src="{{asset('images/pantone.png')}}" alt="" class="img-responsive" style="padding: 0; width: 40%;">
                <div class="col-md-12 atentie-d at-d">
                    <p style="text-align: justify;">{{$publicitate["indoieli"]->descriere}}</p>
                </div>
            @else
                <img src="{{asset('images/pantone.png')}}" alt="" class="img-responsive" style="padding: 0; width: 40%;">
            @endif
        </div>
    </div>
</div>