<?php
if(!isset($_SESSION['id_cli'])){
    print "<meta http-equiv=\"refresh\":content=\"0;url=../index_.php\">";
    exit();
}