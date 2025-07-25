@extends('layouts.master')
@section('title')
    @lang('translation.blog')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Dashboards
        @endslot
        @slot('title')
            Blog
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-9">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body d-flex gap-3 align-items-center">
                            <div class="avatar-sm">
                                <div
                                    class="avatar-title border bg-success-subtle border-success border-opacity-25 rounded-2 fs-17">
                                    <i data-feather="users" class="icon-dual-success"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-15">17.6k</h5>
                                <p class="mb-0 text-muted">Followers</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body d-flex gap-3 align-items-center">
                            <div class="avatar-sm">
                                <div
                                    class="avatar-title border bg-warning-subtle border-warning border-opacity-25 rounded-2 fs-17">
                                    <i data-feather="file-text" class="icon-dual-warning"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-15">149</h5>
                                <p class="mb-0 text-muted">Total Post</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body d-flex gap-3 align-items-center">
                            <div class="avatar-sm">
                                <div
                                    class="avatar-title border bg-danger-subtle border-danger border-opacity-25 rounded-2 fs-17">
                                    <i data-feather="heart" class="icon-dual-danger"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-15">24.8k</h5>
                                <p class="mb-0 text-muted">Likes</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body d-flex gap-3 align-items-center">
                            <div class="avatar-sm">
                                <div
                                    class="avatar-title border bg-primary-subtle border-primary border-opacity-25 rounded-2 fs-17">
                                    <i data-feather="bar-chart" class="icon-dual-primary"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-15">54.3k</h5>
                                <p class="mb-0 text-muted">Views</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h5 class="card-title mb-0 flex-grow-1">Site Visitors</h5>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span
                                            class="text-muted">Current Week<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Current Year</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div id="column_chart_datalabel" data-colors='["--vz-primary"]' class="apex-charts"
                                dir="ltr"></div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h5 class="card-title mb-0 flex-grow-1">Top Social Media Shares</h5>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted fs-16"><i
                                                class="mdi mdi-dots-vertical align-middle"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Current Year</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="d-flex gap-2 align-items-center mb-2">
                                <div class="avatar-xs flex-shrink-0">
                                    <div class="avatar-title bg-primary-subtle text-primary rounded-2 fs-17">
                                        <i class="ri-facebook-box-fill"></i>
                                    </div>
                                </div>
                                <h6 class="mb-0 fs-14 flex-grow-1">Facebook</h6>
                                <h6 class="flex-shrink-0 mb-0">32k</h6>
                            </div>
                            <div class="d-flex gap-2 align-items-center mb-2">
                                <div class="avatar-xs flex-shrink-0">
                                    <div class="avatar-title bg-danger-subtle text-danger rounded-2 fs-17">
                                        <i class="ri-google-line"></i>
                                    </div>
                                </div>
                                <h6 class="mb-0 fs-14 flex-grow-1">Google</h6>
                                <h6 class="flex-shrink-0 mb-0">13k</h6>
                            </div>
                            <div class="d-flex gap-2 align-items-center mb-2">
                                <div class="avatar-xs flex-shrink-0">
                                    <div class="avatar-title bg-success-subtle text-success rounded-2 fs-17">
                                        <i class="ri-whatsapp-line"></i>
                                    </div>
                                </div>
                                <h6 class="mb-0 fs-14 flex-grow-1">WhatsApp</h6>
                                <h6 class="flex-shrink-0 mb-0">11k</h6>
                            </div>
                            <div class="d-flex gap-2 align-items-center mb-2">
                                <div class="avatar-xs flex-shrink-0">
                                    <div class="avatar-title bg-dark-subtle text-dark rounded-2 fs-17">
                                        <i class="ri-invision-line"></i>
                                    </div>
                                </div>
                                <h6 class="mb-0 fs-14 flex-grow-1">Invision</h6>
                                <h6 class="flex-shrink-0 mb-0">19k</h6>
                            </div>
                            <div class="d-flex gap-2 align-items-center mb-2">
                                <div class="avatar-xs flex-shrink-0">
                                    <div class="avatar-title bg-danger-subtle text-danger rounded-2 fs-17">
                                        <i class="ri-instagram-line"></i>
                                    </div>
                                </div>
                                <h6 class="mb-0 fs-14 flex-grow-1">Instagram</h6>
                                <h6 class="flex-shrink-0 mb-0">18k</h6>
                            </div>
                            <div class="d-flex gap-2 align-items-center mb-2">
                                <div class="avatar-xs flex-shrink-0">
                                    <div class="avatar-title bg-info-subtle text-info rounded-2 fs-17">
                                        <i class="ri-telegram-2-line"></i>
                                    </div>
                                </div>
                                <h6 class="mb-0 fs-14 flex-grow-1">Telegram</h6>
                                <h6 class="flex-shrink-0 mb-0">26k</h6>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <div class="avatar-xs flex-shrink-0">
                                    <div class="avatar-title bg-secondary-subtle text-secondary rounded-2 fs-17">
                                        <i class="ri-youtube-line"></i>
                                    </div>
                                </div>
                                <h6 class="mb-0 fs-14 flex-grow-1">YouTube</h6>
                                <h6 class="flex-shrink-0 mb-0">9k</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end col-->
        <div class="col-xl-3">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Recent Comment</h4>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            View All
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div data-simplebar class="mx-n3 px-3" style="height: 375px;">
                        <div class="vstack gap-3">
                            <div class="d-flex gap-3">
                                <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt=""
                                    class="avatar-sm rounded flex-shrink-0">
                                <div class="flex-shrink-1">
                                    <h6 class="mb-2">Diana Kohler <span class="text-muted">Has commented</span></h6>
                                    <p class="text-muted mb-0">" Really well-written and informative. The emotional
                                        connection strategy is something I’ll be testing out more! "</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt=""
                                    class="avatar-sm rounded flex-shrink-0">
                                <div class="flex-shrink-1">
                                    <h6 class="mb-2">Tonya Noble <span class="text-muted">Has commented</span></h6>
                                    <p class="text-muted mb-0">" Incredibly helpful tips, especially about adding a call to
                                        action. I’ve been missing that step and will implement it in my next post! "</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt=""
                                    class="avatar-sm rounded flex-shrink-0">
                                <div class="flex-shrink-1">
                                    <h6 class="mb-2">Donald Palmer <span class="text-muted">Has commented</span></h6>
                                    <p class="text-muted mb-0">" Fantastic read! The power of visuals and trends really
                                        stood out to me. Thanks for sharing these useful insights! "</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt=""
                                    class="avatar-sm rounded flex-shrink-0">
                                <div class="flex-shrink-1">
                                    <h6 class="mb-2">Joseph Parker <span class="text-muted">Has commented</span></h6>
                                    <p class="text-muted mb-0">" Great post! Simple yet powerful tips that I can start
                                        using immediately. Thanks for sharing your expertise! "</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <img src="{{ URL::asset('build/images/users/avatar-9.jpg') }}" alt=""
                                    class="avatar-sm rounded flex-shrink-0">
                                <div class="flex-shrink-1">
                                    <h6 class="mb-2">Timothy Smith <span class="text-muted">Has commented</span></h6>
                                    <p class="text-muted mb-0">" Wow, this has opened my eyes to a new perspective on
                                        creating content. Emotional triggers—such a smart way to engage users! "</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt=""
                                    class="avatar-sm rounded flex-shrink-0">
                                <div class="flex-shrink-1">
                                    <h6 class="mb-2">Alexis Clarke <span class="text-muted">Has commented</span></h6>
                                    <p class="text-muted mb-0">" Fantastic read! The power of visuals and trends really
                                        stood out to me. Thanks for sharing these useful insights! "</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""
                                    class="avatar-sm rounded flex-shrink-0">
                                <div class="flex-shrink-1">
                                    <h6 class="mb-2">Thomas Taylor <span class="text-muted">Has commented</span></h6>
                                    <p class="text-muted mb-0">" Loved the section on visual storytelling. It’s true that
                                        images speak louder on social media platforms. More visuals in my next posts for
                                        sure! "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Recent Article</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span
                                    class="text-muted">Popular <i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Popular</a>
                                <a class="dropdown-item" href="#">Newest</a>
                                <a class="dropdown-item" href="#">Oldest</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-hover table-nowrap align-middle mb-0">
                            <thead class="table-light">
                                <tr class="text-muted">
                                    <th scope="col">No</th>
                                    <th scope="col">Blog Title</th>
                                    <th scope="col">Post Date</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">Like</th>
                                    <th scope="col">Shared</th>
                                    <th scope="col">Viewers</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>
                                        <img src="{{ URL::asset('build/images/blog/img-2.jpg') }}" alt=""
                                            class="me-2 rounded" height="40">
                                        <a href="#!" class="text-body fw-medium">The Evolution of Minimalism in
                                            Design</a>
                                    </td>
                                    <td>20 Sep, 2024</td>
                                    <td><span class="badge bg-success-subtle text-success p-2">MinimalDesign</span></td>
                                    <td>23</td>
                                    <td>157</td>
                                    <td>11</td>
                                    <td>2149</td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>
                                        <img src="{{ URL::asset('build/images/blog/img-3.jpg') }}" alt=""
                                            class="me-2 rounded" height="40">
                                        <a href="#!" class="text-body fw-medium">Mastering User Experience Through
                                            Storytelling</a>
                                    </td>
                                    <td>11 Feb, 2024</td>
                                    <td><span class="badge bg-success-subtle text-success p-2">UXDesign</span></td>
                                    <td>547</td>
                                    <td>1458</td>
                                    <td>317</td>
                                    <td>34978</td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>
                                        <img src="{{ URL::asset('build/images/blog/img-4.jpg') }}" alt=""
                                            class="me-2 rounded" height="40">
                                        <a href="#!" class="text-body fw-medium">Designing for Purpose: A Mindful
                                            Approach</a>
                                    </td>
                                    <td>15 Sep, 2024</td>
                                    <td><span class="badge bg-success-subtle text-success p-2">CreativeProcess</span></td>
                                    <td>88</td>
                                    <td>649</td>
                                    <td>237</td>
                                    <td>1982</td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>
                                        <img src="{{ URL::asset('build/images/blog/img-5.jpg') }}" alt=""
                                            class="me-2 rounded" height="40">
                                        <a href="#!" class="text-body fw-medium">How to Overcome Creative Block</a>
                                    </td>
                                    <td>09 July, 2024</td>
                                    <td><span class="badge bg-success-subtle text-success p-2">CreativeBlock</span></td>
                                    <td>67</td>
                                    <td>1114</td>
                                    <td>1547</td>
                                    <td>15747</td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>
                                        <img src="{{ URL::asset('build/images/blog/img-6.jpg') }}" alt=""
                                            class="me-2 rounded" height="40">
                                        <a href="#!" class="text-body fw-medium">Building Brand Identity through
                                            Design</a>
                                    </td>
                                    <td>19 Nov, 2024</td>
                                    <td><span class="badge bg-success-subtle text-success p-2">BrandDesign</span></td>
                                    <td>8</td>
                                    <td>10</td>
                                    <td>7</td>
                                    <td>110</td>
                                </tr>
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>
                    <div class="align-items-center mt-3 row g-3 text-center text-sm-start">
                        <div class="col-sm">
                            <div class="text-muted">Showing <span class="fw-semibold">5</span> of <span
                                    class="fw-semibold">14</span> Results
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul
                                class="pagination pagination-separated pagination-sm justify-content-center justify-content-sm-start mb-0">
                                <li class="page-item disabled">
                                    <a href="#!" class="page-link">←</a>
                                </li>
                                <li class="page-item">
                                    <a href="#!" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#!" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#!" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#!" class="page-link">→</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt=""
                                        class="avatar-sm rounded-circle img-thumbnail">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1 card-title">Anna Adame</h5>
                                            <p class="mb-0 text-muted">Founder</p>
                                        </div>

                                        <div class="flex-shrink-0 dropdown ms-2">
                                            <button class="btn btn-light btn-sm" type="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bxs-cog align-middle me-1"></i> Setting
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="border p-2 rounded border-dashed">
                                                <p class="text-muted text-truncate mb-2">Total Post</p>
                                                <h5 class="mb-0">26</h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border p-2 rounded border-dashed">
                                                <p class="text-muted text-truncate mb-2">Subscribes</p>
                                                <h5 class="mb-0">17k</h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="border p-2 rounded border-dashed">
                                                <p class="text-muted text-truncate mb-2">Viewers</p>
                                                <h5 class="mb-0">487k</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h5 class="card-title mb-0 flex-grow-1">Used Device</h5>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted fs-16"><i
                                                class="mdi mdi-dots-vertical align-middle"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Current Year</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div id="gradient_chart" data-colors='["--vz-primary", "--vz-success", "--vz-warning"]'
                                class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end col-->
    </div><!--end row-->
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/dashboard-blog.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
