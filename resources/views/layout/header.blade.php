<div class="header">
    <div class="container is-fullhd">
        <div class="columns is-marginless">
            <div class="column is-1 is-paddingless">
                <a class="close-menu">
                    <figure class="image is-46x46">
                        {{-- <img src="{{ asset('svg/close-menu.svg') }}"> --}}
                        <svg id="close-menu" width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.2" cx="23" cy="23" r="23" fill="#D3D9E0"/>
                            <g opacity="0.8">
                            <rect x="14" y="13" width="12" height="2" fill="#A8B3C1"/>
                            <rect x="14" y="22" width="18" height="2" fill="#A8B3C1"/>
                            <rect x="14" y="31" width="12" height="2" fill="#A8B3C1"/>
                            </g>
                            </svg>
                    </figure>
                </a>
                <a class="open-menu">
                    <figure class="image is-46x46">
                        {{-- <img src="{{ asset('svg/open-menu.svg') }}"> --}}
                        <svg id="open-menu" width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.2" cx="23" cy="23" r="23" fill="#D3D9E0"/>
                            <g opacity="0.8">
                            <rect x="14" y="17" width="18" height="2" fill="#A8B3C1"/>
                            <rect x="14" y="27" width="12" height="2" fill="#A8B3C1"/>
                            </g>
                            </svg>
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
        @include('pages.includes.menu')
    </div>
</div>
