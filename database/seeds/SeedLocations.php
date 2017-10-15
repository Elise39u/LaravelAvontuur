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

        DB::table('locations')->insert(['id' => 6, 'name' => 'The balcony', 'title' => 'A nice view', 'story' => 'As you look outside you think<br>
    Its a nie view i paid for   <br>
    But there is no sing of the infected outside  <br>
    And the question is how long can i watch this view', 'foto_url' => '/img/NewYorkDAY.png']);
        DB::table('choices')->insert(['name' => 'Go back in the room', 'from_location_id' => 6, 'to_location_id' => 3]);
    }
}
