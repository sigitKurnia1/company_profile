<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\News;

class MainController extends Controller
{
    public function index()
    {
        $product = Products::all();
        $testimoni = Testimonials::all();
        $project = Project::all();

        $projectCount = Project::count();
        $client = Testimonials::count();
        $productCount = Products::count();

        return view('welcome', compact('product', 'testimoni', 'project', 'projectCount', 'client', 'productCount'));
    }

    public function news()
    {
        $news = News::all();

        return view('guest.news', compact('news'));
    }

    public function detail_news($id)
    {
        $news = News::findOrFail($id);

        return view('guest.detail-news', compact('news'));
    }
}
