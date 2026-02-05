<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Site | Gradient Able Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Gradient Able is trending dashboard template made using Bootstrap 5 design framework. Gradient Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="codedthemes">
    <!-- [Favicon] icon -->
    <link rel="icon" href="https://codedthemes.com/demos/admin-templates/gradient-able/bootstrap/default/admin-assets/images/favicon.svg" type="image/x-icon">
    <!-- [Page specific CSS] start -->
    <!-- fileupload-custom css -->
    <link rel="stylesheet" href="<?= base_url('admin-assets/css/plugins/dropzone.min.css') ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('admin-assets/css/plugins/quill.core.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin-assets/css/plugins/quill.snow.css') ?>">
    <!-- [Page specific CSS] end --><!-- [Google Font : Poppins] icon -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="<?= base_url('admin-assets/fonts/phosphor/duotone/style.css') ?>">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="<?= base_url('admin-assets/fonts/tabler-icons.min.css') ?>">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="<?= base_url('admin-assets/fonts/feather.css') ?>">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="<?= base_url('admin-assets/fonts/fontawesome.css') ?>">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="<?= base_url('admin-assets/fonts/material.css') ?>">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="<?= base_url('admin-assets/css/style.css') ?>" id="main-style-link">
    <link rel="stylesheet" href="<?= base_url('admin-assets/css/style-preset.css') ?>">
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-header="header-1" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="/" class="b-brand text-primary">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="<?= base_url('admin-assets/images/logo-white.svg') ?>" alt="logo image" class="logo-lg">
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption"><label data-i18n="Navigation">Navigation</label></li>
                    <li class="pc-item pc-hasmenu">
                        <a href="" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph ph-gauge"></i>
                            </span>
                            <span class="pc-mtext">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="m-header">
            <a href="/" class="b-brand text-primary">
                <!-- ========    Change your logo from here    ============ -->
                <img src="<?= base_url('admin-assets/images/logo-white.svg') ?>" alt="logo image" class="logo-lg">
            </a>
        </div>
        <div class="header-wrapper">
            <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <!-- ======= Menu collapse Icon ===== -->
                    <li class="pc-h-item pc-sidebar-collapse"><a href="#" class="pc-head-link ms-0" id="sidebar-hide"><i class="ph ph-list"></i></a></li>
                    <li class="pc-h-item pc-sidebar-popup"><a href="#" class="pc-head-link ms-0" id="mobile-collapse"><i class="ph ph-list"></i></a></li>
                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="ph ph-sun-dim"></i></a>
                        <div class="dropdown-menu dropdown-menu-end pc-h-dropdown"><a href="#!" class="dropdown-item" onclick="layout_change('dark')"><i class="ph ph-moon"></i> <span>Dark</span> </a><a href="#!" class="dropdown-item" onclick="layout_change('light')"><i class="ph ph-sun-dim"></i> <span>Light</span> </a><a href="#!" class="dropdown-item" onclick="layout_change_default()"><i class="ph ph-cpu"></i> <span>Default</span></a></div>
                    </li>
                    <li class="dropdown pc-h-item header-user-profile">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false"><img src="admin-assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar"></a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h4 class="m-0">Profile</h4>
                            </div>
                            <div class="dropdown-body">
                                <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                                    <ul class="list-group list-group-flush w-100">
                                        <li class="list-group-item">
                                            <a href="#" class="dropdown-item">
                                                <span class="d-flex align-items-center">
                                                    <i class="ph ph-plus-circle"></i>
                                                    <span>Add account</span>
                                                </span>
                                            </a>
                                            <a href="<?= base_url('/admin/logout') ?>" class="dropdown-item">
                                                <span class="d-flex align-items-center">
                                                    <i class="ph ph-power"></i>
                                                    <span>Logout</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- [ Header ] end -->
    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Site</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-wizard row justify-content-center">
                            <div class="card table-card border shadow-none">
                                <div class="card-header pb-0 pt-2">
                                    <ul class="nav nav-tabs profile-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">School Pages</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Product Pages</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                            <form action="<?= base_url('admin/save-school') ?>" method="post">
                                                <?= csrf_field() ?>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label d-flex align-items-center"><i class="ph ph-buildings me-2"></i> School Name</label>
                                                            <input type="text" name="school_name" class="form-control" placeholder="e.g. SMA Negeri 1 Tosun">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label d-flex align-items-center"><i class="ph ph-link me-2"></i> School URL</label>
                                                            <input type="url" name="school_url" class="form-control" placeholder="https://sman1tosun.sch.id">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label d-flex align-items-center"><i class="ph ph-article me-2"></i> Description</label>
                                                            <textarea name="description" class="form-control" rows="3" placeholder="Describe the school..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-check form-switch mb-3">
                                                            <input class="form-check-input" type="checkbox" name="is_active" id="isActiveSwitch" checked>
                                                            <label class="form-check-label d-flex align-items-center" for="isActiveSwitch">
                                                                Active Status <span class="badge bg-light-success border border-success text-success ms-2">Enabled</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-4 pt-2 border-top">
                                                        <button type="submit" class="btn btn-primary d-flex align-items-center">
                                                            <i class="ph ph-floppy-disk me-2"></i> Save Changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col-sm-6 my-1">
                    <p class="m-0">Gradient Able &#9829; crafted by Team <a href="https://codedthemes.com/" target="_blank">Codedthemes</a></p>
                </div>
                <div class="col-sm-6 ms-auto my-1">
                    <ul class="list-inline footer-link mb-0 justify-content-sm-end d-flex">
                        <li class="list-inline-item"><a href="https://codedthemes.com/demos/admin-templates/gradient-able/bootstrap/default/index.html">Home</a></li>
                        <li class="list-inline-item"><a href="https://codedthemes.gitbook.io/gradient-able-bootstrap/" target="_blank">Documentation</a></li>
                        <li class="list-inline-item"><a href="https://codedthemes.support-hub.io/" target="_blank">Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Required Js -->
    <script src="<?= base_url('admin-assets/js/plugins/popper.min.js') ?>"></script>
    <script src="<?= base_url('admin-assets/js/plugins/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('admin-assets/js/plugins/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('admin-assets/js/fonts/custom-font.js') ?>"></script>
    <script src="<?= base_url('admin-assets/js/script.js') ?>"></script>
    <script src="<?= base_url('admin-assets/js/theme.js') ?>"></script>
    <script src="<?= base_url('admin-assets/js/plugins/feather.min.js') ?>"></script>
    <script defer="defer" src="https://fomo.codedthemes.com/pixel/yRevReYmxkh1j4z7Hc4tgbOKeXSu5Bm1"></script>
    <script>
        layout_change('light');
    </script>
    <script>
        layout_sidebar_change('light');
    </script>
    <script>
        change_box_container('false');
    </script>
    <script>
        layout_caption_change('true');
    </script>
    <script>
        layout_rtl_change('false');
    </script>
    <script>
        preset_change('preset-1');
    </script>
    <script>
        header_change('header-1');
    </script>
    <!-- [Page Specific JS] start -->
    <!-- file-upload Js -->
    <script src="<?= base_url('admin-assets/js/plugins/dropzone-amd-module.min.js') ?>"></script>
    <script src="<?= base_url('admin-assets/js/plugins/wizard.min.js') ?>"></script>
    <script src="<?= base_url('admin-assets/js/plugins/quill.min.js') ?>"></script>
</body>

</html>