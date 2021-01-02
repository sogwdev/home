<html>
<head>
    <title>あなたの地図</title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="assets/jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/jquery/jmap.js"></script>
    <!--<script type="text/javascript" src="assets/prefecture.js"></script>-->

    <script type="text/javascript">
    $(document).ready(function() {
$('#jmap').jmap({
    height: '450px',
    lineColor: '#bfbfbf',
    lineWidth: 1,
    showInfobox: true,
    backgroundRadius: '0.3rem',
    backgroundPadding: '1rem',
    backgroundColor: '#ff000000',
    prefectureClass: 'prefecture',
    prefectureLineColor: '#ffffff',
    prefectureLineWidth: 1,
    prefectureLineHoverColor : '#fff',
    fontSize: '0.8rem',
    fontColor: '#000',
    font: 'serif',
    areas: [
    {code : 1, name: "北海道", color: "#000000", hoverColor: "#b3b2ee" },
    {code : 2, name: "青森", color: "#759ef4", hoverColor: "#98b9ff" },
    {code : 3, name: "岩手", color: "#759ef4", hoverColor: "#98b9ff" },
    {code : 4, name: "宮城", color: "#759ef4", hoverColor: "#98b9ff" },
    {code : 5, name: "秋田", color: "#759ef4", hoverColor: "#98b9ff" },
    {code : 6, name: "山形", color: "#759ef4", hoverColor: "#98b9ff" },
    {code : 7, name: "福島", color: "#759ef4", hoverColor: "#98b9ff" },
    {code : 8, name: "茨城", color: "#7ecfea", hoverColor: "#b7e5f4" },
    {code : 9, name: "栃木", color: "#7ecfea", hoverColor: "#b7e5f4" },
    {code : 10, name: "群馬", color: "#7ecfea", hoverColor: "#b7e5f4" },
    {code : 11, name: "埼玉", color: "#7ecfea", hoverColor: "#b7e5f4" },
    {code : 12, name: "千葉", color: "#7ecfea", hoverColor: "#b7e5f4" },
    {code : 13, name: "東京", color: "#7ecfea", hoverColor: "#b7e5f4" },
    {code : 14, name: "神奈川", color: "#7ecfea", hoverColor: "#b7e5f4" },
    {code : 15, name: "新潟", color: "#7cdc92", hoverColor: "#aceebb" },
    {code : 16, name: "富山", color: "#7cdc92", hoverColor: "#aceebb" },
    {code : 17, name: "石川", color: "#7cdc92", hoverColor: "#aceebb" },
    {code : 18, name: "福井", color: "#7cdc92", hoverColor: "#aceebb" },
    {code : 19, name: "山梨", color: "#7cdc92", hoverColor: "#aceebb" },
    {code : 20, name: "長野", color: "#7cdc92", hoverColor: "#aceebb" },
    {code : 21, name: "岐阜", color: "#7cdc92", hoverColor: "#aceebb" },
    {code : 22, name: "静岡", color: "#7cdc92", hoverColor: "#aceebb" },
    {code : 23, name: "愛知", color: "#7cdc92", hoverColor: "#aceebb" },
    {code : 24, name: "三重", color: "#ffe966", hoverColor: "#fff19c" },
    {code : 25, name: "滋賀", color: "#ffe966", hoverColor: "#fff19c" },
    {code : 26, name: "京都", color: "#ffe966", hoverColor: "#fff19c" },
    {code : 27, name: "大阪", color: "#ffe966", hoverColor: "#fff19c" },
    {code : 28, name: "兵庫", color: "#ffe966", hoverColor: "#fff19c" },
    {code : 29, name: "奈良", color: "#ffe966", hoverColor: "#fff19c" },
    {code : 30, name: "和歌山", color: "#ffe966", hoverColor: "#fff19c" },
    {code : 31, name: "鳥取", color: "#ffcc66", hoverColor: "#ffe0a3" },
    {code : 32, name: "島根", color: "#ffcc66", hoverColor: "#ffe0a3" },
    {code : 33, name: "岡山", color: "#ffcc66", hoverColor: "#ffe0a3" },
    {code : 34, name: "広島", color: "#ffcc66", hoverColor: "#ffe0a3" },
    {code : 35, name: "山口", color: "#ffcc66", hoverColor: "#ffe0a3" },
    {code : 36, name: "徳島", color: "#fb9466", hoverColor: "#ffbb9c" },
    {code : 37, name: "香川", color: "#fb9466", hoverColor: "#ffbb9c" },
    {code : 38, name: "愛媛", color: "#fb9466", hoverColor: "#ffbb9c" },
    {code : 39, name: "高知", color: "#fb9466", hoverColor: "#ffbb9c" },
    {code : 40, name: "福岡", color: "#ff9999", hoverColor: "#ffbdbd" },
    {code : 41, name: "佐賀", color: "#ff9999", hoverColor: "#ffbdbd" },
    {code : 42, name: "長崎", color: "#ff9999", hoverColor: "#ffbdbd" },
    {code : 43, name: "熊本", color: "#ff9999", hoverColor: "#ffbdbd" },
    {code : 44, name: "大分", color: "#ff9999", hoverColor: "#ffbdbd" },
    {code : 45, name: "宮崎", color: "#ff9999", hoverColor: "#ffbdbd" },
    {code : 46, name: "鹿児島", color: "#ff9999", hoverColor: "#ffbdbd" },
    {code : 47, name: "沖縄", color: "#eb98ff", hoverColor: "#f5c9ff" }
    ],
    onLoad: function(e, data) {
        $(this).html('<strong>' + data.name + '</strong>');
    },
    onSelect: function(e, data) {
        $('#prefectureModal').find('#prefectureModalTitle')
        .html(data.area8.name + " - " + data.area11.name + " - " + data.name + data.full)
        .end().find('.modal-body')
        .html(JSON.stringify(data, null, 4))
        .end().modal('show');
    },
    onHover: function(e, data) {
        console.log(data);
    }
});
});
    </script>

</head>
<body>

<div class="jmap-infobox">
</div>

<div class="prefecture" jmap-uniq="1"　id="prefhokkaido">

<a href = 'https://startpage001.herokuapp.com/traveler/hokkaido.html'>ほっかいどう</a>

</div>

<div class="prefecture" jmap-uniq="2">
<strong>青森</strong>
</div>
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


</body>
</html>
