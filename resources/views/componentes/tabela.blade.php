<table class="highlight  responsive-table">
    <thead>
        <tr>
            @foreach($columnList as $key => $value)
            <th scope="col">{{$value}}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($list as $lists)
        <tr>
            @foreach($columnList as $key => $value)
            @if($key == 'id')
            <th scope="row">@php echo $lists->{$key}@endphp</th>
            @else
            <td>@php echo $lists->{$key}@endphp</td>
            @endif
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>