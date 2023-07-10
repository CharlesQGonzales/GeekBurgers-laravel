<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use DB;
use Session;

class OrdersController extends Controller
{
    public function placeOrder(Request $request)
    {
        $order = new Order;
        $order->user_id = Session::get('user_id');
        $order->save();

        $products = DB::select("SELECT * FROM products");
        for ($i = 0; $i < count($products); $i++) {
            $ordered = $request->input('order_' . str($products[$i]->product_id));
            if ($ordered > 0) {
                $order_product = new OrdersProduct();
                $order_product->order_id = $order->order_id;
                $order_product->product_id = $products[$i]->product_id;
                $order_product->quantity = $ordered;
                $order_product->save();
            }
        }
        return redirect('/orders/done');
    }
    public function showOrders()
    {
        $menu = DB::select("SELECT p.product_id, p.name, p.price, p.description, pi.image FROM products AS p INNER JOIN product_images AS pi ON p.product_id = pi.product_id");
        return view('orders', compact('menu'));
    }
    public function takeOrders(Request $request)
    {

        if (Session::get('id')) {
            $products = DB::select("SELECT p.product_id, p.name, p.price, p.description, pi.image FROM products AS p INNER JOIN product_images AS pi ON p.product_id = pi.product_id");
            $selected_products = array();
            $total = 0;
            for ($i = 0; $i < count($products); $i++) {
                if (intval($request->input('order_' . str($products[$i]->product_id))) > 0) {
                    $total += $products[$i]->price * $request->input('order_' . str($products[$i]->product_id));
                    array_push($selected_products, $products[$i]);
                }
            }
            return view('users_orders_checkout', compact('total', 'products', 'selected_products', 'request'));
        }

    }
    public function showMenu()
    {
        $burgers = DB::select("SELECT p.product_id, p.name, p.price, p.description, pi.image FROM products AS p INNER JOIN product_images AS pi ON p.product_id = pi.product_id WHERE p.type = 'burgers';");

        $sides = DB::select("SELECT p.product_id, p.name, p.price, p.description, pi.image FROM products AS p INNER JOIN product_images AS pi ON p.product_id = pi.product_id WHERE p.type = 'sides';");

        $drinks = DB::select("SELECT p.product_id, p.name, p.price, p.description, pi.image FROM products AS p INNER JOIN product_images AS pi ON p.product_id = pi.product_id WHERE p.type = 'drinks';");

        $desserts = DB::select("SELECT p.product_id, p.name, p.price, p.description, pi.image FROM products AS p INNER JOIN product_images AS pi ON p.product_id = pi.product_id WHERE p.type = 'desserts';");

        return view('menu', compact('burgers', 'sides', 'drinks', 'desserts'));
    }

}