<?php

namespace App\Http\Controllers;
use Inertia\Inertia; //ใส้Inertia
use Illuminate\Http\Request;
//สร้าง php artisan make:controller ProductController -rm
class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'name' => 'แล็ปท็อป', 'description' => 'แล็ปท็อปประสิทธิภาพสูง', 'price' => 1500, 'image' => '/images/laptop.png'],
        ['id' => 2, 'name' => 'สมาร์ทโฟน', 'description' => 'สมาร์ทโฟนรุ่นล่าสุดพร้อมฟีเจอร์เด็ด', 'price' => 800, 'image' => '/images/smartphone.png'],
        ['id' => 3, 'name' => 'แท็บเล็ต', 'description' => 'แท็บเล็ตพกพาสำหรับใช้ในชีวิตประจำวัน', 'price' => 500, 'image' => '/images/tablet.jpg'],
        ['id' => 4, 'name' => 'Gaming Mouse', 'description' => 'เมาส์เล่นเกมที่ยิงคมหัวตึงๆ', 'price' => 100, 'image' => '/images/mouse.jpg'],
        ['id' => 5, 'name' => 'Mechanical Keyboard', 'description' => 'คีย์บอร์ดทนทานต่อหินและตอบสนองได้ดี', 'price' => 150, 'image' => '/images/keyboard.jpeg'],
        ['id' => 6, 'name' => 'Monitor', 'description' => 'จอภาพ 4K UHD พร้อม HDR', 'price' => 300, 'image' => '/images/monitor.jpg'],
        ['id' => 7, 'name' => 'ชุดหูฟัง', 'description' => 'ชุดหูฟังตัดเสียงรบกวนสำหรับเล่นเกม', 'price' => 200, 'image' => '/images/headset.jpg'],
        ['id' => 8, 'name' => 'External SSD', 'description' => 'SSD แบบพกพา 1TB', 'price' => 250, 'image' => '/images/ssd.jpg'],
        ['id' => 9, 'name' => 'การ์ดจอ RTX', 'description' => 'กราฟิกการ์ดประสิทธิภาพสูงสำหรับการเล่นเกม', 'price' => 1200, 'image' => '/images/gpu.jpg'],
        ['id' => 10, 'name' => 'เราเตอร์', 'description' => 'เราเตอร์ไร้สายความเร็วสูงเล่นเกมเต็มMAX', 'price' => 180, 'image' => '/images/router.jpg'],
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
