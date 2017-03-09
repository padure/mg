<div class="content description">
    <div class="col-md-6 info-description pull-right" >
        @if(!empty($descriereaprod) && count($descriereaprod)>0)
            <ul>
                @foreach($descriereaprod as $i)
                    <li>{{$i->descrierea}}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>