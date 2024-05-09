@include('includes.BootstrapCss')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
            <x-navbar></x-navbar>
        </div>

        <div class="col-lg-9" id="scrollable-content">
            <section class="profile-feed">
            @foreach ($posts as $post )
            {{-- <p>here is the post {{$post}}</p> --}}
            {{-- <br> --}}
                <x-post :post="$post" ></x-post>
            @endforeach
            </section>
        </div>

    </div>
</div>
@include('includes.BootstrapScripts')

