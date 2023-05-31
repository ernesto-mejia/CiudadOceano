<?php

namespace App\Http\Controllers\Blog;

use App\Article;
use App\Description;
use App\Http\Controllers\Controller;
use App\NGallery;
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
                $articles = DB::table('articles')->where('module', $category)->where('status', '1')->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            break;
            case 'campaña':
                $articles = DB::table('articles')->where('module', $category)->where('status', '1')->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            break;
            case 'exhibiciones':
                $articles = DB::table('articles')->where('module', $category)->where('status', '1')->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            break;
            case 'reciclaje':
                $articles = DB::table('articles')->where('module', $category)->where('status', '1')->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            break;
            case 'comunidad':
                $articles = DB::table('articles')->where('module', $category)->where('status', '1')->where('deleted_at', null)->orderBy('id', 'DESC')->get();
            break;
        endswitch;
        if($articles == null){
            $countArt = 0;
        }
        else{
        $countArt = count($articles);
        }
        $data = [
                    'articles' => $articles,
                    'countArt' => $countArt

                ];

        return view('blog.sections.articles', $data);
    }

    public function getModule($category, $slug )
    {

        if($category == 'articulos'):
            $article = DB::table('articles')->orderBy('id', 'DESC')->where('module', $category)->where('slug', $slug)->first();
            $descriptions  = Description::where('article_id', $article->id)->where('type', 'description')->get();
            $videos       = Description::where('article_id', $article->id)->where('type', 'video')->get();
        elseif($category == 'campaña'):
            $article = DB::table('articles')->orderBy('id', 'DESC')->where('module', $category)->where('slug', $slug)->first();
            $descriptions  = Description::where('article_id', $article->id)->where('type', 'description')->get();
            $videos       = Description::where('article_id', $article->id)->where('type', 'video')->get();
        elseif($category == 'exhibiciones'):
            $article = DB::table('articles')->orderBy('id', 'DESC')->where('module', $category)->where('slug', $slug)->first();
            $descriptions  = Description::where('article_id', $article->id)->where('type', 'description')->get();
            $videos       = Description::where('article_id', $article->id)->where('type', 'video')->get();

        elseif($category == 'reciclaje'):
            $article = DB::table('articles')->orderBy('id', 'DESC')->where('module', $category)->where('slug', $slug)->first();

        elseif($category == 'comunidad'):
            $article = DB::table('articles')->orderBy('id', 'DESC')->where('module', $category)->where('slug', $slug)->first();

        endif;

            $imagenes   = NGallery::where('article_id',  $article->id)->whereNull('deleted_at')->get();
              //dd( $imagenes);
            $data = [
                        'post' => $article,
                        'descriptions' => $descriptions,
                        'imagenes' => $imagenes,
                        'videos' => $videos
                    ];

            return view('blog.sections.article', $data);


    }
}

