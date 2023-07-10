<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
require_once app_path('helpers.php');
use Illuminate\Http\Request;
use DB;

class AnnouncementController extends Controller
{
    public function view_announcements()
    {
        $user = Auth::user();
        $roles = set_user_roles($user->user_id);
    
        $itemsPerPage = 5; // Number of items per page
        $posts = DB::table('post')->get();
        $totalPosts = count($posts);
        $totalPages = ceil($totalPosts / $itemsPerPage); // Calculate total number of pages
        $currentPage = request()->input('page', 1); // Get current page from the query string
        $startIndex = ($currentPage - 1) * $itemsPerPage; // Calculate the starting index for the current page
        $subsetPosts = $posts->slice($startIndex, $itemsPerPage); // Get a subset of posts for the current page
    
        return view('announcement.announcements', compact('subsetPosts', 'totalPages', 'currentPage', 'roles'));
    }
    

}
