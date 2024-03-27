@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Status</h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total 95 status.</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt d-none d-sm-block">
                                    <a href="{{route('status.create')}}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                                            Status</span></a>
                                </li>
                                <li class="nk-block-tools-opt d-block d-sm-none">
                                    <a href="#" class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .toggle-wrap -->
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <!--  public function up(): void
        {
            Schema::create('status', function (Blueprint $table) {
                $table->id();
                $table->string('name')->uniqid();
                $table->string('color');
                $table->string('background_color');
                $table->string('border_color');
                $table->string('text_color');
                $table->string('icon');
                $table->timestamps();
            });
        } -->
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
                        <th class="nk-tb-col"><span class="sub-text">Status</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Color</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Background Color</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Border Color</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Text Color</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Icon</span></th>
                        <th class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1 my-n1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">

                                                <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as
                                                            Delivered</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-money"></em><span>Mark as
                                                            Paid</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-report-profit"></em><span>Send
                                                            Invoice</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove
                                                            Orders</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            {{-- <div class="dropdown">
                                <button href="#" class="btn btn-xs btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></button>
                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                    <ul class="link-check">
                                        <li><a href="#">Check All</a></li>
                                        <li><a href="#">Uncheck All</a></li>
                                        <li><a href="#">Bulk Remove</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($status as $statu)
                        <tr class="nk-tb-item nk-tb-widget">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="{{ $statu->id }}"
                                        value="{{ $statu->id }}">
                                    <label class="custom-control-label" for="{{ $statu->id }}"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="html/user-details-regular.html">
                                    <div class="user-card">
                                        <div class="user-avatar bg-primary">
                                            <span>{{ $statu->name[0] }}</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="tb-lead">{{ $statu->name }}</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span class="tb-sub" style="color: {{ $statu->color }}">{{ $statu->color }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span class="tb-sub"
                                    style="color: {{ $statu->background_color }}">{{ $statu->background_color }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span class="tb-sub"
                                    style="color: {{ $statu->border_color }}">{{ $statu->border_color }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span class="tb-sub"
                                    style="color: {{ $statu->text_color }}">{{ $statu->text_color }}</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span class="tb-sub" style="color: {{ $statu->icon }}">{{ $statu->icon }}</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li class="nk-tb-action-hidden"><a href="{{ route('status.edit', $statu->id) }}"
                                            class="btn btn-icon btn-trigger btn-tooltip" title="Mark as Delivered">
                                            <em class="icon ni ni-edit"></em></a></li>
                                    <li class="nk-tb-action-hidden">
                                        <form action="{{ route('status.destroy', $statu->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-icon btn-trigger btn-tooltip" title="Delete statu">
                                                <em class="icon ni ni-trash"></em>
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        <div class="drodown me-n1">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ route('status.edit', $statu->id) }}"><em
                                                                class="icon ni ni-edit"></em><span>Update Status</span></a>
                                                    </li>
                                                    <li><a href="{{ route('status.show', $statu->id) }}"><em
                                                                class="icon ni ni-eye"></em><span>Status Details</span></a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('status.destroy', $statu->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-icon"><em class="icon ni ni-trash"></em><span>Remove
                                                                    Status</span></button>
                                                        </form>
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
            <div>
                {{ $status->links('pagination::bootstrap-5') }}
            </div>
        </div><!-- .nk-block -->
    </div>
@endsection