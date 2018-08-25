<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class InsertIntoImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('images')->insert([
            ['name' => '', 'description' => '', 'imgur_id' => 'koxXBIO', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'y02mS3t', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'frKvJUI', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'lNlqIJm', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'W7pr8qS', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'bCHHR1T', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => '5EESC6X', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'OfSb9Py', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'Q2XoUkT', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'BIuuhaG', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'BSlW1RM', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'WP97ODB', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'iMDa38G', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'LlrMGlu', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'ArbZtoI', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'UNnj0OL', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'vuiFywG', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'ifrMdWm', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'BTWtPlB', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'Wjd3KcJ', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'iRSyQHd', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => '1WLcq6E', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('images')->where([
            ['name' => '', 'description' => '', 'imgur_id' => 'koxXBIO', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'y02mS3t', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'frKvJUI', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'lNlqIJm', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'W7pr8qS', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'bCHHR1T', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => '5EESC6X', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'OfSb9Py', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'Q2XoUkT', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'BIuuhaG', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'BSlW1RM', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'WP97ODB', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'iMDa38G', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'LlrMGlu', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'ArbZtoI', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'UNnj0OL', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'vuiFywG', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'ifrMdWm', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'BTWtPlB', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'Wjd3KcJ', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => 'iRSyQHd', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '', 'description' => '', 'imgur_id' => '1WLcq6E', 'category_id' => 1, 'slug' => '', 'main' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ])->delete();
    }
}
