@extends('admin.layout.app')

@section('content')
<div class="page-content" style="min-height: 758px;">

    <div id="main">

        <div class="breadcambarea">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><span style="color: black; margin-right: 3px;"><i
                            class="fa fa-home"></i></span>Dashboard</li>
                <li class="breadcrumb-item">SHIPMENTS</li>
                <li class="breadcrumb-item">EDIT SHIPPING #10000020</li>
            </ol>
            <div class="table-wrapper">
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

            <style>
                .container {
                    padding: 20px;
                    margin-top: 20px;
                }

                .order-header,
                .order-footer {
                    border-bottom: 1px solid #e0e0e0;
                    padding-bottom: 10px;
                }

                .order-header {
                    margin-bottom: 20px;
                }

                .order-items table {
                    width: 100%;
                }

                .order-items th,
                .order-items td {
                    padding: 10px;
                }
                .maitabu{
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

                }
               .card{
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

                }
            </style>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="maitabu bg-white mb-3 p-3">
                            <div class="order-items mb-4">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><img src="path/to/hat-image.png" alt="Hat" width="50"></td>
                                            <td><a href="">Progash Durable Granite Hat</a><br>(Color: Green, Size:
                                                L)<br>SKU: NC-127-A0-A1</td>
                                            <td>1</td>
                                            <td>$269.00</td>
                                            <td>$269.00</td>
                                        </tr>
                                        <tr>
                                            <td><img src="path/to/audio-equipment-image.png" alt="Audio Equipment"
                                                    width="50"></td>
                                            <td>Audio Equipment<br>(Color: Blue, Size: S)<br>SKU: NC-177-A0-A1</td>
                                            <td>3</td>
                                            <td>$394.00</td>
                                            <td>$1,182.00</td>
                                        </tr>
                                        <tr>
                                            <td><img src="path/to/macbook-image.png" alt="MacBook" width="50"></td>
                                            <td>Apple MacBook Air Retina 13.3-Inch Laptop<br>(Color: Green, Size:
                                                S)<br>SKU: NC-128-A0-A1</td>
                                            <td>2</td>
                                            <td>$266.00</td>
                                            <td>$532.00</td>
                                        </tr>
                                        <tr>
                                            <td><img src="path/to/vanilla-image.png" alt="Vanilla" width="50"></td>
                                            <td>Iceland Soft Scoop Vanilla<br>(Color: Red, Size: XL)<br>SKU:
                                                NC-196-A0-A1</td>
                                            <td>2</td>
                                            <td>$445.00</td>
                                            <td>$890.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-center py-2">
                            <a href="#" target="_blank">
                                View Order #10000020
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6"></path>
                                    <path d="M11 13l9 -9"></path>
                                    <path d="M15 4h5v5"></path>
                                </svg> </a>
                        </div>
                        <div class="maitabu bg-white my-3 p-3">
                            <div class="shipment-info mb-4">
                                <h5>Additional shipment information</h5>
                                <form>
                                    <div class="form-group">
                                        <label for="shippingCompany">Shipping Company Name</label>
                                        <input type="text" class="form-control" id="shippingCompany"
                                            value="FastShipping">
                                    </div>
                                    <div class="form-group">
                                        <label for="trackingId">Tracking ID</label>
                                        <input type="text" class="form-control" id="trackingId" value="JJD0088647362">
                                    </div>
                                    <div class="form-group">
                                        <label for="trackingLink">Tracking Link</label>
                                        <input type="text" class="form-control" id="trackingLink"
                                            value="https://mydhl.express.dhl/us/en/tracking.html#/track-by-reference">
                                    </div>
                                    <div class="form-group">
                                        <label for="shipDate">Estimate Date Shipped</label>
                                        <input type="date" class="form-control" id="shipDate" value="2024-06-02">
                                    </div>
                                    <div class="form-group">
                                        <label for="note">Note</label>
                                        <textarea class="form-control mb-4" placeholder="Add note .." id="note" rows="3"></textarea>
                                        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-circle-check"></i> Save</button>

                                    </div>
                                </form>
                            </div>
                        </div>

                        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="col-xl-4">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mb-4">Product Traking</h4>
            <ul class="list-unstyled activity-wid mb-0">
                <li class="activity-list activity-border">
                    <div class="activity-icon avatar-sm">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="avatar-sm rounded-circle"
                            alt="">
                    </div>
                    <div class="media">
                        <div class="me-3">
                            <h5 class="font-size-15 mb-1">Your Manager Posted</h5>
                            <p class="text-muted font-size-14 mb-0">James Raphael</p>
                        </div>

                        <div class="media-body">
                            <div class="text-end d-none d-md-block">
                                <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i
                                        class="fa fa-calendar font-size-15 text-primary"></i>
                                    3 days</p>
                            </div>
                        </div>

                    </div>
                </li>

                <li class="activity-list activity-border">
                    <div class="activity-icon avatar-sm">
                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                            <i class="fa fa-shopping-cart font-size-16"></i>
                        </span>
                    </div>
                    <div class="media">
                        <div class="me-3">
                            <h5 class="font-size-15 mb-1">You have 5 pending order.</h5>
                            <p class="text-muted font-size-14 mb-0">America</p>
                        </div>

                        <div class="media-body">
                            <div class="text-end d-none d-md-block">
                                <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i
                                        class="fa fa-calendar font-size-15 text-primary"></i>
                                    1 days</p>
                            </div>
                        </div>


                    </div>
                </li>

                <li class="activity-list activity-border">
                    <div class="activity-icon avatar-sm">
                        <span class="avatar-title bg-soft-success text-success rounded-circle">
                            <i class="fa fa-user font-size-16"></i>
                        </span>
                    </div>
                    <div class="media">
                        <div class="me-3">
                            <h5 class="font-size-15 mb-1">New Order Received</h5>
                            <p class="text-muted font-size-14 mb-0">Thank You</p>
                        </div>

                        <div class="media-body">
                            <div class="text-end d-none d-md-block">
                                <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i
                                        class="fa fa-calendar font-size-15 text-primary"></i>
                                    Today</p>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="activity-list activity-border">
                    <div class="activity-icon avatar-sm">

                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="avatar-sm rounded-circle"
                            alt="">

                    </div>
                    <div class="media">
                        <div class="me-3">
                            <h5 class="font-size-15 mb-1">Your Manager Posted</h5>
                            <p class="text-muted font-size-14 mb-0">James Raphael</p>
                        </div>

                        <div class="media-body">
                            <div class="text-end d-none d-md-block">
                                <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i
                                        class="fa fa-calendar font-size-15 text-primary"></i>
                                    3 days</p>
                            </div>
                        </div>

                    </div>
                </li>

                <li class="activity-list activity-border">
                    <div class="activity-icon avatar-sm">
                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                            <i class="fa fa-shopping-cart font-size-16"></i>
                        </span>
                    </div>
                    <div class="media">
                        <div class="me-3">
                            <h5 class="font-size-15 mb-1">You have 1 pending order.</h5>
                            <p class="text-muted font-size-14 mb-0">Dubai</p>
                        </div>

                        <div class="media-body">
                            <div class="text-end d-none d-md-block">
                                <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i
                                        class="fa fa-calendar font-size-15 text-primary"></i>
                                    1 days</p>
                            </div>
                        </div>

                    </div>
                </li>

                <li class="activity-list">
                    <div class="activity-icon avatar-sm">
                        <span class="avatar-title bg-soft-success text-success rounded-circle">
                            <i class="fa fa-user font-size-16"></i>
                        </span>
                    </div>
                    <div class="media">
                        <div class="me-3">
                            <h5 class="font-size-15 mb-1">New Order Received</h5>
                            <p class="text-muted font-size-14 mb-0">Thank You</p>
                        </div>

                        <div class="media-body">
                            <div class="text-end d-none d-md-block">
                                <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i
                                        class="fa fa-calendar font-size-15 text-primary"></i>
                                    Today</p>
                            </div>
                        </div>
                    </div>
                </li>


            </ul>

        </div>
    </div>
</div>
<style>

    .card {
        margin-bottom: 24px;
        -webkit-box-shadow: 0 2px 4px rgb(126 142 177 / 10%);
        box-shadow: 0 2px 4px rgb(126 142 177 / 10%);
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid #eaedf1;
        border-radius: .25rem;
    }

    .activity-wid {
        margin-left: 16px;
    }

    /* .mb-0 {
        margin-bottom: 0 !important;
    } */

    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }

    .activity-wid .activity-list {
        position: relative;
        padding: 0 0 33px 30px;
    }

    .activity-border:before {
        content: "";
        position: absolute;
        height: 38px;
        border-left: 3px dashed #eaedf1;
        top: 40px;
        left: 0;
    }

    .activity-wid .activity-list .activity-icon {
        position: absolute;
        left: -20px;
        top: 0;
        z-index: 2;
    }

    .avatar-sm {
        height: 2.5rem;
        width: 2.5rem;
    }

    .media {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
    }

    .me-3 {
        margin-right: 1rem !important;
    }

    .font-size-15 {
        font-size: 15px !important;
    }

    .font-size-14 {
        font-size: 14px !important;
    }

    .text-muted {
        color: #74788d !important;
    }

    .text-end {
        text-align: right !important;
    }

    .font-size-13 {
        font-size: 13px !important;
    }

    .avatar-title {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        height: 100%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 100%;
    }

    .bg-soft-primary {
        background-color: rgba(82, 92, 229, .25) !important;
    }

    .bg-soft-success {
        background-color: rgba(35, 197, 143, .25) !important;
    }
</style>
                    </div>



                    
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <div class="card-header bg-white">
                                <h4 class="card-title">
                                    Shipment information
                                </h4>
                            </div>
                            <div class="card-body">
                                <dl class="d-flex flex-column gap-3">
                                    <div class="row">
                                        <dt class="col">
                                            Order number
                                        </dt>
                                    </div>
                                    <div class="row">
                                        <dt class="col">
                                            Shipping method
                                        </dt>
                                        <dd class="col-auto">
                                            Default (Free delivery)
                                        </dd>
                                    </div>
                                    <div class="row">
                                        <dt class="col">
                                            Shipping fee
                                        </dt>
                                        <dd class="col-auto">
                                            $0.00
                                        </dd>
                                    </div>
                                    <div class="row">
                                        <dt class="col">
                                            Cash on delivery amount (COD)
                                        </dt>
                                        <dd class="col-auto">
                                            $2,873.00
                                        </dd>
                                    </div>
                                    <div class="row">
                                        <dt class="col">
                                            COD status
                                        </dt>
                                        <dd class="col-auto">
                                            <span class="badge bg-success text-success-fg">
                                                Completed
                                            </span>
                                        </dd>
                                    </div>
                                    <div class="row">
                                        <dt class="col">
                                            Shipping status
                                        </dt>
                                        <dd class="col-auto">
                                            <span class="badge bg-success text-success-fg">
                                                Delivered
                                            </span>
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header bg-white">
                                <h4 class="card-title">
                                    Customer information
                                </h4>
                            </div>
                            <div class="card-body">
                                <dl class="shipping-address-info">
                                    <dd>Ms. Zola Abshire III</dd>
                                    <dd>
                                        <a href="tel:+19526074778">
                                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                                </path>
                                            </svg> <span dir="ltr">+19526074778</span>
                                        </a>
                                    </dd>
                                    <dd><a href="mailto:fweber@example.org">fweber@example.org</a></dd>
                                    <dd>353 Blaze Cliffs Apt. 115</dd>
                                    <dd>East Gabriellaville</dd>
                                    <dd>New Jersey</dd>
                                    <dd>SE</dd>
                                    <dd>
                                        <a href="https://maps.google.com/?q=353 Blaze Cliffs Apt. 115, East Gabriellaville, New Jersey, SE"
                                            target="_blank">
                                            See on maps
                                        </a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header bg-white">
                                <h4 class="card-title">
                                    Shipping label
                                </h4>
                            </div>
                            <div class="card-body">
                                <a type="button"
                                    href="#"
                                    target="_blank">
                                   <i class="fa-solid fa-print fa-2xl" style="color: #020fc5;"></i>
                                    Print
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
