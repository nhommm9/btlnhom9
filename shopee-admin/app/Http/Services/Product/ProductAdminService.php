<?php

namespace App\Http\Services\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use App\Models\Menu;

class ProductAdminService
{
    public function getMenu()
    {
        return Menu::where('active', 1)->get();
    }

    public function isValidPrice($request)
    {
        if($request->input('price') != 0 && $request->input('price_sale') != 0
        && $request->input('price_sale') > $request->input('price'))
        {
            Session::flash('error', 'Giá giảm phải bé hơn hoặc bằng giá gốc');
            return false;
        }

        if ($request->input('price_sale') != 0 && (int)$request->input('price') == 0)
        {
            Session::flash('error', 'Vui lòng nhập giá gốc');
            return false;
        }

        return true;
    }
    public function insert($request)
    {
        $isValidPrice = $this->isValidPrice($request);
        if ($isValidPrice === false) return false;
        try{
//            $request->except('_token');
//            Product::create($request->all());
            Product::create([
                'name' => (string) $request->input('name'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'menu_id' => (int) $request->input('menu_id'),
                'price' => (int) $request->input('price'),
                'price_sale' => (int) $request->input('price_sale'),
                'active' => (int) $request->input('active'),
                'thumb' => (string) $request->input('thumb')
            ]);
            Session::flash('success', 'Thêm Sản phẩm thành công');
        } catch (\Exception $error)
        {
            Session::flash('error', 'Thêm Sản phẩm không thành công');
            \Log::info($error->getMessage());

            return false;
        }

        return true;
    }

    public function get()
    {
        return Product::with('menu')->orderByDesc('id')->paginate(10);
    }

    public function update($request, $product){
        $isValidPrice = $this->isValidPrice($request);
        if ($isValidPrice === false) return false;
        try {
            $product->fill($request->input());
            $product->save();

            Session::flash('success', 'Cập nhật thành công');
        } catch (\Exception $err)
        {
            Session::flash('error', 'Cập nhật không thành công');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function destroy($request)
    {
        $id = (int) $request->input('id');

        $product = Product::where('id', $request->input('id'))->first();

        if ($product)
        {
            $product->delete();
            return true;
        }
        return false;
    }
}
