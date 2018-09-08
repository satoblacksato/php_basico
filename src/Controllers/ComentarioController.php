<?php
namespace App\Controllers;
use App\Models\{Comentario,Tipo};
class ComentarioController{
		public function index(){
			$filter=getVar('filter',$_POST);
			$comentarios=Comentario::with('tipo')
			->where('name','like',"%$filter%")
			->orWhere('description','like',"%$filter%")
			->paginate();
			$tipos=Tipo::pluck('name','id')->toArray();
			include getView('table_comentarios');
		}

	public function save(){
		$objComentario=new Comentario(
			setFillCustom(
				['name','description','tipo_id'],$_POST
			)
		);
		$objComentario->save();
		header('Location: ?controller=ComentarioController&method=index');
	}

	public function save_ajax(){
        $objComentario=new Comentario(
            setFillCustom(
                ['name','description','tipo_id'],$_POST
            )
        );
        $objComentario->save();
        header('Content-type: application/json; charset=utf-8');
        echo json_encode(Comentario::with('tipo')->where('tipo_id','=',$_POST['tipo_id'])->get());
        exit();
		}

	public function destroy(){
		$objComentario=Comentario::findOrFail(getVar('id',$_POST));
		$objComentario->delete();
		header('Location: ?controller=ComentarioController&method=index');

	}
}
