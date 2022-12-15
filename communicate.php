<!DOCTYPE html>
<html>
<head>
<title>رزومه تصحیلی من | ارتباط با من</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header class="main-header">
<nav class="nav">
<ul>
<li><a href="cw.php">معرفی</a></li>
<li><a href="skills.php">مهارت ها و توانمندی ها</a></li>
<li><a href="achieve.php">افتخارات و دستاوردها</a></li>
<li><a href="communicate.php">تماس با من</a></li>
</ul>
</nav>
<h1 class="name">رزومه تحصیلی من</h1>
</header>
<section>
<h2 class="section-header">تماس با من</h2>
<p class="comm-sheet">برای تماس با می توانید از راه های زیر اقدام کنید:</p>
<div class="comm-apps">
<h4>تلگرام</h4>
<a href="https://t.me/RozhTagh" target="_blank">
<img class="comm-image" src="image3.ico" width="50" height="50">
</a>
<h4>ایمیل</h4>
<a href="mailto:rozhintn@gmail.com" target="_blank">
<img class="comm-image" src="image4.ico" width="50" height="50">
</a>
<h4>اینستاگرام</h4>
<a href="https://instagram.com/rozhin_tn" target="_blank">
<img class="comm-image" src="image5.png" width="50" height="50">
</a>
</div>
</section>
<script>
function Submit(){
  if(!confirm('آیا از فرستادن پیام مطمئن هستید؟')){
    return false;
  }
  else{
    alert('پیام شما با موفقیت ارسال شد.');
    return true;
  }
}
</script>
<section>
      <table  class = "contact_table" >
        <tr>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            <td>
              <h3 class="form-sent">برای ارتباط بیشتر با من فرم زیر را تکمیل کنید:</h3>
              <form method="post" onsubmit="return Submit();">
                <input placeholder="نام و نام خانوادگی" name="user-name" ><br><br>
                <input placeholder="آدرس ایمیل" name="user-email" ><br><br>
                <textarea placeholder="پیام" cols="50" rows="10" name="user-message"></textarea>
                <input type="submit" value="Submit"  >
              </form>
          </td>
          <td>
            <img class="contact-image" src="image14.jpg" width="600" height="600"/>
        </td>
        </tr>
      </table>
</section>
<footer class="main-footer">
<img class="footer-image" src="image11.png" width="100" height="100">
<h3 class="footer-name">ارتباط با من</h3>
<ul>
<li><img src = "image5.png" width="25" height="25"></li>
<a href="mailto:rozhintn@gmail.com">rozhintn@gmail.com</a>
<li><img src = "image4.ico" width="25" height="25"></li>
<a href="https://github.com/RozhTagh">github.com/RozhTagh</a>
<li><img src = "image2.png" width="25" height="25"></li>
<a href="https://t.me/RozhTagh">t.me/RozhTagh</a>
<li><img src="image3.ico" width="25" height="25"></li>
<a href="https://instagram.com/rozhin_tn">instagram.com/rozhin_tn</a>
<p class="author-name">creator: Rozhin Taghizadegan</p>
</ul>
</footer>
</body>
</html>

<?php
              
if(isset($_POST['user-name']))
{
chdir("text files");

$fileCount = count (glob ('*.txt'));
$newName = ( $fileCount + 1) . '.txt';

$data=$_POST['user-name'];

$fp = fopen($newName, 'a');
fwrite($fp, $data . PHP_EOL);
fclose($fp);
}
?>

<?php

if(isset($_POST['user-email']))
{
chdir("text files");

$fileCount = count (glob ('*.txt'));
$newName = ($fileCount) . '.txt';
	
$data=$_POST['user-email'];

$fp = fopen($newName, 'a');
fwrite($fp, $data . PHP_EOL);
fclose($fp);
}
?>

<?php

if(isset($_POST['user-message']))
{
chdir("text files");
	
$fileCount = count (glob ('*.txt'));
$newName = ( $fileCount ) . '.txt';

$data=$_POST['user-message'];

$fp = fopen($newName, 'a');
fwrite($fp, $data . PHP_EOL);
fclose($fp);
}
?>