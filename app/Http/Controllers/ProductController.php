<?php

namespace App\Http\Controllers;
use Inertia\Inertia; //ใส้Inertia
use Illuminate\Http\Request;
//สร้าง php artisan make:controller ProductController -rm
class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'name' => 'Laptop', 'description' => 'High-performance laptop', 'price' => 1500, 'image' => '/images/laptop.png'],
        ['id' => 2, 'name' => 'Smartphone', 'description' => 'Latest smartphone with great features', 'price' => 800, 'image' => '/images/smartphone.jpg'],
        ['id' => 3, 'name' => 'Tablet', 'description' => 'Portable tablet for everyday use', 'price' => 500, 'image' => '/images/tablet.jpg'],
        ['id' => 4, 'name' => 'Gaming Mouse', 'description' => 'Precision gaming mouse', 'price' => 100, 'image' => '/images/mouse.jpg'],
        ['id' => 5, 'name' => 'Mechanical Keyboard', 'description' => 'Durable and responsive keyboard', 'price' => 150, 'image' => '/images/keyboard.jpg'],
        ['id' => 6, 'name' => 'Monitor', 'description' => '4K UHD monitor with HDR', 'price' => 300, 'image' => '/images/monitor.jpg'],
        ['id' => 7, 'name' => 'Headset', 'description' => 'Noise-cancelling headset for gaming', 'price' => 200, 'image' => '/images/headset.jpg'],
        ['id' => 8, 'name' => 'External SSD', 'description' => '1TB portable SSD', 'price' => 250, 'image' => '/images/ssd.jpg'],
        ['id' => 9, 'name' => 'Graphics Card', 'description' => 'High-performance graphics card for gaming', 'price' => 1200, 'image' => '/images/gpu.jpg'],
        ['id' => 10, 'name' => 'Router', 'description' => 'High-speed wireless router', 'price' => 180, 'image' => '/images/router.jpg'],
    ];
    // จำเป็นต้องใส้ก่อนมะงั้นแดดง
    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);  //use Inertia\Inertia; จำเป็น
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return Inertia::render('Products/Show', ['product' => $product]);
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
}
