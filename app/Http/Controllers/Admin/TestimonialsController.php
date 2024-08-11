<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Testimonials;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimoni = Testimonials::all();

        confirmDelete('Hapus Testimoni!', 'Apakah anda yakin ingin menghapus testimoni ini?');

        return view('admin.testimonials.index', compact('testimoni'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_name' => 'required',
            'company' => 'required',
            'rating' => 'numeric|required|between:1,10',
            'image_url' => 'required|mimes:png,jpg,jpeg'
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withInput();
        }

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/images/testimonials/', $fileName);
        }

        $testimoni = Testimonials::create([
            'client_name' => $request->client_name,
            'company' => $request->company,
            'rating' => $request->rating,
            'image_url' => $fileName
        ]);

        if ($testimoni) {
            Alert::success('Berhasil!', 'Testimoni berhasil ditambahkan!');
            return redirect()->route('admin.testimoni');
        } else {
            Alert::error('Gagal!', 'Testimoni gagal ditambahkan!');
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $testimoni = Testimonials::findOrFail($id);

        return view('admin.testimonials.update', compact('testimoni'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'client_name' => 'required',
            'company' => 'required',
            'rating' => 'numeric|required',
            'image_url' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withInput();
        }

        $testimoni = Testimonials::findOrFail($id);

        if ($request->hasFile('image_url')) {
            $oldPath = public_path('assets/images/testimonials/' . $testimoni->image_url);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $file = $request->file('image_url');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/images/testimonials/', $fileName);
        } else {
            $fileName = $testimoni->image_url;
        }

        $testimoni->update([
            'client_name' => $request->client_name,
            'company' => $request->company,
            'rating' => $request->rating,
            'image_url' => $fileName
        ]);

        if ($testimoni) {
            Alert::success('Berhasil!', 'Data testimoni berhasil diperbarui!');
            return redirect()->route('admin.testimoni');
        } else {
            Alert::error('Gagal!', 'Data testimoni gagal diperbarui!');
            return redirect()->back()->withInput();
        }
    }

    public function delete($id)
    {
        $testimoni = Testimonials::findOrFail($id);

        $oldPath = public_path('assets/images/testimonials/' . $testimoni->image_url);
        if (File::exists($oldPath)) {
            File::delete($oldPath);
        }

        $testimoni->delete();

        if ($testimoni) {
            Alert::success('Berhasil!','Data testimoni berhasil dihapus!');
            return redirect()->back();
        } else {
            Alert::error('Gagal!', 'Data testimoni gagal dihapus!');
            return redirect()->back();
        }
    }

    public function detail($id)
    {
        $testimoni = Testimonials::findOrFail($id);

        return view('admin.testimonials.detail', compact('testimoni'));
    }
}
