@extends('layouts.app')

@section('content')
<section data-bs-version="5.1" class="header8 cid-sP8n1S8d3Q" id="header8-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3 class="mbr-section-title mbr-white mbr-fonts-style display-1">
                    <strong>Bambo Inc.</strong>
                </h3>
                <p class="mbr-text mbr-fonts-style mbr-white mb-4 display-1">Create your own website.<br><a
                        href="index.html#formbuilder-6" class="text-danger text-primary"><strong>Ouvrir une filiale
                            &gt;&gt;</strong></a></p>
            </div>
        </div>
    </div>
</section>

<x-filiale-list :filiales="$filiales" />

<x-filiale-new />
@endsection
