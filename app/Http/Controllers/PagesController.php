<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function about() {
        return view('pages.about');
    }

    public function search() {
        return view('pages.search');
    }

    public function jobPost() {
        return view('pages.jobPost');
    }

    public function apply() {
        return view('pages.apply');
    }

    public function talents() {
        return view('pages.talents');
    }

    public function companyOverview() {
        return view('pages.companyOverview');
    }

    public function companyProfile() {
        return view('pages.companyProfile');
    }

    public function signup() {
        return view('pages.signup');
    }

   
    public function jobs() {
        return view('pages.jobs');
    }
}
