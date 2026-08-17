<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>انتخاب نقش</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;700&display=swap"
          rel="stylesheet">

    <style>
        body{
            font-family: "Vazirmatn", sans-serif;
            min-height:100vh;
            background: linear-gradient(135deg,#f8fffa,#e8f7ee);
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .main-box{
            width:100%;
            max-width:1100px;
        }

        .title{
            color:#198754;
            font-weight:700;
        }

        .subtitle{
            color:#6c757d;
        }

        .role-card{
            border:none;
            border-radius:25px;
            overflow:hidden;
            background:#fff;
            transition:.4s;
            cursor:pointer;
            position:relative;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
        }

        .role-card:hover{
            transform:translateY(-10px);
            box-shadow:0 20px 40px rgba(25,135,84,.2);
        }

        .role-card::before{
            content:'';
            position:absolute;
            top:0;
            right:0;
            width:100%;
            height:6px;
            background:linear-gradient(to left,#198754,#6ee7a8);
        }

        .icon-box{
            width:100px;
            height:100px;
            margin:auto;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            background:rgba(25,135,84,.1);
            color:#198754;
            font-size:50px;
        }

        .btn-role{
            background:#198754;
            color:white;
            border-radius:12px;
            padding:12px 30px;
            transition:.3s;
        }

        .btn-role:hover{
            background:#157347;
            color:white;
        }

        .floating{
            animation:float 3s ease-in-out infinite;
        }

        @keyframes float{
            0%,100%{
                transform:translateY(0);
            }
            50%{
                transform:translateY(-8px);
            }
        }

        .badge-custom{
            background:#d1fae5;
            color:#198754;
            font-weight:500;
        }
        :root{
    --primary:#22c55e;
    --primary-light:#86efac;
}

body{
    font-family: Vazirmatn,sans-serif;
    min-height:100vh;
    background:
    radial-gradient(circle at top right,#bbf7d0 0%,transparent 30%),
    radial-gradient(circle at bottom left,#dcfce7 0%,transparent 35%),
    #f8fffa;
    overflow-x:hidden;
}

.role-card{
    background:rgba(255,255,255,.75);
    backdrop-filter:blur(20px);
    border:1px solid rgba(255,255,255,.6);
    border-radius:32px;
    transition:.4s ease;
    box-shadow:
    0 15px 40px rgba(34,197,94,.12);
}

.role-card:hover{
    transform:translateY(-12px) scale(1.03);
    box-shadow:
    0 30px 60px rgba(34,197,94,.25);
}

.icon-circle{
    width:120px;
    height:120px;
    border-radius:50%;
    background:linear-gradient(
        135deg,
        #22c55e,
        #86efac
    );
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:55px;
    margin:auto;
}
.btn-role{
    background:#22c55e;
    color:#fff;
    border:none;
    padding:14px 32px;
    border-radius:14px;
    font-weight:600;
    transition:.3s;
}

.btn-role:hover{
    background:#16a34a;
    transform:translateY(-3px);
    color:#fff;
}
.blob{
    position:fixed;
    border-radius:50%;
    filter:blur(80px);
    z-index:-1;
}

.blob-1{
    width:350px;
    height:350px;
    background:#86efac;
    top:-100px;
    right:-100px;
}

.blob-2{
    width:300px;
    height:300px;
    background:#22c55e33;
    bottom:-100px;
    left:-100px;
}
    </style>
</head>
<body>

<div class="container main-box">
<div class="blob blob-1"></div>
<div class="blob blob-2"></div>
<div class="text-center mb-5">
    <span class="badge bg-success-subtle text-success px-4 py-2 rounded-pill">
        سامانه رشد و تعالی
    </span>

    <h1 class="display-4 fw-bold mt-4">
        نقش خود را انتخاب کنید
    </h1>

    <p class="text-secondary fs-5">
        برای ورود به سامانه یکی از گزینه‌های زیر را انتخاب نمایید
    </p>
</div>

    <div class="row g-4 justify-content-center">

        <!-- Student -->
        <div class="col-md-5">
            <div class="card role-card h-100 p-4 text-center">

                <div class="icon-box floating">
                    <i class="bi bi-mortarboard-fill"></i>
                </div>

                <div class="card-body">
                    <span class="badge badge-custom mb-3">
                        دانشجو
                    </span>

                    <h3 class="fw-bold mb-3">
                        ورود به پنل دانشجویی
                    </h3>

                    <p class="text-muted mb-4">
                        مشاهده دوره‌ها، ثبت فعالیت‌های پژوهشی،
                        پیگیری پیشرفت و تعامل با اساتید.
                    </p>

                    <a href="#" class="btn btn-role">
                        ورود دانشجو
                    </a>
                </div>

            </div>
        </div>

        <!-- Teacher -->
        <div class="col-md-5">
            <div class="card role-card h-100 p-4 text-center">

                <div class="icon-box floating">
                    <i class="bi bi-person-workspace"></i>
                </div>

                <div class="card-body">

                    <span class="badge badge-custom mb-3">
                        استاد
                    </span>

                    <h3 class="fw-bold mb-3">
                        ورود به پنل اساتید
                    </h3>

                    <p class="text-muted mb-4">
                        مدیریت دانشجویان، ارزیابی فعالیت‌ها،
                        مشاهده گزارش‌ها و ثبت بازخورد.
                    </p>

                    <a href="#" class="btn btn-role">
                        ورود استاد
                    </a>
                </div>

            </div>
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>