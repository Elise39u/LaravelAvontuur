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
        Perhaps i shouldn`t doo that too my husband', 'Talk' => 'Well also hi Lauren', 'location_id' => 76]);
        DB::table('npcs')->insert(['id' => 10, 'name' => 'Photographer Mike', 'foto_url' => '/img/npc/Mike.png', 'story' => 'Hello there stranger<br>
        How is it going in your life at this sad moment<br>
        I ended up here after i was looking for a creature in this outbreak<br>
        The last place i saw him was on the river near the city<br>
        Perhaps you could help me spot it once again', 'Talk' => 'Now Mike', 'location_id' => 76]);
        #TODO: Rewrite Marieke story based on Judith one
        DB::table('npcs')->insert(['id' => 11, 'name' => 'Coach Marieke', 'foto_url' => '/img/npc/CoachMarieke.png', 'story' => '', 'Talk' => 'Also hai Marieke', 'location_id' => 76]);
        DB::table('npcs')->insert(['id' => 12, 'name' => 'Coach Jeroen', 'foto_url' => '/img/npc/Jeroen.png', 'story' => 'Well hello there stranger<br>
        I ended up here after a 6 month vacation with Mark, Esther, Corine, Marieke, Justin<br>
        The stupid part is the Marieke got pregnant by justin<br>
        She is a bit forgetful sins 20 weeks into her pregnancy <br>
        But its sad that the child won`t have a dad so we disgust and if we won`t find the rest i wil take the roll <br>
        Yeah its sad but better one dad than no dad <br>
        Perhaps you can find justin or the rest', 'Talk' => 'Who write that around you Jeroen?', 'location_id' => 76]);
        DB::table('npcs')->insert(['id' => 13, 'name' => 'Mother Lieke', 'foto_url' => '/img/npc/Lieke.png', 'story' => 'Well hi there player<br>
        Yeah i called you player because you are right?<br>
        Your somewhere behind a screen in the world. But that is not the problem now<br>
        Sorry about that but i have 2 kids to keep busy<br>
        And i think its start taking it toll on me<br>
        i`m exhausted i can use some sleep<br>
        Perhaps you can get them a drink or play with them', 'Talk' => 'working with kids is great', 'location_id' => 76]);
        DB::table('npcs')->insert(['id' => 14, 'name' => 'Student Ariëlle', 'foto_url' => '/img/npc/Ariëlle.png', 'story' => 'Great and there is someone again<br>
        Its like school was already worse but than you go on vacation and get this <br>
        I think you live under a rock because its already 14 weeks busy <br>
        And if you look around i wont think its over anytime soon<br>
        At least if they come inside its over <br>
        I think there wont come any rescue soon so<br>
        And its look like the soldiers are even done with it', 'Talk' => 'Well Ariëlle...', 'location_id' => 76]);
        DB::table('npcs')->insert(['id' => 15, 'name' => 'Owner Iris', 'foto_url' => '/img/npc/Iris.png', 'story' => 'So hit there i hope your have a question<br>
        I don\'t have much time so make it quick <br>
        Well perhaps sins i am here i well can make some time free <br>
        Its like i can`t run a store here because no one has money around here<br>
        So sorry to say but my name is Iris i lived here in new york for like 35 years now<br>
        Well perhaps you have some money', 'Talk' => 'You have a store here?', 'location_id' => 76]);
        DB::table('npcs')->insert(['id' => 16, 'name' => 'Support teacher Judith', 'foto_url' => '/img/npc/Judith.png', 'story' => 'Well hi there player<br>
        this went quite wrong he and ignore him in the background<br>
        Take a break james i wil be back in 5 minutes<br>
        <b>James:</b> Okay judith see you soon <br>
        <b>Judith:</b>Well were we again ow yeah life here right now. <br>
        Its was quite weird when i met people here from my workplace in the Netherlands<br>
        <b>You:</b> Like who?<br>
        <b>Judith:</b> Well Marieke, Jeroen those folks. forgot they to tell you about me<br>
        <b>You:</b> I think so perhaps i should ask it again <br>
        <b>Judith:</b> The only weird thing was to see Marieke with a belly she said she was 14 weeks already <br>
        She was allowed to sill fly. I still wonder who the dad is<br>
        Because they were only just 2 weeks on vacation so.<br>
        <b>You:</b> They told me its Justin but if she already came here pregnant <br>
        <b>Judith:</b> She slept with him but wait came here pregnant? <br>
        <b>You:</b> She told me she thought it was him because they had a one night stand <br>
        But she also told me that they met him on the vacation that`s why <br>
        <b>Judith:</b> I can`t believe she slept with him', 'Talk' => 'Is he that bad?', 'location_id' => 76]);
        DB::table('npcs')->insert(['id' => 17, 'name' => 'Scout Dylan', 'foto_url' => '/img/npc/Dylan.png', 'story' => 'Well hi there stranger or player<br>
        I am dylan and i am 16 years old <br>
        It is sad that this happened right in the week before camp<br>
        At least i am safe here. I could not think of beaning right out there now<br>
        I hope the rest of my scout group is okay<br>
        Because no one is answering there phone', 'Talk' => 'Hi Dylan. Should i look for them?', 'location_id' => 76]);
    }
}