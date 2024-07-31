<x-layout.app class="valet">
    <div class="container">
        <header>
            <img src="{{ asset('img/logo.png') }}">
            <div class="text">
                <h3 class="title">Penabur DEO</h3>
                <h4 class="subtitle">Applications</h4>
            </div>
        </header>
        <div class="list">
            <a href="{{ route('sertifikat.index') }}" class="item">
                <span class="title">Sertifikat</span>
            </a>
        </div>
    </div>
</x-layout.app>