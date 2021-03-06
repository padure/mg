@extends("admin.partials.header")
@section("header")
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="{{URL("/admin")}}">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="{{URL("/admin/products")}}">Produse</a></li>
                    <li><a href="{{URL("/admin/comenzi")}}">Comenzi</a></li>
                    
                    <li><a href="{{URL("/admin/logo")}}">Meniu</a></li>
                    <li><a href="{{URL("/admin/descrierea")}}">Telefoane</a></li>
                    <li><a href="{{URL("/admin/descriereavideo")}}">Descrierea Video</a></li>
                    <li><a href="{{URL("/admin/contactus")}}">Contact</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Altele
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{URL("/admin/users")}}">Admini</a></li>
                            <li><a href="{{URL("/admin/publicitate")}}">Publicitate</a></li>
                            <li><a href="{{URL("/admin/toatecomenzile")}}">Toate comenzile</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span>{{session("nameAdmin")}}</a></li>
                    <li><a href="{{URL("/exitadmin")}}"><span class="glyphicon glyphicon-log-in"></span>Exit</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    @yield("content")
</div>
<footer style="height: 100px;">
    
</footer>
<script>
    $(document).ready(function(){
        $('.dropdown-menu').click(function (e) {
            e.stopPropagation();
        });
    });
</script>
@endsection