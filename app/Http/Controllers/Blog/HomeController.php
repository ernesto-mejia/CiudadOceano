<?php

namespace App\Http\Controllers\Blog;

use App\Article;
use App\Description;
use App\Http\Controllers\Controller;
use App\NGallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getHome()
    {
        /** Primera sección **/
        $carrousels = DB::table('carousels')->orderBy('id', 'DESC')->where('status', 1)->where('type', 0)->get();
        /** Segunda sección **/
        $video =  DB::table('sections')->where('slug', 'video')->first();

        /** Tercera sección **/

        /** Cuarta sección **/

        /** quinta sección **/
            $galleryInfo =  DB::table('sections')->where('slug', 'galeria')->first();
            $galleries = DB::table('carousels')->orderBy('id', 'DESC')->where('status', 1)->where('type', 1)->get();

        $data = [
                    'carrousels' => $carrousels,
                    'galleries' => $galleries,
                    'galleryInfo' => $galleryInfo,
                    'video' => $video,
                ];

        return view('blog.principal', $data);
    }

    public function getAboutUs($politica)
    {
        $politicas = DB::table('corporate_areas')->orderBy('id', 'DESC')->where('slug', $politica)->get();

        $data = [
                    'politicas' => $politicas

                ];

        return view('blog.sections.politica', $data);
    }

    public function getCategories($category, Request $request)
    {
        $articles = DB::table('articles')->where('module', $category)->where('status', '1')->where('deleted_at', null)->orderBy('id', 'DESC')->get();
        $countArt = count($articles);
        $url = $request->url(); // Obtiene la URL completa
        $lastSegment = strrchr($url, '/'); // Obtiene la última parte después de la última barra
        $lastWord = trim($lastSegment, '/'); // Elimina las barras adicionales al principio o final

        $lastWord; // Esto contendrá la última palabra de la URL
        //dd($lastWord);

        $expos = DB::table('articles')->where('module', 'exhibiciones')->where('status', '1')->where('deleted_at', null)->orderBy('id', 'DESC')->get();


        $data = [
                    'articles' => $articles,
                    'countArt' => $countArt,
                    'section' => $lastWord,
                    'expos' => $expos

                ];

        return view('blog.sections.articles', $data);
    }

    public function getModule($category, $slug)
    {

        $article = DB::table('articles')->orderBy('id', 'DESC')->where('module', $category)->where('slug', $slug)->first();
        $descriptions  = Description::where('article_id', $article->id)->where('type', 'description')->get();
        $videos       = Description::where('article_id', $article->id)->where('type', 'video')->get();

        $imagenes   = NGallery::where('article_id',  $article->id)->whereNull('deleted_at')->get();
            //dd( $article);
        $data = [
                    'post' => $article,
                    'descriptions' => $descriptions,
                    'imagenes' => $imagenes,
                    'videos' => $videos
                ];

        return view('blog.sections.article', $data);


    }
}

