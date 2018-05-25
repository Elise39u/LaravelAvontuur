@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><p>PatchNotes current: v1.1</p>
                    <p> Return with &larr; in top left corner</p>
                </div>
                <div class="panel-body">
                    <label>v1.1</label>
                    <p> The next bugs has been solved
                        <a href="https://github.com/justinvandelaar/LaravelAvontuur/issues?q=is%3Aissue+is%3Aclosed">Click here for more info</a></p>
                    <p>Bugs can be reported on the link or Mail to: JNLHelper@outlook.com with the subject: Bug report</p>
                    <ul>
                        <li>Issue #6</li>
                        <li>Issue #7</li>
                        <li>Issue #5</li>
                        <li>Issue #8</li>
                        <li>Issue #9: The user talk to a npc</li>
                        <li> A quest that needs a item to complete doesn't take a item from the players inventory (Fixed it`s self)</li>
                        <li>A quest won`t reward the player with exp if there is a exp reward (Caused due to a typo)</li>
                        <li>A Npc without a quest can`t work around the dialog system</li>
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
                        <li>Carrier Switch (obtainable by completing healing time)</li>
                        <li>Steer Hut Key (obtainable by defeating Vulcan on a attack move)</li>
                        <li>Ship key (Currently not obtainable)</li>
                        <li>A pick axe (Findable in the carrier area)</li>
                        <li>A flare (Findable in the carrier area)</li>
                        <li>A steer wheel (obtainable by using the carrier switch)</li>
                    </ul> <br>
                    <p> Added the next Monsters </p>
                    <ul>
                        <li>Octopus</li>
                        <li>MutatedFish</li>
                        <li>Storm</li>
                        <li>SeaGuard</li>
                        <li>Kraken</li>
                        <li>Hurricane</li>
                        <li>Vulcan (boss)</li>
                    </ul>
                    <p> All of this monster are findable near the carrier </p><br>
                    <p> Added the next Npc`s </p>
                    <ul>
                        <li>Farmer dave (Empty space near the weapon shop)</li>
                        <li>Soldier Kane (Sub base docks)</li>
                        <li>Widow Esmee (Sub base Hallway)</li>
                        <li>IT Teacher Peter (Sub base Outside the yard)</li>
                        <li>Student Arya (Sub base Outside the yard)</li>
                        <li>Domain leader Nina (Sub base Outside the yard)</li>
                        <li>Beauty King Lauren (Sub base yard)</li>
                        <li>Photographer Mike  (Sub base yard)</li>
                        <li>Coach Marieke      (Sub base yard)</li>
                        <li>Coach Jeroen       (Sub base yard)</li>
                        <li>Mother Lieke       (Sub base yard)</li>
                        <li>Student Ariëlle    (Sub base yard)</li>
                        <li>Owner Iris         (Sub base yard)</li>
                        <li>Support Teacher Judith (Sub base yard)</li>
                        <li>Scout Dylan        (Sub base yard)</li>
                        <li>Designer Tim       (Sub base yard)</li>
                        <li>Programmer Deona   (Sub base yard)</li>
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
                        <li>Photographer Mike  (Sub base yard)</li>
                        <li>Coach Marieke      (Sub base yard)</li>
                        <li>Coach Jeroen       (Sub base yard)</li>
                        <li>Mother Lieke       (Sub base yard)</li>
                        <li>Student Ariëlle    (Sub base yard)</li>
                        <li>Owner Iris         (Sub base yard)</li>
                        <li>Support Teacher Judith (Sub base yard)</li>
                        <li>Scout Dylan        (Sub base yard)</li>
                        <li>Designer Tim       (Sub base yard)(Does not exist yet in the database)</li>
                        <li>Programmer Deona   (Sub base yard)(Does not exist yet in the database)</li>
                    </ul><br>
                    <p>Buffs</p>
                    <ul>
                        <li>None</li>
                    </ul>
                    <p>Nerfs</p>
                    <ul>
                        <li>None</li>
                    </ul><br>

                    <p>Npc New Yorker James has now a completed dialog</p>
                    <p>Npc Pregnant new emma has now a completed dialog (A feature later on should expend the tree)</p>
                    <p>Npc Farmer Dave has now a completed dialog </p>
                    <p>When a quest Activated the user won`t be able to talk to the Npc from the quest </p>
                    <p>A quest can now be Completed and showed as Completed in the quest Journey</p>
                    <p>A completed quest can now reward a item</p>
                    <p>Made some changes to the NPC system</p>
                        <ul>
                            <li>Rewrote Coach Marieke And Coach Jeroen to a new story</li>
                            <li>And added a new thing to the NPC system for Marieke,Jeroen,Judith so far</li>
                            <li>This change will Players notice to wich npc are relevant to the story</li>
                        </ul>
                    <br><br>

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