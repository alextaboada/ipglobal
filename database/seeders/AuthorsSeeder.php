<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Author;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/')->json();
        foreach ($response as $author) {
            Author::create([
                'id' => $author['id'],
                'name' => $author['name'],
                'email' => $author['email'],
                'street' => $author['address']['street'],
                'suite' => $author['address']['suite'],
                'city' => $author['address']['city'],
                'zipcode' => $author['address']['zipcode'],
                'lat' => $author['address']['geo']['lat'],
                'lng' => $author['address']['geo']['lng'],
                'phone' => $author['phone'],
                'website' => $author['website'],
                'company_name' => $author['company']['name'],
                'catchPhrase' => $author['company']['catchPhrase'],
                'bs' => $author['company']['bs'],
            ]);
        }
    }
}
