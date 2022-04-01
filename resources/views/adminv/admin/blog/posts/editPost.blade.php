@extends('adminv/layouts.all')
@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Blog</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Blog Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Edit Blog Post</h6>
                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form action="{{ route('admin.blog-posts.update',$data->id) }}" method="POST" enctype="multipart/form-data"
                                      class="row g-3 needs-validation"
                                      novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-4">
                                        <label for="post_title" class="form-label">Name*</label>
                                        <input type="text" onblur='pk_slug_url(this.value,"pk-slug")' name="post_title" value="{{ $data->post_title }}"
                                               class="form-control @error('post_title') is-invalid @enderror"
                                               required>
                                        @error('post_title')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="pk-slug" class="form-label">Slug*</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="post_slug"
                                                   class="form-control  @error('post_slug') is-invalid @enderror" id="pk-slug" value="{{$data->post_slug}}"
                                                   required>

                                        </div>
                                        @error('post_slug')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="images" class="form-label">Image*</label>
                                        <div class="input-group has-validation">
                                            <input type="file" name="post_images"
                                                   class="form-control  @error('post_images') is-invalid @enderror"
                                                   id="post_images"
                                                   required>

                                        </div>
                                        @error('post_images')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description*</label>
                                        <div class="input-group has-validation">
                                            <textarea rows="3" name="description"
                                                      class="form-control  @error('description') is-invalid @enderror"
                                                      id="description"
                                                      required>{{ $data->description  }}</textarea>

                                        </div>
                                        @error('description')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="status" class="form-label">Status *</label>
                                        <select class="form-select  @error('status') is-invalid @enderror"
                                                name="status" aria-label="status">
                                            <option value="Active" {{$data->status=="Active" ? 'selected':''}}>Active</option>
                                            <option value="Inactive" {{$data->status=="Inactive" ? 'selected':''}}>Inactive</option>
                                        </select>
                                        @error('status')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="meta_robots" class="form-label">Meta Robots *</label>
                                        <select class="form-select  @error('meta_robots') is-invalid @enderror"
                                                name="meta_robots" aria-label="meta_robots">

                                            <option value="INDEX, FOLLOW" {{$data->meta_robots=="INDEX, FOLLOW" ? 'selected':''}} >INDEX, FOLLOW</option>
                                            <option value="NOINDEX, FOLLOW" {{$data->meta_robots=="NOINDEX, FOLLOW" ? 'selected':''}}>NOINDEX, FOLLOW</option>
                                            <option value="INDEX, NOFOLLOW" {{$data->meta_robots=="INDEX, NOFOLLOW" ? 'selected':''}}>INDEX, NOFOLLOW</option>
                                            <option value="NOINDEX, NOFOLLOW" {{$data->meta_robots=="NOINDEX, NOFOLLOW" ? 'selected':''}}>NOINDEX, NOFOLLOW</option>

                                        </select>
                                        @error('meta_robots')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="meta_title" class="form-label">Meta Title*</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="meta_title" value="{{ $data->meta_title }}"
                                                   class="form-control  @error('meta_title') is-invalid @enderror" id="meta_title"
                                                   required>

                                        </div>
                                        @error('meta_title')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="meta_keyword" class="form-label">Meta Keyword*
                                        </label>
                                        <div class="input-group has-validation">
                                            <textarea rows="3" name="meta_keyword"
                                                      class="form-control  @error('meta_keyword') is-invalid @enderror"
                                                      id="terms_conditions"
                                                      required>{{ $data->meta_keyword }}</textarea>

                                        </div>
                                        @error('meta_keyword')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="meta_description" class="form-label">Meta Description*
                                        </label>
                                        <div class="input-group has-validation">
                                            <textarea rows="3" name="meta_description"
                                                      class="form-control  @error('meta_description') is-invalid @enderror"
                                                      id="terms_conditions"
                                                      required>{{ $data->meta_description }}</textarea>

                                        </div>
                                        @error('meta_description')
                                        <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end page wrapper -->

@endsection

<script>
    function pk_slug_url(val, id) {
        var str = val.trim();
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();

        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes
        document.getElementById(id).value = str;

    }
</script>
