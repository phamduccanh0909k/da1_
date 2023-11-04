<?php
function insert_cat($name,$file)
{
    $sql = "insert into category(name_cat,img_cat) values('$name','$file')";
    pdo_execute($sql);
}

function delete_cat($id_cat)
{
    $sql = "delete from category where id_cat=" . $id_cat;
    pdo_execute($sql);
}
function loadall_cat()
{
    $sql = "select * from category order by id_cat desc";
    $dslh = pdo_query($sql);
    return $dslh; //co ket qua tra ve phai return
}
function loadone_dm($id_dm)
{
    $sql = "select * from danhmuc where id_dm=" . $id_dm;
    $suadm = pdo_query_one($sql);
    return $suadm; //co ket qua tra ve phai return
}
function update_dm($nameloai, $id_dm)
{
    $sql = "update danhmuc set name='" . $nameloai . "' where id_dm=" . $id_dm;
    pdo_execute($sql);
}
