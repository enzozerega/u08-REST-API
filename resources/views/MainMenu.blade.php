@include('Header')
<h1 class="pt-5 pr-5 pl-5">Våra produkter</h1>
<div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-3 border p-5">
                <p class="h4">{{$product->productTitle}}</p>
                <p class="h5">{{$product->productProducer}}</p>
                <p class="h6">Pris: {{$product->productPrice}}:-</p>
                <a href="/api/products/{{ $product->productId }}">Visa mer</a>
                <form method="post" action="/add">
                @csrf
                    <button type="submit" name="addedItem" class="btn btn-primary m-4" value="{{ $product->productId }}">Lägg till korg</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
    <h1 class="pt-5 pr-5 pl-5">Vår butik</h1>
    <div id="map"  style="height:600px;width:70%; margin: auto; margin-bottom: 100px;"></div>

</div>
<script type='text/javascript'>
    var infobox, pin;
    var pushpinFrameHTML = '<div class="infobox"><a class="infobox_close" href="javascript:closeInfobox()"><img src="http://u06-laravel.test/close.png"/></a><div class="infobox_content">{content}</div></div>';
    function GetMap() {

        var map = new Microsoft.Maps.Map('#map', {
            center: new Microsoft.Maps.Location(59.315501, 18.072384)
        });
        var center = map.getCenter();
        infobox = new Microsoft.Maps.Infobox(center, {
            visible: false
        });
        infobox.setMap(map);
        pin = new Microsoft.Maps.Pushpin(center, {
            icon: 'http://u06-laravel.test/pin.png'
        });

        pin.metadata = {
                title: 'Du hittar oss på',
                description: 'Götgatan 48, Stockholm'
            };
        map.entities.push(pin);

        Microsoft.Maps.Events.addHandler(pin, 'click', pushpinClicked);
        function pushpinClicked(e) {
            if (e.target.metadata) {
                pin.setOptions({ visible: false });
                var html = "<span class='infobox_title'>" + pin.metadata.title + "</span><br/>" + pin.metadata.description;
                infobox.setOptions({
                    location: e.target.getLocation(),
                    visible: true,
                    offset: new Microsoft.Maps.Point(-10, 10),
                    htmlContent: pushpinFrameHTML.replace('{content}',html)
                });

            }
    }

    }


    function closeInfobox(){
            infobox.setOptions({visible:false});
            pin.setOptions({ visible: true });
        }
</script>
<script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AuMqzsahpVF3HgEgX13KrfgAjBhZCGSQ8aOTW0DKdjyeQNG-yWiFozdBhHvXwI19' async defer></script>
