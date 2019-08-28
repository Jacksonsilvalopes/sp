<form class="form-inline" method="GET" action="{{route($routname.'.index')}}" >
    <div class="row ">
        <div class="col s{{$col}} ">
            <div class="input-field">
                <input type="search" name="pesquisa"   value="{{$pesquisa}}">
                <label for="pesquisa">Pesquisar</label>
            </div>
        </div>
        <div class="col s5 " style="margin-top: 25px;">
            <button type="submit" class="btn btn-primary ">Buscar</button>
            <a class="btn btn-success " href="{{route($routname.'.index')}}">Limpar</a>
            <a class="btn btn-primary " href="{{route($routname.'.create')}}">Adicionar</a>

        </div>
    </div>
</form>
