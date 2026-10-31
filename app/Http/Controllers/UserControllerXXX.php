<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\UserFile;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $userFile = UserFile::get();
        return view("file-upload", compact('userFile'));
        //  $users =User::find(2)->delete();
        //  Post::where("user_id",4)->delete();
        //  return $users;
    }

    public function create(Request $request) {
        
    }

    public function store(Request $request)
    {

        $file = $request->file("image");
        // dd($file);
        $request->validate([
            "image" => "required|mimes:jpg,jpeg,png|max:5000"
        ]);

        $fileName = time() . "_" . $file->getClientOriginalName();
        $filePath = $request->file('image')->store("image", "public");
        //  $filePath=$request->file('image')->storeAs("image", $fileName,"public");

        UserFile::create([
            "file_path" => $filePath
        ]);

        return redirect()->route("show")->with("success", "Image Uploaded Successfully");
    }

    // Show edit form
    public function edit(string $id)
    {
        $image = UserFile::find($id);
        return view('edit-file-upload', compact('image'));
    }
    public function update(Request $request, string $id)
    {

        $userFile = UserFile::find($id);
        if ($request->image) {

            // remove old files
            $path = public_path("storage/") . $userFile->file_path;
            if (file_exists($path)) {
                // Delete the physical image file
                @unlink($path);
            }

            $filePath = $request->image->store("image", "public");
            $userFile->file_path = $filePath;
            $userFile->save();
        }

        return redirect()
            ->route('show')
            ->with('success', 'Image updated successfully!');
    }

    // Delete image
    public function destroy(string $id)
    {
        $file = UserFile::find($id);
        $filePath = public_path("storage/") . $file->file_path;
        if (file_exists($filePath)) {
            // Delete the physical image file
            @unlink($filePath);
        }
        // Delete the database record
        $file->delete();
        return redirect()
            ->route('show')
            ->with('success', 'Image deleted successfully!');
    }
}
