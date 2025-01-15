<?php
include '../config/conn.php';
$sql = "SELECT * FROM peternakan WHERE lng > 0";
$hasil = mysqli_query($conn, $sql);
?>

var json_sebaran_peternakan_1 = {
"type": "FeatureCollection",
"name": "sebaran_peternakan_1",
"crs": {
"type": "name",
"properties": {
"name": "urn:ogc:def:crs:OGC:1.3:CRS84"
}
},
"features": [
<?php
while ($data = mysqli_fetch_array($hasil)) {
    $id = $data['id'];
    $objek = $data['objek'];
    $alamat = $data['alamat'];
    $kategori = $data['kategori'];
    $latitude = $data['latitude'];
    $lng = $data['lng'];
    $foto = $data['foto']; // Assuming 'foto' is the column containing image file names or URLs
?>
    {
    "type": "Feature",
    "properties": {
    "id": "<?php echo $id ?>",
    "objek": "<?php echo $objek ?>",
    "alamat": "<?php echo $alamat ?>",
    "lat": "<?php echo $latitude ?>",
    "long": "<?php echo $lng ?>",
    "kategori": "<?php echo $kategori ?>",
    "foto": "<?php echo $foto ?>" // Include the 'foto' property here
    },
    "geometry": {
    "type": "Point",
    "coordinates": ["<?php echo $lng ?>", "<?php echo $latitude ?>"]
    }
    },
<?php
}
?>
]
};