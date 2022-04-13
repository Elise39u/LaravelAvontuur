<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeedDialog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dialogs')->truncate(); // maak leeg

        #Npc 1
        DB::table('dialogs')->insert(['id' => 1, 'npc_id' => 1, 'story' => 'what do you want friend']);
        DB::table('dialogs')->insert(['id' => 2, 'npc_id' => 1, 'story' => 'I have something that you can do for me']);
        DB::table('dialogs')->insert(['id' => 3, 'npc_id' => 1, 'story' => 'New york brooklyn of course friend']);
        DB::table('dialogs')->insert(['id' => 4, 'npc_id' => 1, 'story' => 'Bring me a green potion and i give something in return']);
        DB::table('dialogs')->insert(['id' => 5, 'npc_id' => 1, 'story' => 'No the item is a surprise']);
        //TODO: Think about what to do with this story because it has no buttons (For now this dialog is not available)
        DB::table('dialogs')->insert(['id' => 6, 'npc_id' => 1, 'story' => 'Okay come back if you have one']);
        DB::table('dialogs')->insert(['id' => 7, 'npc_id' => 1, 'story' => 'Well all the places to go out and the monument and i hope you know the rest']);
        DB::table('dialogs')->insert(['id' => 8, 'npc_id' => 1, 'story' => 'pfff don`t talk to me anymore']);
        DB::table('dialogs')->insert(['id' => 9, 'npc_id' => 1, 'story' => 'Well who doesn`t like New york']);

        #Npc 2
        DB::table('dialogs')->insert(['id' => 10, 'npc_id' => 2, 'story' => 'Well how can i help you before i get birth']);
        DB::table('dialogs')->insert(['id' => 11, 'npc_id' => 2, 'story' => 'I don`t talk to you unless.....']);
        DB::table('dialogs')->insert(['id' => 12, 'npc_id' => 2, 'story' => 'Now i talk only to Coach Marieke']);
        DB::table('dialogs')->insert(['id' => 13, 'npc_id' => 2, 'story' => 'I dont know perhaps call her?']);
        DB::table('dialogs')->insert(['id' => 14, 'npc_id' => 2, 'story' => 'I thought you had her phone number. Guess i`m wrong']);
        DB::table('dialogs')->insert(['id' => 15, 'npc_id' => 2, 'story' => 'I told you now call her']);
        DB::table('dialogs')->insert(['id' => 16, 'npc_id' => 2, 'story' => 'I was here with 2 friends called Jeroen and Marieke. I don`t know if they are alive yet']);
        DB::table('dialogs')->insert(['id' => 17, 'npc_id' => 2, 'story' => 'Nothing that is in need for you']);

        #Npc 3
        DB::table('dialogs')->insert(['id' => 18, 'npc_id' => 3, 'story' => 'So what do you need city boy']);
        DB::table('dialogs')->insert(['id' => 19, 'npc_id' => 3, 'story' => 'You dress like a city boy that is why']);
        DB::table('dialogs')->insert(['id' => 20, 'npc_id' => 3, 'story' => 'You got me there... But anything to ask?']);
        DB::table('dialogs')->insert(['id' => 21, 'npc_id' => 3, 'story' => 'I don`t need anything so city boy']);
        DB::table('dialogs')->insert(['id' => 22, 'npc_id' => 3, 'story' => 'Because i hate city boys and don`t like them']);
    }
}
