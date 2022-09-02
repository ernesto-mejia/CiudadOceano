<?php

namespace App\Http\ViewComposer;

use App\Article;
use App\CorporateArea;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class CompanyComposer
{
    public function compose(View $view)
    {
        $logdes = DB::table('corporate_areas')->where('slug', 'logo-y-descripcion-corta')->get();
        $company = DB::table('corporate_areas')->where('slug', '!=', 'logo-y-descripcion-corta')->where('status', 'published')->orderBy('orden_dash', 'ASC')->get();
        $countcomapny = count($company);
     

        $view->with([
            'company' => $logdes,
            'sections' => $company,
            'countcomapny' => $countcomapny
        ]);
    }
}
