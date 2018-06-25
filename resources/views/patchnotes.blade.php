@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><p>PatchNotes current: v1.2</p>
                    <p> Return with &larr; in top left corner</p>
                </div>
                <div class="panel-body">
                    <label>v1.2</label>
                    <p> The next bugs has been solved
                        <a href="https://github.com/justinvandelaar/LaravelAvontuur/issues?q=is%3Aissue+is%3Aclosed">Click here for more info</a></p>
                    <p>Bugs can be reported on the link or Mail to: JNLHelper@outlook.com with the subject: Bug report</p>
                    <i>Note: Please explain the steps you have taken towards the bug <br>
                    And on the link go to open and add a new issue button</i>
                    <ul>
                        <li>None</li>
                    </ul>
                    <p> Known Issue`s</p>
                    <ul>
                        <li> On use of the pink potion a player health can reach below 0 <br>
                            &nbsp;&nbsp;<i>&nbsp;And when the user heals its self, the app grants the player money back<br>
                                &nbsp;&nbsp;But when the user leaves the potion shops the player lose its stats <br>
                                  This due to the app sees the player with less the 0 health </i></li>
                        <li>Npc`s that don`t exist in the database wil throw the player a error page <br>
                            <i>&nbsp; See Npc`s list below for which cause the error and they are marked with <br>
                               &nbsp; (Does not exsit yet in the database)</i></li>
                    </ul> <br>
                    <p> Added the next items </p>
                    <ul>
                        <li>None</li>
                    </ul> <br>
                    <p> Added the next Monsters </p>
                    <ul>
                        <li>None</li>
                    </ul>
                    <p> Added the next Npc`s (Too the database)</p>
                    <ul>
                        <li>Designer Tim (Sub base yard)</li>
                        <li>Programmer Deona (Sub base yard)</li>
                    </ul><br>
                    <p> The next Npc`s has not yet a Completed dialog tree <br>
                    <i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The one`s not existing in the database wil cause error`s for the player <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So what ever you do do not visit them by clicking the link <br></i></p>
                    <ul>
                        <li>Soldier Kane (Sub base docks)</li>
                        <li>Widow Esmee (Sub base Hallway)</li>
                        <li>IT Teacher Peter (Sub base Outside the yard)</li>
                        <li>Student Arya (Sub base Outside the yard)</li>
                        <li>Domain leader Nina (Sub base Outside the yard)</li>
                        <li>Beauty King Lauren (Sub base yard)</li>
                        <li>Coach Marieke (Sub base yard)</li>
                        <li>Coach Jeroen (Sub base yard)</li>
                        <li>Mother Lieke (Sub base yard)</li>
                        <li>Student Ariëlle (Sub base yard)</li>
                        <li>Owner Iris (Sub base yard)</li>
                        <li>Support Teacher Judith (Sub base yard)</li>
                        <li>Scout Dylan (Sub base yard)</li>
                        <li>Designer Tim (Sub base yard)</li>
                        <li>Programmer Deona (Sub base yard)</li>
                        <li>Coach Corine (ClassRoom1) (Does Not exist in the database)</li>
                        <li>Coach Esther (ClassRoom1) (Does Not exist in the database)</li>
                        <li> RT Dorine   (ClassRoom1) (Does Not exist in the database)</li>
                        <li>Student Dylan (ClassRoom1) (Does Not exist in the database)</li>
                        <li>Teacher Edwin (ClassRoom2) (Does Not exist in the database)</li>
                        <li>zoco Willy (ClassRoom2) (Does Not exist in the database)</li>
                        <li>student Robin (ClassRoom2) (Does Not exist in the database)</li>
                        <li>Teacher Jurgen (ClassRoom2) (Does Not exist in the database)</li>
                        <li>Art Teacher Christina(School aula) (Does Not exist in the database)</li>
                    </ul><br>
                    <p>Buffs</p>
                    <ul>
                        <li>None</li>
                    </ul>
                    <p>Nerfs</p>
                    <ul>
                        <li>None</li>
                    </ul><br>

                    <p>Rewrote Judith story To Fit the story with Marieke, Jeroen</p>
                    <p>Players can now see their party and their members</p>
                    <p>Party System is done</p>
                    <p>  <i> This can be obtained by help of certain npcs ;)</i> <br>
                        Secret system is done with info about my story</p>

                    <p>Planned Features for 1.2</p>
                    <ul>
                        <li>Party system for the player</li>
                        <li>Location`s behind the mall and the bank</li>
                        <li>Quest`s for some npc`s</li>
                        <li>A reward for leveling up</li>
                        <li>Npc`s dialog trees</li>
                        <li>A look in the magical_attack stat for potion`s or a separate stat attack</li>
                        <li>A look to the condition quest system or double quest system</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- ul>li#It*8
> Ul into li
# Add a id
. Add a class
* Amount of times to make -->