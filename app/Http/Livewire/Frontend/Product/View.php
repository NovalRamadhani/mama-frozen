<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Cart;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class View extends Component
{
    public $category, $product, $quantityCount = 1;

    public function addToWishList($productId)
    {
        if(Auth::check()){
            if(Wishlist::where('user_id',auth()->user()->id)->where('product_id',$productId)->exists()){
                session()->flash('message','Alredy added to wishlist');
                $this->dispatchBrowserEvent('message',[
                    'text' => 'Alredy added to wishlist',
                    'type' => 'warning',
                    'status' => 409
                ]);
                return false;
            } else {
                $wishlist = Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productId
                ]);
                session()->flash('message','Wistlist added successfuly');
                $this->emit('wishlistAddedUpdate');
                $this->dispatchBrowserEvent('message',[
                    'text' => 'Wistlist added successfuly',
                    'type' => 'success',
                    'status' => 200
                ]);
            }
        } else {
            session()->flash('message', 'Please login to continue');
            $this->dispatchBrowserEvent('message',[
                'text' => 'Please login to continue',
                'type' => 'info',
                'status' => 401
            ]);
            return false;
        }
    }

    public function decrementQuantity()
    {
        if($this->quantityCount > 1){
            $this->quantityCount--;
        }
    }

    public function incrementQuantity()
    {
        if($this->quantityCount < 10){
            $this->quantityCount++;
        }
    }

    public function addToCart(int  $productId)
    {
        if(Auth::check()){
            // dd($productId);
            if($this->product->where('id',$productId)->where('status','0')->exists()) {
                if(Cart::where('user_id',auth()->user()->id)->where('product_id', $productId)->exists()){
                    $this->dispatchBrowserEvent('message',[
                        'text' => 'Alredy added to cart',
                        'type' => 'warning',
                        'status' => 409
                    ]);
                } else {
                    if($this->product->quantity > 0){
                        if($this->product->quantity > $this->quantityCount){
                            // Insert to Cart
                            Cart::create([
                                'user_id' => auth()->user()->id,
                                'product_id' => $productId,
                                'quantity' => $this->quantityCount
                            ]);
                            $this->emit('CartAddedUpdated');
                            $this->dispatchBrowserEvent('message',[
                                'text' => 'Product Added to Cart',
                                'type' => 'success',
                                'status' => 200
                            ]);
                        } else {
                            $this->dispatchBrowserEvent('message',[
                                'text' => 'Hanya'.$this->quantityCount.'stok tersedia',
                                'type' => 'error',
                                'status' => 401
                            ]);
                        }
                    } else {
                        $this->dispatchBrowserEvent('message',[
                            'text' => 'Stok tidak tersedia',
                            'type' => 'warning',
                            'status' => 401
                        ]);
                    }
                }
            } else {
                $this->dispatchBrowserEvent('message',[
                    'text' => 'Product does not exists',
                    'type' => 'error',
                    'status' => 401
                ]);
            }
        } else {
            $this->dispatchBrowserEvent('message',[
                'text' => 'Please login to add to cart',
                'type' => 'info',
                'status' => 401
            ]);
        }
    }

    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.frontend.product.view',[
            'category' => $this->category,
            'product' => $this->product
        ]);
    }
}
