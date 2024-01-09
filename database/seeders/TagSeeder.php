<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tags = [
            // Bahasa Pemrograman
            'PHP', 'JavaScript', 'Python', 'Java', 'C', 'C++', 'C#', 'Swift', 'Kotlin', 'Objective-C',
            'Ruby', 'Go', 'Rust', 'TypeScript', 'Dart', 'Scala', 'Perl', 'Haskell', 'Lua', 'Shell',

            // Framework untuk Bahasa Pemrograman
            'Laravel', 'ReactJS', 'Angular', 'Vue.js', 'Express.js',
            'Django', 'Flask', 'Spring', 'Ruby on Rails', 'Sinatra', 'ASP.NET', 'Node.js', 'Meteor',
            'Symfony', 'Yii', 'CodeIgniter', 'Zend', 'Phalcon', 'Slim', 'Rails', 'Hanami', 'Padrino',

            // Database
            'MySQL', 'PostgreSQL', 'MongoDB', 'Redis', 'SQLite', 'MariaDB',

            // Frontend
            'HTML', 'CSS', 'Sass', 'Less', 'Bootstrap', 'Tailwind CSS', 'Materialize', 'Bulma',

            // Mobile
            'React Native', 'Flutter', 'Xamarin', 'Ionic', 'PhoneGap', 'Cordova',

            // Testing
            'PHPUnit', 'Jasmine', 'Mocha', 'Cypress', 'Selenium',

            // Cloud
            'AWS', 'Azure', 'Google Cloud', 'Heroku', 'DigitalOcean',

            // Containerization & Orchestration
            'Docker', 'Kubernetes',

            // DevOps
            'Jenkins', 'Travis CI', 'CircleCI', 'GitLab CI',

            // Game Development
            'Unity', 'Unreal Engine',

            // IoT
            'Raspberry Pi', 'Arduino',
        ];

        foreach ($tags as $tag) {
            Tag::create(['name' => $tag]);
        }
    }
}
