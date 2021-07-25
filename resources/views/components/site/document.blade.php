<div class="single_announcement_second">
    <h4>Rasmiy hujjatlar</h4>
    <div class="line_single_announcement"></div>

    <div class="single_announcement_rows">

        @foreach($documents as $document)
            <div class="announcement_single_card">
                <div class="single_card_img">
                    <a href="#" class="announcement_single_bookmark">
                        <span class="iconify  text-white" data-icon="mdi:bookmark-outline" data-inline="false"></span>
                    </a>
                </div>

                <div class="announcement_single_icons">
                <span class="bell2 flex items-center"><span class="iconify" data-icon="mdi:clock-time-four-outline" data-inline="false">
                    </span> {{ \Carbon\Carbon::parse($document->created_at)->format('H:m / d.m.Y') }}</span>

                </div>
                <a href="{{ route('document', ['id' => $document->id]) }}" class="single_card_text">{{ $document->title }}</a>

            </div>
        @endforeach
    </div>

</div>
