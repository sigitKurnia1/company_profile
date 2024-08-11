<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();

        foreach ($project as $item) {
            $item->project_date = Carbon::parse($item->project_date)->translatedFormat('d F Y');
        }

        confirmDelete('Hapus Project!', 'Apakah anda yakin ingin menghapus data ini?');

        return view('admin.project.index', compact('project'));
    }

    public function create()
    {
        return view('admin.project.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'client_name' => 'required',
            'project_date' => 'required|date',
            'image_url' => 'required|mimes:png,jpg,jpeg'
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withInput();
        }

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/images/project/', $fileName);
        }

        $project = Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'client_name' => $request->client_name,
            'project_date' => $request->project_date,
            'image_url' => $fileName
        ]);

        if ($project) {
            Alert::success('Berhasil!', 'Project berhasil ditambahkan!');
            return redirect()->route('admin.project');
        } else {
            Alert::error('Gagal!','Project gagal ditambahkan!');
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        $project->project_date = Carbon::parse($project->project_date)->translatedFormat('Y/m/d');

        return view('admin.project.update', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'client_name' => 'required',
            'project_date' => 'required|date',
            'image_url' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back();
        }

        $project = Project::findOrFail($id);

        if ($request->hasFile('image_url')) {
            $oldPath = public_path('assets/images/project/' . $project->image_url);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $file = $request->file('image_url');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/images/project/', $fileName);
        } else {
            $fileName = $project->image_url;
        }

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'client_name' => $request->client_name,
            'project_date' => $request->project_date,
            'image_url' => $fileName
        ]);

        if ($project) {
            Alert::success('Berhasil!','Data project berhasil diperbarui!');
            return redirect()->route('admin.project');
        } else {
            Alert::error('Gagal!', 'Data project gagal diperbarui!');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $project = Project::findOrFail($id);

        $oldPath = public_path('assets/images/project/' . $project->image_url);
        if (File::exists($oldPath)) {
            File::delete($oldPath);
        }

        $project->delete();

        if ($project) {
            Alert::success('Berhasil!', 'Data project berhasil dihapus!');
            return redirect()->back();
        } else {
            Alert::error('Gagal!', 'Data projectt gagal dihapus!');
            return redirect()->bacl();
        }
    }

    public function detail($id)
    {
        $project = Project::findOrFail($id);

        return view('admin.project.detail', compact('project'));
    }
}
