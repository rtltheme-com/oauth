<?php

function send($api,$username,$activation_code,$domain,$productId="new Product"){
	$url = 'https://www.rtl-theme.com/oauth/';
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_POSTFIELDS,"api=$api&username=$username&order_id=$activation_code&domain=$domain&pid=$productId");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$res = curl_exec($ch);
	curl_close($ch);
	return $res;
}

$api = 'rtl7c6562d513a63piman350c700cab4c'; // API اختصاصی فروشنده
$username = 'Mr.Alidoosti'; //نام کاربری خریدار
$activation_code = '2125521545154'; // کد فعال سازی  
$domain = 'https://example.ir'; //دامنه
$productId = 19785; // شناسه محصول

$result = send($api,$username,$activation_code,$domain,$productId);

switch ($result) {
	case '1':
		$error = NULL;
		break;
	case '-1':
		$error = 'API اشتباه است';
	break;
	case '-2':
		$error = 'نام کاربری اشتباه است';
	break;
	case '-3':
		$error = 'کد سفارش اشتباه است';
	break;
	case '-4':
		$error = 'کد سفارش قبلاً ثبت شده است';
	break;
	case '-5':
		$error = 'کد سفارش مربوطه به این نام کاربری نمیباشد.';
	break;
	case '-6':
		$error = 'اطلاعات وارد شده  در فرمت صحیح نمیباشند!';
	break;
	case '-7':
		$error = 'کد سفارش مربوط به این محصول نیست';
		break;
	case '-8':
		$error = 'کد سفارش مربوطه به این نام کاربری نمیباشد.';
		break;
	default:
		$error = 'خطای غیرمنتظره رخ داده است';
	break;
}

var_dump($result,$error);
