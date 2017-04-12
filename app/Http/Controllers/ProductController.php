<?php

namespace App\Http\Controllers;

use Notify;
use Alert;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\Post;
use Illuminate\Http\Request;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;


class ProductController extends Controller
{
    public function getIndex()
    {
		//$products = Product::all();
        //notify()->flash('You have signed in.', 'success', ['timer' => 4000,]);
    	return view('shop.index', ['products' => Product::paginate(21)]);
    }

    public function getAddToCart(Request $request, $id)
    {
    	$product= Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
        $cart->add($product, $product->id);
    	$request->session()->put('cart', $cart);

        
        Alert::success('Vielen Dank! || Muchas gracias!', "{$product->title}")->persistent("Super Fiesta");
        return view('shop.index', [
            'products' => Product::paginate(21)
        ]);
                
    }

    public function getAddByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addByOne($id);
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');    
    }

    public function getCart()
    {
    	if(!Session::has('cart')) {
    		return view('shop.shopping-cart');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalWeight' => $cart->totalWeight, 'totalOffer' => $cart->totalOffer, 'totalPost' => $cart->totalPost]);
    }

//************************************************************************ORDER BY VISA

    public function getCheckout()
    {
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = round($cart->totalPrice + $cart->totalPost + 0.029*($cart->totalPrice + $cart->totalPost) + 0.3 ,2);
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if(!Session::has('cart')){
            return redirect()->route('shop.shoppingCart');//shop.shopping-cart???//POSSIBLE ERROR????????????????????????
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        Stripe::setApiKey('sk_test_zeZEFfApadDhX6YeuIrPmZdV');
        try {
            $charge = Charge::create(array(
                "amount" => round($cart->totalPrice + $cart->totalPost + 0.029*($cart->totalPrice + $cart->totalPost)+0.3 ,2) * 100,
                "currency" => "chf",
                "source" => $request->input('stripeToken'),//"tok_19Nj02D5Hus6m2Z8znQTPtHX", // obtained with Stripe.js
                "description" => "Test charge"
            ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->postleitzahl = $request->input('postleitzahl');
            $order->nummer = $request->input('nummer');
            $order->city = $request->input('city');
            $order->name = $request->input('name');
            $order->surname = $request->input('surname');
            $order->payment_id = $charge->id;
            Auth::user()->orders()->save($order);
        } catch(\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
              
        Alert::success('Deine Produkte werden zu dir nach Hause geschickt || Tus productos serán enviados a tu casa ', 'Bestellung || Pedido')->persistent("Super Fiesta");
        return view('shop.index', [
            'products' => Product::paginate(21)
        ]);
        //return redirect()->route('product.index')->with('success', 'Successfully purchased products!');
    }


    public function getCheckoutSin()
    {
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = round($cart->totalPrice + 0.029*($cart->totalPrice) + 0.3 ,2);
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckoutSin(Request $request)
    {
        if(!Session::has('cart')){
            return redirect()->route('shop.shoppingCart');//shop.shopping-cart???//POSSIBLE ERROR????????????????????????
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        Stripe::setApiKey('sk_test_zeZEFfApadDhX6YeuIrPmZdV');
        try {
            $charge = Charge::create(array(
                "amount" => round($cart->totalPrice +  0.029*($cart->totalPrice)+0.3 ,2) * 100,
                "currency" => "chf",
                "source" => $request->input('stripeToken'),//"tok_19Nj02D5Hus6m2Z8znQTPtHX", // obtained with Stripe.js
                "description" => "Test charge"
            ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->postleitzahl = $request->input('postleitzahl');
            $order->nummer = $request->input('nummer');
            $order->city = $request->input('city');
            $order->name = $request->input('name');
            $order->surname = $request->input('surname');
            $order->payment_id = $charge->id;
            Auth::user()->orders()->save($order);
        } catch(\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
              
        //Alert::success('Deine Produkte werden zu dir nach Hause geschickt | Tus productos serán enviados a tu casa ', 'Bestellung | Pedido')->persistent("Super Fiesta")->autoclose(10000);
        Alert::success('Deine Produkte werden zu dir nach Hause geschickt || Tus productos serán enviados a tu casa ', 'Bestellung || Pedido')->persistent("Super Fiesta");
        return view('shop.index', [
            'products' => Product::paginate(21)
        ]);
        //return redirect()->route('product.index')->with('success', 'Successfully purchased products!');
    }


//************************************************************************ORDERS BY RECHNUNG
    
    public function getRechnung()
    {
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice + $cart->totalPost;
        return view('shop.rechnung', ['total' => $total]);
    }

    public function postRechnung(Request $request)
    {
        if(!Session::has('cart')){
            return redirect()->route('shop.shopping-cart');//shop.shopping-cart???
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        try {
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->postleitzahl = $request->input('postleitzahl');
            $order->nummer = $request->input('nummer');
            $order->city = $request->input('city');
            $order->name = $request->input('name');
            $order->surname = $request->input('surname');
            $order->payment_id = "Rechnung";
            Auth::user()->orders()->save($order);
        } catch(\Exception $e){
            return redirect()->route('rechnung')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        
        Alert::success('Wir schicken dir eine Rechnung per Post || Te enviaremos un recibo por Post ', 'Rechnung || Recibo')->persistent("Super Fiesta");
        return view('shop.index', [
            'products' => Product::paginate(21)
        ]);
        //->with('success', 'Successfully purchased products!');
    }


    public function getRechnungSin()
    {
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.rechnung', ['total' => $total]);
    }

    public function postRechnungSin(Request $request)
    {
        if(!Session::has('cart')){
            return redirect()->route('shop.shopping-cart');//shop.shopping-cart???
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        try {
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->postleitzahl = $request->input('postleitzahl');
            $order->nummer = $request->input('nummer');
            $order->city = $request->input('city');
            $order->name = $request->input('name');
            $order->surname = $request->input('surname');
            $order->payment_id = "Rechnung";
            Auth::user()->orders()->save($order);
        } catch(\Exception $e){
            return redirect()->route('rechnung')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        
        Alert::success('Wir schicken dir eine Rechnung per Post || Te enviaremos un recibo por Post ', 'Rechnung || Recibo')->persistent("Super Fiesta");
        return view('shop.index', [
            'products' => Product::paginate(21)
        ]);
        //->with('success', 'Successfully purchased products!');
    }

//************************************************************************PRINT ORDERS

    public function getProfile()
    {
        $orders = Auth::User()->orders;
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('users.profile', ['orders' => $orders]);
    }
////////////////////////////////////////////////////////////////////////////////////////
    public function getRemovePost($totalWeight)
    {
        $totalPost->removePost($totalWeight);
        if(count($totalWeight) > 0){
            Session::put('totalPost', $totalPost);
        } else {
            Session::forget('totalPost');
        }
        return redirect()->route('product.shoppingCart');    
    }
}





