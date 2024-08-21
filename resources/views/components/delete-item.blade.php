<form method="POST" action="{{ $route }}">
    @method('delete')
    @csrf

    <a
        onclick="event.preventDefault();
       this.closest('form').submit();">
        <x-danger-button>{{ $text }}</x-danger-button>
    </a>
</form>
