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

        DB::table('locations')->insert(['id' => 1, 'name' => 'Startpagina', 'title' => 'Deja vu', 'story' => 'You wake up after a great new eve<br>
 With a searfarer headache you hear the following <br>
 <b>Radio:</b> The town is been evacuated to a unkown virus <br>
  Everyone is advised to go the bridge else we wish you luck <br>
  Greetings Channel 6 <br>
  <b>Me:</b> Well what now ', 'foto_url' => '/img/Startscreen.png']);
        DB::table('choices')->insert(['name' => 'Go Outside', 'from_location_id' => 1, 'to_location_id' => 5]);
        DB::table('choices')->insert(['name' => 'The kitchen', 'from_location_id' => 1, 'to_location_id' => 2]);
        DB::table('choices')->insert(['name' => 'A nap some times', 'from_location_id' => 1, 'to_location_id' => 3]);
        DB::table('choices')->insert(['name' => 'Garden work', 'from_location_id' => 1, 'to_location_id' => 4]);

        DB::table('locations')->insert(['id' => 2, 'name' => 'The Kitchen', 'title' => 'Are you hungry', 'story' => 'You`re standing in you`re kichten<br>
 You take a little look outside  <br>
 You only see newyork from you`re apartment  <br>
  Should you go outside or stay inside is the question', 'foto_url' => '/img/kitchen.png']);
        DB::table('choices')->insert(['name' => 'Check you`re garden', 'from_location_id' => 2, 'to_location_id' => 4]);
        DB::table('choices')->insert(['name' => 'Go take a nap', 'from_location_id' => 2, 'to_location_id' => 3]);
        DB::table('choices')->insert(['name' => 'Ga to the living room', 'from_location_id' => 2, 'to_location_id' => 1]);

        DB::table('locations')->insert(['id' => 3, 'name' => 'The bedroom ', 'title' => 'Time for a nap', 'story' => 'Here it is the bedroom<br>
    Is it time for nap?  <br>
    Perhaps when you sleep the infected get you?  <br>
    Or is it the risk worth', 'foto_url' => '/img/bedroom.png']);
        DB::table('choices')->insert(['name' => 'Look out the window', 'from_location_id' => 3, 'to_location_id' => 6]);
        DB::table('choices')->insert(['name' => 'Take a nap', 'from_location_id' => 3, 'to_location_id' => 7]);
        DB::table('choices')->insert(['name' => 'Go to the living room', 'from_location_id' => 3, 'to_location_id' => 1]);
        DB::table('choices')->insert(['name' => 'Go to the kitchen', 'from_location_id' => 3, 'to_location_id' => 2]);

        DB::table('locations')->insert(['id' => 4, 'name' => 'The garden ', 'title' => 'Time to relax', 'story' => 'well the garden look likes a jungle<br>
    Its it healty to be here   <br>
    Or should i leave thus place as it is  <br>
    I wont think its healthy here <br>
    But yeah what is healthy this days', 'foto_url' => '/img/garden.png']);
        DB::table('choices')->insert(['name' => 'Go inside', 'from_location_id' => 4, 'to_location_id' => 1]);

        DB::table('locations')->insert(['id' => 5, 'name' => 'Outside the hotel  ', 'title' => 'on the road', 'story' => 'well the road goes on and on<br>
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

        DB::table('locations')->insert(['id' => 6, 'name' => 'The balcony', 'title' => 'A nice view', 'story' => 'As you look outside you think<br>
    Its a nice view i paid for   <br>
    But there is no sing of the infected outside  <br>
    And the question is how long can i watch this view', 'foto_url' => '/img/']);
        DB::table('choices')->insert(['name' => 'Go back in the room', 'from_location_id' => 6, 'to_location_id' => 3]);

        DB::table('locations')->insert(['id' => 7, 'name' => 'Nap time', 'title' => 'Time for a nap', 'story' => 'Zzzzzzzzzz   <br>
    ZZZZzzzzzzzzzzzzzzzzzzz  <br>
    As you wake up you think i feel healthier  <br>
    But is this true?', 'foto_url' => '/img/bed.png']);
        DB::table('choices')->insert(['name' => 'Be awake and escape', 'from_location_id' => 7, 'to_location_id' => 3]);

        DB::table('locations')->insert(['id' => 8, 'name' => 'The wood store', 'title' => 'Want to go inside', 'story' => 'As you standing for store you`re thinking<br>
    Is it safe to go inside and what lies behind<br>
    Weapons, Materials, Wood, Dead, a paddle?  <br>
    But is it the risk worth?', 'foto_url' => '/img/outsidewood.png']);
        DB::table('choices')->insert(['name' => 'Go back on the street', 'from_location_id' => 8, 'to_location_id' => 5]);
        DB::table('choices')->insert(['name' => 'Go inside if you dare', 'from_location_id' => 8, 'to_location_id' => 13]);

        DB::table('locations')->insert(['id' => 9, 'name' => 'The electro store', 'title' => 'Want to go inside', 'story' => 'As you standing for store you`re thinking<br>
    Is it safe to go inside and what lies behind<br>
    Weapons, Materials, What else is there?<br>
    At least there is a antenna on the roof <br>
    But the question is it working or not?', 'foto_url' => '/img/outelectro.png']);
        DB::table('choices')->insert(['name' => 'Go back on the street', 'from_location_id' => 9, 'to_location_id' => 5]);
        DB::table('choices')->insert(['name' => 'Go inside if you dare', 'from_location_id' => 9, 'to_location_id' => 14]);

        DB::table('locations')->insert(['id' => 10, 'name' => 'A sandy road', 'title' => 'Sand al around you', 'story' => 'As you walk the road you see nothing but sand<br>
    Where does the road bring you is the question<br>
    A way out perhaps? or maby more dead?<br>
    No one knows until you go on<br>
    But is it worth to go on or do you want to go back', 'foto_url' => '/img/sandroad.png']);
        DB::table('choices')->insert(['name' => 'Go on the sand road', 'from_location_id' => 10, 'to_location_id' => '15/1']);
        DB::table('choices')->insert(['name' => 'Go back towards the hotel', 'from_location_id' => 10, 'to_location_id' => 5]);

        DB::table('locations')->insert(['id' => 11, 'name' => 'A Look around the city', 'title' => 'Question look `Deja vu`', 'story' => 'You look forward and see a new part of the city<br>
    And a aircraft carrier laying still<br>
    Only the question is why its laying still<br>
    Is the crew dead? Is it abonded? or perhaps just out of fuel<br>
    But only there is no way to go on the river else you want to swim <br>
    Choice is on you but which is the correct one', 'foto_url' => '/img/edge.png']);
        DB::table('choices')->insert(['name' => 'Go on the river', 'from_location_id' => 11, 'to_location_id' => 16]);
        DB::table('choices')->insert(['name' => 'Go swimming', 'from_location_id' => 11, 'to_location_id' => 17]);
        DB::table('choices')->insert(['name' => 'Go back towards the hotel', 'from_location_id' => 11, 'to_location_id' => 5]);

        DB::table('locations')->insert(['id' => 12, 'name' => 'Futher down the street', 'title' => 'A new part of the city', 'story' => 'As you walk futher down the street you see the next things<br>
    There is a man standing in the middle of the street<br>
    A way left to a dead end it seems<br>
    A bridge to the right and the road goes on<br>
    Which way wil you go', 'foto_url' => '/img/street2.png']);
        DB::table('choices')->insert(['name' => 'Go to the dead end', 'from_location_id' => 12, 'to_location_id' => 18]);
        DB::table('choices')->insert(['name' => 'Go to the brige', 'from_location_id' => 12, 'to_location_id' => 19]);
        DB::table('choices')->insert(['name' => 'Go further down the street', 'from_location_id' => 12, 'to_location_id' => 20]);
        DB::table('choices')->insert(['name' => 'Go talk to man on the street', 'from_location_id' => 12, 'to_location_id' => '21/1']);
        DB::table('choices')->insert(['name' => 'Go back towards the hotel', 'from_location_id' => 12, 'to_location_id' => 5]);

        DB::table('locations')->insert(['id' => 13, 'name' => 'Inside the wood store', 'title' => 'A wooden age', 'story' => 'Well there you are inside the store<br>
    There are some tools lying around<br>
    But not the paddle you were looking for<br>
    So what is the call pick up some tools or go out<br>
    The question is of course are they handy or not', 'foto_url' => '/img/insidewood.png']);
        DB::table('choices')->insert(['name' => 'Go out the store', 'from_location_id' => 13, 'to_location_id' => 8]);
        DB::table('choices')->insert(['name' => 'pick up the axe', 'from_location_id' => 13, 'to_location_id' => '22/1']);
        DB::table('choices')->insert(['name' => 'pick up the baseball bat ', 'from_location_id' => 13, 'to_location_id' => '22/2']);
        DB::table('choices')->insert(['name' => 'pick up the nail gun', 'from_location_id' => 13, 'to_location_id' => '22/3']);
        DB::table('choices')->insert(['name' => 'pick up a wooden sword', 'from_location_id' => 13, 'to_location_id' => '22/4']);

        DB::table('locations')->insert(['id' => 14, 'name' => 'Inside the electro store', 'title' => 'A Time of electro', 'story' => 'Well there you are inside the store<br>
    It is quite a big place for this kind of store<br>
    There is nothing around here to pick up<br>
    So there is a door a bit fuhter but i think its locked<br>
    So what wil you do', 'foto_url' => '/img/insideelectro.png']);
        DB::table('choices')->insert(['name' => 'Go out the store', 'from_location_id' => 14, 'to_location_id' => 9]);
        DB::table('choices')->insert(['name' => 'Go to the backroom', 'from_location_id' => 14, 'to_location_id' => 23]);

        DB::table('locations')->insert(['id' => 17, 'name' => 'Game over', 'title' => 'Good thinking', 'story' => 'Well you thought swimming was a good idea<br>
    did i forgot to say the water is poisoned<br>
    And there live fish here that kill humans <br>
    They got infected too so they probably can walk or swim faster than you so<br>
    Not a wise choice he smartie', 'foto_url' => '/img/dead.png']);
        DB::table('choices')->insert(['name' => 'Try again', 'from_location_id' => 17, 'to_location_id' => 1]);

        DB::table('locations')->insert(['id' => 18, 'name' => 'A dead end?', 'title' => 'This is a dead end?', 'story' => 'After walking a bit you discover this is not a dead end<br>
    But instead it leads to a huge shopping mall<br>
    Is this perhaps the connection to the other part of the city or not?<br>
    I heard stories that the city has fallen apart but there are still some ways its stays connected<br>
    Its probably better if i take a look inside<br>
    On the other side is it safe there', 'foto_url' => '/img/deadend.png']);
        DB::table('choices')->insert(['name' => 'Go back on the streets', 'from_location_id' => 18, 'to_location_id' => 12]);
        DB::table('choices')->insert(['name' => 'Dare to look inside', 'from_location_id' => 18, 'to_location_id' => 24]);

        DB::table('locations')->insert(['id' => 19, 'name' => 'The bridge', 'title' => 'A way out?', 'story' => 'As you approach the bridge you suddenly hear a voice<br>
    <b>Unkown:</b>Are you not infected? <br>
    If so we can only give you a way out of this mess if you bring us new guns<br>
    We`re from the army and are in need of guns to protect the place here<br>
    We wil provide you with a way out only if you have some guns for us<br>
    Well what do you do now?', 'foto_url' => '/img/bridge.png']);
        DB::table('choices')->insert(['name' => 'Go towards the bridge', 'from_location_id' => 19, 'to_location_id' => 25]);
        DB::table('choices')->insert(['name' => 'Go back for the guns', 'from_location_id' => 19, 'to_location_id' => 12]);

        DB::table('locations')->insert(['id' => 20, 'name' => 'The road goes on', 'title' => 'Deja vu agian', 'story' => 'That is quite a long walk and even more road to go<br>
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

        DB::table('locations')->insert(['id' => 26, 'name' => 'Car time', 'title' => 'Well Repair time', 'story' => 'There are we standing inside the garage<br>
    I see a broken car or is it empty?<br>
    At least a filled jerry can lying around<br>
    But wait was it not that we needed the boat from the docks<br>
    Maby with the car we can it bring to the edge<br>
    But where was that damm boat?', 'foto_url' => '/img/garage.png']);
        DB::table('choices')->insert(['name' => 'Take the jerry can', 'from_location_id' => 26, 'to_location_id' => '22/5']);
        DB::table('choices')->insert(['name' => 'Leave the garage', 'from_location_id' => 26, 'to_location_id' => 20]);

        DB::table('locations')->insert(['id' => 29, 'name' => 'The docks', 'title' => 'Docks with a boat time', 'story' => 'Well that was though battling that monster<br>
    Unless you came with the car than you are fine i guesses<br>
    Its i not that i complain but hitting something with a car is quite painful<br>
    Or you had to take a other route with the car<br>
    Never mind. At least if you with the car you can take the boat with you<br>
    But are you with the car?', 'foto_url' => '/img/docks.png']);
        DB::table('choices')->insert(['name' => 'Go back on the sandy road', 'from_location_id' => 29, 'to_location_id' => '15/1']);
        DB::table('choices')->insert(['name' => 'Take the boat', 'from_location_id' => 29, 'to_location_id' => '22/6']);
        DB::table('choices')->insert(['name' => 'Escape the city', 'from_location_id' => 29, 'to_location_id' => 30]);

        DB::table('locations')->insert(['id' => 30, 'name' => 'The end1', 'title' => 'You have escaped 1', 'story' => 'Well that was a though road<br>
    But you know there are more endings <br>
    this one was the easy one to escape infected new york<br>
    Do you wanna try or not?', 'foto_url' => '/img/end1.png']);
        DB::table('choices')->insert(['name' => 'Game Over', 'from_location_id' => 30, 'to_location_id' => 1]);

        DB::table('locations')->insert(['id' => 15, 'name' => 'You encounter something', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
        DB::table('locations')->insert(['id' => 21, 'name' => 'Npc time', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
        DB::table('locations')->insert(['id' => 22, 'name' => 'Item time', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
        DB::table('locations')->insert(['id' => 27, 'name' => 'Shop time', 'title' => 'Dummie page', 'story' => 'This is a test page', 'foto_url' => '/img/']);
    }
}
