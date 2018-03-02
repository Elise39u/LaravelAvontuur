@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><p>PatchNotes current: v1.03</p>
                    <p> Return with &larr; in top left corner</p>
                </div>

                <div class="panel-body">
                    <label>v1.0</label>
                    <p>First Realse of the game</p>

                    <label>v.1.01</label>
                    <p>The shops are added (Item,Weapon,Gold Counter)</p>
                    <p>Fixed a bug with monster item drop</p>

                    <label>v1.02</label>
                    <p>Added a few locations</p>
                    <p>Locations in the train tunnel wil not work until 1.2 or 1.3</p>

                    <label>v.1.03</label>
                    <p>Added patchnotes page</p>
                    <p>Following items has been added: </p>
                    <ul>
                        <li>Booze</li>
                        <li>Wine</li>
                        <li>Milk</li>
                        <li>Meat</li>
                    </ul>
                    <p>The grocery store has been added and the booze shop</p>
                    <p>Going outside the mall on the other side will come in 1.2 or 1.3</p>

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
                    </ul>
                    <p> Known Issue`s</p>
                    <ul>
                        <li> None issue`s </li>
                    </ul> <br>
                    <p> Added the next items </p>
                    <ul>
                       <li>Current Nothing</li>
                    </ul> <br>
                    <p>Npc New Yorker James has now a completed dialog</p>
                    <p>When a quest Activated the user won`t be able to talk to the Npc from the quest </p>
                    <p>A quest can now be Completed and showed as Completed in the quest Journey</p>
                    <br><br>

                    <p>Planned features for 1.1</p>
                    <p> This patch wil see the next things</p>
                    <p>Complete dialoug for Npc 1-3</p>
                    <p>Be able to get a item from a quest</p>
                    <p>Completing a quest and show in the journey</p>
                    <p>Adding more loactions guarding to the carrier and a subbase</p>
                    <p>More Endings comeing alone the patches</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection