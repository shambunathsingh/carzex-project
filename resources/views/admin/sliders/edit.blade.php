@extends('admin.layout.app')

@section('content')
    {{-- <form action="{{ route('admin.page.page_save') }}" method="post" enctype="multipart/form-data"> --}}
    <form enctype="multipart/form-data">

        <div class="main-panel">
            <div class="pagesbodyarea">
                <div class="pageinfo">
                    <ul class="d-flex">
                        <li><a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="fa-solid fa-house"> </i>
                                Dashboard
                                /</a>
                        </li>
                        <li><a href="#" class="breadcrumb-item">Simple Sliders
                                /</a>
                        </li>
                        <li><a href="#" class="breadcrumb-item">New Slider</a>
                        </li>
                    </ul>
                </div>



                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <!-- todo edit main body ara -->

                <div class="row">

                    <div class="col-md-9">
                        <div class="tabbable-custom">
                            <ul class="nav nav-tabs ">
                                <li class="nav-item">
                                    <a href="#tab_detail" class="nav-link active" data-bs-toggle="tab">Detail </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab_history" class="nav-link" data-bs-toggle="tab">Revision
                                        History </a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_detail">
                                    <div class="form-group mb-3">

                                        <label for="name" class="control-label required"
                                            aria-required="true">Name</label>
                                        <input class="form-control is-valid" placeholder="Name" data-counter="120"
                                            v-pre="" name="name" type="text" value="Faq" id="name"
                                            aria-invalid="false" aria-describedby="name-error"><span id="name-error"
                                            class="invalid-feedback" style="display: inline;"></span><small
                                            class="charcounter">(117 character(s) remain)</small>



                                    </div>
                                    <div class="form-group mb-3">

                                        <label for="name" class="control-label required"
                                            aria-required="true">Image</label>
                                        <input type="file" name="image" class="form-control"
                                            placeholder="Upload image here">

                                    </div>

                                    <div class="form-group mb-3 ">
                                        <div id="edit-slug-box" data-field-name="name">

                                            <label class="control-label  required " for="current-slug"
                                                aria-required="true">Permalink:</label>
                                            <span id="sample-permalink" class="d-inline-block" dir="ltr">
                                                <a class="permalink" target="_blank" href="https://carzex.in/faq">
                                                    <span class="default-slug">https:.................<span
                                                            id="editable-post-name">edit</span></span>
                                                </a>
                                            </span>

                                            <span id="edit-slug-buttons">
                                                <button type="button" class="btn btn-sm btn-secondary"
                                                    id="change_slug">Edit</button>

                                            </span>

                                            <input type="hidden" id="current-slug" name="slug" value="faq">
                                            <div data-url="" data-view="" id="slug_id" data-id="0">
                                            </div>
                                            <input type="hidden" name="slug_id" value="0">
                                            <input type="hidden" name="is_slug_editable" value="1">
                                        </div>


                                    </div>
                                    <input type="hidden" name="model" value="Botble\Page\Models\Page">

                                    <div class="form-group mb-3">
                                        <grammarly-extension data-grammarly-shadow-root="true"
                                            style="position: absolute; top: 0px; left: 0px; pointer-events: none;"
                                            class="dnXmp"></grammarly-extension>
                                        <grammarly-extension data-grammarly-shadow-root="true"
                                            style="position: absolute; top: 0px; left: 0px; pointer-events: none;"
                                            class="dnXmp"></grammarly-extension>

                                        <label for="description" class="control-label">Description</label>
                                        <textarea class="form-control" rows="" placeholder="Short description" data-counter="400" v-pre=""
                                            name="description" cols="50" id="description" spellcheck="false"></textarea><small class="charcounter">(400
                                            character(s) remain)</small>



                                    </div>



                                    <div class="clearfix"></div>
                                </div>
                                <div class="tab-pane" id="tab_history">
                                    <div class="form-group mb-3" style="min-height: 400px;">
                                        <table class="table table-bordered table-striped mrtryh" id="table">
                                            <thead>
                                                <tr>
                                                    <th>Author</th>
                                                    <th>Column</th>
                                                    <th>Origin</th>
                                                    <th>After changes</th>
                                                    <th>Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td colspan="5">No record</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="widget meta-boxes">
                            <div class="widget-title">
                                <h4>
                                    <span> Slide Items</span>
                                </h4>
                            </div>
                            <div class="widget-body">
                                <div class="float-start">
                                    <a data-fancybox data-type="ajax"
                                        data-src="https://carzex.in/admin/simple-slider-items/create?simple_slider_id=7"
                                        href="javascript:void(0);" class="btn btn-info"><i class="fa fa-plus-circle"></i>
                                        Add new</a>
                                    <button class="btn-success btn btn-save-sort-order" style="display: none;"><i
                                            class="fa fa-save"></i> Save sorting</button>
                                </div>
                                <div class="clearfix"></div>
                                <br>

                                <div class="table-wrapper">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover vertical-middle"
                                            id="simple-slider-items-table">
                                            <thead>
                                                <tr>
                                                    <th title="ID" width="20px">ID</th>
                                                    <th title="Image" class="text-center">Image</th>
                                                    <th title="Title" class="text-start">Title</th>
                                                    <th title="Order" class="text-start order-column">Order</th>
                                                    <th title="Created At" width="100px">Created At</th>
                                                    <th width="170px" title="Operations">Operations</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="column-key-id sorting_1">{{ $banner->id }}</td>
                                                    <td class=" text-start column-key-template" style="">
                                                        <img src="{{ asset('storage/banners/' . $banner->banner) }}"
                                                        width="100" height="100" alt="Banner Image">
                                                    </td>
                                                    <td class=" text-start column-key-name">
                                                        Sample
                                                    </td>
                                                    <td>
                                                        0
                                                    </td>
                                                    <td class=" text-center column-key-created_at" style="">
                                                        {{ $banner->created_at->format('d-m-Y') }}
                                                    </td>
                                                    <td class=" text-center">
                                                        <div class="table-actions">

                                                            <a href="#"
                                                                class="btn btn-icon btn-sm btn-primary"
                                                                data-bs-toggle="tooltip" data-bs-original-title="Edit"><i
                                                                    class="fa fa-edit"></i></a>

                                                            <a class="btn btn-icon btn-sm btn-danger deleteDialog"
                                                                data-bs-toggle="tooltip" data-section="" role="button"
                                                                data-bs-original-title="Delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 right-sidebar d-flex flex-column-reverse flex-md-column">
                        <div class="form-actions-wrapper">
                            <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                                <div class="widget-title">
                                    <h4>
                                        <span>Publish</span>
                                    </h4>
                                </div>
                                <div class="widget-body">
                                    <div class="btn-set">
                                        <button type="submit" name="submit" value="save" class="btn btn-info">
                                            <i class="fa fa-save"></i> Save &amp; Exit
                                        </button> &nbsp;
                                        <button type="submit" name="submit" value="apply" class="btn btn-success">
                                            <i class="fa fa-check-circle"></i> Save
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <!-- <div id="waypoint"></div>
                                                                                    <div class="form-actions form-actions-fixed-top hidden">
                                                                                        <ol class="breadcrumb" v-pre="">
                                                                                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                                                                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                                                                            <li class="breadcrumb-item active">Edit "Faq"</li>
                                                                                        </ol>

                                                                                        <div class="btn-set mb-1">
                                                                                            <button type="submit" name="submit" value="save" class="btn btn-info">
                                                                                                <i class="fa fa-save"></i> Save &amp; Exit
                                                                                            </button> &nbsp;
                                                                                            <button type="submit" name="submit" value="apply" class="btn btn-success">
                                                                                                <i class="fa fa-check-circle"></i> Save
                                                                                            </button>
                                                                                        </div>
                                                                                    </div> -->

                        </div>
                        <div class="form-side-meta-boxes">
                            <div id="top-sortables" class="meta-box-sortables">
                                <div id="additional_page_fields" class="widget meta-boxes">
                                    <div class="widget-title">
                                        <h4><span>Appearance</span></h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="form-group">
                                            <label for="header_style" class="control-label">Header
                                                style</label>
                                            <div class="ui-select-wrapper form-group ">
                                                <select class="form-control ui-select" id="header_style"
                                                    name="header_style">
                                                    <option value="" selected="selected">Default</option>
                                                    <option value="header-style-5">Header style 5</option>
                                                </select>
                                                <svg class="svg-next-icon svg-next-icon-size-16">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z">
                                                        </path>
                                                    </svg>
                                                </svg>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="widget meta-boxes">
                                <div class="widget-title">
                                    <h4><label for="status" class="control-label required"
                                            aria-required="true">Status</label></h4>
                                </div>
                                <div class="widget-body">
                                    <div class="ui-select-wrapper form-group ">
                                        <select class="form-control ui-select" v-pre="" id="status"
                                            name="status">
                                            <option value="published" selected="selected">Published</option>
                                            <option value="draft">Draft</option>
                                            <option value="pending">Pending</option>
                                        </select>
                                        <svg class="svg-next-icon svg-next-icon-size-16">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                            </svg>
                                        </svg>
                                    </div>




                                </div>
                            </div>
                            <div class="widget meta-boxes">
                                <div class="widget-title">
                                    <h4><label for="template" class="control-label required"
                                            aria-required="true">Template</label></h4>
                                </div>
                                <div class="widget-body">
                                    <div class="ui-select-wrapper form-group ">
                                        <select class="form-control ui-select" v-pre="" id="template"
                                            name="template">
                                            <option value="default" selected="selected">Default</option>
                                            <option value="full-width">Full width</option>
                                            <option value="homepage">Homepage</option>
                                            <option value="right-sidebar">Page Right Sidebar</option>
                                            <option value="blog-grid">Blog Grid</option>
                                            <option value="blog-list">Blog List</option>
                                            <option value="blog-big">Blog Big</option>
                                            <option value="blog-wide">Blog Wide</option>
                                        </select>
                                        <svg class="svg-next-icon svg-next-icon-size-16">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                            </svg>
                                        </svg>
                                    </div>




                                </div>
                            </div>
                            <div class="widget meta-boxes">
                                <div class="widget-title">
                                    <h4><label for="image" class="control-label">Image</label></h4>
                                </div>
                                <div class="widget-body">
                                    <div class="image-box">
                                        <input type="hidden" name="image" value="" class="image-data">
                                        <div class="preview-image-wrapper ">
                                            <img src="/images/placeholder.png" data-default="images/placeholder.png"
                                                alt="Preview image" class="preview_image" width="150">
                                            <a class="btn_remove_image" title="Remove image">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                        <div class="image-box-actions">
                                            <a href="#" class=" btn_gallery " data-result="image"
                                                data-action="select-image" data-allow-thumb="1">
                                                Choose image
                                            </a>
                                        </div>
                                    </div>





                                </div>
                            </div>

                        </div>
                    </div>
                </div>





            </div>
        </div>
    </form>

@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
