@extends('layouts.app')

@section('meta_title')
    @lang('common.media')
@endsection

@section('body')
<section class="media pb200">
    <div class="container">
        <ul class="breadcrumbs list-reset">
            <li>
                <a href="{{route('pages.show', ['path' => 'about'])}}">@lang('page.about')</a>
            </li>
            <li>
                @lang('common.media')
            </li>
        </ul>
        <span class="italic">
            @lang('headers.life')
        </span>
        <h1 class="media__title">
            @lang('headers.media')
        </h1>
        <h3 class="media-title">
            @lang('page.photo')
        </h3>
        <div class="media-wrapper">
            <div class="row media-row" id="pagination_data_image">
                @include('pagination.media_images')
            </div>
            <div class="pagination" id="pagination_image">
                <div class="pagination__row">
                  <ul class="pagination__list list-reset">
                    <li>
                      <a href="#" class="disabled" id="first_page_ue">1</a>
                    </li>
                    <li>
                      <a href="#" class="disabled">…</a>
                    </li>
                    <li>
                      <a href="#" id="last_page_ue">{{$images->lastPage()}}</a>
                    </li>
                  </ul>
                  <div class="pagination__btns">
                    <button class="btn-reset" type="button" page="{{$images->firstItem()}}" id="prev_page" disabled>
                      <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                        <path d="M18 9C18.5523 9 19 8.55228 19 8C19 7.44772 18.5523 7 18 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM18 7L1 7V9L18 9V7Z" fill="var(--black)"/>
                      </svg>
                    </button>
                    <button class="btn-reset" type="button" page="{{$images->currentPage() + 1}}" last-page="{{$images->lastPage()}}" id="next_page">
                      <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                        <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM1 9H18V7H1V9Z" fill="var(--black)"/>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="pagination__progress" style="--progress: 10%">
                  <div class="pagination__progress-bar"></div>
                </div>
            </div>
        </div>
        <h3 class="media-title">
            @lang('page.video')
        </h3>
        <div class="media-wrapper mb-0">
            <div class="row media-row" id="pagination_data">
                @include('pagination.media_video')
            </div>
            <div class="pagination" id="pagination">
                <div class="pagination__row">
                  <ul class="pagination__list list-reset">
                    <li>
                      <a href="#" class="disabled" id="first_page_ue">1</a>
                    </li>
                    <li>
                      <a href="#" class="disabled">…</a>
                    </li>
                    <li>
                      <a href="#" id="last_page_ue">{{$videos->lastPage()}}</a>
                    </li>
                  </ul>
                  <div class="pagination__btns">
                    <button class="btn-reset" type="button" page="{{$videos->firstItem()}}" id="prev_page" disabled>
                      <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                        <path d="M18 9C18.5523 9 19 8.55228 19 8C19 7.44772 18.5523 7 18 7V9ZM0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM18 7L1 7V9L18 9V7Z" fill="var(--black)"/>
                      </svg>
                    </button>
                    <button class="btn-reset" type="button" page="{{$videos->currentPage() + 1}}" last-page="{{$videos->lastPage()}}" id="next_page">
                      <svg width="19" height="16" viewBox="0 0 19 16" fill="none">
                        <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM1 9H18V7H1V9Z" fill="var(--black)"/>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="pagination__progress" style="--progress: 10%">
                  <div class="pagination__progress-bar"></div>
                </div>
            </div>
        </div>
</section>

<script>
    loadDataInit('#pagination', loadData);
    function loadData(page){
        $.ajax({
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            },
            url: "/ajax/media_video?page="+page,
            success: function(data){
                $('#pagination_data').html(data);
            }
        });
    }

    loadDataInit('#pagination_image', loadData);
    function loadData(page){
        $.ajax({
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            },
            url: "/ajax/media_image?page="+page,
            success: function(data){
                $('#pagination_data_image').html(data);
            }
        });
    }
</script>





@endsection
