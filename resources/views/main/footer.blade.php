<div class="content">
    <div class="col-md-12 footer">
        <div class="col-md-4 social">
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
        <div class="col-md-4">
            @if(!empty($meniu["ore"]) && count($meniu["ore"])>0)
                @foreach($meniu["ore"] as $i)
                    <h5>
                        {{$i->valuevariable}}
                    </h5>
                @endforeach
            @endif
        </div>
        <div class="col-md-4">
            <h3>
                @if(!empty($meniu["nrtel"]) && count($meniu["nrtel"])>0)
                    <span class="glyphicon glyphicon-earphone"></span> 
                    {{$meniu["nrtel"]->valuevariable}}
                @endif
            </h3>
        </div>
    </div>
</div>