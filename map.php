<?php
include 'config/conn.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/L.Control.Layers.Tree.css">
    <link rel="stylesheet" href="css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css">
    <style>
        html,
        body,
        #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
    </style>
    <title></title>
</head>

<body>
    <div id="map">
    </div>
    <script src="js/qgis2web_expressions.js"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/L.Control.Layers.Tree.min.js"></script>
    <script src="js/leaflet.rotatedMarker.js"></script>
    <script src="js/leaflet.pattern.js"></script>
    <script src="js/leaflet-hash.js"></script>
    <script src="js/Autolinker.min.js"></script>
    <script src="js/rbush.min.js"></script>
    <script src="js/labelgun.min.js"></script>
    <script src="js/labels.js"></script>
    <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
    <!-- <script src="data/stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0.js"></script> -->
    <script src="data/stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0.php"></script>
    <script src="data/sebaran_peternakan_1.php"></script>
    <script>
        var map = L.map('map', {
            zoomControl: false,
            maxZoom: 28,
            minZoom: 1,
            crs: L.CRS.EPSG3857 // atau CRS lain yang sesuai
        }).fitBounds([
            [-8.034575693774988, 110.15742823665065],
            [-7.761206271224902, 110.57537970934945]
        ]);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);


        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({
            truncate: {
                length: 30,
                location: 'smart'
            }
        });
        // remove popup's row if "visible-with-data"
        function removeEmptyRowsFromPopupContent(content, feature) {
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = content;
            var rows = tempDiv.querySelectorAll('tr');
            for (var i = 0; i < rows.length; i++) {
                var td = rows[i].querySelector('td.visible-with-data');
                var key = td ? td.id : '';
                if (td && td.classList.contains('visible-with-data') && feature.properties[key] == null) {
                    rows[i].parentNode.removeChild(rows[i]);
                }
            }
            return tempDiv.innerHTML;
        }
        // add class to format popup if it contains media
        function addClassToPopupIfMedia(content, popup) {
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = content;
            if (tempDiv.querySelector('td img')) {
                popup._contentNode.classList.add('media');
                // Delay to force the redraw
                setTimeout(function() {
                    popup.update();
                }, 10);
            } else {
                popup._contentNode.classList.remove('media');
            }
        }
        var zoomControl = L.control.zoom({
            position: 'topleft'
        }).addTo(map);
        var bounds_group = new L.featureGroup([]);

        function setBounds() {}

        function pop_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">wilayah</th>\
                        <td>' + (feature.properties['wilayah'] !== null ? autolinker.link(feature.properties['wilayah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">tahun_2023</th>\
                        <td>' + (feature.properties['tahun_2023'] !== null ? autolinker.link(feature.properties['tahun_2023'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0_0(feature) {
            if (feature.properties['tahun_2023'] >= 1.000000 && feature.properties['tahun_2023'] <= 4.200000) {
                return {
                    pane: 'pane_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0',
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0,
                    fill: true,
                    fillOpacity: 0.3,
                    fillColor: 'rgba(31,120,180,1.0)',
                    interactive: true,
                }
            }
            if (feature.properties['tahun_2023'] >= 4.200000 && feature.properties['tahun_2023'] <= 7.400000) {
                return {
                    pane: 'pane_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0',
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0,
                    fill: true,
                    fillOpacity: 0.3,
                    fillColor: 'rgba(65,142,192,1.0)',
                    interactive: true,
                }
            }
            if (feature.properties['tahun_2023'] >= 7.400000 && feature.properties['tahun_2023'] <= 10.600000) {
                return {
                    pane: 'pane_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0',
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0,
                    fill: true,
                    fillOpacity: 0.3,
                    fillColor: 'rgba(98,163,204,1.0)',
                    interactive: true,
                }
            }
            if (feature.properties['tahun_2023'] >= 10.600000 && feature.properties['tahun_2023'] <= 13.800000) {
                return {
                    pane: 'pane_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0',
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0,
                    fill: true,
                    fillOpacity: 0.3,
                    fillColor: 'rgba(132,185,216,1.0)',
                    interactive: true,
                }
            } else {
                return {
                    pane: 'pane_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0',
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0,
                    fill: true,
                    fillOpacity: 0.3,
                    fillColor: 'rgba(166,206,227,1.0)',
                    interactive: true,
                }
            }
        }

        map.createPane('pane_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0');
        map.getPane('pane_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0').style.zIndex = 400;
        map.getPane('pane_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0').style['mix-blend-mode'] = 'normal';
        var layer_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0 = new L.geoJson(json_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0, {
            attribution: '',
            interactive: true,
            dataVar: 'json_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0',
            layerName: 'layer_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0',
            pane: 'pane_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0',
            onEachFeature: pop_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0,
            style: style_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0_0,
        });
        bounds_group.addLayer(layer_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0);
        map.addLayer(layer_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0);

        function pop_sebaran_peternakan_1(feature, layer) {
            // Menyiapkan konten popup dengan menggunakan template string untuk keterbacaan yang lebih baik
            var foto = feature.properties['foto'] ? `<img src="img_maps/${feature.properties['foto']}" alt="Foto Peternakan" class="img-fluid" style="max-width: 150px;">` : '';

            var popupContent = `
        <div class="custom-popup">
            <h4>Detail Peternakan</h4>
            <hr>
            <p style="font-size: 20px;" align="center" ><strong>${feature.properties['objek'] ? autolinker.link(feature.properties['objek'].toLocaleString()) : 'Tidak tersedia'}</strong></p>
            <p><strong>Alamat:</strong> ${feature.properties['alamat'] ? autolinker.link(feature.properties['alamat'].toLocaleString()) : 'Tidak tersedia'}</p>
            <p><strong>Kategori:</strong> ${feature.properties['kategori'] ? autolinker.link(feature.properties['kategori'].toLocaleString()) : 'Tidak tersedia'}</p>
            <hr>
            <div class="popup-image">
                ${foto}
            </div>
            <hr>
            <p class="coordinates"><strong>Koordinat:</strong> ${feature.properties['lat']}, ${feature.properties['long']}</p>
        </div>`;

            // Menghapus baris kosong dari konten popup (jika ada)
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);

            // Menambahkan kelas CSS khusus jika ada media pada popup
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });

            // Mengikat konten popup ke layer dengan batasan tinggi maksimum
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }




        // // mengganti marker
        // var myIcon = L.icon({
        //     iconUrl: 'legend/marker.png',
        //     iconSize: [16, 16],
        //     iconAnchor: [8, 8],
        //     popupAnchor: [0, -10]
        // });


        function style_sebaran_peternakan_1_0() {
            return {
                pane: 'pane_sebaran_peternakan_1',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(152,125,183,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_sebaran_peternakan_1');
        map.getPane('pane_sebaran_peternakan_1').style.zIndex = 401;
        map.getPane('pane_sebaran_peternakan_1').style['mix-blend-mode'] = 'normal';
        var layer_sebaran_peternakan_1 = new L.geoJson(json_sebaran_peternakan_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_sebaran_peternakan_1',
            layerName: 'layer_sebaran_peternakan_1',
            pane: 'pane_sebaran_peternakan_1',
            onEachFeature: pop_sebaran_peternakan_1,
            // pointToLayer: pointToLayer, // Panggil fungsi pointToLayer di sini
            // original
            // pointToLayer: function(feature, latlng) {
            //     var context = {
            //         feature: feature,
            //         variables: {}
            //     };
            //     return L.circleMarker(latlng, style_sebaran_peternakan_1_0(feature));
            // },


            // icon custom
            pointToLayer: function(feature, latlng) {
                var categoria = feature.properties['kategori'];
                var customIcon;
                switch (categoria) {
                    case 'peternakan ayam':
                        customIcon = L.icon({
                            iconUrl: 'legend/marker_merah.png',
                            iconSize: [25, 35],
                            iconAnchor: [12, 25],
                            popupAnchor: [0, -25]
                        });
                        break;
                    case 'peternakan sapi':
                        customIcon = L.icon({
                            iconUrl: 'legend/marker_hijau.png',
                            iconSize: [25, 35],
                            iconAnchor: [12, 25],
                            popupAnchor: [0, -25]
                        });
                        break;
                    case 'peternakan ikan':
                        customIcon = L.icon({
                            iconUrl: 'legend/marker_kuning.png',
                            iconSize: [25, 35],
                            iconAnchor: [12, 25],
                            popupAnchor: [0, -25]
                        });
                        break;
                    default:
                        customIcon = L.icon({
                            iconUrl: 'legend/marker_biru.png',
                            iconSize: [25, 35],
                            iconAnchor: [12, 25],
                            popupAnchor: [0, -25]
                        });
                }

                return L.marker(latlng, {
                    icon: customIcon
                });
            },


        });
        bounds_group.addLayer(layer_sebaran_peternakan_1);
        map.addLayer(layer_sebaran_peternakan_1);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
            .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
            .title += 'Search for a place';
        var baseMaps = {};
        var layer_sebaran_peternakan_ayam = L.geoJson(json_sebaran_peternakan_1, {
            filter: function(feature) {
                return feature.properties.kategori === 'peternakan ayam';
            },
            pointToLayer: function(feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: 'legend/marker_merah.png',
                        iconSize: [25, 35],
                        iconAnchor: [12, 25],
                        popupAnchor: [0, -25]
                    })
                });
            }
        });

        var layer_sebaran_peternakan_sapi = L.geoJson(json_sebaran_peternakan_1, {
            filter: function(feature) {
                return feature.properties.kategori === 'peternakan sapi';
            },
            pointToLayer: function(feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: 'legend/marker_hijau.png',
                        iconSize: [25, 35],
                        iconAnchor: [12, 25],
                        popupAnchor: [0, -25]
                    })
                });
            }
        });

        var layer_sebaran_peternakan_ikan = L.geoJson(json_sebaran_peternakan_1, {
            filter: function(feature) {
                return feature.properties.kategori === 'peternakan ikan';
            },
            pointToLayer: function(feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: 'legend/marker_kuning.png',
                        iconSize: [25, 35],
                        iconAnchor: [12, 25],
                        popupAnchor: [0, -25]
                    })
                });
            }
        });

        // var layer_sebaran_peternakan = L.geoJson(json_sebaran_peternakan_1, {
        //     pointToLayer: function(feature, latlng) {
        //         return L.marker(latlng, {
        //             icon: L.icon({
        //                 iconUrl: 'legend/marker_biru.png',
        //                 iconSize: [25, 35],
        //                 iconAnchor: [12, 25],
        //                 popupAnchor: [0, -25]
        //             })
        //         });
        //     }
        // });
        // Add layers to the map
        // map.addLayer(layer_sebaran_peternakan_ayam);
        // map.addLayer(layer_sebaran_peternakan_sapi);
        // map.addLayer(layer_sebaran_peternakan_ikan);
        // map.addLayer(layer_sebaran_peternakan);

        // Create overlaysTree
        var overlaysTree = [{
                label: '<img src="legend/marker_merah.png" style="height: 16px; width: 16px;" /> peternakan ayam',
                layer: layer_sebaran_peternakan_1
            }, {
                label: '<img src="legend/marker_hijau.png" style="height: 16px; width: 16px;" /> peternakan sapi',
                layer: layer_sebaran_peternakan_1
            }, {
                label: '<img src="legend/marker_kuning.png" style="height: 16px; width: 16px;" /> peternakan ikan',
                layer: layer_sebaran_peternakan_1
            }, {
                label: '<img src="legend/marker_biru.png" style="height: 16px; width: 16px;" /> Peternakan',
                layer: layer_sebaran_peternakan_1
            },
            {
                label: 'Sebaran Penduduk Pekerja Buruh Ternak Menurut Kapanewon<br /><table><tr><td style="text-align: center;"><img src="legend/stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0_10420.png" /></td><td>1,0 - 4,2</td></tr><tr><td style="text-align: center;"><img src="legend/stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0_42741.png" /></td><td>4,2 - 7,4</td></tr><tr><td style="text-align: center;"><img src="legend/stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0_741062.png" /></td><td>7,4 - 10,6</td></tr><tr><td style="text-align: center;"><img src="legend/stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0_1061383.png" /></td><td>10,6 - 13,8</td></tr><tr><td style="text-align: center;"><img src="legend/stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0_1381704.png" /></td><td>13,8 - 17,0</td></tr></table>',
                layer: layer_stk_Jml_pnddk_dgn_jns_pekerjaan_buruh_peternakan_mnrt_kapanewon_0
            },
        ];
        var lay = L.control.layers.tree(null, overlaysTree, {
            //namedToggle: true,
            //selectorBack: false,
            //closedSymbol: '&#8862; &#x1f5c0;',
            //openedSymbol: '&#8863; &#x1f5c1;',
            //collapseAll: 'Collapse all',
            //expandAll: 'Expand all',
            collapsed: true,
        });
        lay.addTo(map);
        setBounds();
    </script>
</body>

</html>