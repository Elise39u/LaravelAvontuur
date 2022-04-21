@extends('layouts.app')
@section('content')
            <div class="col-md-10 card bg-light mb-3">
            <div class="card-header"><p>PatchNotes current: v1.2</p>
                <p> Return with &larr; in top left corner</p></div>
            <div class="card-body">
                <label>v1.2</label>
                <p> The next bugs has been solved
                    <a href="https://github.com/justinvandelaar/LaravelAvontuur/issues?q=is%3Aissue+is%3Aclosed">Click
                        here for more info</a></p>
                <p>Bugs can be reported on the link or Mail to: JNLHelper@outlook.com with the subject: Bug report</p>
                <i>Note: Please explain the steps you have taken towards the bug <br>
                    And on the link go to open and add a new issue button</i>
                <ul>
                    <li>The Magical Attack and Primary Weapon Attack and defense are not correctly calculated</li>
                    <li>The Withdraw system near the ATM is not working</li>
                    <li>The quest system is currently not working</li>
                </ul>
                <p> Known Issue`s</p>
                <ul>
                    <li> On use of the pink potion a player health can reach below 0 <br>
                        &nbsp;&nbsp;<i>&nbsp;And when the user heals its self, the app grants the player money back<br>
                            &nbsp;&nbsp;But when the user leaves the potion shops the player lose its stats <br>
                            This due to the app sees the player with less the 0 health </i></li>
                    <li>Npc`s that don`t exist in the database wil throw the player a error page <br>
                        <i>&nbsp; See Npc`s list below for which cause the error and they are marked with <br>
                            &nbsp; (Does not exist yet in the database)</i></li>
                    <li> The attack system currently holds a bug that crashes the website <br>
                        <i> Due to conditions in the combat system can occur that the system wil crash<br>
                            This wil happen on the next example -> Monster.Attack is the same as Player.Defense <br>
                            And Player.Attack is the same as Monster.Defence <br>
                            When this is shown in the stats please do not attack the monster <br>
                            The result can be lost stats or a crashed system
                        </i>
                    </li>
                    <li> Magical_attack increase on defence is not displayed <br>
                        <i> Due to this your defence can be bigger than you think <br>
                            This can cause confusion in the combat system </i>
                    </li>
                    <li> New players dont recive a inventory after registering <br>
                        <i> Apprently after registering the players dont recive a inventory <br>
                            This is a issue due to the fact that game will throw back a error <br>
                            Reason for this is that the player has no inventory and the game cant find something <br>
                            On a empty "array" or non existing inventory </i></li>
                    <li> The menu at the top screen is not visable or hides direct after toggle. <br>
                        <i>For some reason there is an issue with the nav menu. <br>
                        Due to a issue with in bootstrap 5 the menu keeps be hidden after collapsing <br>
                        So for now the nav menu wont be visable until further notice </i>
                    </li>
                </ul>
                <br>
                <p> Added the next items </p>
                <ul>
                    <li>Glowing White potion (Currently not obtainable)</li>
                    <li>Glowing Dark potion (Currently not obtainable)</li>
                </ul>
                <br>
                <p> Added the next Monsters </p>
                <ul>
                    <li>None</li>
                </ul>
                <p> Added the next Npc`s (Too the database)</p>
                <ul>
                    <li>Designer Tim (Sub base yard)</li>
                    <li>Programmer Deona (Sub base yard)</li>
                </ul>
                <br>
                <p> The next Npc`s has not yet a Completed dialog tree <br>
                    <i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The one`s not existing in the database wil cause error`s for the
                        player <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So what ever you do do not visit them by clicking the link
                        <br></i></p>
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
                    <li> RT Dorine (ClassRoom1) (Does Not exist in the database)</li>
                    <li>Student Dylan (ClassRoom1) (Does Not exist in the database)</li>
                    <li>Teacher Edwin (ClassRoom2) (Does Not exist in the database)</li>
                    <li>zoco Willy (ClassRoom2) (Does Not exist in the database)</li>
                    <li>student Robin (ClassRoom2) (Does Not exist in the database)</li>
                    <li>Teacher Jurgen (ClassRoom2) (Does Not exist in the database)</li>
                    <li>Art Teacher Christina(School aula) (Does Not exist in the database)</li>
                    <li>school chef Anna (School kitchen)(Does Not exist in the database)</li>
                    <li>trainee coach Marjolein (School kitchen)(Does Not exist in the database)</li>
                    <li>gothic kids (School Staircase)(Does Not exist in the database)</li>
                </ul>
                <br>
                <p>Buffs</p>
                <ul>
                    <li>None</li>
                </ul>
                <p>Nerfs</p>
                <ul>
                    <li>None</li>
                </ul>
                <br>

                <p>Rewrote Judith story To Fit the story with Marieke, Jeroen</p>
                <p>Players can now see their party and their members</p>
                <p>Party System is done</p>
                <p><i> This can be obtained by help of certain npcs ;)</i> <br>
                    Secret system is done with info about my story</p>
                <p> A level reward system is done for the player (Currently only supports monster fights --> Attack
                    Monster)</p>
                <p> Weapon stats are now used in a monster fight</p>
                <p> The Axe is now not anymore obtainable this due to other plans regarding the second floor in the
                    school</p>
                <p> Updated the monster page with the correct values when a user defeats a monster with either taunt or
                    cry option</p>
                <p> Added Background music to the Inky animation studio (W.I.P) Needs some conditions </p>
                <p> Changes has been made to several story to fit my change to transgender. So to note im Elise aka Elis
                    and Justin. </p>

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
@endsection
<!-- ul>li#It*8
> Ul into li
# Add a id
. Add a class
* Amount of times to make -->