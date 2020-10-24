<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\View;
use App\Services\BlogService;
use App\Libs\Breadcrumbs;

class BlogController extends Controller
{
    private $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index() :\Illuminate\View\View
    {
        $pagination = $this->blogService->list();
        $data = [
            'pagination' => $pagination,
        ];
        return view('index', $data);
    }

    public function detail(int $id) :\Illuminate\View\View
    {
        $request = $this->blogService->detail($id);
        $category = collect($request->add_category)->first()->toArray();
        Breadcrumbs::push($category['title'], route('category', $category['id']));
        Breadcrumbs::push($request->title);
        $data = [
            'result' => $request,
            'Breadcrumbs' => Breadcrumbs::get()
        ];
        return view('detail', $data);
    }
}
