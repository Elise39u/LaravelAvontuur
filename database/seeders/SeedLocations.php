<?php

use Illuminate\Database\Seeder;

class SeedLocations extends Seeder
{
    /**
     * Run the database*
     * @return void
     */
    public function run()
    {
        DB::table('locations')->truncate(); // maak leeg
        DB::table('choices')->truncate(); // maak leeg

        DB::table('locations')->insert(['id' => 1, 'name' => 'Startpagina', 'area_id' => 1, 'title' => 'Deja vu', 'story' => 'You wake up after a great new eve<br>
 With a searfarer headache you hear the following <br>
 <b>Radio:</b> The town is been evacuated to a unkown virus <br>
  Everyone is advised to go the bridge else we wish you luck <br>
  Greetings Channel 6 <br>
  <b>Me:</b> Well what now ', 'foto_url' => '/img/Startscreen.png']);
        DB::table('choices')->insert(['name' => 'Go Outside', 'from_location_id' => 1, 'to_location_id' => 5]);
        DB::table('choices')->insert(['name' => 'The kitchen', 'from_location_id' => 1, 'to_location_id' => 2]);
        DB::table('choices')->insert(['name' => 'A nap some times', 'from_location_id' => 1, 'to_location_id' => 3]);
        DB::table('choices')->insert(['name' => 'Garden work', 'from_location_id' => 1, 'to_location_id' => 4]);

        DB::table('locations')->insert(['id' => 2, 'name' => 'The Kitchen', 'area_id' => 1, 'title' => 'Are you hungry', 'story' => 'You`re standing in you`re kichten<br>
 You take a little look outside  <br>
 You only see newyork from you`re apartment  <br>
  Should you go outside or stay inside is the question', 'foto_url' => '/img/kitchen.png']);
        DB::table('choices')->insert(['name' => 'Check you`re garden', 'from_location_id' => 2, 'to_location_id' => 4]);
        DB::table('choices')->insert(['name' => 'Go take a nap', 'from_location_id' => 2, 'to_location_id' => 3]);
        DB::table('choices')->insert(['name' => 'Ga to the living room', 'from_location_id' => 2, 'to_location_id' => 1]);

        DB::table('locations')->insert(['id' => 3, 'name' => 'The bedroom ', 'area_id' => 1, 'title' => 'Time for a nap', 'story' => 'Here it is the bedroom<br>
    Is it time for nap?  <br>
    Perhaps when you sleep the infected get you?  <br>
    Or is it the risk worth', 'foto_url' => '/img/bedroom.png']);
        DB::table('choices')->insert(['name' => 'Look out the window', 'from_location_id' => 3, 'to_location_id' => 6]);
        DB::table('choices')->insert(['name' => 'Take a nap', 'from_location_id' => 3, 'to_location_id' => 7]);
        DB::table('choices')->insert(['name' => 'Go to the living room', 'from_location_id' => 3, 'to_location_id' => 1]);
        DB::table('choices')->insert(['name' => 'Go to the kitchen', 'from_location_id' => 3, 'to_location_id' => 2]);

        DB::table('locations')->insert(['id' => 4, 'name' => 'The garden ', 'area_id' => 1, 'title' => 'Time to relax', 'story' => 'well the garden look likes a jungle<br>
    Its it healty to be here   <br>
    Or should i leave this place as it is  <br>
    I wont think its healthy here <br>
    But yeah what is healthy this days', 'foto_url' => '/img/garden.png']);
        DB::table('choices')->insert(['name' => 'Go inside', 'from_location_id' => 4, 'to_location_id' => 1]);

        DB::table('locations')->insert(['id' => 5, 'name' => 'Outside the hotel', 'area_id' => 1, 'title' => 'on the road', 'story' => 'well the road goes on and on<br>
    You see left and right a few stores   <br>
    Behind you is the hotel  <br>
    And there is a sand road and a more ways out of here <br>
    But wich road is the correct one <br>
    And are the stores save enough', 'foto_url' => '/img/Outside.png']);
        DB::table('choices')->insert(['name' => 'Go inside the hotel', 'from_location_id' => 5, 'to_location_id' => 1]);
        DB::table('choices')->insert(['name' => 'Go to the wood store', 'from_location_id' => 5, 'to_location_id' => 8]);
        DB::table('choices')->insert(['name' => 'Go to the electro store', 'from_location_id' => 5, 'to_location_id' => 9]);
        DB::table('choices')->insert(['name' => 'take the sandpath', 'from_location_id' => 5, 'to_location_id' => 10]);
        DB::table('choices')->insert(['name' => 'Look at the shore', 'from_location_id' => 5, 'to_location_id' => 11]);
        DB::table('choices')->insert(['name' => 'Go futher down the streets', 'from_location_id' => 5, 'to_location_id' => 12]);

        DB::table('locations')->insert(['id' => 6, 'name' => 'The balcony', 'area_id' => 1, 'title' => 'A nice view', 'story' => 'As you look outside you think<br>
    Its a nice view i paid for   <br>
    But there is no sing of the infected outside  <br>
    And the question is how long can i watch this view', 'foto_url' => '/img/']);
        DB::table('choices')->insert(['name' => 'Go back in the room', 'from_location_id' => 6, 'to_location_id' => 3]);

        DB::table('locations')->insert(['id' => 7, 'name' => 'Nap time', 'area_id' => 1, 'title' => 'Time for a nap', 'story' => 'Zzzzzzzzzz   <br>
    ZZZZzzzzzzzzzzzzzzzzzzz  <br>
    As you wake up you think i feel healthier  <br>
    But is this true?', 'foto_url' => '/img/bed.png']);
        DB::table('choices')->insert(['name' => 'Be awake and escape', 'from_location_id' => 7, 'to_location_id' => 3]);

        DB::table('locations')->insert(['id' => 8, 'name' => 'The wood store', 'area_id' => 1, 'title' => 'Want to go inside', 'story' => 'As you standing for store you`re thinking<br>
    Is it safe to go inside and what lies behind<br>
    Weapons, Materials, Wood, Dead, a paddle?  <br>
    But is it the risk worth?', 'foto_url' => '/img/outsidewood.png']);
        DB::table('choices')->insert(['name' => 'Go back on the street', 'from_location_id' => 8, 'to_location_id' => 5]);
        DB::table('choices')->insert(['name' => 'Go inside if you dare', 'from_location_id' => 8, 'to_location_id' => 13]);

        DB::table('locations')->insert(['id' => 9, 'name' => 'The electro store', 'area_id' => 1, 'title' => 'Want to go inside', 'story' => 'As you standing for store you`re thinking<br>
    Is it safe to go inside and what lies behind<br>
    Weapons, Materials, What else is there?<br>
    At least there is a antenna on the roof <br>
    But the question is it working or not?', 'foto_url' => '/img/outelectro.png']);
        DB::table('choices')->insert(['name' => 'Go back on the street', 'from_location_id' => 9, 'to_location_id' => 5]);
        DB::table('choices')->insert(['name' => 'Go inside if you dare', 'from_location_id' => 9, 'to_location_id' => 14]);

        DB::table('locations')->insert(['id' => 10, 'name' => 'A sandy road', 'area_id' => 1, 'title' => 'Sand al around you', 'story' => 'As you walk the road you see nothing but sand<br>
    Where does the road bring you is the question<br>
    A way out perhaps? or maby more dead?<br>
    No one knows until you go on<br>
    But is it worth to go on or do you want to go back', 'foto_url' => '/img/sandroad.png']);
        DB::table('choices')->insert(['name' => 'Go on the sand road', 'from_location_id' => 10, 'to_location_id' => '15/1']);
        DB::table('choices')->insert(['name' => 'Go back towards the hotel', 'from_location_id' => 10, 'to_location_id' => 5]);

        DB::table('locations')->insert(['id' => 11, 'name' => 'A Look around the city', 'area_id' => 1, 'title' => 'Question look `Deja vu`', 'story' => 'You look forward and see a new part of the city<br>
    And a aircraft carrier laying still<br>
    Only the question is why its laying still<br>
    Is the crew dead? Is it abonded? or perhaps just out of fuel<br>
    But only there is no way to go on the river else you want to swim <br>
    Choice is on you but which is the correct one', 'foto_url' => '/img/edge.png']);
        DB::table('choices')->insert(['id' => 27, 'name' => 'Go on the river', 'from_location_id' => 11, 'to_location_id' => 16]);
        DB::table('choices')->insert(['name' => 'Go swimming', 'from_location_id' => 11, 'to_location_id' => 17]);
        DB::table('choices')->insert(['name' => 'Go back towards the hotel', 'from_location_id' => 11, 'to_location_id' => 5]);

        DB::table('locations')->insert(['id' => 12, 'name' => 'Futher down the street', 'area_id' => 1, 'title' => 'A new part of the city', 'story' => 'As you walk futher down the street you see the next things<br>
    There is a man standing in the middle of the street<br>
    A way left to a dead end it seems<br>
    A bridge to the right and the road goes on<br>
    Which way wil you go', 'foto_url' => '/img/street2.png']);
        DB::table('choices')->insert(['name' => 'Go to the dead end', 'from_location_id' => 12, 'to_location_id' => 18]);
        DB::table('choices')->insert(['name' => 'Go to the brige', 'from_location_id' => 12, 'to_location_id' => 19]);
        DB::table('choices')->insert(['name' => 'Go further down the street', 'from_location_id' => 12, 'to_location_id' => 20]);
        DB::table('choices')->insert(['name' => 'Go talk to man on the street', 'from_location_id' => 12, 'to_location_id' => '21/1']);
        DB::table('choices')->insert(['name' => 'Go back towards the hotel', 'from_location_id' => 12, 'to_location_id' => 5]);

        DB::table('locations')->insert(['id' => 13, 'name' => 'Inside the wood store', 'area_id' => 1, 'title' => 'A wooden age', 'story' => 'Well there you are inside the store<br>
    There are some tools lying around<br>
    But not the paddle you were looking for<br>
    So what is the call pick up some tools or go out<br>
    The question is of course are they handy or not', 'foto_url' => '/img/insidewood.png']);
        DB::table('choices')->insert(['name' => 'Go out the store', 'from_location_id' => 13, 'to_location_id' => 8]);
        DB::table('choices')->insert(['name' => 'pick up the baseball bat ', 'from_location_id' => 13, 'to_location_id' => '22/2']);
        DB::table('choices')->insert(['name' => 'pick up the nail gun', 'from_location_id' => 13, 'to_location_id' => '22/3']);
        DB::table('choices')->insert(['name' => 'pick up a wooden sword', 'from_location_id' => 13, 'to_location_id' => '22/4']);

        DB::table('locations')->insert(['id' => 14, 'name' => 'Inside the electro store', 'area_id' => 1, 'title' => 'A Time of electro', 'story' => 'Well there you are inside the store<br>
    It is quite a big place for this kind of store<br>
    There is nothing around here to pick up<br>
    So there is a door a bit fuhter but i think its locked<br>
    So what wil you do', 'foto_url' => '/img/insideelectro.png']);
        DB::table('choices')->insert(['name' => 'Go out the store', 'from_location_id' => 14, 'to_location_id' => 9]);
        DB::table('choices')->insert(['name' => 'Go to the backroom', 'from_location_id' => 14, 'to_location_id' => 23]);

        DB::table('locations')->insert(['id' => 17, 'name' => 'Game over', 'area_id' => 1, 'title' => 'Good thinking', 'story' => 'Well you thought swimming was a good idea<br>
    did i forgot to say the water is poisoned<br>
    And there live fish here that kill humans <br>
    They got infected too so they probably can walk or swim faster than you so<br>
    Not a wise choice he smartie', 'foto_url' => '/img/dead.png']);
        DB::table('choices')->insert(['name' => 'Try again', 'from_location_id' => 17, 'to_location_id' => 1]);

        DB::table('locations')->insert(['id' => 18, 'name' => 'A dead end?', 'area_id' => 1, 'title' => 'This is a dead end?', 'story' => 'After walking a bit you discover this is not a dead end<br>
    But instead it leads to a huge shopping mall<br>
    Is this perhaps the connection to the other part of the city or not?<br>
    I heard stories that the city has fallen apart but there are still some ways its stays connected<br>
    Its probably better if i take a look inside<br>
    On the other side is it safe there', 'foto_url' => '/img/deadend.png']);
        DB::table('choices')->insert(['name' => 'Go back on the streets', 'from_location_id' => 18, 'to_location_id' => 12]);
        DB::table('choices')->insert(['name' => 'Dare to look inside', 'from_location_id' => 18, 'to_location_id' => 24]);
        DB::table('choices')->insert(['name' => 'Go to the shore', 'from_location_id' => 18, 'to_location_id' => 35]);

        DB::table('locations')->insert(['id' => 19, 'name' => 'The bridge', 'area_id' => 1, 'title' => 'A way out?', 'story' => 'As you approach the bridge you suddenly hear a voice<br>
    <b>Unkown:</b>Are you not infected? <br>
    If so we can only give you a way out of this mess if you bring us new guns<br>
    We`re from the army and are in need of guns to protect the place here<br>
    We wil provide you with a way out only if you have some guns for us<br>
    Well what do you do now?', 'foto_url' => '/img/bridge.png']);
        DB::table('choices')->insert(['name' => 'Go towards the bridge', 'from_location_id' => 19, 'to_location_id' => 25]);
        DB::table('choices')->insert(['name' => 'Go back for the guns', 'from_location_id' => 19, 'to_location_id' => 12]);

        DB::table('locations')->insert(['id' => 20, 'name' => 'The road goes on', 'area_id' => 1, 'title' => 'Deja vu agian', 'story' => 'That is quite a long walk and even more road to go<br>
    There is a women standing on the side walk<br>
    Its looks like there is a shop next to here<br>
    I can see an other store it looks like and a garage<br>
    But where in the heck does to road goes to?<br>
    Well what are we gonna look at first friend?', 'foto_url' => '/img/street3.png']);
        DB::table('choices')->insert(['name' => 'Go talk to pregnant lady', 'from_location_id' => 20, 'to_location_id' => '21/2']);
        DB::table('choices')->insert(['name' => 'Go a step back', 'from_location_id' => 20, 'to_location_id' => 12]);
        DB::table('choices')->insert(['name' => 'Go to the Garage', 'from_location_id' => 20, 'to_location_id' => 26]);
        DB::table('choices')->insert(['name' => 'Go to potion shop', 'from_location_id' => 20, 'to_location_id' => '27/1']);
        DB::table('choices')->insert(['name' => 'Go on the road???', 'from_location_id' => 20, 'to_location_id' => 28]);

        DB::table('locations')->insert(['id' => 26, 'name' => 'Car time', 'area_id' => 1, 'title' => 'Well Repair time', 'story' => 'There are we standing inside the garage<br>
    I see a broken car or is it empty?<br>
    At least a filled jerry can lying around<br>
    But wait was it not that we needed the boat from the docks<br>
    Maby with the car we can it bring to the edge<br>
    But where was that damm boat?', 'foto_url' => '/img/garage.png']);
        DB::table('choices')->insert(['name' => 'Take the jerry can', 'from_location_id' => 26, 'to_location_id' => '22/5']);
        DB::table('choices')->insert(['name' => 'Leave the garage', 'from_location_id' => 26, 'to_location_id' => 20]);
        DB::table('choices')->insert(['id' => 55, 'name' => 'Take the car', 'from_location_id' => 26, 'to_location_id' => '22/7']);

        DB::table('locations')->insert(['id' => 29, 'name' => 'The docks', 'area_id' => 1, 'title' => 'Docks with a boat time', 'story' => 'Well that was though battling that monster<br>
    Unless you came with the car than you are fine i guesses<br>
    Its i not that i complain but hitting something with a car is quite painful<br>
    Or you had to take a other route with the car<br>
    Never mind. At least if you with the car you can take the boat with you<br>
    But are you with the car?', 'foto_url' => '/img/docks.png']);
        DB::table('choices')->insert(['name' => 'Go back on the sandy road', 'from_location_id' => 29, 'to_location_id' => '15/1']);
        DB::table('choices')->insert(['id' => 57, 'name' => 'Take the boat', 'from_location_id' => 29, 'to_location_id' => '22/6']);
        DB::table('choices')->insert(['id' => 58, 'name' => 'Escape the city', 'from_location_id' => 29, 'to_location_id' => 30]);

        DB::table('locations')->insert(['id' => 30, 'name' => 'The end1', 'area_id' => 1, 'title' => 'You have escaped 1', 'story' => 'Well that was a though road<br>
    But you know there are more endings <br>
    this one was the easy one to escape infected new york<br>
    Do you wanna try or not?', 'foto_url' => '/img/end1.png']);
        DB::table('choices')->insert(['name' => 'Game Over', 'from_location_id' => 30, 'to_location_id' => 1]);

        DB::table('locations')->insert(['id' => 16, 'name' => 'The River', 'area_id' => 0, 'title' => 'Explore the city', 'story' => 'Well there you are on the river<br>
    You see the neighbour Staten Island <br>
    And to the right is the abandoned carrier  <br>
    But where are we going?', 'foto_url' => '/img/riverside.png']);
        DB::table('choices')->insert(['name' => 'Go on to Staten Island', 'from_location_id' => 16, 'to_location_id' => 31]);
        DB::table('choices')->insert(['name' => 'Go to the Carrier', 'from_location_id' => 16, 'to_location_id' => 32]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 16, 'to_location_id' => 11]);

        DB::table('locations')->insert(['id' => 31, 'name' => 'A new Time', 'area_id' => 2, 'title' => 'Staten Island', 'story' => 'So a new area new chance<br>
    But There is a wat right and one left<br>
    but the question is what is where <br>
    Do we go left or right?', 'foto_url' => '/img/shore.png']);
        DB::table('choices')->insert(['name' => 'Go left', 'from_location_id' => 31, 'to_location_id' => 33]);
        DB::table('choices')->insert(['name' => 'Go Right', 'from_location_id' => 31, 'to_location_id' => 34]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 31, 'to_location_id' => 16]);

        DB::table('locations')->insert(['id' => 35, 'name' => 'On the shore', 'area_id' => 1, 'title' => 'A nice view', 'story' => 'Well that is weird<br>
        The water here is glowing purple here<br>
        Is it the light of the bridge? or is it so poisoned<br>
        Well its see i cant find a way to that bridge<br>
        Maby if i go through tha mall?', 'foto_url' => '/img/Brooklyn.jpg']);
        DB::table('choices')->insert(['id' => 66, 'name' => 'Go towards the bridge', 'from_location_id' => 35, 'to_location_id' => 36]);
        DB::table('choices')->insert(['name' => 'Go walking futher near the shore', 'from_location_id' => 35, 'to_location_id' => 37]);
        DB::table('choices')->insert(['name' => 'go back', 'from_location_id' => 35, 'to_location_id' => 18]);

        DB::table('locations')->insert(['id' => 33, 'name' => 'More shops', 'area_id' => 2, 'title' => 'New times ahed', 'story' => 'Well that was a pad<br>
        over the dangerous river but never mind<br>
        Never mind we are here and alive but where are the people<br>
        Maby if i go on?', 'foto_url' => '/img/ahead.png']);
        DB::table('choices')->insert(['name' => 'Go on?', 'from_location_id' => 33, 'to_location_id' => 38]);
        DB::table('choices')->insert(['name' => 'Go to the weapon shop', 'from_location_id' => 33, 'to_location_id' => '27/2']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 33, 'to_location_id' => 31]);

        DB::table('locations')->insert(['id' => 37, 'name' => 'A secret way', 'area_id' => 1, 'title' => 'Well a tunnel', 'story' => 'The walk near the shore leads to tunnel<br>
        Is it safe to go in? are there more surivors there?<br>
        And about the dangers lying with in the cave?<br>
        One way to find out <br>
        Or doe we skip this one?', 'foto_url' => '/img/tunnel.png']);
        DB::table('choices')->insert(['name' => 'Go in the cave', 'from_location_id' => 37, 'to_location_id' => 39]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 37, 'to_location_id' => 35]);

        DB::table('locations')->insert(['id' => 39, 'name' => 'A journey ahead', 'area_id' => 0, 'title' => 'A journey?', 'story' => 'Well the entrance was accessible<br>
        but where leads this tunnel too that is the real question?<br>
        But may baby its a way out or not<br>
        And are there monsters in this cave? <br>
        One way to find out or not', 'foto_url' => '/img/underground.png']);
        DB::table('choices')->insert(['name' => 'Go further in the cave', 'from_location_id' => 39, 'to_location_id' => 40]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 39, 'to_location_id' => 37]);

        DB::table('locations')->insert(['id' => 40, 'name' => 'A journey ahead', 'area_id' => 0, 'title' => 'A railway?', 'story' => 'Well not expecting that one<br>
        There is a subway station here but no people<br>
        If i go up wil i find people there or are they all gone<br>
        i can try to go on and maby find a way out<br>
        But is that a wise choice', 'foto_url' => '/img/stationtunnel.png']);
        DB::table('choices')->insert(['name' => 'Go on the tracks', 'from_location_id' => 40, 'to_location_id' => 41]);
        DB::table('choices')->insert(['name' => 'Go up', 'from_location_id' => 40, 'to_location_id' => 42]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 40, 'to_location_id' => 39]);

        DB::table('locations')->insert(['id' => 41, 'name' => 'More rails', 'area_id' => 0, 'title' => 'No end ahead', 'story' => 'Well this is not fun<br>
        A abandoned train on the rails?<br>
        No way that people never use the tracks anymore its blocked<br>
        Perhaps we can use the train to ride this tracks<br>
        The question is does it still works?', 'foto_url' => '/img/traintracks.png']);
        DB::table('choices')->insert(['name' => 'Go on if you want?', 'from_location_id' => 41, 'to_location_id' => 43]);
        DB::table('choices')->insert(['id' => 80, 'name' => 'Go inside the train', 'from_location_id' => 41, 'to_location_id' => 44]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 41, 'to_location_id' => 40]);

        DB::table('locations')->insert(['id' => 43, 'name' => 'rails', 'area_id' => 0, 'title' => 'Rails, rails, rails', 'story' => 'Well i can see a end<br>
        But the question remains is that a end?<br>
        perhaps its a anther train station and than can we walk more and more<br>
        But if its the end were wil we end?<br>
        Are we still in new york or outside it?', 'foto_url' => '/img/laststop.png']);
        DB::table('choices')->insert(['name' => 'Go on to the light', 'from_location_id' => 43, 'to_location_id' => 45]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 43, 'to_location_id' => 41]);

        DB::table('locations')->insert(['id' => 24, 'name' => 'Mall times', 'area_id' => 0, 'title' => 'A mall?', 'story' => 'Well this is quite a large mall <br>
        I see that some shops are still open or are the doors never closed <br>
        Well there is one thing that is sure i need to check it out <br>
        But what remains is it safe to go inside <br>
        Well do we go or not', 'foto_url' => '/img/mall.png']);
        DB::table('choices')->insert(['name' => 'Go to the warehouse', 'from_location_id' => 24, 'to_location_id' => '46/1']);
        DB::table('choices')->insert(['name' => 'Go to the item shop', 'from_location_id' => 24, 'to_location_id' => '27/3']);
        DB::table('choices')->insert(['name' => 'Go to the grocery store', 'from_location_id' => 24, 'to_location_id' => 47]);
        DB::table('choices')->insert(['name' => 'Go to the Liquor shop', 'from_location_id' => 24, 'to_location_id' => 48]);
        DB::table('choices')->insert(['name' => 'Check outside the mall', 'from_location_id' => 24, 'to_location_id' => 61]);
        DB::table('choices')->insert(['name' => 'Go outside', 'from_location_id' => 24, 'to_location_id' => 18]);

        DB::table('locations')->insert(['id' => 34, 'name' => 'Time for the cops', 'area_id' => 2, 'title' => 'Cop time', 'story' => 'Well that is terrifying a abandoned police station <br>
        Well the road goes on but to where is the question? <br>
        And the same goes for if the road safe is? <br>
        Yeah one way to know if the road is safe but is the station open<br>
        And you know what could lie in', 'foto_url' => '/img/Police.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 34, 'to_location_id' => 31]);
        DB::table('choices')->insert(['name' => 'Go explore the road ahead', 'from_location_id' => 34, 'to_location_id' => '15/2']);
        DB::table('choices')->insert(['name' => 'Go to the station', 'from_location_id' => 34, 'to_location_id' => 49]);

        DB::table('locations')->insert(['id' => 51, 'name' => 'Money time', 'area_id' => 2, 'title' => 'Near the bank', 'story' => '<b> Knock Knock</b> HELLO IS THERE SOMEONE! <br>
        and again <b> Knock Knock </b>..... Well no one is inside<br>
        What now... Waiting? Try to look for the key?<br>
        Wel if there is a key somewhere in this city<br>
        So do we look for the key or keep knocking?', 'foto_url' => '/img/bankdoor.png']);
        DB::table('choices')->insert(['id' => 94, 'name' => 'Enter the bank', 'from_location_id' => 51, 'to_location_id' => 52]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 51, 'to_location_id' => 50]);

        DB::table('locations')->insert(['id' => 50, 'name' => 'Money time', 'area_id' => 2, 'title' => 'Spare time he', 'story' => 'Well a bank... I forgot if i had any spare money left <br>
        Its seems the bank is locked from here<br>
        But one is there someone? or its abandoned like the rest of the city<br>
        Is it worth to go or do we go back<br>
        Think twice about the gold lying in the bank', 'foto_url' => '/img/bank.png']);
        DB::table('choices')->insert(['name' => 'Go towards the bank', 'from_location_id' => 50, 'to_location_id' => 51]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 50, 'to_location_id' => '15/2']);

        DB::table('locations')->insert(['id' => 53, 'name' => 'What a wind', 'area_id' => 1, 'title' => 'The city', 'story' => 'Well there is at least a view over the whole city<br>
        And quite a wind here. a little too strong<br>
        I see a antenna and is that a key?<br>
        Maby the key for the graveyard or police station, bank?<br>
        Well one way to find out', 'foto_url' => '/img/eroof.png']);
        DB::table('choices')->insert(['name' => 'Go back inside', 'from_location_id' => 53, 'to_location_id' => 23]);
        DB::table('choices')->insert(['id' => 100, 'name' => 'Repair the antenna', 'from_location_id' => 53, 'to_location_id' => 54]);
        DB::table('choices')->insert(['name' => 'A key?', 'from_location_id' => 53, 'to_location_id' => '22/35']);

        DB::table('locations')->insert(['id' => 49, 'name' => 'Do you member', 'area_id' => 2, 'title' => 'The law', 'story' => 'Well there is no one inside it seems<br>
        <b> KNOCK ... .KNOCK </b> <big> HELLO IS THERE SOMEONE </big><br>
        Well how do i get inside then?<br>
        I think its better to stay outside<br>
        Because you never know whats is inside', 'foto_url' => '/img/pdoor.png']);
        DB::table('choices')->insert(['name' => 'Go back on the streets', 'from_location_id' => 49, 'to_location_id' => 34]);
        DB::table('choices')->insert(['id' => 103, 'name' => 'Go inside the station', 'from_location_id' => 49, 'to_location_id' => 55]);

        DB::table('locations')->insert(['id' => 55, 'name' => 'Well...', 'area_id' => 2, 'title' => 'Abandoned', 'story' => 'That is quite sad so empty station <br>
        i see a door but its seemed locked with a card<br>
        Well you know what you cloud find in so weapon room<br>
        Ow perhaps the danger that could lie in the room<br>
        Because you never know whats is inside, but a staircase?', 'foto_url' => '/img/PoliceStation.png']);
        DB::table('choices')->insert(['name' => 'Go outside', 'from_location_id' => 55, 'to_location_id' => 49]);
        DB::table('choices')->insert(['id' => 105, 'name' => 'Go inside the weapon cache', 'from_location_id' => 55, 'to_location_id' => 56]);
        DB::table('choices')->insert(['name' => 'Go to the roof of the station', 'from_location_id' => 55, 'to_location_id' => 57]);

        DB::table('locations')->insert(['id' => 57, 'name' => 'A view', 'area_id' => 2, 'title' => 'Well... this a view', 'story' => 'So there are you standing<br>
        there is quite a breeze here but what is that<br>
        A key?.... ow perhaps it is nothing<br>
        So the is how life is going to be he searching for a way out<br>
        But only how is the way remains as a question', 'foto_url' => '/img/proof.png']);
        DB::table('choices')->insert(['name' => 'Go back downstairs', 'from_location_id' => 57, 'to_location_id' => 55]);
        DB::table('choices')->insert(['name' => 'Pick up the key', 'from_location_id' => 57, 'to_location_id' => '22/36']);

        DB::table('locations')->insert(['id' => 52, 'name' => 'The bank', 'area_id' => 2, 'title' => '$.$ Money', 'story' => 'So a empty bank....<br>
        I had a bank account here i wonder if its still accessible.<br>
        There is a atm next to the counter and its seems to work<br>
        Maby i can check the vault and see if there is gold inside<br>
        But why do i need to have gold?', 'foto_url' => '/img/insidebank.png']);
        DB::table('choices')->insert(['name' => 'Go back outside', 'from_location_id' => 52, 'to_location_id' => 51]);
        DB::table('choices')->insert(['name' => 'Go to the vault', 'from_location_id' => 52, 'to_location_id' => 58]);
        DB::table('choices')->insert(['name' => 'Go to the atm', 'from_location_id' => 52, 'to_location_id' => '27/4']);

        DB::table('locations')->insert(['id' => 58, 'name' => 'The bank', 'area_id' => 2, 'title' => 'A empty vault', 'story' => 'Well this is quite sad<br>
        No gold or money lying around here. That is sad<br>
        But is that a key lying there or..... Well i don`t wanna know <br>
        So........ Nothing to do here he perhaps take that key with you<br>
        Or do you gonna stand here all day', 'foto_url' => '/img/vault.png']);
        DB::table('choices')->insert(['name' => 'Go back ', 'from_location_id' => 58, 'to_location_id' => 52]);
        DB::table('choices')->insert(['id' => 113, 'name' => 'Mine the bank wall', 'from_location_id' => 58, 'to_location_id' => 59]);
        DB::table('choices')->insert(['name' => 'A Key?', 'from_location_id' => 58, 'to_location_id' => '22/37']);

        DB::table('locations')->insert(['id' => 28, 'name' => 'dead time', 'area_id' => 1, 'title' => 'A lost soul', 'story' => 'So the door to the undead<br>
        Is it safe to enter because you never know in this town<br>
        Maby the virus infected te undead here so....<br>
        Well what could lie in there that is the risk worth?<br>
        Only one way to find out i think', 'foto_url' => '/img/gydoor.png']);
        DB::table('choices')->insert(['name' => 'Go back ', 'from_location_id' => 28, 'to_location_id' => 20]);
        DB::table('choices')->insert(['id' => 116, 'name' => 'Enter the graveyard', 'from_location_id' => 28, 'to_location_id' => 60]);

        DB::table('locations')->insert(['id' => 60, 'name' => 'dead time', 'area_id' => 1, 'title' => 'Creepy times', 'story' => 'So the place where people are put to rest<br>
        Quite sad that the graveyard is real big <br>
        Perhaps a lot of people are buried here because of the outbreak<br>
        One thing is sure no one is around here at least.<br>
        But what is here to do', 'foto_url' => '/img/graveyard.png']);
        DB::table('choices')->insert(['name' => 'Go back ', 'from_location_id' => 60, 'to_location_id' => 28]);
        DB::table('choices')->insert(['name' => 'Pick up the antenna', 'from_location_id' => 60, 'to_location_id' => '22/38']);

        DB::table('locations')->insert(['id' => 23, 'name' => 'Lurking', 'area_id' => 1, 'title' => 'Lurking time', 'story' => 'Okay its look empty around here<br>
        Eheeee i only can see a staircase back there<br>
        What now is it safe to go up or ..........<br>
        Maby there is something useful on the roof of this store<br>
        But going up there is a risk', 'foto_url' => '/img/elebackroom.png']);
        DB::table('choices')->insert(['name' => 'Go to the roof of the store', 'from_location_id' => 23, 'to_location_id' => 53]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 23, 'to_location_id' => 14]);
        DB::table('choices')->insert(['name' => 'A card?', 'from_location_id' => 23, 'to_location_id' => '22/34']);

        DB::table('locations')->insert(['id' => 38, 'name' => 'Empty space', 'area_id' => 2, 'title' => 'Well a empty road ahead', 'story' => 'So what a surprise totally nothing<br>
        On the items lying around here there is totally nothing <br>
        Is that a person in the distance?<br>
        <big>HELLO HELLO THERE </big> no response<br>
        Perhaps you want to take a look', 'foto_url' => '/img/road.png']);
        DB::table('choices')->insert(['name' => 'Go back ', 'from_location_id' => 38, 'to_location_id' => 33]);
        DB::table('choices')->insert(['name' => 'Pick up the signal device', 'from_location_id' => 38, 'to_location_id' => '22/39']);
        DB::table('choices')->insert(['name' => 'Pick up the receiver ', 'from_location_id' => 38, 'to_location_id' => '22/40']);
        DB::table('choices')->insert(['name' => 'Go talk to farmer dave', 'from_location_id' => 38, 'to_location_id' => '21/3']);

        DB::table('locations')->insert(['id' => 47, 'name' => 'Shopping time', 'area_id' => 0, 'title' => 'time to shop :)', 'story' => 'Well as expected no one inside<br>
        But there is nothing to see<br>
        Maby time to look deeper in the store', 'foto_url' => '/img/gstore.png']);
        DB::table('choices')->insert(['name' => 'Go look for something to drink', 'from_location_id' => 47, 'to_location_id' => 62]);
        DB::table('choices')->insert(['name' => 'Go look for something to eat', 'from_location_id' => 47, 'to_location_id' => 63]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 47, 'to_location_id' => 24]);

        DB::table('locations')->insert(['id' => 62, 'name' => 'Shopping time', 'area_id' => 0, 'title' => 'Thirsthhy', 'story' => 'Well Mother Lieke told me she want something to drink<br>
        But i don`t think this is still fresh<br>
        ahh at least we could ask', 'foto_url' => '/img/SuperMarkDrink.png']);
        DB::table('choices')->insert(['name' => 'Grab the milk', 'from_location_id' => 62, 'to_location_id' => '22/55']);
        DB::table('choices')->insert(['name' => 'Go look for something to eat', 'from_location_id' => 62, 'to_location_id' => 63]);
        DB::table('choices')->insert(['name' => 'Go back in the store', 'from_location_id' => 62, 'to_location_id' => 47]);

        DB::table('locations')->insert(['id' => 63, 'name' => 'Shopping time', 'area_id' => 0, 'title' => 'Meat time', 'story' => 'Well well well..... this is quite sad<br>
        There is only meat left and is that still good?<br>
        well too bad for the vegans', 'foto_url' => '/img/SuperMarkFood.png']);
        DB::table('choices')->insert(['name' => 'Grab the meat', 'from_location_id' => 63, 'to_location_id' => '22/56']);
        DB::table('choices')->insert(['name' => 'Go look for something to drink', 'from_location_id' => 63, 'to_location_id' => 62]);
        DB::table('choices')->insert(['name' => 'Go back in the store', 'from_location_id' => 63, 'to_location_id' => 47]);

        DB::table('locations')->insert(['id' => 48, 'name' => 'Shopping time', 'area_id' => 0, 'title' => 'Liquor time', 'story' => 'Well well well..... awkward no one here<br>
        Is see that there is plenty of booze and wine<br>
        So which do we take for lauren en paul', 'foto_url' => '/img/LiquorStore.png']);
        DB::table('choices')->insert(['name' => 'Pick up the booze', 'from_location_id' => 48, 'to_location_id' => '22/57']);
        DB::table('choices')->insert(['name' => 'Pick up the wine', 'from_location_id' => 48, 'to_location_id' => '22/58']);
        DB::table('choices')->insert(['name' => 'Go back in the mall', 'from_location_id' => 48, 'to_location_id' => 24]);

        DB::table('locations')->insert(['id' => 32, 'name' => 'A brief histroy', 'area_id' => 0, 'title' => 'History time', 'story' => 'So that is a piece of money lying there<br>
        And think of what is been through. The war, driving across sea<br>
        Look how it laying there so broken <br>
        Perhaps its still works?', 'foto_url' => '/img/nearship.png']);
        DB::table('choices')->insert(['name' => 'sail to the carrier', 'from_location_id' => 32, 'to_location_id' => '15/3']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 32, 'to_location_id' => 16]);

        DB::table('locations')->insert(['id' => 64, 'name' => 'A brief histroy', 'area_id' => 3, 'title' => 'Well the ship', 'story' => 'So here we are on the ship<br>
        Quite a few big guns it has, i wonder if they still work<br>
        And where they aim at all. The city perhaps<br>
        No that is stupid and why do you want to blow up the city up', 'foto_url' => '/img/ondeck.png']);
        DB::table('choices')->insert(['name' => 'Rope down to your boat', 'from_location_id' => 64, 'to_location_id' => '15/3']);
        DB::table('choices')->insert(['name' => 'Go on', 'from_location_id' => 64, 'to_location_id' => 65]);

        DB::table('locations')->insert(['id' => 65, 'name' => 'Inside the ship', 'area_id' => 3, 'title' => 'A labyrinth', 'story' => 'So this is the maintenance room?<br>
        An i think its more a labyrinth to walk around here<br>
        Put perhaps there is something to find here<br>
        Or where is that stupid staring wheel so i can find the sub base', 'foto_url' => '/img/maintenance.png']);
        DB::table('choices')->insert(['name' => 'Go back outside', 'from_location_id' => 65, 'to_location_id' => 64]);
        DB::table('choices')->insert(['name' => 'Cafeteria', 'from_location_id' => 65, 'to_location_id' => 66]);
        DB::table('choices')->insert(['name' => 'The Steer cabin', 'from_location_id' => 65, 'to_location_id' => 67]);
        DB::table('choices')->insert(['id' => 145, 'name' => 'Put the switch in', 'from_location_id' => 65, 'to_location_id' => 68]);

        DB::table('locations')->insert(['id' => 66, 'name' => 'Hungry?', 'area_id' => 3, 'title' => 'Hungry or thirsty?', 'story' => 'So here was where they eat and drink<br>
        Its look pretty bad now but i could imagine it look better<br>
        Well i guesses  there is nothing here<br>
        But i am curious to see what is behind that locked door', 'foto_url' => '/img/cafeteria.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 66, 'to_location_id' => 65]);
        DB::table('choices')->insert(['id' => 147, 'name' => 'Explore the rest of the ship', 'from_location_id' => 66, 'to_location_id' => 69]);

        DB::table('locations')->insert(['id' => 67, 'name' => 'A forbidden area', 'area_id' => 3, 'title' => 'Access needed', 'story' => 'Well there we are standing in front of the steer cabin<br>
        Who known what is in there <br>
        Perhaps there is a fortune there or dead<br>
        But if i want to go to the sub bade i have to go inside', 'foto_url' => '/img/ShipDoor.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 67, 'to_location_id' => 65]);
        DB::table('choices')->insert(['id' => 149, 'name' => 'Go inside the cabin', 'from_location_id' => 67, 'to_location_id' => 70]);

        DB::table('locations')->insert(['id' => 70, 'name' => 'Vrmmmmm', 'area_id' => 3, 'title' => 'A way to go', 'story' => 'So there we are<br>
        I see a potion, pickaxe, and a flare? <br>
        So can this ship sail? or is it broken<br>
        I still have the switch but is that enough?', 'foto_url' => '/img/shipbridge.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 70, 'to_location_id' => 67]);
        DB::table('choices')->insert(['name' => 'Grab the flare', 'from_location_id' => 70, 'to_location_id' => '22/62']);
        DB::table('choices')->insert(['name' => 'Grab the rainbow jar', 'from_location_id' => 70, 'to_location_id' => '22/24']);
        DB::table('choices')->insert(['name' => 'Grab the pick axe', 'from_location_id' => 70, 'to_location_id' => '22/63']);
        DB::table('choices')->insert(['id' => 154, 'name' => 'Go to the sub base', 'from_location_id' => 70, 'to_location_id' => 71]);

        DB::table('locations')->insert(['id' => 68, 'name' => 'Machines', 'area_id' => 3, 'title' => 'Time please', 'story' => 'So........<br>
        This the carrier can ride now?<br>
        lets find the sub base then<br>
        At least if the carrier can ride', 'foto_url' => '/img/Machine.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 68, 'to_location_id' => 65]);
        DB::table('choices')->insert(['name' => 'Use the switch', 'from_location_id' => 68, 'to_location_id' => '22/64']);

        DB::table('locations')->insert(['id' => 71, 'name' => 'Survivors', 'area_id' => 4, 'title' => 'I`m not alone?', 'story' => 'Wel James was right there is a subbase<br>
        And i see people walking around here and even soldiers?<br>
        Did the virus get here or is it just to protect the survivors<br>
        Well one is pointing where i can park <br>
        <b>Soldier:</b> How do you get that carrier. Anyways <br>
        If you`re not infected than you can sail to the docks. <br>
        <b>Me:</b> Okay i sail to the docks <br>
        Or do we sail away?', 'foto_url' => '/img/subbase.png']);
        DB::table('choices')->insert(['name' => 'Sail back to the city', 'from_location_id' => 71, 'to_location_id' => 64]);
        DB::table('choices')->insert(['name' => 'Sail to the docks', 'from_location_id' => 71, 'to_location_id' => 72]);

        DB::table('locations')->insert(['id' => 72, 'name' => 'A new time', 'area_id' => 4, 'title' => 'A new time has come', 'story' => 'As you leave the carrier a soldier walks up and ask the following<br>
        <b>Soldier:</b> Go stand over there we need to do a few checks <br>
        <b>Me:</b> For what? <br>
        <b>Soldier:</b> To see if you are not infected <br>
        <b>Me:</b> i guess that was not necessary but okay <br>
        <b>Soldier:</b>Your not infected so you can go on<br>
        Perhaps you help people around here beacuse your the only one who is able to get back to the city<br>
        And lots of people can use you`re help? <br>
        <b>Me:</b> I take a look around', 'foto_url' => '/img/SubDocks.png']);
        DB::table('choices')->insert(['name' => 'Go back on the carrier', 'from_location_id' => 72, 'to_location_id' => 71]);
        DB::table('choices')->insert(['name' => 'Go on in the sub base', 'from_location_id' => 72, 'to_location_id' => 73]);
        DB::table('choices')->insert(['name' => 'Talk to soldier kane', 'from_location_id' => 72, 'to_location_id' => '21/4']);
        // Different emma version
        DB::table('choices')->insert(['id' => 162, 'name' => 'Talk to the pregnant emma', 'from_location_id' => 72, 'to_location_id' => '21/2']);

        DB::table('locations')->insert(['id' => 73, 'name' => 'The dark side', 'area_id' => 4, 'title' => 'Tales ahead', 'story' => 'Wondering while walking through the sub base<br>
        Its seems quite big here and there were people around here, right? <br>
        Or are they further down the base<br>
        You listen carefully and hear voices. <br>
        So they are indeed further in the base', 'foto_url' => '/img/exploreSub.png']);
        DB::table('choices')->insert(['name' => 'Go back to the docks', 'from_location_id' => 73, 'to_location_id' => 72]);
        DB::table('choices')->insert(['name' => 'Travel deeper inside the sub base', 'from_location_id' => 73, 'to_location_id' => 74]);

        DB::table('locations')->insert(['id' => 74, 'name' => 'Well...', 'area_id' => 4, 'title' => 'Still no yard', 'story' => 'So..... How big is this sub base<br>
        But there is a woman standing there<br>
        She looks sad and lonely but should i ask if she is okay.<br>
        But the noises are louder so. <br>
        I don`t know what to do', 'foto_url' => '/img/Subhall.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 74, 'to_location_id' => 73]);
        DB::table('choices')->insert(['name' => 'Travel deeper inside the sub base', 'from_location_id' => 74, 'to_location_id' => 75]);
        DB::table('choices')->insert(['name' => 'Talk to the widow Esmee', 'from_location_id' => 74, 'to_location_id' => '21/5']);

        DB::table('locations')->insert(['id' => 75, 'name' => 'So', 'area_id' => 4, 'title' => 'Almost there', 'story' => 'Well at least we have found the yard<br>
        But how many people are in there acutely<br>
        Because there are 3 people already standing out here<br>
        I hope they dint hear me at least<br>
        So say hai or go on', 'foto_url' => '/img/NearSubYard.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 75, 'to_location_id' => 74]);
        DB::table('choices')->insert(['name' => 'Go to the yard', 'from_location_id' => 75, 'to_location_id' => 76]);
        DB::table('choices')->insert(['name' => 'Talk to IT Teacher Peter', 'from_location_id' => 75, 'to_location_id' => '21/6']);
        DB::table('choices')->insert(['name' => 'Talk to Student Arya', 'from_location_id' => 75, 'to_location_id' => '21/7']);
        DB::table('choices')->insert(['name' => 'Talk to Domain leader Nina', 'from_location_id' => 75, 'to_location_id' => '21/8']);

        DB::table('locations')->insert(['id' => 76, 'name' => 'Final Time', 'area_id' => 4, 'title' => 'Time to get social', 'story' => 'So here it is the yard<br>
        There are too many people here<br>
        I guess its time to be a bit more social than before<br>
        Or do we go through that door at the end<br>
        And how big is this base look how big this yard is', 'foto_url' => '/img/SubYard.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 76, 'to_location_id' => 75]);
        DB::table('choices')->insert(['name' => 'Go through the yard', 'from_location_id' => 76, 'to_location_id' => 77]);
        DB::table('choices')->insert(['name' => 'Talk to Beauty king Lauren', 'from_location_id' => 76, 'to_location_id' => '21/9']);
        DB::table('choices')->insert(['name' => 'Talk to Photographer Mike', 'from_location_id' => 76, 'to_location_id' => '21/10']);
        DB::table('choices')->insert(['name' => 'Talk to Coach Marieke', 'from_location_id' => 76, 'to_location_id' => '21/11']);
        DB::table('choices')->insert(['name' => 'Talk to Coach Jeroen', 'from_location_id' => 76, 'to_location_id' => '21/12']);
        DB::table('choices')->insert(['name' => 'Talk to Mother Lieke', 'from_location_id' => 76, 'to_location_id' => '21/13']);
        DB::table('choices')->insert(['name' => 'Talk to Student Ariëlle', 'from_location_id' => 76, 'to_location_id' => '21/14']);
        DB::table('choices')->insert(['name' => 'Talk to Owner Iris', 'from_location_id' => 76, 'to_location_id' => '21/15']);
        DB::table('choices')->insert(['name' => 'Talk to Support teacher Judith ', 'from_location_id' => 76, 'to_location_id' => '21/16']);
        DB::table('choices')->insert(['name' => 'Talk to Scout dylan', 'from_location_id' => 76, 'to_location_id' => '21/17']);
        DB::table('choices')->insert(['name' => 'Talk to Designer Tim', 'from_location_id' => 76, 'to_location_id' => '21/18']);
        DB::table('choices')->insert(['name' => 'Talk to Programmer Deona', 'from_location_id' => 76, 'to_location_id' => '21/19']);

        DB::table('locations')->insert(['id' => 61, 'name' => 'A tale a head?', 'area_id' => 1, 'title' => 'A new time ahead', 'story' => 'As you leave the mall you look around<br>
        The road is going in a L shape to the right<br>
        I can see what seems to be a school and a hotel?<br>
        Well its time to check them out<br>
        It could be that there are people in those places', 'foto_url' => '/img/Tales.png']);
        DB::table('choices')->insert(['name' => 'Go back in the Mall', 'from_location_id' => 61, 'to_location_id' => 24]);
        DB::table('choices')->insert(['name' => 'Go towards the school', 'from_location_id' => 61, 'to_location_id' => 79]);
        DB::table('choices')->insert(['name' => 'Go towards the hotel', 'from_location_id' => 61, 'to_location_id' => 80]);

        DB::table('locations')->insert(['id' => 79, 'name' => 'Study time', 'area_id' => 1, 'title' => 'A new Lesson to learn', 'story' => 'You are approaching the school<br>
        You look inside the class rooms and see some people standing around<br>
        The question still remains if its safe to go inside the school<br>
        No one except they know how its inside that building<br>
        And if its even safe to go inside', 'foto_url' => '/img/School.png']);
        DB::table('choices')->insert(['name' => 'Go back towards the mall', 'from_location_id' => 79, 'to_location_id' => 61]);
        DB::table('choices')->insert(['name' => 'Go inside the school', 'from_location_id' => 79, 'to_location_id' => 81]);
        DB::table('choices')->insert(['name' => 'Go to the animation studio ', 'from_location_id' => 79, 'to_location_id' => 90]);

        DB::table('locations')->insert(['id' => 81, 'name' => 'Time for a lesson', 'area_id' => 5, 'title' => 'A new Lesson to learn', 'story' => 'Now well this school started too fall apart<br>
        I see some class rooms and a stair way <br>
        I think its time to check the class rooms<br>
        And perhaps ask if someone wants coffee :)<br>
        Now time to get social', 'foto_url' => '/img/schoolhall.png']);
        DB::table('choices')->insert(['name' => 'Go back outside', 'from_location_id' => 81, 'to_location_id' => 79]);
        DB::table('choices')->insert(['name' => 'Go to classroom 1', 'from_location_id' => 81, 'to_location_id' => 82]);
        DB::table('choices')->insert(['name' => 'Go to classroom 2', 'from_location_id' => 81, 'to_location_id' => 83]);
        DB::table('choices')->insert(['name' => 'Go to classroom 3', 'from_location_id' => 81, 'to_location_id' => 84]);
        DB::table('choices')->insert(['name' => 'Go to the stairway', 'from_location_id' => 81, 'to_location_id' => 85]);
        DB::table('choices')->insert(['name' => 'Go to aula', 'from_location_id' => 81, 'to_location_id' => 86]);

        DB::table('locations')->insert(['id' => 82, 'name' => 'Eco Time', 'area_id' => 5, 'title' => 'Well what do we learn', 'story' => 'Well there are some people around here<br>
        It could be they need help<br>
        <b>Corine:</b> Hey you can you help us?<br>
        that is depending on your situation <br>
        <b>Corine:</b> Well at least give it a try', 'foto_url' => '/img/classroom1.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 82, 'to_location_id' => 81]);
        DB::table('choices')->insert(['name' => 'Go talk to Coach Corine', 'from_location_id' => 82, 'to_location_id' => '21/20']);
        DB::table('choices')->insert(['name' => 'Go talk to Coach Esther', 'from_location_id' => 82, 'to_location_id' => '21/21']);
        DB::table('choices')->insert(['name' => 'Go talk to RT teacher Dorine', 'from_location_id' => 82, 'to_location_id' => '21/22']);
        DB::table('choices')->insert(['name' => 'Go talk to Student Dylan', 'from_location_id' => 82, 'to_location_id' => '21/23']);

        DB::table('locations')->insert(['id' => 83, 'name' => 'Math Time', 'area_id' => 5, 'title' => 'a learning lesson?', 'story' => 'This class rooms seem more empty<br>
        And again there are people here<br>
        Maby this school is a shelter against the virus <br>
        Well perhaps they need help? <br>
        Time to make a talk', 'foto_url' => '/img/classroom2.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 83, 'to_location_id' => 81]);
        DB::table('choices')->insert(['name' => 'Go talk to Teacher Edwin', 'from_location_id' => 83, 'to_location_id' => '21/24']);
        DB::table('choices')->insert(['name' => 'Go talk to zoco Willy', 'from_location_id' => 83, 'to_location_id' => '21/25']);
        DB::table('choices')->insert(['name' => 'Go talk to student Robin', 'from_location_id' => 83, 'to_location_id' => '21/26']);
        DB::table('choices')->insert(['name' => 'Go talk to Teacher Jurgen', 'from_location_id' => 83, 'to_location_id' => '21/27']);

        DB::table('locations')->insert(['id' => 84, 'name' => 'Nothing', 'area_id' => 5, 'title' => 'Empty that is a surprise', 'story' => 'This class rooms is empty<br>
        Or is it empty. Perhaps a classroom at all<br>
        one thing is sure no people around here so<br>
        I guesses nothing to do here<br>
        Time to go back', 'foto_url' => '/img/classroom3.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 84, 'to_location_id' => 81]);

        DB::table('locations')->insert(['id' => 86, 'name' => 'Nothing', 'area_id' => 5, 'title' => 'Well this is quite big', 'story' => 'Damm this aula is quite big<br>
        There is only one person so far i can see but this is too big<br>
        Well is see a backdoor <br>
        Perhaps its a time to look behind it<br>
        Or should we ask that woman what she want', 'foto_url' => '/img/schoolaula.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 86, 'to_location_id' => 81]);
        DB::table('choices')->insert(['name' => 'Go to the school kitchen', 'from_location_id' => 86, 'to_location_id' => 87]);
        DB::table('choices')->insert(['name' => 'Go talk to Art Teacher Christina', 'from_location_id' => 86, 'to_location_id' => '21/28']);

        DB::table('locations')->insert(['id' => 87, 'name' => 'Time to eat eat eat', 'area_id' => 5, 'title' => 'Eating time', 'story' => 'You enter the kitchen and think quite big <br>
        You look around and see 2 women that are talking with each other <br>
        you think is this kitchen well safe too cook food or make it <br>
        We could ask if it is <br>
        What if it isn`t what then and perhaps they are already zombies.', 'foto_url' => '/img/SchoolKitchen.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 87, 'to_location_id' => 86]);
        DB::table('choices')->insert(['name' => 'Go talk to school chef Anna', 'from_location_id' => 87, 'to_location_id' => '21/29']);
        DB::table('choices')->insert(['name' => 'Go talk to trainee coach Marjolein', 'from_location_id' => 87, 'to_location_id' => '21/30']);

        DB::table('locations')->insert(['id' => 85, 'name' => 'A deep dark end', 'area_id' => 1, 'title' => 'A deep dark end', 'story' => 'Well as you look down this staircase <br>
        You wonder why are the no railing\'s here? <br>
        And great its blocked off here with wooden plankes <br>
        <b>Gothic kids:</b> You can`t enter the the second floor <br>
        <b>You:</b> And why not <br>
        <b>Gothic kids:</b> Its not safe there <br>
        Rumors go any one that enter will become one of them <br>
        <b>You:</b> one of them? <br>
        <b>Gothic Kids:</b> If you want to enter but you need an axe <br>
        And that can be found in the animation studio next here but be aware of the ink', 'foto_url' => '/img/staircaseschool.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 85, 'to_location_id' => 81]);
        DB::table('choices')->insert(['name' => 'Go talk to gothic kids', 'from_location_id' => 85, 'to_location_id' => '21/31']);
        DB::table('choices')->insert(['name' => 'Go on the second floor', 'from_location_id' => 85, 'to_location_id' => 88]);

        DB::table('locations')->insert(['id' => 80, 'name' => 'Time for a vacation', 'area_id' => 5, 'title' => 'Break time perhaps?', 'story' => 'Well as you approach the hotel you look around <br>
         Nothing but a wide open grass field here <br>
         Still the question remains is it safe in there <br>
        You never know about new places in this world <br>
        At least the trip is nice', 'foto_url' => '/img/NearHotel.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 80, 'to_location_id' => 61]);
        DB::table('choices')->insert(['name' => 'Go to the hotel', 'from_location_id' => 80, 'to_location_id' => 89]);
        DB::table('choices')->insert(['name' => 'Go to the pizzeria ', 'from_location_id' => 80, 'to_location_id' => 91]); // Only when its 23:30 - 24:00 and have Coach Justin in their party

        DB::table('locations')->insert(['id' => 90, 'name' => 'Time to het bleach', 'area_id' => 1, 'title' => 'Are you sure?', 'story' => 'Well as you approach the studio Coach Justin looks to you <br>
        <b>Coach Justin:</b> Well this place is dangerous enough at least to say<br>
        Last time i got barely out <br>
        <b>username:</b> Barely at least you can tell the tale <br>
        And what makes it that dangerous than? <br>
        <b>Coach Justin:</b> its the ink.... and welll...... <br>
        The rest you need to explore it on your own with me <br>
        <b>username:</b> ehhmmm okay. at least you know the way <br>
        <b>Coach Justin:</b> yup', 'foto_url' => '/img/studio.png']);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 90, 'to_location_id' => 79]);
        DB::table('choices')->insert(['id' => 222, 'name' => 'Go to the joey drew studio', 'from_location_id' => 90, 'to_location_id' => 92]);

        DB::table('locations')->insert(['id' => 92, 'name' => 'Playtime', 'area_id' => 6, 'title' => 'Cartoon time', 'story' => '<b>Coach Justin:</b> this place doens`t look that bad <br>
        <b>username:</b> Well perhaps you don`t know <br>
        But everywhere its seems ink is leaking fron the sealing <br>
        <b>Coach Justin:</b> well that ink we can wash away so come on <br>
        We wont find your axe if we stand here <br>
        <b>username:</b> Well at least you got a point', 'foto_url' => '/img/minigame/bendy_ch1/bendy_entrance_ch1.png']);
        DB::table('choices')->insert(['name' => 'Go to the open area', 'from_location_id' => 92, 'to_location_id' => 93]);

        DB::table('locations')->insert(['id' => 93, 'name' => 'Playtime', 'area_id' => 6, 'title' => 'Time to choose', 'story' => '<b>Coach Justin:</b> well found anything username? <br>
        <b>username:</b> Nope only this <br>
        Should we check if the projector it does <br>
        <b>Coach Justin:</b> At least we could try that <br>
        Else we need to go do some research around here<br>
        <b>username:</b> Yup that is true but you never knew he <br>
        And i need that axe to continue <br>
        <b>Coach Justin:</b> We will see', 'foto_url' => '/img/minigame/bendy_ch1/bendy_openarea_ch1.png']);
        DB::table('choices')->insert(['name' => 'Go to the exit', 'from_location_id' => 93, 'to_location_id' => 92]);
        DB::table('choices')->insert(['name' => 'Go to the right', 'from_location_id' => 93, 'to_location_id' => 94]);
        DB::table('choices')->insert(['name' => 'Go to the left', 'from_location_id' => 93, 'to_location_id' => 95]);
        DB::table('choices')->insert(['name' => 'try the projector', 'from_location_id' => 93, 'to_location_id' => 96]);

        DB::table('locations')->insert(['id' => 96, 'name' => 'Playtime', 'area_id' => 6, 'title' => 'Time for answers', 'story' => '<b>Coach Justin:</b> well want me to turn it on? <br>
        <b>username:</b> Perhaps its has answers <br>
        <b>Coach Justin:</b> That could be but we don`t know that <br>
        So? what do we username<br>
        <b>username:</b> Turn on the projector', 'foto_url' => '/img/minigame/bendy_ch1/bendy_projecteroff_ch1.png']);
        DB::table('choices')->insert(['name' => 'Turn on the projector', 'from_location_id' => 96, 'to_location_id' => 97]);

        DB::table('locations')->insert(['id' => 97, 'name' => 'Quest time', 'area_id' => 6, 'title' => 'You want your axe', 'story' => '<b>Projector</b> So you try to seek something here <br>
        Am i right or perhaps not <br>
        <b>username:</b> You and coach Justin look weird and say yes <br>
        I heard that i can find a axe here is that true <br>
        <b>Projector</b> Well it can but there is a twist <br>
        Complete the task shown in the video and i give your the axe <br>
        <b>Coach Justin:</b> And if we fail? <br>
        <b>Projector</b> Ow there is no failing <br>
        <b> Both of you </b> Wellll........ <br>
        <iframe width="560" height="315" controls=0 src="https://www.youtube.com/embed/VNdIvPb196s?end=44" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>']);
        DB::table('choices')->insert(['name' => 'Start your journey', 'from_location_id' => 97, 'to_location_id' => 93]);

        // Minigame/bendy_ch1/bendy_entrance_ch1
        DB::table('locations')->insert(['id' => 15, 'name' => 'You encounter something', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
        DB::table('locations')->insert(['id' => 21, 'name' => 'Npc time', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
        DB::table('locations')->insert(['id' => 22, 'name' => 'Item time', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
        DB::table('locations')->insert(['id' => 27, 'name' => 'Shop time', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
        DB::table('locations')->insert(['id' => 46, 'name' => 'Warehouses', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
    }
}
