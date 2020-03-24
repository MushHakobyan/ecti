@extends('index')
    @section('content')
        <div class="explore">
            <div class="explore-header">
                <div class="container is-fullhd">
                    <div class="is-flex">
                        <h1>Training plan</h1>
                        <div class="field">
                            <div class="control">
                              <div class="select is-medium">
                                <select>
                                  <option>2020</option>
                                  <option>2021</option>
                                  <option>2022</option>
                                </select>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="is-flex">
                        <h3>Sort by</h3>
                        <div class="field">
                            <div class="control">
                              <div class="select">
                                <select>
                                  <option>Title</option>
                                  <option>Date</option>
                                </select>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="container is-fullhd">
                <div class="columns is-marginless">
                    <div class="column is-3 is-paddingless">
                        <h2>Categories</h2>               
                        <ul class="aside-menu">
                            <li><a href="">Business</a></li>
                            <li><a href="">Computer Science</a></li>
                            <li><a href="">Math & logic</a></li>
                            <li><a href="">Personal Development</a></li>
                            <li><a href="">Arts</a></li>
                            <li><a href="">Human Rights</a></li>
                            <li><a href="">Data Science</a></li>
                            <li><a href="">Web Design</a></li>
                            <li><a href="">Security</a></li>
                            <li><a href="">Telecom</a></li>
                        </ul>
                    </div>
                    <div class="column is-9 is-paddingless">
                        <div class="columns is-block">
                             @foreach ([1, 2, 3, 4, 1, 2] as $item)
                                <div class="column">
                                    <div class="card is-flex">
                                        <div class="card-image">
                                            <figure class="image">
                                                <img src="{{ asset('img/explore-'.$item.'.png') }}">
                                            </figure>
                                        </div>
                                        <div class="card-content">
                                            <div class="content">
                                                <a href="">
                                                    <h4>The Data Science Course 2020: Complete Data Science Bootcamp</h4>
                                                </a>
                                                <div class="body-2">
                                                    <span class="is-tag">Data Scince</span>
                                                    <span class="body-1">Mathematics, Statistics, Python</span>
                                                    <span>10 July, 2020</span>
                                                </div>
                                            </div>
                                            <div class="has-text-weight-semibold">
                                                <a href="">APPLY NOW</a>
                                                <a href="">APPLY FOR SCHOLARSHIP</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>    
                    </div>
                </div>
                <nav class="pagination is-rounded is-centered" role="navigation" aria-label="pagination">
                    <ul class="pagination-list">
                        <li><a class="pagination-link">
                            <img src="{{asset('svg/arrow-left.svg')}}">
                        </a></li>
                        <li><a class="pagination-link is-current" aria-label="Goto page 1" aria-current="page">1</a></li>
                        <li><a class="pagination-link" aria-label="Page 2">2</a></li>
                        <li><a class="pagination-link" aria-label="Goto page 3">3</a></li>
                        <li><a class="pagination-link">
                            <img src="{{asset('svg/arrow-right.svg')}}">  
                        </a></li>
                    </ul>
                  </nav>
            </div>
        </div>
    @endsection