<title>Finder Lokomedia</title>
<type='text/javascript'/></script>
</head>
<link rel="SHORTCUT ICON"  href="http://i.imgur.com/2Koa43H.png">
</style>
<center><font color=blue><h3>ADMIN FINDER<h3></font>
<br>
<br>
<br>
<td width=100% id=Gretz>
<form action="" method="post">
<center><p class="frontboxtext"><input name="hash_lol" class="textbox" type="text" size="30" value="http://www.target.co.il/"/>
<input name="submit_lol" class="textbox" value="Submit Site" type="submit">
</form>
<?php
set_time_limit(0);
 
if (isset($_POST["submit_lol"])) {
$url = $_POST['hash_lol'];
echo "<br />Crot ".$url."<br /><br />";
 
$adminlocales = array("-adminweb/","!adminweb/","@adminweb/","adminweb121/","adminweb90/","adminweb145/","khususadmin/","rahasiaadm/","adminweb123123/","adminweb2222/","adminlanel/","adminlanel.php/","monitor123.php/","masuk.php/","css.php/", "admin1235.php/", "master.php/","1admin/","123admin/","addmin/","home.php","css/","rediect.php/","masuk.php/","index.php/","webpaneladmin123/","registeradm/","register/","member123/","123adminweb/","123paneladminweb/","panelauth1231/","loginadminweb21/","loginadminweb123/","loginadminweb/","webadmin123/","redakturadmin/","paneladminweb/","admloginadm/","4dm1n/","admin12345/","adminweb12/","adminweb111/","adminweb123/","adminweb1/","gangmasuk/","gangadmin/","admredaktur/","adminwebredaktur/","adminredaktur/","adm/", "_adm_/", "_admin_/", "_loginadm_/", "_login_admin_/", "minmin", "loginadmin3/",  "masuk/admin", "webmail", "_loginadmin_/", "_login_admin.php_/", "_admin_/", "_administrator_/", "operator/", "sika/", "adminweb/", "develop/", "ketua/", "redaktur/", "author/", "admin/", "administrator/", "adminweb/", "user/", "users/", "dinkesadmin/", "retel/", "author/", "panel/", "paneladmin/", "panellogin/", "redaksi/", "cp-admin/", "login@web/", "admin1/", "admin2/", "admin3/", "admin4/", "admin5/", "admin6/", "admin7", "admin8", "admin9", "admin10", "master/", "master/index.php", "master/login.php", "operator/index.php", "sika/index.php", "develop/index.php", "ketua/index.php","redaktur/index.php", "admin/index.php", "administrator/index.php", "adminweb/index.php", "user/index.php", "users/index.php", "dinkesadmin/index.php", "retel/index.php", "author/index.php", "panel/index.php", "paneladmin/index.php", "panellogin/index.php", "redaksi/index.php", "cp-admin/index.php", "operator/login.php", "sika/login.php", "develop/login.php", "ketua/login.php", "redaktur/login.php", "admin/login.php", "administrator/login.php", "adminweb/login.php", "user/login.php", "users/login.php", "dinkesadmin/login.php", "retel/login.php", "author/login.php", "panel/login.php", "paneladmin/login.php", "panellogin/login.php", "redaksi/login.php", "cp-admin/login.php", "terasadmin/", "terasadmin/index.php", "terasadmin/login.php", "rahasia/", "rahasia/index.php", "rahasia/admin.php", "rahasia/login.php", "dinkesadmin/", "dinkesadmin/login.php", "adminpmb/", "adminpmb/index.php", "adminpmb/login.php", "system/", "system/index.php", "system/login.php", "webadmin/", "webadmin/index.php", "webadmin/login.php", "wpanel/", "wpanel/index.php", "wpanel/login.php", "adminpanel/index.php", "adminpanel/", "adminpanel/login.php", "adminkec/", "adminkec/index.php", "adminkec/login.php", "admindesa/", "admindesa/index.php", "admindesa/login.php", "adminkota/", "adminkota/index.php", "adminkota/login.php", "admin123/", "admin123/index.php", "dologin/", "home.asp/","supervise/amdin", "relogin/adm", "checkuser", "relogin.php", "relogin.asp", "wp-admin", "registration", "suvervise", "superman.php", "member.php","home/admin","po-admin/","do_login.php", "bo-login", "bo_login.php/", "index.php/admin", "admiiin.php", "masuk/adm","website_login/", "dashboard/admin", "dashboard.php", "dashboard_adm", "admin123/login.php", "logout1/", "logout/","pengelola/login", "manageradm/", "logout.asp", "manager/adm", "pengelola/web","auth/panel", "logout/index.php", "logout/login.php", "controladm/", "logout/admin.php", "adminweb_setting", "adm/index.asp", "adm.asp", "affiliate.asp", "adm_auth.asp", "memberadmin.asp", "siteadmin/login.asp", "siteadmin/login", "paneldecontrol", "cms/admin", "administracion.php", "/ADMON/", "administrador/", "panelc/", "admincp", "admcp", "cp", "modcp", "moderatorcp", "adminare", "cpanel", "controlpanel");

foreach ($adminlocales as $admin){
$headers = get_headers("$url$admin");
if (eregi('200', $headers[0])) {
    echo "<a href='$url/$admin'>$url$admin</a><font color=green>Found!</font><br />";
}
else {
    echo "$url$admin <font color=red>Not Found</font><br />";
}
}
}
?>
