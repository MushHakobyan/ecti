<div class="header">
    <div class="container is-fullhd">
        <div class="columns is-marginless">
            <div class="column is-1 is-paddingless">
                <a class="closeMenu">
                    <figure class="image is-46x46">
                        <img src="{{ asset('svg/open-menu.svg') }}">
                    </figure>
                </a>
                <a class="openMenu">
                    <figure class="image is-46x46">
                        <img src="{{ asset('svg/open-menu.svg') }}">
                    </figure>
                </a>
            </div>
            <div class="column is-4 is-paddingless is-flex">
                <p class="has-text-right">Executive Coaching and Training Institute</p>
                <figure class="image">
                    <a href="/">
                        <img src="{{ asset('svg/logo-ecti.svg') }}">
                    </a>
                </figure>
            </div>
            <div class="column is-2 is-offset-5 is-paddingless account-button">
                <div class="dropdown is-hoverable is-pulled-right">
                    <div class="dropdown-trigger">
                        <div class="account" aria-haspopup="true" aria-controls="dropdown-menu">
                            <figure class="image is-46x46">
                               <img src="{{ asset('img/user-img.jpg') }}" class="is-rounded">
                            </figure>
                            <h4>Anna Bilyan</h4>
                            <figure>
                                <img src="{{ asset('svg/arrow-down.svg') }}">
                            </figure>
                        </div>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu" role="menu">
                        <div class="dropdown-content">
                            <a href="#" class="dropdown-item">Dropdown item</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="slide-menu">
        @include('pages/includes.menu')
    </div>
</div>  
