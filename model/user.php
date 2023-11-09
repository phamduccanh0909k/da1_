<?php
function insert_tk($username, $password, $name, $address, $phone, $email, $file)
{
    $sql = "insert into user(username,password,name,address,phone,email,image)
     values('$username','$password','$name','$address','$phone','$email','$file')";
    pdo_execute($sql);
}
function check_user($username, $password)
{
    $sql = "select * from user where username='" . $username . "' AND password='" . $password . "'";
    $sp = pdo_query_one($sql);
    return $sp;
    // return pdo_query_all($sql); //co ket qua tra ve phai return
}
function update_taikhoan($id_user, $username, $password, $name, $address, $phone, $email, $file)
{
    if ($file != '') {
        $sql = "update user set username='" . $username . "',password='" . $password . "',
        name='" . $name . "',address='" . $address . "',phone='" . $phone . "',
        email='" . $email . "',image='" . $file . "' where id_user=" . $id_user;
    } else {
        $sql = "update user set username='" . $username . "',password='" . $password . "',
        name='" . $name . "',address='" . $address . "',phone='" . $phone . "',
        email='" . $email . "' where id_user=" . $id_user;
    }

    pdo_execute($sql);
}
function check_email($email)
{
    $sql = "select * from user where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
    // return pdo_query_all($sql); //co ket qua tra ve phai return
}
function loadall_account()
{
    $sql = "select * from user u join role rl on u.id_role=rl.id_role order by u.id_user desc";
    $dstk = pdo_query($sql);
    return $dstk; //co ket qua tra ve phai return
}
function delete_tk($id_tk)
{
    $sql = "delete from taikhoan where id_tk=" . $id_tk;
    pdo_execute($sql);
}
function loadone_tk($id_tk)
{
    $sql = "select * from taikhoan where id_tk=" . $id_tk;
    $suasp = pdo_query_one($sql);
    return $suasp; //co ket qua tra ve phai return
}
function  update_tk($id_tk, $username, $file, $email, $address, $tel, $role)
{
    if ($file != '') {
        $sql = "update taikhoan set username='" . $username . "',hinh='" . $file . "',email='" . $email . "',
        address='" . $address . "',tel='" . $tel . "',role='" . $role . "' where id_tk=" . $id_tk;
    } else {
        $sql = "update taikhoan set username='" . $username . "',email='" . $email . "',
        address='" . $address . "',tel='" . $tel . "' ,role='" . $role . "' where id_tk=" . $id_tk;
    }

    pdo_execute($sql);
}
function insert_taikhoan($username, $password, $ho_ten, $file, $email, $address, $tel)
{
    $sql = "insert into taikhoan(username,password,ho_ten,hinh,email,address,tel) values('$username','$password','$ho_ten','$file','$email','$address','$tel')";
    pdo_execute($sql);
}
