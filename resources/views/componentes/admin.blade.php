<link type="text/css" rel="stylesheet" href="{{ asset('css/admin-materialize.min.css')}}" media="screen,projection" />

<ul id="sidenav-left" class="sidenav sidenav-fixed">
     
    <li><a href="{{route('contratos.show',$id)}}" class="logo-container"><i class="material-icons left">spa</i> RG: {{$rg}}</a></li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li class="bold waves-effect active"><a class="collapsible-header">Gerienciar<i class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#" class="waves-effect active">Contrato<i class="material-icons">web</i></a></li>        
                        <li><a href="#" class="waves-effect active">Severidades<i class="material-icons">web</i></a></li>        
                        <li><a href="#" class="waves-effect">Responsabilidades<i class="material-icons">list</i></a></li>
                        <li><a href="#" class="waves-effect active">Regionais<i class="material-icons">web</i></a></li>
                        <li><a href="#" class="waves-effect">Aditivos<i class="material-icons">dashboard</i></a></li>
                        <li><a href="#" class="waves-effect">Penalidades<i class="material-icons">chat</i></a></li>
                        <li><a href="#" class="waves-effect">Prorrogações<i class="material-icons">chat</i></a></li>
                        <li><a href="#" class="waves-effect">Garantias <i class="material-icons">chat</i></a></li>
                        <li><a href="#" class="waves-effect">Check-List<i class="material-icons">chat</i></a></li>
                    </ul>
                </div>
            </li>
            <li class="bold waves-effect"><a class="collapsible-header">Relatórios<i class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="/pages/admin-financial-charts" class="waves-effect">PDC<i class="material-icons">euro_symbol</i></a></li>
                        <li><a href="/pages/admin-doughnut-charts" class="waves-effect">SISCOR INICIAL<i class="material-icons">pie_chart</i></a></li>
                        <li><a href="/pages/admin-area-charts" class="waves-effect">SISCOR TRD<i class="material-icons">multiline_chart</i></a></li>
                        <li><a href="/pages/admin-bar-charts" class="waves-effect">ANS<i class="material-icons">equalizer</i></a></li>
                        <li><a href="/pages/admin-line-charts" class="waves-effect">CHECK-LIST<i class="material-icons">show_chart</i></a></li>        
                    </ul>
                </div>
            </li>
            <li class="bold waves-effect"><a class="collapsible-header">Indicadores<i class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="/pages/admin-line-charts" class="waves-effect">Check-List<i class="material-icons">show_chart</i></a></li>
                        <li><a href="/pages/admin-bar-charts" class="waves-effect">Bar Charts<i class="material-icons">equalizer</i></a></li>
                        <li><a href="/pages/admin-area-charts" class="waves-effect">Area Charts<i class="material-icons">multiline_chart</i></a></li>
                        <li><a href="/pages/admin-doughnut-charts" class="waves-effect">Doughnut Charts<i class="material-icons">pie_chart</i></a></li>
                        <li><a href="/pages/admin-financial-charts" class="waves-effect">Financial Charts<i class="material-icons">euro_symbol</i></a></li>
                        <li><a href="/pages/admin-interactive-charts" class="waves-effect">Interactive Charts<i class="material-icons">touch_app</i></a></li>
                    </ul>
                </div>
            </li>
         
            <li class="bold waves-effect"><a class="collapsible-header">Account<i class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="/pages/admin-log-in" class="waves-effect">Log In<i class="material-icons">person</i></a></li>
                        <li><a href="/pages/admin-settings" class="waves-effect">Settings<i class="material-icons">settings</i></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
</ul>


<main>
    <div  style="margin-left: 300px;margin-top:  20px;">
           {{$slot}}
    </div>
     
</main>
