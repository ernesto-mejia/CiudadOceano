<?php

namespace App\Http\Controllers\Blog;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



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

    public function getCategories($category)
    {
        switch ($category) :
            case 'articulos':
                $articles = DB::table('articles')->where('module', $category)->orderBy('id', 'DESC')->get();
            break;
            case 'campaña':
                $articles = DB::table('articles')->where('module', $category)->orderBy('id', 'DESC')->get();
            break;
            case 'exhibiciones':
                $articles = DB::table('articles')->where('module', $category)->orderBy('id', 'DESC')->get();
            break;
            case 'reciclaje':
                $articles = DB::table('articles')->where('module', $category)->orderBy('id', 'DESC')->get();
            break;
            case 'comunidad':
                $articles = DB::table('articles')->where('module', $category)->orderBy('id', 'DESC')->get();
            break;
        endswitch;


        $data = [
                    'articles' => $articles

                ];

        return view('blog.sections.articles', $data);
    }

    public function getModule($category, $slug )
    {

        if($category == 'articulos'):
            $article = DB::table('articles')->orderBy('id', 'DESC')->where('module', $category)->where('slug', $slug)->first();

        elseif($category == 'campaña'):
            $article = DB::table('articles')->orderBy('id', 'DESC')->where('module', $category)->where('slug', $slug)->first();

        elseif($category == 'exhibiciones'):
            $article = DB::table('articles')->orderBy('id', 'DESC')->where('module', $category)->where('slug', $slug)->first();

        elseif($category == 'reciclaje'):
            $article = DB::table('articles')->orderBy('id', 'DESC')->where('module', $category)->where('slug', $slug)->first();

        elseif($category == 'comunidad'):
            $article = DB::table('articles')->orderBy('id', 'DESC')->where('module', $category)->where('slug', $slug)->first();

        endif;

            $imagenes1   = DB::table('n_galleries')->where('after',  1) ->where('article_id',  $article->id)->whereNull('deleted_at')->get();
            $imagenes2   = DB::table('n_galleries')->where('after',  2 )->where('article_id', $article->id)->whereNull('deleted_at')->get();
            $imagenes3   = DB::table('n_galleries')->where('after',  3 )->where('article_id', $article->id)->whereNull('deleted_at')->get();
            $imagenes4   = DB::table('n_galleries')->where('after',  4 )->where('article_id', $article->id)->whereNull('deleted_at')->get();
            $imagenes5   = DB::table('n_galleries')->where('after',  5 )->where('article_id', $article->id)->whereNull('deleted_at')->get();

            $data = [
                        'post' => $article,
                        'imagenes1' => $imagenes1,
                        'imagenes2' => $imagenes2,
                        'imagenes3' => $imagenes3,
                        'imagenes4' => $imagenes4,
                        'imagenes5' => $imagenes5,

                    ];

            return view('blog.sections.article', $data);


    }
}

