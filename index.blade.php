<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{getenv("APP_ADDR_1")}}</title>
    <link rel="shortcut icon" href="images/mylogo.ico">
    <link rel="stylesheet" href="/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>
header{
    background-color: white;
    height:70px;
    width: auto;
}
footer{
    background-color: #007500;
    color: #cccccc;
    height: calc(5vh);
    width: auto;
    font-size: 10pt;
}
.leftside{
    /* background-color: #fec9ff; */
    height: calc(85vh);
    width:20%;
    /* overflow-y: auto; */
}
.rightside{
    /* background-color: yellow; */
    height: calc(85vh);
    float: right;
    width:19%;
}
.middlebody{
    /* background-color: yellow; */
    height: calc(-84vh);
    margin-left: 20%;
    /* margin-bottom: -200px; */
    border: 2px;
    width:80%;
}
.yellow-shadow{
    text-shadow: 2px 2px 2px #fff600;
}
.black-shadow{
    text-shadow: 2px 2px 2px #909090;
}
#bg_img_l{
    background-image: url(/images/body_bg_l.png);
    background-repeat: no-repeat;
}
#bg_img_r{
    background-image: url(/images/body_bg_r.png);
    background-repeat: no-repeat;
}
</style>
<header>
<div class="container-fluid">
        <div class="row" style="background-color: #8ef486;">
            <div class="row">
                <div class="col-md-3 col-sm-12 px-0">
                    <img src="/images/ldc_banner2.png" height="70px" alt="image">
                </div>
                <div class="col-md-9 col-sm-12 px-0 fill_img mx-0" style="background-image: url('/images/border2.png');">
                    <div class="col col-sm-12 text-end ">
                        <img src="/images/founder2.png" height="70px" alt="image" class="yellow-shadow float-end">
                        <marquee class="float-end" behavior="alternate" style="color:#fcff00; font-weight:bold; width:78%; margin-top:2px">"Semper pro Veritate" - "Always for the Truth"</marquee>
                        <marquee style="color:white; width:84%; margin-top:24px" onmouseover="this.stop()" onmouseout="this.start()">Today News and Events</marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- 
    <div class="container-fluid position-fixed">
        <div class="row">
            <div class="col col-sm-12 px-0">
                <div class="row" style="background-color: #8ef486;">
                    <div class="col col-sm-12 style="background-color: #8ef486">
                        <img src="/images/border2.png" height="70px" width="75%" alt="image" class="float-end">
                    </div>
                    <div class="col col-sm-2 position-absolute top-0 start-0 px-0">
                        <img src="/images/ldc_banner2.png" height="70px" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7 position-absolute top-0 end-0">
            <marquee behavior="alternate" style="color:#fcff00; font-weight:bold; width:90%; margin-top:4px">"Semper pro Veritate" - "Always for the Truth"</marquee>
        </div>
        <div class="col-8 position-absolute top-0 end-0">
            <marquee style="color:white; width:95%; margin-top:45px" onmouseover="this.stop()" onmouseout="this.start()">Today News and Events</marquee>
        </div>
        <div class="position-absolute top-0 end-0">
            <img src="/images/founder2.png" height="70px" alt="image" class="yellow-shadow">
        </div>
    </div> -->
</header>
<body>
    <div class="middlebody">
        <div class="carousel slide py-0" data-bs-ride="carousel" style="width:75%">
            <!-- The slideshow/carousel -->
            <div class="col-sm-2 carousel-inner w-100 h-100 py-0">
                <div class="border carousel-item active py-0">
                    <img src="/slides/100.jpg" alt="images" class="d-block w-100">
                </div>
                <div class="border carousel-item py-0">
                    <img src="/slides/101.jpg" alt="images" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/slides/102.jpg" alt="images" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/slides/103.jpg" alt="images" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/slides/104.jpg" alt="images" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/slides/105.jpg" alt="images" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/slides/106.jpg" alt="images" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/slides/107.jpg" alt="images" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/slides/108.jpg" alt="images" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/slides/109.jpg" alt="images" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/slides/110.jpg" alt="images" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/slides/111.jpg" alt="images" class="d-block w-100">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between w-75">
            <div class="h3 fw-bold text-center">
                <a class="btn btn-success" href="{{url('mylog')}}">Login</a>
            </div>
        </div>
        <div class="d-flex justify-content-between w-75">
            <div class="h3 fw-bold text-center">
                <strong class="text-success h5 yellow-shadow">Students</strong>
                <h3 class="count black-shadow" data-target="4500">0</h3>
            </div>
            <div class="h3 fw-bold text-center">
                <strong class="text-success h5 yellow-shadow">Teaching Staff</strong>
                <h3 class="count black-shadow" data-target="272">0</h3>
            </div>
            <div class="h3 fw-bold text-center">
                <strong class="text-success h5 yellow-shadow">Non-Teaching Staff</strong>
                <h3 class="count black-shadow" data-target="139">0</h3>
            </div>
            <div class="h3 fw-bold text-center">
                <strong class="text-success h5 yellow-shadow">Programmes</strong>
                <h3 class="count black-shadow" data-target="40">40</h3>
            </div>
        </div>
    </div>
    <div class="rightside" id="bg_img_r">
    <span class="text-danger h4 yellow-shadow">Officials</span>
        <marquee direction="up" style="height: calc(36vh);">
            <div class="flex justify-content-center">
                <div class="d-flex justify-content-center">
                    <img src="/images/founder.png" height="100px" alt=""><br/>
                </div>
                <div class="d-flex justify-content-center">
                    <span class="h4">Principal</span>
                </div>
            </div>
        </marquee>
        <span class="text-danger h4 yellow-shadow mt-1">News and Events</span>
        <marquee direction="up" style="height: calc(38vh);">
            News and Events
        </marquee>
    </div>
    <div class="leftside" id="bg_img_l" >
        <span class="text-danger h4 yellow-shadow p-2">Modules</span>
        <marquee direction="up" style="height: calc(79vh);">
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/admissions.png" style="vertical-align: text-bottom" height="50px" alt="image"> Admission</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/attendance.png" style="vertical-align: text-bottom" height="50px" alt="image"> Attendance</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/exams.png" style="vertical-align: text-bottom" height="50px" alt="image"> Examinations</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/students.png" style="vertical-align: text-bottom" height="50px" alt="image"> Students</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/faculty.png" style="vertical-align: text-bottom" height="50px" alt="image"> Faculty</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/nts.png" style="vertical-align: text-bottom" height="50px" alt="image"> Non-Teaching</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/library.png" style="vertical-align: text-bottom" height="50px" alt="image"> Library</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/feedback.png" style="vertical-align: text-bottom" height="50px" alt="image"> Feedback</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/reports.png" style="vertical-align: text-bottom" height="50px" alt="image"> Reports</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/results.png" style="vertical-align: text-bottom" height="50px" alt="image"> Results</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/calendar.png" style="vertical-align: text-bottom" height="50px" alt="image"> Calendar</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/alumnae.png" style="vertical-align: text-bottom" height="50px" alt="image"> Alumnae</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/prizes.png" style="vertical-align: text-bottom" height="50px" alt="image"> Prizes</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/hostel.png" style="vertical-align: text-bottom" height="50px" alt="image"> Hostel</span><br><br>
        <span class="text-primary h5 yellow-shadow px-2 py-2"><img src="/images/icons/payments.png" style="vertical-align: text-bottom" height="50px" alt="image"> Payments</span>
        </marquee>
    </div>
</body>
<script>
    const counts = document.querySelectorAll('.count')
    const speed = 97
    counts.forEach((counter) => {
        function upDate(){
            const target = Number(counter.getAttribute('data-target'))
            const count = Number(counter.innerText)
            const inc = target / speed        
            if(count < target){
                counter.innerText = Math.floor(inc + count) 
                setTimeout(upDate, 15)
            }else{
                counter.innerText = target
            }
        }
        upDate()
    })
</script>
<footer>
    <span class="float-start px-2 py-1">If you have technical queries send a mail to: ldcadmin@ldc.edu.in/cit@ldc.edu.in</span><span class="float-end px-2 py-1"> Working time: 9 a.m. - 5 p.m. | Contact No.:+91 9566845054; 0452-2530527/2524575</span>
</footer>