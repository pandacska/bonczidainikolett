<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('movies')->insert([
            // Filmek, amelyek az alapadatokat tartalmazzák
            ['title' => 'Inception', 'director' => 'Christopher Nolan', 'release_year' => 2010, 'genre' => 'Sci-Fi'],
            ['title' => 'The Godfather', 'director' => 'Francis Ford Coppola', 'release_year' => 1972, 'genre' => 'Crime'],
            ['title' => 'The Dark Knight', 'director' => 'Christopher Nolan', 'release_year' => 2008, 'genre' => 'Action'],
            ['title' => 'Pulp Fiction', 'director' => 'Quentin Tarantino', 'release_year' => 1994, 'genre' => 'Crime'],
            ['title' => 'The Shawshank Redemption', 'director' => 'Frank Darabont', 'release_year' => 1994, 'genre' => 'Drama'],
            ['title' => 'Forrest Gump', 'director' => 'Robert Zemeckis', 'release_year' => 1994, 'genre' => 'Drama'],
            ['title' => 'The Matrix', 'director' => 'Lana Wachowski, Lilly Wachowski', 'release_year' => 1999, 'genre' => 'Action'],
            ['title' => 'Fight Club', 'director' => 'David Fincher', 'release_year' => 1999, 'genre' => 'Drama'],
            ['title' => 'Interstellar', 'director' => 'Christopher Nolan', 'release_year' => 2014, 'genre' => 'Sci-Fi'],
            ['title' => 'The Lord of the Rings: The Return of the King', 'director' => 'Peter Jackson', 'release_year' => 2003, 'genre' => 'Adventure'],
            ['title' => 'Gladiator', 'director' => 'Ridley Scott', 'release_year' => 2000, 'genre' => 'Action'],
            ['title' => 'Star Wars: Episode IV - A New Hope', 'director' => 'George Lucas', 'release_year' => 1977, 'genre' => 'Sci-Fi'],
            ['title' => 'The Silence of the Lambs', 'director' => 'Jonathan Demme', 'release_year' => 1991, 'genre' => 'Thriller'],
            ['title' => 'Schindler\'s List', 'director' => 'Steven Spielberg', 'release_year' => 1993, 'genre' => 'Biography'],
            ['title' => 'The Usual Suspects', 'director' => 'Bryan Singer', 'release_year' => 1995, 'genre' => 'Crime'],
            ['title' => 'Se7en', 'director' => 'David Fincher', 'release_year' => 1995, 'genre' => 'Thriller'],
            ['title' => 'The Lion King', 'director' => 'Roger Allers, Rob Minkoff', 'release_year' => 1994, 'genre' => 'Animation'],
            ['title' => 'Toy Story', 'director' => 'John Lasseter', 'release_year' => 1995, 'genre' => 'Animation'],
            ['title' => 'The Prestige', 'director' => 'Christopher Nolan', 'release_year' => 2006, 'genre' => 'Mystery'],
            ['title' => 'La La Land', 'director' => 'Damien Chazelle', 'release_year' => 2016, 'genre' => 'Musical'],
            ['title' => 'A Beautiful Mind', 'director' => 'Ron Howard', 'release_year' => 2001, 'genre' => 'Biography'],
            ['title' => 'The Departed', 'director' => 'Martin Scorsese', 'release_year' => 2006, 'genre' => 'Crime'],
            ['title' => 'Whiplash', 'director' => 'Damien Chazelle', 'release_year' => 2014, 'genre' => 'Drama'],
            ['title' => 'The Green Mile', 'director' => 'Frank Darabont', 'release_year' => 1999, 'genre' => 'Drama'],
            ['title' => 'The Intouchables', 'director' => 'Olivier Nakache, Éric Toledano', 'release_year' => 2011, 'genre' => 'Comedy'],
            ['title' => 'Coco', 'director' => 'Lee Unkrich, Adrian Molina', 'release_year' => 2017, 'genre' => 'Animation'],
        ]);
    }
}
