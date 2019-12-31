<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    		// DatabaseSeeder::truncateTable('members');
    		DB::table('members')->truncate();

    		$members = [];
    		$now = \Carbon\Carbon::now();
    		for ($i = 1; $i <= 10; $i++) {
    			$members[] = [
    				'name' => 'auth' . $i,
    				'email' => 'abc' . $i . '@ggmail.ccomm',
    				'camera' => 'ks-' . $i,
    				'camera_reki' => $i,
    			];
    		}

    		foreach ($members as $i => $member) {
    			$member['created_at'] = $now;
    			$member['updated_at'] = $now;
    			DB::table('members')->insert($member);
    		}

    		for ($i = 11; $i <= 20; $i++) {
    			/*
    			\App\Member::create([
    				'name' => 'mem' . $i,
    				'email' => 'def' . $i . '@ggmail.ccomm',
    				'camera' => 'ks2-' . $i,
    				'camera_reki' => $i + 20,
    			]);
    			*/
    		}
    }
}
