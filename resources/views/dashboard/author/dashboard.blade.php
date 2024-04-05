@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-page-head nk-block-head-sm">
            <div class="nk-block-head-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Welcome Back!</h3>
                </div>
            </div>
        </div><!-- .nk-page-head -->
        <div class="nk-block">
            <div class="row g-gs">
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-full bg-primary">
                        <div class="card-inner">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <div class="fs-6 text-white text-opacity-75 mb-0">Words Available</div>
                                <a href="html/copywriter/history.html" class="link link-white">See History</a>
                            </div>
                            <h5 class="fs-1 text-white">452 <small class="fs-3">words</small></h5>
                            <div class="fs-7 text-white text-opacity-75 mt-1"><span class="text-white">1548</span>/2000 free
                                words generated</div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-full bg-warning is-dark">
                        <div class="card-inner">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <div class="fs-6 text-white text-opacity-75 mb-0">Drafts Available</div>
                                <a href="html/copywriter/document-drafts.html" class="link link-white">See All</a>
                            </div>
                            <h5 class="fs-1 text-white">3 <small class="fs-3">Drafts</small></h5>
                            <div class="fs-7 text-white text-opacity-75 mt-1"><span class="text-white">7</span>/10 free
                                drafts created</div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-full bg-info is-dark">
                        <div class="card-inner">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <div class="fs-6 text-white text-opacity-75 mb-0">Documents Available</div>
                                <a href="html/copywriter/document-saved.html" class="link link-white">See All</a>
                            </div>
                            <h5 class="fs-1 text-white">6 <small class="fs-3">Documents</small></h5>
                            <div class="fs-7 text-white text-opacity-75 mt-1"><span class="text-white">4</span>/10 free
                                documents created</div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-full bg-danger is-dark">
                        <div class="card-inner">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <div class="fs-6 text-white text-opacity-75 mb-0">Tools Available</div>
                                <a href="html/copywriter/templates.html" class="link link-white">All Tools</a>
                            </div>
                            <h5 class="fs-1 text-white">12 <small class="fs-3">Tools</small></h5>
                            <div class="fs-7 text-white text-opacity-75 mt-1"><span class="text-white">4</span>/16 tools
                                used to generate</div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .nk-block -->
        <div class="nk-block-head">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Popular Templates</h4>
                </div>
                <div class="nk-block-head-content">
                    <a href="html/copywriter/templates.html" class="link">Explore All</a>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="row g-gs">
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-full">
                        <div class="card-inner">
                            <div class="user-avatar text-primary bg-primary-dim mb-3">
                                <em class="icon ni ni-bulb-fill"></em>
                            </div>
                            <h5 class="fs-4">Blog Ideas</h5>
                            <p>Produce trendy blog ideas for your business that engages.</p>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-full">
                        <div class="card-inner">
                            <div class="position-absolute end-0 top-0 me-4 mt-4">
                                <div class="badge text-bg-light rounded-pill text-uppercase">New</div>
                            </div>
                            <div class="user-avatar text-blue bg-blue-dim mb-3">
                                <em class="icon ni ni-spark-fill"></em>
                            </div>
                            <h5 class="fs-4">Social Media Posts</h5>
                            <p>Creative and engaging social media post for your brand.</p>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-full">
                        <div class="card-inner">
                            <div class="user-avatar text-danger bg-danger-dim mb-3">
                                <em class="icon ni ni-youtube-fill"></em>
                            </div>
                            <h5 class="fs-4">YouTube Tags Generator</h5>
                            <p>Generate SEO optimized keywords for your YouTube video.</p>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-sm-6 col-xxl-3">
                    <div class="card card-full">
                        <div class="card-inner">
                            <div class="user-avatar text-purple bg-purple-dim  mb-3">
                                <em class="icon ni ni-laptop"></em>
                            </div>
                            <h5 class="fs-4">Website Headlines/Copy</h5>
                            <p>Generate professional copy for your website that converts users.</p>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .nk-block -->
        <div class="nk-block-head">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Recent Documents</h4>
                </div>
                <div class="nk-block-head-content">
                    <a href="html/copywriter/document-saved.html" class="link"><span>See All</span> <em
                            class="icon ni ni-chevron-right"></em></a>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="did-all">
                                    <label class="custom-control-label" for="did-all"></label>
                                </div>
                            </th>
                            <th class="nk-tb-col">
                                <h6 class="overline-title">Name</h6>
                            </th>
                            <th class="nk-tb-col tb-col-sm">
                                <h6 class="overline-title">Type</h6>
                            </th>
                            <th class="nk-tb-col tb-col-md">
                                <h6 class="overline-title">Last Modified</h6>
                            </th>
                            <th class="nk-tb-col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="did-01">
                                    <label class="custom-control-label" for="did-01"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <div class="caption-text">The Impact of Artificial Intelligence on the Future of Work</div>
                            </td>
                            <td class="nk-tb-col tb-col-sm">
                                <div class="badge badge-dim bg-dark rounded-pill">Document</div>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                    <div>Feb 15,2023 </div>
                                    <div>02:31 PM</div>
                                </div>
                            </td>
                            <td class="nk-tb-col tb-col-end">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-icon btn-trigger me-n1" type="button"
                                        data-bs-toggle="dropdown">
                                        <em class="icon ni ni-more-h"></em>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="dropdown-content">
                                            <ul class="link-list-opt no-bdr">
                                                <li>
                                                    <a href="#"><em class="icon ni ni-eye"></em><span>View
                                                            Document</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><em
                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><em class="icon ni ni-trash"></em><span>Move to
                                                            Trash</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr><!-- .nk-tb-item -->
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="did-02">
                                    <label class="custom-control-label" for="did-02"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <div class="caption-text">How to Boost Your Online Presence with Social Media Marketing
                                </div>
                            </td>
                            <td class="nk-tb-col tb-col-sm">
                                <div class="badge badge-dim bg-info rounded-pill">Social Media</div>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                    <div>Feb 15,2023 </div>
                                    <div>02:31 PM</div>
                                </div>
                            </td>
                            <td class="nk-tb-col tb-col-end">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-icon btn-trigger me-n1" type="button"
                                        data-bs-toggle="dropdown">
                                        <em class="icon ni ni-more-h"></em>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="dropdown-content">
                                            <ul class="link-list-opt no-bdr">
                                                <li>
                                                    <a href="#"><em class="icon ni ni-eye"></em><span>View
                                                            Document</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><em
                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><em class="icon ni ni-trash"></em><span>Move to
                                                            Trash</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr><!-- .nk-tb-item -->
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="did-03">
                                    <label class="custom-control-label" for="did-03"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <div class="caption-text">Top 10 Tips for Effective Time Management in the Workplace</div>
                            </td>
                            <td class="nk-tb-col tb-col-sm">
                                <div class="badge badge-dim bg-primary rounded-pill">Blog Content</div>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                    <div>Feb 15,2023 </div>
                                    <div>02:31 PM</div>
                                </div>
                            </td>
                            <td class="nk-tb-col tb-col-end">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-icon btn-trigger me-n1" type="button"
                                        data-bs-toggle="dropdown">
                                        <em class="icon ni ni-more-h"></em>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="dropdown-content">
                                            <ul class="link-list-opt no-bdr">
                                                <li>
                                                    <a href="#"><em class="icon ni ni-eye"></em><span>View
                                                            Document</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><em
                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><em class="icon ni ni-trash"></em><span>Move to
                                                            Trash</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr><!-- .nk-tb-item -->
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="did-04">
                                    <label class="custom-control-label" for="did-04"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <div class="caption-text">Transforming Healthcare with Big Data: Exploring the
                                    Opportunities</div>
                            </td>
                            <td class="nk-tb-col tb-col-sm">
                                <div class="badge badge-dim bg-warning rounded-pill">Website Copy &amp; SEO</div>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                    <div>Feb 15,2023 </div>
                                    <div>02:31 PM</div>
                                </div>
                            </td>
                            <td class="nk-tb-col tb-col-end">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-icon btn-trigger me-n1" type="button"
                                        data-bs-toggle="dropdown">
                                        <em class="icon ni ni-more-h"></em>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="dropdown-content">
                                            <ul class="link-list-opt no-bdr">
                                                <li>
                                                    <a href="#"><em class="icon ni ni-eye"></em><span>View
                                                            Document</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><em
                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><em class="icon ni ni-trash"></em><span>Move to
                                                            Trash</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr><!-- .nk-tb-item -->
                    </tbody>
                </table>
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
@endsection
