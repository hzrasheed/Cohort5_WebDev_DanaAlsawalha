<?php
include_once('./connection.php');

if(array_key_exists('submit', $_POST)) {

    $comp_contant = $_POST['message'];
    $compNationality  = $_POST['nationality'];
    $compNationality_no = $_POST['nationality-number'];
    $compCity = $_POST['city'];
    $compEmail  = $_POST['email'];
    $compFirstName = $_POST['firstName'];
    $compLastName = $_POST['lastName'];
    $compPhoneNo = $_POST['phone'];
    $compChoice = $_POST['choice'];

    $sql = "INSERT INTO complanint_info(comp_contant, compNationality, compNationality_no, compCity, compEmail, compFirstName, compLastName, compPhoneNo, compChoice)
            Values('$comp_contant', '$compNationality', '$compNationality_no', '$compCity', '$compEmail', '$compFirstName', '$compLastName', '$compPhoneNo', '$compChoice')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('شكرا لتقديم الطلب')</script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>وزارةالتنمية الاجتماعية</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">الصفحة الرئيسية</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            عن الوزارة
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="About.html">نشأة الوزارة وتطورها</a>
                            <a class="dropdown-item" href="Structure.html">الهيكل التنظيمي</a>
                            <a class="dropdown-item" href="ManagementSystem.html">نظام التنظيم الإداري</a>
                            <a class="dropdown-item" href="Booklet.html">الكتيب التنظيمي للوزارة</a>
                            <a class="dropdown-item" href="#">وزراء التنمية الاجتماعية</a>
                            <a class="dropdown-item" href="#">الأمناء العاملون للوزارة</a>
                            <a class="dropdown-item" href="Reports.html">التقارير السنوية</a>
                            <a class="dropdown-item" href="Budget.html">الموازنة</a>
                            <a class="dropdown-item" href="Rules.html">تشريعات خاصة بالوزارة</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            الخدمات
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="EleServices.html">خدمات إلكترونية</a>
                            <a class="dropdown-item" href="GovServices.html">خدمات حكومية</a>
                            <a class="dropdown-item" href="EmpServices.html">خدمات الموظفين</a>
                            <a class="dropdown-item" href="DirectoryServices.html">دليل الخدمات</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            المبادرات
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="Initiatives.html">مبادرات الوزارة</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            المركز الإعلامي
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">صور ومرئيات</a>
                            <a class="dropdown-item" href="#">الأخبار</a>
                            <a class="dropdown-item" href="#">معلومات عامة</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            اتصل بنا
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="3SerComplaints.html">الشكاوى والاقتراحات</a>
                            <a class="dropdown-item" href="#">روابط هامة</a>
                            <a class="dropdown-item" href="4FAQ.html">أسئلة شائعة</a>
                            <a class="dropdown-item" href="Contact.html">الموقع / هواتف الوزارة</a>
                        </div>
                    </li>
                    <li class="nav-item" id="logo_name">
                        <a class="nav-link" href="index.html">
                            <h5>المملكة الأردنية الهاشمية</h5>
                            <h5>وزارة التنمية الاجتماعية</h5>
                        </a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
        </div>
    </nav>

    <script>
        function natNum() {
            var value = document.getElementById("natNum").value;
            if ((value.length > 10) || value.isEmpty()) {
                alert("you must fill the feild and it be less than 10 numbers");
            }
        }
        function natNum2() {
            var value = document.getElementById("natNum2").value;
            if (value.length > 10) {
                alert("must be less than 10 numbers");
            }
        }
        function backNum() {
            var value = document.getElementById("backNum").value;
            if (value.length > 32) {
                alert("must be less than 32 numbers");
            }
        }
        function ValidateEmail() {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(getElementById("email").value)) {
                return (true)
            }
            alert("You have entered an invalid email address!")
            return (false)
        }

    </script>

    <div class="container">
        <div class="liftSide">
            <div class="header">
                <h3>خدمة الشكاوى و الاقتراحات</h3>
            </div>
            <div class="form">
            <form method="POST" action="?">
                <div class="row">
                    <div class="form-element">
                        <label>الجنسية</label>
                        <select name="nationality" required>
                            <option selected>أردني</option>
                            <option selected>غير ذلك</option>
                        </select>
                    </div>
                    <div class="form-element">
                        <label>الرقم الوطني</label>
                        <input type="text" required id="natNum2" name="nationality-number" required/>
                    </div>
                    <div class="form-element">
                        <label>رقم الهاتف</label>
                        <input type="tel" id="phone" name="phone" placeholder="000-000-0000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-element">
                        <label>المحافظة</label>
                        <select name="city" required>
                            <option selected>--اختر--</option>
                            <option>عمان</option>
                            <option>الزرقاء</option>
                            <option>إربد</option>
                            <option>العقبة</option>
                            <option>عجلون</option>
                            <option>جرش</option>
                            <option>المفرق</option>
                            <option>الكرك</option>
                            <option>البلقاء</option>
                            <option>مأدبا</option>
                            <option>الطفيلة</option>
                            <option>معان</option>
                            <option>البلقاء</option>
                        </select>
                    </div>
                    <div class="form-element">
                        <label>الاسم الأول</label>
                        <input type="text" name="firstName" placeholder="الاسم الأول" required/>
                    </div>
                    <div class="form-element">
                        <label>اسم العائلة</label>
                        <input type="text" name="lastName" placeholder="الاسم العائلة" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-element">
                        <label>البريد الالكتروني</label>
                        <input type="email" style="width: 300px;" id="email" name="email" placeholder="name@gmail.com" required/>
                    </div>
                    <div class="form-element">
                        <label>شكوى أم اقتراح</label>
                        <select name="choice" required>
                            <option selected>--اختر--</option>
                            <option>شكوى</option>
                            <option>اقتراح</option>
                        </select>
                    </div>
                </div>
                <div class="row" id="txt">
                    <h5>أكتب الشكوى أو الاقتراح هنا:</h5>
                    <small>يرجى إدخال رقم هاتف صحيح ليتم إعلامكم بالمراحل القادمة.</small>
                </div>
                <div class="row">
                    <div class="form-element">
                        <input type="text" style="width: 500px; height: 180px;" name="message" required/>
                    </div>
                </div>
                <div class="row" id="apply">
                    <button class="button" type="submit" name="submit">تقديم الطلب</button>
                </div>
    </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <hr class="light">
                    <h5>اتصل بنا</h5>
                    <hr class="light">
                    <p>هاتف: 9327 6567 962+</p>
                    <p>إيميل: contact@mosd.gov.jo</p>
                    <p>فاكس: 9961 6567 962+</p>
                    <p>ص.ب: 6720-1118</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>ساعات العمل</h5>
                    <hr class="light">
                    <p>من الأحد إلى الخميس</p>
                    <p>8:30am - 3:30pm</p>
                    <p><a href="3SerComplaints.html">الشكاوى والاقتراحات</a></p>
                    <p><a href="#">روابط هامة</a></p>
                    <p><a href="4FAQ.html">أسئلة شائعة</a></p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>موقعنا</h5>
                    <hr class="light">
                    <p>عمان - دوار الداخلية - خلف وكالة الأنباء بترا</p>
                    <!--Google map-->
                    <div id="map-container-google-1" class="z-depth-1-half map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27074.5398526817!2d35.891612257673735!3d31.97940798507938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1df495e2a2ca1136!2sMinistry%20of%20Social%20Development!5e0!3m2!1sen!2sjo!4v1600249323568!5m2!1sen!2sjo"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
                <div class="col-12">
                    <hr class="light-100">
                    <h5>المملكة الأردنية الهاشمية - وزارة التنمية الاجتماعية - جميع الحقوق محفوظة &copy; 2020</h5>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>