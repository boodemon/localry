<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function __construct(){
        $this->youtube = [
                    [
                    'title'   => 'ตื่นอยู่ในใจ',
                    'url'     => 'https://www.youtube.com/watch?time_continue=6&v=hh3pkA_ovyA'
                    ],
                    [
                        'title' => 'Heart Sale : ขนมไทยกรุงเก่า 10 บาทอร่อยขาดใจ',
                        'url'   => 'https://www.youtube.com/watch?v=5f5AiG9BIP4&list=UU1VYUW6GefdgZ7Z5E5X82Ug'
                    ],
                    [
                        'title' => 'ศิลปิน ศิลปะ สัจจะและชีวิต',
                        'url'   => 'https://www.youtube.com/watch?v=1HFB0ShdnJc&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=9'
                    ],
                    [
                        'title' => 'EveryThink: Rasmee Isan Soul สืบทอดจิตวิญญาณหมอลำอีสานร่วมสมัย',
                        'url'   => 'https://www.youtube.com/watch?v=brl0NAEucCc&index=24&list=UU1VYUW6GefdgZ7Z5E5X82Ug'
                    ],
                    [
                        'title' => 'EveryThink: ฝันร้ายของ Kabu',
                        'url'   => 'https://www.youtube.com/watch?v=KM4yygzaDoQ&index=104&list=UU1VYUW6GefdgZ7Z5E5X82Ug'
                    ],
                    [
                        'title' => 'EveryThink: Elephant Nature Park ศูนย์อภิบาลช้าง ที่เป็นมากกว่าบ้านของสัตว์ทุกตัว',
                        'url'   => 'https://www.youtube.com/watch?v=xsPdMNyA0o4&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=106'
                    ],
                    [
                        'title' => 'People : ทำในสิ่งที่รัก และพิสูจน์ให้ทุกคนเห็นด้วยความสำเร็จ',
                        'url'   => 'https://www.youtube.com/watch?v=hX3OqvnSGAw&index=172&list=UU1VYUW6GefdgZ7Z5E5X82Ug'
                    ],
                    [
                        'title' => 'EveryThink: ถึงเวลาที่โลกต้องเซิ้งไปกับวงหมอลำแห่งศตวรรษที่ 21',
                        'url'   => 'https://www.youtube.com/watch?v=39sCtQV06ng&index=163&list=UU1VYUW6GefdgZ7Z5E5X82Ug'
                    ],
                    [
                        'title' => '\'นวยนาด\' ผลิตภัณฑ์ที่เริ่มจาก 0',
                        'url'   => 'https://www.youtube.com/watch?v=kEtDS7YQkWo&index=142&list=UU1VYUW6GefdgZ7Z5E5X82Ug'
                    ],
                    [
                        'title' => 'DoGood : Toolmorrow',
                        'url'   => 'https://www.youtube.com/watch?v=hQftLO6oJeo&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=138'
                    ],
                    [
                        'title' => 'EveryThink : ใครว่าผู้หญิง...เป็นเพศที่อ่อนแอ',
                        'url'   => 'https://www.youtube.com/watch?v=LuhNvUs_-tE&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=122'
                    ],
                    [
                        'title' => 'EveryThink: Breeder ผู้กอบกู้แมวไทย',
                        'url'   => 'https://www.youtube.com/watch?v=0EgWdBuZNhM&index=102&list=UU1VYUW6GefdgZ7Z5E5X82Ug'
                    ],
                    [
                        'title' => 'Everythink: TUFF นวมไทยโกอินเตอร์',
                        'url'   => 'https://www.youtube.com/watch?v=tY8gLt9GNcI&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=83'
                    ]
                ];
    }
    public function index(){
        $data = [
            'youtubes' => $this->youtube,
        ];
        return view('localry.index',$data);
    }
    
    public function category(){
        $data = [
            'youtubes' => $this->youtube,
        ];
        return view('localry.category',$data);
    }

    public function playlist(){
        $youtubes =  $this->youtube;
        $data = [
            'youtubes'  =>   $youtubes,
            'ytb'       =>      $youtubes[rand(0,12)]['url']
        ];
        return view('localry.playlist',$data);
    }

    public function singleplay($id = 0){
        $youtubes =  $this->youtube;
        $data = [
           'youtubes'  =>   $youtubes,
           'ytb'       => $youtubes[ $id ]
        ];
        return view('localry.singleplay',$data);
    }
    
}
