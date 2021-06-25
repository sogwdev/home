<html>
<head>
    <title>あなたの地図</title>
    <meta charset="UTF-8">
    <script src="{{ asset('js/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery/jmap.js') }}"></script>
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

<div class="prefecture" jmap-uniq="1">
<a href = '/MyMap/hokkaido'><p>北海道</p></a>
</div>



<div class="prefecture" jmap-uniq="2">
  <a href = '/MyMap/aomori'><p>青森県</p></a>

</div>



<div class="prefecture" jmap-uniq="3">
<a href = '/MyMap/iwate'><p>岩手県</p></a>
</div>



<div class="prefecture" jmap-uniq="4">
<a href = '/MyMap/miyagi'><p>宮城県</p></a>
</div>



<div class="prefecture" jmap-uniq="5">
<a href = '/MyMap/akita'><p>秋田県</p></a>
</div>



<div class="prefecture" jmap-uniq="6">
<a href = '/MyMap/yamagata'><p>山形県</p></a>
</div>



<div class="prefecture" jmap-uniq="7">
<a href = '/MyMap/fukushima'><p>福島県</p></a>
</div>



<div class="prefecture" jmap-uniq="8">
<a href = '/MyMap/ibaraki'><p>茨木県</p></a>
</div>



<div class="prefecture" jmap-uniq="9">
<a href = '/MyMap/tochigi'><p>栃木県</p></a>
</div>



<div class="prefecture" jmap-uniq="10">
<a href = '/MyMap/gunma'><p>群馬県</p></a>
</div>



<div class="prefecture" jmap-uniq="11">
<a href = '/MyMap/saitama'><p>埼玉県</p></a>
</div>



<div class="prefecture" jmap-uniq="12">
<a href = '/MyMap/chiba'><p>千葉県</p></a>
</div>



<div class="prefecture" jmap-uniq="13">
<a href = '/MyMap/tokyo'><p>東京都</p></a>
</div>



<div class="prefecture" jmap-uniq="14">
<a href = '/MyMap/kanagawa'><p>神奈川県</p></a>
</div>



<div class="prefecture" jmap-uniq="15">
<a href = '/MyMap/niigata'><p>新潟県</p></a>
</div>



<div class="prefecture" jmap-uniq="16">
<a href = '/MyMap/toyama'><p>富山県</p></a>
</div>



<div class="prefecture" jmap-uniq="17">
<a href = '/MyMap/ishikawa'><p>石川県</p></a>
</div>



<div class="prefecture" jmap-uniq="18">
<a href = '/MyMap/fukui'><p>福井県</p></a>
</div>



<div class="prefecture" jmap-uniq="19">
<a href = '/MyMap/yamanashi'><p>山梨県</p></a>
</div>



<div class="prefecture" jmap-uniq="20">
<a href = '/MyMap/nagano'><p>長野県</p></a>
</div>



<div class="prefecture" jmap-uniq="21">
<a href = '/MyMap/gifu'><p>岐阜県</p></a>
</div>



<div class="prefecture" jmap-uniq="22">
<a href = '/MyMap/shizuoka'><p>静岡県</p></a>
</div>



<div class="prefecture" jmap-uniq="23">
<a href = '/MyMap/aichi'><p>愛知県</p></a>
</div>



<div class="prefecture" jmap-uniq="24">
<a href = '/MyMap/mie'><p>三重県</p></a>
</div>



<div class="prefecture" jmap-uniq="25">
<a href = '/MyMap/shiga'><p>滋賀県</p></a>
</div>



<div class="prefecture" jmap-uniq="26">
<a href = '/MyMap/kyoto'><p>京都府</p></a>
</div>



<div class="prefecture" jmap-uniq="27">
<a href = '/MyMap/osaka'><p>大阪府</p></a>
</div>



<div class="prefecture" jmap-uniq="28">
<a href = '/MyMap/hyogo'><p>兵庫県</p></a>
</div>



<div class="prefecture" jmap-uniq="29">
<a href = '/MyMap/nara'><p>奈良県</p></a>
</div>



<div class="prefecture" jmap-uniq="30">
<a href = '/MyMap/wakayama'><p>和歌山県</p></a>
</div>



<div class="prefecture" jmap-uniq="31">
<a href = '/MyMap/tottori'><p>鳥取県</p></a>
</div>



<div class="prefecture" jmap-uniq="32">
<a href = '/MyMap/shimane'><p>島根県</p></a>
</div>



<div class="prefecture" jmap-uniq="33">
<<a href = '/MyMap/okayama'><p>岡山県</p></a>
</div>



<div class="prefecture" jmap-uniq="34">
<a href = '/MyMap/hiroshima'><p>広島県</p></a>
</div>



<div class="prefecture" jmap-uniq="35">
<a href = '/MyMap/yamaguchi'><p>山口県</p></a>
</div>



<div class="prefecture" jmap-uniq="36">
<a href = '/MyMap/tokushima'><p>徳島県</p></a>
</div>



<div class="prefecture" jmap-uniq="37">
<a href = '/MyMap/kagawa'><p>香川県</p></a>
</div>



<div class="prefecture" jmap-uniq="38">
<a href = '/MyMap/ehime'><p>愛媛県</p></a>
</div>



<div class="prefecture" jmap-uniq="39">
<a href = '/MyMap/kochi'><p>高知県</p></a>
</div>



<div class="prefecture" jmap-uniq="40">
<a href = '/MyMap/fukuoka'><p>福岡県</p></a>
</div>



<div class="prefecture" jmap-uniq="41">
<a href = '/MyMap/saga'><p>佐賀県</p></a>
</div>



<div class="prefecture" jmap-uniq="42">
<a href = '/MyMap/nagasaki'><p>長崎県</p></a>
</div>



<div class="prefecture" jmap-uniq="43">
<a href = '/MyMap/kumamoto'><p>熊本県</p></a>
</div>



<div class="prefecture" jmap-uniq="44">
<a href = '/MyMap/ooita'><p>大分県</p></a>
</div>



<div class="prefecture" jmap-uniq="45">
<a href = '/MyMap/miyazaki'><p>宮崎県</p></a>
</div>



<div class="prefecture" jmap-uniq="46">
<a href = '/MyMap/kagoshima'><p>鹿児島県</p></a>
</div>



<div class="prefecture" jmap-uniq="47">
<a href = '/MyMap/okinawa'><p>沖縄県</p></a>
</div>



</div>
</div>
</div>



<form  method="post">
  @csrf
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


</body>
</html>
