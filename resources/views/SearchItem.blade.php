@include('Header')
<style>
    /* table, tr, td {
        border: 1px solid black;
    } */
</style>

<h1 class="pt-5 pr-5 pl-5">Sök</h1>

<table class="table table-bordered m-5">
    <form method="get" action="/result">
    @csrf
    <tr>
        <td class="h2">Vad söker du?</td>
    </tr>
    <tr>
        <td>
            <input type="text" name="userInput" class="form-control" style="width:50%;">
        </td>
    </tr>
</table>
<div class="contain mx-auto" style="width:25%;">
        <button type="submit" class="btn btn-primary" style="width:100%">Sök</button>
    </form>
    <br>
    <br>
    <form action="/" method="get">
    @csrf
        <input type="submit" class="btn btn-secondary" style="width:100%;" value="Startsidan">
    </form>
</div>

@if ($input != "")
    <h1 class="pt-5 pr-5 pl-5">Resultat</h1>
    <table class="table table-bordered m-5" style="width: 70%;">
        <tr>
            <th colspan = "1" class="p-1">Id</th>
            <th colspan = "1" class="p-1">Vara</th>
            <th colspan = "1" class="p-1">Avdelning</th>
            <th colspan = "1" class="p-1">Pris</th>
            <th colspan = "1" class="p-1"></th>
        </tr>
        @foreach ($results as $result)
        <tr>
            <td class="p-1">{{$result->productTitle}}</td>
            <td class="p-1">{{$result->productProducer}}</td>
            <td class="p-1">{{$result->productType}}</td>
            <td class="p-1">Pris: {{$result->productPrice}}</td>
            <td class="p-1">
                <form method="post" action="/addResult">
                @csrf
                    <button type="submit" name="addedItem" class="btn btn-primary" value="{{ $result->productId }}">Lägg till korg</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endif