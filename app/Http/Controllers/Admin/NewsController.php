<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        foreach ($news as $item) {
            $item->event_date = Carbon::parse($item->event_date)->translatedFormat('d F Y');
        }

        confirmDelete('Hapus Berita!', 'Apakah anda yakin ingin menghapus data ini?');

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'image_url' => 'required|mimes:jpg,jpeg,png',
            'event_date' => 'required|date',
            'author' => 'required',
            'category' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withInput();
        }

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/images/news/', $fileName);
        }

        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image_url' => $fileName,
            'event_date' => $request->event_date,
            'author' => $request->author,
            'category'=> $request->category,
        ]);

        if ($news) {
            Alert::success('Berhasil!','Berita berhasil ditambahkan!');
            return redirect()->route('admin.news');
        } else {
            Alert::error('Gagal!', 'Berita gagal ditambahkan!');
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);

        $news->event_date = Carbon::parse($news->event_date)->translatedFormat('Y/m/d');

        return view('admin.news.update', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'image_url' => 'nullable|mimes:jpg,jpeg,png',
            'event_date' => 'required|date',
            'author' => 'required',
            'category' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withInput();
        }

        $news = News::findOrFail($id);

        if ($request->hasFile('image_url')) {
            $oldPath = public_path('assets/images/news/' . $news->image_url);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $file = $request->file('image_url');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/images/news/', $fileName);
        } else {
            $fileName = $news->image_url;
        }

        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'image_url' => $fileName,
            'event_date' => $request->event_date,
            'author' => $request->author,
            'category'=> $request->category,
        ]);

        if ($news) {
            Alert::success('Berhasil!', 'Data berita berhasil diperbarui!');
            return redirect()->route('admin.news');
        } else {
            Alert::error('Gagal!', 'Data berita gagal diperbarui!');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $news = News::findOrFail($id);

        $oldPath = public_path('assets/images/news/' . $news->image_url);
        if (File::exists($oldPath)) {
            File::delete($oldPath);
        }

        $news->delete();

        if ($news) {
            Alert::success('Berhasil!','Data berita berhasil dihapus!');
            return redirect()->back();
        } else {
            Alert::error('Gagal!', 'Data berita gagal dihapus!');
            return redirect()->back();
        }
    }

    public function detail($id)
    {
        $news = News::findOrFail($id);

        $news->event_date = Carbon::parse($news->event_date)->translatedFormat('d F Y');

        return view('admin.news.detail', compact('news'));
    }
}
