@extends('navbar')
@section('isi')
    

        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    @foreach ($newsData['results'] as $index => $article)
                        @if($index === 0)
                            <!-- Add your specific content for the first card here -->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{ $article['image_url'] ?? 'https://dummyimage.com/850x350/dee2e6/6c757d.jpg' }}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $article['pubDate'] }}</div>
                                    <h2 class="card-title">{{ $article['title'] }}</h2>
                                    <p class="card-text">{{ $article['description'] }}</p>
                                    <a class="btn btn-primary" href="{{ $article['link'] }}">Read more →</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        @foreach ($newsData['results'] as $index => $article)
                        @if ($index > 0)
                            
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{ $article['image_url'] ?? 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg' }}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $article['pubDate'] }}</div>
                                    <h2 class="card-title h4">{{ $article['title'] }}</h2>
                                    <p class="card-text">{{ $article['description'] }}</p>
                                    <a class="btn btn-primary" href="{{ route('post.show', ['id_articles' => $article['article_id']]) }}">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <form action="/search" method="get">
                                    <input class="form-control" type="text" name="search" id="search" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                    <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
        @endsection