<div class="content fundal">
@for($i=1;$i<=3;$i++)
    <div class="col-lg-10 produs 
         <?php
            if($i%2==1){
                echo "pull-right";
            }else{
                echo "pull-left";
            }
         ?>
    ">
        <div class="row">
            <div class="col-md-3" style="padding-left: 0px;">
                <img src="{{asset("images/sac1.jpg")}}" class="img-responsive"/>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="col-sm-6 col-xs-12">
                    <div class="culoare" style="background-color: black;">
                    </div>
                    <div class="culoare" style="background-color: blue;">
                    </div>
                    <div class="culoare" style="background-color: gray;">
                    </div>
                    <div class="culoare" style="background-color: yellowgreen;">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="locmarime">
                        <div class="marime">
                            M
                        </div>
                        <div class="marime">
                            X
                        </div>
                        <div class="marime">
                            XL
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-7 col-sm-10 col-xs-12">
                <div class="col-md-6 col-xs-6 hidden-sm hidden-xs">
                    <p class="pret">
                        13 000 Lei
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
                            <ul>
                                <li>Material</li>
                                <li>Material</li>
                                <li>Material</li>
                            </ul>
                            dsadsdsad sadsdasasd asd s ad sad as ads asd asd  asd ads dsa asd     asd d sa sad sad sad sad asd sa d sad 
                            dsadsdsad sadsdasasd asd s ad sad as ads asd asd  asd ads dsa asd     asd d sa sad sad sad sad asd sa d sad 
                            dsadsdsad sadsdasasd asd s ad sad as ads asd asd  asd ads dsa asd     asd d sa sad sad sad sad asd sa d sad 
                            dsadsdsad sadsdasasd asd s ad sad as ads asd asd  asd ads dsa asd     asd d sa sad sad sad sad asd sa d sad 
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
                        13 000 Lei
                    </p>
                    <button class="btn btn-primary suna">
                        Zacaji
                    </button>
                </div>
            </div>
        </div>
    </div>
@endfor
</div>