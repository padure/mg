<div class="content menu">
    <div class="col-md-2"> 
        <a href="{{URL("/")}}"> 
            @if(!empty($meniu["logo"]) && count($meniu["logo"])>0)
                <img src="{{asset($meniu["logo"]->valuevariable)}}" class="img-responsive"/>
            @else
                Logo
            @endif
        </a>
    </div>
    <div class="col-md-4">
        @if(!empty($meniu["ore"]) && count($meniu["ore"])>0)
            @foreach($meniu["ore"] as $i)
                <h4>
                    {{$i->valuevariable}}
                </h4>
            @endforeach
        @endif
    </div>
    <div class="col-md-3">
        <h2>
            @if(!empty($meniu["nrtel"]) && count($meniu["nrtel"])>0)
                <span class="glyphicon glyphicon-earphone"></span> 
                {{$meniu["nrtel"]->valuevariable}}
            @endif
        </h2>
    </div>
    <div class="col-md-3">
        <div class="social">
            @if(!empty($meniu["social"]) && count($meniu["social"])>0)
                @foreach($meniu["social"] as $i)
                    @if(strlen($i->link)>0)
                        <a href="{{$i->link}}" target="_blank">
                            <img src="{{asset($i->imagesocial)}}"/>
                        </a>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
    <hr style="border-bottom: 1px solid gray; width: 100%">
</div>
