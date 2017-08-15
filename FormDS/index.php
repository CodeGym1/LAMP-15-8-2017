<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px dotted #ddd;
        text-align: center;

    }
    .main{
        width: 50%;
        margin: auto;
    }
</style>
<body>
<div class="main">
<table style="border: 1px solid blue">
    <caption><h1 style="color: blue">Danh sách khách hàng</h1></caption>
    <tr style="background-color: skyblue">
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "Mai Văn Hoàn",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Hà Nội",
            "anh" => "images/1.jpg"),
        "2" => array("ten" => "Nguyễn Văn Nam",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Bắc Giang",
            "anh" => "images/2.jpg"),
        "3" => array("ten" => "Nguyễn Thái Hòa",
            "ngaysinh" => "1983-08-21",
            "diachi" => "Nam Định",
            "anh" => "images/3.jpg"),
        "4" => array("ten" => "Trần Đăng Khoa",
            "ngaysinh" => "1983-08-22",
            "diachi" => "Hà Tây",
            "anh" => "images/4.jpg"),

    );
    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td >".$key."</td>";
        echo "<td >".$values['ten']."</td>";
        echo "<td >".$values['ngaysinh']."</td>";
        echo "<td >".$values['diachi']."</td>";
        echo "<td ><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }
    ?>
</table>

</div>
</body>
</html>