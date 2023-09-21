<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\ProductCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    public function index(Request $request){
        // $page = $_GET['page'] ?? 1 ;

        $keyword = $request->keyword;

        $sortBy = $request->sortBy ?? 'latest';
        $sort = ($sortBy === 'oldest') ? 'asc' : 'desc' ;
        $status = $request->status ?? '' ;
        $page = $request->page ?? 1;
        $itemPerPages = 2 ;
        $offSet = ($page - 1) * $itemPerPages ;

        $sqlSelect ='select * from product_categories ';

        $parambiding = [] ;


        if (!empty($keyword)){
            $sqlSelect .= 'where name like ?' ;
            $parambiding[] = '%'.$keyword.'%';
        }
        $sqlSelect .=' order by created_at '.$sort;
        $sqlSelect .= ' limit ?,?';
        $parambiding[] = $offSet ;
        $parambiding[] = $itemPerPages ;

        $productCategories = DB::select($sqlSelect,$parambiding);

        // $pagination = DB::select('select * from product_categories');
        // $totalRecords = count($pagination);
        $totalRecords = DB::select('select count(*) as sum from product_categories')[0]->sum;
        $totalPages = ceil($totalRecords/$itemPerPages);




        return view('admin.pages.productcategory.list', ['productCategories' => $productCategories , 'totalPages' => $totalPages , 'page' => $page , 'keyword' =>  $keyword , 'sortBy' => $sortBy]);
    }

    public function add(){

        return view('admin.pages.productcategory.productadd');
    }
    public function store(StoreProductCategoryRequest $request){
        // $name = $request->name;
        // $status = $request->status;
    //    $bool = DB::insert('INSERT INTO product_categories(name,status, created_at, updated_at) VALUES (?,?,?,?)',[
    //         $request->name,
    //         $request->status,
    //         Carbon::now()->addDays(999)->addMonth()->addYear(),
    //         Carbon::now()
    //    ]);

    $productCategory = new ProductCategory;
    $productCategory->name = $request->name ;
    $productCategory->status = $request->status ;
    $check = $productCategory->save();
      $check = $bool ? "thành công r bé ơi " : "thất bại" ;
      return redirect()->route('admin.product_category.list')->with('message',$message);
    }

    public function detail(ProductCategory $productCategory){
    //  $productCategory = DB::select('select * from product_categories where id = ?', [$id]);
     return view('admin.pages.productcategory.detail', ['productCategory' => $productCategory]);
    }

    public function update(UpdateProductCategoryRequest $request ,ProductCategory $productCategory){

        // $update = DB::update('update product_categories SET name = ? , status = ? WHERE id = ? ', [$request->name,$request->status,$id]);

        // $productCategory = ProductCategory::find($id);
        $productCategory->name = $request->name ;
        $productCategory->status = $request->status ;
        $check = $productCategory->save();
        $check = $update >0 ? "update thành công r bé ơi " : "có cái gì đâu mà up" ;
        return redirect()->route('admin.product_category.list')->with('message',$message);
    }


    public function destroy(ProductCategory $productCategory){
        $check = $productCategory->delete();
        $message =$check >0 ? "xóa thành công r bé ơi " : "xóa thất bại" ;
        return redirect()->route('admin.product_category.list')->with('message',$message);
    }



}
