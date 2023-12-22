<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Status;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();

        return view('order.order',['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        $payments = Payment::all();


        return view('order.create',['countries'=>$countries],['payments'=>$payments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|string',
            'country_id' => 'required',
            'payment_id' => 'required',
        ]);
        Order::create($data);

        $orders = Order::all();
        return view('order.order',['orders'=>$orders]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);

        if (!$order) {
            // Якщо замовлення не знайдено, поверніть 404
            abort(404);
        }

        return view('order.details', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function trackOrder(Request $request)
    {
        try {
            $name = $request->input('track_number');

            // Отримайте замовлення за допомогою поля name
            $order = Order::where('name', $name)->first();

            if ($order) {
                // Якщо замовлення знайдено, встановіть флеш-повідомлення і перенаправте
                return redirect()->route('order.show', ['id' => $order->id])->with('search_message', 'Order found successfully!');
            } else {
                // Якщо замовлення не знайдено, поверніть повідомлення про помилку
                return redirect()->route('order.index')->with('search_message', 'Order not found!');
            }
        } catch (\Exception $e) {
            // Виведення деталей помилки для аналізу
            dd($e->getMessage());
        }
    }


}
