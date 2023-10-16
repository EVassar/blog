<li><a href="/">Home</a></li>
@auth
<li tabindex="0">
    <details>
        <summary>Admin</summary>
        <ul class="p-2 z-20 bg-base-100">
            <li><a href="{{route('articles.index')}}">Articles</a></li>
            <li><a>Submenu 2</a></li>
        </ul>
    </details>
</li>
@endauth
<li><a href="/about">About</a></li>
