@card
<div class="card">
     <div class="card-header with-border">
        <h3 class="card-title">{{ $title }}</h3>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
    {{ $footer }}
</div>
@endcard

@alert
<a href="{{ route('categories.index') }}" class="nav-link">
    <i class="fa fa-circle-o nav-icon"></i>
    <p>Kategori</p>
</a>

@alert