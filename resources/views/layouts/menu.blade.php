<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Tableau de Bord</span>
    </a>
</li>


<li class="side-menus {{ Request::is('posts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('posts.index') }}"><i class="fas fa-building"></i><span>Publications</span></a>
</li>

<li class="side-menus {{ Request::is('media*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('media.index') }}"><i class="fas fa-building"></i><span>Medias</span></a>
</li>

<li class="side-menus {{ Request::is('criticals*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('criticals.index') }}"><i class="fas fa-building"></i><span>Critiques</span></a>
</li>

<li class="side-menus {{ Request::is('propositions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('propositions.index') }}"><i class="fas fa-building"></i><span>Propositions</span></a>
</li>

<li class="side-menus {{ Request::is('commentTypes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('commentTypes.index') }}"><i class="fas fa-building"></i><span>Type de Commentaire</span></a>
</li>

<li class="side-menus {{ Request::is('likes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('likes.index') }}"><i class="fas fa-building"></i><span>J'aime</span></a>
</li>

<li class="side-menus {{ Request::is('entityTypes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('entityTypes.index') }}"><i class="fas fa-building"></i><span>Type d'entités</span></a>
</li>

<li class="side-menus {{ Request::is('entities*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('entities.index') }}"><i class="fas fa-building"></i><span>Entités</span></a>
</li>

<li class="side-menus {{ Request::is('agents*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('agents.index') }}"><i class="fas fa-building"></i><span>Agents</span></a>
</li>

<li class="side-menus {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-building"></i><span>Produits</span></a>
</li>

