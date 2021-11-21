<section data-bs-version="5.1" class="team1 cid-sP8oJexFnS" id="team1-5">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="mbr-section-title mbr-fonts-style align-left mb-4 display-2">Nos filiales</h1>

            </div>
            @foreach ($filiales as $filiale)
            <div class="col-sm-6 col-lg-4">
                <div class="card-wrap">
                    <div class="image-wrap">
                        <a href="{{ route('filiale.show',compact('filiale')) }}"><img src="{{ asset('uploads/filiales/responsables/'.$filiale->photoResponsable) }}" alt=""></a>
                    </div>
                    <div class="content-wrap p-0">
                        <h5 class="mbr-section-title card-title mbr-fonts-style align-left m-0 display-7">
                            {{ $filiale->nom}}</h5>
                        <h4 class="mbr-section-title card-title mbr-fonts-style align-left m-0 display-6">
                            {{ $filiale->nomResponsable}}</h4>
                        <h6 class="card-subtitle mbr-fonts-style mb-3 occupation display-7">
                            {{ $filiale->adresse}}
                        </h6>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
