<html>
<head>
    <title>あなたの地図</title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="assets/jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/jquery/jmap.js"></script>
    <!--<script type="text/javascript" src="assets/prefecture.js"></script>-->



</head>
<body>

  <div id="jmap"><style type="text/css">div[jmap-id="jmap-1"]{display:flex;position:relative;font-family:serif;width:100%;height:450px;background-color:#ff000000;border-width:1px;border-color:#bfbfbf;border-style:solid;border-radius:0.3rem;padding:1rem;overflow:hidden}
div[jmap-id="jmap-1"] .jmap-content {display:grid; display:-ms-grid;position:relative;width:100%;height:100%;grid-template-rows:4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% ;grid-template-columns:1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% ;-ms-grid-rows:4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% 4.545% ;-ms-grid-columns:1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% 1.852% }
div[jmap-id="jmap-1"] .jmap-divider {grid-column:18 / 22;-ms-grid-column:18;-ms-grid-column-span:4;grid-row:11 / 13;-ms-grid-row:11;-ms-grid-row-span:2;transform:scale(1.6);border-right-width:1px;border-right-color:#bfbfbf;border-right-style:solid;border-bottom-width:1px;border-bottom-color:#bfbfbf;border-bottom-style:solid}
div[jmap-id="jmap-1"] .jmap-infobox {grid-column:1 / 38;-ms-grid-column:1;-ms-grid-column-span:37;grid-row:1 / 10;-ms-grid-row:1;-ms-grid-row-span:9;background-color:transparent;z-index:130}
div[jmap-id="jmap-1"] .prefecture {position:relative;display:flex;cursor:pointer;margin:1px;box-shadow:0px 0px 0 1px #ffffff;border:0px solid transparent;font-size:0.8rem;color:#000;border-radius:3px;flex-direction:column;justify-content:center;align-items:center;text-align:center;box-sizing:border-box;transition:box-shadow 0.2s;overflow:hidden;white-space:normal}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="1"] {grid-column:41 / 55;-ms-grid-column:41;-ms-grid-column-span:14;grid-row:1 / 5;-ms-grid-row:1;-ms-grid-row-span:4;background-color:#7f7eda;z-index:29}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="2"] {grid-column:41 / 53;-ms-grid-column:41;-ms-grid-column-span:12;grid-row:5 / 7;-ms-grid-row:5;-ms-grid-row-span:2;background-color:#759ef4;z-index:30}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="3"] {grid-column:47 / 53;-ms-grid-column:47;-ms-grid-column-span:6;grid-row:7 / 9;-ms-grid-row:7;-ms-grid-row-span:2;background-color:#759ef4;z-index:33}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="4"] {grid-column:47 / 53;-ms-grid-column:47;-ms-grid-column-span:6;grid-row:9 / 11;-ms-grid-row:9;-ms-grid-row-span:2;background-color:#759ef4;z-index:34}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="5"] {grid-column:41 / 47;-ms-grid-column:41;-ms-grid-column-span:6;grid-row:7 / 9;-ms-grid-row:7;-ms-grid-row-span:2;background-color:#759ef4;z-index:31}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="6"] {grid-column:41 / 47;-ms-grid-column:41;-ms-grid-column-span:6;grid-row:9 / 11;-ms-grid-row:9;-ms-grid-row-span:2;background-color:#759ef4;z-index:32}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="7"] {grid-column:45 / 53;-ms-grid-column:45;-ms-grid-column-span:8;grid-row:11 / 13;-ms-grid-row:11;-ms-grid-row-span:2;background-color:#759ef4;z-index:39}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="8"] {grid-column:49 / 53;-ms-grid-column:49;-ms-grid-column-span:4;grid-row:13 / 16;-ms-grid-row:13;-ms-grid-row-span:3;background-color:#7ecfea;z-index:42}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="9"] {grid-column:45 / 49;-ms-grid-column:45;-ms-grid-column-span:4;grid-row:13 / 16;-ms-grid-row:13;-ms-grid-row-span:3;background-color:#7ecfea;z-index:41}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="10"] {grid-column:41 / 45;-ms-grid-column:41;-ms-grid-column-span:4;grid-row:13 / 16;-ms-grid-row:13;-ms-grid-row-span:3;background-color:#7ecfea;z-index:40}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="11"] {grid-column:41 / 49;-ms-grid-column:41;-ms-grid-column-span:8;grid-row:16 / 18;-ms-grid-row:16;-ms-grid-row-span:2;background-color:#7ecfea;z-index:43}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="12"] {grid-column:49 / 53;-ms-grid-column:49;-ms-grid-column-span:4;grid-row:16 / 21;-ms-grid-row:16;-ms-grid-row-span:5;background-color:#7ecfea;z-index:46}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="13"] {grid-column:41 / 49;-ms-grid-column:41;-ms-grid-column-span:8;grid-row:18 / 20;-ms-grid-row:18;-ms-grid-row-span:2;background-color:#7ecfea;z-index:44}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="14"] {grid-column:41 / 49;-ms-grid-column:41;-ms-grid-column-span:8;grid-row:20 / 22;-ms-grid-row:20;-ms-grid-row-span:2;background-color:#7ecfea;z-index:45}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="15"] {grid-column:37 / 45;-ms-grid-column:37;-ms-grid-column-span:8;grid-row:11 / 13;-ms-grid-row:11;-ms-grid-row-span:2;background-color:#7cdc92;z-index:35}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="16"] {grid-column:33 / 37;-ms-grid-column:33;-ms-grid-column-span:4;grid-row:11 / 13;-ms-grid-row:11;-ms-grid-row-span:2;background-color:#7cdc92;z-index:26}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="17"] {grid-column:29 / 33;-ms-grid-column:29;-ms-grid-column-span:4;grid-row:10 / 12;-ms-grid-row:10;-ms-grid-row-span:2;background-color:#7cdc92;z-index:18}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="18"] {grid-column:27 / 33;-ms-grid-column:27;-ms-grid-column-span:6;grid-row:12 / 14;-ms-grid-row:12;-ms-grid-row-span:2;background-color:#7cdc92;z-index:19}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="19"] {grid-column:37 / 41;-ms-grid-column:37;-ms-grid-column-span:4;grid-row:17 / 19;-ms-grid-row:17;-ms-grid-row-span:2;background-color:#7cdc92;z-index:37}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="20"] {grid-column:37 / 41;-ms-grid-column:37;-ms-grid-column-span:4;grid-row:13 / 17;-ms-grid-row:13;-ms-grid-row-span:4;background-color:#7cdc92;z-index:36}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="21"] {grid-column:33 / 37;-ms-grid-column:33;-ms-grid-column-span:4;grid-row:13 / 17;-ms-grid-row:13;-ms-grid-row-span:4;background-color:#7cdc92;z-index:27}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="22"] {grid-column:37 / 41;-ms-grid-column:37;-ms-grid-column-span:4;grid-row:19 / 22;-ms-grid-row:19;-ms-grid-row-span:3;background-color:#7cdc92;z-index:38}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="23"] {grid-column:33 / 37;-ms-grid-column:33;-ms-grid-column-span:4;grid-row:17 / 20;-ms-grid-row:17;-ms-grid-row-span:3;background-color:#7cdc92;z-index:28}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="24"] {grid-column:29 / 33;-ms-grid-column:29;-ms-grid-column-span:4;grid-row:18 / 20;-ms-grid-row:18;-ms-grid-row-span:2;background-color:#ffe966;z-index:24}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="25"] {grid-column:29 / 33;-ms-grid-column:29;-ms-grid-column-span:4;grid-row:14 / 16;-ms-grid-row:14;-ms-grid-row-span:2;background-color:#ffe966;z-index:22}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="26"] {grid-column:25 / 29;-ms-grid-column:25;-ms-grid-column-span:4;grid-row:14 / 17;-ms-grid-row:14;-ms-grid-row-span:3;background-color:#ffe966;z-index:20}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="27"] {grid-column:25 / 29;-ms-grid-column:25;-ms-grid-column-span:4;grid-row:17 / 20;-ms-grid-row:17;-ms-grid-row-span:3;background-color:#ffe966;z-index:21}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="28"] {grid-column:21 / 25;-ms-grid-column:21;-ms-grid-column-span:4;grid-row:15 / 19;-ms-grid-row:15;-ms-grid-row-span:4;background-color:#ffe966;z-index:13}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="29"] {grid-column:29 / 33;-ms-grid-column:29;-ms-grid-column-span:4;grid-row:16 / 18;-ms-grid-row:16;-ms-grid-row-span:2;background-color:#ffe966;z-index:23}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="30"] {grid-column:25 / 31;-ms-grid-column:25;-ms-grid-column-span:6;grid-row:20 / 22;-ms-grid-row:20;-ms-grid-row-span:2;background-color:#ffe966;z-index:25}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="31"] {grid-column:17 / 21;-ms-grid-column:17;-ms-grid-column-span:4;grid-row:15 / 17;-ms-grid-row:15;-ms-grid-row-span:2;background-color:#ffcc66;z-index:11}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="32"] {grid-column:13 / 17;-ms-grid-column:13;-ms-grid-column-span:4;grid-row:15 / 17;-ms-grid-row:15;-ms-grid-row-span:2;background-color:#ffcc66;z-index:9}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="33"] {grid-column:17 / 21;-ms-grid-column:17;-ms-grid-column-span:4;grid-row:17 / 19;-ms-grid-row:17;-ms-grid-row-span:2;background-color:#ffcc66;z-index:12}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="34"] {grid-column:13 / 17;-ms-grid-column:13;-ms-grid-column-span:4;grid-row:17 / 19;-ms-grid-row:17;-ms-grid-row-span:2;background-color:#ffcc66;z-index:10}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="35"] {grid-column:9 / 13;-ms-grid-column:9;-ms-grid-column-span:4;grid-row:15 / 19;-ms-grid-row:15;-ms-grid-row-span:4;background-color:#ffcc66;z-index:8}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="36"] {grid-column:17 / 23;-ms-grid-column:17;-ms-grid-column-span:6;grid-row:21 / 23;-ms-grid-row:21;-ms-grid-row-span:2;background-color:#fb9466;z-index:17}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="37"] {grid-column:17 / 23;-ms-grid-column:17;-ms-grid-column-span:6;grid-row:19 / 21;-ms-grid-row:19;-ms-grid-row-span:2;background-color:#fb9466;z-index:16}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="38"] {grid-column:11 / 17;-ms-grid-column:11;-ms-grid-column-span:6;grid-row:19 / 21;-ms-grid-row:19;-ms-grid-row-span:2;background-color:#fb9466;z-index:14}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="39"] {grid-column:11 / 17;-ms-grid-column:11;-ms-grid-column-span:6;grid-row:21 / 23;-ms-grid-row:21;-ms-grid-row-span:2;background-color:#fb9466;z-index:15}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="40"] {grid-column:5 / 9;-ms-grid-column:5;-ms-grid-column-span:4;grid-row:15 / 17;-ms-grid-row:15;-ms-grid-row-span:2;background-color:#ff9999;z-index:4}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="41"] {grid-column:1 / 5;-ms-grid-column:1;-ms-grid-column-span:4;grid-row:17 / 19;-ms-grid-row:17;-ms-grid-row-span:2;background-color:#ff9999;z-index:2}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="42"] {grid-column:1 / 5;-ms-grid-column:1;-ms-grid-column-span:4;grid-row:15 / 17;-ms-grid-row:15;-ms-grid-row-span:2;background-color:#ff9999;z-index:1}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="43"] {grid-column:1 / 5;-ms-grid-column:1;-ms-grid-column-span:4;grid-row:19 / 21;-ms-grid-row:19;-ms-grid-row-span:2;background-color:#ff9999;z-index:3}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="44"] {grid-column:5 / 9;-ms-grid-column:5;-ms-grid-column-span:4;grid-row:17 / 19;-ms-grid-row:17;-ms-grid-row-span:2;background-color:#ff9999;z-index:5}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="45"] {grid-column:5 / 9;-ms-grid-column:5;-ms-grid-column-span:4;grid-row:19 / 21;-ms-grid-row:19;-ms-grid-row-span:2;background-color:#ff9999;z-index:6}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="46"] {grid-column:1 / 9;-ms-grid-column:1;-ms-grid-column-span:8;grid-row:21 / 23;-ms-grid-row:21;-ms-grid-row-span:2;background-color:#ff9999;z-index:7}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="47"] {grid-column:18 / 22;-ms-grid-column:18;-ms-grid-column-span:4;grid-row:11 / 13;-ms-grid-row:11;-ms-grid-row-span:2;background-color:#eb98ff;z-index:47}
div[jmap-id="jmap-1"] .prefecture:hover {background-color:#666;box-shadow:0 0 0 1px #fff, 0 0 5px #333;transform:scale(1.01);z-index:120}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="1"]:hover {background-color:#b3b2ee}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="2"]:hover {background-color:#98b9ff}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="3"]:hover {background-color:#98b9ff}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="4"]:hover {background-color:#98b9ff}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="5"]:hover {background-color:#98b9ff}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="6"]:hover {background-color:#98b9ff}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="7"]:hover {background-color:#98b9ff}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="8"]:hover {background-color:#b7e5f4}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="9"]:hover {background-color:#b7e5f4}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="10"]:hover {background-color:#b7e5f4}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="11"]:hover {background-color:#b7e5f4}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="12"]:hover {background-color:#b7e5f4}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="13"]:hover {background-color:#b7e5f4}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="14"]:hover {background-color:#b7e5f4}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="15"]:hover {background-color:#aceebb}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="16"]:hover {background-color:#aceebb}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="17"]:hover {background-color:#aceebb}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="18"]:hover {background-color:#aceebb}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="19"]:hover {background-color:#aceebb}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="20"]:hover {background-color:#aceebb}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="21"]:hover {background-color:#aceebb}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="22"]:hover {background-color:#aceebb}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="23"]:hover {background-color:#aceebb}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="24"]:hover {background-color:#fff19c}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="25"]:hover {background-color:#fff19c}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="26"]:hover {background-color:#fff19c}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="27"]:hover {background-color:#fff19c}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="28"]:hover {background-color:#fff19c}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="29"]:hover {background-color:#fff19c}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="30"]:hover {background-color:#fff19c}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="31"]:hover {background-color:#ffe0a3}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="32"]:hover {background-color:#ffe0a3}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="33"]:hover {background-color:#ffe0a3}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="34"]:hover {background-color:#ffe0a3}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="35"]:hover {background-color:#ffe0a3}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="36"]:hover {background-color:#ffbb9c}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="37"]:hover {background-color:#ffbb9c}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="38"]:hover {background-color:#ffbb9c}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="39"]:hover {background-color:#ffbb9c}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="40"]:hover {background-color:#ffbdbd}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="41"]:hover {background-color:#ffbdbd}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="42"]:hover {background-color:#ffbdbd}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="43"]:hover {background-color:#ffbdbd}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="44"]:hover {background-color:#ffbdbd}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="45"]:hover {background-color:#ffbdbd}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="46"]:hover {background-color:#ffbdbd}
div[jmap-id="jmap-1"] .prefecture[jmap-uniq="47"]:hover {background-color:#f5c9ff}</style>
<div jmap-id="jmap-1" class="jmap-container">
<div jmap-view="map" class="jmap-content">
<div class="jmap-divider">
</div>

<div class="jmap-infobox">
</div>

<?php
$db = new PDO('mysql:host=us-cdbr-east-02.cleardb.com;port=3306;dbname=heroku_ef5f71273fe5d40;charset=utf8','b712f8e8641bf4','466f991d');
$hokkaidoflg = $db->query("select flg from list where prefecture = '北海道'");
$hkd = $hokkaidoflg->fetch();
$aomoriflg = $db->query("select flg from list where prefecture = '青森県'");
$amr = $aomoriflg->fetch();
$iwateflg = $db->query("select flg from list where prefecture = '岩手県'");
$miyagiflg = $db->query("select flg from list where prefecture = '宮城県'");
$akitaflg = $db->query("select flg from list where prefecture = '秋田県'");
$yamagataflg = $db->query("select flg from list where prefecture = '山形県'");
$fukushimaflg = $db->query("select flg from list where prefecture = '福島県'");
$ibarakiflg = $db->query("select flg from list where prefecture = '茨城県'");
$tochigiflg = $db->query("select flg from list where prefecture = '栃木県'");
$gunmaflg = $db->query("select flg from list where prefecture = '群馬県'");
$saitamaflg = $db->query("select flg from list where prefecture = '埼玉県'");
$chibaflg = $db->query("select flg from list where prefecture = '千葉県'");
$tokyoflg = $db->query("select flg from list where prefecture = '東京都'");
$kanagawaflg = $db->query("select flg from list where prefecture = '神奈川県'");
$niigataflg = $db->query("select flg from list where prefecture = '新潟県'");
$toyamaflg = $db->query("select flg from list where prefecture = '富山県'");
$ishikawaflg = $db->query("select flg from list where prefecture = '石川県'");
$fukuiflg = $db->query("select flg from list where prefecture = '福井県'");
$yamanashiflg = $db->query("select flg from list where prefecture = '山梨県'");
$naganoflg = $db->query("select flg from list where prefecture = '長野県'");
$gifuflg = $db->query("select flg from list where prefecture = '岐阜県'");
$shizuokaflg = $db->query("select flg from list where prefecture = '静岡県'");
$aichiflg = $db->query("select flg from list where prefecture = '愛知県'");
$mieflg = $db->query("select flg from list where prefecture = '三重県'");
$shigaflg = $db->query("select flg from list where prefecture = '滋賀県'");
$kyotoflg = $db->query("select flg from list where prefecture = '京都府'");
$osakaflg = $db->query("select flg from list where prefecture = '大阪府'");
$hyogoflg = $db->query("select flg from list where prefecture = '兵庫県'");
$naraflg = $db->query("select flg from list where prefecture = '奈良県'");
$wakayamaflg = $db->query("select flg from list where prefecture = '和歌山県'");
$tottoriflg = $db->query("select flg from list where prefecture = '鳥取県'");
$shimaneflg = $db->query("select flg from list where prefecture = '島根県'");
$okayamaflg = $db->query("select flg from list where prefecture = '岡山県'");
$hiroshimaflg = $db->query("select flg from list where prefecture = '広島県'");
$yamaguchiflg = $db->query("select flg from list where prefecture = '山口県'");
$tokushimaflg = $db->query("select flg from list where prefecture = '徳島県'");
$kagawaflg = $db->query("select flg from list where prefecture = '香川県'");
$ehimeflg = $db->query("select flg from list where prefecture = '愛媛県'");
$kochiflg = $db->query("select flg from list where prefecture = '高知県'");
$fukuokaflg = $db->query("select flg from list where prefecture = '福岡県'");
$sagaflg = $db->query("select flg from list where prefecture = '佐賀県'");
$nagasakiflg = $db->query("select flg from list where prefecture = '長崎県'");
$kumamotoflg = $db->query("select flg from list where prefecture = '熊本県'");
$oitaflg = $db->query("select flg from list where prefecture = '大分県'");
$miyazakiflg = $db->query("select flg from list where prefecture = '宮崎県'");
$kagoshimaflg = $db->query("select flg from list where prefecture = '鹿児島県'");
$okinawaflg = $db->query("select flg from list where prefecture = '沖縄県'");
?>



<?php if($hkd == 1):?>
<div class="prefecture" jmap-uniq="1">
<a href = 'https://startpage001.herokuapp.com/traveler/47/hokkaido.php'>北海道</a>
</div>
<?php endif; ?>

<?php if($amr == 1):?>
<div class="prefecture" jmap-uniq="2">
<a href = 'https://startpage001.herokuapp.com/traveler/47/aomori.php'>青森県</a>
</div>
<?php endif; ?>

<?php if($iwateflg == 1):?>
<div class="prefecture" jmap-uniq="3">
<a href = 'https://startpage001.herokuapp.com/traveler/47/iwate.php'>岩手県</a>
</div>
<?php endif; ?>

<?php if($miyagiflg == 1):?>
<div class="prefecture" jmap-uniq="4">
<a href = 'https://startpage001.herokuapp.com/traveler/47/miyagi.php'>宮城県</a>
</div>
<?php endif; ?>

<?php if($akitaflg == 1):?>
<div class="prefecture" jmap-uniq="5">
<a href = 'https://startpage001.herokuapp.com/traveler/47/akita.php'>秋田県</a>
</div>
<?php endif; ?>

<?php if($yamagataflg == 1):?>
<div class="prefecture" jmap-uniq="6">
<a href = 'https://startpage001.herokuapp.com/traveler/47/yamagata.php'>山形県</a>
</div>
<?php endif; ?>

<?php if($fukushimaflg == 1):?>
<div class="prefecture" jmap-uniq="7">
<a href = 'https://startpage001.herokuapp.com/traveler/47/fukushima.php'>福島県</a>
</div>
<?php endif; ?>

<?php if($ibarakiflg == 1):?>
<div class="prefecture" jmap-uniq="8">
<a href = 'https://startpage001.herokuapp.com/traveler/47/ibaraki.php'>茨城県</a>
</div>
<?php endif; ?>

<?php if($tochigiflg == 1):?>
<div class="prefecture" jmap-uniq="9">
<a href = 'https://startpage001.herokuapp.com/traveler/47/tochigi.php'>栃木県</a>
</div>
<?php endif; ?>

<?php if($gunmaflg == 1):?>
<div class="prefecture" jmap-uniq="10">
<a href = 'https://startpage001.herokuapp.com/traveler/47/gunma.php'>群馬県</a>
</div>
<?php endif; ?>

<?php if($saitamaflg == 1):?>
<div class="prefecture" jmap-uniq="11">
<a href = 'https://startpage001.herokuapp.com/traveler/47/saitama.php'>埼玉県</a>
</div>
<?php endif; ?>

<?php if($chibaflg == 1):?>
<div class="prefecture" jmap-uniq="12">
<a href = 'https://startpage001.herokuapp.com/traveler/47/chiba.php'>千葉県</a>
</div>
<?php endif; ?>

<?php if($tokyoflg == 1):?>
<div class="prefecture" jmap-uniq="13">
<a href = 'https://startpage001.herokuapp.com/traveler/47/tokyo.php'>東京都</a>
</div>
<?php endif; ?>

<?php if($kanagawaflg == 1):?>
<div class="prefecture" jmap-uniq="14">
<a href = 'https://startpage001.herokuapp.com/traveler/47/kanagawa.php'>神奈川県</a>
</div>
<?php endif; ?>

<?php if($niigataflg == 1):?>
<div class="prefecture" jmap-uniq="15">
<a href = 'https://startpage001.herokuapp.com/traveler/47/niigata.php'>新潟県</a>
</div>
<?php endif; ?>

<?php if($toyamaflg == 1):?>
<div class="prefecture" jmap-uniq="16">
<a href = 'https://startpage001.herokuapp.com/traveler/47/toyama.php'>富山県</a>
</div>
<?php endif; ?>

<?php if($ishikawaflg == 1):?>
<div class="prefecture" jmap-uniq="17">
<a href = 'https://startpage001.herokuapp.com/traveler/47/ishikawa.php'>石川県</a>
</div>
<?php endif; ?>

<?php if($fukuiflg == 1):?>
<div class="prefecture" jmap-uniq="18">
<a href = 'https://startpage001.herokuapp.com/traveler/47/fukui.php'>福井県</a>
</div>
<?php endif; ?>

<?php if($yamanashiflg == 1):?>
<div class="prefecture" jmap-uniq="19">
<a href = 'https://startpage001.herokuapp.com/traveler/47/yamanashi.php'>山梨県</a>
</div>
<?php endif; ?>

<?php if($naganoflg == 1):?>
<div class="prefecture" jmap-uniq="20">
<a href = 'https://startpage001.herokuapp.com/traveler/47/nagano.php'>長野県</a>
</div>
<?php endif; ?>

<?php if($gifuflg == 1):?>
<div class="prefecture" jmap-uniq="21">
<a href = 'https://startpage001.herokuapp.com/traveler/47/gifu.php'>岐阜県</a>
</div>
<?php endif; ?>

<?php if($shizuokaflg == 1):?>
<div class="prefecture" jmap-uniq="22">
<a href = 'https://startpage001.herokuapp.com/traveler/47/shizuoka.php'>静岡県</a>
</div>
<?php endif; ?>

<?php if($aichiflg == 1):?>
<div class="prefecture" jmap-uniq="23">
<a href = 'https://startpage001.herokuapp.com/traveler/47/aichi.php'>愛知県</a>
</div>
<?php endif; ?>

<?php if($mieflg == 1):?>
<div class="prefecture" jmap-uniq="24">
<a href = 'https://startpage001.herokuapp.com/traveler/47/mie.php'>三重県</a>
</div>
<?php endif; ?>

<?php if($shigaflg == 1):?>
<div class="prefecture" jmap-uniq="25">
<a href = 'https://startpage001.herokuapp.com/traveler/47/shiga.php'>滋賀県</a>
</div>
<?php endif; ?>

<?php if($kyotoflg == 1):?>
<div class="prefecture" jmap-uniq="26">
<a href = 'https://startpage001.herokuapp.com/traveler/47/kyoto.php'>京都府</a>
</div>
<?php endif; ?>

<?php if($osakaflg == 1):?>
<div class="prefecture" jmap-uniq="27">
<a href = 'https://startpage001.herokuapp.com/traveler/47/osaka.php'>大阪府</a>
</div>
<?php endif; ?>

<?php if($hyogoflg == 1):?>
<div class="prefecture" jmap-uniq="28">
<a href = 'https://startpage001.herokuapp.com/traveler/47/hyogo.php'>兵庫県</a>
</div>
<?php endif; ?>

<?php if($naraflg == 1):?>
<div class="prefecture" jmap-uniq="29">
<a href = 'https://startpage001.herokuapp.com/traveler/47/nara.php'>奈良県</a>
</div>
<?php endif; ?>

<?php if($wakayamaflg == 1):?>
<div class="prefecture" jmap-uniq="30">
<a href = 'https://startpage001.herokuapp.com/traveler/47/wakayama.php'>和歌山県</a>
</div>
<?php endif; ?>

<?php if($tottoriflg == 1):?>
<div class="prefecture" jmap-uniq="31">
<a href = 'https://startpage001.herokuapp.com/traveler/47/tottori.php'>鳥取県</a>
</div>
<?php endif; ?>

<?php if($shimaneflg == 1):?>
<div class="prefecture" jmap-uniq="32">
<a href = 'https://startpage001.herokuapp.com/traveler/47/shimane.php'>島根県</a>
</div>
<?php endif; ?>

<?php if($okayamaflg == 1):?>
<div class="prefecture" jmap-uniq="33">
<a href = 'https://startpage001.herokuapp.com/traveler/47/okayama.php'>岡山県</a>
</div>
<?php endif; ?>

<?php if($hiroshimaflg == 1):?>
<div class="prefecture" jmap-uniq="34">
<a href = 'https://startpage001.herokuapp.com/traveler/47/hiroshima.php'>広島県</a>
</div>
<?php endif; ?>

<?php if($yamaguchiflg == 1):?>
<div class="prefecture" jmap-uniq="35">
<a href = 'https://startpage001.herokuapp.com/traveler/47/yamaguchi.php'>山口県</a>
</div>
<?php endif; ?>

<?php if($tokushimaflg == 1):?>
<div class="prefecture" jmap-uniq="36">
<a href = 'https://startpage001.herokuapp.com/traveler/47/tokushima.php'>徳島県</a>
</div>
<?php endif; ?>

<?php if($kagawaflg == 1):?>
<div class="prefecture" jmap-uniq="37">
<a href = 'https://startpage001.herokuapp.com/traveler/47/kagawa.php'>香川県</a>
</div>
<?php endif; ?>

<?php if($ehimeflg == 1):?>
<div class="prefecture" jmap-uniq="38">
<a href = 'https://startpage001.herokuapp.com/traveler/47/ehime.php'>愛媛県</a>
</div>
<?php endif; ?>

<?php if($kochiflg == 1):?>
<div class="prefecture" jmap-uniq="39">
<a href = 'https://startpage001.herokuapp.com/traveler/47/kochi.php'>高知県</a>
</div>
<?php endif; ?>

<?php if($fukuokaflg == 1):?>
<div class="prefecture" jmap-uniq="40">
<a href = 'https://startpage001.herokuapp.com/traveler/47/fukuoka.php'>福岡県</a>
</div>
<?php endif; ?>

<?php if($sagaflg == 1):?>
<div class="prefecture" jmap-uniq="41">
<a href = 'https://startpage001.herokuapp.com/traveler/47/saga.php'>佐賀県</a>
</div>
<?php endif; ?>

<?php if($nagasakiflg == 1):?>
<div class="prefecture" jmap-uniq="42">
<a href = 'https://startpage001.herokuapp.com/traveler/47/nagasaki.php'>長崎県</a>
</div>
<?php endif; ?>

<?php if($kumamotoflg == 1):?>
<div class="prefecture" jmap-uniq="43">
<a href = 'https://startpage001.herokuapp.com/traveler/47/kumamoto.php'>熊本県</a>
</div>
<?php endif; ?>

<?php if($oitaflg == 1):?>
<div class="prefecture" jmap-uniq="44">
<a href = 'https://startpage001.herokuapp.com/traveler/47/oita.php'>大分県</a>
</div>
<?php endif; ?>

<?php if($miyazakiflg == 1):?>
<div class="prefecture" jmap-uniq="45">
<a href = 'https://startpage001.herokuapp.com/traveler/47/miyazaki.php'>宮崎県</a>
</div>
<?php endif; ?>

<?php if($kagoshimaflg == 1):?>
<div class="prefecture" jmap-uniq="46">
<a href = 'https://startpage001.herokuapp.com/traveler/47/kagoshima.php'>鹿児島県</a>
</div>
<?php endif; ?>

<?php if($okinawaflg == 1):?>
<div class="prefecture" jmap-uniq="47">
<a href = 'https://startpage001.herokuapp.com/traveler/47/okinawa.php'>沖縄県</a>
</div>
<?php endif; ?>


</div>
</div>
</div>



<form action ="save.php" method="post">
都道府県
<div><select name="pref" required>
  <option value="">訪れた都道府県を選択して下さい。</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>


</select></div>
spot
<div><input type="text" name = "sight"></div>
感想
<div><textarea name = "impression"></textarea></div>
<input type = "submit" value = "投稿">
</form>
<?php
print "{$kyotoflg[flg]}";
print $naganoflg;
print $hkd;
 ?>

</body>
</html>
