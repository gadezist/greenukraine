<div class="card-body pt-2 pb-3 pe-2 info-marker">
    <table class="table table-striped">
        <caption>Information</caption>
        <button type="button" class="close" aria-label="Close" id="close-button">
            <span aria-hidden="true">&times;</span>
        </button>
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th scope="col">Name</th>--}}
{{--            <th scope="col">Describe</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
        <tbody>
        <tr>
            <th scope="row">Location:</th>
            <td>{{ $marker->geom }}</td>
        </tr>
        <tr>
            <th scope="row">Name:</th>
            <td>{{ $marker->name }}</td>
        </tr>
        <tr>
            <th scope="row">Address:</th>
            <td>{{ $marker->address }}</td>
        </tr>
        <tr>
            <th scope="row">Land Area:</th>
            <td>{{ $marker->land_area }}</td>
        </tr>
        <tr>
            <th scope="row">Soil:</th>
            <td>{{ $marker->soil }}</td>
        </tr>
        <tr>
            <th scope="row">Crops:</th>
            <td>{{ $marker->crops }}</td>
        </tr>
        <tr>
            <th scope="row">Damage:</th>
            <td>{{ $marker->damage }}</td>
        </tr>
        <tr>
            <th scope="row">Photo:</th>
            <td>
                <div class="thumbnail-container">
                    @foreach($marker->files as $img)
                        <div class="thumbnail">
                            <img src="{{ Storage::url($img->path) }}" data-bs-target="#carouselExample" data-bs-slide-to="{{ $loop->index }}">
                        </div>
{{--                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">--}}
{{--                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="0">--}}
{{--                                <div class="card">--}}
{{--                                    <img src="{{ Storage::url($img->path) }}" alt="">--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    @endforeach
                </div>
            </td>
        </tr>
        @if(Auth::check() && Auth::user()->hasRole('super-admin'))
            <tr>
                <th scope="row">Expert report:</th>
                <td>
                @if($marker->expert_report)
                    <a href="{{ Storage::url($marker->expert_report) }}" target="_blank">Report</a>
                @endif
                </td>
            </tr>
        @endif
        <tr>
            <th scope="row">Level of damage:</th>
            <td>{{ ucfirst($marker->level_of_damage) }}</td>
        </tr>
        </tbody>
    </table>
</div>


{{--<div class="modal fade" id="carouselModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-xl">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="exampleModalLabel">Карусель</h5>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">--}}
{{--                    <div class="carousel-inner">--}}
{{--                        @foreach($marker->files as $img)--}}
{{--                        <div class="carousel-item active">--}}
{{--                            <img src="{{ $img->path }}" class="d-block w-100" alt="...">--}}
{{--                        </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">--}}
{{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                        <span class="visually-hidden">Previous</span>--}}
{{--                    </button>--}}
{{--                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">--}}
{{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                        <span class="visually-hidden">Next</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                <div class="carousel-inner overflow-hidden">
                    @foreach($marker->files as $img)
                    <div class="carousel-item @if($loop->index === 0) active @endif">
                        <img src="{{ Storage::url($img->path) }}" class="d-block w-100" alt="...">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
