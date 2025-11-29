<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutMeAdminController extends Controller
{
    public function edit()
    {
        $about = AboutMe::first();

        return view('admin.aboutme.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $about = AboutMe::first();

        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'nbi'         => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // handle upload foto
        if ($request->hasFile('photo')) {
            // optional: hapus foto lama
            if ($about && $about->photo && Storage::disk('public')->exists('images/'.$about->photo)) {
                Storage::disk('public')->delete('images/'.$about->photo);
            }

            $file = $request->file('photo');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->storeAs('images', $filename, 'public');
            $data['photo'] = $filename;
        }

        if ($about) {
            $about->update($data);
        } else {
            $about = AboutMe::create($data);
        }

        return redirect()
            ->route('admin.aboutme')
            ->with('success', 'Profil berhasil diperbarui.');
    }

    public function destroy()
{
    $about = AboutMe::first();

    if ($about) {
        // hapus foto dari storage kalau ada
        if ($about->photo && Storage::disk('public')->exists('images/'.$about->photo)) {
            Storage::disk('public')->delete('images/'.$about->photo);
        }

        $about->delete();
    }

    return redirect()
        ->route('admin.aboutme')
        ->with('success', 'Profil berhasil dihapus.');
}

}

