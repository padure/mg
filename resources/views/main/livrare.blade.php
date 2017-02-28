<!DOCTYPE html> 
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Magazin</title>
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" >
        <link href="{{ asset("css/style.css") }}" rel="stylesheet" >
        <link href="{{ asset("css/style_valentin.css") }}" rel="stylesheet" >
        <link href="{{ asset("css/bootstrap-theme.min.css") }}" rel="stylesheet" type="text/css">
        <!-- token-->
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <script type="text/javascript">
        $.ajaxSetup({
           headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
        </script>
    </head>
    <body style="">
        <div class="container">
            <div class="row">
                @include('main.meniu')
                <div class="col-md-12 font">
                    <div class="col-md-12">
                        <h1>Возврат или обмен товара</h1>
                        <p class="liv-description">Возврат и обмен приобретенной у нас бескаркасной мебели и других товаров осуществляется быстро и
                            без бюрократических проволочек. Мы хорошо знаем свою продукцию и не требуем хранить чеки, накладные и 
                            гарантийные листы, для идентификации достаточно просто назвать номер телефона или адрес доставки Вашего 
                            заказа оператору нашей колл-центра ;"</p>
                        <b><p class="liv-description">Обратите внимание:</b>
                        <ul>
                            <li>Возвраты принимаются в течении 14 дней, а обмен в течении 30 дней с момента покупки Вашего заказа. </li>
                            <li>Для осуществления возврата товара с возмещением его полной стоимости, товар должен сохранять исходный вид 
                                (не содержать следов использования, повреждения, износа, посторонних запахов). Вопреки законодательству и сложившейся
                                практике мы не требуем сохранения оригинальной упаковки при возврате / обмене.</li>
                            <li>Возвраты и обмены принимаются на нашем пункте самовывоза по адресу: 
                            Как видите, покупать в BeriMeshok кресла-мешки не только дешево но и безопасно.</li>
                        </ul>
                    </div>
                </div
                @include('main.footer')
            </div>
        </div>
    </body>
</html>
