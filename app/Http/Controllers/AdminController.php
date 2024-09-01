<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function destination()
    {
        $destinations = Destination::latest()->get();
        return view('admin.destination', compact('destinations'));
    }

    public function destinationCreate()
    {
        return view('admin.destination-create');
    }

    public function destinationStore(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'short_description' => 'required',
            'content' => 'required',
            'video' => 'mimes:mp4,avi,mkv,webm|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Menggunakan storage untuk menyimpan gambar
            $image->storeAs('destination', $imageName, 'public');
        }
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $video->storeAs('destination', $videoName, 'public');
        }

        $destination = new Destination();
        $destination->image = $imageName; // Menyimpan nama gambar ke model
        $destination->name = $request->name;
        $destination->short_description = $request->short_description;
        $destination->content = $request->content;
        $destination->save();
        return redirect()->route('admin.destination');
    }

    public function destinationEdit($id)
    {
        $destination = Destination::find($id);
        return view('admin.destination-edit', compact('destination'));
    }

    public function destinationUpdate(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'short_description' => 'required',
            'content' => 'required',
        ]);

        $destination = Destination::find($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Menggunakan storage untuk menyimpan gambar
            $image->storeAs('destination', $imageName, 'public');
            $destination->image = $imageName;
        }
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $video->storeAs('destination', $videoName, 'public');
            $destination->video = $videoName;
        }


        $destination->name = $request->name;
        $destination->short_description = $request->short_description;
        $destination->content = $request->content;
        $destination->save();
        return redirect()->route('admin.destination');
    }

    public function destinationDestroy($id)
    {
        $destination = Destination::find($id);
        $destination->delete();
        return redirect()->route('admin.destination');
    }

    // Gallery
    public function gallery()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.gallery', compact('galleries'));
    }

    public function galleryCreate()
    {
        return view('admin.gallery-create');
    }

    public function galleryStore(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,svg,mp4,avi,mkv,webm|max:50000',
        ]);
        // Mengganti logika untuk menentukan jenis file
        $mimeType = $request->file('file')->getClientMimeType();
        if (strpos($mimeType, 'image/') === 0) {
            $jenis = 'image';
        } elseif (strpos($mimeType, 'video/') === 0) {
            $jenis = 'video';
        } else {
            // Tangani kasus jika bukan gambar atau video
            return redirect()->back()->withErrors(['file' => 'File harus berupa gambar atau video.']);
        }
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('gallery', $fileName, 'public');
        }

        $gallery = new Gallery();
        $gallery->file = $fileName;
        $gallery->type = $jenis;
        $gallery->save();
        return redirect()->route('admin.gallery');
    }
    public function galleryDestroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->route('admin.gallery');
    }

    // News
    public function news()
    {
        $news = News::latest()->get();
        return view('admin.news', compact('news'));
    }

    public function newsCreate()
    {
        return view('admin.news-create');
    }

    public function newsStore(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'author' => 'required',
            'status' => 'required',
            'content' => 'required',
            'video' => 'mimes:mp4,avi,mkv,webm',
        ]);
        $news = new News();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('news', $imageName, 'public');
        }
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $video->storeAs('news', $videoName, 'public');
            $news->video = $videoName;
        }
        $news->slug = Str::slug($request->title);
        $news->image = $imageName;
        $news->title = $request->title;
        $news->author = $request->author;
        $news->status = $request->status;
        $news->content = $request->content;
        $news->save();
        return redirect()->route('admin.news')->with('success', 'News & Article created successfully');
    }
    public function newsEdit($id)
    {
        $news = News::find($id);
        return view('admin.news-edit', compact('news'));
    }

    public function newsUpdate(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'author' => 'required',
            'status' => 'required',
            'content' => 'required',
            'video' => 'mimes:mp4,avi,mkv,webm',
        ]);

        $news = News::find($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('news', $imageName, 'public');
            $news->image = $imageName;
        }
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $video->storeAs('news', $videoName, 'public');
            $news->video = $videoName;
        }
        $news->slug = Str::slug($request->title);
        $news->title = $request->title;
        $news->author = $request->author;
        $news->status = $request->status;
        $news->content = $request->content;
        $news->save();
        return redirect()->route('admin.news')->with('success', 'News & Article updated successfully');
    }
    public function newsDestroy($id)
    {
        $news = News::find($id);
        $photo = $news->image;
        $video = $news->video;
        Storage::delete('public/news/' . $photo);
        Storage::delete('public/news/' . $video);
        $news->delete();

        return redirect()->route('admin.news')->with('success', 'News & Article deleted successfully');
    }

    // product
    public function product()
    {
        $products = Product::latest()->get();
        return view('admin.product', compact('products'));
    }
    public function productCreate()
    {
        return view('admin.product-create');
    }

    public function productStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);
        $product = new Product();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('product', $imageName, 'public');
            $product->image = $imageName;
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('admin.product')->with('success', 'Product created successfully');
    }
    public function productEdit($id)
    {
        $product = Product::find($id);
        return view('admin.product-edit', compact('product'));
    }

    public function productUpdate(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);
        $product = Product::find($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('product', $imageName, 'public');
            $product->image = $imageName;
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('admin.product')->with('success', 'Product updated successfully');
    }
    public function productDestroy($id)
    {
        $product = Product::find($id);
        $photo = $product->image;
        Storage::delete('public/product/' . $photo);
        $product->delete();
        return redirect()->route('admin.product')->with('success', 'Product deleted successfully');
    }
}
