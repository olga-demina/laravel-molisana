@extends('layouts.app')

@section('title')
    Molisana | homepage
@endsection

@section('main_content')
    <div class="pasta">
        <div class="container">

            @include('components.pasta-section', [
                'section_title' => 'Le lunghe',
                'pasta_array' => $pasta_lunga,
            ])

            @include('components.pasta-section', [
                'section_title' => 'Le corte',
                'pasta_array' => $pasta_corta,
            ])

            @include('components.pasta-section', [
                'section_title' => 'Le cortissime',
                'pasta_array' => $pasta_cortissima,
            ])

        </div>
    </div>
@endsection
