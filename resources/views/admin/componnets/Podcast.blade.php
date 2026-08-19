@component('admin.master1')
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header d-flex">
                <h3 class="card-title">فهرست پادکست ها</h3>

                <div class="card-tools d-flex">
                    <form action="">
                        <div class="input-group input-group-sm" style="width: 150px;">

                            <input
                                type="text"
                                name="search"
                                class="form-control float-right"
                                placeholder="جستجو"
                                value="{{ request('search') }}"
                            >

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>

                        </div>
                    </form>

                    <div class="btn-group-sm mr-2"></div>

                    <a href="{{ route('admin_Podcast.create') }}" class="btn btn-info">
                        ایجاد پادکست
                    </a>
                </div>
            </div>

            <!-- /.card-header -->

            <div class="card-body table-responsive p-0">

                <table class="table table-hover">

                    <tbody>

                    <tr>
                        <th>آیدی</th>
                        <th>عنوان</th>
                        <th>زبان</th>
                        <th>مدت</th>
                        <th>تعداد پخش</th>
                        <th>تعداد دانلود</th>
                        <th>وضعیت</th>
                        <th>تاریخ انتشار</th>
                        <th>عملیات</th>
                    </tr>

                    @foreach ($podcasts as $podcast)

                        <tr>

                            <td>{{ $podcast->id }}</td>

                            <td>
                                {{ $podcast->title }}
                            </td>

                            <td>
                                {{ $podcast->language }}
                            </td>

                            <td>
                                {{ $podcast->duration ?? '-' }}
                            </td>

                            <td>
                                {{ $podcast->play_count }}
                            </td>

                            <td>
                                {{ $podcast->download_count }}
                            </td>

                            <td>
                                {{ $podcast->status }}
                            </td>

                            <td>
                                @if($podcast->published_at)
                                    {{ jdate($podcast->published_at)->format('Y/m/d') }}
                                @else
                                    -
                                @endif
                            </td>

                            <td class="d-flex">

                                <a
                                    href="{{ route('admin_Podcast.show', ['admin_Podcast' => $podcast->id]) }}"
                                >
                                    <button class="btn btn-primary">
                                        <span class="badge badge-primary">
                                            ویرایش
                                        </span>
                                    </button>
                                </a>

                                <form
                                    action="{{ route('admin_Podcast.destroy', ['admin_Podcast' => $podcast->id]) }}"
                                    method="post"
                                    class="mr-1"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">
                                        <span class="badge badge-danger">
                                            حذف
                                        </span>
                                    </button>
                                </form>

                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

            <!-- /.card-body -->

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="cca card-footer d-flex">

                <div class="cca cart d-flex">
                    {{ $podcasts->render() }}
                </div>

            </div>

        </div>
    </div>
</div>

@endcomponent