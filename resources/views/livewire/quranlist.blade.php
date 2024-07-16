<div>
    <h1>Quran List</h1>
    @foreach($qurans as $quran)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h5>{{ $quran->Quran_Name }}</h5>
                    </div>
                    <div class="col-md-4 text-center">
                        <h5>ID: {{ $quran->id }}</h5>
                    </div>
                    <div class="col-md-4 text-right">
                        <h5>{{ $quran->Quran_words }} words</h5>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>