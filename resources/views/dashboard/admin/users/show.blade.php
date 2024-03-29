@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">
                    @if ($user->hasRole('admin'))
                        Admin
                    @elseif ($user->hasRole('author'))
                        Author
                    @elseif ($user->hasRole('reader'))
                        Reader
                    @endif
                    / <strong class="text-primary small">{{ $user->name }}</strong>
                </h3>
            </div>
        </div>
        <div class="nk-block nk-block-lg">
            <div class="card card-stretch">
                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personal-info"><em
                                class="icon ni ni-user-circle-fill"></em><span>Personal information</span></a>
                    </li>
                    @if ($user->hasRole('author'))
                       
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile-novels"><em
                                    class="icon ni ni-book-fill"></em><span>Novels</span></a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile-review"><em
                                class="icon ni ni-thumbs-up"></em><span>Review</span> </a>
                    </li>
                    <li class="nav-item nav-item-trigger">
                        <a href="#" class="btn btn-icon btn-trigger"><em class="icon ni ni-edit"></em></a>
                    </li>
                </ul>
                <div class="card-inner">
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal-info">
                            <div class="nk-block">
                                <div class="profile-ud-list">
                                    @if ($user->hasRole('admin', 'author'))
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Title</span>
                                                <span class="profile-ud-value">
                                                    @if ($user->profile->gender == 'male')
                                                        Mr.
                                                    @endif
                                                    @if ($user->profile->gender == 'female')
                                                        Mrs.
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="profile-ud-item">
                                        <div class="profile-ud wider">
                                            <span class="profile-ud-label">Full Name</span>
                                            <span class="profile-ud-value">{{ $user->name }}</span>
                                        </div>
                                    </div>
                                    @if ($user->hasRole('author'))
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Pen Name</span>
                                                <span class="profile-ud-value">{{ $user->profile->pen_name }}</span>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="profile-ud-item">
                                        <div class="profile-ud wider">
                                            <span class="profile-ud-label">Date of Birth</span>
                                            <span class="profile-ud-value">
                                                {{ date('d M, Y', strtotime($user->birthday)) }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="profile-ud-item">
                                        <div class="profile-ud wider">
                                            <span class="profile-ud-label">Email Address</span>
                                            <span class="profile-ud-value">{{ $user->email }}</span>
                                        </div>
                                    </div>
                                    @if ($user->hasRole('admin', 'author'))
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Mobile Number</span>
                                                <span class="profile-ud-value">{{ $user->profile->phone }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Address</span>
                                                <span class="profile-ud-value">{{ 
                                                // the address is have address, city, country, postal_code
                                                $user->profile->address . ' ' . $user->profile->city . ' ' . $user->profile->country . ' ' . $user->profile->zip_code
                                            }}</span>
                                            </div>
                                        </div>
                                    @endif
                                </div><!-- .profile-ud-list -->
                            </div><!-- .nk-block -->
                            <div class="nk-block">
                                <div class="nk-block-head nk-block-head-line">
                                    <h6 class="title overline-title text-base">Additional Information</h6>
                                </div><!-- .nk-block-head -->
                                <div class="profile-ud-list">
                                    <div class="profile-ud-item">
                                        <div class="profile-ud wider">
                                            <span class="profile-ud-label">Joining Date</span>
                                            <span class="profile-ud-value">
                                                {{ date('d M, Y h:i', strtotime($user->created_at)) }}PM
                                            </span>
                                        </div>
                                    </div>
                                    <div class="profile-ud-item">
                                        <div class="profile-ud wider">
                                            <span class="profile-ud-label">Reg Method</span>
                                            <span class="profile-ud-value">Email</span>
                                        </div>
                                    </div>
                                    
                                </div><!-- .profile-ud-list -->
                            </div><!-- .nk-block -->
                            @if ($user->hasRole('admin', 'author'))
                                
                            
                            <div class="nk-block">
                                <div class="nk-block-head nk-block-head-line">
                                    <h6 class="title overline-title text-base">Social Links</h6>
                                </div><!-- .nk-block-head -->
                                <div class="profile-ud-list">
                                    <div class="profile-ud-item">
                                        <div class="profile-ud wider">
                                            <span class="profile-ud-label">Facebook</span>
                                            <span class="profile-ud-value"><a href="{{ $user->profile->facebook }}"
                                                    target="_blank">{{ $user->profile->facebook }}</a></span>

                                        </div>
                                    </div>
                                    <div class="profile-ud-item">
                                        <div class="profile-ud wider">
                                            <span class="profile-ud-label">Twitter</span>
                                            <span class="profile-ud-value"><a href="{{ $user->profile->twitter }}"
                                                    target="_blank">{{ $user->profile->twitter }}</a></span>
                                        </div>

                                    </div>
                                    <div class="profile-ud-item">
                                        <div class="profile-ud wider">
                                            <span class="profile-ud-label">Instagram</span>
                                            <span class="profile-ud-value"><a href="{{ $user->profile->instagram }}"
                                                    target="_blank">{{ $user->profile->instagram }}</a></span>
                                        </div>

                                    </div>
                                    <div class="profile-ud-item">
                                        <div class="profile-ud wider">
                                            <span class="profile-ud-label">Linkedin</span>
                                            <span class="profile-ud-value"><a href="{{ $user->profile->linkedin }}"
                                                    target="_blank">{{ $user->profile->linkedin }}</a></span>
                                        </div>
                                    </div>


                                </div><!-- .profile-ud-list -->
                            </div><!-- .nk-block -->
                            @endif
                            <div class="nk-divider divider md"></div>
                            @if ($user->hasRole('admin', 'author'))
                              
                            <div class="nk-block">
                                <div class="nk-block-head nk-block-head-sm nk-block-between">
                                    <h5 class="title">About</h5>
                                </div><!-- .nk-block-head -->
                                <div class="bq-note">
                                    <div class="bq-note-item">
                                        <div class="bq-note-text">
                                            <p>{{$user->profile->about}}</p>
                                        </div>
                                    </div><!-- .bq-note-item -->
                                </div><!-- .bq-note -->
                            </div><!-- .nk-block -->
                                
                            @endif
                        </div><!-- tab pane -->
                        @if ($user->hasRole('author'))
                            
                            <div class="tab-pane" id="profile-novels">
                                <div class="nk-tb-list border border-light rounded overflow-hidden is-compact">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col">
                                            <span class="lead-text">#</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="lead-text">Novels List</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="lead-text d-none d-sm-inline">Status</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <span class="lead-text">&nbsp;</span>
                                        </div>
                                    </div>
                                    @foreach ($user->novels as $novel)
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span>{{ $loop->iteration }}</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-product">
                                                    <img src="https://alphanovel.io/_next/image?url=https%3A%2F%2Fcdn.alphanovel.io%2Fbook-cover%2F030IHrSLT57KuqXrH8gS%2Ff26f1f52-2abd-49da-aec5-9f26af008a86_compressed.jpeg&w=640&q=75"
                                                        alt="" class="thumb">
                                                    <span class="title">{{ $novel->title }}</span>
                                                </span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="badge badge-dot badge-dot-xs 
                                                @if ($novel->status == 'published')
                                                    bg-success
                                                @elseif ($novel->status == 'pending')
                                                    bg-warning
                                                @elseif ($novel->status == 'rejected')
                                                    bg-danger
                                                @endif
                                                ">{{ $novel->status }}</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <a href="{{ route('novels.show', $novel->slug) }}"
                                                            class="btn btn-sm btn-icon btn-trigger me-n1"><em
                                                                class="icon ni ni-eye-fill"></em></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div><!--tab pane-->
                        @endif
                        <div class="tab-pane" id="profile-review">
                            <div class="nk-tb-list border border-light rounded overflow-hidden">
                                <div class="nk-tb-item nk-tb-head">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid">
                                            <label class="custom-control-label" for="uid"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col"><span class="lead-text">Novel</span></div>
                                    <div class="nk-tb-col tb-col-md"><span class="lead-text">Rating</span></div>
                                    <div class="nk-tb-col tb-col-lg"><span class="lead-text">Review</span></div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        @if ($user->reviews->count() > 0)
                                            
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-sm btn-icon btn-trigger me-n1"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-na"></em><span>Suspend
                                                                        Selected</span></a></li>
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-trash"></em><span>Delete
                                                                        All</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                                <!-- .nk-tb-item -->
                                @foreach ($user->reviews as $review)
                                    
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid1">
                                            <label class="custom-control-label" for="uid1"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col">
                                        <<span class="tb-product">
                                            <img src="https://alphanovel.io/_next/image?url=https%3A%2F%2Fcdn.alphanovel.io%2Fbook-cover%2F030IHrSLT57KuqXrH8gS%2Ff26f1f52-2abd-49da-aec5-9f26af008a86_compressed.jpeg&w=640&q=75"
                                                alt="" class="thumb">
                                            <span class="title">{{ $$review->novel->title }}</span>
                                        </span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <ul class="d-flex text-warning">
                                            @for ($i = 0; $i < $review->rating; $i++)
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                            @endfor
                                        </ul>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>{{$review->content}}</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li>
                                                <a href="#" class="btn btn-sm btn-icon btn-trigger me-n1"><em
                                                        class="icon ni ni-trash-alt text-danger"></em></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                                <!-- .nk-tb-item -->
                            </div>
                        </div><!--tab pane-->
                    </div><!--tab content-->
                </div><!--card inner-->
            </div><!--card-->
        </div><!--nk block lg-->
    </div><!--nk content body-->
@endsection
