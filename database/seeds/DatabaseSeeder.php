<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Model::unguard();

        $this->call(ContactTableSeeder::class);
        $this->call(MemberTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(PhotoTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(BlogMastaTableSeeder::class);


        Schema::table('photos', function ($table) {
            $table->foreign('event_id')->references('id')->on('events');
        });

        Schema::table('blog_mastas', function ($table) {
            $table->unique('blog_type');
        });
    }
}
