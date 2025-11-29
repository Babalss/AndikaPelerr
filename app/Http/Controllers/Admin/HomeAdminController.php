<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeAdminController extends Controller
{
    public function edit()
    {
        $home = HomeContent::first();
        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request)
    {
        $home = HomeContent::first();

        $data = $request->validate([
            'hero_title'      => 'nullable|string|max:255',
            'hero_text'       => 'nullable|string',
            'hero_button'     => 'nullable|string|max:100',
            'section2_title'  => 'nullable|string|max:255',
            'section2_text'   => 'nullable|string',
            'section2_button' => 'nullable|string|max:100',

            'carousel_1'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'carousel_2'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'carousel_3'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'section2_image'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // helper kecil untuk handle upload
        $uploadImage = function ($field) use (&$data, $home, $request) {
            if ($request->hasFile($field)) {
                // hapus lama kalau ada
                if ($home && $home->{$field} && Storage::disk('public')->exists('images/'.$home->{$field})) {
                    Storage::disk('public')->delete('images/'.$home->{$field});
                }

                $file = $request->file($field);
                $filename = time().'_'.$field.'_'.$file->getClientOriginalName();
                $file->storeAs('images', $filename, 'public');
                $data[$field] = $filename;
            }
        };

        foreach (['carousel_1', 'carousel_2', 'carousel_3', 'section2_image'] as $field) {
            $uploadImage($field);
        }

        if ($home) {
            $home->update($data);
        } else {
            $home = HomeContent::create($data);
        }

        return redirect()
            ->route('admin.home')
            ->with('success', 'Home berhasil diperbarui.');
    }

    public function destroy()
{
    $home = HomeContent::first();

    if ($home) {
        // hapus semua gambar kalau ada
        foreach (['carousel_1', 'carousel_2', 'carousel_3', 'section2_image'] as $field) {
            if ($home->{$field} && Storage::disk('public')->exists('images/'.$home->{$field})) {
                Storage::disk('public')->delete('images/'.$home->{$field});
            }
        }

        $home->delete();
    }

    return redirect()
        ->route('admin.home')
        ->with('success', 'Konten Home berhasil dihapus.');
}

}

