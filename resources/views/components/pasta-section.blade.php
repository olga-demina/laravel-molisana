<section class="pasta-section">
    <h2>{{ $section_title }}</h2>
    <div class="pasta-list">

        @foreach ($pasta_array as $pasta)
            @include('components.pasta-card', $pasta)
        @endforeach

    </div>
</section>