// このファイルでは県名を取得し、付随する市町村を取得する機能を定義する
$(document).ready(function () {
    $('#areas').change(function () {
        var areaId = $(this).val();
        $.ajax({
            url: '/getCityTownVillages',
            type: 'GET',
            data: { area: areaId },
            success: function (data) {
                var options = '<option value="">未選択</option>';
                for (var i = 0; i < data.city_town_villages.length; i++) {
                    options += '<option value="' + data.city_town_villages[i].id + '">' +
                        data.city_town_villages[i].name + '</option>';
                }
                $('#city_town_village').html(options);
            }
        });
    });
});
