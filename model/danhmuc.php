<?php
function insert_dm($nameloai)
{
    $sql = "insert into danhmuc(name) values('$nameloai')";
    pdo_execute($sql);
}

function delete_dm($id_dm)
{
    $sql = "delete from danhmuc where id_dm=" . $id_dm;
    pdo_execute($sql);
}
function loadall_dm()
{
    $sql = "select * from danhmuc order by id_dm desc";
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
