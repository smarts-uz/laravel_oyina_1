<div class="single_announcement_second">
    <h4>Eng so'ngi elonlar</h4>
    <div class="line_single_announcement"></div>

    <div class="single_announcement_rows">

        @foreach($announcements as $announcement)
            <div class="announcement_single_card">
            <div class="single_card_img">
                @php $images = json_decode($announcement->image) @endphp
                @foreach($images as $image)
                    @if ($loop->first)
                        <img src="{{ Voyager::image($image) }}" alt="">
                    @endif
                @endforeach
                <a href="#" class="announcement_single_bookmark">
                    <span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span>
                </a>
            </div>

            <div class="announcement_single_icons">
                <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false">
                    </span> {{ \Carbon\Carbon::parse($announcement->created_at)->format('H:m / d.m.Y') }}</span>

            </div>
            <a href="{{ route('announcement', ['id' => $announcement->id]) }}" class="single_card_text">{{ $announcement->title }}</a>

        </div>
        @endforeach
    </div>

</div>
