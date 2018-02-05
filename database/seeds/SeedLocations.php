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
    Or should i leave thus place as it is  <br>
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
        DB::table('choices')->insert(['name' => 'Go on the river', 'from_location_id' => 11, 'to_location_id' => 16]);
        DB::table('choices')->insert(['id' => 27, 'name' => 'Go swimming', 'from_location_id' => 11, 'to_location_id' => 17]);
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
        DB::table('choices')->insert(['name' => 'pick up the axe', 'from_location_id' => 13, 'to_location_id' => '22/1']);
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

        DB::table('locations')->insert(['id' => 50, 'name' => 'Money time', 'area_id' => 2, 'title' => 'Spare time he', 'story' => 'Well a bank... I forgot if i had any spare money left <br>
        Its seems the bank is locked from here<br>
        But one is there someone? or its abandoned like the rest of the city<br>
        Is it worth to go or do we go back<br>
        Think twice about the gold lying in the bank', 'foto_url' => '/img/bank.png']);
        DB::table('choices')->insert(['name' => 'Go towards the bank', 'from_location_id' => 50, 'to_location_id' => 51]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 50, 'to_location_id' => '15/2']);

        DB::table('locations')->insert(['id' => 51, 'name' => 'Money time', 'area_id' => 2, 'title' => 'Near the bank', 'story' => '<b> Knock Knock</b> HELLO IS THERE SOMEONE! <br>
        and again <b> Knock Knock </b>..... Well no one is inside<br>
        What now... Waiting? Try to look for the key?<br>
        Wel if there is a key somewhere in this city<br>
        So do we look for the key or keep knocking?', 'foto_url' => '/img/bankdoor.png']);
        DB::table('choices')->insert(['id' => 94, 'name' => 'Enter the bank', 'from_location_id' => 51, 'to_location_id' => 52]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 51, 'to_location_id' => 50]);

        DB::table('locations')->insert(['id' => 23, 'name' => 'Lurking', 'area_id' => 1, 'title' => 'Lurking time', 'story' => 'Okay its look empty around here<br>
        Eheeee i only can see a staircase back there<br>
        What now is it safe to go up or ..........<br>
        Maby there is something useful on the roof of this store<br>
        But going up there is a risk', 'foto_url' => '/img/elebackroom.png']);
        DB::table('choices')->insert(['name' => 'Go to the roof of the store', 'from_location_id' => 23, 'to_location_id' => 53]);
        DB::table('choices')->insert(['name' => 'Go back', 'from_location_id' => 23, 'to_location_id' => 14]);
        DB::table('choices')->insert(['name' => 'A card?', 'from_location_id' => 23, 'to_location_id' => '22/34']);

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
        DB::table('choices')->insert(['name' => 'Go back downstairs', 'from_location_id' => 57, 'to_location_id' => 49]);
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

        DB::table('locations')->insert(['id' => 38, 'name' => 'Empty space', 'area_id' => 2, 'title' => 'Well a empty road ahead', 'story' => 'So what a surprise totally nothing<br>
        On the items lying around here there is totally nothing <br>
        Is that a person in the distance?<br>
        <big>HELLO HELLO THERE </big> no response<br>
        Perhaps you want to take a look', 'foto_url' => '/img/road.png']);
        DB::table('choices')->insert(['name' => 'Go back ', 'from_location_id' => 38, 'to_location_id' => 33]);
        DB::table('choices')->insert(['name' => 'Pick up the signal device', 'from_location_id' => 38, 'to_location_id' => '22/39']);
        DB::table('choices')->insert(['name' => 'Pick up the receiver ', 'from_location_id' => 38, 'to_location_id' => '22/40']);
        DB::table('choices')->insert(['name' => 'Go talk to farmer dave', 'from_location_id' => 38, 'to_location_id' => '21/3']);

        DB::table('locations')->insert(['id' => 15, 'name' => 'You encounter something', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
        DB::table('locations')->insert(['id' => 21, 'name' => 'Npc time', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
        DB::table('locations')->insert(['id' => 22, 'name' => 'Item time', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
        DB::table('locations')->insert(['id' => 27, 'name' => 'Shop time', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
        DB::table('locations')->insert(['id' => 46, 'name' => 'Warehouses', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
    }
}
