<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{ 
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Micah Figueroa",
                "phone" => "(175) 897-5654",
                "email" => "vestibulum.ut@aol.net",
                "password" => Hash::make("hPbID53PBJ8Yl"),
                "username" => "Aimee",
                "company" => "Tempor Diam Company",
                "nationality" => "Norway",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Salvador Robles",
                "phone" => "(149) 416-0327",
                "email" => "ut.nec.urna@aol.com",
                "password" => Hash::make("hSfZR22LDE5Js"),
                "username" => "Moana",
                "company" => "Sagittis Felis LLC",
                "nationality" => "Nigeria",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Daphne Solomon",
                "phone" => "(465) 633-1234",
                "email" => "facilisis@hotmail.net",
                "password" => Hash::make("kXwSX24ASJ0Eq"),
                "username" => "Ila",
                "company" => "Non LLP",
                "nationality" => "Philippines",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Inga Dudley",
                "phone" => "(785) 320-8427",
                "email" => "diam.luctus@yahoo.org",
                "password" => Hash::make("oEeJB37YRE5Pp"),
                "username" => "Samson",
                "company" => "Eu PC",
                "nationality" => "India",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Farrah Bartlett",
                "phone" => "1-975-537-1622",
                "email" => "hendrerit.a@google.couk",
                "password" => Hash::make("hMmHQ80SSX3Rv"),
                "username" => "Brynne",
                "company" => "Consectetuer Incorporated",
                "nationality" => "Belgium",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Bethany Martinez",
                "phone" => "(344) 341-3583",
                "email" => "dapibus.quam@outlook.couk",
                "password" => Hash::make("eIqCV98NVL2Ft"),
                "username" => "Dante",
                "company" => "Lorem Vitae Corporation",
                "nationality" => "Australia",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Olga Harmon",
                "phone" => "(535) 736-8745",
                "email" => "vel.venenatis@yahoo.edu",
                "password" => Hash::make("iIsNH42FEK2Gr"),
                "username" => "Louis",
                "company" => "Eu Industries",
                "nationality" => "Peru",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Tiger Oneal",
                "phone" => "1-330-563-3873",
                "email" => "a.auctor.non@aol.org",
                "password" => Hash::make("vXqIF11GSI6Bt"),
                "username" => "Stephanie",
                "company" => "Pellentesque Massa Lobortis Inc.",
                "nationality" => "Austria",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Adria Mcclure",
                "phone" => "1-966-100-7223",
                "email" => "faucibus.ut@protonmail.couk",
                "password" => Hash::make("iHkRY42LBR8Rw"),
                "username" => "Gil",
                "company" => "Egestas Fusce Aliquet Industries",
                "nationality" => "Italy",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Price Watson",
                "phone" => "1-265-555-4354",
                "email" => "sem.egestas@hotmail.org",
                "password" => Hash::make("oUqRC54QPQ7Xl"),
                "username" => "Kylynn",
                "company" => "Donec Ltd",
                "nationality" => "Australia",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Hakeem Gillespie",
                "phone" => "1-824-119-7226",
                "email" => "semper.erat.in@protonmail.ca",
                "password" => Hash::make("uHkGP44PZG1Ki"),
                "username" => "Rowan",
                "company" => "Vulputate Velit Eu Incorporated",
                "nationality" => "Australia",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Laith Tillman",
                "phone" => "(946) 933-3197",
                "email" => "purus.nullam.scelerisque@yahoo.net",
                "password" => Hash::make("hHbMJ30BNT5Ms"),
                "username" => "Uriah",
                "company" => "Gravida Molestie Company",
                "nationality" => "Indonesia",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Dean Clements",
                "phone" => "1-177-836-7163",
                "email" => "facilisis.eget.ipsum@yahoo.com",
                "password" => Hash::make("jKsEU25HAT2Uo"),
                "username" => "Bryar",
                "company" => "Aliquet Vel Vulputate Institute",
                "nationality" => "Poland",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Drew Payne",
                "phone" => "1-964-982-5491",
                "email" => "mauris@hotmail.com",
                "password" => Hash::make("mJbFX15JKQ3Vu"),
                "username" => "Adrian",
                "company" => "Molestie Associates",
                "nationality" => "Norway",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Cora Foreman",
                "phone" => "(533) 823-6188",
                "email" => "eget.ipsum.suspendisse@outlook.edu",
                "password" => Hash::make("hBxGG22QEY8Ge"),
                "username" => "Oscar",
                "company" => "Vivamus Molestie LLP",
                "nationality" => "United States",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Nero Woodard",
                "phone" => "1-756-145-6998",
                "email" => "eu@outlook.ca",
                "password" => Hash::make("wChEM48XRS5Ps"),
                "username" => "Aphrodite",
                "company" => "Vestibulum Foundation",
                "nationality" => "Germany",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Hanae Bond",
                "phone" => "1-853-416-6337",
                "email" => "sem.consequat.nec@protonmail.net",
                "password" => Hash::make("qCsNY75RIM0Li"),
                "username" => "Marah",
                "company" => "Malesuada Consulting",
                "nationality" => "Philippines",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Emery Harrington",
                "phone" => "(750) 611-1035",
                "email" => "ligula@aol.org",
                "password" => Hash::make("iKiWG74WQM2Tn"),
                "username" => "Stephanie",
                "company" => "Euismod Foundation",
                "nationality" => "Colombia",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Mallory Reeves",
                "phone" => "1-655-719-7060",
                "email" => "eleifend.nec@yahoo.com",
                "password" => Hash::make("sIlKI65BEC0Ds"),
                "username" => "Judah",
                "company" => "Aliquam Erat Industries",
                "nationality" => "Colombia",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Cara Arnold",
                "phone" => "1-248-752-1173",
                "email" => "eu.placerat@outlook.couk",
                "password" => Hash::make("dKcOD51TUQ3Aq"),
                "username" => "Maris",
                "company" => "Neque Non Quam Incorporated",
                "nationality" => "Philippines",
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
