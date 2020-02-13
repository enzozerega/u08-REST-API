@include("Header")
<style>
    /* table, tr, td {
        border: 1px solid black;
    } */
</style>


<h1 class="pt-5 pr-5 pl-5">Varukorg</h1>

@if ($count != 0)
<table class="table table-bordered">

    <tr>
        <th colspan = "1">Id</th>
        <th colspan = "1">Vara</th>
        <th colspan = "1">Pris</th>
        <th colspan = "1">Avdelning</th>
        <th colspan = "3">Antal</th>
        <th colspan = "1">Total</th>
    </tr>

    @foreach ($orders as $order)
    <tr>
        <td colspan = "1">{{$order->productId}}</td>
        <td colspan = "1">{{$order->productTitle}}<span style="color: gray;"> {{$order->productProducer}}</span></td>
        <td colspan = "1">{{$order->productPrice}}</td>
        <td colspan = "1">{{$order->productType}}</td>
        <td colspan = "1">
            <form method="post" action="/removeOne" submit="return confirm('Are you sure you want to remove item ?')">
            @csrf
                    <input type="hidden" name="amount" value="{{ $order->orderAmount }}">
                    <button type="submit" name="order" value="{{ $order->orderId }}" class="btn btn-danger rounded-circle">-</button>
            </form>
        </td>
        <td colspan = "1">{{$order->orderAmount}}</td>
        <td colspan = "1">
            <form method="post" action="/addOne">
            @csrf
                <button type="submit" name="order" class="btn btn-success rounded-circle" value="{{ $order->orderId }}">+</button>
            </form>
        </td>
        <td colspan = "3">{{$order->cost}}</td>
    </tr>
    @endforeach

    <tr>
        <td colspan="7">Totalsumma:</td>
        <td colspan = "1">{{$totalCost}}</td>
    </tr>
    </table>
    <div class="contain mx-auto" style="width:25%;">
        <form action="/buy" method="post">
    @csrf
        <input type="submit" class="btn btn-primary" style="width:100%;" value="Köp">
    </form>
    <br>
    <form action="/" method="get">
    @csrf
        <input type="submit" class="btn btn-secondary" style="width:100%;" value="Startsidan">
    </form>
    </div>


@else
<h2 class="pt-5 pr-5 pl-5">Din varukorg är tom</h2>
<div class="contain mx-auto" style="width:25%;">
    <form action="/" method="get">
    @csrf
        <input type="submit" class="btn btn-secondary" style="width:100%;" value="Startsidan">
    </form>
</div>
@endif
