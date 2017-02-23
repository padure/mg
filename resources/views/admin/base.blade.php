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
                    <li><a href="{{URL("/admin/users")}}">Admini</a></li>
                    <li><a href="{{URL("/admin/logo")}}">Meniu</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
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