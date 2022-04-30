<h1>{{$heading}}</h1>

@if(count($listings) == 0)
    <h2>No Post Here</h2>
@endif

@foreach ($listings as $item)
    <h2>{{$item['title']}}</h2>
   
    <p>{{$item['desc']}}</p>
    <hr>
@endforeach