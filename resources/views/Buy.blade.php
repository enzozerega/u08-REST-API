@include('Header')
<style>
    /* table, tr, td {
        border: 1px solid black;
    } */
</style>
 
@if ($count != 0)
<h1 class="pt-5 pr-5 pl-5">Tack för din beställning!</h1>

<table class="table table-bordered">

    <tr>
        <th colspan = "1">Id</th>
        <th colspan = "1">Vara</th>
        <th colspan = "1">Pris</th>
        <th colspan = "1">Avdelning</th>
        <th colspan = "1">Antal</th>
        <th colspan = "1">Total</th>
    </tr>

    @foreach ($orders as $order)
    <tr>
        <td colspan = "1">{{$order->productId}}</td>
        <td colspan = "1">{{$order->productTitle}}<span style="color: gray;"> {{$order->productProducer}}</span></td>
        <td colspan = "1">{{$order->productPrice}}</td>
        <td colspan = "1">{{$order->productType}}</td>
        <td colspan = "1">{{$order->orderAmount}}</td>
        <td colspan = "1">{{$order->cost}}</td>
    </tr>
    @endforeach

    <tr>
        <td colspan="5">Totalsumma:</td>
        <td colspan = "1">{{$totalCost}}</td>
    </tr>
</table>
    <div class="contain mx-auto" style="width:25%;">
    <form action="/" method="get">
    @csrf
        <input type="submit" class="btn btn-secondary" style="width:100%;" value="Startsidan">
    </form>
    </div>

@else

<h2>Din varukorg är töm</h2>

@endif
