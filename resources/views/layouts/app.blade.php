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
                        <?php
                            if($user == null) {} else {
                        ?>
                        <p>Current level&nbsp;<strong><?php echo e($user['level']); ?></strong></p>
                        <p>Current Exp   <strong><?php echo e($user['current_exp']); ?></strong></p>
                        <?php if($user['current_exp'] > $user['exp_needed_to_next_level']) {
                            $user->level = $user->level + 1;
                            $user->exp_needed_to_next_level = $user->exp_needed_to_next_level * 3;
                            $user->save();
                        }
                        ?>
                        <p>Exp to next level&nbsp;<strong><?php echo e($user['level'] + 1); ?> <?php echo e($user['exp_needed_to_next_level']); ?></strong></p>
                        <?php } ?>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <?php $logged_in = false; ?>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <?php $logged_in = true; ?>
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
                        <li type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#quest" style="margin-top: 5px">Open Journey</li>

                        <!-- Trigger the modal with a button -->
                        <li type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#party" style="margin: 5px 0px 0 5px ">Open Player Party</li>
                        @endif
                    </ul>
                    <ul>
                    <a href="{{ route('patchnotes') }}">Patch notes Current: v1.2</a>
                    <p data-toggle="modal" data-target="#content"
                       class="content-info"> Disclaimer to all people </p>
                    <p data-toggle="modal" data-target="#music"
                       class="content-info"> Music Claim </p>
                    </ul>
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

        function showContentInfo() {
        }
    </script>
    <script type="text/javascript" src="{{asset('js/npcdialog.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/keys.js')}}"></script>
    <!-- Quest Modal -->
    <div id="quest" class="modal modal-quest" role="dialog">
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

    <!-- Party Modal -->
    <div id="party" class="modal modal-party" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Player Party</h4>
                </div>
                <div class="modal-body">
                    <?php
                        if($logged_in == true) {
                            $party_id = App\Party::where('player_id', Auth::user()->id)->get();
                            if ($party_id == '[]') { ?>
                                <?php $data = [
                                        'player_id' => Auth::user()->id
                                ];
                                App\Party::insert($data);
                                ?>
                                <p> Refresh The Page </p>
                            <?php } else {
                                $user_party = App\player_parties::with("partyCheck")->where("party_id", $party_id[0]->id)->get();
                                $party_array = json_decode($user_party);
                                if($party_array == "[]" || $party_array == []) {?>
                                    <p>No one has joined your page</p>
                                <?php }  else {
                                    $i = 0;
                                    foreach ($party_array as $party_member) {
                                        $npc_names = App\Npcs::with("getNpcNames")->where("id", $party_member->npc_id)->get();?>
                                        <p><b>Npc:</b> <?= $npc_names[$i]->name ?></p>
                                    <?php }
                                }
                            }
                        }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Content info -->
    <div id="content" class="modal modal-info" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Content Disclaimer</h4>
                </div>
                <div class="modal-body">
                <h1 style="font-size: 14px;"> Pictures and ideas</h1>
                    <p>Most of the pictures and some of the ideas are scattered from the internet <br>
                    By this is say that i am only the owner of the website and the <b>TEXT</b> content <br>
                    The rest of the content goes to the many internet sites i have visit <br>
                    I give credit to the owners of them like an example: The ink animation studio is an idea of bendy and the inked machine <br>
                    Credit goes to the: The Meatly Games and here is there link <br>
                    The Meatly Games: <a style="color: white;" href="http://www.themeatly.com/"> Web link</a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Content info -->
    <div id="music" class="modal modal-music" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-music">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Music used in the website (Clicking on link wil leave the website) </h4>
                </div>
                <div class="modal-body">
                    <p>
                    <ul>
                        <a style="color: white;" href="https://www.youtube.com/watch?v=dv13gl0a-FA">Deja vu (Inital D)</a> <br>
                        <a style="color: white;" href="https://www.youtube.com/watch?v=VNdIvPb196s"> Can`t be erased (JT Music) </a><br>
                        <a style="color: white;" href="https://www.youtube.com/watch?v=ZstsPUKT5CI"> Build our machine (DAgames)  </a><br>
                        <a style="color: white;"> gospel of dismay (DAgames) </a> (Comining) <br>
                        <a style="color: white;"> After Hours (JT Music) </a>(Comining) <br>
                    </ul>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
