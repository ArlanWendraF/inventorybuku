<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {
        return view('index');
    }

    public function novel()
    {

        $buku = Book::all();
        if ($buku){
            $buku = Book::where("kategori","LIKE","novel")->get();
        }
        return view('Buku.index',compact('buku'));
    }

    public function komik()
    {

        $buku = Book::all();
        if ($buku){
            $buku = Book::where("kategori","LIKE","komik")->get();
        }
        return view('Buku.index',compact('buku'));
    }

    public function biografi()
    {

        $buku = Book::all();
        if ($buku){
            $buku = Book::where("kategori","LIKE","biografi")->get();
        }
        return view('Buku.index',compact('buku'));
    }

    public function kamus()
    {

        $buku = Book::all();
        if ($buku){
            $buku = Book::where("kategori","LIKE","kamus")->get();
        }
        return view('Buku.index',compact('buku'));
    }

    public function ensiklopedia()
    {

        $buku = Book::all();
        if ($buku){
            $buku = Book::where("kategori","LIKE","ensiklopedia")->get();
        }
        return view('Buku.index',compact('buku'));
    }

    public function dongeng()
    {

        $buku = Book::all();
        if ($buku){
            $buku = Book::where("kategori","LIKE","dongeng")->get();
        }
        return view('Buku.index',compact('buku'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->get('cari');
        // $carikategori = $request->get('carikategori');
        $buku = Book::all();
        if ($cari){
            $buku = Book::where("judulbuku","LIKE","%$cari%")->get();
        }

        return view('Buku.index',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate  ([
            'kodebuku'=> 'required|size:5',
            'judulbuku' => 'required',
            'jumlah' => 'required',
        ]);

    Book::create( $request->all());

    return redirect('/daftarbuku')->with('status','Data Berhasil Ditambahkan ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $buku)
    {
        return view('Buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Book $buku)
    {

        $request->validate  ([
            'kodebuku'=> 'required|size:5',
            'judulbuku' => 'required',
            'jumlah' => 'required',
        ]);

        Book::where('id',$buku->id)
                ->update([
                    'kodebuku' => $request->kodebuku,
                    'kategori' => $request->kategori,
                    'judulbuku' => $request->judulbuku,
                    'jumlah' => $request->jumlah,

                ]);
        return redirect('/daftarbuku')->with('status','Data Berhasil Di Ubah ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $buku)
    {
        Book::destroy($buku->id);
        return redirect('/daftarbuku')->with('status','Data Berhasil DiHapus ');
    }
}
