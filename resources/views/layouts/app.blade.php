<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Play a game') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/game.css') }}" rel="stylesheet">

    <!-- dialog stuff -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <script type="text/javascript">
        var dialogactions =[];
    </script>
    <?php  $user = Auth::user();
           $userinfo  = json_decode(json_encode($user), true); ?>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <p>Current level&nbsp;<strong>{{$user['level']}}</strong></p>
                        <p>Current Exp   <strong>{{$user['current_exp']}}</strong></p>
                        <?php if($user['current_exp'] > $user['exp_needed_to_next_level']) {
                            $user->level = $user->level + 1;
                            $user->exp_needed_to_next_level = $user->exp_needed_to_next_level * 3;
                            $user->save();
                        }
                        ?>
                        <p>Exp to next level&nbsp;<strong>{{$user['level'] + 1}} {{$user['exp_needed_to_next_level']}}</strong></p>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>

                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                                <ul class="dropdown-menu" role="menu">
                                </ul>

                        <?php
                        $check = App\Quest::get();
                        $status = App\UserQuest::where('player_id', Auth::user()->id)->get();
                        $info = json_encode(json_decode($check), true);
                        $time = json_encode(json_decode($status), true);
                        ?>
                        <!-- Trigger the modal with a button -->
                        <li type="button" class="btn btn-info" data-toggle="modal"
                            data-target="#myModal">Open Journey</li>
                        @endif
                    </ul>
                    <a href="{{ route('patchnotes') }}">Patch notes Current: v1.1</a>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{asset('https://rawgit.com/CodeOtter/thusspokenpc/master/index.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="{{asset('js/bootbox.min.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
    <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script type="text/javascript">
        var audio = new Audio('{{ asset('inc/Dejavu.mp3') }}');
        function playAudio() {
            if (audio.duration > 0 && !audio.paused) {
            } else {
                audio.play();
            }
        }
    </script>
    <script type="text/javascript" src="{{asset('js/npcdialog.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/keys.js')}}"></script>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Quest Journey</h4>
                </div>
                <div class="modal-body">
                <?php
                if(isset($info)) {
                    $quests = json_decode($info);
                } if(isset($time)) {
                    $statuss = json_decode($time);
                }
                if(isset($quests)) {
                    $user_id = Auth::user()->id;
                    if($statuss == [] || $quests == [] ) {
                        $quests = json_decode(App\Quest::all());
                        $data = [];
                        foreach ($quests as $quest) {
                            $data[] = [
                                'quest_id' => $quest->id,
                                'npc_id' => $quest->npc_id,
                                'player_id'  => $user_id,
                                'status' => 'unknown',
                                'tasks' => 'static for now'
                            ];
                        }
                        App\UserQuest::insert($data);
                        echo 'Reset the page with CTRL+F5';
                    } else {
                        $number = count($quests);
                        for ($i = 0; $i < $number; $i++) { ?>
                            <p>Quest name: {{$quests[$i]->name}} Status: {{$statuss[$i]->status}}</p>
                        <?php }
                    }
                }?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
