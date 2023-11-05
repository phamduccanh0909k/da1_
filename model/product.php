<?php
function insert_pro($name_pro, $file, $des, $dis, $price, $size, $id_cat)
{
    $sql = "insert into product(name_pro,img,description,discount,price,size,id_cat) 
    values(' $name_pro ','$file','$des','$dis','$price','$size','$id_cat')";
    pdo_execute($sql);
}

function delete_pro($id_pro)
{
    $sql = "delete from product where id_pro=" . $id_pro;
    pdo_execute($sql);
}

function loadall_sp_home()
{
    //cach noi chuoi sql
    //phai co cach khoang
    $sql = "select * from sanpham where 1 order by id_sp desc limit 0,9";
    $dssp = pdo_query($sql);
    return $dssp; //co ket qua tra ve phai return
}

function loadall_sp_top10()
{
    //cach noi chuoi sql
    //phai co cach khoang
    $sql = "select * from sanpham where 1 order by luot_xem desc limit 0,10";
    $dssp = pdo_query($sql);
    return $dssp; //co ket qua tra ve phai return
}
// function loadall_sp($kyw = "", $id_dm = 0)
// {
//     //cach noi chuoi sql
//     //phai co cach khoang
//     $sql = "select * from sanpham where 1";
//     if ($kyw != "") {
//         $sql .= " and name like '%" . $kyw . "%' ";
//     }
//     if ($id_dm > 0) {
//         $sql .= " and id_dm = '" . $id_dm . "'";
//     }

//     $sql .= " order by id_sp desc";
//     $dssp = pdo_query($sql);
//     return $dssp; //co ket qua tra ve phai return
// }

function loadall_pro()
{
    //cach noi chuoi sql
    //phai co cach khoang
    $sql = "select * from product pro join category cat on pro.id_cat = cat.id_cat order by pro.id_pro desc";
    $dssp = pdo_query($sql);
    return $dssp; //co ket qua tra ve phai return
}
function loadone_sp($id_sp)
{
    $sql = "select * from sanpham where id_sp=" . $id_sp;
    $suasp = pdo_query_one($sql);
    return $suasp; //co ket qua tra ve phai return
}
function load_ten_dm($id_dm)
{
    if ($id_dm > 0) {
        $sql = "select * from danhmuc where id_dm=" . $id_dm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name; //co ket qua tra ve phai return
    } else {
        return "";
    }
}
function update_sp($id_sp, $tensp, $giasp, $gg, $file, $mota, $hdb, $id_dm)
{
    if ($file != "") {
        $sql = "update sanpham set name='" . $tensp . "',price='" . $giasp . "',
        discount='" . $gg . "',image='" . $file . "',mo_ta='" . $mota . "',
        dac_biet='" . $hdb . "',id_dm='" . $id_dm . "' where id_sp=" . $id_sp;
    } else {
        $sql = "update sanpham set name='" . $tensp . "',price='" . $giasp . "',
        discount='" . $gg . "',mo_ta='" . $mota . "',
        dac_biet='" . $hdb . "',id_dm='" . $id_dm . "' where id_sp=" . $id_sp;
    }

    pdo_execute($sql);
}
function loadone_sp_cungloai($id_sp, $id_dm)
{
    $sql = "select * from sanpham where id_dm=" . $id_dm . " and id_sp <>" . $id_sp;
    $dssp = pdo_query($sql);
    return $dssp;; //co ket qua tra ve phai return
}
function tangluotxem($id_sp)
{
    $onesp = loadone_sp($id_sp);
    $luotxem = $onesp['luot_xem'] + 1;
    $sql = "update sanpham set luot_xem='" . $luotxem . "' where id_sp =" . $id_sp;
    pdo_execute($sql);
}
