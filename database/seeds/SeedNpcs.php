<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Auth;

class SeedNpcs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->command->line(User::find(Auth::user()->name)->email);
        $Username = User::find(2)->name;
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
        #TODO: Rewrite Marieke And Jeroen story based on Judith one
        DB::table('npcs')->insert(['id' => 11, 'name' => 'Coach Marieke', 'foto_url' => '/img/npc/CoachMarieke.png', 'story' => '<b>Marieke:</b> Well Hi there username <br>
        <b>username:</b> Well also hi Marieke and are you pregnant? <br>
        <b>Marieke:</b> How dare you ask that username perhaps i am just fat <br>
        <b>username:</b> Well if you say it that way i will think i get my doubts<br>
        <b>Marieke:</b> Prank i am pregnant and i`m like 28 weeks in and on vacation<br>
        <b>username:</b> Wait did you get pregnant here? or did you get pregnant here?<br>
        <b>Marieke:</b> I think it came here pregnant, I already came here with a little belly <br>
        I never new who the father was but i guessed a student i coached <br>
        A few weeks on vacation we met him in California and i had a one night stand with him <br>
        <b>username:</b> Wait you had sex with a student you coached in the past? ....<br>
        <b>Marieke:</b> Ahh its was like 4 a 5 years ago went i saw him <br>
        It was at the Da Vinci college, I had borrowed something so i brought it back <br>
        And when i was laying the item back i saw him from my eye sitting in the vide classroom<br>
        That moment when we looked each other in the eyes was still hunting me <br>
        I dint knew what Justin was thinking about because i never asked him <br>
        <b>username:</b> Why you never asked Marieke?<br>
        <b>Marieke:</b> I heard from a female friend who was coaching him at that moment that he dint want to go back inside the class room <br>
        at the moment i was talking with her and he went out of the class room <br>
        After that moment my female friend had a coach conversation with hem <br>
        Justin told Corine my female friend that he dint want to go back inside the class room<br>
        He told Corine that it was the he needed a mind set in order to walk pas by me<br>
        He also explained that on the way out he wanted to talk to his friends<br>
        But the problem came when Justin needed to go back inside the class<br>
        So as i told he had the empty mind set him scared to go back inside and he went to his Zoco <br>
        And after that he passed by me on the way back to his class <br>
        But he dint pay attention to me so it was weird situation <br>
        <b>username:</b> Isn\'t his story suppose to be secret and the confidentiality? <br>
        <b>Marieke:</b> We Coaches have indeed the confidentiality But we need to talk at least with the teachers and support teachers<br>
        How else could we help as study coaches<br>
        <b>username:</b> Yeah you got a point but one thing he? <br>
        <b>Marieke:</b> And that is username?<br>
        <b>username:</b> You said you came here already with a little pregnant belly right? <br>
        <b>Marieke:</b> That is correct why? <br>
        <b>username: </b> Well you said you not have seen Justin for 4 a 5 years <br>
        And if you had a one night stand with him on vacation. i don`t get the part where Justin becomes the father Marieke? <br>
        You never had sex with hem before he? <br>
        <b>Marieke:</b> Well that is one point and no i never had sex with hem before<br>
        And well who is it than<br>
        <b>username:</b> Maby wanna search it out with me? <br>
        <b>Marieke:</b> That sounds like a great idea <br>
        And i wish i had sex with him he would be a great father<br>
        Well i guesses its just the hormones this is quite a personal story
        ', 'Talk' => 'I still have some questions', 'location_id' => 76]);
        DB::table('npcs')->insert(['id' => 12, 'name' => 'Coach Jeroen', 'foto_url' => '/img/npc/Jeroen.png', 'story' => '<b>Jeroen:</b> Well Hello there username <br>
        <b>username:</b> Also hi and how do you know my name jeroen? <br>
        <b>Jeroen:</b> I heard it from Marieke<br>
        After your quite long conversation but i guesses that is not why you here <br>
        <b>username:</b> Well that is correct <br>
        But now how did you know Coach Marieke? and why does she tell something like that to you <br>
        <b>Jeroen:</b> Well it started 6 years ago in a place called Gorinchem <br>
        It was just the start of a new school year for Da vinci IT. They had a sport day near the beach in Gorinchem on BWP <br>
        Marieke was there along with the rest of the Da vinci staff, Under the students there was 1 who caught our eye <br>
        His name was Justin. at the beginning he was quiet boy but he had his social skills <br>
        But he was more on his own than the rest of the day. In the first part i wasn\'t present <br>
        I heard from Marieke who was ike a hour later that he was busy with the bamboo <br>
        He went quite well working together with the other 5. And seemed quite social. <br>
        The second part he went on the walk around the city and we dint saw much of him <br>
        And at the last part of the day he went playing with the dog of the owner from the sport school <br>
        He stayed a half hour to a whole hour later because he dint knew who`s dog it was<br>
        At last he walked to Marieke and asked for the number of the animals ambulance. <br>
        We noticed that he was a bit nervous. But Marieke just told him that we knew from who the dog was. <br>
        After that he was relieved and went home <br>
        <b>username:</b> well that is a quite a story <br>
        But is that important want Marieke told some personal things too <br>
        And its seems those things wont tell to a stranger<br>
        <b>Jeroen:</b> Yeah he made quite a year to remember <br>
        At least he was a nice guy. The only wrong thing happend is that he felt in love with Marieke.<br>
        <b>username:</b> Oww. You don`t thinking he is the father right? <br>
        <b>Jeroen:</b> No i know about the one night stand she was a bit too drunk <br>
        And you know the hormones he <br>
        <b>username:</b> I thought Marieke knew better drinking while pregnant pfff <br>
        <b>Jeroen:</b> We did some research before going on vacation on this part <br>
        One or Two nights was nothing we found on some different websites <br>
        Only downside we choice the first night after we encountered Justin, and we saw Justin was changed from his love view <br>
        But yeah for the first he thought well what could go wrong with a few drinks<br>
        <b>username:</b> So they got both drunk and it happened <br>
        How did they wake up? i wanna know that now<br>
        <b>Jeroen:</b> Well both are shocked when they wake up of course <br>
         And after that they remember the night before and realized they had a few more drinks than they want <br>
         And of course don\'t forget the head ache ', 'Talk' => 'I have some questions about him', 'location_id' => 76]);
        DB::table('npcs')->insert(['id' => 13, 'name' => 'Mother Lieke', 'foto_url' => '/img/npc/Lieke.png', 'story' => 'Well hi there username<br>
        Yeah i called you username because you are right?<br>
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
        // TODO:: Rewrite Judith Story to fit Marieke, Jeroen
        DB::table('npcs')->insert(['id' => 16, 'name' => 'Support teacher Judith', 'foto_url' => '/img/npc/Judith.png', 'story' => 'Well hi there username<br>
        this went quite wrong he and ignore him in the background<br>
        Take a break james i wil be back in 5 minutes<br>
        <b>James:</b> Okay judith see you soon <br>
        <b>Judith:</b> Did you know i came here and met my colleagues from the Netherlands <br>
        I was on exchange trip with a school here and i saw them on the way to my home here <br>
        <b>username:</b> Ow they told me about it <br>
        <b>Judith:</b> oh haha, did they told you about Justin <br>
        <b>username:</b> pffffff. Let me guess you have some things to say about him either <br>
        <b>Judith:</b> Well you can read my mind <br>
        I have two things to say about him and you can choose wich one<br>
        A story in school year 2 or the story from year 1? <br>
        <b>username:</b> Ehhhh lets start at the beginning? <br>
        <b>Judith:</b> Well this is a short one <br>
        After the first time i had a conversation with Marieke and Justin something weird happened<br>
        They day after that he came to me and asked one question about our chat <br>
        <b>username:</b> And that is a love question? <br>
        <b>Judith:</b> that is a bit correct, i asked  about ever had a loved one <br>
        So the next day he came to me and asked why i asked that question <br>
        So i told him i used bridge building to get to the question <br>
        but then i knew he was in love with Marieke <br>
        <b>username:</b> Why not you Judith? <br>
        <b>Judith:</b> I just started working  a few months so... <br>
        <b>username:</b> Well okay.... and Year 2 <br>
        <b>Judith:</b> I only helped him get a start on his love lost <br>
        He confronted Marieke and ofc she refused<br>
        I dind`t saw him for a few months because he was on internship i saw a few times when he was on school for RT <br>
        Then months passed away and he was back on school. in the mean time i got finally pregnant for the first time <br>
        At a day there was a special meeting for the Davinci service center i thought why not take a visit then <br>
        In the mean time i was around 4 5 months pregnant <br>
        The next day he came to me after a few moments i was done with a other student <br>
        Justin came to congratulate with the pregnancy but he said he ask Lisette first just to be safe <br>
        We had a little chat about my pregnancy after the next student came <br>
        But i took the moment before to talk about Marieke and he was changed <br>
        It was also a good moment to feel can just be the hormones then but who knows<br>
        But one thing bothered me during our conversation he seemed quite a bit uncomfortable<br>
        I noticed that Justin looked quite a bit at my belly i think he liked my belly<br> 
        i think he got a bit uncomfortable because of my pregnant state<br>
        username do you think Justin has a pregnant fetish?', 'Talk' => 'Ehhhee I need more evidence', 'location_id' => 76]);
        DB::table('npcs')->insert(['id' => 17, 'name' => 'Scout Dylan', 'foto_url' => '/img/npc/Dylan.png', 'story' => 'Well hi there stranger or username<br>
        I am dylan and i am 16 years old <br>
        It is sad that this happened right in the week before camp<br>
        At least i am safe here. I could not think of beaning right out there now<br>
        I hope the rest of my scout group is okay<br>
        Because no one is answering there phone', 'Talk' => 'Hi Dylan. Should i look for them?', 'location_id' => 76]);
        DB::table('npcs')->insert(['id' => 18, 'name' => 'Designer Tim', 'foto_url' => '/img/npc/Tim.png', 'story' => '<b>Tim:</b>Wait one second username<br>
        <b>username:</b> Ehmmmmm..... <br>
        <b>Tim:</b> Yeah now we can speak.  <br>
        A bit rude from me but let me introduce myself<br>
        I am Tim and the boyfriend of Deona. We went here together with Justin, And 2 more people <br>
        I can`t remember their names <br>
        <b>username:</b> Their? <br>
        <b>Tim:</b> yeah a male and female<br>
        That Justin was a nice person but he was on the other side of the city at the moment it started <br>
        So we got separated. The others i don`t know. <br>
        <b>username:</b> You start too talking about him <br>
        <b>Tim:</b> Why username? <br>
        <b>username:</b> Marieke, Judith, Jeroen also told some stories.<br>
        More Jeroen and Marieke but Judith a bit <br>
        <b>Tim:</b> Well i don`t know them', 'Talk' => 'At least can i ask how you met Justin?', 'location_id' => 76]);
        DB::table('npcs')->insert(['id' => 19, 'name' => 'Programmer Deona', 'foto_url' => '/img/npc/Deona.png', 'story' => '<b>Deona:</b> well hello username: <br>
        <b>username:</b> Hello there. What is your name? <br>
        <b>Deona:</b> Well my name is Deona username:<br>
        I`m the girlfriend of tim and was on vacation with a group of friends<br>
        <b>username:</b> You ain`t gonna tell me one of them is justin hè<br>
        <b>Deona:</b> Now than i wont say it username<br>
        <b>username:</b> I KNEW IT Marieke,Jeroen,Judith Even tim tells about him <br>
        <b>Deona:</b> I don`t know Marieke,Jeroen,Judith Tim i know <br>
        Justin told me about his coaching progress but never who they were <br>
        <b>username:</b> Not listed perhaps? <br>
        <b>Deona:</b> ahh that well but its not impressed but its his personal side <br>
         And he was quite a nice and funny kid<br>
         Its sad we missed him <br>
         <b>username:</b> Perhaps search with me <br>
         Together we will find him <br>
         <b>Deona:</b> perhaps but i don`t wanna leave this place', 'Talk' => 'You will be save with me Deona', 'location_id' => 76]);
    }
}