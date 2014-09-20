/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var map = new BMap.Map("container");
map.centerAndZoom(new BMap.Point(115.502801, 39.35258), 10);
map.enableScrollWheelZoom();
/*
 var marker=new BMap.Marker(new BMap.Point(116.403884,39.914887));  
 map.addOverlay(marker);  
 */
/*
 var licontent="<b>易县</b><br>";  
 licontent+="<span><strong>地址：</strong>北京市东城区天安门广场北侧</span><br>";  
 licontent+="<span><strong>电话：</strong>(010)63095718,(010)63095630</span><br>";  
 licontent+="<span class=\"input\"><strong></strong><input class=\"outset\" type=\"text\" name=\"origin\" value=\"北京站\"/><input class=\"outset-but\" type=\"button\" value=\"公交\" onclick=\"gotobaidu(1)\" /><input class=\"outset-but\" type=\"button\" value=\"驾车\"  onclick=\"gotobaidu(2)\"/><a class=\"gotob\" href=\"url=\"http://api.map.baidu.com/direction?destination=latlng:"+marker.getPosition().lat+","+marker.getPosition().lng+"|name:天安门"+"®ion=北京"+"&output=html\" target=\"_blank\"></a></span>";
 */
//var hiddeninput = "<input type=\"hidden\" value=\"" + '北京' + "\" name=\"region\" /><input type=\"hidden\" value=\"html\" name=\"output\" /><input type=\"hidden\" value=\"driving\" name=\"mode\" /><input type=\"hidden\" value=\"latlng:" + marker.getPosition().lat + "," + marker.getPosition().lng + "|name:天安门" + "\" name=\"destination\" />";
/*
var content1 = "<form id=\"gotobaiduform\" action=\"http://api.map.baidu.com/direction\" target=\"_blank\" method=\"get\">" + licontent + hiddeninput + "</form>";

var opts1 = {width: 300};

var infoWindow = new BMap.InfoWindow(content1, opts1);
marker.openInfoWindow(infoWindow);
marker.addEventListener('click', function() {
    marker.openInfoWindow(infoWindow);
});
*/
/*
function gotobaidu(type)
{
    if ($.trim($("input[name=origin]").val()) == "")
    {
        alert("请输入起点！");
        return;
    } else {
        if (type == 1)
        {
            $("input[name=mode]").val("transit");
            $("#gotobaiduform")[0].submit();
        } else if (type == 2)
        {
            $("input[name=mode]").val("driving");
            $("#gotobaiduform")[0].submit();
        }
    }
}  
*/