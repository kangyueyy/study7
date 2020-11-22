{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<style>--}}
        {{--#container {width:1080px; height: 720px; }--}}
    {{--</style>--}}
    {{--<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.15&key=MAPTEST1"></script>--}}
    {{--<script type="text/javascript" src="https://webapi.amap.com/maps?v=2.0Beta&key=MAPTEST1"></script>--}}

{{--</head>--}}
{{--<body>--}}

{{--<div id="container"></div>--}}

{{--<script>--}}
    {{--var map = new AMap.Map('container', {--}}
        {{--// center: [116.397428, 39.90923],--}}
        {{--layers: [//使用多个图层--}}
            {{--new AMap.TileLayer.Satellite(),--}}
            {{--new AMap.TileLayer.RoadNet()--}}
        {{--],--}}
        {{--zooms: [4,18],//设置地图级别范围--}}
        {{--zoom: 5,--}}
        {{--// pitch:75, // 地图俯仰角度，有效范围 0 度- 83 度--}}
        {{--// viewMode:'3D' // 地图模式--}}
    {{--});--}}
{{--</script>--}}

{{--</body>--}}
{{--</html>--}}
        <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>标注和标注图层</title>
    <link rel="stylesheet" href="https://a.amap.com/jsapi_demos/static/demo-center/css/demo-center.css"/>
    <style>
        html, body, #container {
            height: 100%;
            width: 100%;
            margin: 0;
        }
    </style>
</head>
<body>
<div id="container"></div>
<script type="text/javascript"
        src="https://webapi.amap.com/maps?v=1.4.15&key=MAPTEST1"></script>
<script type="text/javascript" src="https://a.amap.com/jsapi_demos/static/demo-center/data/food_1.4.15.js"></script>
<script type="text/javascript">
    var map = new AMap.Map('container', {
        zoom: 9,
        showLabel: false,
        expandZoomRange: true,
        center: [116.12, 39.11],
        viewMode: '3D',
        pitch: 60,
        mapStyle: 'amap://styles/whitesmoke'
    });

    var layer = new AMap.LabelsLayer({
        zooms: [3, 20],
        zIndex: 1000,
        // 开启标注避让，默认为开启，v1.4.15 新增属性
        collision: true,
        // 开启标注淡入动画，默认为开启，v1.4.15 新增属性
        animation: true,
    });

    map.add(layer);

    var markers = [];

    var LabelsData = [
        {
            name: '全聚德烤鸭',
            position: [116.467456, 39.994996],
            zooms: [10, 20],
            opacity: 1,
            zIndex: 10,
            icon: {
                type: 'image',
                image: 'https://a.amap.com/jsapi_demos/static/images/poi-marker.png',
                clipOrigin: [14, 92],
                clipSize: [50, 68],
                size: [25, 34],
                anchor: 'bottom-center',
                angel: 0,
                retina: true
            },
            text: {
                content: '全聚德烤鸭',
                direction: 'left',
                offset: [0, -5],
                style: {
                    fontSize: 15,
                    fontWeight: 'normal',
                    fillColor: '#333',
                    strokeColor: '#fff',
                    strokeWidth: 2,
                }
            }
        },
        {
            name: '绥兴盛',
            position: [116.469412, 39.996412],
            zooms: [10, 20],
            opacity: 1,
            zIndex: 16,
            icon: {
                type: 'image',
                image: 'https://a.amap.com/jsapi_demos/static/images/poi-marker.png',
                clipOrigin: [101, 92],
                clipSize: [50, 68],
                size: [25, 34],
                anchor: 'bottom-center',
                angel: 0,
                retina: true
            },
            text: {
                content: '绥兴盛',
                direction: 'top',
                offset: [0, 0],
                style: {
                    fontSize: 15,
                    fontWeight: 'normal',
                    fillColor: '#333',
                    strokeColor: '#fff',
                    strokeWidth: 2,
                }
            }
        },
        {
            name: '香河肉饼',
            position: [116.471871, 39.995616],
            zooms: [10, 20],
            opacity: 1,
            zIndex: 8,
            icon: {
                type: 'image',
                image: 'https://a.amap.com/jsapi_demos/static/images/poi-marker.png',
                clipOrigin: [194, 92],
                clipSize: [50, 68],
                size: [25, 34],
                anchor: 'bottom-center',
                angel: 0,
                retina: true
            },
            text: {
                content: '香河肉饼',
                direction: 'right',
                offset: [0, -5],
                style: {
                    fontSize: 15,
                    fontWeight: 'normal',
                    fillColor: '#333',
                    strokeColor: '#fff',
                    strokeWidth: 2,
                }
            }
        },
        {
            name: '金鼎轩',
            position: [116.468098, 39.993729],
            zooms: [10, 20],
            opacity: 1,
            zIndex: 23,
            icon: {
                type: 'image',
                image: 'https://a.amap.com/jsapi_demos/static/images/poi-marker.png',
                clipOrigin: [283, 92],
                clipSize: [50, 68],
                size: [25, 34],
                anchor: 'bottom-center',
                angel: 0,
                retina: true
            },
            text: {
                content: '金鼎轩',
                direction: 'bottom',
                offset: [0, 0],
                style: {
                    fontSize: 15,
                    fontWeight: 'normal',
                    fillColor: '#333',
                    strokeColor: '#fff',
                    strokeWidth: 2,
                }
            }
        },
        {
            name: '湘西土菜',
            position: [116.464471, 39.996690],
            zooms: [10, 20],
            opacity: 1,
            zIndex: 6,
            icon: {
                type: 'image',
                image: 'https://a.amap.com/jsapi_demos/static/images/poi-marker.png',
                clipOrigin: [370, 92],
                clipSize: [50, 68],
                size: [25, 34],
                anchor: 'bottom-center',
                angel: 0,
                retina: true
            },
            text: {
                content: '湘西土菜',
                direction: 'left',
                offset: [-3, -7],
                style: {
                    fontSize: 13,
                    fontWeight: 'normal',
                    fillColor: '#fff',
                    padding: '2, 5',
                    backgroundColor: '#b1009b'
                }
            }
        },
        {
            name: '香猪坊',
            position: [116.468599, 39.995847],
            zooms: [10, 20],
            opacity: 1,
            zIndex: 5,
            icon: {
                type: 'image',
                image: 'https://a.amap.com/jsapi_demos/static/images/poi-marker.png',
                clipOrigin: [459, 92],
                clipSize: [50, 68],
                size: [25, 34],
                anchor: 'bottom-center',
                angel: 0,
                retina: true
            },
            text: {
                content: '香猪坊',
                direction: 'top',
                offset: [0, 0],
                style: {
                    fontSize: 15,
                    fontWeight: 'normal',
                    fillColor: '#333',
                    strokeColor: '#fff',
                    strokeWidth: 2,
                }
            }
        },
        {
            name: '京味斋烤鸭店',
            position: [116.462483, 39.992492],
            zooms: [10, 20],
            opacity: 1,
            zIndex: 4,
            icon: {
                type: 'image',
                image: 'https://a.amap.com/jsapi_demos/static/images/poi-marker.png',
                clipOrigin: [547, 92],
                clipSize: [50, 68],
                size: [25, 34],
                anchor: 'bottom-center',
                angel: 0,
                retina: true
            },
            text: {
                content: '京味斋烤鸭店',
                direction: 'top',
                offset: [0, 0],
                style: {
                    fontSize: 13,
                    fontWeight: 'normal',
                    fillColor: '#fff',
                    padding: '2, 5',
                    backgroundColor: '#22884f'
                }
            }
        },
        {
            name: '脊骨土豆汤',
            position: [116.465586, 39.996780],
            zooms: [10, 20],
            opacity: 1,
            zIndex: 3,
            icon: {
                type: 'image',
                image: 'https://a.amap.com/jsapi_demos/static/images/poi-marker.png',
                clipOrigin: [635, 92],
                clipSize: [50, 68],
                size: [25, 34],
                anchor: 'bottom-center',
                angel: 0,
                retina: true
            },
            text: {
                content: '脊骨土豆汤',
                direction: 'top',
                offset: [0, 0],
                style: {
                    fontSize: 15,
                    fontWeight: 'normal',
                    fillColor: '#333',
                    strokeColor: '#fff',
                    strokeWidth: 2,
                }
            }
        },
        {
            name: '山西刀削面',
            position: [116.472881, 39.997064],
            zooms: [10, 20],
            zIndex: 2,
            opacity: 1,
            icon: {
                type: 'image',
                image: 'https://a.amap.com/jsapi_demos/static/images/poi-marker.png',
                clipOrigin: [723, 92],
                clipSize: [50, 68],
                size: [25, 34],
                anchor: 'bottom-center',
                angel: 0,
                retina: true
            },
            text: {
                content: '山西刀削面',
                direction: 'top',
                offset: [0, 0],
                style: {
                    fontSize: 13,
                    fontWeight: 'normal',
                    fillColor: '#fff',
                    padding: '2, 5',
                    backgroundColor: '#b1009b'
                }
            }
        }
    ];

    for (var i = 0; i < LabelsData.length; i++) {
        var curData = LabelsData[i];
        curData.extData = {
            index: i
        };

        var labelMarker = new AMap.LabelMarker(curData);

        markers.push(labelMarker);

        layer.add(labelMarker);
    }

    map.setFitView();
</script>
</body>
</html>