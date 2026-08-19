@component('admin.master1')

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">
                    ویدیوهای سرفصل {{ $chapter->title }}
                </h3>

                <div class="card-tools">
                    <a href="{{ route('admin.chapters.videos.create', $chapter) }}"
                       class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i>
                        افزودن ویدیو
                    </a>
                </div>
            </div>

            <div class="card-body p-0">

                <table class="table table-bordered table-hover text-center mb-0">
                    <thead>
                    <tr>
                        <th width="60">#</th>
                        <th>عنوان</th>
                        <th width="150">مدت زمان</th>
                        <th width="120">وضعیت</th>
                        <th width="250">عملیات</th>
                    </tr>
                    </thead>

                    <tbody>

                    @forelse($videos as $video)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td class="text-right">
                                {{ $video->title }}
                            </td>

                            <td>
                                {{ $video->duration ?? '-' }}
                            </td>

                            <td>
                                @if($video->is_free)
                                    <span class="badge badge-success">
                                        رایگان
                                    </span>
                                @else
                                    <span class="badge badge-warning">
                                        پولی
                                    </span>
                                @endif
                            </td>

                            <td>

                                <a href="{{ $video->video }}"
                                   target="_blank"
                                   class="btn btn-info btn-sm">
                                    <i class="fas fa-play"></i>
                                    مشاهده
                                </a>

                                <a href="{{ route('admin.chapters.videos.edit', $video) }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                    ویرایش
                                </a>

                                <form
                                    action="{{ route('admin.chapters.videos.destroy', $video) }}"
                                    method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('از حذف این ویدیو مطمئن هستید؟')">
                                        <i class="fas fa-trash"></i>
                                        حذف
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <div class="alert alert-info mb-0">
                                    هنوز هیچ ویدیویی برای این سرفصل ثبت نشده است.
                                </div>
                            </td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>

@endcomponent