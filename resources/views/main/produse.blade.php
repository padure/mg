<div class="content fundal">
@if(!empty($products) && count($products)>0)
<?php $nr=0;?>
    @foreach($products as $key=>$i)
        <div class="col-lg-10 produs 
            <?php 
                if($nr%2==0){
                    echo "pull-right";
                }
                else{
                    echo "pull-left";
                }
                $nr++;
            ?>
        "> 
            <div class="row">
                <div class="col-md-3" style="padding-left: 0px;">
                    <img src="{{asset($i['product']->image)}}" class="img-responsive"/>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="col-sm-6 col-xs-12">
                        @if(!empty($i['colors']) && count($i['colors'])>0)
                            @foreach($i['colors'] as $keycolor=>$icolor)
                                <div class="culoare">
                                    <img src="{{asset($icolor->color)}}" class="img-responsive"/>
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="locmarime">
                            @if(!empty($i['marimi']) && count($i['marimi'])>0)
                                @foreach($i['marimi'] as $keymarimi=>$imarimi)
                                    <div class="marime">
                                        {{$imarimi->marime}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-sm-10 col-xs-12">
                    <div class="col-md-6 col-xs-6 hidden-sm hidden-xs">
                        <p class="pret">
                            {{$i['product']->price}}
                        </p>
                        <button class="btn btn-primary suna">
                            Zacaji
                        </button>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="dropdown hidden-xs" style="margin-top:5px;">
                            <span class="produse dropdown-toggle" data-toggle="dropdown">
                                <button class="btn btn-default" style="outline:0">
                                    <span class="glyphicon glyphicon-chevron-down"></span>
                                    Caracteristici
                                </button>
                            </span>
                            <div class="dropdown-menu">
                                {!!$i['product']->description!!}
                            </div>
                        </div>
                        <form class="form-horizontal form_trimite">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="telefon" placeholder="Telefon">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nume">
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 col-xs-12 visible-sm visible-xs">
                        <p class="pret">
                            {{$i['product']->price}}
                        </p>
                        <button class="btn btn-primary suna">
                            Zacaji
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
</div>