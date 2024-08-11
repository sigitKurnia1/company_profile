<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();

        confirmDelete('Hapus Product!', 'Apakah anda yakin ingin menghapus data ini?');

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'image_url' => 'required',
            'category' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastika semua terisi dengan benar!');
            return redirect()->back()->withInput();
        }

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/images/product/', $fileName);
        }

        $products = Products::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => $fileName,
            'category' => $request->category
        ]);

        if ($products) {
            Alert::success('Berhasil!', 'Produk berhasil ditambahkan!');
            return redirect()->route('admin.product');
        }
    }

    public function edit($id)
    {
        $products = Products::findOrFail($id);

        return view('admin.product.update', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'image_url' => 'nullable|mimes:png,jpg,jpeg',
            'category'=> 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back();
        }

        $products = Products::findOrFail($id);

        if ($request->hasFile('image_url')) {
            $oldPath = public_path('assets/images/product/' . $products->image_url);
            if (File::exists($oldPath)) {
                $file = $request->file($oldPath);
            }
            
            $file = $request->file('image_url');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/images/product/', $fileName);
        } else {
            $fileName = $products->image_url;
        }

        $products->update([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => $fileName,
            'category' => $request->category
        ]);

        if ($products) {
            Alert::success('Berhasil!', 'Data produk berhasil diperbarui!');
            return redirect()->route('admin.product');
        } else {
            Alert::error('Gagal!', 'Data produk gagal diperbarui!');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $products = Products::findOrFail($id);

        $oldPath = public_path('assets/images/product/' . $products->image_url);
        if (File::exists($oldPath)) {
            File::delete($oldPath);
        }

        $products->delete();

        if ($products) {
            Alert::success('Berhasil!', 'Data produk berhasil dihapus!');
            return redirect()->back();
        } else {
            Alert::error('Gagal!', 'Data produk gagal dihapus!');
            return redirect()->back();
        }
    }

    public function detail($id)
    {
        $products = Products::findOrFail($id);

        return view('admin.product.detail', compact('products'));
    }
}
