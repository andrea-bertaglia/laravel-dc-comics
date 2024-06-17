<div class="container ">
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My DcComics Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-3">
                    <a class="nav-link active" aria-current="page" href="{{ route('comics.index') }}">Lista Comics</a>
                    <a class="nav-link active" aria-current="page" href="{{ route('comics.create') }}">Aggiungi
                        nuovo</a>
                    <a class="nav-link active text-secondary" aria-current="page" aria-disabled="true">Cancella</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active btn btn-secondary text-white" aria-current="page"
                        href="{{ route('index') }}">Home Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
