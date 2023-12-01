// このファイルでは検索ボタンが押された時の結果を取得する機能とその際CSSを再適用を記述したもの


$(document).ready(function () {
    $('#search-btn').click(function () {
        var areaId = $('#areas').val();
        var cityTownVillageId = $('#city_town_village').val();

        $.ajax({
            url: '/resultHospitals',
            type: 'GET',
            data: { area_id: areaId, city_town_village_id: cityTownVillageId, _token: '{{ csrf_token() }}' },
            success: function (data) {
                $('#searchResult').html(data);
            }
        });
    });
});

// スタイルを再適用するための関数
function reapplyStyles() {
    // #resultBg 要素にスタイルを適用
    var resultBg = document.getElementById('resultBg');
    resultBg.style.height = '300px';
    resultBg.style.width = '500px';
    resultBg.style.backgroundColor = 'white';
    resultBg.style.borderRadius = '15px';

    // #circle 要素にスタイルを適用
    var circle = document.getElementById('circle');
    circle.style.position = 'absolute';
    circle.style.top = '0';
    circle.style.left = '0';
    circle.style.height = '30px';
    circle.style.width = '30px';
    circle.style.backgroundColor = 'white';
    circle.style.borderRadius = '50%';
    circle.style.border = '1px solid black'; // 必要に応じて境界線を追加
    
    var mainSize = document.getElementById('mainSize');
    mainSize.style.fontSize = '80px';
}

// ページの読み込み完了後にスタイルを再適用
document.addEventListener('DOMContentLoaded', function() {
    reapplyStyles();
});

// あるイベントが発生した場合にスタイルを再適用する例
// 例えば、ボタンがクリックされたとき
var applyButton = document.getElementById('applyButton');
applyButton.addEventListener('click', function() {
    reapplyStyles();
});

