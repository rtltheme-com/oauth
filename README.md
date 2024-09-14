# سیستم بررسی لایسنس خریدارن محصولات راست چین (ورژن 1.0.0)

[![code with hearth by NHN Cloud](https://img.shields.io/badge/%3C%2F%3E%20with%20%E2%99%A5%20by-RTL%20Theme-8ed557.svg)]([https://github.com/nhn](https://www.rtl-theme.com/))


## 🚩 جدول محتوا

- [راهنمای OAuth](#-راهنمای-oauth-سایت-راست-چین)
- [سادگی](#-سادگی)
- [نیازمندی ها](#-نیازمندی-ها)
- [امكانات ارائه شده](#-امكانات-ارائه-شده)
- [داده های ارسالی](#-داده-های-ارسالی-به-راست-چین)
- [داده های برگشتی](#-لیست-داده-های-برگشتی-از-راست-چین)
- [سندباکس و تست لایسنس](#-سندباکس-و-تست-لایسنس-)

  
## 📑 راهنمای OAuth سایت راست چین
سیستم OAuth راست چین بر اساس دو اصل سادگی و امنیت ساخته شده. بطوریكه تنها با مطالعه این راهنما به راحتی در عرض چند دقیقه میتوانید افزونه، قالب یا اسكریپت خود را به راست چین متصل كنید و از امكانات آن بهره مند شوید.

## 🎈 سادگی:
سیستم OAuth راست چین بر پا یه POST طراحی شده كه بر خلاف بسیاری سیستم ها نیازی به فعال بودن سیستم soap درسرور ندارد و كدنویسی را برای شما به مراتب راحت تر كرده است.

## 🧨 نیازمندی ها:
تنها نیازمندی سرور فعال بودن تابع CURL میباشد كه در ٩٩ % سرورها فعال است.

## 🛠 امكانات ارائه شده:
در حال حاضر فقط یك امكان برای كاربران فعال میباشد و آن هم اتصال به سرور راست چین و اطلاع از اینكه آیا خریدار واقعی است یا نه و برای لایسنس گذاری روی محصوالت كاربرد دارد.

## 🔗 داده های ارسالی به راست چین: 
 1️⃣ متغییر api : این متغییر شامل كد API ای هست كه شما در سایت راست چین ساخته اید و منحصراً متعلق به شماست.
<br>
 2️⃣ متغییر username : این متغییر شامل نام كاربری خریدار است و بای د در فرمی كه برای كاربرتان ساخته اید از وی دریافت كنید.
<br>
 3️⃣ متغییر order_id : این متغییر شامل كد فعال سازی درج شده در قسمت دانلود ها برای کاربر است و با ید در فرمی كه برای كاربرتان ساخته اید از وی دریافت كنید.
<br>
 4️⃣ متغییر domain : این متغییر شامل دامنه ای است كه خریدار از قالب شما در آن استفاده مینماید.
<br>
 5️⃣ متغییر pid : شناسه محصول.

## ⛓ لیست داده های برگشتی از راست چین:
1- : كد API اشتباه است.
<br>
2- : نام كاربری اشتباه است.
<br>
3- : كد سفارش اشتباه است.
<br>
4- : كد سفارش قبلاً ثبت شده است.
<br>
5- : كد سفارش مربوط به این نام كاربری نمیباشد.
<br>
6- : اطلاعات وارد شده در فرمت صحیح نمیباشند.
<br>
7- : كد سفارش مربوط به این محصول نیست.
<br>
8- : كد سفارش مربوطه به این نام كاربری نمیباشد.
<br>
1 : همه چیز درست است و كاربر میتواند از این محصول استفاده نماید. 


## 🔘 سندباکس و تست لایسنس :
جهت تست API در حالت SandBox (آزمایشی) میتوانید در درخواست ارسالی از پارامترهای زیر به صورت ذکر شده استفاده نمایید:
<br>
<table>
  <tr>
    <th>وضعیت</th>
    <th>مقدار</th>
    <th>پارامتر</th>
  </tr>
  <tr>
    <td>اجباری</td>
    <td>SandBox-API </td>
    <td>API</td>
  </tr>
  <tr>
    <td>اجباری</td>
    <td>username</td>
    <td>SandBox-User</td>
  </tr>
  <tr>
    <td>اجباری</td>
    <td>order_id</td>
    <td>SandBox-Order</td>
  </tr>
  <tr>
    <td>اختیاری</td>
    <td>1</td>
    <td>return</td>
  </tr>
</table>
<br>
<br>
اگر پارامتر return مشخص نشود، نتیجه 1 و در غیر اینصورت مقدار مشخص شده در پارامتر return بازگردانده می شود.
