@extends('backend.master')

@push('title', 'Add Tour')

@section('script')
<script src="{{ asset('js/custom-function.js') }}"></script>
<script type="text/javascript">
    // Active Sidebar
    $('#link-tour').parent().addClass('activemenu-is-opening menu-open');
    $('#link-tour, #link-add-tour').addClass('active');
</script>
@endsection

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header " style="margin-top:50px;">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tạo tour du lịch </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.tour.index') }}">Tour</a></li>
                    <li class="breadcrumb-item active">Tạo tour</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- .card -->
            <div class="card card-primary">
                <!-- .card-header -->
                <div class="card-header">
                    <h3 class="card-title">Tạo thêm tour mới *</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header-->

                <form action="{{ route('admin.tour.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- .card-body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="exampleInputFile">Thêm ảnh:</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                            <label class="custom-file-label" for="exampleInputFile"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="inputStatus">Trạng thái:</label>
                                    <select id="inputStatus" name="display" class="form-control custom-select">
                                        <option selected="" value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputName">Nhập tên tour:</label>
                            <input type="text" id="inputName" name="name" class="form-control"
                                placeholder="Nhập tên tour" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="selectArea">Lựa chọn vùng miền:</label>
                                    <select name="area_id" id="selectArea" class="form-control custom-select" required>
                                        <option value="">-- Choose an area --</option>
                                        @foreach ($areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="selectLocation">Địa điểm:</label>
                                    <select name="location_id" id="selectLocation" class="form-control custom-select"
                                        required>
                                        <option value="">-- Choose an location --</option>
                                        @foreach ($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textDescription">Miêu tả:</label>
                            <textarea id="textDescription" name="description" class="form-control" rows="4"
                                placeholder="Nhập mô tả ngẵn cho tour" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Điểm xuất phát:</label>
                                    <input type="text" name="departure_location" class="form-control"
                                        placeholder="Địa điểm xuất phát" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Đích đến:</label>
                                    <input type="text" name="destination" class="form-control" placeholder="Đích đến"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Hành trình:</label>
                            <input type="text" name="itinerary" class="form-control" placeholder="Hành trình" required>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Số lượng vé:</label>
                                    <input type="number" name="slot" class="form-control" min="0" value="0" required>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="">Những ngày khởi hành:</label>
                                    <input type="text" name="other_day" class="form-control date"
                                        placeholder="Ngày khởi hành khác"  autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Giá:(người từ 45 tuổi trở lên)</label>
                                    <input type="number" name="adult_price" min="0" value="0" class="form-control" 
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Giá:(người từ 18 tuổi đến 44 tuổi)</label>
                                    <input type="number" name="youth_price" min="0" value="0" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Giá:(trẻ cao:120cm trở xuống)</label>
                                    <input type="number" name="child_price" min="0" value="0" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Giá:(em bé)</label>
                                    <input type="number" name="baby_price" min="0" value="0" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group" data-select2-id="111">
                                    <label>Áp dụng khuyến mãi:</label>
                                    <select name="promotion_id[]" id="selectPromotion" class="select2 select2-hidden-accessible" multiple="" data-placeholder="Lựa chọn khuyến mãi..."  style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                                        @foreach ($promotions as $promotion)
                                            <option value="{{ $promotion->id }}">{{ $promotion->content }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" data-select2-id="54">
                                    <label>Tags</label>
                                    <select name="promotion_id[]" id="selectPromotion" class="select2 select2-hidden-accessible" multiple="" data-placeholder="Hình thức tour..." style="width: 100%;" data-select2-id="8" tabindex="-1" aria-hidden="true">
                                         @foreach ($tags as $tag)
                                             <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" data-select2-id="50">
                                    <label>Phương tiện sử dụng:</label>
                                    <select name="vehicle_id[]" id="selectVehicle" class="select2 select2-hidden-accessible" multiple="" data-placeholder="Hình thức tour..." style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                        @foreach ($vehicles as $vehicle)
                                            <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="include">Dịch vụ được ưu đãi:</label>
                                    <select name="include[]" id="include" class="form-control select2tagging" multiple
                                        data-placeholder="Enter more include">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="notInclude">Dịch vụ không được ưu đãi:</label>
                                    <select name="not_include[]" id="notInclude" class="form-control select2tagging"
                                        multiple data-placeholder="Enter more include">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <!-- .card-footer -->
                    <div class="card-footer">
                        <a href="{{ route('admin.tour.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success float-right">Save</button>
                    </div>
                    <!-- /.card-footer -->
                </form>

            </div>
            <!-- /.card -->

        </div>
    </div>
</section>
<!-- /.content -->
@endsection
