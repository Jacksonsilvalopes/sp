
<div class="container ">
    <div class="row " style="margin: auto;" >
        <div class="col s{{$col}}" >
            @if (session('status'))
            <div class="alert alert-{{$aviso}}" role="alert">
                {{ session('status') }}
            </div>
            @endif
            &nbsp;
            {{$slot}}
        </div>
    </div>
</div>