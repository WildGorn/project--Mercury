<div class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Project Mercury</a>
        </div>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">
                @foreach($menu as $item)
                    <li><a href="{{$item->url}}">{{$item->title}}</a></li>
                @endforeach
            </ul>
            @if(Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                           role="button">{{ Auth::user()->name }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="admin/users">Администрирование</a></li>
                            <li class="divider"></li>
                            <li><a href="{{Auth::logout()}}">Выйти</a></li>
                        </ul>
                    </li>
                </ul>
            @endif

        </div>
    </div>
</div>


