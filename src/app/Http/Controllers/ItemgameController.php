<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemgame;

class ItemgameController extends Controller
{
    public function index()
    {
        $items = itemgame::all();
        return view('index', compact('items'));
    }

    public function randomitem(Request $request)
    {
        $itemloop = $request->qty;
        if (!is_null($itemloop)) {
            $query = itemgame::all();
            $items = $query->toArray(); 
            if (!empty($items) && is_array($items)) {
                // นับจำนวน stock ในไอเทมเกมส์
                $countStock = 0;
                foreach ($items as $val) {
                    $countStock += $val['stock'];
                }

                // เช็คจำนวนการสุ่มว่าเกินกว่าจำนวน stock ในไอเทมเกมส์หรือไหม
                if ($itemloop > $countStock) {
                    $error = array(
                        "msg"        => "จำนวนการสุ่มไอเทมเกิน จำนวนสต๊อกที่มีอยู่.",
                        "countstock" => $countStock,
                        "itemloop"   => $itemloop,
                    );
                    return view('randomitem', compact('error'));
                }

                $selectedItems = []; // รายการไอเท็มที่สุ่มได้

                while (count($selectedItems) < $itemloop) {
                    $randomItemIndex = array_rand($items); // สุ่มเลือกอินเด็กซ์ของไอเท็ม
                    $randomItem = $items[$randomItemIndex];

                    // เช็คว่าโอการการสุ่มน้อยกว่า 0 ไหมและสต๊อกมากกว่า 0 ไหม
                    if ($randomItem['chance'] > 0 && $randomItem['stock'] > 0) {
                        $chance = $randomItem['chance'];
                        $stock = $randomItem['stock'];

                        // สุ่มตัวเลขในช่วง 0-1 เพื่อเปรียบเทียบกับความน่าจะเป็นของไอเท็ม
                        $randomNumber = mt_rand() / mt_getrandmax();

                        // เช็คการสุ่มตัวเลขในช่วง 0-1 น้อยกว่าหรืเท่ากับโอการการสุ่มไหม และสต๊อกมากกว่า 0 ไหม
                        if ($randomNumber <= $chance && $stock > 0) {
                            $selectedItems[] = $randomItem; // เพิ่มไอเทมที่สุ่มได้ไปยังตัวแปรเพื่อเก็บค่า
                            $randomItem['stock']--; // แล้วทำการลดจำนวนของสต๊อกนั้นๆ
                        }

                        $items[$randomItemIndex] = $randomItem;
                    }
                }
            }
 
            return view('randomitem', compact('selectedItems'));
        } 
    }
}
