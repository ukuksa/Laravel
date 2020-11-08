<!-- <ul>
@foreach ($tab as $value)
    <li>{{$value['title']}}</li>
@endforeach
</ul> -->

<ul>
    @foreach ($tab as $value)
        <li>
            UserId: {{$value['id']}}
            <p>{{$value['title']}}</p>

            @foreach ($fot as $item)
              @if ($item['albumId'] == $value['id'])
                <img src="{{$item['thumbnailUrl']}}">
              @endif

            @endforeach
        </li>
    @endforeach
</ul>