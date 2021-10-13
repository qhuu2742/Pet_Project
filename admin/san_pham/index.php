<?php include '../check_admin.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Quản lý sản phẩm:
<br>
<a href="view_insert.php">Thêm</a>

<?php
$thu_muc_anh = '../../image/';
include '../../connect.php';

$tim_kiem = '';
if(isset($_GET['tim_kiem'])) {
    $tim_kiem = $_GET['tim_kiem'];
}

// Lấy tất cả tổng số sản phẩm
$sql = "select san_pham.*,
nha_san_xuat.ten as 'ten_nha_san_xuat'
from san_pham
join nha_san_xuat on nha_san_xuat.ma = san_pham.ma_nha_san_xuat
where san_pham.ten like '%$tim_kiem%'"; // note: đoạn này thêm chức năng tìm kiếm thì bên dưới cũng phải thêm where vào nếu k sẽ lỗi
$result = mysqli_query($connect, $sql);

// Đếm tổng số sảng phẩm đang có
$tong_so_san_pham = mysqli_num_rows($result);

// Quy ước số sản phẩm nên có trong một trang
$so_san_pham_1_trang = 2;

// Tính ra số trang cần phải hiển thị
$tong_so_trang = ceil($tong_so_san_pham / $so_san_pham_1_trang);

// Tìm ra trang hiện tại đang là trang bao nhiêu để bỏ qua số sản phẩm phía trước
$trang_hien_tai = 1;
if(isset($_GET['trang'])){
    $trang_hien_tai = $_GET['trang'];
}

$so_san_pham_can_bo_qua = ($trang_hien_tai - 1) * $so_san_pham_1_trang;

$sql = "$sql
limit $so_san_pham_1_trang offset $so_san_pham_can_bo_qua";
$result = mysqli_query($connect, $sql);
?>
<br>
    <?php echo "tổng sản phẩm là " . $tong_so_san_pham; ?>
<p>
    <?php for ($i = 1; $i <= $tong_so_trang; $i++){ ?>
        <a href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>">
            <?php echo $i ?>
        </a>
    <?php } ?>
</p>
<p>
    <form>
        Tìm kiếm: <input type="search" name="tim_kiem" value="<?php echo $tim_kiem ?>">
    </form>
</p>
<table width="100%" border="1">
    <tr>
        <th>Tên</th>
        <th>Giá</th>
        <th>Mô tả</th>
        <th>Ảnh</th>
        <th>Nhà sản xuất</th>
        <th>Thao tác</th>
    </tr>

    <?php foreach ($result as $each): ?>
        <tr>
            <td><?php echo $each['ten']; ?></td>
            <td><?php echo $each['gia']; ?></td>
            <td><?php echo $each['mo_ta']; ?></td>
            <td><img height="200" src="<?php echo $thu_muc_anh . $each['anh'] ?>"></td>
            <td><?php echo $each['ten_nha_san_xuat'] ?></td>
            <td>
                <a href="view_update.php?ma=<?php echo $each['ma']?>">Sửa</a>
                <a href="delete.php?ma=<?php echo $each['ma']?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php mysqli_close($connect)?>
</body>
</html>