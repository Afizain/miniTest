<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ArtikelController extends Controller
{
    public function show()
    {
        $articles = DB::table('tb_artikel')->orderby('id', 'desc')->get();
        return view('show', ['articles'=>$articles]);
    }
    public function add()
    {
        return view('add');
    }
    public function add_process(Request $article)
    {
        $current_date = date('Y-m-d');
        DB::table('tb_artikel')->insert([
            'judul_artikel'=>$article->judul_artikel,
            'isi_artikel'=>$article->isi_artikel,
            'tanggal'=>$current_date
        ]);
 
        return redirect()->action('ArtikelController@show');
    }
    public function detail($id)
    {
        $articles = DB::table('tb_artikel')->where('id', $id)->first();
        return view('detail', ['article'=>$articles]);
    }
    public function show_by_penulis()
    {
        $articles = DB::table('tb_artikel')->orderby('id', 'desc')->get();
        return view('penulisshow', ['article'=>$articles]);
    }
    public function edit($id)
    {
        $articles = DB::table('tb_artikel')->where('id', $id)->first();
        return view('edit', ['article'=>$articles]);
        
    }
    public function edit_process(Request $article)
    {
        // $id = $article->id;
        // $judul = $article->judul_artikel;
        // $isi = $article->isi_artikel;
        DB::table('tb_artikel')->where('id', $article->id)
                            ->update(['judul_artikel' => $article->judul_artikel, 'isi_artikel' => $article->isi_artikel]);
        Session::flash('success', 'Artikel berhasil diedit');
        return redirect()->action('ArtikelController@show_by_penulis');
    }
    public function delete($id)
    {
        //menghapus artikel dengan ID sesuai pada URL
        DB::table('tb_artikel')->where('id', $id)
                            ->delete();
 
        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus
        Session::flash('success', 'Artikel berhasil dihapus');
        return redirect()->action('ArtikelController@show_by_penulis');
    }
}