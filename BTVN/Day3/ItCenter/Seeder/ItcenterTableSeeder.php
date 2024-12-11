<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Illuminate\Support\Facades\DB;

    class ItcenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
            for ($i = 0; $i < 10; $i++) {
                DB::table('it_centers')->insert([
                'name' => $faker->name,
                'location' => $faker->address,
                'contact_email' => $faker->unique()->email
            ]);
        }
    }
}
