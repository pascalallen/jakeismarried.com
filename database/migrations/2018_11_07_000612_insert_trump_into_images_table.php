<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Image;

class InsertTrumpIntoImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $image = new Image();
        $image->slug = 'unflaterring-trump';
        $image->imgur_id = 'vNdklbb';
        $image->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Image::where('slug', 'unflattering-trump')->delete();
    }
}
