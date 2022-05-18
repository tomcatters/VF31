<?php
if(!isset($_SESSION['login'])){
    print "<meta http-equiv=\"refresh\":content=\"0;url=../index_.php\">";
    exit();
}