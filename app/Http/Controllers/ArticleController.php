<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $this->param['getAllArtikel'] = Article::all();
            $this->param['getAllTag'] = Tag::all();
            return view('admin.pages.artikel.page-list-artikel', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'title' => 'required|min:5|max:150',
            'description' => 'required|min:10',
        ],
        [
            'required' => ':attribute harus diisi.',
            'title.min' => 'Minimal panjang karakter 5.',
            'title.max' => 'Maksimal panjang karakter 150.',
            'description.min' => 'Minimal panjang karakter 10.',
        ],
        [
            'title' => 'Judul',
            'description' => 'Deskripsi'
        ]);

        try {
            $date = date('H-i-s');
            $random = \Str::random(5);
            if ($request->file('thumbnail')) {
                $request->file('thumbnail')->move('assets/upload/artikel', $date.$random.$request->file('thumbnail')->getClientOriginalName());
                $thumbnail = $date.$random.$request->file('thumbnail')->getClientOriginalName();
            } else {
                $thumbnail = "default.png";
            }
            
            $artikel = Article::create([
                'title' => $request->title,
                'slug' => \Str::slug($request->title),
                'description' => $request->description,
                'thumbnail' => $thumbnail
            ]);

            $artikel->tags()->attach($request->tags);
            
            return redirect('/artikel')->withStatus('Berhasil menambah data.');

        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        try {
            $this->param['getAllTag'] = Tag::all();
            $this->param['getDetailArtikel'] = Article::find($article->id);
            $this->param['tag_name'] = [];
            foreach (Article::find($article->id)->tags as $tag) {
                array_push($this->param['tag_name'], $tag->name);
            }
            $this->param['article_tag'] = (Article::find($article->id)->tags);
            return view('admin.pages.artikel.page-edit-artikel', $this->param);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->validate($request,
        [
            'title' => 'required',
            'description' => 'required',
        ],
        [
            'required' => ':attribute harus diisi.'
        ],
        [
            'title' => 'Judul',
            'description' => 'Deskripsi'
        ]);

        try {
            $date = date('H-i-s');
            $random = \Str::random(5);

            $article = Article::findorfail($article->id);

            if ($request->has('thumbnail')) {
                $thumbnail = $request->thumbnail;
                $new_thumbnail = time().$thumbnail->getClientOriginalName();
                $thumbnail->move('assets/upload/artikel', $new_thumbnail);
                
                $article_data = [
                    'title' => $request->title,
                    'slug' => \Str::slug($request->title),
                    'description' => $request->description,
                    'thumbnail' => $new_thumbnail
                ];
            } else {
                $article_data = [
                    'title' => $request->title,
                    'slug' => \Str::slug($request->title),
                    'description' => $request->description,
                ];
                
            }
            $article->tags()->sync($request->tags);
            $article->update($article_data);
            
            return redirect('/artikel')->withStatus('Berhasil memperbarui data.');

        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        try {
            Article::find($article->id)->delete();
            return redirect('/artikel')->withStatus('Berhasil menghapus data.');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
