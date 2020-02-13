<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Butik</title>
</head>

<style>
    .infobox{
        position:relative;
        background-image: url("http://u06-laravel.test/bubble.png");
        height: 200px;
        width: 241px;
    }

    .infobox_close{
        cursor:pointer;
        position: absolute;
        right: 7px;
        top: 5px;
        border:none;
    }

    .infobox_content{
        margin:5px;
        font-size:16px;
        font-weight: bold;
        font-family: "Helvetica Neue","Noto Sans",sans-serif;
        text-align: center;
        line-height:22px;
        padding: 65px 20px;
    }
</style>

<table class="mx-auto">
    <tr>
        <td colspan = "3"><h1 class="display-1 p-2">Livsmedelsbutik</h1></td>
    </tr>
    <tr>
        <td colspan = "1">
            <form method="get" action="/result/">
            @csrf
                <input type="submit" class="btn btn-primary" style="width:100%" value="Sök">
            </form>
        </td>
        <td colspan = "1">
            <form method="get" action="/cart">
                <input type="submit" class="btn btn-warning" style="width:100%" value="Varukorg">
            </form>
        </td>
        <td colspan = "1">
            <form method="get" action="/clearedCart" submit="return confirm('Are you sure you want to remove product')">
                <input type="submit" style="width:100%" class="btn btn-info" value="Töm varukorgen">
            </form>
        </td>
    </tr>
</table>