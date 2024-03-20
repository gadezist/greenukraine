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
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach($marker->files as $img)
                            <div class="swiper-slide" id="{{ $loop->iteration }}">
                                <img src="{{ Storage::url($img->path) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </td>
        </tr>
        @if(Auth::check() && Auth::user()->hasAnyRole(['super-admin', 'expert-user']))
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
