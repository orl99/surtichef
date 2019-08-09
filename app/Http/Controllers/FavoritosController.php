<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_favs;
use PHPUnit\Framework\Exception;
use App\product;
use Illuminate\Support\Facades\DB;

class favoritosController extends Controller
{
    public function index(){
        /*
        * SELECT P.id, P.name, P.description, P.category_id, P.image FROM products P inner JOIN user_favs A ON p.id = A.id_product inner join users U on A.id_user = U.id where U.id = 1 AND A.status_favs = 1
        *
        *        $Products::table('products')
            ->select('products.id', 'products.name', 'products.description', 'products.category_id', 'products.image')
            ->join('user_favs', 'products.id', '=', 'user_favs.id_product')
            ->join('users', 'user_favs.id_user', '=', 'users.id')
            ->where('users.id', 1)
            ->where('user_favs.status_favs', 1)
            ->get();
        */
        // $Products = new product();
        $query = DB::select('SELECT P.id, P.name, P.description, P.category_id, P.image FROM products P inner JOIN user_favs A ON p.id = A.id_product inner join users U on A.id_user = U.id where U.id = 1 AND A.status_favs = 1');
        return view('client.favoritos')->with(compact('query'));
    }

    public function insert(Request $request){
        $user_favs = new user_favs();

        $user_id = $request->get('id_user');
        $id_product = $request->get('id_product');
        $message = null;

        $product = Product::find($id_product);
        /*
            $current_status es la varible que almacenara la consulta.

            Esta consulta se hace a la tabla de user_favs. Esta consulta tiene como proposito validar si realmente el producto no ha sido seleccionado como favorito por el usuario. En caso de que la consulta no devuelva nada, quiere decir que el usuario no ha selecionado ese producto como favorito antes o lo tenia en status desactivado.

            - id_user
            - id_product
            Select = status_favs
        */
        $current_status = $user_favs::where('id_user', $user_id)
                  ->where('id_product', $id_product)
                  ->select('status_favs')->get();

        // echo($current_status);

        if( count( $current_status) > 0){
            //si ha habido registros de favs

            if( $current_status[0]->status_favs == 1 ){
                //Aqui se cambiara el status a 0
                try{
                    $user_favs::where('id_user', $user_id)
                    ->where('id_product', $id_product)
                    ->update([
                        "status_favs" => 0,
                    ]);
                    $message = 'Entendido, Se quitó el producto de Favoritos';
                }catch(Exception $e){
                    return $e;
                }
            }else{
                //Aqui se cambiara el status a 1
                try{
                    $user_favs::where('id_user', $user_id)
                    ->where('id_product', $id_product)
                    ->update([
                        "status_favs" => 1,
                    ]);
                    $message = 'Entendido, Se Agrego el producto a tus Favoritos';
                }catch(Exception $e){
                    return $e;
                }
            }
        }else{
            //si NUNCA se hiso un registro de favs
            try{
                $user_favs::create([
                    "id_user" => $user_id,
                    "id_product" => $id_product,
                    "status_favs" => 1,
                ]);
                $message = 'Se Agrego el producto a tus Favoritos';
            }catch(Exception $e){
                return $e;
            }
        }

        $fav_status = $current_status;
        return redirect("/Products/$id_product")->with(compact('message', 'product', 'fav_status'));


    }

    public function destroy(Request $request)
    {
        $product_id = $request->product_id;
        $user_id = $request->user_id;

        if($user_id && $product_id){
            $fav_id_response =
            user_favs::where('id_product', $product_id)
                        ->where('id_user', $user_id)
                        ->get();

            if($fav_id_response){
                $fav_id_response[0]->delete();
            }
        }

        return back();
    }



}
