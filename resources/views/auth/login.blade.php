
<!doctype html>
<html lang="en">

<head>
    <title>Authentication</title>
<!-- [Meta] -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
<meta name="author" content="premy punchu" />
<meta name="theme-color" content="#1e293b" />
<meta name="color-scheme" content="light dark" />

<!-- [Open Graph] -->
<meta property="og:type" content="website" />
<meta property="og:title" content="Login | Admindek Dashboard Template" />
<meta property="og:description" content="Modern responsive dashboard template built with Bootstrap 5. Features dark/light themes, RTL support, and extensive UI components." />
<meta property="og:site_name" content="Admindek" />

<!-- [Twitter/X Card] -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Login | Admindek Dashboard Template" />
<meta name="twitter:description" content="Modern responsive dashboard template built with Bootstrap 5. Features dark/light themes, RTL support, and extensive UI components." />

<!-- [Favicon] icons -->
<link rel="icon" href="../assets/images/favicon.svg" type="image/svg+xml" />
<link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png" />
<link rel="manifest" href="../assets/images/site.html" />
 <!-- [Font] Family -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet" />
<!-- [phosphor Icons] https://phosphoricons.com/ -->
<link rel="stylesheet" href="../assets/css/plugins/phosphor-icons.css" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="../assets/css/plugins/tabler-icons.min.css" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
<link rel="stylesheet" href="../assets/css/style-preset.css" />
<!-- [Vite Development Scripts] -->
<!-- Development script removed for production -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Asimovian&display=swap" rel="stylesheet">
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

 <body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light" style="font-family:outfit;">
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->

    <div class="auth-main">
      <div class="auth-wrapper v1">
        <div class="auth-form">
          <div class="position-relative">
            <div class="auth-bg">
              <span class="r"></span>
              <span class="r s"></span>
              <span class="r s"></span>
              <span class="r"></span>
            </div>
            <div class="card mb-0">
              <div class="card-body">
                <div class="text-center justify-center item-center">
                  <a href="#" class="text-center justify-center item-center">
                    <img src="{{asset('/assets/images/favicon.svg')}}" alt="sms" style="width: 90px; height: 90px;" />
                </a>
                </div>
                <h2 class="text-center f-w-500 mt-4 mb-3" style="font-family:Asimovian">sms</h2>
                <p class="text-center text-dark justify-center item-center">
                    Storage Management System
                </p>
                 <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="mb-3">
                  <input type="text" class="form-control" name="email" id="floatingInput" placeholder="username" />
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mb-3">
                  <input type="password" name="password" class="form-control" id="floatingInput1" placeholder="Password" />
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-primary shadow px-sm-4">Login</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Required JS -->
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/plugins/i18next.min.js"></script>
<script src="../assets/js/plugins/i18nextHttpBackend.min.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/theme.js"></script>
<script src="../assets/js/multi-lang.js"></script>

</body>

</html>
