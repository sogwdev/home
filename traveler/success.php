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
?>



<?php if($hokkaidoflg == 1):?>
<div class="prefecture" jmap-uniq="1">

<a href = 'https://startpage001.herokuapp.com/traveler/47/hokkaido.php'>北海道</a>

</div>
<?php endif; ?>

<?php if(1 == 2):?>
<div class="prefecture" jmap-uniq="2">
<strong>青森</strong>
</div>
<?php endif; ?>
<div class="prefecture" jmap-uniq="3">
<strong>岩手</strong>
</div>
<div class="prefecture" jmap-uniq="4">
<strong>宮城</strong>
</div>
<div class="prefecture" jmap-uniq="5">
<strong>秋田</strong>
</div>
<div class="prefecture" jmap-uniq="6">
<strong>山形</strong>
</div>
<div class="prefecture" jmap-uniq="7">
<strong>福島</strong>
</div>
<div class="prefecture" jmap-uniq="8">
<strong>茨城</strong>
</div>
<div class="prefecture" jmap-uniq="9">
<strong>栃木</strong>
</div>
<div class="prefecture" jmap-uniq="10">
<strong>群馬</strong>
</div>
<div class="prefecture" jmap-uniq="11">
<strong>埼玉</strong>
</div>
<div class="prefecture" jmap-uniq="12">
<strong>千葉</strong>
</div>
<div class="prefecture" jmap-uniq="13">
<strong>東京</strong>
</div>
<div class="prefecture" jmap-uniq="14">
<strong>神奈川</strong>
</div>
<div class="prefecture" jmap-uniq="15">
<strong>新潟</strong>
</div>
<div class="prefecture" jmap-uniq="16">
<strong>富山</strong>
</div>
<div class="prefecture" jmap-uniq="17">
<strong>石川</strong>
</div>
<div class="prefecture" jmap-uniq="18">
<strong>福井</strong>
</div>
<div class="prefecture" jmap-uniq="19">
<strong>山梨</strong>
</div>
<div class="prefecture" jmap-uniq="20">
<strong>長野</strong>
</div>
<div class="prefecture" jmap-uniq="21">
<strong>岐阜</strong>
</div>
<div class="prefecture" jmap-uniq="22">
<strong>静岡</strong>
</div>
<div class="prefecture" jmap-uniq="23">
<strong>愛知</strong>
</div>
<div class="prefecture" jmap-uniq="24">
<strong>三重</strong>
</div>
<div class="prefecture" jmap-uniq="25">
<strong>滋賀</strong>
</div>
<div class="prefecture" jmap-uniq="26">
<strong>京都</strong>
</div>
<div class="prefecture" jmap-uniq="27">
<strong>大阪</strong>
</div>
<div class="prefecture" jmap-uniq="28">
<strong>兵庫</strong>
</div>
<div class="prefecture" jmap-uniq="29">
<strong>奈良</strong>
</div>
<div class="prefecture" jmap-uniq="30">
<strong>和歌山</strong>
</div>
<div class="prefecture" jmap-uniq="31">
<strong>鳥取</strong>
</div>
<div class="prefecture" jmap-uniq="32">
<strong>島根</strong>
</div>
<div class="prefecture" jmap-uniq="33">
<strong>岡山</strong>
</div>
<div class="prefecture" jmap-uniq="34">
<strong>広島</strong>
</div>
<div class="prefecture" jmap-uniq="35">
<strong>山口</strong>
</div>
<div class="prefecture" jmap-uniq="36">
<strong>徳島</strong>
</div>
<div class="prefecture" jmap-uniq="37">
<strong>香川</strong>
</div>
<div class="prefecture" jmap-uniq="38">
<strong>愛媛</strong>
</div>
<div class="prefecture" jmap-uniq="39">
<strong>高知</strong>
</div>
<div class="prefecture" jmap-uniq="40">
<strong>福岡</strong>
</div>
<div class="prefecture" jmap-uniq="41">
<strong>佐賀</strong>
</div>
<div class="prefecture" jmap-uniq="42">
<strong>長崎</strong>
</div>
<div class="prefecture" jmap-uniq="43">
<strong>熊本</strong>
</div>
<div class="prefecture" jmap-uniq="44">
<strong>大分</strong>
</div>
<div class="prefecture" jmap-uniq="45">
<strong>宮崎</strong>
</div>
<div class="prefecture" jmap-uniq="46">
<strong>鹿児島</strong>
</div>
<div class="prefecture" jmap-uniq="47">
<strong>沖縄</strong>
</div>
</div>
</div>
</div>



<form action ="save.php" method="post">
都道府県
<div><select name="pref" required>
  <option value="">訪れた都道府県を選択して下さい。</option>
  <option value="1">北海道</option>
  <option value="2">青森県</option>
  <option value="3">岩手県</option>
  <option value="4">宮城県</option>
  <option value="5">秋田県</option>
  <option value="6">山形県</option>
  <option value="7">福島県</option>
  <option value="8">茨城県</option>
  <option value="9">栃木県</option>
  <option value="10">群馬県</option>
  <option value="11">埼玉県</option>
  <option value="12">千葉県</option>
  <option value="13">東京都</option>
  <option value="14">神奈川県</option>
  <option value="15">新潟県</option>
  <option value="16">富山県</option>
  <option value="17">石川県</option>
  <option value="18">福井県</option>
  <option value="19">山梨県</option>
  <option value="20">長野県</option>
  <option value="21">岐阜県</option>
  <option value="22">静岡県</option>
  <option value="23">愛知県</option>
  <option value="24">三重県</option>
  <option value="25">滋賀県</option>
  <option value="26">京都府</option>
  <option value="27">大阪府</option>
  <option value="28">兵庫県</option>
  <option value="29">奈良県</option>
  <option value="30">和歌山県</option>
  <option value="31">鳥取県</option>
  <option value="32">島根県</option>
  <option value="33">岡山県</option>
  <option value="34">広島県</option>
  <option value="35">山口県</option>
  <option value="36">徳島県</option>
  <option value="37">香川県</option>
  <option value="38">愛媛県</option>
  <option value="39">高知県</option>
  <option value="40">福岡県</option>
  <option value="41">佐賀県</option>
  <option value="42">長崎県</option>
  <option value="43">熊本県</option>
  <option value="44">大分県</option>
  <option value="45">宮崎県</option>
  <option value="46">鹿児島県</option>
  <option value="47">沖縄県</option>

</select></div>
spot
<div><input type="text" name = "sight"></div>
感想
<div><textarea name = "impression"></textarea></div>
<input type = "submit" value = "投稿">
</form>


</body>
</html>
