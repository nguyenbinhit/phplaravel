<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    //

    public function index(Request $request) {


        $sort = $request->query('sort',"");

        $searchKeyword = $request->query('name',"");

        $queryORM = CategoryModel::where('name',"LIKE","%".$searchKeyword."%");


        $categories = $queryORM->paginate(10);

        $data = [];
        $data["categories"] = $categories;
        $data["searchKeyword"] = $searchKeyword;
        $data["sort"] = $sort;

        return view("backend.category.index", $data);



    }


    public function create() {

        return view("backend.category.create");
    }

    public function edit($id) {
        $category = CategoryModel::findOrFail($id);

        $data = [];
        $data["category"] = $category;

        return view("backend.category.edit", $data);


    }

    public function delete($id) {

        $category = CategoryModel::findOrFail($id);

        $data = [];
        $data["category"] = $category;

        return view("backend.category.delete", $data);



    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'desc' => 'required',
        ]);

        $name = $request ->input('name','');
        $slug = $request ->input('slug','');
        $desc = $request ->input('desc','');

        $pathCategoryImage = $request->file('image')->store('public/categoryimages');

        $category = new CategoryModel();

        $category->name = $name;
        $category->slug = $slug;
        $category->desc = $desc;

        $category->image = $pathCategoryImage;

        $category->save();
        return redirect("/backend/category/index")->with('status','Thêm danh mục thành công');

    }
    public function update(Request $request,$id) {

        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'desc' => 'required',
        ]);


        $name = $request->input('name', '');
        $slug = $request->input('slug', '');
        $desc = $request->input('desc', '');

        $category = CategoryModel::findOrFail($id);

        $category->name = $name;
        $category->slug = $slug;
        $category->desc = $desc;

        if ($request->hasFile('image')){

            if ($category->image) {
                Storage::delete($category->image);
            }
            $pathCategoryImage = $request->file('image')->store('public/categoryimages');
            $category->image = $pathCategoryImage;
        }

        $category->save();
        return redirect("/backend/category/edit/$id")->with('status', 'cập nhật danh mục thành công !');


    }



    public function destroy($id) {

        echo "<br> id " . $id;
        $category = CategoryModel::findOrFail($id);
        $category->delete();
        return redirect("/backend/category/index")->with('status', 'xóa sản phẩm thành công !');

    }
}
