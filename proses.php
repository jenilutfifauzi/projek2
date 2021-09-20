<?php
session_start();
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];

if ($action == "add_user")
{
	$id =$_GET['id'];
	$koneksi->tambah_data_user($_POST['username'],$_POST['password'],$_POST['level_user'],$_POST['name'],$_POST['address'],$_POST['email'],$_POST['tgl_lahir']);
	header('location:login.php');
}
if ($action == "add_data_user")
{	
	$id =$_GET['id'];
	$koneksi->tambah_data_user($_POST['username'],$_POST['password'],$_POST['level_user'],$_POST['name'],$_POST['address'],$_POST['email'],$_POST['tgl_lahir']);
	header('location:home_admin.php');
}
if ($action == "add_masukan")
{
	$id =$_GET['id'];
	$koneksi->tambah_data_masukan($_POST['id'],$_POST['masukan']);
	header('location:../towisfix/home_user/v_homeuser.php');
}
if ($action == "add_user_adm")
{
	$id =$_GET['id'];
	$koneksi->tambah_data_user($_POST['name'],$_POST['address'],$_POST['email'],$_POST['homepage'],$_POST['username'],$_POST['password'],$_POST['level_user']);
	header('location:data_user.php');
}
elseif ($action == "edit_user")
{
	$koneksi->edit_data_user($_POST['id'],$_POST['name'],$_POST['address'],$_POST['email'],$_POST['homepage'],$_POST['username'],$_POST['password'],$_POST['level_user']);
	header('location:data_user.php');
}
elseif ($action == "edit_user_admin")
{
	$koneksi->edit_data_user_admin($_POST['id'],$_POST['username'],$_POST['password'],$_POST['level_user'],$_POST['name'],$_POST['address'],$_POST['email'],$_POST['tgl_lahir']);
	header('location:data_user.php');
}
elseif ($action == "logout")
{
	$koneksi->logout();
}
else if ($action == "delete_user")
{
	$id =$_GET['id'];
	$koneksi->delete_data($id);
	header('location:data_user.php');
}
else if ($action == "delete_gb")
{
	$id =$_GET['id'];
	$koneksi->delete_data_gb($id);
	header('location:data_guestbook.php');
}
else if ($action == "delete_gb2")
{
	$id =$_GET['id'];
	$koneksi->delete_data_gb($id);
	header('location:data_guestbook_gb.php');
}
elseif ($action == "login")
{
	$koneksi->login($_POST['username'],$_POST['password']);
}

?>