@extends('layouts.view')

{{-- @section('meta_title', $page->meta_title ?: $page->title)
@section('meta_keywords', $page->meta_keywords)
@section('meta_description', $page->meta_description) --}}

@section('link-back')
<div style="position: absolute; height:40px; width: 100%; background-color: #000;opacity: 0.7; color: #fff; display:flex; justify-content: start; align-items:center;">
    <a href="{{route('admin.publications.index', $publication->id)}}" style="color:#fff; font-size: 20px; text-decoration: none; margin-left: 10px;">Назад</a>
</div>
@endsection

@section('body')
    <div class="container">
        {{-- <h1>test</h1> --}}
    </div>
    <section class="research pb200">
        <div class="container">
          <h1 class="h2 research__title">
            {{ $publication->title }}
          </h1>
          <div class="row">
            <div class="col-md-9 research__column">
              <div class="research__group-text">
                {!! $publication->translate('ru')->content !!}
                <div class="video-wrap">
                    @if ($publication->getFirstMediaUrl('publication'))
                        <img src="{{asset(str_replace('http://localhost/', '', $publication->getFirstMediaUrl('publication')))}}" alt="" style="width: 300px; height:300px">
                        <div class="col-3">
                    @endif
                </div>
      
                <div class="social research__social" role="list">
                  <a href="#" aria-label="facebook" target="_blank">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3197 24V15.9991H18.6863L19 13.2419H16.3197L16.3237 11.8619C16.3237 11.1428 16.3969 10.7575 17.5037 10.7575H18.9833V8H16.6162C13.773 8 12.7723 9.33753 12.7723 11.5868V13.2422H11V15.9994H12.7723V24H16.3197Z" fill="#A9A8A8"/>
                    </svg>
                  </a>
                  <a href="#" aria-label="youtube" target="_blank">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7847 19.9624C15.7847 19.9624 16.0734 19.9307 16.2213 19.7741C16.3567 19.6306 16.352 19.3598 16.352 19.3598C16.352 19.3598 16.334 18.0951 16.9296 17.9084C17.5165 17.7247 18.2701 19.1314 19.0699 19.6723C19.674 20.0812 20.1326 19.9917 20.1326 19.9917L22.2697 19.9624C22.2697 19.9624 23.3872 19.8945 22.8574 19.028C22.8136 18.957 22.5483 18.3868 21.2689 17.2155C19.9283 15.9895 20.1083 16.1877 21.7219 14.0667C22.7049 12.775 23.0977 11.9864 22.9748 11.6493C22.8583 11.3267 22.1351 11.4124 22.1351 11.4124L19.7296 11.4271C19.7296 11.4271 19.5511 11.4031 19.4189 11.4811C19.2897 11.5575 19.206 11.7357 19.206 11.7357C19.206 11.7357 18.8257 12.7349 18.3178 13.5852C17.2465 15.3784 16.8184 15.4732 16.6431 15.3622C16.2354 15.1022 16.3371 14.319 16.3371 13.7626C16.3371 12.0243 16.6048 11.2998 15.8167 11.1122C15.5554 11.0498 15.3629 11.0088 14.6937 11.0019C13.8353 10.9935 13.1091 11.005 12.6974 11.2033C12.4236 11.3352 12.2122 11.63 12.3414 11.647C12.5002 11.6678 12.8602 11.7427 13.0512 11.9988C13.2977 12.3298 13.2891 13.0721 13.2891 13.0721C13.2891 13.0721 13.4307 15.1183 12.9581 15.3722C12.6341 15.5466 12.1896 15.1909 11.2341 13.5636C10.745 12.7303 10.3756 11.809 10.3756 11.809C10.3756 11.809 10.3044 11.6369 10.1768 11.5443C10.0227 11.4325 9.80744 11.3977 9.80744 11.3977L7.52162 11.4124C7.52162 11.4124 7.17806 11.4217 7.05206 11.569C6.94019 11.6994 7.04344 11.9702 7.04344 11.9702C7.04344 11.9702 8.83319 16.099 10.86 18.18C12.7186 20.0874 14.8284 19.9624 14.8284 19.9624H15.7847Z" fill="#A9A8A8"/>
                    </svg>
                  </a>
                  <a href="#" aria-label="instagram" target="_blank">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6793 7.00229C13.9229 7.00193 14.1947 7.00229 14.5001 7.00229C16.9428 7.00229 17.2323 7.01108 18.1969 7.0549C19.0889 7.09572 19.5731 7.24476 19.8956 7.37C20.3225 7.53584 20.6269 7.73406 20.9469 8.05431C21.2671 8.37455 21.4654 8.67957 21.6316 9.10662C21.7568 9.42872 21.906 9.91295 21.9466 10.8051C21.9904 11.7696 22 12.0594 22 14.5013C22 16.9431 21.9904 17.2329 21.9466 18.1974C21.9058 19.0896 21.7568 19.5738 21.6316 19.8959C21.4657 20.3229 21.2671 20.6269 20.9469 20.9471C20.6267 21.2673 20.3227 21.4655 19.8956 21.6314C19.5735 21.7572 19.0889 21.9059 18.1969 21.9467C17.2325 21.9905 16.9428 22 14.5001 22C12.0572 22 11.7676 21.9905 10.8032 21.9467C9.91121 21.9055 9.42705 21.7564 9.10441 21.6311C8.67743 21.4653 8.37245 21.2671 8.05224 20.9468C7.73204 20.6266 7.53384 20.3224 7.36766 19.8952C7.24244 19.573 7.0932 19.0888 7.0526 18.1967C7.00872 17.2321 7 16.9424 7 14.499C7 12.0555 7.00872 11.7673 7.0526 10.8028C7.09335 9.91066 7.24244 9.42643 7.36766 9.1039C7.53348 8.67693 7.73204 8.37191 8.05224 8.05166C8.37245 7.73142 8.67743 7.53319 9.10441 7.36692C9.42691 7.24111 9.91121 7.09243 10.8032 7.05147C11.6472 7.01337 11.9742 7.00193 13.6793 7V7.00229ZM19.3836 8.52152C18.7775 8.52152 18.2858 9.01283 18.2858 9.61915C18.2858 10.2253 18.7775 10.7171 19.3836 10.7171C19.9897 10.7171 20.4815 10.2253 20.4815 9.61915C20.4815 9.01297 19.9897 8.52152 19.3836 8.52152ZM14.5001 9.80444C11.9054 9.80444 9.80179 11.9084 9.80179 14.5033C9.80179 17.0983 11.9054 19.2013 14.5001 19.2013C17.0947 19.2013 19.1976 17.0983 19.1976 14.5033C19.1976 11.9084 17.0947 9.80444 14.5001 9.80444Z" fill="#A9A8A8"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 12C15.8806 12 17 13.1192 17 14.5C17 15.8806 15.8806 17 14.5 17C13.1192 17 12 15.8806 12 14.5C12 13.1192 13.1192 12 14.5 12Z" fill="#A9A8A8"/>
                    </svg>
                  </a>
                  <a href="#" aria-label="linkedin" target="_blank">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6322 12.8789H7.20278V22.9998H10.6322V12.8789ZM10.8581 9.74816C10.8358 8.75582 10.1134 8 8.94015 8C7.76698 8 7 8.75582 7 9.74816C7 10.7199 7.74434 11.4975 8.89563 11.4975H8.91757C10.1134 11.4975 10.8581 10.7199 10.8581 9.74816ZM23 17.1968C23 14.0881 21.3082 12.6413 19.0514 12.6413C17.2306 12.6413 16.4154 13.6236 15.9603 14.3127V12.8792H12.5305C12.5757 13.8289 12.5305 23 12.5305 23H15.9603V17.3477C15.9603 17.0452 15.9826 16.7435 16.0732 16.527C16.3211 15.9226 16.8854 15.297 17.8329 15.297C19.0743 15.297 19.5706 16.225 19.5706 17.5851V22.9998H22.9999L23 17.1968Z" fill="#A9A8A8"/>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-3 research__column">
              <aside class="research__aside">
                <div class="research__col">
                  <h4 class="research__name">
                    @lang('common.datetime')
                  </h4>
                  <p class="research__col-text">
                    {{-- {{ Date::parse($newsitem->date)->format('d F Y') }} --}}
                  </p>
                </div>
                <div class="research__col">
                  <h4 class="research__name">
                    Related to
                  </h4>
                  <p class="research__col-text">
                    Events
                  </p>
                </div>
                <div class="research__col">
                  <h4 class="research__name">
                    Agenda
                  </h4>
                  <p class="research__col-text">
                    Sustainable Development
                  </p>
                </div>
                <div class="research__col">
                  <h4 class="research__name">
                    @lang('news.news.keywords')
                  </h4>
                  <ul class="research__list">
                      {{-- @if ($publication->tags()) --}}
                        @foreach ($publication->tags as $tag)
                        <li>
                            <a href="#">{{$tag->name}}</a>
                        </li>
                        @endforeach
                      {{-- @endif --}}
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>
@endsection