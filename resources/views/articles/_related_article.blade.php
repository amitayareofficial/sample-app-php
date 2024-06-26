<div class="col-lg-3 col-md-6 col-sm-12">
    <div class="article-tile">
        <a href="{{  route('articles.show', ['slug' => $article->system->codename]) }}">
            <img alt="{{ $article->teaserImage[0]->description }}" class="article-tile-image" src="{{ $article->teaserImage[0]->url }}" title="{{ $article->teaserImage[0]->description }}">
        </a>
        <div class="article-tile-date">
            {{ date('F j', $article->postDate->getTimeStamp()) }}
        </div>
        <div class="article-tile-content">
            <h2 class="h4">
                <a href="{{  route('articles.show', ['slug' => $article->system->codename]) }}">{{ $article->title }}</a>
            </h2>
            <p class="article-tile-text">
                {!! $article->summary !!}
            </p>
        </div>
    </div>
</div>