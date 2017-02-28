@extends('main.primarybase')
@section('content')
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
            <div class="col-md-12 font">
                <div class="col-md-12">
                    <h2>Для обмена товара на алогичный с другой расцветкой, Вам достаточно привезти к нам внешний съемный чехол, который легко
                    умещается в сумку или рюкзак!</h2>   
                </div>
                <div class="col-md-12">
                    <div class="col-md-2">
                        <img src="{{asset('images/intoarce.png')}}" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-10">
                        
                    </div>
                </div>
            </div>
        </div>
        @include('main.footer')
    </div>
</div>
@endsection
