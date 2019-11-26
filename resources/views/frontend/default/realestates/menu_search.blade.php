<div class="search">
    <label for="" style="font-size: 15px">CÔNG CỤ TÌM KIẾM</label>
    <ul class="nav nav-tabs">
        <li class="active"><a id="tab1" data-toggle="tab" href="#menu1">Nhà đất bán</a></li>
        <li><a data-toggle="tab"  id="tab2" href="#menu2">Nhà đất thuê</a></li>
    </ul>
    <div class="tab-content" style="padding-top: 10px">
        <div id="menu1" class="tab-pane fade in active">
            <div class="col-md-12">
                <div class="card-header" style="border-bottom: 0">
                    <div class="card-tools " style="float: left;position: relative;right: 0px;left: 0px;">
                        <div class="input-group input-group-sm dataTables_filter" style="">
                            <form action="" name="formSearch" method="GET" >
                                <div class="input-group">
                                    <select name="type" id="" class="form-control" style="height: 40px">
                                        <option value="" @if(app("request")->input("type")=='') selected="selected" @endif>-- Chọn loại nhà đất --</option>
                                        @foreach($type as $t_item)
                                            <option value="{{$t_item->name}}" @if(app("request")->input("type")==$t_item->name) selected="selected" @endif>{{$t_item->name}}</option>
                                        @endforeach
                                    </select>

                                    <select name="price" id="" class="form-control" style="height: 40px">
                                        <option value=""  @if(app("request")->input("price")=='') selected="selected" @endif>-- Chọn mức giá --</option>
                                        @foreach($search as $item)
                                            <option value="{{$item->code}}" @if(app("request")->input("price")==$item->code) selected="selected" @endif>{{$item->name}}</option>
                                        @endforeach
                                    </select>

                                    <select name="acreage" id="" class="form-control" style="height: 40px">
                                        <option value=""  @if(app("request")->input("acreage")=='') selected="selected" @endif>-- Chọn mức diện tích --</option>
                                        @foreach($search2 as $item)
                                            <option value="{{$item->code}}" @if(app("request")->input("acreage")==$item->code) selected="selected" @endif>{{$item->name}}</option>
                                        @endforeach
                                    </select>



                                    <select name="city" class="form-control" id="cities" style="height: 40px">
                                        <option value="" @if(app("request")->input("city")=='') selected="selected" @endif>-- Chọn tỉnh/thành phố --</option>
                                        @foreach($city as $c_item)
                                            <option value="{{$c_item->code}}" @if(app("request")->input("city")==$c_item->code) selected="selected" @endif>{{$c_item->name_city}}</option>
                                        @endforeach
                                    </select>

                                    <select class="form-control" name="province" id="provinces" style="height: 40px;">
                                        <option value="" @if(app("request")->input("province")=='') selected="selected" @endif>-- Chọn quận/huyện --</option>
                                        @if(app("request")->input("city"))
                                            @foreach($pro as $p_item)
                                                <option value="{{$p_item->name}}" @if(app("request")->input("city")==$p_item->city_code && app("request")->input("province")==$p_item->name) selected="selected" @endif>{{$p_item->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>

                                    <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" name="name" value="@if(app("request")->input("name")){{ trim(app("request")->input("name"))}}  @endif" style="height: 40px">
                                    <div class="input-group-append">
                                        <button type="submit" name="submit" value="filter" class="btn btn-warning"><i class="fa fa-search"></i>Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <div class="col-md-12">
                <div class="card-header" style="border-bottom: 0">
                    <div class="card-tools " style="float: left;position: relative;right: 0px;left: 0px;">
                        <div class="input-group input-group-sm dataTables_filter" style="">
                            <form action="" name="formSearch" method="GET" >
                                <div class="input-group">
                                    <select name="type1" id="type1" class="form-control" style="height: 40px">
                                        <option value="" @if(app("request")->input("type1")=='') selected="selected" @endif>-- Chọn loại nhà đất --</option>
                                        @foreach($type1 as $t_item)
                                            <option value="{{$t_item->name}}" @if(app("request")->input("type1")==$t_item->name) selected="selected" @endif>{{$t_item->name}}</option>
                                        @endforeach
                                    </select>

                                    <select name="price1" id="price1" class="form-control"  style="height: 40px">
                                        <option value=""  @if(app("request")->input("price1")=='') selected="selected" @endif>-- Chọn mức giá --</option>
                                        @foreach($search3 as $item)
                                            <option value="{{$item->code}}" @if(app("request")->input("price1")==$item->code) selected="selected" @endif>{{$item->name}}</option>
                                        @endforeach
                                    </select>

                                    <select name="acreage1" id="acreage1" class="form-control" style="height: 40px">
                                        <option value=""  @if(app("request")->input("acreage1")=='') selected="selected" @endif>-- Chọn mức diện tích --</option>
                                        @foreach($search4 as $item)
                                            <option value="{{$item->code}}" @if(app("request")->input("acreage1")==$item->code) selected="selected" @endif>{{$item->name}}</option>
                                        @endforeach
                                    </select>


                                    <select name="city1" class="form-control" id="cities" style="height: 40px">
                                        <option value="" @if(app("request")->input("city1")=='') selected="selected" @endif>-- Chọn tỉnh/thành phố --</option>
                                        @foreach($city as $c_item)
                                            <option value="{{$c_item->code}}" @if(app("request")->input("city1")==$c_item->code) selected="selected" @endif>{{$c_item->name_city}}</option>
                                        @endforeach
                                    </select>

                                    <select class="form-control" name="province1" id="provinces" style="height: 40px;">
                                        <option value="" @if(app("request")->input("province1")=='') selected="selected" @endif>-- Chọn quận/huyện --</option>
                                        @if(app("request")->input("city1"))
                                            @foreach($pro as $p_item)
                                                <option value="{{$p_item->name}}" @if(app("request")->input("city1")==$p_item->city_code && app("request")->input("province1")==$p_item->name) selected="selected" @endif>{{$p_item->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>

                                    <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" name="name1" value="@if(app("request")->input("name1")){{ trim(app("request")->input("name1"))}}  @endif" style="height: 40px">
                                    <div class="input-group-append">
                                        <button type="submit" name="submit" value="filter" class="btn btn-warning"><i class="fa fa-search"></i>Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
