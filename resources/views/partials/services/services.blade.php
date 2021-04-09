<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>{!! $title !!}</h2>
        </div>
        <div class="row">
            @foreach ($resources as $item)
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="{{$item->icons->name}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$item->title}}</h2>
                            <p>{{$item->content}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            {{$resources->fragment('service')->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>
</div>
<!-- services section end -->