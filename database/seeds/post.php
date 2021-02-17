<?php

use Illuminate\Database\Seeder;
use App\post;
class postSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            for($i=0;$i<10;$i++){
                $data = new post;
                $data->title="This Title From Text Test".$i;
                $data->content="this Content From Text Test".$i;
                $data->status="active";
                $data->user_id=1;
                $data->save();
            }

    }
}
