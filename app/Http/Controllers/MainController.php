<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(Request $request) {

      $items = DB::select('select * from membership');
    return view('content.DBtest', ['items' => $items]);
    }

    public function contribution(Request $request) {
        $insertPRM =  [
        $pref = $request->pref,
        $sight = $request->sight,
        $impression = $request->impression ];

       DB::insert('insert into pref (prefecture,spot,review) VALUES (:pref,:sight,:impression)', $insertPRM);

    //  return redirect('/MyMap/');
    return view('content.map');
    }

    public function individualpage($prefid) {

      switch ($prefid) {

        case 'hokkaido':
        $prefname = '北海道';
         break;
        case 'aomori':
        $prefname = '青森県';
         break;
        case 'iwate':
        $prefname = '岩手県';
         break;
        case 'miyagi':
        $prefname = '宮城県';
         break;
        case 'akita':
        $prefname = '秋田県';
         break;
        case 'yamagata':
        $prefname = '山形県';
         break;
        case 'fukushima':
        $prefname = '福島県';
         break;
        case 'ibaraki':
        $prefname = '茨城県';
         break;
        case 'tochigi':
        $prefname = '栃木県';
         break;
        case 'gunma':
        $prefname = '群馬県';
         break;
        case 'saitama':
        $prefname = '埼玉県';
         break;
        case 'chiba':
        $prefname = '千葉県';
         break;
        case 'tokyo':
        $prefname = '東京都';
         break;
        case 'kanagawa':
        $prefname = '神奈川県';
         break;
        case 'niigata':
        $prefname = '新潟県';
         break;
        case 'toyama':
        $prefname = '富山県';
         break;
        case 'ishikawa':
        $prefname = '石川県';
         break;
        case 'fukui':
        $prefname = '福井県';
         break;
        case 'yamanashi':
        $prefname = '山梨県';
         break;
        case 'nagano':
        $prefname = '長野県';
         break;
        case 'gifu':
        $prefname = '岐阜県';
         break;
        case 'shizuoka':
        $prefname = '静岡県';
         break;
        case 'aichi':
        $prefname = '愛知県';
         break;
        case 'mie':
        $prefname = '三重県';
         break;
        case 'shiga':
        $prefname = '滋賀県';
         break;
        case 'kyoto':
        $prefname = '京都府';
         break;
        case 'osaka':
        $prefname = '大阪府';
         break;
        case 'hyogo':
        $prefname = '兵庫県';
         break;
        case 'nara':
        $prefname = '奈良県';
         break;
        case 'wakayama':
        $prefname = '和歌山県';
         break;
        case 'tottori':
        $prefname = '鳥取県';
         break;
        case 'shimane':
        $prefname = '島根県';
         break;
        case 'okayama':
        $prefname = '岡山県';
         break;
        case 'hiroshima':
        $prefname = '広島県';
         break;
        case 'yamaguchi':
        $prefname = '山口県';
         break;
        case 'tokushima':
        $prefname = '徳島県';
         break;
        case 'kagawa':
        $prefname = '香川県';
         break;
        case 'ehime':
        $prefname = '愛媛県';
         break;
        case 'kochi':
        $prefname = '高知県';
         break;
        case 'fukuoka':
        $prefname = '福岡県';
         break;
        case 'saga':
        $prefname = '佐賀県';
         break;
        case 'nagasaki':
        $prefname = '長崎県';
         break;
        case 'kumamoto':
        $prefname = '熊本県';
         break;
        case 'oita':
        $prefname = '大分県';
         break;
        case 'miyazaki':
        $prefname = '宮崎県';
         break;
        case 'kagoshima':
        $prefname = '鹿児島県';
         break;
        case 'okinawa':
        $prefname = '沖縄県';
         break;
}

    $param = ['prefname' => $prefname];
    $contributioncontents =  DB::select('SELECT * FROM pref WHERE prefecture = :prefname',$param);

      return view('47.template',['contributioncontents' => $contributioncontents,'prefname' => $prefname]);

    }

public function pictureposttest(Request $request) {

    $request->file('picture')->store('public/picture');   

}


public function picturepostview()
{
    return view('content.Picture');
}




}
