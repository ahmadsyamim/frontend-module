<?php

namespace Modules\Frontend\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FrontendDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([
            BlogPostsTableSeeder::class,
            PagesTableSeeder::class,
        ]);
    }
}
