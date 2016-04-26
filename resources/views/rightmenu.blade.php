<h3>FOLLOW US FACEBOOK</h3>
<div class="fb-page"
data-href="https://www.facebook.com/IssaraJourney"
data-width="340"
data-hide-cover="false"
data-show-facepile="true"></div>

@foreach($adsCategories as $adsCatg)
    <h3>{{$adsCatg->name}}</h3>
    @foreach($adsCatg->adsList as $advertise)
        @if($adsCatg->name === 'SPONSERS')
            <a href="{{$advertise->link_url}}"><img src="{{ $advertise->image }}" class="img-responsive" style="padding-bottom: 15px;"></a>
        @else
            <p><a href="{{$advertise->link_url}}">{{$advertise->name}}</a></p>
        @endif
    @endforeach
@endforeach
