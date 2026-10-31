<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UploadFile;

class UploadController extends Controller
{
    public function index()
    {
        $UploadFile = UploadFile::get();

        return view("upload-image", compact("UploadFile"));
    }
    public function edit(string $id)
    {
        $image = UploadFile::find($id);

        return view("edit-upload-image", compact("image"));
    }


    public function update(Request $request, string $id)
    {
        $UploadFile = UploadFile::find($id);
        if ($request->image) {
            // remove old image
            $path = public_path("storage/") . $UploadFile->file_path;
            if (file_exists($path)) {
                // delete the  image from local/server
                @unlink($path);
            }

            $newfilePath = $request->image->store("images", "public");
            $UploadFile->file_path = $newfilePath;
            $UploadFile->save();

            return redirect()->route("uploads.index")->with("success","Image Updated Successfully");
        }
    }

    public function store(Request $request)
    {
        $file = $request->file('image');

        $request->validate([
            "image" => "required|mimes:jpg,jpeg,png |max:5000"
        ]);

        //    $fileName=time()."_".$file->getClientOriginalName();

        // $extension= $file->getSize();
        // // $extension= $file->getClientOriginalExtension();
        // return $extension;

        // $filePath = $request->file("image")->store("images", "public");

        $file->move(public_path("uploads"));

        UploadFile::create([
            "file_path" => $filePath
        ]);


        return redirect()->route('uploads.index')->with("success", "Image Uploaded Successfully");
    }

    public function destroy(string $id)
    {

        $file = UploadFile::find($id);
        $path = public_path("storage/") . $file->file_path;
        if (file_exists($path)) {
            // delete the  image from local/server
            @unlink($path);
        }
        $file->delete();
        return redirect()->route('uploads.index')->with("success", "Image Deleted Successfully");
    }
}
