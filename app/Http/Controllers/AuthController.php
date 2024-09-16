<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\Destination;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Product;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $destinations = Destination::all()->take(3);
        $tickets = Ticket::all()->take(3);
        $aparatur = Aparatur::all();
        $news = News::latest()->take(3)->get();
        return view('landing', compact('destinations', 'tickets', 'aparatur', 'news'));
    }
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect ke halaman yang diinginkan setelah login berhasil
            return redirect()->intended('/admin/dashboard');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return redirect('/login')->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function register()
    {
        return view('register');
    }

    // Destination
    public function destination()
    {
        $destination = Destination::all();
        return view('destination', compact('destination'));
    }

    public function destinationDetail($slug)
    {
        $destination = Destination::where('slug', $slug)->first();
        return view('destination-detail', compact('destination'));
    }

    // Article
    public function news()
    {
        $news = News::all();
        return view('news', compact('news'));
    }

    public function newsDetail($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('newsDetail', compact('news'));
    }

    // Galery
    public function gallery()
    {
        $vidio = Gallery::where('type', 'video')->get();
        $image = Gallery::where('type', 'image')->get();
        return view('gallery', compact('vidio', 'image'));
    }

    // Product
    public function product()
    {
        $product = Product::all();
        return view('product', compact('product'));
    }
    public function productShow($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('product-detail', compact('product'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function ticket()
    {
        $tickets = Ticket::all();
        return view('ticket', compact('tickets'));
    }

}
