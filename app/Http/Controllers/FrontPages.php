<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPages extends Controller
{
        public function home(){
            $title = "Home";
            return view ('home', compact('title'));
        }
        public function about(){
            $title = "About";
            return view ('about', compact('title'));
        }

        public function call(){
            $title = "Call";
            return view ('call', compact('title'));
        }
        public function classes(){
            $title = "Classes";
            return view ('classes', compact('title'));
        }
        public function error(){
            $title = "404error";
            return view ('error', compact('title'));
        }

        public function contact(){
            $title = "Contact";
            return view ('contact', compact('title'));
        }

        public function facilities(){
            $title = "Facilities";
            return view ('facilities', compact('title'));
        }


        public function appointment(){
            $title = "Appointment";
            return view ('appointment', compact('title'));
        }

        public function team(){
            $title = "Team";
            return view ('team', compact('title'));
        }

        public function testimonial(){
            $title = "Testimonial";
            return view ('testimonial', compact('title'));
        }
}



