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
                    <img src="{{asset($i['product']->image)}}" class="img-responsive" id="imageprod{{$i['product']->product_id}}"/>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="col-sm-6 col-xs-12">
                        @if(!empty($i['colors']) && count($i['colors'])>0)
                            @foreach($i['colors'] as $keycolor=>$icolor)
                                <div class="culoare" colorid="{{$icolor->color_id}}" name="colorimage" activecolor="{{$i['product']->product_id}}">
                                    <img src="{{asset($icolor->color)}}" image="{{asset($icolor->image_color)}}" class="img-responsive" />
                                </div>
                            @endforeach
                            <input type="hidden" valuec="" valuem="" id="idcomanda{{$i['product']->product_id}}"/>
                        @endif
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="locmarime">
                            @if(!empty($i['marimi']) && count($i['marimi'])>0)
                                @foreach($i['marimi'] as $keymarimi=>$imarimi)
                                    <div class="marime" name="marime" activemarime="{{$i['product']->product_id}}" marimi_id="{{$imarimi->marimi_id}}" price="{{$imarimi->price}}">
                                        {{$imarimi->marime}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <p class="text-center text-danger" id="select{{$i['product']->product_id}}" style="display:none;">
                        <b>
                            Selectati culoarea si marimea
                        </b>
                    </p>
                </div>

                <div class="col-md-7 col-sm-10 col-xs-12" style="padding-right: 0px;">
                    <div class="col-md-5 col-xs-6">
                        <div class="dropdown hidden-sm hidden-xs" style="margin-top:5px;">
                            <span class="produse dropdown-toggle" data-toggle="dropdown">
                                <button class="btn btn-default" style="outline:0">
                                    <span class="glyphicon glyphicon-chevron-down"></span>
                                    Caracteristici
                                </button>
                            </span>
                            <div class="dropdown-menu">
                                @if(!empty($i['caracteristici']) && count($i['caracteristici'])>0)
                                    @foreach($i['caracteristici'] as $keymarimi=>$icaracteristici)
                                        <p>
                                            {{$icaracteristici->caracteristica}}
                                        </p>  
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        
                        <p class="pret calibri" id="price{{$i['product']->product_id}}">
                            @if(!empty($i['marimi']) && count($i['marimi'])>0)
                                @foreach($i['marimi'] as $keymarimi=>$imarimi)
                                    {{$imarimi->price}}
                                    <?php break;?>
                                @endforeach
                            @endif
                        </p>
                        <button class="btn btn-primary suna" idprod="{{$i['product']->product_id}}" name="comanda">
                            Zacaji
                        </button>
                        
                    </div>
                    <div class="col-md-7 col-xs-12">
                        <form class="form_trimite" id="form{{$i['product']->product_id}}">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="telefon" placeholder="Telefon">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nume">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">
                                    Ok
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    @endforeach
    <script>
        $("body").on("click","button[name=comanda]",function(){
            var idprodus=$(this).attr("idprod");
            var idcolor=$("#idcomanda"+idprodus).attr("valuec");
            var idmarime=$("#idcomanda"+idprodus).attr("valuem");
            $("#select"+idprodus).css("display","none");
            if(idcolor>0 && idmarime>0){
                $("#form"+idprodus).show();
                $("#form"+idprodus).animate({
                                    width: '100%'
                                });
                 $("#form"+idprodus).find("input[name=email]").focus();               
            }else{
                $("#select"+idprodus).css("display","block");
            }
        });
        $("body").on("click","div[name=marime]",function(){
            var id=$(this).attr("activemarime");
            var idmarime=$(this).attr("marimi_id");
            var price=$(this).attr("price");
            if($(this).hasClass( "active_color" ))
            {
                $("div[activemarime="+id+"]").removeClass("active_color");
                $("#idcomanda"+id).removeAttr("valuem");
            }
            else{
                $("div[activemarime="+id+"]").removeClass("active_color");
                $(this).addClass("active_color");
                $("#idcomanda"+id).attr("valuem",idmarime);
            }
            $("#price"+id).html(price);
        });
        $("body").on("click","div[name=colorimage]",function(){
            var image=$(this).find("img").attr("image");
            var id=$(this).attr("activecolor");
            var idcolor=$(this).attr("colorid");
            if($(this).hasClass( "active_color" ))
            {
                $("div[activecolor="+id+"]").removeClass("active_color");
                $("#idcomanda"+id).removeAttr("valuec");
            }
            else{
                $("div[activecolor="+id+"]").removeClass("active_color");
                $(this).addClass("active_color");
                $("#idcomanda"+id).attr("valuec",idcolor);
            }
            $("#imageprod"+id).attr("src",image);
        });
    </script>
@endif
</div>