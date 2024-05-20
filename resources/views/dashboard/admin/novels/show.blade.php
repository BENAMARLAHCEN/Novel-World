@extends('dashboard.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="content-page wide-md m-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm mx-auto">
                <div class="nk-block-head-content text-center">
                    <h2 class="nk-block-title fw-normal">{{ $novel->title }}</h2>
                    <div class="nk-block-des">
                        <p class="lead">{{ $novel->user->profile->pen_name }}</p>
                        <p class="text-soft ff-italic"></p>
                        {{-- status --}}
                        <div class="badge badge-dim badge-custom badge-pill" style="background-color: #f0ad4e; color: #fff;">
                            {{ $novel->status }}
                        </div>

                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card">
                    <div data-testid="novel-details-card" class="NovelDetailsCard_wrapper__ciRz6">
                        <div class="NovelDetailsCard_cover___Dgnz">
                            <div class="BookCover_wrapper__GQBjr">
                                <div class="BookCover_image__2Qidm"><img alt="Book cover" fetchpriority="high" width="225"
                                        height="300" decoding="async" data-nimg="1" style="color:transparent"
                                        srcset="{{$novel->cover}} 1x, {{$novel->cover}} 2x"
                                        src="{{$novel->cover}}">
                                </div>
                                <div class="BookCover_labels__d7mhn"><span class="AlphaLabel AlphaLabel--primary">Updated</span>
                                </div>
                            </div>
                        </div>
                        <h1 class="NovelDetailsCard_title__v5Zec">{{ $novel->title }}</h1>
                        <div class="NovelDetailsCard_content__dna4J">
                            <ul class="NovelDetailsCard_info__sUazJ">
                                <li class="NovelDetailsCard_info__item__TSgp3"><span class="AlphaText--gray">Genre:</span> <a
                                        data-testid="novel-details-card-genre" class="NovelDetailsCard_info__link__5un1z"
                                        href="/novels/romance">{{$novel->user->profile->pen_name}}</a></li>
                                <li class="NovelDetailsCard_info__item__TSgp3"><span class="AlphaText--gray">Author:</span> <a
                                        data-testid="novel-details-card-author" class="NovelDetailsCard_info__link__5un1z"
                                        href="/authors/eilana-osorio-paez">{{$novel->user->profile->pen_name}}</a></li>
                                <li class="NovelDetailsCard_info__item__TSgp3"><span class="AlphaText--gray">Chapters:</span>
                                    <!-- -->{{$novel->chapters->count()}}</li>
                                <li class="NovelDetailsCard_info__item__TSgp3"><!-- --><span class="AlphaText--gray">Status:</span>
                                    {{$novel->status}}</li>
                                <li class="NovelDetailsCard_info__item__TSgp3"><span class="AlphaText--gray">Age Rating:</span>
                                    <!-- --><!-- -->18+</li>
                            </ul>
                            <ul class="NovelDetailsCard_stats__mfMYu">
                                <li class="NovelDetailsCard_stats__item__8vS2R">👁 <!-- -->{{
                                    $novel->chapters->sum('views') }}</li>
                                <li class="NovelDetailsCard_stats__item__8vS2R">⭐ <!-- -->9.7</li>
                                <li class="NovelDetailsCard_stats__item__8vS2R">💬 <!-- -->{{ $novel->reviews->count() }}
                            </ul>
                            <div class="NovelDetailsCard_description__A7VnD">
                                <h4 class="NovelDetailsCard_description__title__lGJME">Annotation</h4>
                                <p data-testid="novel-details-card-description"
                                    class="NovelDetailsCard_description--cropped__slt7_">Hay momentos en tu vida en donde pierdes
                                    criterio hasta de tus ideales, valores y por muy maquiavélico que parezca olvidas el futuro que
                                    habías proyectado con esa persona importante en tu vida. Todo ser humano tiene un periodo que
                                    lamentar, otros que levantar, y muchos que olvidar.
                                    En mi caso por caer en la monotonía creí que no la amaba y por esa mentira creada por mis
                                    inseguridades la perdí. No tengo a quién culpar, más que a mí mismo y por más que en silencio mi
                                    alma le grite cual arrepentido me encuentro. Su olvido solo me confirma que ya no le importo… O
                                    no me has olvidado y prefieres poner kilómetros entre nosotros y vivir Caminos separados.
                                    Espero y anhelo desde mi alma poder tener la oportunidad de pedirle perdón algún día, deseo que
                                    tú alcances la felicidad… esa que yo perdí. Es muy duro ser el culpable de tu desdicha, espero
                                    que donde quieras que te encuentres Belleza… Me perdones.</p><button
                                    data-testid="novel-details-card-description-toggle" type="button"
                                    class="NovelDetailsCard_description__button__2GaCm">more</button>
                            </div>
                            <div class="NovelDetailsCard_tags__tAubS no-scrollbar">
                                <nav data-testid="alpha-chips" class="AlphaChips"><a data-testid="alpha-chips-item"
                                        class="AlphaChipsItem" href="/tags/boss-ceo">Boss / CEO</a><a data-testid="alpha-chips-item"
                                        class="AlphaChipsItem" href="/tags/billionaire">Billionaire</a><a
                                        data-testid="alpha-chips-item" class="AlphaChipsItem"
                                        href="/tags/possessive">Possessive</a><a data-testid="alpha-chips-item"
                                        class="AlphaChipsItem" href="/tags/getting-back-together">Getting Back Together</a><a
                                        data-testid="alpha-chips-item" class="AlphaChipsItem" href="/tags/second-chances">Second
                                        Chances</a><a data-testid="alpha-chips-item" class="AlphaChipsItem"
                                        href="/tags/soulmates">Soulmates</a><a data-testid="alpha-chips-item" class="AlphaChipsItem"
                                        href="/tags/family">Family</a><a data-testid="alpha-chips-item" class="AlphaChipsItem"
                                        href="/tags/bxg">BxG</a><a data-testid="alpha-chips-item" class="AlphaChipsItem"
                                        href="/tags/fated-love">Fated Love</a><a data-testid="alpha-chips-item"
                                        class="AlphaChipsItem" href="/tags/dramatic">Dramatic</a><a data-testid="alpha-chips-item"
                                        class="AlphaChipsItem" href="/tags/overcoming">Overcoming</a><a
                                        data-testid="alpha-chips-item" class="AlphaChipsItem"
                                        href="/tags/contemporary">Contemporary</a></nav>
                            </div>
                        </div>
                        <div class="NovelDetailsCard_actions__4Ip9R"><button type="button" aria-label="Like icon"
                                data-testid="novel-details-card-like"
                                class="AlphaButton AlphaButton--outlined AlphaButton--md AlphaButton--icon"><span
                                    class="AlphaIcon AlphaButton__icon"><svg width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 9.68137C3 13.3358 6.30306 16.9301 11.5213 20.0184C11.7156 20.1299 11.9932 20.25 12.1875 20.25C12.3818 20.25 12.6594 20.1299 12.8629 20.0184C18.0719 16.9301 21.375 13.3358 21.375 9.68137C21.375 6.64461 19.1267 4.5 16.129 4.5C14.4173 4.5 13.0295 5.2549 12.1875 6.41299C11.364 5.26348 9.9577 4.5 8.24603 4.5C5.2483 4.5 3 6.64461 3 9.68137ZM4.48961 9.68137C4.48961 7.39951 6.081 5.88113 8.22753 5.88113C9.96696 5.88113 10.9662 6.8848 11.5583 7.74265C11.8082 8.08578 11.9654 8.18015 12.1875 8.18015C12.4096 8.18015 12.5483 8.07721 12.8167 7.74265C13.4551 6.90196 14.4173 5.88113 16.1475 5.88113C18.294 5.88113 19.8854 7.39951 19.8854 9.68137C19.8854 12.8725 16.2492 16.3125 12.3818 18.6973C12.2893 18.7574 12.2245 18.8002 12.1875 18.8002C12.1505 18.8002 12.0857 18.7574 12.0025 18.6973C8.12576 16.3125 4.48961 12.8725 4.48961 9.68137Z"
                                            fill="currentColor"></path>
                                    </svg></span></button><button type="button" aria-label="Share icon"
                                data-testid="novel-details-card-share"
                                class="AlphaButton AlphaButton--outlined AlphaButton--md AlphaButton--icon"><span
                                    class="AlphaIcon AlphaButton__icon"><svg width="17" height="17" viewBox="0 0 17 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.3537 16.7725H12.5853C13.3699 16.7725 13.9635 16.5766 14.3659 16.1848C14.7683 15.793 14.9695 15.2224 14.9695 14.4731V7.67053C14.9695 6.91632 14.7683 6.34577 14.3659 5.95887C13.9635 5.56707 13.3699 5.37118 12.5853 5.37118H10.6764V6.84041H12.4721C12.789 6.84041 13.0329 6.92122 13.204 7.08284C13.375 7.23956 13.4605 7.48198 13.4605 7.81011V14.3262C13.4605 14.6494 13.375 14.8918 13.204 15.0535C13.0329 15.2151 12.789 15.2959 12.4721 15.2959H4.46687C4.14998 15.2959 3.90603 15.2151 3.73501 15.0535C3.56902 14.8918 3.48602 14.6494 3.48602 14.3262V7.81011C3.48602 7.48198 3.56902 7.23956 3.73501 7.08284C3.90603 6.92122 4.14998 6.84041 4.46687 6.84041H6.28521V5.37118H4.3537C3.57405 5.37118 2.98051 5.56463 2.57308 5.95152C2.17068 6.33842 1.96948 6.91143 1.96948 7.67053V14.4731C1.96948 15.2224 2.17068 15.793 2.57308 16.1848C2.98051 16.5766 3.57405 16.7725 4.3537 16.7725ZM8.47325 11.1894C8.66439 11.1894 8.82787 11.1232 8.96368 10.991C9.10452 10.8539 9.17494 10.6972 9.17494 10.5209V3.57136L9.11458 2.54289L9.5371 3.06447L10.5029 4.06355C10.6286 4.19579 10.7845 4.2619 10.9706 4.2619C11.1417 4.2619 11.2875 4.20803 11.4083 4.10028C11.529 3.98764 11.5893 3.84807 11.5893 3.68155C11.5893 3.51994 11.5265 3.37546 11.4007 3.24813L9.00895 1.00754C8.91841 0.919385 8.82787 0.858166 8.73733 0.823884C8.65182 0.789602 8.56379 0.772461 8.47325 0.772461C8.37769 0.772461 8.28463 0.789602 8.19409 0.823884C8.10858 0.858166 8.02056 0.919385 7.93002 1.00754L5.5458 3.24813C5.41502 3.37546 5.34963 3.51994 5.34963 3.68155C5.34963 3.84807 5.40999 3.98764 5.53071 4.10028C5.65143 4.20803 5.79479 4.2619 5.96078 4.2619C6.15192 4.2619 6.31036 4.19579 6.43611 4.06355L7.40187 3.06447L7.82439 2.54289L7.76403 3.57136V10.5209C7.76403 10.6972 7.83193 10.8539 7.96774 10.991C8.10858 11.1232 8.27709 11.1894 8.47325 11.1894Z"
                                            fill="currentColor"></path>
                                    </svg></span></button></div>
                    </div>
                    <div class="card-inner card-inner-xl">
                        <div class="entry">
                            <img src="https://alphanovel.io/_next/image?url=https%3A%2F%2Fcdn.alphanovel.io%2Fbook-cover%2F030IHrSLT57KuqXrH8gS%2Ff26f1f52-2abd-49da-aec5-9f26af008a86_compressed.jpeg&w=640&q=75" alt="{{ $novel->title }}" class="mb-4">
                            <p>{{ $novel->description }}</p>
                        </div>
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div><!-- .content-page -->
    </div>

    <style>
        .BookCover_wrapper__GQBjr {
            position: relative;
            display: flex;
            height: 100%;
            color: var(--surface-medium)
        }

        .BookCover_image__2Qidm {
            flex: 1 1 auto;
            position: relative;
            display: flex
        }

        .BookCover_image__2Qidm img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 4px
        }

        .BookCover_placeholder__ouiJH {
            position: absolute;
            inset: 0;
            display: flex
        }

        .BookCover_labels__d7mhn {
            position: absolute;
            top: 8px;
            left: -4px;
            display: flex;
            flex-direction: column;
            gap: 8px
        }

        .BookCover_labels__d7mhn :nth-child(n+3) {
            display: none
        }

        .NovelDetailsCard_wrapper__ciRz6 {
            display: flex;
            flex-direction: column;
            background-color: var(--surface);
            border-radius: 8px;
            border: 1px solid var(--primary-disabled);
            display: grid;
            grid-template-columns: auto 1fr auto;
            grid-column-gap: 32px;
            grid-template-areas: "cover title actions" "cover content content";
            align-items: flex-start;
            padding: 32px
        }

        @media(max-width: 991.98px) {
            .NovelDetailsCard_wrapper__ciRz6 {
                grid-column-gap: 16px;
                padding: 16px
            }
        }

        @media(max-width: 767.98px) {
            .NovelDetailsCard_wrapper__ciRz6 {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 0 8px;
                background-color: transparent;
                border: none
            }

            .NovelDetailsCard_wrapper--preview__Pkt4i .NovelDetailsCard_description__A7VnD,
            .NovelDetailsCard_wrapper--preview__Pkt4i .NovelDetailsCard_stats__mfMYu,
            .NovelDetailsCard_wrapper--preview__Pkt4i .NovelDetailsCard_tags__tAubS {
                display: none
            }
        }

        .NovelDetailsCard_wrapper--preview__Pkt4i .NovelDetailsCard_title__v5Zec:hover {
            color: var(--primary-1)
        }

        .NovelDetailsCard_wrapper__ciRz6 .AlphaContainer__wrapper {
            margin-top: 0
        }

        .NovelDetailsCard_actions__4Ip9R {
            grid-area: actions;
            display: flex;
            align-items: center;
            gap: 16px;
            width: 100%
        }

        @media(max-width: 767.98px) {
            .NovelDetailsCard_actions__4Ip9R {
                justify-content: center
            }

            .NovelDetailsCard_actions__4Ip9R .AlphaButton {
                max-width: 320px;
                min-width: unset;
                width: 100%
            }
        }

        .NovelDetailsCard_cover___Dgnz {
            grid-area: cover;
            flex-shrink: 0;
            width: 225px;
            height: 300px
        }

        @media(max-width: 991.98px) {
            .NovelDetailsCard_cover___Dgnz {
                width: 142px;
                height: 190px
            }
        }

        .NovelDetailsCard_cover___Dgnz img {
            border-radius: 8px
        }

        @media(max-width: 991.98px) {
            .NovelDetailsCard_cover___Dgnz img {
                border-radius: 4px
            }
        }

        .NovelDetailsCard_title__v5Zec {
            position: relative;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
            font-weight: 600;
            font-size: 31px;
            line-height: 40px;
            grid-area: title;
            color: var(--text);
            transition: color .3s ease-in-out
        }

        @media(max-width: 991.98px) {
            .NovelDetailsCard_title__v5Zec {
                font-size: 18px;
                line-height: 24px;
                position: relative;
                font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
                font-weight: 600;
                font-size: 39px;
                line-height: 48px
            }
        }

        @media(max-width: 991.98px)and (max-width:991.98px) {
            .NovelDetailsCard_title__v5Zec {
                font-size: 20px;
                line-height: 28px
            }
        }

        @media(max-width: 767.98px) {
            .NovelDetailsCard_title__v5Zec {
                margin-top: 16px;
                text-align: center
            }
        }

        .NovelDetailsCard_content__dna4J {
            grid-area: content;
            display: flex;
            flex-direction: column;
            margin-top: 8px
        }

        @media(max-width: 767.98px) {
            .NovelDetailsCard_content__dna4J {
                align-items: center;
                max-width: 100%;
                width: 100%
            }
        }

        .NovelDetailsCard_info__sUazJ {
            display: flex;
            gap: 4px 16px;
            margin: 0 0 24px;
            padding: 0;
            list-style: none
        }

        @media(max-width: 991.98px) {
            .NovelDetailsCard_info__sUazJ {
                margin-bottom: 16px
            }
        }

        @media(max-width: 767.98px) {
            .NovelDetailsCard_info__sUazJ {
                flex-wrap: wrap;
                justify-content: center;
                gap: 2px 4px
            }
        }

        .NovelDetailsCard_info__item__TSgp3 {
            font-size: 14px;
            line-height: 22px;
            font-weight: 400
        }

        @media(max-width: 991.98px) {
            .NovelDetailsCard_info__item__TSgp3 {
                font-size: 12px;
                line-height: 20px
            }
        }

        @media(max-width: 767.98px) {
            .NovelDetailsCard_info__item__TSgp3 {
                color: var(--surface-on-3)
            }
        }

        .NovelDetailsCard_info__link__5un1z {
            color: var(--text);
            transition: color .3s ease-in-out
        }

        @media(max-width: 767.98px) {
            .NovelDetailsCard_info__link__5un1z {
                color: var(--surface-on-3)
            }
        }

        .NovelDetailsCard_info__link__5un1z:hover {
            color: var(--primary-1)
        }

        .NovelDetailsCard_info__break__ao__o {
            width: 100%
        }

        .NovelDetailsCard_stats__mfMYu {
            display: flex;
            gap: 24px;
            width: 100%;
            margin: 0 0 24px;
            padding: 0;
            list-style: none
        }

        @media(max-width: 991.98px) {
            .NovelDetailsCard_stats__mfMYu {
                margin-bottom: 16px
            }
        }

        @media(max-width: 767.98px) {
            .NovelDetailsCard_stats__mfMYu {
                display: flex;
                flex-direction: column;
                background-color: var(--surface);
                border-radius: 8px;
                border: 1px solid var(--primary-disabled);
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-gap: 0;
                gap: 0;
                padding: 8px 0;
                text-align: center;
                border-radius: 12px
            }
        }

        .NovelDetailsCard_stats__item__8vS2R {
            position: relative;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 32px;
            white-space: nowrap
        }

        @media(max-width: 991.98px) {
            .NovelDetailsCard_stats__item__8vS2R {
                font-size: 16px;
                line-height: 24px;
                position: relative;
                font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
                font-weight: 600;
                font-size: 39px;
                line-height: 48px
            }
        }

        @media(max-width: 991.98px)and (max-width:991.98px) {
            .NovelDetailsCard_stats__item__8vS2R {
                font-size: 20px;
                line-height: 28px
            }
        }

        @media(max-width: 767.98px) {
            .NovelDetailsCard_stats__item__8vS2R {
                padding: 8px
            }

            .NovelDetailsCard_stats__item__8vS2R:not(:last-child) {
                border-right: 1px solid var(--primary-disabled)
            }
        }

        .NovelDetailsCard_tags__tAubS {
            width: 100%
        }

        @media(max-width: 767.98px) {
            .NovelDetailsCard_tags__tAubS {
                width: calc(100% + 32px);
                padding: 0 16px;
                overflow: auto
            }

            .NovelDetailsCard_tags__tAubS .AlphaChips {
                flex-wrap: nowrap
            }

            .NovelDetailsCard_tags__tAubS .AlphaChipsItem {
                background-color: var(--surface-medium)
            }
        }

        .NovelDetailsCard_description__A7VnD {
            font-size: 14px;
            line-height: 22px;
            font-weight: 400;
            margin-bottom: 24px;
            width: 100%
        }

        @media(max-width: 991.98px) {
            .NovelDetailsCard_description__A7VnD {
                font-size: 12px;
                line-height: 20px;
                margin-bottom: 16px
            }
        }

        .NovelDetailsCard_description__title__lGJME {
            position: relative;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
            font-weight: 600;
            font-size: 26px;
            line-height: 36px;
            display: none;
            margin-bottom: 8px
        }

        @media(max-width: 991.98px) {
            .NovelDetailsCard_description__title__lGJME {
                font-size: 16px;
                line-height: 24px
            }
        }

        @media(max-width: 767.98px) {
            .NovelDetailsCard_description__title__lGJME {
                display: block
            }
        }

        .NovelDetailsCard_description__button__2GaCm {
            padding: 0;
            color: var(--primary-1);
            background-color: transparent;
            border: 0;
            cursor: pointer
        }

        .NovelDetailsCard_description__button__2GaCm:hover {
            color: var(--primary-2)
        }

        .NovelDetailsCard_description--cropped__slt7_ {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden
        }

        @media(max-width: 767.98px) {
            .NovelDetailsCard_description--cropped__slt7_ {
                -webkit-line-clamp: 4
            }
        }

    </style>
    {{-- <style>
        
        .DownloadApp_wrapper__xdn_w {
            display: flex;
            align-items: center;
            gap: 32px;
            padding: 32px;
            color: var(--white);
            background-color: var(--primary-1);
            border-radius: 8px
        }

        @media(max-width: 991.98px) {
            .DownloadApp_wrapper__xdn_w {
                padding: 32px 16px
            }
        }

        @media(max-width: 575.98px) {
            .DownloadApp_wrapper__xdn_w {
                flex-direction: column;
                gap: 16px;
                text-align: center
            }
        }

        .DownloadApp_container__jc2yQ {
            flex: 1 1 auto;
            display: flex;
            flex-direction: column
        }

        @media(max-width: 575.98px) {
            .DownloadApp_container__jc2yQ {
                align-items: center
            }
        }

        .DownloadApp_content__IUqmJ {
            max-width: 520px;
            margin-bottom: 16px
        }

        @media(max-width: 575.98px) {
            .DownloadApp_content__IUqmJ {
                max-width: 400px;
                margin-bottom: 24px
            }
        }

        .DownloadApp_image__GXVeg {
            width: 150px;
            height: 180px
        }

        @media(max-width: 575.98px) {
            .DownloadApp_image__GXVeg {
                width: 300px;
                height: 350px
            }
        }

        .DownloadApp_title__cCBfY {
            position: relative;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 32px;
            margin-bottom: 16px
        }

        @media(max-width: 991.98px) {
            .DownloadApp_title__cCBfY {
                font-size: 16px;
                line-height: 24px;
                position: relative;
                font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
                font-weight: 600;
                font-size: 39px;
                line-height: 48px
            }
        }

        @media(max-width: 991.98px)and (max-width:991.98px) {
            .DownloadApp_title__cCBfY {
                font-size: 20px;
                line-height: 28px
            }
        }

        .DownloadApp_text__X5l_o {
            font-size: 14px;
            line-height: 22px;
            font-weight: 400;
            color: var(--surface-on-4)
        }

        @media(max-width: 991.98px) {
            .DownloadApp_text__X5l_o {
                font-size: 12px;
                line-height: 20px;
                font-size: 16px;
                line-height: 28px;
                font-weight: 400
            }
        }

        @media(max-width: 991.98px)and (max-width:991.98px) {
            .DownloadApp_text__X5l_o {
                font-size: 14px;
                line-height: 20px
            }
        }

        .DownloadApp_links__4TiiR {
            display: flex;
            align-items: center;
            gap: 24px
        }

        @media(max-width: 991.98px) {
            .DownloadApp_links__4TiiR {
                display: none
            }
        }

        .DownloadApp_button__x27Ad {
            display: none;
            width: 100%
        }

        @media(max-width: 991.98px) {
            .DownloadApp_button__x27Ad {
                display: flex;
                max-width: 200px
            }
        }

        @media(max-width: 575.98px) {
            .DownloadApp_button__x27Ad {
                max-width: 320px
            }
        }

        .DownloadApp_code__d1hnQ {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 200px;
            width: 100%;
            text-align: center
        }

        @media(max-width: 991.98px) {
            .DownloadApp_code__d1hnQ {
                display: none
            }
        }

        .DownloadApp_code__text__kJz8s {
            font-size: 12px;
            line-height: 20px;
            font-weight: 400;
            margin-top: 4px;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif
        }

        .NovelDetailsChapters_wrapper__SuHNu {
            display: flex;
            flex-direction: column;
            align-items: center;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        @media(max-width: 767.98px) {
            .NovelDetailsChapters_wrapper__SuHNu {
                padding: 0 8px
            }
        }

        .NovelDetailsChapters_block__KcNpi:not(:first-child) {
            display: none
        }

        .NovelDetailsChapters_actions__gFd0p {
            display: flex;
            justify-content: center;
            margin-top: 32px;
            width: 100%
        }

        .NovelDetailsChapters_actions__gFd0p .AlphaButton {
            min-width: 240px
        }

        @media(max-width: 767.98px) {
            .NovelDetailsChapters_actions__gFd0p .AlphaButton {
                max-width: 320px;
                min-width: unset;
                width: 100%
            }
        }

        .NovelDetailsChapters_title__WF0jq {
            position: relative;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 32px;
            margin-bottom: 32px;
            text-align: center
        }

        @media(max-width: 991.98px) {
            .NovelDetailsChapters_title__WF0jq {
                font-size: 16px;
                line-height: 24px;
                position: relative;
                font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
                font-weight: 600;
                font-size: 31px;
                line-height: 40px;
                margin-bottom: 24px
            }
        }

        @media(max-width: 991.98px)and (max-width:991.98px) {
            .NovelDetailsChapters_title__WF0jq {
                font-size: 18px;
                line-height: 24px
            }
        }

        .NovelDetailsChapters_content__VyNU2 {
            max-width: 1200px;
            font-size: 16px;
            line-height: 28px;
            font-weight: 400
        }

        .NovelDetailsChapters_content__VyNU2 p {
            margin: 0 0 16px;
            text-indent: 20px
        }

        .NovelDetailsChapters_content__VyNU2 blockquote {
            margin: 0 0 16px;
            padding-left: 20px;
            border-left: 2px solid var(--surface-on-3)
        }

        .ReviewCard_wrapper__egWh_ {
            display: flex;
            flex-direction: column;
            background-color: var(--surface);
            border-radius: 8px;
            border: 1px solid var(--primary-disabled);
            display: grid;
            grid-template-columns: 1fr auto;
            grid-template-areas: "header actions report" "content content content";
            grid-gap: 24px 16px;
            align-items: flex-start;
            padding: 24px
        }

        @media(max-width: 991.98px) {
            .ReviewCard_wrapper__egWh_ {
                grid-gap: 16px;
                padding: 16px
            }
        }

        @media(max-width: 767.98px) {
            .ReviewCard_wrapper__egWh_ {
                grid-template-areas: "header report" "content content" "actions actions"
            }
        }

        .ReviewCard_wrapper--sm__vnyZG {
            grid-template-areas: "header report" "content content";
            grid-gap: 16px;
            padding: 16px
        }

        .ReviewCard_wrapper--sm__vnyZG .ReviewCard_date__Duxp3 {
            display: none
        }

        .ReviewCard_avatar__WH_1c {
            height: 48px;
            width: 48px;
            color: var(--surface-medium);
            border-radius: 50%;
            overflow: hidden
        }

        @media(max-width: 991.98px) {
            .ReviewCard_avatar__WH_1c {
                height: 36px;
                width: 36px
            }
        }

        .ReviewCard_header__h_S_g {
            grid-area: header;
            display: flex;
            align-items: center;
            gap: 24px
        }

        @media(max-width: 991.98px) {
            .ReviewCard_header__h_S_g {
                gap: 16px
            }
        }

        .ReviewCard_cover__bsURR {
            flex-shrink: 0;
            width: 40px;
            height: 56px
        }

        @media(max-width: 991.98px) {
            .ReviewCard_cover__bsURR {
                width: 26px;
                height: 36px
            }
        }

        .ReviewCard_title__u3mCv {
            position: relative;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
            font-weight: 600;
            font-size: 20px;
            line-height: 28px;
            color: var(--text);
            transition: color .3s ease-in-out
        }

        @media(max-width: 991.98px) {
            .ReviewCard_title__u3mCv {
                font-size: 14px;
                line-height: 20px
            }
        }

        .ReviewCard_title__u3mCv:hover {
            color: var(--primary-1)
        }

        .ReviewCard_author__u5X_I {
            font-size: 14px;
            line-height: 22px;
            font-weight: 400;
            color: var(--surface-on-2);
            transition: color .3s ease-in-out
        }

        @media(max-width: 991.98px) {
            .ReviewCard_author__u5X_I {
                font-size: 12px;
                line-height: 20px
            }
        }

        .ReviewCard_author__u5X_I:hover {
            color: var(--primary-1)
        }

        .ReviewCard_status__YtaOq {
            font-size: 14px;
            line-height: 22px;
            font-weight: 400;
            color: var(--surface-on-2)
        }

        @media(max-width: 991.98px) {
            .ReviewCard_status__YtaOq {
                font-size: 12px;
                line-height: 20px
            }
        }

        .ReviewCard_actions__vW7Yo {
            grid-area: actions;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 16px
        }

        .ReviewCard_actions__vW7Yo .AlphaButton {
            max-width: 140px
        }

        @media(max-width: 575.98px) {
            .ReviewCard_actions__vW7Yo .AlphaButton {
                max-width: unset
            }
        }

        .ReviewCard_content__yo5Q0 {
            grid-area: content;
            display: flex;
            flex-direction: column;
            gap: 16px
        }

        .ReviewCard_description__yl4e7 {
            font-size: 16px;
            line-height: 28px;
            font-weight: 400;
            width: 100%;
            color: var(--text)
        }

        @media(max-width: 991.98px) {
            .ReviewCard_description__yl4e7 {
                font-size: 14px;
                line-height: 20px
            }
        }

        .ReviewCard_description__text__llmFK {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden
        }

        .ReviewCard_date__Duxp3 {
            font-size: 14px;
            line-height: 22px;
            font-weight: 400;
            color: var(--surface-on-2)
        }

        @media(max-width: 991.98px) {
            .ReviewCard_date__Duxp3 {
                font-size: 12px;
                line-height: 20px
            }
        }

        .ReviewCard_like__wB_6P {
            display: flex;
            align-items: center;
            gap: 16px
        }

        .ReviewCard_report__CsKaJ {
            grid-area: report
        }

        .NovelDetailsReviews_wrapper__K3Ca6 {
            display: flex;
            flex-direction: column;
            background-color: var(--surface);
            border-radius: 8px;
            border: 1px solid var(--primary-disabled);
            gap: 24px;
            padding: 24px 0
        }

        @media(max-width: 991.98px) {
            .NovelDetailsReviews_wrapper__K3Ca6 {
                gap: 16px;
                padding: 0;
                background-color: transparent;
                border: none
            }
        }

        .NovelDetailsReviews_header__bONdv {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px
        }

        @media(max-width: 991.98px) {
            .NovelDetailsReviews_header__bONdv {
                padding: 0 8px
            }
        }

        .NovelDetailsReviews_header__bONdv .AlphaButton {
            min-width: 115px
        }

        @media(max-width: 991.98px) {
            .NovelDetailsReviews_header__bONdv .AlphaButton {
                min-width: unset
            }
        }

        .NovelDetailsReviews_title__CGab4 {
            position: relative;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 32px
        }

        @media(max-width: 991.98px) {
            .NovelDetailsReviews_title__CGab4 {
                font-size: 16px;
                line-height: 24px
            }
        }

        .NovelDetailsReviews_list__YFCgh {
            display: flex;
            gap: 24px;
            overflow: auto;
            padding: 0 32px
        }

        @media(max-width: 991.98px) {
            .NovelDetailsReviews_list__YFCgh {
                gap: 8px;
                padding: 0 8px
            }
        }

        .NovelDetailsReviews_item__TY6Yz {
            flex: 0 0 420px
        }

        @media(max-width: 991.98px) {
            .NovelDetailsReviews_item__TY6Yz {
                flex: 0 0 330px
            }
        }

        .NovelDetailsSuggestions_wrapper__XPCf9 {
            display: flex;
            flex-direction: column;
            background-color: var(--surface);
            border-radius: 8px;
            border: 1px solid var(--primary-disabled);
            padding: 24px 0
        }

        .NovelDetailsSuggestions_title__zJ4iQ {
            position: relative;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 32px;
            margin-bottom: 24px;
            padding: 0 32px
        }

        @media(max-width: 991.98px) {
            .NovelDetailsSuggestions_title__zJ4iQ {
                font-size: 16px;
                line-height: 24px;
                padding: 0 16px
            }
        }

        .NovelDetailsSuggestions_list__C2UHy {
            display: flex;
            gap: 28px;
            padding: 0 32px;
            overflow: auto
        }

        @media(max-width: 991.98px) {
            .NovelDetailsSuggestions_list__C2UHy {
                gap: 16px;
                padding: 0 16px
            }
        }

        .NovelDetailsSuggestions_item__1WLEn {
            font-size: 12px;
            line-height: 20px;
            font-weight: 400;
            flex: 0 0 120px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            height: 100%;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
            color: var(--text);
            transition: color .3s ease-in-out
        }

        .NovelDetailsSuggestions_item__1WLEn:hover {
            color: var(--primary-1)
        }

        .NovelDetails_card__SMcs0 {
            margin-bottom: 56px
        }

        @media(max-width: 991.98px) {
            .NovelDetails_card__SMcs0 {
                margin-bottom: 48px
            }
        }

        .NovelDetails_chapters__uo0d2 {
            margin-bottom: 88px
        }

        @media(max-width: 991.98px) {
            .NovelDetails_chapters__uo0d2 {
                margin-bottom: 56px
            }
        }

        .NovelDetails_reviews__GcDsl {
            margin-bottom: 24px
        }

        @media(max-width: 991.98px) {
            .NovelDetails_reviews__GcDsl {
                margin-bottom: 16px
            }
        }

        .NovelDetails_suggestions__VMnN7 {
            margin-bottom: 24px
        }

        @media(max-width: 991.98px) {
            .NovelDetails_suggestions__VMnN7 {
                margin-bottom: 0
            }

            .NovelDetails_download__nBqRW {
                display: none
            }
        }

        .BookCard_wrapper__qLA53 {
            display: flex;
            flex-direction: column;
            background-color: var(--surface);
            border-radius: 8px;
            border: 1px solid var(--primary-disabled);
            display: grid;
            grid-template-columns: auto 1fr auto;
            grid-column-gap: 32px;
            grid-template-areas: "cover title actions" "cover content content";
            align-items: flex-start;
            padding: 32px
        }

        @media(max-width: 991.98px) {
            .BookCard_wrapper__qLA53 {
                grid-column-gap: 16px;
                padding: 16px
            }
        }

        @media(max-width: 767.98px) {
            .BookCard_wrapper--md__VPHAM .BookCard_actions__innzE {
                display: none
            }
        }

        .BookCard_wrapper--sm___smf_ {
            grid-column-gap: 24px;
            padding: 16px
        }

        @media(max-width: 991.98px) {
            .BookCard_wrapper--sm___smf_ {
                grid-column-gap: 16px
            }
        }

        @media(max-width: 767.98px) {
            .BookCard_wrapper--sm___smf_ {
                grid-template-areas: "cover title title" "cover content content" "actions actions actions"
            }
        }

        .BookCard_wrapper--sm___smf_ .BookCard_cover__IuQUA {
            width: 112px;
            height: 150px
        }

        @media(max-width: 991.98px) {
            .BookCard_wrapper--sm___smf_ .BookCard_cover__IuQUA {
                width: 90px;
                height: 120px
            }
        }

        .BookCard_wrapper--sm___smf_ .BookCard_stats__R8xPp {
            display: none
        }

        @media(max-width: 575.98px) {
            .BookCard_wrapper--sm___smf_ .BookCard_info__item__fLs7_:not(:first-child) {
                display: none
            }
        }

        .BookCard_content__qJBD8 {
            grid-area: content;
            display: flex;
            flex-direction: column;
            max-width: 100%;
            width: 100%
        }

        .BookCard_actions__innzE {
            grid-area: actions;
            display: flex;
            gap: 16px
        }

        @media(max-width: 767.98px) {
            .BookCard_actions__innzE {
                flex-direction: row-reverse;
                justify-content: flex-end;
                margin-top: 16px
            }
        }

        .BookCard_actions__innzE .AlphaButton {
            max-width: 180px
        }

        @media(max-width: 575.98px) {
            .BookCard_actions__innzE .AlphaButton {
                max-width: unset
            }
        }

        .BookCard_cover__IuQUA {
            grid-area: cover;
            flex-shrink: 0;
            width: 142px;
            height: 190px
        }

        @media(max-width: 991.98px) {
            .BookCard_cover__IuQUA {
                width: 90px;
                height: 120px
            }
        }

        .BookCard_title__M_Rik {
            position: relative;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 32px;
            margin-bottom: 16px;
            color: var(--text);
            transition: color .3s ease-in-out
        }

        @media(max-width: 991.98px) {
            .BookCard_title__M_Rik {
                font-size: 16px;
                line-height: 24px;
                position: relative;
                font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
                font-weight: 600;
                font-size: 20px;
                line-height: 28px;
                margin-bottom: 4px
            }
        }

        @media(max-width: 991.98px)and (max-width:991.98px) {
            .BookCard_title__M_Rik {
                font-size: 14px;
                line-height: 20px
            }
        }

        .BookCard_title__M_Rik:hover {
            color: var(--primary-1)
        }

        .BookCard_title__wrapper__s5PBj {
            grid-area: title
        }

        .BookCard_info__gLlXH {
            display: flex;
            flex-wrap: wrap;
            gap: 4px 16px;
            margin: 0 0 16px;
            padding: 0;
            list-style: none
        }

        @media(max-width: 991.98px) {
            .BookCard_info__gLlXH {
                column-gap: 8px;
                margin-bottom: 8px
            }
        }

        .BookCard_info__item__fLs7_ {
            font-size: 14px;
            line-height: 22px;
            font-weight: 400
        }

        @media(max-width: 991.98px) {
            .BookCard_info__item__fLs7_ {
                font-size: 12px;
                line-height: 20px
            }
        }

        .BookCard_info__link__E6n6n {
            color: var(--text);
            transition: color .3s ease-in-out
        }

        .BookCard_info__link__E6n6n:hover {
            color: var(--primary-1)
        }

        .BookCard_stats__R8xPp {
            display: flex;
            gap: 24px;
            width: 100%;
            margin: 0 0 16px;
            padding: 0;
            list-style: none
        }

        @media(max-width: 991.98px) {
            .BookCard_stats__R8xPp {
                gap: 16px;
                margin-bottom: 8px
            }
        }

        .BookCard_stats__item__3jnoN {
            position: relative;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 32px;
            white-space: nowrap
        }

        @media(max-width: 991.98px) {
            .BookCard_stats__item__3jnoN {
                font-size: 16px;
                line-height: 24px;
                position: relative;
                font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
                font-weight: 600;
                font-size: 20px;
                line-height: 28px
            }
        }

        @media(max-width: 991.98px)and (max-width:991.98px) {
            .BookCard_stats__item__3jnoN {
                font-size: 14px;
                line-height: 20px
            }
        }

        .BookCard_description__T4Wv5 {
            font-size: 12px;
            line-height: 20px;
            font-weight: 400;
            width: 100%;
            color: var(--text)
        }

        .BookCard_description__text__7vO_g {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden
        }

        .NovelDetailsNotFound_title___xsgK {
            position: relative;
            font-family: var(--font-poppins), "Roboto", "Arial", sans-serif;
            font-weight: 600;
            font-size: 31px;
            line-height: 40px;
            margin-bottom: 24px;
            margin-top: 32px
        }

        @media(max-width: 991.98px) {
            .NovelDetailsNotFound_title___xsgK {
                font-size: 18px;
                line-height: 24px;
                margin-top: 24px;
                margin-bottom: 16px
            }
        }

        .NovelDetailsNotFound_list__57hf_ {
            flex: 1 1 auto;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 16px
        }

        @media(max-width: 991.98px) {
            .NovelDetailsNotFound_list__57hf_ {
                gap: 8px
            }
        }
    </style>

    <style>
        @charset "UTF-8";/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
html {
    line-height: 1.15;
    -webkit-text-size-adjust: 100%
}

body {
    margin: 0
}

main {
    display: block
}

h1 {
    font-size: 2em;
    margin: .67em 0
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible
}

pre {
    font-family: monospace,monospace;
    font-size: 1em
}

a {
    background-color: transparent
}

abbr[title] {
    border-bottom: none;
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted
}

b,strong {
    font-weight: bolder
}

code,kbd,samp {
    font-family: monospace,monospace;
    font-size: 1em
}

small {
    font-size: 80%
}

sub,sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

img {
    border-style: none
}

button,input,optgroup,select,textarea {
    font-family: inherit;
    font-size: 100%;
    line-height: 1.15;
    margin: 0
}

button,input {
    overflow: visible
}

button,select {
    text-transform: none
}

[type=button],[type=reset],[type=submit],button {
    -webkit-appearance: button
}

[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner {
    border-style: none;
    padding: 0
}

[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring {
    outline: 1px dotted ButtonText
}

fieldset {
    padding: .35em .75em .625em
}

legend {
    box-sizing: border-box;
    color: inherit;
    display: table;
    max-width: 100%;
    padding: 0;
    white-space: normal
}

progress {
    vertical-align: baseline
}

textarea {
    overflow: auto
}

[type=checkbox],[type=radio] {
    box-sizing: border-box;
    padding: 0
}

[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button {
    height: auto
}

[type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px
}

[type=search]::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit
}

details {
    display: block
}

summary {
    display: list-item
}

[hidden],template {
    display: none
}

@keyframes fill-in {
    0% {
        width: 0
    }

    to {
        width: 100%
    }
}

@keyframes fill-out {
    0% {
        width: 0
    }

    to {
        width: 100%
    }
}

@keyframes fade-in {
    0% {
        opacity: 0
    }

    to {
        opacity: 1
    }
}

@keyframes fade-out {
    0% {
        opacity: 1
    }

    to {
        opacity: 0
    }
}

@keyframes fade-in-down {
    0% {
        opacity: 0;
        transform: translateY(-20px)
    }

    to {
        opacity: 1;
        transform: translateY(0)
    }
}

@keyframes fade-out-down {
    0% {
        opacity: 1;
        transform: translateY(0)
    }

    to {
        opacity: 0;
        transform: translateY(-20px)
    }
}

@keyframes fade-in-up {
    0% {
        opacity: 0;
        transform: translateY(20px)
    }

    to {
        opacity: 1;
        transform: translateY(0)
    }
}

@keyframes fade-out-up {
    0% {
        opacity: 1;
        transform: translateY(0)
    }

    to {
        opacity: 0;
        transform: translateY(20px)
    }
}

@keyframes fade-in-left {
    0% {
        opacity: 0;
        transform: translate(-80px)
    }

    to {
        opacity: 1;
        transform: translate(0)
    }
}

@keyframes fade-out-left {
    0% {
        opacity: 1;
        transform: translate(0)
    }

    to {
        opacity: 0;
        transform: translate(-80px)
    }
}

@keyframes fade-in-right {
    0% {
        opacity: 0;
        transform: translate(80px)
    }

    to {
        opacity: 1;
        transform: translate(0)
    }
}

@keyframes fade-out-right {
    0% {
        opacity: 1;
        transform: translate(0)
    }

    to {
        opacity: 0;
        transform: translate(80px)
    }
}

@keyframes scale-in {
    0% {
        opacity: 0;
        transform: scale(0)
    }

    to {
        opacity: 1;
        transform: scale(1)
    }
}

@keyframes scale-out {
    0% {
        opacity: 1;
        transform: scale(1)
    }

    to {
        opacity: 0;
        transform: scale(0)
    }
}

@keyframes zoom-in {
    0% {
        opacity: 0;
        transform: scale(0)
    }

    to {
        transform: scale(1)
    }
}

@keyframes bounce-in {
    0% {
        opacity: 0;
        transform: scale(.3)
    }

    50% {
        opacity: 1;
        transform: scale(1.05)
    }

    70% {
        transform: scale(.9)
    }

    to {
        transform: scale(1)
    }
}

.light-theme,:root {
    --white: #fff;
    --black: #04002d;
    --success: #05b888;
    --text: #04002d;
    --primary-1: #4535ff;
    --primary-2: #2618c7;
    --primary-3: #0c0093;
    --primary-on-high: #fff;
    --primary-on-medium: #fff;
    --primary-on-disabled: #fff;
    --primary-disabled: #f3f3f3;
    --secondary-1: #ef96a7;
    --secondary-2: #ed758c;
    --secondary-3: #dd6c81;
    --danger-1: #cc0025;
    --danger-2: #ba0022;
    --danger-3: #ac001f;
    --google-button-1: #f8f8f8;
    --google-button-2: #f2f2f2;
    --apple-button-1: #000;
    --apple-button-2: #232323;
    --apple-button-text: #fff;
    --highlighter: #f7f661;
    --highlighter-disabled: #c2c10d;
    --background: #fafbff;
    --surface: #fff;
    --surface-success: #ffffe1;
    --surface-error: #ffe9ed;
    --surface-warning: #fffdcc;
    --surface-light: #f9f9ff;
    --surface-medium: #f1f1ff;
    --surface-on-1: #04002d;
    --surface-on-2: #686681;
    --surface-on-3: #a09eaf;
    --surface-on-4: #e6e6ea;
    --backdrop: rgba(0,0,0,.3);
    --logo: #4535ff
}

.dark-theme {
    --white: #fff;
    --black: #04002d;
    --success: #05b888;
    --text: #e2e2e2;
    --primary-1: #7a6fff;
    --primary-2: #5144f3;
    --primary-3: #3122e9;
    --primary-on-high: #e0e0e0;
    --primary-on-medium: #a0a0a0;
    --primary-on-disabled: #6c6c6c;
    --primary-disabled: #363636;
    --secondary-1: #ef96a7;
    --secondary-2: #ee6882;
    --secondary-3: #d44963;
    --danger-1: #e92448;
    --danger-2: #b41431;
    --danger-3: #9b011d;
    --google-button-1: #2b2b2c;
    --google-button-2: #464647;
    --apple-button-1: #fff;
    --apple-button-2: #e8e8e8;
    --apple-button-text: #000;
    --highlighter: #f7f661;
    --highlighter-disabled: #c2c10d;
    --background: #121212;
    --surface: #202020;
    --surface-success: #4d4c32;
    --surface-error: #35000a;
    --surface-warning: #202020;
    --surface-light: #2b2b2c;
    --surface-medium: #464647;
    --surface-on-1: #e0e0e0;
    --surface-on-2: #a0a0a0;
    --surface-on-3: #6c6c6c;
    --surface-on-4: #2a2a2a;
    --backdrop: rgba(0,0,0,.7);
    --logo: #fff
}

.position-static {
    position: static
}

.position-relative {
    position: relative
}

.position-absolute {
    position: absolute
}

.position-fixed {
    position: fixed
}

.position-sticky {
    position: -webkit-sticky;
    position: sticky
}

.flex-row {
    display: flex;
    flex-direction: row
}

.flex-column {
    display: flex;
    flex-direction: column
}

.jc-start {
    justify-content: flex-start
}

.jc-end {
    justify-content: flex-end
}

.jc-center {
    justify-content: center
}

.jc-between {
    justify-content: space-between
}

.jc-around {
    justify-content: space-around
}

.ai-start {
    align-items: flex-start
}

.ai-end {
    align-items: flex-end
}

.ai-center {
    align-items: center
}

.ai-stretch {
    align-items: stretch
}

html {
    font-size: 100%
}

body {
    font-family: var(--font-open-sans),Roboto,Arial,sans-serif;
    font-weight: 500;
    font-size: 16px;
    color: var(--text);
    background-color: var(--background)
}

#root,body,html {
    max-height: 100%;
    height: 100%
}

* {
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent
}

h1,h2,h3,h4,h5,h6,p {
    margin: 0
}

button {
    outline: none
}

a {
    color: var(--primary-1);
    text-decoration: none
}

input[type=number] {
    -webkit-appearance: textfield;
    appearance: textfield
}

input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    appearance: none;
    margin: 0
}

.no-scroll {
    overflow: hidden
}

.no-transition * {
    transition: none!important
}

.no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none
}

.no-scrollbar::-webkit-scrollbar {
    display: none
}

.AlphaCheckboxGroup {
    display: flex;
    flex-direction: column
}

@media (max-width: 991.98px) {
    .AlphaCheckboxGroup {
        align-items:center
    }
}

.AlphaCheckboxGroup__list {
    display: flex;
    flex-wrap: wrap
}

@media (max-width: 991.98px) {
    .AlphaCheckboxGroup__list {
        justify-content:center
    }
}

.AlphaCheckboxGroup--md .AlphaCheckboxGroup__list {
    gap: 24px
}

@media (max-width: 991.98px) {
    .AlphaCheckboxGroup--md .AlphaCheckboxGroup__list {
        gap:8px
    }
}

.AlphaCheckboxGroup--sm .AlphaCheckboxGroup__list {
    gap: 8px
}

.AlphaCheckboxGroup--disabled .AlphaCheckbox:not(.AlphaCheckbox--checked) {
    pointer-events: none;
    color: var(--surface-on-3)
}

@media (max-width: 575.98px) {
    .AlphaCheckboxGroup--hide-mobile .AlphaCheckbox:nth-child(n+16) {
        display:none
    }
}

.AlphaCheckboxGroup .AlphaButton {
    display: none;
    min-width: 100px;
    margin-top: 24px
}

@media (max-width: 575.98px) {
    .AlphaCheckboxGroup .AlphaButton {
        display:inline-flex
    }
}

.AlphaChips {
    display: flex;
    flex-wrap: wrap;
    gap: 16px
}

@media (max-width: 991.98px) {
    .AlphaChips {
        gap:8px
    }
}

.AlphaCollapse {
    border: 1px solid var(--primary-disabled);
    border-radius: 8px;
    overflow: auto
}

.AlphaCollapse,.AlphaDrawer__wrapper {
    display: flex;
    flex-direction: column;
    background-color: var(--surface)
}

.AlphaDrawer__wrapper {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 50%;
    min-width: 310px;
    box-shadow: 0 12px 12px #00000026;
    transition: transform .3s ease-in-out;
    will-change: transform
}

@media (max-width: 991.98px) {
    .AlphaDrawer__wrapper {
        width:75%
    }
}

@media (max-width: 575.98px) {
    .AlphaDrawer__wrapper {
        width:100%
    }
}

.AlphaDrawer__backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1070;
    width: 100%;
    height: 100%;
    background-color: var(--backdrop);
    overflow: hidden
}

.AlphaDrawer__backdrop-enter {
    background-color: transparent
}

.AlphaDrawer__backdrop-enter-active {
    background-color: var(--backdrop);
    transition: background-color .3s ease-in-out
}

.AlphaDrawer__backdrop-enter-active .AlphaDrawer__wrapper,.AlphaDrawer__backdrop-enter-done .AlphaDrawer__wrapper {
    transform: translate(0)
}

.AlphaDrawer__backdrop-exit {
    background-color: var(--backdrop)
}

.AlphaDrawer__backdrop-exit-active {
    background-color: transparent;
    transition: background-color .3s ease-in-out
}

.AlphaDrawer__close {
    position: absolute;
    top: 28px
}

@media (max-width: 991.98px) {
    .AlphaDrawer__close {
        top:24px
    }
}

.AlphaDrawer--left {
    left: 0;
    transform: translate(-100%)
}

.AlphaDrawer--left .AlphaDrawerTitle {
    padding-right: 56px
}

.AlphaDrawer--left .AlphaDrawer__close {
    right: 16px
}

.AlphaDrawer--right {
    right: 0;
    transform: translate(100%)
}

.AlphaDrawer--right .AlphaDrawerTitle {
    padding-left: 56px
}

.AlphaDrawer--right .AlphaDrawer__close {
    left: 16px
}

.AlphaFileUploadButton__input {
    display: none
}

.AlphaContainer {
    flex-direction: column;
    background-color: var(--surface);
    border-radius: 8px;
    border: 1px solid var(--primary-disabled);
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-between;
    gap: 16px;
    padding: 16px
}

@media (max-width: 991.98px) {
    .AlphaContainer {
        justify-content:center
    }
}

.AlphaContainer--fixed {
    margin-top: 82px
}

@media (max-width: 991.98px) {
    .AlphaContainer--fixed {
        margin-top:78px
    }
}

.AlphaContainer--fixed .AlphaContainer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1020;
    box-shadow: 0 0 16px #0000001a;
    border-radius: 0
}

.AlphaContainer .AlphaButton:not(.AlphaButton--icon) {
    min-width: 200px
}

@media (max-width: 991.98px) {
    .AlphaContainer .AlphaButton:not(.AlphaButton--icon) {
        max-width:320px;
        min-width: unset;
        width: 100%
    }
}

.AlphaAccordion {
    display: flex;
    flex-direction: column;
    gap: 24px;
    height: 100%;
    min-height: 0
}

.AlphaDropdown {
    position: relative
}

.AlphaDropdown__wrapper {
    display: inline-flex
}

.AlphaDropdown__button {
    display: inline-flex;
    padding: 6px;
    color: var(--text);
    background-color: transparent;
    border: 0;
    cursor: pointer
}

.AlphaDropdown--button .AlphaDropdown__button {
    padding: 15px;
    color: var(--primary-1);
    background-color: var(--surface);
    border: 1px solid var(--primary-1);
    border-radius: 8px
}

@media (max-width: 991.98px) {
    .AlphaDropdown--button .AlphaDropdown__button {
        padding:8px;
        border-radius: 6px
    }
}

.AlphaDropdown--button .AlphaDropdownList {
    top: calc(100% + 6px)
}

.AlphaDropdown--left .AlphaDropdownList {
    left: 0
}

.AlphaDropdown--right .AlphaDropdownList {
    right: 0
}

.AlphaDropdown--fixed .AlphaDropdownList {
    position: unset
}

.AlphaButton {
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    text-decoration: none;
    text-align: center;
    white-space: nowrap;
    background: transparent;
    border: 1px solid transparent;
    outline: 0;
    transition: all .3s ease-in-out;
    overflow: hidden;
    cursor: pointer
}

.AlphaButton--disabled,.AlphaButton--loading,.AlphaButton:disabled {
    pointer-events: none
}

.AlphaButton__logo {
    display: inline-flex;
    margin-right: 16px
}

@media (max-width: 991.98px) {
    .AlphaButton__icon {
        display:none!important
    }
}

.AlphaButton__icon:not(:first-child) {
    margin-left: 16px
}

.AlphaButton__text {
    display: inline-flex;
    justify-content: center;
    width: 100%
}

.AlphaButton--lg {
    padding: 11px 24px;
    font-size: 16px;
    line-height: 24px;
    border-radius: 8px
}

@media (max-width: 991.98px) {
    .AlphaButton--lg {
        padding:9px 24px;
        font-size: 14px
    }
}

.AlphaButton--lg .AlphaButton__icon,.AlphaButton--lg .AlphaButton__logo {
    max-width: 22px;
    max-height: 22px
}

.AlphaButton--md {
    padding: 11px 24px;
    font-size: 16px;
    line-height: 24px;
    border-radius: 8px
}

@media (max-width: 991.98px) {
    .AlphaButton--md {
        padding:7px 24px;
        font-size: 12px;
        line-height: 18px;
        border-radius: 6px
    }
}

.AlphaButton--md .AlphaButton__icon,.AlphaButton--md .AlphaButton__logo {
    max-width: 22px;
    max-height: 22px
}

@media (max-width: 991.98px) {
    .AlphaButton--md .AlphaButton__icon,.AlphaButton--md .AlphaButton__logo {
        max-width:18px;
        max-height: 18px
    }
}

.AlphaButton--sm {
    padding: 7px 24px;
    font-size: 14px;
    line-height: 18px;
    border-radius: 6px
}

@media (max-width: 991.98px) {
    .AlphaButton--sm {
        font-size:12px
    }
}

.AlphaButton--sm .AlphaButton__icon,.AlphaButton--sm .AlphaButton__logo {
    max-width: 18px;
    max-height: 18px
}

.AlphaButton--primary {
    color: var(--white);
    background-color: var(--primary-1)
}

.AlphaButton--primary:focus,.AlphaButton--primary:hover {
    background-color: var(--primary-2)
}

.AlphaButton--primary:active {
    background-color: var(--primary-3)
}

.AlphaButton--primary.AlphaButton--disabled,.AlphaButton--primary:disabled {
    color: var(--primary-on-disabled);
    background-color: var(--primary-disabled)
}

.AlphaButton--secondary {
    color: var(--white);
    background-color: var(--secondary-1)
}

.AlphaButton--secondary:focus,.AlphaButton--secondary:hover {
    background-color: var(--secondary-2)
}

.AlphaButton--secondary:active {
    background-color: var(--secondary-3)
}

.AlphaButton--secondary.AlphaButton--disabled,.AlphaButton--secondary:disabled {
    color: var(--primary-on-disabled);
    background-color: var(--primary-disabled)
}

.AlphaButton--outlined {
    color: var(--primary-1);
    background-color: var(--surface);
    border-color: var(--primary-1)
}

.AlphaButton--outlined:focus,.AlphaButton--outlined:hover {
    color: var(--primary-2);
    border-color: var(--primary-2)
}

.AlphaButton--outlined:active {
    color: var(--primary-3);
    border-color: var(--primary-3)
}

.AlphaButton--outlined.AlphaButton--disabled,.AlphaButton--outlined:disabled {
    color: var(--primary-disabled);
    border-color: var(--primary-disabled)
}

.AlphaButton--danger {
    color: var(--white);
    background-color: var(--danger-1)
}

.AlphaButton--danger:focus,.AlphaButton--danger:hover {
    background-color: var(--danger-2)
}

.AlphaButton--danger:active {
    background-color: var(--danger-3)
}

.AlphaButton--danger.AlphaButton--disabled,.AlphaButton--danger:disabled {
    color: var(--primary-on-disabled);
    background-color: var(--primary-disabled)
}

.AlphaButton--link {
    color: var(--primary-1)
}

.AlphaButton--link:focus,.AlphaButton--link:hover {
    color: var(--primary-2)
}

.AlphaButton--link:active {
    color: var(--primary-3)
}

.AlphaButton--link.AlphaButton--disabled,.AlphaButton--link:disabled {
    color: var(--primary-disabled)
}

.AlphaButton--facebook {
    color: var(--white);
    background-color: #1877f2
}

.AlphaButton--facebook:hover {
    background-color: #0666e2
}

.AlphaButton--facebook:active {
    background-color: #0053bf
}

.AlphaButton--facebook.AlphaButton--disabled,.AlphaButton--facebook:disabled {
    opacity: .3
}

.AlphaButton--google {
    color: var(--text);
    background-color: var(--surface);
    border-color: var(--surface-on-3)
}

.AlphaButton--google:focus,.AlphaButton--google:hover {
    background-color: var(--google-button-1)
}

.AlphaButton--google:active {
    background-color: var(--google-button-2)
}

.AlphaButton--google.AlphaButton--disabled,.AlphaButton--google:disabled {
    opacity: .3
}

.AlphaButton--apple {
    color: var(--apple-button-text);
    background-color: var(--apple-button-1);
    border-color: var(--apple-button-1)
}

.AlphaButton--apple:focus,.AlphaButton--apple:hover {
    background-color: var(--apple-button-2)
}

.AlphaButton--apple.AlphaButton--disabled,.AlphaButton--apple:disabled {
    opacity: .2
}

.AlphaButton--block {
    width: 100%
}

.AlphaButton--icon {
    flex-shrink: 0
}

.AlphaButton--icon .AlphaButton__icon {
    display: inline-flex!important
}

.AlphaButton--icon.AlphaButton--lg {
    width: 48px;
    height: 48px;
    padding: 8px
}

@media (max-width: 991.98px) {
    .AlphaButton--icon.AlphaButton--lg {
        width:44px;
        height: 44px
    }
}

.AlphaButton--icon.AlphaButton--md {
    width: 48px;
    height: 48px;
    padding: 8px
}

@media (max-width: 991.98px) {
    .AlphaButton--icon.AlphaButton--md {
        width:34px;
        height: 34px
    }
}

.AlphaButton--icon.AlphaButton--sm {
    width: 34px;
    height: 34px;
    padding: 8px
}

.AlphaButton--rounded {
    padding: 0;
    color: var(--text);
    background-color: var(--surface-light);
    border-radius: 50%;
    border: 0
}

.AlphaButton--rounded.AlphaButton--disabled,.AlphaButton--rounded:disabled {
    color: var(--surface-on-3)
}

.AlphaButton--rounded.AlphaButton--active,.AlphaButton--rounded:focus,.AlphaButton--rounded:hover {
    background-color: var(--surface-success)
}

.AlphaButton--rounded.AlphaButton--lg {
    width: 36px;
    height: 36px
}

.AlphaButton--rounded.AlphaButton--lg .AlphaButton__icon {
    max-width: 16px;
    max-height: 16px
}

.AlphaButton--rounded.AlphaButton--md {
    width: 36px;
    height: 36px
}

@media (max-width: 991.98px) {
    .AlphaButton--rounded.AlphaButton--md {
        width:24px;
        height: 24px
    }
}

.AlphaButton--rounded.AlphaButton--md .AlphaButton__icon {
    max-width: 16px;
    max-height: 16px
}

@media (max-width: 991.98px) {
    .AlphaButton--rounded.AlphaButton--md .AlphaButton__icon {
        max-width:12px;
        max-height: 12px
    }
}

.AlphaButton--rounded.AlphaButton--sm {
    width: 24px;
    height: 24px
}

.AlphaButton--rounded.AlphaButton--sm .AlphaButton__icon {
    max-width: 12px;
    max-height: 12px
}

.AlphaButton--rounded .AlphaButton__text {
    display: none
}

.AlphaButton .AlphaInlineLoader {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0
}

.AlphaButton .AlphaInlineLoader__dot {
    background-color: currentcolor
}

.AlphaCheckbox {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    max-height: 48px;
    padding: 11px 24px;
    background-color: var(--surface);
    border: 1px solid var(--primary-disabled);
    border-radius: 8px;
    transition: all .3s ease-in-out;
    cursor: pointer
}

@media (max-width: 991.98px) {
    .AlphaCheckbox {
        padding:11px 16px
    }
}

.AlphaCheckbox__input {
    display: none
}

.AlphaCheckbox__label {
    width: 100%;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    text-align: center
}

.AlphaCheckbox__box {
    position: relative;
    display: inline-block;
    flex-shrink: 0;
    width: 14px;
    height: 14px;
    border: 1px solid var(--surface-on-3);
    border-radius: 2px;
    transition: all .3s ease-in-out
}

.AlphaCheckbox__box svg {
    position: absolute;
    top: 3px;
    left: 2px;
    fill: transparent;
    transition-delay: .1s
}

.AlphaCheckbox--checked {
    border-color: var(--primary-1)
}

.AlphaCheckbox--checked .AlphaCheckbox__box {
    background-color: var(--primary-1);
    border-color: var(--primary-1)
}

.AlphaCheckbox--checked .AlphaCheckbox__box svg {
    fill: var(--white)
}

.AlphaCheckbox--indeterminate,.AlphaCheckbox--indeterminate .AlphaCheckbox__box {
    border-color: var(--primary-1)
}

.AlphaCheckbox--indeterminate .AlphaCheckbox__box svg {
    stroke: var(--primary-1)
}

.AlphaCheckbox--indeterminate .AlphaCheckbox__box path {
    display: none
}

.AlphaCheckbox--disabled {
    pointer-events: none;
    color: var(--surface-on-3)
}

.AlphaCheckbox--disabled .AlphaCheckbox__box,.AlphaCheckbox--disabled.AlphaCheckbox--checked {
    border-color: var(--surface-on-3)
}

.AlphaCheckbox--disabled.AlphaCheckbox--checked .AlphaCheckbox__box {
    background-color: var(--surface-on-3)
}

.AlphaCheckbox--block {
    width: 100%
}

.AlphaCheckbox--md {
    font-size: 16px;
    line-height: 24px;
    font-weight: 600
}

@media (max-width: 991.98px) {
    .AlphaCheckbox--md {
        font-size:14px
    }
}

.AlphaCheckbox--sm {
    font-size: 12px;
    line-height: 20px;
    font-weight: 400
}

@media (max-width: 991.98px) {
    .AlphaCheckbox--sm {
        padding:8px
    }
}

.AlphaCheckbox--basic {
    min-width: auto;
    padding: 0;
    background-color: transparent;
    border: 0
}

.AlphaCheckbox--basic .AlphaCheckbox__box {
    width: 18px;
    height: 18px
}

.AlphaCheckbox--basic .AlphaCheckbox__box svg {
    width: 12px;
    height: 9px
}

.AlphaBreadcrumbs {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 16px
}

.AlphaBadge {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: 0 8px;
    margin-left: 16px;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 400;
    background-color: var(--surface-light);
    border-radius: 24px
}

.AlphaBadge--sm {
    min-width: 20px;
    height: 20px;
    font-size: 12px
}

.AlphaBadge--md {
    min-width: 24px;
    height: 24px;
    font-size: 12px
}

.AlphaBadge--lg {
    min-width: 24px;
    height: 24px;
    font-size: 14px;
    font-weight: 600
}

@media (max-width: 991.98px) {
    .AlphaBadge--lg {
        font-size:12px
    }
}

.AlphaBadge--primary {
    color: var(--text);
    background-color: var(--surface-light)
}

.AlphaBadge--secondary {
    color: var(--white);
    background-color: var(--secondary-1)
}

.AlphaAlert {
    display: flex;
    flex-direction: column;
    background-color: var(--surface);
    border-radius: 8px;
    border: 1px solid var(--primary-disabled);
    position: relative;
    flex-flow: row wrap;
    gap: 24px
}

@media (max-width: 991.98px) {
    .AlphaAlert {
        gap:16px
    }
}

.AlphaAlert__body {
    flex: 1 1 auto;
    display: flex;
    align-items: flex-start;
    gap: 24px;
    min-width: 0
}

@media (max-width: 991.98px) {
    .AlphaAlert__body {
        gap:16px
    }
}

@media (max-width: 575.98px) {
    .AlphaAlert__body {
        flex:auto
    }
}

.AlphaAlert__container {
    flex: 1 1 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-flow: row wrap;
    gap: 16px;
    min-width: 0
}

@media (max-width: 991.98px) {
    .AlphaAlert__container {
        gap:8px
    }
}

.AlphaAlert__content {
    flex: 1 1 auto;
    overflow: hidden
}

@media (max-width: 575.98px) {
    .AlphaAlert__content {
        flex:auto;
        min-width: auto
    }
}

.AlphaAlert__title {
    margin-bottom: 4px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden
}

@media (max-width: 991.98px) {
    .AlphaAlert__title {
        margin-bottom:0
    }
}

.AlphaAlert__text {
    font-size: 14px;
    line-height: 22px;
    font-weight: 400;
    color: var(--surface-on-2);
    white-space: pre-line
}

@media (max-width: 991.98px) {
    .AlphaAlert__text {
        font-size:12px;
        line-height: 20px
    }
}

.AlphaAlert__actions {
    display: flex;
    align-items: center;
    gap: 24px
}

@media (max-width: 991.98px) {
    .AlphaAlert__actions {
        gap:8px
    }
}

.AlphaAlert__close {
    position: absolute;
    top: 16px;
    right: 16px
}

@media (max-width: 991.98px) {
    .AlphaAlert__close {
        top:8px;
        right: 8px
    }
}

.AlphaAlert--lg {
    padding: 36px
}

@media (max-width: 991.98px) {
    .AlphaAlert--lg {
        padding:24px 16px
    }
}

.AlphaAlert--lg .AlphaAlert__body {
    gap: 36px
}

@media (max-width: 991.98px) {
    .AlphaAlert--lg .AlphaAlert__body {
        gap:16px
    }
}

.AlphaAlert--lg .AlphaAlert__content {
    width: 100%;
    margin-bottom: 8px
}

@media (max-width: 991.98px) {
    .AlphaAlert--lg .AlphaAlert__content {
        min-width:unset!important
    }
}

.AlphaAlert--lg .AlphaAlert__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 31px;
    line-height: 40px;
    margin-bottom: 16px;
    white-space: unset
}

@media (max-width: 991.98px) {
    .AlphaAlert--lg .AlphaAlert__title {
        font-size:18px;
        line-height: 24px;
        position: relative;
        font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
        font-weight: 600;
        font-size: 39px;
        line-height: 48px;
        margin-bottom: 8px
    }
}

@media (max-width: 991.98px) and (max-width:991.98px) {
    .AlphaAlert--lg .AlphaAlert__title {
        font-size:20px;
        line-height: 28px
    }
}

.AlphaAlert--lg .AlphaAlert__text {
    font-size: 20px;
    line-height: 27px;
    font-weight: 400
}

@media (max-width: 991.98px) {
    .AlphaAlert--lg .AlphaAlert__text {
        font-size:16px;
        line-height: 22px;
        font-size: 14px;
        font-weight: 400
    }
}

@media (max-width: 991.98px) and (max-width:991.98px) {
    .AlphaAlert--lg .AlphaAlert__text {
        font-size:12px;
        line-height: 20px
    }
}

.AlphaAlert--lg .AlphaAlert__icon {
    width: 114px
}

@media (max-width: 991.98px) {
    .AlphaAlert--lg .AlphaAlert__icon {
        width:56px
    }
}

.AlphaAlert--md {
    padding: 24px 32px
}

@media (max-width: 991.98px) {
    .AlphaAlert--md {
        padding:14px 16px
    }
}

.AlphaAlert--md .AlphaAlert__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 26px;
    line-height: 36px
}

@media (max-width: 991.98px) {
    .AlphaAlert--md .AlphaAlert__title {
        font-size:16px;
        line-height: 24px
    }
}

.AlphaAlert--md .AlphaAlert__icon {
    width: 56px
}

@media (max-width: 991.98px) {
    .AlphaAlert--md .AlphaAlert__icon {
        width:36px
    }
}

.AlphaAlert--sm {
    padding: 24px
}

@media (max-width: 991.98px) {
    .AlphaAlert--sm {
        padding:14px 16px
    }
}

.AlphaAlert--sm .AlphaAlert__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px
}

@media (max-width: 991.98px) {
    .AlphaAlert--sm .AlphaAlert__title {
        font-size:14px;
        line-height: 20px;
        position: relative;
        font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
        font-weight: 600;
        font-size: 24px;
        line-height: 32px
    }
}

@media (max-width: 991.98px) and (max-width:991.98px) {
    .AlphaAlert--sm .AlphaAlert__title {
        font-size:16px;
        line-height: 24px
    }
}

.AlphaAlert--sm .AlphaAlert__icon {
    width: 48px
}

@media (max-width: 991.98px) {
    .AlphaAlert--sm .AlphaAlert__icon {
        width:36px
    }
}

.AlphaAlert--info {
    background-color: var(--surface-light)
}

.AlphaAlert--info .AlphaAlert__text {
    color: var(--text)
}

.AlphaAlert--success {
    background-color: var(--surface-success)
}

.AlphaAlert--success .AlphaAlert__text {
    color: var(--text)
}

.AlphaAlert--actions .AlphaAlert__content {
    min-width: 270px
}

.AlphaAlert--wrap-actions .AlphaAlert__content {
    min-width: 0
}

.AlphaForm {
    background-color: var(--surface);
    border-radius: 8px;
    border: 1px solid var(--primary-disabled);
    display: flex;
    flex-direction: column;
    padding: 32px
}

@media (max-width: 991.98px) {
    .AlphaForm {
        padding:0;
        background-color: transparent;
        border: 0
    }
}

.AlphaForm .AlphaMessage:not(:last-child) {
    margin-bottom: 48px
}

@media (max-width: 991.98px) {
    .AlphaForm .AlphaMessage:not(:last-child) {
        margin-bottom:16px
    }
}

.AlphaFooter {
    display: flex;
    flex-direction: row;
    justify-content: center;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-size: 12px;
    line-height: 20px;
    font-weight: 400
}

.AlphaFooter__container {
    display: flex;
    flex-direction: column;
    background-color: var(--surface);
    border-radius: 8px;
    border: 1px solid var(--primary-disabled);
    flex: 1 1 auto;
    max-width: 1440px
}

.AlphaFooter__title {
    display: inline-flex;
    margin-bottom: 16px
}

@media (max-width: 767.98px) {
    .AlphaFooter__title {
        display:none
    }
}

.AlphaFooter__link {
    display: inline-flex;
    color: var(--text);
    white-space: nowrap;
    transition: color .3s ease-in-out
}

.AlphaFooter__text {
    color: var(--surface-on-2);
    white-space: nowrap
}

@media (max-width: 767.98px) {
    .AlphaFooter__text {
        white-space:normal
    }
}

.AlphaFooter__body {
    display: grid;
    grid-template-columns: minmax(90px,180px) 1fr 1fr;
    grid-gap: 32px;
    align-items: start;
    padding: 32px
}

@media (max-width: 991.98px) {
    .AlphaFooter__body {
        grid-template-columns:minmax(90px,140px) 1fr 1fr;
        padding: 16px
    }
}

@media (max-width: 767.98px) {
    .AlphaFooter__body {
        grid-template-columns:1fr;
        grid-gap: 20px
    }

    .AlphaFooter__body .AlphaFooter__nav {
        grid-row: 2/3
    }
}

.AlphaFooter__footer {
    display: grid;
    grid-template-columns: 3fr 2fr;
    grid-gap: 32px;
    padding: 16px 32px;
    border-top: 1px solid var(--primary-disabled)
}

@media (max-width: 991.98px) {
    .AlphaFooter__footer {
        padding:16px
    }
}

@media (max-width: 767.98px) {
    .AlphaFooter__footer {
        grid-template-columns:1fr;
        grid-gap: 16px
    }

    .AlphaFooter__footer .AlphaFooter__nav {
        grid-row: 1/2
    }
}

.AlphaFooter__download {
    display: flex;
    align-items: center;
    gap: 24px
}

.AlphaFooter__socials {
    display: flex;
    align-items: center;
    gap: 36px
}

@media (max-width: 1199.98px) {
    .AlphaFooter__socials {
        gap:24px
    }
}

@media (max-width: 991.98px) {
    .AlphaFooter__socials .AlphaIcon {
        width:16px
    }
}

.AlphaFooter__nav {
    display: flex;
    justify-content: flex-end;
    gap: 46px
}

@media (max-width: 1199.98px) {
    .AlphaFooter__nav {
        gap:32px
    }
}

@media (max-width: 991.98px) {
    .AlphaFooter__nav {
        flex-wrap:wrap;
        gap: 12px 24px
    }
}

@media (max-width: 767.98px) {
    .AlphaFooter__nav {
        justify-content:normal
    }
}

.AlphaFooter__nav .AlphaFooter__link:hover {
    color: var(--primary-1)
}

.AlphaFooter__copyright {
    display: grid;
    grid-template-columns: minmax(160px,180px) 1fr;
    grid-gap: 32px
}

@media (max-width: 991.98px) {
    .AlphaFooter__copyright {
        grid-template-columns:1fr;
        grid-gap: 16px
    }
}

.AlphaFooter .AlphaButton {
    display: none;
    margin-left: auto
}

@media (max-width: 767.98px) {
    .AlphaFooter .AlphaButton {
        display:block
    }
}

.AlphaIcon {
    display: inline-flex
}

.AlphaIcon--sm {
    max-width: 24px;
    max-height: 24px;
    width: 100%
}

.AlphaIcon svg {
    max-width: inherit;
    max-height: inherit;
    min-width: inherit;
    min-height: inherit;
    width: inherit;
    height: inherit;
    color: inherit
}

.AlphaHeader {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1040;
    display: flex;
    flex-direction: row;
    justify-content: center;
    height: 80px;
    width: 100%;
    background-color: var(--surface);
    border-bottom: 1px solid var(--primary-disabled);
    transition: box-shadow .3s ease-in-out
}

@media (max-width: 991.98px) {
    .AlphaHeader {
        height:56px
    }
}

.AlphaHeader__container {
    flex: 1 1 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 32px;
    max-width: 1440px;
    padding: 16px 32px
}

@media (max-width: 1199.98px) {
    .AlphaHeader__container {
        gap:24px;
        padding: 16px
    }
}

@media (max-width: 991.98px) {
    .AlphaHeader__container {
        gap:16px;
        padding: 12px 16px
    }
}

.AlphaHeader__logo {
    display: inline-flex;
    max-width: 160px;
    margin-right: 24px;
    color: var(--logo);
    cursor: pointer
}

@media (max-width: 1199.98px) {
    .AlphaHeader__logo {
        margin-right:0
    }
}

@media (max-width: 575.98px) {
    .AlphaHeader__logo {
        max-width:140px
    }
}

.AlphaHeader__menu {
    width: 100%
}

@media (max-width: 991.98px) {
    .AlphaHeader__menu {
        position:fixed;
        top: 56px;
        bottom: 0;
        left: 0;
        z-index: 1060;
        transform: translate(100%);
        background-color: var(--surface);
        box-shadow: 0 2px 4px #0000001a;
        transition: transform .8s cubic-bezier(.8,.4,.1,1);
        overflow: auto
    }
}

.AlphaHeader__menu--opened {
    transform: translate(0)
}

.AlphaHeader__nav {
    display: flex;
    gap: 16px
}

@media (max-width: 1199.98px) {
    .AlphaHeader__nav {
        gap:8px
    }
}

@media (max-width: 991.98px) {
    .AlphaHeader__nav {
        flex-direction:column;
        gap: 0;
        padding: 16px 0
    }
}

.AlphaHeader__actions {
    display: flex;
    align-items: center;
    gap: 24px
}

@media (max-width: 1199.98px) {
    .AlphaHeader__actions {
        gap:16px
    }
}

.AlphaHeader__actions .AlphaButton:not(.AlphaButton--rounded) {
    min-width: 150px
}

@media (max-width: 991.98px) {
    .AlphaHeader__actions .AlphaButton:not(.AlphaButton--rounded) {
        min-width:unset
    }
}

.AlphaHeader__settings {
    display: flex;
    padding: 24px
}

.AlphaHeader__settings,.AlphaHeader__tabs {
    justify-content: center;
    border-top: 1px solid var(--primary-disabled)
}

.AlphaHeader__tabs {
    position: fixed;
    bottom: 0;
    left: 0;
    z-index: 1040;
    display: none;
    gap: 64px;
    width: 100%;
    padding: 6px 8px;
    background-color: var(--surface);
    box-shadow: 0 0 16px #0000001a
}

@media (max-width: 991.98px) {
    .AlphaHeader__tabs {
        display:flex
    }
}

@media (max-width: 575.98px) {
    .AlphaHeader__tabs {
        justify-content:space-around;
        gap: 16px
    }
}

.AlphaHeader__tabs-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-size: 12px;
    line-height: 20px;
    color: var(--surface-on-3)
}

.AlphaHeader__tabs-item--active {
    color: var(--primary-1)
}

.AlphaHeader__hamburger {
    position: relative;
    width: 24px;
    height: 20px;
    padding: 0;
    background: transparent;
    border: 0;
    cursor: pointer
}

.AlphaHeader__hamburger-span,.AlphaHeader__hamburger-span:after,.AlphaHeader__hamburger-span:before {
    content: "";
    position: absolute;
    display: block;
    width: 100%;
    height: 2.5px;
    background-color: var(--text);
    border-radius: 4px;
    transition-duration: .25s
}

.AlphaHeader__hamburger-span:before {
    top: -8px
}

.AlphaHeader__hamburger-span:after {
    top: 8px
}

.AlphaHeader__hamburger--active .AlphaHeader__hamburger-span {
    transform: rotate(45deg)
}

.AlphaHeader__hamburger--active .AlphaHeader__hamburger-span:before {
    top: 0;
    transform: rotate(0)
}

.AlphaHeader__hamburger--active .AlphaHeader__hamburger-span:after {
    top: 0;
    transform: rotate(90deg)
}

.AlphaHeader--scroll {
    box-shadow: 0 2px 4px #0000001a
}

.AlphaImageCrop__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 24px;
    line-height: 32px;
    margin-bottom: 32px;
    text-align: center
}

@media (max-width: 991.98px) {
    .AlphaImageCrop__title {
        font-size:16px;
        line-height: 24px;
        position: relative;
        font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
        font-weight: 600;
        font-size: 31px;
        line-height: 40px;
        margin-bottom: 24px
    }
}

@media (max-width: 991.98px) and (max-width:991.98px) {
    .AlphaImageCrop__title {
        font-size:18px;
        line-height: 24px
    }
}

@media (max-width: 991.98px) {
    .AlphaImageCrop__container {
        margin-bottom:8px
    }
}

.AlphaImageCrop .AlphaModal__backdrop-enter .AlphaModal,.AlphaImageCrop .AlphaModal__backdrop-enter-done .AlphaModal {
    animation: none
}

.AlphaImageSlider {
    position: relative;
    height: 100%;
    margin: 0;
    padding: 0;
    list-style-type: none
}

.AlphaImageSlider__slide {
    position: absolute;
    left: 0;
    top: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    transition: opacity 1s
}

.AlphaImageSlider__slide--active {
    opacity: 1;
    z-index: 2
}

.AlphaImageUpload {
    display: flex;
    width: 100%
}

@media (max-width: 991.98px) {
    .AlphaImageUpload {
        justify-content:center
    }
}

.AlphaImageUpload__preview {
    position: relative;
    margin-right: 32px
}

@media (max-width: 991.98px) {
    .AlphaImageUpload__preview {
        display:none
    }
}

.AlphaImageUpload__preview-img {
    width: 250px;
    height: 340px;
    border-radius: 16px;
    color: var(--surface-medium)
}

@media (max-width: 991.98px) {
    .AlphaImageUpload__preview-img {
        width:170px;
        height: 240px;
        margin-right: 0;
        border-radius: 8px
    }
}

.AlphaImageUpload__preview .AlphaButton {
    position: absolute;
    top: 16px;
    right: 16px
}

@media (max-width: 991.98px) {
    .AlphaImageUpload__preview .AlphaButton {
        top:8px;
        right: 8px
    }

    .AlphaImageUpload--active .AlphaImageUpload__preview {
        display: flex
    }

    .AlphaImageUpload--active .AlphaFileUpload {
        display: none
    }
}

.AlphaInput {
    font-size: 16px;
    line-height: 28px;
    font-weight: 400;
    width: 100%;
    color: var(--text);
    background-color: var(--background);
    border: none;
    outline: none
}

@media (max-width: 991.98px) {
    .AlphaInput {
        font-size:14px;
        line-height: 20px;
        line-height: 28px
    }
}

.AlphaInput:disabled {
    color: var(--surface-on-3);
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.AlphaInput__wrapper {
    max-width: 420px;
    width: 100%
}

@media (max-width: 991.98px) {
    .AlphaInput__wrapper {
        max-width:320px
    }
}

.AlphaInput__container {
    position: relative
}

.AlphaInput__placeholder {
    font-size: 16px;
    line-height: 28px;
    font-weight: 400;
    pointer-events: none;
    position: absolute;
    top: 16px;
    left: 16px;
    color: var(--surface-on-2);
    transition: all .1s ease-in-out
}

@media (max-width: 991.98px) {
    .AlphaInput__placeholder {
        font-size:14px;
        line-height: 20px;
        line-height: 28px
    }
}

.AlphaInput__icon {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    color: var(--text);
    border: 0;
    background: none
}

.AlphaInput__note {
    font-size: 12px;
    line-height: 20px;
    font-weight: 400;
    padding: 4px 16px;
    min-height: 28px;
    color: var(--surface-on-2);
    text-align: left
}

.AlphaInput--standard .AlphaInput {
    padding: 22px 16px 6px;
    border-bottom: 1px solid var(--surface-on-3);
    border-radius: 4px 4px 0 0
}

.AlphaInput--standard .AlphaInput:-ms-input-placeholder {
    color: transparent
}

.AlphaInput--standard .AlphaInput::placeholder {
    color: transparent
}

.AlphaInput--standard .AlphaInput:disabled {
    padding: 14px 16px
}

.AlphaInput--standard .AlphaInput:focus {
    border-bottom-color: var(--primary-1)
}

.AlphaInput--standard .AlphaInput:focus+.AlphaInput__placeholder {
    font-size: 12px;
    line-height: 20px;
    font-weight: 400;
    top: 4px
}

.AlphaInput--search .AlphaInput {
    padding: 9px 16px 9px 50px;
    border: 1px solid var(--surface-on-4);
    border-radius: 8px
}

@media (max-width: 991.98px) {
    .AlphaInput--search .AlphaInput {
        font-size:12px;
        line-height: 20px;
        font-weight: 400;
        padding-top: 6px;
        padding-bottom: 6px
    }
}

.AlphaInput--search .AlphaInput__placeholder {
    display: none
}

.AlphaInput--password .AlphaInput {
    padding-right: 50px
}

.AlphaInput--password .AlphaInput__icon {
    right: 0;
    left: unset;
    color: var(--surface-on-2);
    cursor: pointer
}

.AlphaInput--date .AlphaInput {
    min-height: 58px;
    -webkit-appearance: none;
    appearance: none
}

.AlphaInput--date ::-webkit-calendar-picker-indicator,.AlphaInput--date ::-webkit-clear-button,.AlphaInput--date ::-webkit-inner-spin-button {
    display: none;
    -webkit-appearance: none;
    appearance: none
}

.AlphaInput--date ::-webkit-date-and-time-value {
    text-align: start
}

@supports not (-webkit-touch-callout:none) {
    .AlphaInput--date .AlphaInput__placeholder {
        top: 6px;
        font-size: 12px;
        line-height: 16px
    }
}

.AlphaInput--error .AlphaInput,.AlphaInput--error .AlphaInput__note,.AlphaInput--error .AlphaInput__placeholder {
    color: var(--danger-1);
    border-bottom-color: var(--danger-1)
}

.AlphaInput--filled .AlphaInput__placeholder {
    top: 6px;
    font-size: 12px;
    line-height: 16px
}

.AlphaLoader {
    position: relative;
    width: 50px;
    height: 50px;
    animation: spinner 2.5s linear infinite both;
    will-change: opacity
}

@media (max-width: 991.98px) {
    .AlphaLoader {
        width:30px;
        height: 30px
    }
}

.AlphaLoader__backdrop {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030
}

.AlphaLoader__backdrop,.AlphaLoader__container {
    display: flex;
    justify-content: center;
    align-items: center
}

.AlphaLoader__container {
    width: 120px;
    height: 120px;
    background-color: var(--surface);
    box-shadow: 0 0 16px #0000001a;
    border-radius: 36px
}

@media (max-width: 991.98px) {
    .AlphaLoader__container {
        width:80px;
        height: 80px;
        border-radius: 20px
    }
}

.AlphaLoader__dot {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    will-change: transform;
    animation: spinner-dot 2s ease-in-out infinite both
}

.AlphaLoader__dot:before {
    content: "";
    display: block;
    width: 25%;
    height: 25%;
    background-color: var(--primary-1);
    border-radius: 100%;
    will-change: transform;
    animation: spinner-dot-before 2s ease-in-out infinite both
}

.AlphaLoader__dot:first-child,.AlphaLoader__dot:first-child:before {
    animation-delay: -1.1s
}

.AlphaLoader__dot:nth-child(2),.AlphaLoader__dot:nth-child(2):before {
    animation-delay: -1s
}

.AlphaLoader__dot:nth-child(3),.AlphaLoader__dot:nth-child(3):before {
    animation-delay: -.9s
}

.AlphaLoader__dot:nth-child(4),.AlphaLoader__dot:nth-child(4):before {
    animation-delay: -.8s
}

.AlphaLoader__dot:nth-child(5),.AlphaLoader__dot:nth-child(5):before {
    animation-delay: -.7s
}

.AlphaLoader__dot:nth-child(6),.AlphaLoader__dot:nth-child(6):before {
    animation-delay: -.6s
}

.AlphaLoader__dot:nth-child(7),.AlphaLoader__dot:nth-child(7):before {
    animation-delay: -.5s
}

.AlphaLoader--fixed.AlphaLoader__backdrop {
    position: fixed;
    z-index: 1050;
    background-color: #0003;
    -webkit-backdrop-filter: blur(4px);
    backdrop-filter: blur(4px)
}

.AlphaLoader--absolute.AlphaLoader__backdrop {
    position: absolute;
    background-color: var(--surface)
}

.AlphaLoader--absolute .AlphaLoader__container {
    box-shadow: none
}

.AlphaLoader--loader.AlphaLoader__backdrop {
    position: absolute;
    background-color: var(--background)
}

.AlphaLoader-enter {
    opacity: 0
}

.AlphaLoader-enter-active {
    opacity: 1;
    transition: opacity .5s ease-in-out
}

.AlphaLoader-exit {
    opacity: 1
}

.AlphaLoader-exit-active {
    opacity: 0;
    transition: opacity .5s ease-in-out
}

.AlphaInlineLoader {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 8px;
    background-color: inherit;
    border-radius: inherit
}

.AlphaInlineLoader__dot {
    position: relative;
    width: 8px;
    height: 8px;
    background-color: var(--primary-1);
    border-radius: 50%;
    will-change: transform;
    animation: loading 1s ease-in-out infinite both
}

.AlphaInlineLoader__dot:first-child {
    left: -6px;
    animation-delay: -.16s
}

.AlphaInlineLoader__dot:last-child {
    left: 6px;
    animation-delay: .16s
}

@keyframes loading {
    0%,80%,to {
        transform: scale(.6)
    }

    40% {
        transform: scale(1)
    }
}

@keyframes spinner {
    to {
        transform: rotate(1turn)
    }
}

@keyframes spinner-dot {
    80%,to {
        transform: rotate(1turn)
    }
}

@keyframes spinner-dot-before {
    50% {
        transform: scale(.4)
    }

    0%,to {
        transform: scale(1)
    }
}

.AlphaLabel {
    position: relative;
    padding: 2px 4px;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-size: 8px;
    line-height: 12px;
    border-radius: 0 4px 4px
}

.AlphaLabel:before {
    content: "";
    position: absolute;
    bottom: 100%;
    left: 0;
    width: 4px;
    height: 4px;
    border-radius: 4px 0 0
}

.AlphaLabel--default {
    color: var(--white);
    background-color: var(--primary-2)
}

.AlphaLabel--default:before {
    background-color: var(--primary-3)
}

.AlphaLabel--primary {
    color: var(--white);
    background-color: var(--primary-1)
}

.AlphaLabel--primary:before {
    background-color: var(--primary-2)
}

.AlphaLabel--secondary {
    color: var(--white);
    background-color: var(--secondary-1)
}

.AlphaLabel--secondary:before {
    background-color: var(--secondary-2)
}

.AlphaLabel--highlighter {
    color: var(--black);
    background-color: var(--highlighter)
}

.AlphaLabel--highlighter:before {
    background-color: var(--highlighter-disabled)
}

.AlphaMessage {
    transform-origin: top;
    will-change: transform,opacity
}

.AlphaMessage__container {
    padding: 36px;
    background-color: var(--surface-light);
    border-radius: 8px
}

@media (max-width: 991.98px) {
    .AlphaMessage__container {
        display:flex;
        flex-direction: column;
        background-color: var(--surface);
        border-radius: 8px;
        border: 1px solid var(--primary-disabled);
        padding: 0
    }
}

.AlphaMessage__header {
    display: flex;
    align-items: center;
    gap: 24px;
    margin-bottom: 8px
}

@media (max-width: 991.98px) {
    .AlphaMessage__header {
        gap:16px;
        margin-bottom: 0;
        padding: 16px
    }
}

.AlphaMessage__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px;
    flex: 1 1 auto
}

@media (max-width: 991.98px) {
    .AlphaMessage__title {
        font-size:14px;
        line-height: 20px
    }
}

.AlphaMessage__icon {
    width: 36px
}

@media (max-width: 991.98px) {
    .AlphaMessage__icon {
        width:24px
    }
}

.AlphaMessage__content {
    font-size: 14px;
    line-height: 22px;
    font-weight: 400;
    color: var(--surface-on-2)
}

@media (max-width: 991.98px) {
    .AlphaMessage__content {
        font-size:12px;
        line-height: 20px;
        padding: 0 16px 16px
    }
}

.AlphaMessage-enter {
    opacity: 0;
    transform: scaleY(0)
}

.AlphaMessage-enter-active {
    transition: transform .3s ease-out,opacity .3s ease-out
}

.AlphaMessage-enter-active,.AlphaMessage-exit {
    opacity: 1;
    transform: scaleY(1)
}

.AlphaMessage-exit-active {
    opacity: 0;
    transform: scaleY(0);
    transition: transform .3s ease-out,opacity .3s ease-out
}

.AlphaMessage--icon .AlphaMessage__content {
    padding-left: 60px
}

@media (max-width: 991.98px) {
    .AlphaMessage--icon .AlphaMessage__content {
        padding-left:16px
    }
}

.AlphaModal {
    position: absolute;
    top: 50%;
    left: 50%;
    display: flex;
    flex-direction: column;
    max-width: calc(100% - 16px);
    max-height: calc(100% - 16px);
    text-align: center;
    background-color: var(--surface);
    border-radius: 24px;
    overflow: hidden;
    outline: none;
    transform: scale(1) translate(-50%,-50%);
    transform-origin: 0 0;
    will-change: transform;
    animation-name: modal-scale-in;
    animation-duration: .3s;
    animation-timing-function: ease-in-out
}

@media (max-width: 991.98px) {
    .AlphaModal {
        border-right:16px
    }
}

.AlphaModal__backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1070;
    width: 100%;
    height: 100%;
    background-color: var(--backdrop);
    overflow: hidden;
    will-change: opacity
}

.AlphaModal__backdrop-enter {
    opacity: 0
}

.AlphaModal__backdrop-enter-active {
    opacity: 1;
    transition: opacity .3s ease-in-out
}

.AlphaModal__backdrop-exit {
    opacity: 1
}

.AlphaModal__backdrop-exit-active {
    opacity: 0;
    transition: opacity .3s ease-in-out
}

.AlphaModal__backdrop-exit .AlphaModal {
    animation-name: modal-scale-out
}

.AlphaModal__body {
    display: flex;
    flex-direction: column;
    padding: 32px;
    height: 100%;
    overflow: hidden
}

@media (max-width: 991.98px) {
    .AlphaModal__body {
        padding:24px 16px
    }
}

.AlphaModal__close {
    position: absolute;
    top: 24px;
    right: 24px
}

@media (max-width: 991.98px) {
    .AlphaModal__close {
        top:16px;
        right: 16px
    }

    .AlphaModal--lg,.AlphaModal--md {
        width: 350px!important
    }
}

@media (max-width: 575.98px) {
    .AlphaModal--lg {
        width:100%!important;
        height: 100%
    }

    .AlphaModal--lg .AlphaModalFooter {
        padding-top: 16px;
        border-top: 1px solid var(--primary-disabled)
    }
}

@keyframes modal-scale-in {
    0% {
        transform: scale(.5) translate(-50%,-50%)
    }

    to {
        transform: scale(1) translate(-50%,-50%)
    }
}

@keyframes modal-scale-out {
    0% {
        transform: scale(1) translate(-50%,-50%)
    }

    to {
        transform: scale(.5) translate(-50%,-50%)
    }
}

.AlphaNavigation {
    display: flex;
    flex-direction: column;
    background-color: var(--surface);
    border: 1px solid var(--primary-disabled);
    border-radius: 8px
}

@media (max-width: 991.98px) {
    .AlphaNavigation {
        flex-direction:row;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        padding: 16px
    }
}

@media (max-width: 575.98px) {
    .AlphaNavigation {
        flex-direction:column;
        align-items: flex-start
    }
}

.AlphaNavigation__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px;
    padding: 16px 24px
}

@media (max-width: 991.98px) {
    .AlphaNavigation__title {
        font-size:14px;
        line-height: 20px;
        position: relative;
        font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
        font-weight: 600;
        font-size: 26px;
        line-height: 36px;
        padding: 0
    }
}

@media (max-width: 991.98px) and (max-width:991.98px) {
    .AlphaNavigation__title {
        font-size:16px;
        line-height: 24px
    }
}

.AlphaNavigation__link {
    font-size: 16px;
    line-height: 28px;
    font-weight: 400;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 16px 24px;
    color: var(--text);
    border-top: 1px solid var(--primary-disabled);
    transition: color .3s ease-in-out
}

@media (max-width: 991.98px) {
    .AlphaNavigation__link {
        font-size:14px;
        line-height: 20px
    }
}

.AlphaNavigation__link:hover {
    color: var(--primary-1)
}

.AlphaNavigation__link--active {
    pointer-events: none;
    color: var(--primary-1)
}

.AlphaNavigation__select {
    max-width: 320px;
    width: 100%
}

@media (max-width: 575.98px) {
    .AlphaNavigation__select {
        max-width:100%
    }
}

.AlphaNavigation__select .AlphaSelect__wrapper {
    max-width: 100%
}

.AlphaPagination {
    display: flex;
    gap: 16px
}

@media (max-width: 575.98px) {
    .AlphaPagination {
        gap:8px
    }
}

.AlphaPagination__list {
    display: flex;
    gap: 8px
}

@media (max-width: 575.98px) {
    .AlphaPagination__list {
        gap:4px
    }
}

.AlphaPagination__button {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 28px;
    height: 28px;
    padding: 0 6px;
    color: var(--primary-1);
    background-color: var(--surface);
    border: 1px solid var(--primary-1);
    border-radius: 6px;
    transition: all .3s ease-in-out;
    cursor: pointer
}

.AlphaPagination__button:hover {
    color: var(--primary-3);
    border-color: var(--primary-3)
}

.AlphaPagination__button:disabled {
    pointer-events: none;
    color: var(--primary-disabled);
    border-color: var(--primary-disabled)
}

.AlphaPagination__page {
    min-width: 28px;
    height: 28px;
    padding: 0 6px;
    font-size: 16px;
    color: var(--text);
    background-color: var(--surface);
    border: 1px solid var(--primary-disabled);
    border-radius: 6px;
    transition: all .3s ease-in-out;
    cursor: pointer
}

.AlphaPagination__page:hover {
    color: var(--primary-1)
}

.AlphaPagination__page--active {
    pointer-events: none;
    color: var(--primary-1);
    background-color: var(--surface-light)
}

.AlphaPagination__dots {
    display: flex;
    justify-content: center;
    align-items: flex-end;
    width: 28px;
    height: 28px
}

.AlphaNotification {
    position: relative;
    display: flex;
    gap: 24px;
    max-width: 650px;
    width: 100%;
    margin: 24px 0;
    padding: 24px;
    background-color: var(--surface);
    border-radius: 24px;
    box-shadow: 0 2px 4px #0000001a;
    will-change: transform
}

@media (max-width: 991.98px) {
    .AlphaNotification {
        gap:8px;
        max-width: 350px;
        margin: 8px 0;
        padding: 16px;
        border-radius: 16px
    }
}

.AlphaNotification__container {
    position: fixed;
    top: 0;
    left: 50%;
    z-index: 1080;
    max-width: 650px;
    width: 100%;
    padding: 0 36px;
    transform: translate(-50%)
}

@media (max-width: 991.98px) {
    .AlphaNotification__container {
        max-width:350px;
        padding: 0 8px
    }
}

.AlphaNotification__icon {
    width: 48px;
    height: 48px
}

@media (max-width: 991.98px) {
    .AlphaNotification__icon {
        width:24px;
        height: 24px
    }
}

.AlphaNotification__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px;
    margin-bottom: 4px
}

@media (max-width: 991.98px) {
    .AlphaNotification__title {
        font-size:14px;
        line-height: 20px
    }
}

.AlphaNotification__text {
    font-size: 14px;
    line-height: 22px;
    font-weight: 400;
    word-break: break-word
}

@media (max-width: 991.98px) {
    .AlphaNotification__text {
        font-size:12px;
        line-height: 20px
    }
}

.AlphaNotification__progress {
    position: absolute;
    left: 14px;
    right: 14px;
    bottom: 0;
    border-radius: 6px
}

.AlphaNotification__progress-bar {
    width: 0;
    height: 4px;
    background-color: var(--primary-1);
    border-radius: 6px;
    animation-name: fill-in;
    animation-timing-function: linear
}

.AlphaNotification__close {
    position: absolute;
    top: 16px;
    right: 16px
}

@media (max-width: 991.98px) {
    .AlphaNotification__close .AlphaButton {
        width:16px;
        height: 16px
    }

    .AlphaNotification__close .AlphaButton .AlphaIcon {
        max-width: 10px
    }
}

.AlphaNotification-enter {
    transform: translateY(-150%)
}

.AlphaNotification-enter-active {
    transform: translateY(0);
    transition: transform .5s ease-out
}

.AlphaNotification-exit {
    transform: translateY(0)
}

.AlphaNotification-exit-active {
    transform: translateY(-150%);
    transition: transform .5s ease-out
}

.AlphaNotification--success {
    background-color: var(--surface-success)
}

.AlphaNotification--success .AlphaNotification__progress-bar {
    background-color: var(--success)
}

.AlphaNotification--error {
    background-color: var(--surface-error)
}

.AlphaNotification--error .AlphaNotification__progress-bar {
    background-color: var(--danger-1)
}

.AlphaNotification--warning {
    background-color: var(--surface-warning)
}

.AlphaNotification--warning .AlphaNotification__progress-bar {
    background-color: var(--highlighter)
}

.AlphaSwitch {
    display: inline-flex;
    align-items: center;
    background-color: var(--background);
    border-radius: 24px;
    cursor: pointer
}

.AlphaSwitch__input {
    display: none
}

.AlphaSwitch__label {
    width: 100%;
    margin-right: 12px;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif
}

.AlphaSwitch__box {
    flex-shrink: 0;
    position: relative;
    width: 34px;
    height: 14px;
    border-radius: 20px;
    background-color: var(--surface-on-4);
    transition: all .2s ease-in-out
}

.AlphaSwitch__box:before {
    content: "";
    position: absolute;
    top: -3px;
    left: 0;
    width: 20px;
    height: 20px;
    background-color: var(--white);
    border-radius: 50%;
    box-shadow: 0 2px 4px #0000001a;
    transition: all .2s ease-in-out
}

.AlphaSwitch--checked .AlphaSwitch__box {
    background-color: var(--secondary-1)
}

.AlphaSwitch--checked .AlphaSwitch__box:before {
    left: calc(100% - 20px)
}

.AlphaSwitch--disabled {
    pointer-events: none;
    color: var(--surface-on-3)
}

.AlphaSwitch--disabled.AlphaSwitch--checked .AlphaSwitch__box {
    background-color: var(--surface-on-3)
}

.AlphaSwitch--md {
    padding: 12px 26px 12px 16px;
    font-size: 16px;
    line-height: 24px;
    font-weight: 600
}

.AlphaSwitch--md .AlphaSwitch__icon {
    margin-right: 16px;
    width: 24px;
    height: 24px
}

.AlphaSwitch--sm {
    padding: 10px 8px 10px 12px;
    font-size: 12px;
    line-height: 20px;
    font-weight: 400
}

.AlphaSwitch--sm .AlphaSwitch__icon {
    margin-right: 10px;
    width: 16px;
    height: 16px
}

.AlphaSidebar {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    width: 84px;
    height: 100%;
    padding: 16px 12px 56px;
    background-color: var(--surface);
    border-right: 1px solid var(--primary-disabled);
    overflow: auto
}

@media (max-width: 991.98px) {
    .AlphaSidebar {
        width:100%;
        height: 56px;
        padding: 6px 8px;
        border-top: 1px solid var(--primary-disabled);
        border-right: 0;
        box-shadow: 0 0 16px #0000001a;
        overflow: unset
    }
}

.AlphaSidebar__logo {
    display: flex
}

.AlphaSidebar__logo svg {
    width: 60px;
    height: 60px;
    color: var(--logo)
}

.AlphaSidebar__nav {
    flex: 1 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 36px
}

@media (max-width: 991.98px) {
    .AlphaSidebar__nav {
        flex-direction:row;
        justify-content: center
    }
}

.AlphaSidebar__nav-block {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    gap: 36px
}

@media (max-width: 991.98px) {
    .AlphaSidebar__nav-block {
        flex-direction:row;
        gap: 64px
    }
}

@media (max-width: 575.98px) {
    .AlphaSidebar__nav-block {
        flex:1 1;
        gap: 16px
    }
}

.AlphaSelect {
    font-size: 16px;
    line-height: 28px;
    font-weight: 400;
    width: 100%;
    color: var(--text);
    background-color: var(--background);
    border: none;
    outline: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: pointer
}

@media (max-width: 991.98px) {
    .AlphaSelect {
        font-size:14px;
        line-height: 20px;
        line-height: 28px
    }
}

.AlphaSelect:-ms-input-placeholder {
    color: var(--surface-on-2)
}

.AlphaSelect::placeholder {
    color: var(--surface-on-2)
}

.AlphaSelect::selection {
    background-color: transparent
}

.AlphaSelect:focus {
    border-bottom-color: var(--primary-1)
}

.AlphaSelect:disabled {
    cursor: default
}

.AlphaSelect__wrapper {
    max-width: 420px;
    width: 100%
}

@media (max-width: 991.98px) {
    .AlphaSelect__wrapper {
        max-width:320px
    }
}

.AlphaSelect__container {
    position: relative
}

.AlphaSelect__icon {
    pointer-events: none;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 16px;
    display: flex;
    align-items: center
}

.AlphaSelect__icon--active {
    transform: rotateX(180deg)
}

.AlphaSelect__note {
    font-size: 12px;
    line-height: 20px;
    font-weight: 400;
    padding: 4px 16px;
    min-height: 28px;
    color: var(--surface-on-2);
    text-align: left
}

.AlphaSelect--standard .AlphaSelect {
    padding: 14px 40px 14px 16px;
    border-bottom: 1px solid var(--surface-on-3);
    border-radius: 4px 4px 0 0
}

.AlphaSelect--standard .AlphaSelect__icon {
    color: var(--surface-on-3)
}

.AlphaSelect--filled .AlphaSelect {
    padding: 10px 40px 10px 16px;
    border-radius: 8px
}

@media (max-width: 991.98px) {
    .AlphaSelect--filled .AlphaSelect {
        font-size:12px;
        line-height: 20px;
        font-weight: 400;
        padding-top: 7px;
        padding-bottom: 7px
    }
}

.AlphaSelect--filled .AlphaSelect__icon {
    color: var(--surface-on-1)
}

.AlphaSelect--filled .AlphaSelect__note {
    display: none
}

.AlphaSelect--error .AlphaSelect:-ms-input-placeholder {
    color: var(--danger-1);
    border-bottom-color: var(--danger-1)
}

.AlphaSelect--error .AlphaSelect,.AlphaSelect--error .AlphaSelect::placeholder,.AlphaSelect--error .AlphaSelect__note {
    color: var(--danger-1);
    border-bottom-color: var(--danger-1)
}

.AlphaRadioGroup {
    display: flex;
    flex-direction: column
}

@media (max-width: 991.98px) {
    .AlphaRadioGroup {
        align-items:center
    }
}

.AlphaRadioGroup__list {
    display: flex;
    flex-wrap: wrap
}

@media (max-width: 991.98px) {
    .AlphaRadioGroup__list {
        justify-content:center
    }
}

.AlphaRadioGroup--md .AlphaRadioGroup__list {
    gap: 24px
}

@media (max-width: 991.98px) {
    .AlphaRadioGroup--md .AlphaRadioGroup__list {
        gap:8px
    }
}

.AlphaRadioGroup--sm .AlphaRadioGroup__list {
    gap: 8px
}

.AlphaRadioGroup--disabled .AlphaRadioGroup:not(.AlphaRadioGroup--selected) {
    pointer-events: none;
    color: var(--surface-on-3)
}

@media (max-width: 575.98px) {
    .AlphaRadioGroup--hide-mobile .AlphaRadioGroup:nth-child(n+16) {
        display:none
    }
}

.AlphaRadioGroup .AlphaButton {
    display: none;
    min-width: 100px;
    margin-top: 24px
}

@media (max-width: 575.98px) {
    .AlphaRadioGroup .AlphaButton {
        display:inline-flex
    }
}

.AlphaPreScreen__backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1090;
    background-color: var(--background);
    will-change: opacity
}

.AlphaPreScreen__backdrop,.AlphaPreScreen__container {
    display: flex;
    justify-content: center;
    align-items: center
}

.AlphaPreScreen__container {
    width: 120px;
    height: 120px;
    padding: 8px;
    color: var(--logo);
    background-color: var(--surface);
    box-shadow: 0 0 16px #0000001a;
    border-radius: 36px
}

@media (max-width: 991.98px) {
    .AlphaPreScreen__container {
        width:80px;
        height: 80px;
        border-radius: 20px
    }
}

.AlphaPreScreen__container svg {
    width: 100%;
    height: 100%
}

.AlphaPreScreen__container svg rect {
    fill: transparent
}

.AlphaPreScreen-exit {
    opacity: 1
}

.AlphaPreScreen-exit-active {
    opacity: 0;
    transition: opacity .5s ease-in-out
}

.AlphaPlaceholder {
    flex: 1 1 auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-bottom: 64px
}

@media (max-width: 991.98px) {
    .AlphaPlaceholder {
        margin-bottom:32px
    }
}

.AlphaPlaceholder__img {
    margin-bottom: 32px
}

@media (max-width: 991.98px) {
    .AlphaPlaceholder__img {
        margin-bottom:16px
    }
}

.AlphaPlaceholder__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 39px;
    line-height: 48px;
    text-align: center;
    white-space: pre-line
}

@media (max-width: 991.98px) {
    .AlphaPlaceholder__title {
        font-size:20px;
        line-height: 28px
    }
}

.AlphaPlaceholder__message {
    font-size: 16px;
    line-height: 28px;
    font-weight: 400;
    max-width: 510px;
    margin-top: 16px;
    text-align: center
}

@media (max-width: 991.98px) {
    .AlphaPlaceholder__message {
        font-size:14px;
        line-height: 20px;
        max-width: 320px;
        margin-top: 8px
    }
}

.AlphaPlaceholder__actions {
    display: flex;
    justify-content: center;
    gap: 24px;
    margin-top: 32px
}

@media (max-width: 991.98px) {
    .AlphaPlaceholder__actions {
        flex-direction:column;
        gap: 16px;
        margin-top: 24px
    }
}

.AlphaPlaceholder--xl .AlphaPlaceholder__img {
    width: 400px;
    height: 400px
}

@media (max-width: 991.98px) {
    .AlphaPlaceholder--xl .AlphaPlaceholder__img {
        width:320px;
        height: 320px
    }
}

@media (max-width: 767.98px) {
    .AlphaPlaceholder--xl .AlphaPlaceholder__img {
        width:200px;
        height: 200px
    }
}

.AlphaPlaceholder--lg .AlphaPlaceholder__img {
    width: 260px;
    height: 320px
}

@media (max-width: 767.98px) {
    .AlphaPlaceholder--lg .AlphaPlaceholder__img {
        width:160px;
        height: 200px
    }
}

.AlphaPlaceholder--md .AlphaPlaceholder__img {
    width: 160px;
    height: 160px
}

@media (max-width: 767.98px) {
    .AlphaPlaceholder--md .AlphaPlaceholder__img {
        width:80px;
        height: 80px
    }
}

.AlphaPlaceholder--sm {
    margin-bottom: 32px
}

.AlphaPlaceholder--sm .AlphaPlaceholder__img {
    width: 120px;
    height: 120px
}

@media (max-width: 767.98px) {
    .AlphaPlaceholder--sm .AlphaPlaceholder__img {
        width:80px;
        height: 80px
    }
}

.AlphaPlaceholder--sm .AlphaPlaceholder__message {
    max-width: unset
}

.AlphaPlaceholder--xs {
    margin-bottom: 32px
}

.AlphaPlaceholder--xs .AlphaPlaceholder__img {
    width: 80px;
    height: 80px;
    margin-bottom: 16px
}

.AlphaPlaceholder--xs .AlphaPlaceholder__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 24px;
    line-height: 32px
}

@media (max-width: 991.98px) {
    .AlphaPlaceholder--xs .AlphaPlaceholder__title {
        font-size:16px;
        line-height: 24px;
        position: relative;
        font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
        font-weight: 600;
        font-size: 39px;
        line-height: 48px
    }
}

@media (max-width: 991.98px) and (max-width:991.98px) {
    .AlphaPlaceholder--xs .AlphaPlaceholder__title {
        font-size:20px;
        line-height: 28px
    }
}

.AlphaPlaceholder--xs .AlphaPlaceholder__message {
    max-width: unset;
    margin-bottom: 8px
}

.AlphaPlaceholder--xs .AlphaPlaceholder__actions {
    margin-top: 24px
}

.AlphaPlaceholder .AlphaButton {
    min-width: 200px
}

@media (max-width: 991.98px) {
    .AlphaPlaceholder .AlphaButton {
        min-width:160px
    }
}

.AlphaRangeSlider {
    display: flex;
    align-items: center;
    gap: 20px
}

.AlphaRangeSlider__input {
    flex: 1 1 auto;
    -webkit-appearance: none;
    appearance: none;
    height: 8px;
    background-color: var(--surface-light);
    background-image: linear-gradient(var(--primary-1),var(--primary-1),var(--primary-1));
    background-size: 0 100%;
    background-repeat: no-repeat;
    border-radius: 4px;
    outline: none
}

.AlphaRangeSlider__input::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background-color: var(--primary-1);
    cursor: ew-resize;
    -webkit-transition: background-color .3s ease-in-out;
    transition: background-color .3s ease-in-out
}

.AlphaRangeSlider__input::-webkit-slider-thumb:hover {
    background-color: var(--primary-2)
}

.AlphaRangeSlider__input::-moz-range-thumb {
    -webkit-appearance: none;
    appearance: none;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background-color: var(--primary-1);
    cursor: ew-resize;
    -moz-transition: background-color .3s ease-in-out;
    transition: background-color .3s ease-in-out
}

.AlphaRangeSlider__input::-moz-range-thumb:hover {
    background-color: var(--primary-2)
}

.AlphaRangeSlider__input::-ms-thumb {
    -webkit-appearance: none;
    appearance: none;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background-color: var(--primary-1);
    cursor: ew-resize;
    -ms-transition: background-color .3s ease-in-out;
    transition: background-color .3s ease-in-out
}

.AlphaRangeSlider__input::-ms-thumb:hover {
    background-color: var(--primary-2)
}

.AlphaRangeSlider__input::-webkit-slider-runnable-track {
    -webkit-appearance: none;
    appearance: none;
    box-shadow: none;
    border: none;
    background: transparent
}

.AlphaRangeSlider__input::-moz-range-track {
    -webkit-appearance: none;
    appearance: none;
    box-shadow: none;
    border: none;
    background: transparent
}

.AlphaRangeSlider__input::-ms-track {
    -webkit-appearance: none;
    appearance: none;
    box-shadow: none;
    border: none;
    background: transparent
}

@media (max-width: 991.98px) {
    .AlphaRangeSlider .AlphaButton {
        display:none
    }
}

.AlphaRadio {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    max-height: 48px;
    padding: 11px 24px;
    background-color: var(--surface);
    border: 1px solid var(--primary-disabled);
    border-radius: 8px;
    transition: all .3s ease-in-out;
    cursor: pointer
}

@media (max-width: 991.98px) {
    .AlphaRadio {
        padding:11px 16px
    }
}

.AlphaRadio__input {
    display: none
}

.AlphaRadio__label {
    width: 100%;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    text-align: center
}

.AlphaRadio__icon {
    height: 36px
}

@media (max-width: 767.98px) {
    .AlphaRadio__icon {
        display:none
    }
}

.AlphaRadio__box {
    position: relative;
    display: inline-block;
    flex-shrink: 0;
    width: 14px;
    height: 14px;
    border: 1px solid var(--surface-on-3);
    border-radius: 50%;
    transition: all .3s ease-in-out
}

.AlphaRadio__box svg {
    position: absolute;
    top: 3px;
    left: 2px;
    fill: transparent;
    transition-delay: .1s
}

.AlphaRadio--basic {
    min-width: auto;
    padding: 0;
    border: 0
}

.AlphaRadio--basic .AlphaRadio__box {
    width: 18px;
    height: 18px
}

.AlphaRadio--basic .AlphaRadio__box svg {
    width: 12px;
    height: 9px
}

.AlphaRadio--selected {
    pointer-events: none;
    border-color: var(--primary-1)
}

.AlphaRadio--selected .AlphaRadio__box {
    background-color: var(--primary-1);
    border-color: var(--primary-1)
}

.AlphaRadio--selected .AlphaRadio__box svg {
    fill: var(--white)
}

.AlphaRadio--disabled {
    pointer-events: none;
    color: var(--surface-on-3)
}

.AlphaRadio--disabled .AlphaRadio__box,.AlphaRadio--disabled.AlphaRadio--selected {
    border-color: var(--surface-on-3)
}

.AlphaRadio--disabled.AlphaRadio--selected .AlphaRadio__box {
    background-color: var(--surface-on-3)
}

.AlphaRadio--block {
    width: 100%
}

.AlphaRadio--md {
    font-size: 16px;
    line-height: 24px;
    font-weight: 600
}

@media (max-width: 991.98px) {
    .AlphaRadio--md {
        font-size:14px
    }
}

.AlphaRadio--sm {
    font-size: 12px;
    line-height: 20px;
    font-weight: 400
}

@media (max-width: 991.98px) {
    .AlphaRadio--sm {
        padding:8px
    }
}

.AlphaTable {
    width: 100%;
    padding: 0 32px;
    background-color: var(--surface);
    border-collapse: separate;
    border-spacing: 0
}

@media (max-width: 991.98px) {
    .AlphaTable {
        padding:0 16px
    }
}

.AlphaTable__wrapper {
    width: 100%;
    height: 100%;
    overflow: auto
}

.AlphaTable__header {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1;
    background-color: inherit
}

.AlphaTable__row:last-child .AlphaTableCell {
    border-bottom: none
}

.AlphaTabs {
    display: flex;
    border: 1px solid transparent
}

.AlphaTabs--primary {
    background-color: var(--surface);
    border-color: var(--primary-disabled)
}

.AlphaTabs--primary .AlphaTabsItem--active {
    color: var(--black);
    background-color: var(--highlighter)
}

.AlphaTabs--secondary {
    background-color: var(--surface-medium)
}

.AlphaTabs--secondary .AlphaTabsItem--active {
    color: var(--primary-1);
    background-color: var(--surface)
}

.AlphaTabs--md {
    font-size: 16px;
    line-height: 28px;
    font-weight: 400;
    padding: 8px;
    font-weight: 600;
    border-radius: 28px
}

@media (max-width: 991.98px) {
    .AlphaTabs--md {
        font-size:14px;
        line-height: 20px
    }
}

.AlphaTabs--md .AlphaTabsItem {
    padding: 16px
}

@media (max-width: 991.98px) {
    .AlphaTabs--md .AlphaTabsItem {
        padding:10px 16px
    }
}

.AlphaTabs--sm {
    font-size: 12px;
    line-height: 20px;
    font-weight: 400;
    padding: 4px;
    border-radius: 8px
}

.AlphaTabs--sm .AlphaTabsItem {
    padding: 2px 16px
}

.AlphaText--default {
    color: var(--text)
}

.AlphaText--primary {
    color: var(--primary-1)
}

.AlphaText--secondary {
    color: var(--secondary-1)
}

.AlphaText--gray {
    color: var(--surface-on-3)
}

.AlphaText--error {
    color: var(--danger-1)
}

.AlphaText--success {
    color: var(--success)
}

.AlphaText--highlighter {
    color: var(--highlighter)
}

.AlphaTextarea {
    font-size: 16px;
    line-height: 28px;
    font-weight: 400;
    flex: 1 1 auto;
    max-width: 800px;
    min-height: 200px;
    width: 100%;
    padding: 16px;
    color: var(--text);
    background-color: var(--background);
    border: none;
    border-radius: 4px;
    outline: none;
    resize: none
}

@media (max-width: 991.98px) {
    .AlphaTextarea {
        font-size:14px;
        line-height: 20px;
        min-height: 260px
    }
}

@media (max-width: 575.98px) {
    .AlphaTextarea {
        min-height:220px
    }
}

.AlphaTextarea:-ms-input-placeholder {
    color: var(--surface-on-2)
}

.AlphaTextarea::placeholder {
    color: var(--surface-on-2)
}

.AlphaTextarea:disabled {
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: var(--surface-on-4)
}

.AlphaTextarea__wrapper {
    display: flex;
    flex-direction: column;
    width: 100%
}

.AlphaTextarea__hint {
    margin-bottom: 24px
}

.AlphaTextarea__hint,.AlphaTextarea__note {
    font-size: 12px;
    line-height: 20px;
    font-weight: 400;
    color: var(--surface-on-2)
}

.AlphaTextarea__note {
    padding: 4px 0;
    min-height: 28px;
    text-align: left
}

.AlphaTextarea--error .AlphaTextarea__note {
    color: var(--danger-1)
}

.AlphaTooltip {
    position: absolute;
    z-index: 1010;
    padding: 16px;
    text-align: left;
    border-radius: 10px;
    box-shadow: 0 2px 4px #0000001a;
    opacity: 0;
    visibility: hidden;
    will-change: opacity,visability,transform;
    transition: all .3s ease-in-out
}

@media (max-width: 991.98px) {
    .AlphaTooltip {
        width:320px!important
    }
}

@media (max-width: 767.98px) {
    .AlphaTooltip {
        position:fixed;
        left: 50%!important;
        right: unset!important;
        transform: translate(-50%,24px)!important;
        transition-property: opacity,visibility
    }
}

.AlphaTooltip__title {
    font-size: 14px;
    font-weight: 600
}

.AlphaTooltip__text,.AlphaTooltip__title {
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    line-height: 20px;
    color: var(--text)
}

.AlphaTooltip__text {
    font-size: 12px;
    font-weight: 400;
    white-space: normal
}

.AlphaTooltip--info {
    background-color: var(--surface-medium)
}

.AlphaTooltip--success {
    background-color: var(--surface-success)
}

.AlphaTooltip--error {
    background-color: var(--surface-error)
}

.AlphaTooltip--top {
    bottom: calc(100% + 8px);
    left: 50%;
    transform: translate(-50%) translateY(-16px)
}

.AlphaTooltip--top-left {
    right: 100%
}

.AlphaTooltip--top-left,.AlphaTooltip--top-right {
    bottom: calc(100% + 8px);
    transform: translateY(-16px)
}

.AlphaTooltip--top-right {
    left: 100%
}

.AlphaTooltip--inside-top-left {
    bottom: calc(100% + 8px);
    left: 0;
    transform: translateY(-16px)
}

.AlphaTooltip--inside-top-right {
    bottom: calc(100% + 8px);
    right: 0;
    transform: translateY(-16px)
}

.AlphaTooltip--bottom {
    top: calc(100% + 8px);
    left: 50%;
    transform: translate(-50%) translateY(16px)
}

.AlphaTooltip--bottom-left {
    top: calc(100% + 8px);
    right: 100%;
    transform: translateY(16px)
}

.AlphaTooltip--bottom-right {
    top: calc(100% + 8px);
    left: 100%;
    transform: translateY(16px)
}

.AlphaTooltip--inside-bottom-left {
    top: calc(100% + 8px);
    left: 0;
    transform: translateY(16px)
}

.AlphaTooltip--inside-bottom-right {
    top: calc(100% + 8px);
    right: 0;
    transform: translateY(16px)
}

.AlphaTooltip--left {
    top: 50%;
    right: calc(100% + 8px);
    transform: translateY(-50%) translate(-16px)
}

.AlphaTooltip--right {
    top: 50%;
    left: calc(100% + 8px);
    transform: translateY(-50%) translate(16px)
}

.AlphaTooltip__wrapper {
    position: relative;
    display: inline-flex
}

.AlphaTooltip__wrapper:hover .AlphaTooltip {
    opacity: 1;
    visibility: visible
}

.AlphaTooltip__wrapper:hover .AlphaTooltip--bottom,.AlphaTooltip__wrapper:hover .AlphaTooltip--top {
    transform: translate(-50%) translateY(0)
}

.AlphaTooltip__wrapper:hover .AlphaTooltip--left,.AlphaTooltip__wrapper:hover .AlphaTooltip--right {
    transform: translateY(-50%) translate(0)
}

.AlphaTooltip__wrapper:hover .AlphaTooltip--bottom-left,.AlphaTooltip__wrapper:hover .AlphaTooltip--bottom-right,.AlphaTooltip__wrapper:hover .AlphaTooltip--inside-bottom-left,.AlphaTooltip__wrapper:hover .AlphaTooltip--inside-bottom-right,.AlphaTooltip__wrapper:hover .AlphaTooltip--inside-top-left,.AlphaTooltip__wrapper:hover .AlphaTooltip--inside-top-right,.AlphaTooltip__wrapper:hover .AlphaTooltip--top-left,.AlphaTooltip__wrapper:hover .AlphaTooltip--top-right {
    transform: translateY(0)
}

.AlphaWizard {
    display: flex;
    justify-content: space-between;
    align-items: center
}

@media (max-width: 991.98px) {
    .AlphaWizard {
        overflow:hidden
    }
}

.AlphaWizard .AlphaWizardItem:not(.AlphaWizardItem--active,.AlphaWizardItem--active~.AlphaWizardItem) .WizardItem__icon {
    filter: grayscale(0)
}

.AlphaWizard .AlphaWizardItem:not(.AlphaWizardItem--active,.AlphaWizardItem--disabled,.AlphaWizardItem--active~.AlphaWizardItem):after {
    background-color: var(--primary-1)
}

.AlphaWizard .AlphaWizardItem:not(.AlphaWizardItem--active,.AlphaWizardItem--disabled,.AlphaWizardItem--active~.AlphaWizardItem) .AlphaWizardItem__icon {
    filter: grayscale(0)
}

.AlphaWizard .AlphaWizardItem:not(.AlphaWizardItem--active,.AlphaWizardItem--disabled,.AlphaWizardItem--active~.AlphaWizardItem) .AlphaWizardItem__icon-wrapper {
    background-color: var(--surface-light);
    border-color: var(--primary-1)
}

.AlphaWizard .AlphaWizardItem:not(.AlphaWizardItem--active,.AlphaWizardItem--disabled,.AlphaWizardItem--active~.AlphaWizardItem) .AlphaWizardItem__label {
    color: var(--text)
}

.AlphaWizard--error .AlphaWizardItem--active:after {
    background-color: var(--surface-on-4)
}

.AlphaWizard--error .AlphaWizardItem--active .AlphaWizardItem__icon-wrapper {
    border-color: var(--danger-1)
}

.AlphaWizard--error .AlphaWizardItem--active .AlphaWizardItem__label {
    color: var(--danger-1)
}

.AlphaWizard--success .AlphaWizardItem--active:last-child:after,.AlphaWizard--success .AlphaWizardItem:not(.AlphaWizardItem--active,.AlphaWizardItem--disabled,.AlphaWizardItem--active~.AlphaWizardItem):after {
    background-color: var(--success)
}

.AlphaWizard--success .AlphaWizardItem--active:last-child .AlphaWizardItem__icon-wrapper,.AlphaWizard--success .AlphaWizardItem:not(.AlphaWizardItem--active,.AlphaWizardItem--disabled,.AlphaWizardItem--active~.AlphaWizardItem) .AlphaWizardItem__icon-wrapper {
    background-color: var(--surface-success);
    border-color: var(--success)
}

.AlphaWizard--success .AlphaWizardItem--active:last-child .AlphaWizardItem__icon-wrapper:after,.AlphaWizard--success .AlphaWizardItem:not(.AlphaWizardItem--active,.AlphaWizardItem--disabled,.AlphaWizardItem--active~.AlphaWizardItem) .AlphaWizardItem__icon-wrapper:after {
    content: "✔"
}

.AlphaWizard--success .AlphaWizardItem--active:last-child .AlphaWizardItem__label,.AlphaWizard--success .AlphaWizardItem:not(.AlphaWizardItem--active,.AlphaWizardItem--disabled,.AlphaWizardItem--active~.AlphaWizardItem) .AlphaWizardItem__label {
    color: var(--surface-on-3)
}

.AlphaFileUpload {
    flex: 1 1 auto;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 32px;
    color: var(--primary-1);
    text-align: center;
    background-color: var(--surface);
    border: 2px dashed var(--primary-1);
    border-radius: 8px
}

@media (max-width: 991.98px) {
    .AlphaFileUpload {
        padding:16px
    }
}

.AlphaFileUpload__icon {
    margin-bottom: 32px;
    width: 80px;
    height: 80px
}

@media (max-width: 991.98px) {
    .AlphaFileUpload__icon {
        margin-bottom:12px;
        width: 36px;
        height: 36px
    }
}

.AlphaFileUpload__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 24px;
    line-height: 32px;
    margin-bottom: 8px
}

@media (max-width: 991.98px) {
    .AlphaFileUpload__title {
        font-size:16px;
        line-height: 24px
    }
}

.AlphaFileUpload__text {
    font-size: 14px;
    line-height: 22px;
    font-weight: 400;
    max-width: 350px;
    color: var(--surface-on-2)
}

@media (max-width: 991.98px) {
    .AlphaFileUpload__text {
        font-size:12px;
        line-height: 20px;
        max-width: 280px
    }
}

.AlphaFileUpload__input {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 0;
    outline: none;
    cursor: pointer
}

.AlphaFileUpload--disabled {
    pointer-events: none;
    color: var(--surface-on-3);
    border-color: var(--surface-on-4)
}

.AlphaFileUpload--disabled .AlphaFileUpload__text {
    color: var(--surface-on-3)
}

.AlphaFileUpload--disabled .AlphaFileUpload__input {
    cursor: default
}

.AlphaErrorBoundary {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh
}

.AlphaChipsItem {
    font-size: 12px;
    line-height: 20px;
    font-weight: 400;
    display: inline-flex;
    padding: 6px 16px;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    color: var(--text);
    white-space: nowrap;
    background-color: var(--surface-light);
    border-radius: 16px
}

a.AlphaChipsItem {
    transition: background-color .3s ease-in-out
}

a.AlphaChipsItem:hover {
    background-color: var(--surface-medium)
}

.AlphaDrawerContent {
    position: relative;
    height: 100%
}

.AlphaCollapsePanel,.AlphaDrawerContent {
    display: flex;
    flex-direction: column
}

.AlphaCollapsePanel:not(:last-child) {
    border-bottom: 1px solid var(--primary-disabled)
}

.AlphaCollapsePanel__toggle {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 24px;
    color: var(--text);
    background-color: var(--surface);
    border: 0
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel__toggle {
        gap:16px
    }
}

.AlphaCollapsePanel__content {
    flex: 1 1 auto;
    text-align: left
}

.AlphaCollapsePanel__text {
    color: var(--surface-on-2);
    white-space: pre-line
}

.AlphaCollapsePanel__icon {
    align-self: flex-start
}

.AlphaCollapsePanel__arrow {
    transition: transform .2s linear
}

.AlphaCollapsePanel__arrow--expanded {
    transform: rotateX(-180deg)
}

.AlphaCollapsePanel--lg .AlphaCollapsePanel__toggle {
    gap: 36px;
    padding: 36px
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--lg .AlphaCollapsePanel__toggle {
        gap:16px;
        padding: 24px 16px
    }
}

.AlphaCollapsePanel--lg .AlphaCollapsePanel__icon {
    width: 114px
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--lg .AlphaCollapsePanel__icon {
        width:56px
    }
}

.AlphaCollapsePanel--lg .AlphaCollapsePanel__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 31px;
    line-height: 40px;
    margin-bottom: 16px
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--lg .AlphaCollapsePanel__title {
        font-size:18px;
        line-height: 24px;
        position: relative;
        font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
        font-weight: 600;
        font-size: 39px;
        line-height: 48px;
        margin-bottom: 8px
    }
}

@media (max-width: 991.98px) and (max-width:991.98px) {
    .AlphaCollapsePanel--lg .AlphaCollapsePanel__title {
        font-size:20px;
        line-height: 28px
    }
}

.AlphaCollapsePanel--lg .AlphaCollapsePanel__text {
    font-size: 20px;
    line-height: 27px;
    font-weight: 400
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--lg .AlphaCollapsePanel__text {
        font-size:16px;
        line-height: 22px;
        font-size: 14px;
        font-weight: 400
    }
}

@media (max-width: 991.98px) and (max-width:991.98px) {
    .AlphaCollapsePanel--lg .AlphaCollapsePanel__text {
        font-size:12px;
        line-height: 20px
    }
}

.AlphaCollapsePanel--md .AlphaCollapsePanel__toggle {
    padding: 32px
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--md .AlphaCollapsePanel__toggle {
        padding:16px
    }
}

.AlphaCollapsePanel--md .AlphaCollapsePanel__icon {
    width: 56px
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--md .AlphaCollapsePanel__icon {
        width:36px
    }
}

.AlphaCollapsePanel--md .AlphaCollapsePanel__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 26px;
    line-height: 36px
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--md .AlphaCollapsePanel__title {
        font-size:16px;
        line-height: 24px
    }
}

.AlphaCollapsePanel--md .AlphaCollapsePanel__text {
    font-size: 14px;
    line-height: 22px;
    font-weight: 400
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--md .AlphaCollapsePanel__text {
        font-size:12px;
        line-height: 20px
    }
}

.AlphaCollapsePanel--sm .AlphaCollapsePanel__toggle {
    padding: 32px
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--sm .AlphaCollapsePanel__toggle {
        padding:16px
    }
}

.AlphaCollapsePanel--sm .AlphaCollapsePanel__icon {
    width: 48px
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--sm .AlphaCollapsePanel__icon {
        width:36px
    }
}

.AlphaCollapsePanel--sm .AlphaCollapsePanel__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--sm .AlphaCollapsePanel__title {
        font-size:14px;
        line-height: 20px
    }
}

.AlphaCollapsePanel--sm .AlphaCollapsePanel__text {
    font-size: 14px;
    line-height: 22px;
    font-weight: 400
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--sm .AlphaCollapsePanel__text {
        font-size:12px;
        line-height: 20px
    }
}

.AlphaCollapsePanel--xs .AlphaCollapsePanel__toggle {
    padding: 24px
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--xs .AlphaCollapsePanel__toggle {
        padding:16px
    }
}

.AlphaCollapsePanel--xs .AlphaCollapsePanel__icon {
    width: 48px
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--xs .AlphaCollapsePanel__icon {
        width:36px
    }
}

.AlphaCollapsePanel--xs .AlphaCollapsePanel__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px;
    font-size: 16px
}

@media (max-width: 991.98px) {
    .AlphaCollapsePanel--xs .AlphaCollapsePanel__title {
        font-size:14px;
        line-height: 20px
    }
}

.AlphaCollapsePanel--xs .AlphaCollapsePanel__text {
    font-size: 12px;
    line-height: 20px;
    font-weight: 400
}

.AlphaDrawerTitle {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 24px;
    line-height: 32px;
    display: flex;
    align-items: center;
    padding: 24px 16px
}

@media (max-width: 991.98px) {
    .AlphaDrawerTitle {
        font-size:16px;
        line-height: 24px
    }
}

.AlphaDrawerBody {
    flex: 1 1 auto;
    display: flex;
    flex-direction: column;
    padding: 0 24px 24px;
    overflow: auto
}

.AlphaAccordionPanel {
    display: flex;
    flex-direction: column;
    background-color: var(--surface);
    border: 1px solid var(--primary-disabled);
    border-radius: 8px;
    min-height: 64px;
    overflow: hidden
}

@media (max-width: 991.98px) {
    .AlphaAccordionPanel {
        min-height:48px
    }
}

.AlphaAccordionPanel__toggle {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    width: 100%;
    padding: 12px 16px 12px 24px;
    color: var(--text);
    text-align: left;
    background-color: var(--surface);
    border: 0
}

@media (max-width: 991.98px) {
    .AlphaAccordionPanel__toggle {
        padding:12px 16px
    }
}

.AlphaAccordionPanel__collapse {
    border-top: 1px solid var(--primary-disabled);
    overflow: auto
}

.AlphaAccordionPanel__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px
}

@media (max-width: 991.98px) {
    .AlphaAccordionPanel__title {
        font-size:14px;
        line-height: 20px;
        position: relative;
        font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
        font-weight: 600;
        font-size: 26px;
        line-height: 36px
    }
}

@media (max-width: 991.98px) and (max-width:991.98px) {
    .AlphaAccordionPanel__title {
        font-size:16px;
        line-height: 24px
    }
}

.AlphaAccordionPanel__container {
    display: flex;
    align-items: center;
    gap: 8px
}

.AlphaAccordionPanel__tag {
    font-size: 16px;
    line-height: 28px;
    font-weight: 400;
    padding: 4px 16px;
    white-space: nowrap;
    border: 1px solid var(--primary-disabled);
    border-radius: 24px
}

@media (max-width: 991.98px) {
    .AlphaAccordionPanel__tag {
        font-size:14px;
        line-height: 20px;
        padding: 0 8px;
        border: 0
    }
}

.AlphaAccordionPanel--primary .AlphaBadge {
    color: var(--primary-1)
}

.AlphaAccordionPanel--error .AlphaBadge {
    color: var(--danger-1);
    background-color: var(--surface-error)
}

.AlphaAccordionPanel--collapsible .AlphaAccordionPanel__toggle {
    cursor: pointer
}

.AlphaAccordionPanel__arrow {
    transition: transform .2s linear
}

.AlphaAccordionPanel__arrow--expanded {
    transform: rotateX(180deg)
}

.AlphaAccordionItem {
    display: flex;
    align-items: center;
    transition: all .3s ease-in-out
}

.AlphaAccordionItem:hover {
    color: var(--primary-1)
}

.AlphaAccordionItem:not(:last-child) {
    border-bottom: 1px solid var(--primary-disabled)
}

@media (max-width: 991.98px) {
    .AlphaAccordionItem:not(:last-child) {
        border-bottom:0
    }
}

.AlphaAccordionItem__button {
    font-size: 16px;
    line-height: 28px;
    font-weight: 400;
    width: 100%;
    padding: 16px 16px 16px 24px;
    color: inherit;
    text-align: left;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    background-color: transparent;
    border: 0;
    transition: color .3s ease-in-out;
    cursor: pointer
}

@media (max-width: 991.98px) {
    .AlphaAccordionItem__button {
        font-size:14px;
        line-height: 20px;
        line-height: 22px;
        font-weight: 400;
        padding: 14px 16px
    }
}

@media (max-width: 991.98px) and (max-width:991.98px) {
    .AlphaAccordionItem__button {
        font-size:12px;
        line-height: 20px
    }
}

.AlphaAccordionItem__actions {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 0 16px
}

.AlphaAccordionItem--active {
    color: var(--primary-1);
    background-color: var(--surface-light)
}

.AlphaAccordionItem .AlphaDropdownList-enter {
    transform: translateY(8px)
}

.AlphaAccordionItem .AlphaDropdownList-enter-active,.AlphaAccordionItem .AlphaDropdownList-exit {
    transform: translateY(0)
}

.AlphaAccordionItem .AlphaDropdownList-exit-active {
    transform: translateY(8px)
}

.AlphaDropdownList {
    position: absolute;
    top: 100%;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    padding: 8px 0;
    background-color: var(--surface);
    border: 1px solid var(--primary-disabled);
    border-radius: 8px;
    outline: none;
    transform-origin: top center;
    will-change: transform,opacity
}

@media (max-width: 991.98px) {
    .AlphaDropdownList {
        padding:0
    }
}

.AlphaDropdownList-enter {
    position: relative;
    z-index: 1000;
    opacity: 0;
    transform: scaleY(0)
}

.AlphaDropdownList-enter-active {
    opacity: 1;
    transform: scaleY(1);
    transition: transform .3s ease-out,opacity .3s ease-out
}

.AlphaDropdownList-exit {
    position: relative;
    z-index: 1000;
    opacity: 1;
    transform: scaleY(1)
}

.AlphaDropdownList-exit-active {
    opacity: 0;
    transform: scaleY(0);
    transition: transform .3s ease-out,opacity .3s ease-out
}

.AlphaDropdownItem {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px 24px;
    font-size: 20px;
    font-weight: 400;
    line-height: 28px;
    white-space: nowrap;
    color: var(--text);
    background-color: var(--surface);
    border: 0;
    transition: color .3s ease-in-out;
    cursor: pointer
}

@media (max-width: 991.98px) {
    .AlphaDropdownItem {
        padding:16px;
        font-size: 16px;
        line-height: 22px
    }
}

.AlphaDropdownItem:hover {
    color: var(--primary-1)
}

@media (max-width: 991.98px) {
    .AlphaDropdownItem__icon {
        display:none
    }
}

.AlphaDropdownItem--disabled,.AlphaDropdownItem:disabled {
    pointer-events: none;
    color: var(--surface-on-3)
}

.AlphaDropdownItem--error {
    color: var(--danger-1)
}

.AlphaDropdownItem--error:hover {
    color: var(--danger-3)
}

.AlphaBreadcrumbsItem {
    font-size: 14px;
    line-height: 22px;
    font-weight: 400;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif
}

@media (max-width: 991.98px) {
    .AlphaBreadcrumbsItem {
        font-size:12px;
        line-height: 20px
    }
}

.AlphaBreadcrumbsItem:last-child .AlphaBreadcrumbsItem__divider {
    display: none
}

.AlphaBreadcrumbsItem__link {
    padding: 0 4px;
    color: var(--surface-on-2);
    border-radius: 4px;
    transition: all .2s ease-in-out
}

.AlphaBreadcrumbsItem__link:hover {
    color: var(--surface-on-1);
    background-color: var(--surface-on-4)
}

.AlphaBreadcrumbsItem__divider {
    margin: 0 2px;
    color: var(--surface-on-2)
}

.AlphaBreadcrumbsItem--active .AlphaBreadcrumbsItem__link {
    pointer-events: none;
    color: var(--surface-on-1)
}

@media (max-width: 991.98px) {
    .AlphaFormField {
        display:flex;
        flex-direction: column;
        background-color: var(--surface);
        border-radius: 8px;
        border: 1px solid var(--primary-disabled);
        align-items: center;
        padding: 32px 16px 24px;
        text-align: center
    }
}

.AlphaFormField__title {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 24px;
    line-height: 32px
}

@media (max-width: 991.98px) {
    .AlphaFormField__title {
        font-size:15px;
        line-height: 22px
    }
}

.AlphaFormField__title-wrapper {
    display: flex;
    align-items: center;
    gap: 8px
}

.AlphaFormField__text {
    font-size: 16px;
    line-height: 28px;
    font-weight: 400;
    margin-top: 16px;
    white-space: pre-line
}

@media (max-width: 991.98px) {
    .AlphaFormField__text {
        font-size:14px;
        line-height: 20px;
        line-height: 22px;
        font-weight: 400;
        margin-top: 12px;
        white-space: normal
    }
}

@media (max-width: 991.98px) and (max-width:991.98px) {
    .AlphaFormField__text {
        font-size:12px;
        line-height: 20px
    }
}

.AlphaFormField__note {
    font-size: 14px;
    line-height: 22px;
    font-weight: 400;
    margin-top: 8px;
    color: var(--surface-on-3);
    white-space: pre-line
}

@media (max-width: 991.98px) {
    .AlphaFormField__note {
        font-size:12px;
        line-height: 20px;
        white-space: normal
    }
}

.AlphaFormField__input {
    display: flex;
    flex-direction: column;
    gap: 12px;
    width: 100%;
    margin-top: 24px
}

@media (max-width: 991.98px) {
    .AlphaFormField__input {
        align-items:center;
        gap: 4px
    }
}

.AlphaFormField--required .AlphaFormField__title:after {
    content: " *";
    color: var(--danger-1)
}

.AlphaFormField--textarea .AlphaFormField__input {
    margin-top: 8px
}

.AlphaFormField--input:not(:last-child),.AlphaFormField--textarea:not(:last-child) {
    margin-bottom: 20px
}

@media (max-width: 991.98px) {
    .AlphaFormField--input:not(:last-child),.AlphaFormField--textarea:not(:last-child) {
        margin-bottom:16px
    }
}

.AlphaFormField--checkbox:not(:last-child),.AlphaFormField--radio:not(:last-child) {
    margin-bottom: 48px
}

@media (max-width: 991.98px) {
    .AlphaFormField--checkbox:not(:last-child),.AlphaFormField--radio:not(:last-child) {
        margin-bottom:16px
    }
}

.AlphaHeaderItem {
    position: relative;
    display: flex;
    flex-direction: column;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-size: 14px;
    line-height: 18px;
    font-weight: 600;
    white-space: nowrap
}

@media (max-width: 991.98px) {
    .AlphaHeaderItem {
        font-size:18px;
        line-height: 24px
    }
}

.AlphaHeaderItem:hover .AlphaHeaderItem__dropdown {
    display: block
}

.AlphaHeaderItem__dropdown {
    display: flex;
    flex-direction: column;
    background-color: var(--surface);
    border-radius: 8px;
    border: 1px solid var(--primary-disabled);
    position: absolute;
    top: 100%;
    left: -16px;
    z-index: 1000;
    display: none;
    min-width: 230px
}

@media (max-width: 991.98px) {
    .AlphaHeaderItem__dropdown {
        position:relative;
        top: -8px;
        left: unset;
        display: block;
        border: 0
    }
}

.AlphaHeaderItem__dropdown .AlphaHeaderItem__link {
    padding: 16px 24px;
    font-family: var(--font-open-sans),"Roboto","Arial",sans-serif;
    font-size: 16px;
    font-weight: 400
}

@media (max-width: 991.98px) {
    .AlphaHeaderItem__dropdown .AlphaHeaderItem__link {
        padding:8px;
        font-size: 14px
    }
}

.AlphaHeaderItem__dropdown .AlphaHeaderItem__link:not(:last-child) {
    border-bottom: 1px solid var(--primary-disabled)
}

@media (max-width: 991.98px) {
    .AlphaHeaderItem__dropdown .AlphaHeaderItem__link:not(:last-child) {
        border-bottom:none
    }
}

.AlphaHeaderItem__link {
    display: flex;
    width: 100%;
    padding: 16px 8px;
    color: var(--text);
    transition: color .3s ease-in-out;
    cursor: pointer
}

@media (max-width: 991.98px) {
    .AlphaHeaderItem__link {
        justify-content:center
    }
}

.AlphaHeaderItem__link:hover {
    color: var(--primary-1)
}

.AlphaHeaderItem__icon {
    width: 8px;
    margin-left: 8px
}

@media (max-width: 991.98px) {
    .AlphaHeaderItem__icon {
        margin-left:16px;
        margin-right: -28px;
        width: 12px
    }
}

.AlphaHeaderItem--active {
    color: var(--primary-1)
}

.AlphaImageCropEditor__container {
    position: relative;
    height: 300px!important;
    margin-bottom: 24px
}

@media (max-width: 991.98px) {
    .AlphaImageCropEditor__container {
        height:220px!important
    }
}

.AlphaImageCropEditor__slider {
    padding: 0 48px
}

@media (max-width: 991.98px) {
    .AlphaImageCropEditor__slider {
        padding:0
    }
}

.AlphaModalContent {
    display: flex;
    flex-direction: column;
    height: 100%;
    overflow: auto
}

.AlphaModalFooter {
    display: flex;
    justify-content: center;
    margin-top: 32px;
    gap: 24px
}

@media (max-width: 991.98px) {
    .AlphaModalFooter {
        margin-top:16px;
        gap: 16px
    }
}

.AlphaModalFooter .AlphaButton {
    min-width: 160px
}

@media (max-width: 991.98px) {
    .AlphaModalFooter .AlphaButton {
        min-width:unset;
        width: 100%
    }
}

.AlphaModalText {
    font-size: 16px;
    line-height: 28px;
    font-weight: 400
}

@media (max-width: 991.98px) {
    .AlphaModalText {
        font-size:14px;
        line-height: 20px
    }
}

.AlphaModalInput {
    display: flex;
    justify-content: center;
    margin-top: 32px;
    height: 100%
}

@media (max-width: 991.98px) {
    .AlphaModalInput {
        margin-top:24px
    }
}

.AlphaModalInput .AlphaTextarea__wrapper {
    flex: 1 1 auto
}

.AlphaModalInput .AlphaTextarea__note {
    display: none
}

.AlphaModalTitle {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 24px;
    line-height: 32px;
    margin-bottom: 16px
}

@media (max-width: 991.98px) {
    .AlphaModalTitle {
        font-size:16px;
        line-height: 24px;
        position: relative;
        font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
        font-weight: 600;
        font-size: 31px;
        line-height: 40px;
        margin-bottom: 8px
    }
}

@media (max-width: 991.98px) and (max-width:991.98px) {
    .AlphaModalTitle {
        font-size:18px;
        line-height: 24px
    }
}

.AlphaModalIcon {
    align-self: center;
    width: 80px;
    margin-bottom: 32px
}

@media (max-width: 991.98px) {
    .AlphaModalIcon {
        width:60px;
        margin-bottom: 16px
    }
}

.AlphaSidebarItem {
    font-size: 12px;
    line-height: 20px;
    font-weight: 400;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    color: var(--text);
    background-color: transparent;
    border: 0;
    transition: color .3s ease-in-out;
    cursor: pointer
}

.AlphaSidebarItem--active,.AlphaSidebarItem:hover {
    color: var(--primary-1)
}

.AlphaSidebarItem .AlphaIcon {
    width: 32px;
    height: 32px
}

@media (max-width: 991.98px) {
    .AlphaSidebarItem .AlphaIcon {
        width:24px;
        height: 24px
    }
}

.AlphaSidebarMenu {
    position: relative
}

.AlphaSidebarMenu__nav {
    position: absolute;
    right: 0;
    bottom: 100%;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    min-width: 120px;
    border: 1px solid var(--primary-disabled);
    border-radius: 8px;
    background-color: var(--surface);
    will-change: transform,opacity;
    transform-origin: bottom center
}

.AlphaSidebarMenu__nav-enter {
    opacity: 0;
    transform: scaleY(0)
}

.AlphaSidebarMenu__nav-enter-active {
    opacity: 1;
    transform: scaleY(1);
    transition: transform .3s ease-out,opacity .3s ease-out
}

.AlphaSidebarMenu__nav-exit {
    opacity: 1;
    transform: scaleY(1)
}

.AlphaSidebarMenu__nav-exit-active {
    opacity: 0;
    transform: scaleY(0);
    transition: transform .3s ease-out,opacity .3s ease-out
}

.AlphaSidebarMenu__item {
    font-size: 20px;
    line-height: 27px;
    font-weight: 400;
    padding: 16px;
    color: var(--text);
    transition: color .3s ease-in-out
}

@media (max-width: 991.98px) {
    .AlphaSidebarMenu__item {
        font-size:16px;
        line-height: 22px
    }
}

.AlphaSidebarMenu__item--active,.AlphaSidebarMenu__item:hover {
    color: var(--primary-1)
}

.AlphaSidebarMenu .AlphaSidebarItem__icon {
    display: inline-flex
}

.AlphaSelectDropdown {
    position: absolute;
    top: 100%;
    right: 0;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    max-height: 270px;
    width: 100%;
    padding: 4px 0;
    background: var(--surface);
    border-radius: 0 0 4px 4px;
    box-shadow: 0 2px 4px #0000001a;
    overflow: auto;
    transform-origin: top center;
    will-change: transform,opacity
}

.AlphaSelectDropdown-enter {
    opacity: 0;
    transform: scaleY(0)
}

.AlphaSelectDropdown-enter-active {
    opacity: 1;
    transform: scaleY(1);
    transition: transform .3s ease-out,opacity .3s ease-out
}

.AlphaSelectDropdown-exit {
    opacity: 1;
    transform: scaleY(1)
}

.AlphaSelectDropdown-exit-active {
    opacity: 0;
    transform: scaleY(0);
    transition: transform .3s ease-out,opacity .3s ease-out
}

.AlphaTableCell {
    height: 60px;
    padding: 8px 0;
    font-weight: 400;
    line-height: 28px;
    border-bottom: 1px solid var(--primary-disabled)
}

@media (max-width: 991.98px) {
    .AlphaTableCell {
        line-height:20px
    }
}

.AlphaTableCell:not(:last-child) {
    padding-right: 16px
}

.AlphaTableCell--md {
    font-size: 20px
}

@media (max-width: 991.98px) {
    .AlphaTableCell--md {
        font-size:16px
    }
}

.AlphaTableCell--sm {
    font-size: 16px
}

@media (max-width: 991.98px) {
    .AlphaTableCell--sm {
        font-size:14px
    }
}

.AlphaTableCell--right {
    text-align: right
}

.AlphaTableCell--center {
    text-align: center
}

.AlphaTableCell .AlphaCheckbox {
    display: flex
}

.AlphaTable__header .AlphaTableCell {
    font-size: 14px;
    line-height: 22px;
    font-weight: 400;
    height: 36px;
    color: var(--surface-on-3);
    border-bottom: none
}

@media (max-width: 991.98px) {
    .AlphaTable__header .AlphaTableCell {
        font-size:12px;
        line-height: 20px
    }
}

.AlphaWizardItem {
    position: relative;
    flex: 1 1;
    display: flex;
    flex-direction: column;
    align-items: center
}

@media (max-width: 991.98px) {
    .AlphaWizardItem {
        flex:1 0 auto;
        width: 33.3333333333%
    }

    .AlphaWizardItem:first-child {
        margin-left: 33.3333333333%
    }

    .AlphaWizardItem:last-child {
        margin-right: 33.3333333333%
    }
}

@media (max-width: 575.98px) {
    .AlphaWizardItem {
        width:100%
    }

    .AlphaWizardItem:first-child {
        margin-left: 0
    }

    .AlphaWizardItem:last-child {
        margin-right: 0
    }
}

.AlphaWizardItem:after {
    content: "";
    position: absolute;
    left: 50%;
    top: 28px;
    width: 100%;
    height: 2px;
    background-color: var(--surface-on-4)
}

.AlphaWizardItem:last-child:after {
    content: none
}

.AlphaWizardItem__icon {
    width: 24px;
    filter: grayscale(1)
}

.AlphaWizardItem__icon-wrapper {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 56px;
    height: 56px;
    margin-bottom: 8px;
    background-color: var(--surface);
    border: 2px solid var(--surface-on-4);
    border-radius: 50%
}

.AlphaWizardItem__icon-wrapper:after {
    content: none;
    position: absolute;
    top: -2px;
    right: -6px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 16px;
    height: 16px;
    color: var(--white);
    font-size: 10px;
    border: 2px solid var(--white);
    border-radius: 50%;
    background-color: var(--success)
}

.AlphaWizardItem__label {
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
    color: var(--surface-on-3)
}

@media (max-width: 991.98px) {
    .AlphaWizardItem__label {
        font-size:14px
    }
}

.AlphaWizardItem--active:after {
    background-color: var(--primary-1)
}

.AlphaWizardItem--active .AlphaWizardItem__icon {
    filter: grayscale(0)
}

.AlphaWizardItem--active .AlphaWizardItem__icon-wrapper {
    border-color: var(--primary-1);
    background-color: var(--surface)
}

.AlphaWizardItem--active .AlphaWizardItem__label {
    color: var(--primary-1)
}

.AlphaTabsItem {
    flex: 1 1;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: inherit;
    color: var(--text);
    line-height: inherit;
    background-color: transparent;
    border-radius: inherit;
    border: none;
    cursor: pointer;
    transition: all .3s ease-in-out
}

.AlphaTabsItem:disabled {
    pointer-events: none;
    color: var(--surface-on-3)
}

.AlphaTabsItem--active {
    pointer-events: none
}

.AlphaSelectItem {
    font-size: 16px;
    line-height: 28px;
    font-weight: 400;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 16px;
    text-align: left;
    color: var(--text);
    background: transparent;
    border: 0;
    cursor: pointer;
    transition: background-color .3s ease-in-out
}

@media (max-width: 991.98px) {
    .AlphaSelectItem {
        font-size:14px;
        line-height: 20px;
        line-height: 28px
    }
}

.AlphaSelectItem--active,.AlphaSelectItem:hover {
    background-color: var(--surface-light)
}

.AlphaSelectItem--selected {
    color: var(--primary-1);
    cursor: default
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 400;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/83651bee47cf14da-s.woff2) format("woff2");
    unicode-range: U+0460-052f,U+1c80-1c88,U+20b4,U+2de0-2dff,U+a640-a69f,U+fe2e-fe2f
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 400;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/6fed4e5749a3ea15-s.woff2) format("woff2");
    unicode-range: U+0301,U+0400-045f,U+0490-0491,U+04b0-04b1,U+2116
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 400;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/062522b8b7c3ad6a-s.woff2) format("woff2");
    unicode-range: U+1f??
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 400;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/e6f5886ae1242622-s.woff2) format("woff2");
    unicode-range: U+0370-0377,U+037a-037f,U+0384-038a,U+038c,U+038e-03a1,U+03a3-03ff
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 400;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/19e37deead9b3ec2-s.woff2) format("woff2");
    unicode-range: U+0590-05ff,U+200c-2010,U+20aa,U+25cc,U+fb1d-fb4f
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 400;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/46392699924ae7e5-s.woff2) format("woff2");
    unicode-range: U+0302-0303,U+0305,U+0307-0308,U+0330,U+0391-03a1,U+03a3-03a9,U+03b1-03c9,U+03d1,U+03d5-03d6,U+03f0-03f1,U+03f4-03f5,U+2034-2037,U+2057,U+20d0-20dc,U+20e1,U+20e5-20ef,U+2102,U+210a-210e,U+2110-2112,U+2115,U+2119-211d,U+2124,U+2128,U+212c-212d,U+212f-2131,U+2133-2138,U+213c-2140,U+2145-2149,U+2190,U+2192,U+2194-21ae,U+21b0-21e5,U+21f1-21f2,U+21f4-2211,U+2213-2214,U+2216-22ff,U+2308-230b,U+2310,U+2319,U+231c-2321,U+2336-237a,U+237c,U+2395,U+239b-23b6,U+23d0,U+23dc-23e1,U+2474-2475,U+25af,U+25b3,U+25b7,U+25bd,U+25c1,U+25ca,U+25cc,U+25fb,U+266d-266f,U+27c0-27ff,U+2900-2aff,U+2b0e-2b11,U+2b30-2b4c,U+2bfe,U+ff5b,U+ff5d,U+1d400-1d7ff,U+1ee??
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 400;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/dd4ab5b525bd804a-s.woff2) format("woff2");
    unicode-range: U+0001-000c,U+000e-001f,U+007f-009f,U+20dd-20e0,U+20e2-20e4,U+2150-218f,U+2190,U+2192,U+2194-2199,U+21af,U+21e6-21f0,U+21f3,U+2218-2219,U+2299,U+22c4-22c6,U+2300-243f,U+2440-244a,U+2460-24ff,U+25a0-27bf,U+28??,U+2921-2922,U+2981,U+29bf,U+29eb,U+2b??,U+4dc0-4dff,U+fff9-fffb,U+10140-1018e,U+10190-1019c,U+101a0,U+101d0-101fd,U+102e0-102fb,U+10e60-10e7e,U+1d2c0-1d2d3,U+1d2e0-1d37f,U+1f0??,U+1f100-1f1ad,U+1f1e6-1f1ff,U+1f30d-1f30f,U+1f315,U+1f31c,U+1f31e,U+1f320-1f32c,U+1f336,U+1f378,U+1f37d,U+1f382,U+1f393-1f39f,U+1f3a7-1f3a8,U+1f3ac-1f3af,U+1f3c2,U+1f3c4-1f3c6,U+1f3ca-1f3ce,U+1f3d4-1f3e0,U+1f3ed,U+1f3f1-1f3f3,U+1f3f5-1f3f7,U+1f408,U+1f415,U+1f41f,U+1f426,U+1f43f,U+1f441-1f442,U+1f444,U+1f446-1f449,U+1f44c-1f44e,U+1f453,U+1f46a,U+1f47d,U+1f4a3,U+1f4b0,U+1f4b3,U+1f4b9,U+1f4bb,U+1f4bf,U+1f4c8-1f4cb,U+1f4d6,U+1f4da,U+1f4df,U+1f4e3-1f4e6,U+1f4ea-1f4ed,U+1f4f7,U+1f4f9-1f4fb,U+1f4fd-1f4fe,U+1f503,U+1f507-1f50b,U+1f50d,U+1f512-1f513,U+1f53e-1f54a,U+1f54f-1f5fa,U+1f610,U+1f650-1f67f,U+1f687,U+1f68d,U+1f691,U+1f694,U+1f698,U+1f6ad,U+1f6b2,U+1f6b9-1f6ba,U+1f6bc,U+1f6c6-1f6cf,U+1f6d3-1f6d7,U+1f6e0-1f6ea,U+1f6f0-1f6f3,U+1f6f7-1f6fc,U+1f7??,U+1f800-1f80b,U+1f810-1f847,U+1f850-1f859,U+1f860-1f887,U+1f890-1f8ad,U+1f8b0-1f8b1,U+1f900-1f90b,U+1f93b,U+1f946,U+1f984,U+1f996,U+1f9e9,U+1fa00-1fa6f,U+1fa70-1fa7c,U+1fa80-1fa88,U+1fa90-1fabd,U+1fabf-1fac5,U+1face-1fadb,U+1fae0-1fae8,U+1faf0-1faf8,U+1fb??
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 400;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/9beef36ab83de3f0-s.woff2) format("woff2");
    unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01a0-01a1,U+01af-01b0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1ea0-1ef9,U+20ab
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 400;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/faac4ac11aa3d97b-s.woff2) format("woff2");
    unicode-range: U+0100-02af,U+0304,U+0308,U+0329,U+1e00-1e9f,U+1ef2-1eff,U+2020,U+20a0-20ab,U+20ad-20c0,U+2113,U+2c60-2c7f,U+a720-a7ff
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 400;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/3d9ea938b6afa941-s.p.woff2) format("woff2");
    unicode-range: U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+0304,U+0308,U+0329,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 500;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/83651bee47cf14da-s.woff2) format("woff2");
    unicode-range: U+0460-052f,U+1c80-1c88,U+20b4,U+2de0-2dff,U+a640-a69f,U+fe2e-fe2f
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 500;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/6fed4e5749a3ea15-s.woff2) format("woff2");
    unicode-range: U+0301,U+0400-045f,U+0490-0491,U+04b0-04b1,U+2116
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 500;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/062522b8b7c3ad6a-s.woff2) format("woff2");
    unicode-range: U+1f??
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 500;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/e6f5886ae1242622-s.woff2) format("woff2");
    unicode-range: U+0370-0377,U+037a-037f,U+0384-038a,U+038c,U+038e-03a1,U+03a3-03ff
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 500;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/19e37deead9b3ec2-s.woff2) format("woff2");
    unicode-range: U+0590-05ff,U+200c-2010,U+20aa,U+25cc,U+fb1d-fb4f
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 500;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/46392699924ae7e5-s.woff2) format("woff2");
    unicode-range: U+0302-0303,U+0305,U+0307-0308,U+0330,U+0391-03a1,U+03a3-03a9,U+03b1-03c9,U+03d1,U+03d5-03d6,U+03f0-03f1,U+03f4-03f5,U+2034-2037,U+2057,U+20d0-20dc,U+20e1,U+20e5-20ef,U+2102,U+210a-210e,U+2110-2112,U+2115,U+2119-211d,U+2124,U+2128,U+212c-212d,U+212f-2131,U+2133-2138,U+213c-2140,U+2145-2149,U+2190,U+2192,U+2194-21ae,U+21b0-21e5,U+21f1-21f2,U+21f4-2211,U+2213-2214,U+2216-22ff,U+2308-230b,U+2310,U+2319,U+231c-2321,U+2336-237a,U+237c,U+2395,U+239b-23b6,U+23d0,U+23dc-23e1,U+2474-2475,U+25af,U+25b3,U+25b7,U+25bd,U+25c1,U+25ca,U+25cc,U+25fb,U+266d-266f,U+27c0-27ff,U+2900-2aff,U+2b0e-2b11,U+2b30-2b4c,U+2bfe,U+ff5b,U+ff5d,U+1d400-1d7ff,U+1ee??
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 500;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/dd4ab5b525bd804a-s.woff2) format("woff2");
    unicode-range: U+0001-000c,U+000e-001f,U+007f-009f,U+20dd-20e0,U+20e2-20e4,U+2150-218f,U+2190,U+2192,U+2194-2199,U+21af,U+21e6-21f0,U+21f3,U+2218-2219,U+2299,U+22c4-22c6,U+2300-243f,U+2440-244a,U+2460-24ff,U+25a0-27bf,U+28??,U+2921-2922,U+2981,U+29bf,U+29eb,U+2b??,U+4dc0-4dff,U+fff9-fffb,U+10140-1018e,U+10190-1019c,U+101a0,U+101d0-101fd,U+102e0-102fb,U+10e60-10e7e,U+1d2c0-1d2d3,U+1d2e0-1d37f,U+1f0??,U+1f100-1f1ad,U+1f1e6-1f1ff,U+1f30d-1f30f,U+1f315,U+1f31c,U+1f31e,U+1f320-1f32c,U+1f336,U+1f378,U+1f37d,U+1f382,U+1f393-1f39f,U+1f3a7-1f3a8,U+1f3ac-1f3af,U+1f3c2,U+1f3c4-1f3c6,U+1f3ca-1f3ce,U+1f3d4-1f3e0,U+1f3ed,U+1f3f1-1f3f3,U+1f3f5-1f3f7,U+1f408,U+1f415,U+1f41f,U+1f426,U+1f43f,U+1f441-1f442,U+1f444,U+1f446-1f449,U+1f44c-1f44e,U+1f453,U+1f46a,U+1f47d,U+1f4a3,U+1f4b0,U+1f4b3,U+1f4b9,U+1f4bb,U+1f4bf,U+1f4c8-1f4cb,U+1f4d6,U+1f4da,U+1f4df,U+1f4e3-1f4e6,U+1f4ea-1f4ed,U+1f4f7,U+1f4f9-1f4fb,U+1f4fd-1f4fe,U+1f503,U+1f507-1f50b,U+1f50d,U+1f512-1f513,U+1f53e-1f54a,U+1f54f-1f5fa,U+1f610,U+1f650-1f67f,U+1f687,U+1f68d,U+1f691,U+1f694,U+1f698,U+1f6ad,U+1f6b2,U+1f6b9-1f6ba,U+1f6bc,U+1f6c6-1f6cf,U+1f6d3-1f6d7,U+1f6e0-1f6ea,U+1f6f0-1f6f3,U+1f6f7-1f6fc,U+1f7??,U+1f800-1f80b,U+1f810-1f847,U+1f850-1f859,U+1f860-1f887,U+1f890-1f8ad,U+1f8b0-1f8b1,U+1f900-1f90b,U+1f93b,U+1f946,U+1f984,U+1f996,U+1f9e9,U+1fa00-1fa6f,U+1fa70-1fa7c,U+1fa80-1fa88,U+1fa90-1fabd,U+1fabf-1fac5,U+1face-1fadb,U+1fae0-1fae8,U+1faf0-1faf8,U+1fb??
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 500;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/9beef36ab83de3f0-s.woff2) format("woff2");
    unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01a0-01a1,U+01af-01b0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1ea0-1ef9,U+20ab
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 500;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/faac4ac11aa3d97b-s.woff2) format("woff2");
    unicode-range: U+0100-02af,U+0304,U+0308,U+0329,U+1e00-1e9f,U+1ef2-1eff,U+2020,U+20a0-20ab,U+20ad-20c0,U+2113,U+2c60-2c7f,U+a720-a7ff
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 500;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/3d9ea938b6afa941-s.p.woff2) format("woff2");
    unicode-range: U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+0304,U+0308,U+0329,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 600;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/83651bee47cf14da-s.woff2) format("woff2");
    unicode-range: U+0460-052f,U+1c80-1c88,U+20b4,U+2de0-2dff,U+a640-a69f,U+fe2e-fe2f
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 600;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/6fed4e5749a3ea15-s.woff2) format("woff2");
    unicode-range: U+0301,U+0400-045f,U+0490-0491,U+04b0-04b1,U+2116
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 600;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/062522b8b7c3ad6a-s.woff2) format("woff2");
    unicode-range: U+1f??
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 600;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/e6f5886ae1242622-s.woff2) format("woff2");
    unicode-range: U+0370-0377,U+037a-037f,U+0384-038a,U+038c,U+038e-03a1,U+03a3-03ff
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 600;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/19e37deead9b3ec2-s.woff2) format("woff2");
    unicode-range: U+0590-05ff,U+200c-2010,U+20aa,U+25cc,U+fb1d-fb4f
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 600;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/46392699924ae7e5-s.woff2) format("woff2");
    unicode-range: U+0302-0303,U+0305,U+0307-0308,U+0330,U+0391-03a1,U+03a3-03a9,U+03b1-03c9,U+03d1,U+03d5-03d6,U+03f0-03f1,U+03f4-03f5,U+2034-2037,U+2057,U+20d0-20dc,U+20e1,U+20e5-20ef,U+2102,U+210a-210e,U+2110-2112,U+2115,U+2119-211d,U+2124,U+2128,U+212c-212d,U+212f-2131,U+2133-2138,U+213c-2140,U+2145-2149,U+2190,U+2192,U+2194-21ae,U+21b0-21e5,U+21f1-21f2,U+21f4-2211,U+2213-2214,U+2216-22ff,U+2308-230b,U+2310,U+2319,U+231c-2321,U+2336-237a,U+237c,U+2395,U+239b-23b6,U+23d0,U+23dc-23e1,U+2474-2475,U+25af,U+25b3,U+25b7,U+25bd,U+25c1,U+25ca,U+25cc,U+25fb,U+266d-266f,U+27c0-27ff,U+2900-2aff,U+2b0e-2b11,U+2b30-2b4c,U+2bfe,U+ff5b,U+ff5d,U+1d400-1d7ff,U+1ee??
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 600;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/dd4ab5b525bd804a-s.woff2) format("woff2");
    unicode-range: U+0001-000c,U+000e-001f,U+007f-009f,U+20dd-20e0,U+20e2-20e4,U+2150-218f,U+2190,U+2192,U+2194-2199,U+21af,U+21e6-21f0,U+21f3,U+2218-2219,U+2299,U+22c4-22c6,U+2300-243f,U+2440-244a,U+2460-24ff,U+25a0-27bf,U+28??,U+2921-2922,U+2981,U+29bf,U+29eb,U+2b??,U+4dc0-4dff,U+fff9-fffb,U+10140-1018e,U+10190-1019c,U+101a0,U+101d0-101fd,U+102e0-102fb,U+10e60-10e7e,U+1d2c0-1d2d3,U+1d2e0-1d37f,U+1f0??,U+1f100-1f1ad,U+1f1e6-1f1ff,U+1f30d-1f30f,U+1f315,U+1f31c,U+1f31e,U+1f320-1f32c,U+1f336,U+1f378,U+1f37d,U+1f382,U+1f393-1f39f,U+1f3a7-1f3a8,U+1f3ac-1f3af,U+1f3c2,U+1f3c4-1f3c6,U+1f3ca-1f3ce,U+1f3d4-1f3e0,U+1f3ed,U+1f3f1-1f3f3,U+1f3f5-1f3f7,U+1f408,U+1f415,U+1f41f,U+1f426,U+1f43f,U+1f441-1f442,U+1f444,U+1f446-1f449,U+1f44c-1f44e,U+1f453,U+1f46a,U+1f47d,U+1f4a3,U+1f4b0,U+1f4b3,U+1f4b9,U+1f4bb,U+1f4bf,U+1f4c8-1f4cb,U+1f4d6,U+1f4da,U+1f4df,U+1f4e3-1f4e6,U+1f4ea-1f4ed,U+1f4f7,U+1f4f9-1f4fb,U+1f4fd-1f4fe,U+1f503,U+1f507-1f50b,U+1f50d,U+1f512-1f513,U+1f53e-1f54a,U+1f54f-1f5fa,U+1f610,U+1f650-1f67f,U+1f687,U+1f68d,U+1f691,U+1f694,U+1f698,U+1f6ad,U+1f6b2,U+1f6b9-1f6ba,U+1f6bc,U+1f6c6-1f6cf,U+1f6d3-1f6d7,U+1f6e0-1f6ea,U+1f6f0-1f6f3,U+1f6f7-1f6fc,U+1f7??,U+1f800-1f80b,U+1f810-1f847,U+1f850-1f859,U+1f860-1f887,U+1f890-1f8ad,U+1f8b0-1f8b1,U+1f900-1f90b,U+1f93b,U+1f946,U+1f984,U+1f996,U+1f9e9,U+1fa00-1fa6f,U+1fa70-1fa7c,U+1fa80-1fa88,U+1fa90-1fabd,U+1fabf-1fac5,U+1face-1fadb,U+1fae0-1fae8,U+1faf0-1faf8,U+1fb??
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 600;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/9beef36ab83de3f0-s.woff2) format("woff2");
    unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01a0-01a1,U+01af-01b0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1ea0-1ef9,U+20ab
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 600;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/faac4ac11aa3d97b-s.woff2) format("woff2");
    unicode-range: U+0100-02af,U+0304,U+0308,U+0329,U+1e00-1e9f,U+1ef2-1eff,U+2020,U+20a0-20ab,U+20ad-20c0,U+2113,U+2c60-2c7f,U+a720-a7ff
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 600;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/3d9ea938b6afa941-s.p.woff2) format("woff2");
    unicode-range: U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+0304,U+0308,U+0329,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 700;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/83651bee47cf14da-s.woff2) format("woff2");
    unicode-range: U+0460-052f,U+1c80-1c88,U+20b4,U+2de0-2dff,U+a640-a69f,U+fe2e-fe2f
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 700;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/6fed4e5749a3ea15-s.woff2) format("woff2");
    unicode-range: U+0301,U+0400-045f,U+0490-0491,U+04b0-04b1,U+2116
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 700;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/062522b8b7c3ad6a-s.woff2) format("woff2");
    unicode-range: U+1f??
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 700;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/e6f5886ae1242622-s.woff2) format("woff2");
    unicode-range: U+0370-0377,U+037a-037f,U+0384-038a,U+038c,U+038e-03a1,U+03a3-03ff
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 700;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/19e37deead9b3ec2-s.woff2) format("woff2");
    unicode-range: U+0590-05ff,U+200c-2010,U+20aa,U+25cc,U+fb1d-fb4f
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 700;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/46392699924ae7e5-s.woff2) format("woff2");
    unicode-range: U+0302-0303,U+0305,U+0307-0308,U+0330,U+0391-03a1,U+03a3-03a9,U+03b1-03c9,U+03d1,U+03d5-03d6,U+03f0-03f1,U+03f4-03f5,U+2034-2037,U+2057,U+20d0-20dc,U+20e1,U+20e5-20ef,U+2102,U+210a-210e,U+2110-2112,U+2115,U+2119-211d,U+2124,U+2128,U+212c-212d,U+212f-2131,U+2133-2138,U+213c-2140,U+2145-2149,U+2190,U+2192,U+2194-21ae,U+21b0-21e5,U+21f1-21f2,U+21f4-2211,U+2213-2214,U+2216-22ff,U+2308-230b,U+2310,U+2319,U+231c-2321,U+2336-237a,U+237c,U+2395,U+239b-23b6,U+23d0,U+23dc-23e1,U+2474-2475,U+25af,U+25b3,U+25b7,U+25bd,U+25c1,U+25ca,U+25cc,U+25fb,U+266d-266f,U+27c0-27ff,U+2900-2aff,U+2b0e-2b11,U+2b30-2b4c,U+2bfe,U+ff5b,U+ff5d,U+1d400-1d7ff,U+1ee??
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 700;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/dd4ab5b525bd804a-s.woff2) format("woff2");
    unicode-range: U+0001-000c,U+000e-001f,U+007f-009f,U+20dd-20e0,U+20e2-20e4,U+2150-218f,U+2190,U+2192,U+2194-2199,U+21af,U+21e6-21f0,U+21f3,U+2218-2219,U+2299,U+22c4-22c6,U+2300-243f,U+2440-244a,U+2460-24ff,U+25a0-27bf,U+28??,U+2921-2922,U+2981,U+29bf,U+29eb,U+2b??,U+4dc0-4dff,U+fff9-fffb,U+10140-1018e,U+10190-1019c,U+101a0,U+101d0-101fd,U+102e0-102fb,U+10e60-10e7e,U+1d2c0-1d2d3,U+1d2e0-1d37f,U+1f0??,U+1f100-1f1ad,U+1f1e6-1f1ff,U+1f30d-1f30f,U+1f315,U+1f31c,U+1f31e,U+1f320-1f32c,U+1f336,U+1f378,U+1f37d,U+1f382,U+1f393-1f39f,U+1f3a7-1f3a8,U+1f3ac-1f3af,U+1f3c2,U+1f3c4-1f3c6,U+1f3ca-1f3ce,U+1f3d4-1f3e0,U+1f3ed,U+1f3f1-1f3f3,U+1f3f5-1f3f7,U+1f408,U+1f415,U+1f41f,U+1f426,U+1f43f,U+1f441-1f442,U+1f444,U+1f446-1f449,U+1f44c-1f44e,U+1f453,U+1f46a,U+1f47d,U+1f4a3,U+1f4b0,U+1f4b3,U+1f4b9,U+1f4bb,U+1f4bf,U+1f4c8-1f4cb,U+1f4d6,U+1f4da,U+1f4df,U+1f4e3-1f4e6,U+1f4ea-1f4ed,U+1f4f7,U+1f4f9-1f4fb,U+1f4fd-1f4fe,U+1f503,U+1f507-1f50b,U+1f50d,U+1f512-1f513,U+1f53e-1f54a,U+1f54f-1f5fa,U+1f610,U+1f650-1f67f,U+1f687,U+1f68d,U+1f691,U+1f694,U+1f698,U+1f6ad,U+1f6b2,U+1f6b9-1f6ba,U+1f6bc,U+1f6c6-1f6cf,U+1f6d3-1f6d7,U+1f6e0-1f6ea,U+1f6f0-1f6f3,U+1f6f7-1f6fc,U+1f7??,U+1f800-1f80b,U+1f810-1f847,U+1f850-1f859,U+1f860-1f887,U+1f890-1f8ad,U+1f8b0-1f8b1,U+1f900-1f90b,U+1f93b,U+1f946,U+1f984,U+1f996,U+1f9e9,U+1fa00-1fa6f,U+1fa70-1fa7c,U+1fa80-1fa88,U+1fa90-1fabd,U+1fabf-1fac5,U+1face-1fadb,U+1fae0-1fae8,U+1faf0-1faf8,U+1fb??
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 700;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/9beef36ab83de3f0-s.woff2) format("woff2");
    unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01a0-01a1,U+01af-01b0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1ea0-1ef9,U+20ab
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 700;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/faac4ac11aa3d97b-s.woff2) format("woff2");
    unicode-range: U+0100-02af,U+0304,U+0308,U+0329,U+1e00-1e9f,U+1ef2-1eff,U+2020,U+20a0-20ab,U+20ad-20c0,U+2113,U+2c60-2c7f,U+a720-a7ff
}

@font-face {
    font-family: __Open_Sans_19ba82;
    font-style: normal;
    font-weight: 700;
    font-stretch: 100%;
    font-display: swap;
    src: url(/_next/static/media/3d9ea938b6afa941-s.p.woff2) format("woff2");
    unicode-range: U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+0304,U+0308,U+0329,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd
}

@font-face {
    font-family: __Open_Sans_Fallback_19ba82;
    src: local("Arial");
    ascent-override:101.18%;descent-override:27.73%;line-gap-override:0.00%;size-adjust:105.64%}

.__className_19ba82 {
    font-family: __Open_Sans_19ba82,__Open_Sans_Fallback_19ba82;
    font-style: normal
}

@font-face {
    font-family: __Poppins_e04c4e;
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/_next/static/media/46c21389e888bf13-s.woff2) format("woff2");
    unicode-range: U+0100-02af,U+0304,U+0308,U+0329,U+1e00-1e9f,U+1ef2-1eff,U+2020,U+20a0-20ab,U+20ad-20c0,U+2113,U+2c60-2c7f,U+a720-a7ff
}

@font-face {
    font-family: __Poppins_e04c4e;
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(/_next/static/media/eafabf029ad39a43-s.p.woff2) format("woff2");
    unicode-range: U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+0304,U+0308,U+0329,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd
}

@font-face {
    font-family: __Poppins_e04c4e;
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(/_next/static/media/f5767adec246cdc1-s.woff2) format("woff2");
    unicode-range: U+0100-02af,U+0304,U+0308,U+0329,U+1e00-1e9f,U+1ef2-1eff,U+2020,U+20a0-20ab,U+20ad-20c0,U+2113,U+2c60-2c7f,U+a720-a7ff
}

@font-face {
    font-family: __Poppins_e04c4e;
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: url(/_next/static/media/8888a3826f4a3af4-s.p.woff2) format("woff2");
    unicode-range: U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+0304,U+0308,U+0329,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd
}

@font-face {
    font-family: __Poppins_e04c4e;
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: url(/_next/static/media/0a03a6d30c07af2e-s.woff2) format("woff2");
    unicode-range: U+0100-02af,U+0304,U+0308,U+0329,U+1e00-1e9f,U+1ef2-1eff,U+2020,U+20a0-20ab,U+20ad-20c0,U+2113,U+2c60-2c7f,U+a720-a7ff
}

@font-face {
    font-family: __Poppins_e04c4e;
    font-style: normal;
    font-weight: 600;
    font-display: swap;
    src: url(/_next/static/media/0484562807a97172-s.p.woff2) format("woff2");
    unicode-range: U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+0304,U+0308,U+0329,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd
}

@font-face {
    font-family: __Poppins_e04c4e;
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(/_next/static/media/30cd8f99d32fa6e8-s.woff2) format("woff2");
    unicode-range: U+0100-02af,U+0304,U+0308,U+0329,U+1e00-1e9f,U+1ef2-1eff,U+2020,U+20a0-20ab,U+20ad-20c0,U+2113,U+2c60-2c7f,U+a720-a7ff
}

@font-face {
    font-family: __Poppins_e04c4e;
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(/_next/static/media/b957ea75a84b6ea7-s.p.woff2) format("woff2");
    unicode-range: U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+0304,U+0308,U+0329,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd
}

@font-face {
    font-family: __Poppins_Fallback_e04c4e;
    src: local("Arial");
    ascent-override:92.33%;descent-override:30.78%;line-gap-override:8.79%;size-adjust:113.73%}

.__className_e04c4e {
    font-family: __Poppins_e04c4e,__Poppins_Fallback_e04c4e;
    font-style: normal
}

.LayoutInstallApp_wrapper__vbqmg {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1040;
    display: none;
    align-items: center;
    gap: 8px;
    height: 60px;
    width: 100%;
    padding: 10px 16px;
    color: var(--white);
    background-color: var(--primary-1)
}

@media(max-width: 991.98px) {
    .LayoutInstallApp_wrapper__vbqmg {
        display:flex
    }

    .LayoutInstallApp_wrapper__vbqmg+.AlphaHeader {
        top: 60px
    }

    .LayoutInstallApp_wrapper__vbqmg+.AlphaHeader .AlphaHeader__menu {
        top: 116px
    }
}

.LayoutInstallApp_container__YfUmo {
    flex: 1 1 auto;
    display: flex;
    align-items: center;
    gap: 8px
}

.LayoutInstallApp_content__PkM5C {
    white-space: nowrap
}

@media(max-width: 340px) {
    .LayoutInstallApp_logo__y2VRW {
        display:none
    }
}

.LayoutInstallApp_title__5NbuR {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px
}

@media(max-width: 991.98px) {
    .LayoutInstallApp_title__5NbuR {
        font-size:14px;
        line-height: 20px
    }
}

.LayoutInstallApp_subtitle__2s_OF {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px;
    color: var(--surface-medium);
    font-weight: 400
}

@media(max-width: 991.98px) {
    .LayoutInstallApp_subtitle__2s_OF {
        font-size:14px;
        line-height: 20px;
        font-size: 12px
    }
}

.LayoutInstallApp_actions__RoFzh {
    display: flex;
    align-items: center;
    gap: 16px
}

@media(max-width: 350px) {
    .LayoutInstallApp_actions__RoFzh {
        gap:8px
    }
}

.LayoutInstallApp_close__yaSYz .AlphaButton {
    color: var(--white);
    background-color: transparent!important
}

.Layout_wrapper__Ky3OW {
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh
}

@media(max-width: 991.98px) {
    .Layout_wrapper__Ky3OW.Layout_tabs__jivW9 {
        padding-bottom:56px
    }

    .Layout_wrapper__Ky3OW .AlphaHeader .AlphaButton {
        display: none
    }
}

.Layout_container__lyw0Z {
    flex: 1 1 auto;
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 32px;
    max-width: 1440px;
    width: 100%;
    padding: 32px
}

@media(max-width: 991.98px) {
    .Layout_container__lyw0Z {
        gap:16px;
        padding: 16px
    }
}

@media(max-width: 767.98px) {
    .Layout_container__lyw0Z {
        padding:16px 8px
    }
}

.Layout_body__g48SB,.Layout_body__g48SB main {
    flex: 1 1 auto;
    display: flex;
    flex-direction: column
}

.CookieBanner_wrapper__Hi5k6 {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1040;
    display: flex;
    justify-content: center;
    padding: 32px;
    background: var(--surface-light);
    border-top: 1px solid var(--primary-disabled);
    border-radius: 16px
}

@media(max-width: 991.98px) {
    .CookieBanner_wrapper__Hi5k6 {
        padding:16px 24px;
        border-radius: 8px
    }
}

.CookieBanner_container__M2kik {
    max-width: 580px;
    width: 100%
}

.CookieBanner_title__Fa5od {
    position: relative;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    font-weight: 600;
    font-size: 24px;
    line-height: 32px;
    margin-bottom: 8px
}

@media(max-width: 991.98px) {
    .CookieBanner_title__Fa5od {
        font-size:16px;
        line-height: 24px
    }
}

.CookieBanner_text__cHlF5 {
    font-size: 12px;
    line-height: 20px;
    font-weight: 400;
    margin-bottom: 24px;
    font-family: var(--font-poppins),"Roboto","Arial",sans-serif;
    color: var(--surface-on-3)
}

@media(max-width: 991.98px) {
    .CookieBanner_text__cHlF5 {
        margin-bottom:16px
    }
}

.CookieBanner_buttons__EBjqg {
    display: flex;
    gap: 16px
}

@media(max-width: 575.98px) {
    .CookieBanner_buttons__EBjqg {
        flex-wrap:wrap
    }
}

.CookieBanner_buttons__EBjqg .AlphaButton {
    flex: 1 0 auto;
    max-width: 140px
}

@media(max-width: 575.98px) {
    .CookieBanner_buttons__EBjqg .AlphaButton {
        max-width:unset
    }
}

.CookieBanner_settings__CGeXH {
    margin-top: 24px
}

@media(max-width: 991.98px) {
    .CookieBanner_settings__CGeXH {
        margin-top:16px
    }
}

.CookieBanner_settings__CGeXH .AlphaCheckbox {
    flex-direction: row-reverse
}

@media(max-width: 575.98px) {
    .CookieBanner_settings__CGeXH .AlphaCheckbox {
        flex-grow:1;
        flex-shrink: 1;
        flex-basis: calc(50% - 16px)
    }
}

.CookieBanner_settings__CGeXH .AlphaCheckboxGroup__list {
    justify-content: flex-start;
    gap: 24px;
    width: 100%
}

@media(max-width: 991.98px) {
    .CookieBanner_settings__CGeXH .AlphaCheckboxGroup__list {
        gap:16px
    }
}

    </style> --}}
@endsection
