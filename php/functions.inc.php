<?php
require('db.inc.php');
require('product.inc.php');
require('fetchSingleData.php');
require 'fetchOtherdata.php';
require 'fetchSearch.php';
require 'checkIfExist.inc.php';
require 'insertIntoDB.php';
require 'fetchUserData.php';


$db = new DBController();
$product = new Product($db);
/* print_r($product->getData()); */
$fetchBlog = new FetchSingleData($db);
$otherBlogs = new FetchOtherData($db);


$fetchProduct = new FetchSingleData($db);
$otherProducts = new FetchOtherData($db);


$fetchSearch = new FetchSearch($db);
$insertData = new InsertIntoDB($db);


$fetchUserData = new FetchUserData($db);
$products = new Product($db);
