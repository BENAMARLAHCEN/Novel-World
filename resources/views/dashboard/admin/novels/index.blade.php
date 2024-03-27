{{--     protected $fillable = [
        'title',
        'description',
        'status_id',
        'cover',
        'slug',
        'genre_id',
        'views',
        'published',
        'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function status()
    {
        return $this->belongsTo(Statu::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function rankings()
    {
        return $this->belongsToMany(Ranking::class);
    }
    --}}

@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">
                        @if (request()->routeIs('novels.index'))
                            Novels
                        @endif
                        @if (request()->routeIs('novels.published'))
                            Published Novels
                        @endif
                        @if (request()->routeIs('novels.rejected'))
                            Rejected Novels
                        @endif
                    </h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total {{ $novels->total() }} Novels.</p>
                    </div>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <table class="nk-tb-list is-separate nk-tb-ulist">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">
                        <th class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="pid-all">
                                <label class="custom-control-label" for="pid-all"></label>
                            </div>
                        </th>
                        <th class="nk-tb-col"><span class="sub-text">Novel</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Author</span></th>
                        <td class="nk-tb-col tb-col-lg"><span class="sub-text">Chapters</span></td>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Views</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Status</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-right">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($novels as $novel)
                        <tr class="nk-tb-item novel-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input novel-checkbox"
                                        id="pid-{{ $novel->id }}">
                                    <label class="custom-control-label" for="pid-{{ $novel->id }}"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">

                                <span class="tb-product">
                                    <img src="https://alphanovel.io/_next/image?url=https%3A%2F%2Fcdn.alphanovel.io%2Fbook-cover%2F030IHrSLT57KuqXrH8gS%2Ff26f1f52-2abd-49da-aec5-9f26af008a86_compressed.jpeg&w=640&q=75"
                                        alt="" class="thumb">
                                    <span class="title">{{ $novel->title }}</span>
                                </span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span>{{ $novel->user->name }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $novel->chapters->count() }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $novel->views }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $novel->status }}</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    @if ($novel->status != 'published')
                                        <li class="nk-tb-action-hidden">

                                            <form action="{{ route('novels.publish', $novel->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-trigger btn-icon"
                                                    data-toggle="tooltip" data-placement="top">
                                                    <em class="icon ni ni-check-circle"></em>
                                                </button>
                                            </form>
                                        </li>
                                    @endif
                                    @if ($novel->status != 'rejected')
                                        <li class="nk-tb-action-hidden">
                                            <form action="{{ route('novels.reject', $novel->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-trigger btn-icon"
                                                    data-toggle="tooltip" data-placement="top">
                                                    <em class="icon ni ni-cross-circle"></em>
                                                </button>
                                            </form>
                                        </li>
                                    @endif


                                    <li>
                                        <div class="drodown me-n1">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    @if ($novel->status != 'published')
                                                        <li>
                                                            <form action="{{ route('novels.publish', $novel->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <button type="submit" class="btn">
                                                                    <em class="icon ni ni-check-circle"></em>Publish
                                                                </button>
                                                            </form>
                                                        </li>
                                                    @endif
                                                    @if ($novel->status != 'rejected')
                                                        <li>
                                                            <form action="{{ route('novels.reject', $novel->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <button type="submit" class="btn">
                                                                    <em class="icon ni ni-cross-circle"></em>Reject
                                                                </button>
                                                            </form>
                                                        </li>
                                                    @endif
                                                    <li><a href="{{ route('novels.show', $novel->id) }}"><em
                                                                class="icon ni ni-eye"></em><span>View Novel</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="ms-1">
                {{ $novels->links('pagination::bootstrap-5') }}
            </div>
        </div><!-- .nk-block -->
    </div>
@endsection
