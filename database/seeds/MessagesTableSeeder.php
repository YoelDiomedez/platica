<?php

use App\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
            'from_id' => 1,
            'to_id'   => 2,
            'content' => 'Hey!, How r u?'
        ]);
        
        Message::create([
            'from_id' => 2,
            'to_id'   => 1, 
            'content' => 'Fine, thanks'
        ]);

        Message::create([
            'from_id' => 1,
            'to_id'   => 3,
            'content' => 'Hi, how u doing?'
        ]);
        
        Message::create([
            'from_id' => 3,
            'to_id'   => 1, 
            'content' => 'Hi, nothing. What about you?'
        ]);
    }
}
