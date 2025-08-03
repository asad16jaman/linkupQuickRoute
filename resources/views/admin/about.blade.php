@extends('admin.layout.app')

@section('title', 'Admin Page')

@section('style')
    <style>
        .table>tbody>tr>td {
            padding: 0px !important;
            margin-bottom: 2px;
        }

        .iconsize {
            font-size: 15px;
        }

        .profileImg {
            width: 150px;
            height: 70px;
            object-fit: contain;
            /* border: 2px dashed #ccc; */
            border-radius: 6px;
        }

        .tablepicture {
            width: 30px;
            height: 30px;
            object-fit: fill;
        }

        .headbg>tr>th {
            background-color: #3c5236;
            color: #fff;
        }
    </style>
@endsection

@section('pageside')
  @include('admin.layout.sidebar',['page' => 'about'])
@endsection

@section('bodyContent')

    <div class="container">

        <div class="page-inner">

            <div class="card">
                <div class="card-header pt-1 pb-0">
                    <h4 class="text-center">Create About</h4>
                </div>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body p-3 ">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <div class="row mb-2">
                                    <div class="col-md-12 col-12">
                                        <label for="email2">Title :</label>
                                        <input type="text" class="form-control p-1 @error('title') is-invalid @enderror" name="title" value="{{ old('title',optional($about)->title) }}"
                                            placeholder="Enter Title">
                                        @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="col-md-12 col-12 d-flex justify-content-center mt-1">
                                    <label for="imageInput" style="cursor: pointer;">
                                        <!-- (placeholder) -->
                                        <img id="previewImage" src="{{ $about ? asset('storage/'.$about->picture )  : asset('assets/admin/img/demoUpload.jpg') }}"
                                            alt="Demo Image" class="profileImg" style="">
                                    </label>

                                    <!-- hidden input -->
                                    <input type="file" name="picture" id="imageInput" accept="image/*" style="display: none;">
                                </div>
                                <p>Image must be:jpg,jpeg,png.size:560px:710px</p>
                                @error('picture')
                                    <p class="text-danger text-center">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2 mt-2">
                            <div class="col-md-12 col-12">
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="About of Company" rows="9">{!!  old('description',optional($about)->description)  !!}</textarea>
                            </div>
                        </div>
                        @error('description')
                            <p class="text-danger text-center">{{ $message }}</p>
                        @enderror

                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Submit" class="btn btn-primary me-3 p-2">
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection

    @push('script')
        <script>


            const imageInput = document.getElementById('imageInput');
            const previewImage = document.getElementById('previewImage');

            imageInput.addEventListener('change', function () {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();

                    reader.onload = function (e) {
                        previewImage.src = e.target.result;
                    };

                    reader.readAsDataURL(file);
                }
            })


            ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error('CKEditor Error:', error);
            });

        </script>

    @endpush