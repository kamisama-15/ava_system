<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function view_announcements(){


        return view('announcement.announcements');
    }
}
