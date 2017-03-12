<div class="content">
    <div class="col-md-12 footer">
        <div class="col-md-12 footer-men" style="padding: 0;">
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
        <div class="col-md-12" style="padding: 0; border-top: 1px solid white; padding-top: 15px;">
                <b style="font-size: 13px;">Sula Valentin: sula.valentin@gmail.com</b>
                <b style="font-size: 13px;">Pădure Gheorghe: paduregheorghe7@gmail.com</b>
                <p>
                &copy; All Rights Reserved
            </p>
        </div>
    </div>
</div>
    