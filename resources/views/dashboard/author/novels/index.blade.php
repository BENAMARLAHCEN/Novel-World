@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">My Novels </h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total {{ $novels->total() }} Novels.</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt d-none d-sm-block">
                                    <a href="{{ route('author.novels.create') }}" class="btn btn-primary">
                                        <em class="icon ni ni-plus"></em>
                                        <span>Add Novel</span>
                                    </a>
                                </li>
                                <li class="nk-block-tools-opt">
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                            data-toggle="dropdown">
                                            <em class="icon ni ni-setting"></em>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                            <ul class="link-check">
                                                <li><span>Show</span></li>
                                                <li class="active"><a href="#">10</a></li>
                                                <li><a href="#">20</a></li>
                                                <li><a href="#">50</a></li>
                                            </ul>
                                            <ul class="link-check">
                                                <li><span>Order</span></li>
                                                <li class="active"><a href="#">DESC</a></li>
                                                <li><a href="#">ASC</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
                        <td class="nk-tb-col tb-col-lg"><span class="sub-text">Chapters</span></td>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Views</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Rewiews</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Rating</span></th>
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
                                    <img src="{{ $novel->cover }}"
                                        alt="" class="thumb">
                                    <span class="title">{{ $novel->title }}</span>
                                </span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $novel->chapters->count() }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $novel->chapters->sum('views') }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{ $novel->reviews->count() }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>{{  Str::limit($novel->reviews->avg('rating') ?? 0, 3) }}</span>
                                    {{-- $novel->reviews->avg('rating') ?? 0 }}</span> --}}
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span class="tb-sub">{{ $novel->status }}</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li class="nk-tb-action-hidden">
                                        <a href="{{ route('author.novels.show', $novel->id) }}"
                                            class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top"
                                            title="View Novel">
                                            <em class="icon ni ni-eye"></em>
                                        </a>
                                    </li>
                                    <li class="nk-tb-action-hidden">
                                        <a href="{{ route('author.novels.edit', $novel->id) }}"
                                            class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top"
                                            title="Edit Novel">
                                            <em class="icon ni ni-edit-alt-fill"></em>
                                        </a>
                                    </li>
                                    <li class="nk-tb-action-hidden">
                                        <form action="{{ route('author.novels.destroy', $novel->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-trigger btn-icon delete-novel delete"
                                                data-toggle="tooltip" data-placement="top" title="Delete Novel">
                                                <em class="icon ni ni-trash-fill"></em>
                                            </button>
                                        </form>
                                    </li>

                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                    @endforeach
                </tbody>
            </table>
        </div><!-- .nk-block -->
        <div>
            {{ $novels->links('pagination::bootstrap-5') }}
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="d-sm-flex justify-content-between align-center">
                    <div class="g">
                        <ul class="pagination justify-content-center justify-content-md-start">
                            @if ($novels->onFirstPage())
                                
                            @else
                                @if ($novels->previousPageUrl())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $novels->previousPageUrl() }}"
                                            aria-label="Previous">
                                            <em class="icon ni ni-chevron-left"></em>
                                        </a>
                                    </li>
                                @endif

                                @if ($novels->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $novels->nextPageUrl() }}" aria-label="Next">
                                            <em class="icon ni ni-chevron-right"></em>
                                        </a>
                                    </li>
                                @endif
                            @endif
                        </ul><!-- .pagination -->
                    </div>
                    <div class="g">
                        {{-- numpber of page more then 1 --}}
                        @if ($novels->hasPages())
                            
                                @if ($novels->currentPage() == 1)
                                    <div class="pagination
                                    total">Page {{ $novels->currentPage() }} of {{ $novels->lastPage() }}</div>
                                @else
                                    <div class="pagination total">Page {{ $novels->currentPage() }} of
                                        {{ $novels->lastPage() }}</div>
                                        @endif

                        @endif
                </div>

                        <div class="pagination
                        total">Total {{ $novels->total() }} novels</div>
                    </div>
                </div>
            </div>
        </div><!-- .card -->
    </div>
@endsection
