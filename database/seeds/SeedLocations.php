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
        DB::table('choices')->insert(['name' => 'Go on the sand road', 'from_location_id' => 10, 'to_location_id' => 15]);
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
        DB::table('choices')->insert(['name' => 'Go talk to man on the street', 'from_location_id' => 12, 'to_location_id' => 21]);
        DB::table('choices')->insert(['name' => 'Go back towards the hotel', 'from_location_id' => 12, 'to_location_id' => 5]);
    }
}
