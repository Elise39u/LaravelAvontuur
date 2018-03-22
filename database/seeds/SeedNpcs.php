<?php

use Illuminate\Database\Seeder;

class SeedNpcs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('npcs')->truncate(); // maak leeg

        DB::table('npcs')->insert(['id' => 1, 'name' => 'New Yorker James', 'foto_url' => '/img/npc/james.png', 'story' => 'Well hello there i am James <br>
        I lived here in New york my whole life and know it better than any one <br>
        If you want to know something just ask <br>
        But i tell you lie to me and you dont get to know everything', 'Talk' => 'Hello james', 'location_id' => 12]);
        DB::table('npcs')->insert(['id' => 2, 'name' => 'Pregnant New Emma', 'foto_url' => '/img/npc/Emma.png', 'story' => 'Well hi there i am Emma<br>
        I Moved to new york like 3 years ago because on vacation i met my husband Eric<br>
        Well i hoped he is okay because he left an hour to do grocery\'s and never came back<br>
        I cant think about world where he is not included <br>
        Maby you can find him?', 'Talk' => 'Congrats Emma', 'location_id' => 20]);
        DB::table('npcs')->insert(['id' => 3, 'name' => 'Farmer dave', 'foto_url' => '/img/npc/dave.png', 'story' => 'Well hi there i am dave<br>
        I lived whole my life here in ny and liked all the way down<br>
        Maby you want to learn something about my life do you?<br>
        Or you need info about that stupid outbreak that ruined my land<br>
        But perhaps you can help me with that', 'Talk' => 'Well dave', 'location_id' => 38]);
        DB::table('npcs')->insert(['id' => 4, 'name' => 'Soldier Kane', 'foto_url' => '/img/npc/kane.png', 'story' => 'So you found us<br>
        Well life here in the base is not better and  the stupid thing we have to guard a back door<br>
        If no one guards it the base is at risk of been overrun<br>
        And no one is waiting on that so <br>
        Perhaps you can help me with that', 'Talk' => 'Okay kane?', 'location_id' => 72]);
        DB::table('npcs')->insert(['id' => 5, 'name' => 'Widow Esmee', 'foto_url' => '/img/npc/Esmee.png', 'story' => 'So what do you need<br>
        Its better be important because i don`t have time<br>
        I saw my man die in front of my eyes from those monsters<br>
        Never mind that<br>
        So talk', 'Talk' => 'Ehemmmee', 'location_id' => 74]);
        DB::table('npcs')->insert(['id' => 6, 'name' => 'IT Teacher peter', 'foto_url' => '/img/npc/Peter.png', 'story' => 'One moment sir/lady <br>
        So what can i do for you.<br>
        Wait what rude of me i`m Peter and i teach for so 15 years now<br>
        And what is your name sir/lady?<br>
        Not a talker i see so what is the problem? <br>
        Else i go on with my job', 'Talk' => 'Who said i have a problem', 'location_id' => 75]);
        DB::table('npcs')->insert(['id' => 7, 'name' => 'IT Student Arya', 'foto_url' => '/img/npc/Arya.png', 'story' => 'Well who do we have here <br>
        Another one to yell i`m bad<br>
        At least i can count on those who are my friends<br>
        I am the last one laugh if i finish this exam<br>
        its stressful but i wil made it so what is you`re problem', 'Talk' => 'Well arya', 'location_id' => 75]);
        DB::table('npcs')->insert(['id' => 8, 'name' => 'Domain leader Nina', 'foto_url' => '/img/npc/Nina.png', 'story' => 'Well sir/Madam make it quick<br>
        I don`t have much time because i need to take care of things around here <br>
        So ask your question or what you want to ask<br>
        There are many things to do so...<br>
        Ask or be gone', 'Talk' => 'Okay Nina', 'location_id' => 75]);
        DB::table('npcs')->insert(['id' => 9, 'name' => 'Beauty King Lauren ', 'foto_url' => '/img/npc/laura.png', 'story' => 'So what do you want<br>
        I need a camera for my youtube career<br>
        Maby you can get someone perhaps or some wine i`m thirsty <br>
        Or is that too much asked? you know what the reward could be<br>
        Perhaps i shouldn`t doo that too my husband', 'Talk' => 'Well also hi Lauren', 'location_id' => 75]);
    }
}
