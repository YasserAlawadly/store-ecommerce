@if(Session::has('success'))
    <div class="row mr-2 ml-2">
        <div class="btn btn-lg btn-block btn-outline-success mb-2" id="type-error">
            {{ Session::get('success') }}
        </div>
    </div>
@endif
