<?php 

namespace App\Http\ViewComposer;

use Illuminate\Contracts\View\View;
use App\Categorias;
use App\Tags;

class AsideComposer
{
	public function compose(View $view)
	{
		$categorias = Categorias::all();
		$tags = Tags::all();
		$view->with('categorias',$categorias)->with('tags',$tags);
	}
}