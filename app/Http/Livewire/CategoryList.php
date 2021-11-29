<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class CategoryList extends Component
{
    public $products;
    public $count;
    public $search;
    public $sort = 'id';
    public $order = 'desc';


    public function mount($id, $type)
    {
        if ($type == 'category') {
            $this->products = Product::where('category_id',$id)->get();
        }else{
            $this->products = Product::where('brand_id',$id)->get();
        }

        $this->brands = Brand::all();
        $this->categories = Category::all();

    }

    public function search()
    {
        $this->products = Product::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('price', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->order)
            ->get();
    }

    public function render()
    {


        return view('livewire.category-list');
     }
}
