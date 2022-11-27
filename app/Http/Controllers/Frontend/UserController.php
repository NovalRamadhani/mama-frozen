<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.users.profile');
    }

    public function viewInvoice(int $orderId)
    {
        $order = Order::findOrFail($orderId);
        $todayDate = Carbon::now()->format('d-m-Y');
        $pdf = Pdf::loadView('frontend.users.generate-invoice', compact('order'));
        return $pdf->stream('invoice-'.$order->id.'-'.$todayDate.'.pdf');
        
    }

    public function generateInvoice(int $orderId)
    {
        $order = Order::findOrFail($orderId);
        $data = ['order' => $order];

        $pdf = Pdf::loadView('frontend.users.generate-invoice', $data);
        $todayDate = Carbon::now()->format('d-m-Y');
        return $pdf->download('invoice-'.$order->id.'-'.$todayDate.'.pdf');
    }
}
