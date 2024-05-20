@extends('admin.layout.app')

@section('content')
    <form action="{{ route('admin.ecommerce.update_flash_sales', ['id' => $flashSales->id]) }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="main-panel">
            <div class="pagesbodyarea">
                <div class="pageinfo">
                    <ul class="d-flex">
                        <li><a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="fa-solid fa-house"> </i> Dashboard /</a></li>
                        <li><a class="breadcrumb-item">Ecommerce /</a></li>
                        <li><a href="{{ route('admin.ecommerce.flash_sales') }}" class="breadcrumb-item">Flash sales /</a></li>
                        <li><a class="breadcrumb-item">Edit Flash sales</a></li>
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

                <div class="row">
                    <div class="col-md-9">
                        <div class="tabbable-custom">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_detail">
                                    <div class="form-group mb-3">
                                        <label for="name" class="control-label required" aria-required="true">Name</label>
                                        <input class="form-control" placeholder="Name" data-counter="120" v-pre="" name="name" type="text" id="name" aria-invalid="false" aria-describedby="name-error" value="{{ $flashSales->name }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="subtitle" class="control-label">Subtitle</label>
                                        <input class="form-control" placeholder="Text to highlight" v-pre="" name="subtitle" type="text" value="{{ $flashSales->subtitle }}" id="subtitle" spellcheck="false" data-ms-editor="true" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget meta-boxes">
                            <div class="widget-title">
                                <h4>Products</h4>
                            </div>
                            <div class="widget-body">
                                <div class="form-group mb-3">
                                    <input type="hidden" name="products" value="">
                                    <div class="box-search-advance product">
                                        <form method="GET" action="{{ route('admin.ecommerce.update_flash_sales') }}">
                                            <input type="text" name="query" class="next-input textbox-advancesearch" id="product-search" placeholder="Search products" autocomplete="off" value="{{ request('query') }}">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                            <ul id="suggestions" class="list-group" style="position: absolute; z-index: 1000;"></ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                    <div class="col-md-3 right-sidebar d-flex flex-column-reverse flex-md-column">
                        <div class="form-actions-wrapper">
                            <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                                <div class="widget-title">
                                    <h4><span>Publish</span></h4>
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
                        </div>

                        <div class="form-side-meta-boxes">
                            <div class="widget meta-boxes">
                                <div class="widget-title">
                                    <h4><label for="status" class="control-label required" aria-required="true">Status</label></h4>
                                </div>
                                <div class="widget-body">
                                    <div class="ui-select-wrapper form-group">
                                        <select class="form-control ui-select" v-pre="" id="status" name="status">
                                            <option value="published" {{ $flashSales->status == 'published' ? 'selected' : '' }}>Published</option>
                                            <option value="draft" {{ $flashSales->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                            <option value="pending" {{ $flashSales->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        </select>
                                        <svg class="svg-next-icon svg-next-icon-size-16">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
                                            </svg>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget meta-boxes">
                            <div class="widget-title">
                                <h4><label for="end_date" class="control-label required" aria-required="true">End date</label></h4>
                            </div>
                            <div class="widget-body">
                                <div class="input-group datepicker">
                                    <input class="form-control flatpickr-input" data-date-format="Y-m-d" placeholder="Y-m-d" value="{{ $flashSales->end_date }}" name="end_date" type="text" id="end_date">
                                    <i class="icon-calendar"></i>                        
                                    <a class="input-button" title="toggle" data-toggle=""><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M14 2V1h-3v1H6V1H3v1H0v15h17V2h-3zM12 2h1v2h-1V2zM4 2h1v2H4V2zM16 16H1v-8.921h15V16zM1 6.079v-3.079h2v2h3V3h5v2h3V3h2v3.079H1z"></path></svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-side-meta-boxes">
                            <div class="widget meta-boxes">
                                <div class="widget-title">
                                    <h4><label for="image" class="control-label">Logo</label></h4>
                                </div>
                                <div class="widget-body">
                                    <div class="image-box">
                                        <div class="preview-image-wrapper">
                                            <img src="{{ asset('storage/logos/' . $flashSales->logo) }}" data-default="{{ asset('storage/logos/' . $flashSales->logo) }}" alt="Preview image" width="150" class="preview_image">
                                            <a title="Remove image" class="btn_remove_image"><i class="fa fa-times"></i></a>
                                        </div>
                                        <div class="image-box-actions">
                                            <a href="#" id="choose_image_btn" data-result="image" data-action="select-image" data-allow-thumb="1" class="btn_gallery">Choose image</a>
                                        </div>
                                    </div>
                                    <input type="file" name="logo" class="image-data" id="logo_input" style="display:none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // When "Choose image" is clicked, trigger the file input click event
            document.getElementById("choose_image_btn").addEventListener("click", function(e) {
                e.preventDefault();
                document.getElementById("logo_input").click();
            });
        });

        // Initialize Flatpickr
        flatpickr("#end_date", {
            dateFormat: "Y-m-d",
            defaultDate: "{{ $flashSales->end_date }}"
        });
    </script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#product-search').on('keyup', function(){
                let query = $(this).val();
                if (query.length > 1) {
                    $.ajax({
                        url: "{{ route('admin.ecommerce.update_flash_sales') }}",
                        type: "GET",
                        data: {'query': query},
                        success: function(data){
                            let suggestions = $('#suggestions');
                            suggestions.empty();
                            data.forEach(product => {
                                suggestions.append('<li class="list-group-item"><a href="/products/' + product.slug + '">' + product.name + '</a></li>');
                            });
                        }
                    });
                } else {
                    $('#suggestions').empty();
                }
            });
        });
    </script> 
@endsection
