@extends('layouts.app')

@section('title', 'Главная')


@section('content')
    <div id="page">
        <header id="header" class="site-header">
            <div class="container--big">
                <div class="row site-header__row">
                    <div class="site-branding">
                        <a class="waves-effect waves-light site-branding__link" href="https://placesmagazine.ru"
                            aria-label="На главную">
                            <img width="150" height="12"
                                src="https://placesmagazine.ru/wp-content/uploads/2023/06/logo.svg"
                                class="attachment-thumbnail size-thumbnail" alt="PlacesMagazine logo" decoding="async"
                                loading="lazy" /> </a>
                        <a class="waves-effect waves-light site-branding__link site-branding__link--mobile"
                            href="https://placesmagazine.ru" aria-label="На главную">
                            <picture>
                                <source
                                    srcset="https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/06/logo.png.webp"
                                    type="image/webp"><img width="25" height="12"
                                    src="https://placesmagazine.ru/wp-content/uploads/2023/06/logo.png"
                                    class="attachment-thumbnail size-thumbnail webpexpress-processed"
                                    alt="PlacesMagazine logo" decoding="async" loading="lazy"></picture>
                        </a>
                    </div>
                    <div class="hide-on-small-only site-header__menu">
                        <nav class="site-menu">
                            <ul id="site-menu" class="menu menu--primary" itemscope=""
                                itemtype="http://schema.org/SiteNavigationElement">
                                <li id="menu-item-69"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-22 current_page_item menu-item-69">
                                    <a href="https://placesmagazine.ru/" aria-current="page"><span
                                            class="menu-item__wrapper" itemprop="name"
                                            role="presentation">Главная</span></a></li>
                                <li id="menu-item-47"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a
                                        href="https://placesmagazine.ru/sobytiya/"><span class="menu-item__wrapper"
                                            itemprop="name" role="presentation">События</span></a></li>
                                <li id="menu-item-48"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"><a
                                        href="https://placesmagazine.ru/journal/"><span class="menu-item__wrapper"
                                            itemprop="name" role="presentation">Журнал</span></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="site-header__actions">
                        <a data-target="city-select" href="#" class="icon-link modal-trigger city-selector"
                            aria-label="Выбрать город">
                            <i class="icon-link__icon">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.4675 3.96751C13.2077 2.70774 11.4991 2 9.71751 2C7.93592 2 6.22729 2.70774 4.96751 3.96751C3.70774 5.22729 3 6.93592 3 8.71751C3 10.4991 3.70774 12.2077 4.96751 13.4675L9.1396 17.6475C9.21319 17.7217 9.30075 17.7806 9.39722 17.8208C9.4937 17.861 9.59717 17.8817 9.70168 17.8817C9.80619 17.8817 9.90967 17.861 10.0061 17.8208C10.1026 17.7806 10.1902 17.7217 10.2638 17.6475L14.4675 13.4279C15.722 12.1734 16.4268 10.4719 16.4268 8.69772C16.4268 6.92355 15.722 5.22205 14.4675 3.96751ZM13.3354 12.2958L9.71751 15.9296L6.0996 12.2958C5.38484 11.5804 4.89822 10.6692 4.70127 9.67724C4.50432 8.68532 4.60587 7.65727 4.99309 6.72305C5.38031 5.78883 6.0358 4.99039 6.87672 4.42864C7.71764 3.8669 8.70623 3.56707 9.71751 3.56707C10.7288 3.56707 11.7174 3.8669 12.5583 4.42864C13.3992 4.99039 14.0547 5.78883 14.4419 6.72305C14.8292 7.65727 14.9307 8.68532 14.7338 9.67724C14.5368 10.6692 14.0502 11.5804 13.3354 12.2958ZM7.34251 6.2871C6.70341 6.92817 6.34454 7.79646 6.34454 8.70168C6.34454 9.6069 6.70341 10.4752 7.34251 11.1163C7.81733 11.5919 8.42202 11.9167 9.08074 12.05C9.73945 12.1832 10.4229 12.119 11.0452 11.8653C11.6675 11.6116 12.2011 11.1798 12.579 10.624C12.9568 10.0683 13.1622 9.41329 13.1692 8.74126C13.1727 8.29255 13.0863 7.84768 12.915 7.43295C12.7436 7.01821 12.4909 6.64205 12.1717 6.32668C11.8579 6.00572 11.4838 5.74998 11.0708 5.57417C10.6578 5.39837 10.2142 5.30597 9.76533 5.30229C9.3165 5.29861 8.87138 5.38372 8.45557 5.55274C8.03977 5.72175 7.66149 5.97133 7.34251 6.2871ZM11.0554 9.9921C10.7554 10.2967 10.3589 10.4876 9.93374 10.5322C9.50855 10.5768 9.08107 10.4724 8.72437 10.2367C8.36768 10.001 8.10394 9.64871 7.97823 9.24008C7.85252 8.83145 7.87265 8.39185 8.03519 7.99643C8.19773 7.60101 8.49257 7.27432 8.86931 7.07222C9.24605 6.87013 9.6813 6.80517 10.1006 6.88846C10.52 6.97175 10.8973 7.19811 11.1683 7.52885C11.4392 7.85959 11.5868 8.27416 11.5858 8.70168C11.5743 9.19035 11.3693 9.65447 11.0158 9.9921H11.0554Z"
                                        fill="#121212" />
                                </svg>
                            </i>
                            <span class="city-selector__text" data-city="Irkutsk">
                                Иркутск
                            </span>
                        </a>
                        <div class="city-selector__message">
                            <p>
                                Мы определили твой город. Верно?
                            </p>
                            <button type="button" class="btn city-selector__agree">Да</button>
                            <button data-target="city-select" type="button"
                                class="btn modal-trigger city-selector__no">Нет, выбрать другой</button>
                        </div>
                        <a href="#" class="icon-link search-selector" aria-label="Поиск">
                            <i class="icon-link__icon">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.1867 16.063L14.2496 13.1497C15.3897 11.7282 15.9418 9.92389 15.7924 8.1078C15.643 6.29172 14.8035 4.60189 13.4465 3.38578C12.0895 2.16967 10.3181 1.51972 8.49652 1.56956C6.67498 1.61941 4.94177 2.36526 3.65327 3.65376C2.36477 4.94226 1.61892 6.67547 1.56907 8.497C1.51923 10.3185 2.16919 12.0899 3.3853 13.447C4.60141 14.804 6.29123 15.6435 8.10732 15.7929C9.9234 15.9423 11.7277 15.3902 13.1492 14.2501L16.0625 17.1634C16.1361 17.2376 16.2237 17.2965 16.3202 17.3367C16.4166 17.3769 16.5201 17.3976 16.6246 17.3976C16.7291 17.3976 16.8326 17.3769 16.9291 17.3367C17.0255 17.2965 17.1131 17.2376 17.1867 17.1634C17.3294 17.0158 17.4092 16.8185 17.4092 16.6132C17.4092 16.4079 17.3294 16.2106 17.1867 16.063ZM8.70795 14.2501C7.61191 14.2501 6.54049 13.9251 5.62917 13.3162C4.71785 12.7072 4.00756 11.8418 3.58812 10.8291C3.16868 9.81654 3.05894 8.70229 3.27277 7.62732C3.48659 6.55234 4.01439 5.56491 4.7894 4.78989C5.56442 4.01487 6.55185 3.48708 7.62683 3.27326C8.70181 3.05943 9.81605 3.16917 10.8287 3.58861C11.8413 4.00804 12.7068 4.71833 13.3157 5.62966C13.9246 6.54098 14.2496 7.6124 14.2496 8.70844C14.2496 10.1782 13.6658 11.5877 12.6265 12.627C11.5872 13.6663 10.1777 14.2501 8.70795 14.2501Z"
                                        fill="#121212" />
                                </svg>
                            </i>
                        </a>
                        <div class="search-panel" style="display: none;">
                            <div class="asl_w_container asl_w_container_1">
                                <div id='ajaxsearchlite1' data-id="1" data-instance="1"
                                    class="asl_w asl_m asl_m_1 asl_m_1_1">
                                    <div class="probox">
                                        <button class='promagnifier' aria-label="Search magnifier button">
                                            <div class='innericon'>
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="22" height="22" viewBox="0 0 512 512"
                                                    enable-background="new 0 0 512 512" xml:space="preserve">
                                                    <path d="M460.355,421.59L353.844,315.078c20.041-27.553,31.885-61.437,31.885-98.037
						C385.729,124.934,310.793,50,218.686,50C126.58,50,51.645,124.934,51.645,217.041c0,92.106,74.936,167.041,167.041,167.041
						c34.912,0,67.352-10.773,94.184-29.158L419.945,462L460.355,421.59z M100.631,217.041c0-65.096,52.959-118.056,118.055-118.056
						c65.098,0,118.057,52.959,118.057,118.056c0,65.096-52.959,118.056-118.057,118.056C153.59,335.097,100.631,282.137,100.631,217.041
						z" />
                                                </svg>
                                            </div>
                                        </button>
                                        <div class='prosettings' style='display:none;' data-opened=0>
                                            <div class='innericon'>
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="22" height="22" viewBox="0 0 512 512"
                                                    enable-background="new 0 0 512 512" xml:space="preserve">
                                                    <polygon transform="rotate(90 256 256)"
                                                        points="142.332,104.886 197.48,50 402.5,256 197.48,462 142.332,407.113 292.727,256 " />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class='proinput'>
                                            <form role="search" action='#' autocomplete="off" aria-label="Search form">
                                                <input aria-label="Search input" type='search' class='orig'
                                                    name='phrase' placeholder='Поиск' value='' autocomplete="off" />
                                                <input aria-label="Search autocomplete input" type='text'
                                                    class='autocomplete' tabindex="-1" name='phrase' value=''
                                                    autocomplete="off" disabled />
                                                <input type='submit' value="Start search"
                                                    style='width:0; height: 0; visibility: hidden;'>
                                            </form>
                                        </div>
                                        <div class='proloading'>
                                            <div class="asl_loader">
                                                <div class="asl_loader-inner asl_simple-circle"></div>
                                            </div>
                                        </div>
                                        <div class='proclose'>
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12"
                                                height="12" viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                                xml:space="preserve">
                                                <polygon
                                                    points="438.393,374.595 319.757,255.977 438.378,137.348 374.595,73.607 255.995,192.225 137.375,73.622 73.607,137.352 192.246,255.983 73.622,374.625 137.352,438.393 256.002,319.734 374.652,438.378 " />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class='asl_data_container' style="display:none !important;">
                                    <div class="asl_init_data wpdreams_asl_data_ct" style="display:none !important;"
                                        id="asl_init_id_1" data-asl-id="1" data-asl-instance="1"
                                        data-asldata="ew0KCSJob21ldXJsIjogImh0dHBzOi8vcGxhY2VzbWFnYXppbmUucnUvIiwNCgkicmVzdWx0c3R5cGUiOiAidmVydGljYWwiLA0KCSJyZXN1bHRzcG9zaXRpb24iOiAiaG92ZXIiLA0KCSJpdGVtc2NvdW50IjogNCwNCgkiY2hhcmNvdW50IjogIDAsDQoJImhpZ2hsaWdodCI6IDAsDQoJImhpZ2hsaWdodHdob2xld29yZHMiOiAxLA0KCSJzaW5nbGVIaWdobGlnaHQiOiAwLA0KCSJzY3JvbGxUb1Jlc3VsdHMiOiB7DQoJCSJlbmFibGVkIjogMCwNCgkJIm9mZnNldCI6IDANCgl9LA0KCSJyZXN1bHRhcmVhY2xpY2thYmxlIjogMSwNCgkiYXV0b2NvbXBsZXRlIjogew0KCQkiZW5hYmxlZCIgOiAxLA0KCQkibGFuZyIgOiAicnUiLA0KCQkidHJpZ2dlcl9jaGFyY291bnQiIDogMA0KCX0sDQoJIm1vYmlsZSI6IHsNCgkJIm1lbnVfc2VsZWN0b3IiOiAiI21lbnUtdG9nZ2xlIg0KCX0sDQoJInRyaWdnZXIiOiB7DQoJCSJjbGljayI6ICJyZXN1bHRzX3BhZ2UiLA0KCQkiY2xpY2tfbG9jYXRpb24iOiAic2FtZSIsDQoJCSJ1cGRhdGVfaHJlZiI6IDAsDQoJCSJyZXR1cm4iOiAicmVzdWx0c19wYWdlIiwNCgkJInJldHVybl9sb2NhdGlvbiI6ICJzYW1lIiwNCgkJImZhY2V0IjogMSwNCgkJInR5cGUiOiAxLA0KCQkicmVkaXJlY3RfdXJsIjogIj9zPXtwaHJhc2V9IiwNCgkJImRlbGF5IjogMzAwDQoJfSwNCiAgICAiYW5pbWF0aW9ucyI6IHsNCiAgICAgICAgInBjIjogew0KICAgICAgICAgICAgInNldHRpbmdzIjogew0KICAgICAgICAgICAgICAgICJhbmltIiA6ICJmYWRlZHJvcCIsDQogICAgICAgICAgICAgICAgImR1ciIgIDogMzAwDQogICAgICAgICAgICB9LA0KICAgICAgICAgICAgInJlc3VsdHMiIDogew0KCQkJCSJhbmltIiA6ICJmYWRlZHJvcCIsDQoJCQkJImR1ciIgIDogMzAwDQogICAgICAgICAgICB9LA0KICAgICAgICAgICAgIml0ZW1zIiA6ICJ2b2lkYW5pbSINCiAgICAgICAgfSwNCiAgICAgICAgIm1vYiI6IHsNCiAgICAgICAgICAgICJzZXR0aW5ncyI6IHsNCiAgICAgICAgICAgICAgICAiYW5pbSIgOiAiZmFkZWRyb3AiLA0KICAgICAgICAgICAgICAgICJkdXIiICA6IDMwMA0KICAgICAgICAgICAgfSwNCiAgICAgICAgICAgICJyZXN1bHRzIiA6IHsNCgkJCQkiYW5pbSIgOiAiZmFkZWRyb3AiLA0KCQkJCSJkdXIiICA6IDMwMA0KICAgICAgICAgICAgfSwNCiAgICAgICAgICAgICJpdGVtcyIgOiAidm9pZGFuaW0iDQogICAgICAgIH0NCiAgICB9LA0KCSJhdXRvcCI6IHsNCgkJInN0YXRlIjogImRpc2FibGVkIiwNCgkJInBocmFzZSI6ICIiLA0KCQkiY291bnQiOiAxCX0sDQogICAgInJlc1BhZ2UiOiB7DQogICAgICAgICJ1c2VBamF4IjogMCwNCiAgICAgICAgInNlbGVjdG9yIjogIiNtYWluIiwNCiAgICAgICAgInRyaWdnZXJfdHlwZSI6IDEsDQogICAgICAgICJ0cmlnZ2VyX2ZhY2V0IjogMSwNCiAgICAgICAgInRyaWdnZXJfbWFnbmlmaWVyIjogMCwNCiAgICAgICAgInRyaWdnZXJfcmV0dXJuIjogMCAgICB9LA0KCSJyZXN1bHRzU25hcFRvIjogImxlZnQiLA0KICAgICJyZXN1bHRzIjogew0KICAgICAgICAid2lkdGgiOiAiYXV0byIsDQogICAgICAgICJ3aWR0aF90YWJsZXQiOiAiYXV0byIsDQogICAgICAgICJ3aWR0aF9waG9uZSI6ICJhdXRvIg0KICAgIH0sDQoJInNldHRpbmdzaW1hZ2Vwb3MiOiAicmlnaHQiLA0KCSJjbG9zZU9uRG9jQ2xpY2siOiAxLA0KCSJvdmVycmlkZXdwZGVmYXVsdCI6IDAsDQoJIm92ZXJyaWRlX21ldGhvZCI6ICJnZXQiDQp9DQo=">
                                    </div>
                                    <div id="asl_hidden_data">
                                        <svg style="position:absolute" height="0" width="0">
                                            <filter id="aslblur">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="4" />
                                            </filter>
                                        </svg>
                                        <svg style="position:absolute" height="0" width="0">
                                            <filter id="no_aslblur"></filter>
                                        </svg>
                                    </div>
                                </div>
                                <div id='ajaxsearchliteres1'
                                    class='vertical wpdreams_asl_results asl_w asl_r asl_r_1 asl_r_1_1'>
                                    <div class="results">
                                        <div class="resdrg">
                                        </div>
                                    </div>
                                </div>
                                <div id='__original__ajaxsearchlitesettings1' data-id="1"
                                    class="searchsettings wpdreams_asl_settings asl_w asl_s asl_s_1">
                                    <form name='options' aria-label="Search settings form" autocomplete="off">
                                        <input type="hidden" name="filters_changed" style="display:none;" value="0">
                                        <input type="hidden" name="filters_initial" style="display:none;" value="1">
                                        <div class="asl_option_inner hiddend">
                                            <input type='hidden' name='qtranslate_lang' id='qtranslate_lang1'
                                                value='0' />
                                        </div>
                                        <fieldset class="asl_sett_scroll">
                                            <legend style="display: none;">Generic selectors</legend>
                                            <div class="asl_option">
                                                <div class="asl_option_inner">
                                                    <input type="checkbox" value="exact"
                                                        aria-label="Только точное соответствие" name="asl_gen[]" />
                                                    <div class="asl_option_checkbox"></div>
                                                </div>
                                                <div class="asl_option_label">
                                                    Только точное соответствие </div>
                                            </div>
                                            <div class="asl_option">
                                                <div class="asl_option_inner">
                                                    <input type="checkbox" value="title" aria-label="Поиск по названию"
                                                        name="asl_gen[]" checked="checked" />
                                                    <div class="asl_option_checkbox"></div>
                                                </div>
                                                <div class="asl_option_label">
                                                    Поиск по названию </div>
                                            </div>
                                            <div class="asl_option">
                                                <div class="asl_option_inner">
                                                    <input type="checkbox" value="content" aria-label="Поиск контента"
                                                        name="asl_gen[]" checked="checked" />
                                                    <div class="asl_option_checkbox"></div>
                                                </div>
                                                <div class="asl_option_label">
                                                    Поиск контента </div>
                                            </div>
                                            <div class="asl_option_inner hiddend">
                                                <input type="checkbox" value="excerpt" aria-label="Search in excerpt"
                                                    name="asl_gen[]" />
                                                <div class="asl_option_checkbox"></div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="asl_sett_scroll">
                                            <legend style="display: none;">Post Type Selectors</legend>
                                            <div class="asl_option_inner hiddend">
                                                <input type="checkbox" value="tribe_events"
                                                    aria-label="Hidden option, ignore please" name="customset[]"
                                                    checked="checked" />
                                            </div>
                                            <div class="asl_option_inner hiddend">
                                                <input type="checkbox" value="post"
                                                    aria-label="Hidden option, ignore please" name="customset[]"
                                                    checked="checked" />
                                            </div>
                                            <div class="asl_option_inner hiddend">
                                                <input type="checkbox" value="page"
                                                    aria-label="Hidden option, ignore please" name="customset[]"
                                                    checked="checked" />
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="https://placesmagazine.ru/favorites/" class="icon-link favorite-selector"
                            aria-label="Добавить в избранное">
                            <i class="icon-link__icon">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.9604 3.9583C15.1212 3.11692 14.0088 2.6034 12.8241 2.51048C11.6394 2.41756 10.4605 2.75138 9.50038 3.45164C8.49311 2.70243 7.23937 2.36271 5.99165 2.50087C4.74393 2.63904 3.5949 3.24483 2.77594 4.19626C1.95699 5.1477 1.52895 6.37409 1.57802 7.62848C1.62708 8.88287 2.14961 10.0721 3.04038 10.9566L7.95663 15.8808C8.36831 16.286 8.92277 16.513 9.50038 16.513C10.078 16.513 10.6325 16.286 11.0441 15.8808L15.9604 10.9566C16.8847 10.0266 17.4035 8.76868 17.4035 7.45747C17.4035 6.14625 16.8847 4.8883 15.9604 3.9583ZM14.8441 9.86413L9.92788 14.7804C9.87194 14.8369 9.80535 14.8817 9.73198 14.9123C9.6586 14.9429 9.57988 14.9587 9.50038 14.9587C9.42088 14.9587 9.34216 14.9429 9.26879 14.9123C9.19541 14.8817 9.12883 14.8369 9.07288 14.7804L4.15663 9.84038C3.53577 9.20574 3.18811 8.35321 3.18811 7.46539C3.18811 6.57756 3.53577 5.72503 4.15663 5.09038C4.7893 4.46575 5.64257 4.1155 6.53163 4.1155C7.42069 4.1155 8.27397 4.46575 8.90663 5.09038C8.98023 5.16459 9.06779 5.22348 9.16426 5.26367C9.26073 5.30387 9.3642 5.32456 9.46871 5.32456C9.57322 5.32456 9.6767 5.30387 9.77317 5.26367C9.86964 5.22348 9.9572 5.16459 10.0308 5.09038C10.6635 4.46575 11.5167 4.1155 12.4058 4.1155C13.2949 4.1155 14.1481 4.46575 14.7808 5.09038C15.4102 5.71671 15.7693 6.56462 15.7811 7.45247C15.7929 8.34032 15.4566 9.1975 14.8441 9.84038V9.86413Z"
                                        fill="#121212" />
                                </svg>
                            </i>
                        </a>
                        <a href="#" data-target="sign" class="modal-trigger icon-link login-selector"
                            aria-label="Личный кабинет">
                            <i class="icon-link__icon">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.8031 10.4831C13.5793 9.87246 14.1458 9.03508 14.4238 8.08747C14.7019 7.13986 14.6777 6.12914 14.3546 5.19593C14.0315 4.26271 13.4256 3.45341 12.6211 2.88061C11.8166 2.30781 10.8536 2 9.86602 2C8.87846 2 7.91545 2.30781 7.11097 2.88061C6.30649 3.45341 5.70055 4.26271 5.37744 5.19593C5.05434 6.12914 5.03014 7.13986 5.30821 8.08747C5.58628 9.03508 6.1528 9.87246 6.92894 10.4831C5.599 11.0159 4.43859 11.8997 3.5714 13.0401C2.70421 14.1806 2.16276 15.535 2.00478 16.9589C1.99334 17.0629 2.00249 17.1681 2.03171 17.2685C2.06093 17.3689 2.10965 17.4626 2.17507 17.5442C2.30721 17.709 2.4994 17.8146 2.70936 17.8377C2.91932 17.8608 3.12986 17.7995 3.29466 17.6674C3.45946 17.5353 3.56501 17.3431 3.58811 17.1331C3.76195 15.5855 4.49986 14.1563 5.66087 13.1184C6.82187 12.0805 8.32457 11.5067 9.88186 11.5067C11.4391 11.5067 12.9418 12.0805 14.1029 13.1184C15.2639 14.1563 16.0018 15.5855 16.1756 17.1331C16.1971 17.3276 16.29 17.5073 16.4362 17.6374C16.5823 17.7675 16.7716 17.8389 16.9673 17.8377H17.0544C17.2619 17.8138 17.4516 17.7089 17.5821 17.5458C17.7125 17.3826 17.7733 17.1746 17.751 16.9669C17.5923 15.5388 17.0479 14.181 16.1763 13.0388C15.3046 11.8966 14.1386 11.0131 12.8031 10.4831ZM9.86602 9.92102C9.23972 9.92102 8.62748 9.7353 8.10672 9.38734C7.58596 9.03938 7.18008 8.54482 6.94041 7.96618C6.70073 7.38755 6.63802 6.75084 6.7602 6.13657C6.88239 5.52229 7.18399 4.95805 7.62685 4.51518C8.06972 4.07231 8.63397 3.77072 9.24824 3.64853C9.86251 3.52634 10.4992 3.58905 11.0779 3.82873C11.6565 4.06841 12.1511 4.47429 12.499 4.99505C12.847 5.5158 13.0327 6.12804 13.0327 6.75435C13.0327 7.5942 12.6991 8.39966 12.1052 8.99352C11.5113 9.58739 10.7059 9.92102 9.86602 9.92102Z"
                                        fill="#121212" />
                                </svg>
                            </i>
                        </a>
                        <a href="#" data-target="sidenav" class="sidenav-trigger" aria-label="Открыть меню">
                            <i class="burger-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="sidenav" id="sidenav">
            <div class="sidenav__wrapper">
                <div class="sidenav__logo">
                    <a class="waves-effect waves-light sidenav__link" href="https://placesmagazine.ru"
                        aria-label="На главную">
                        <img width="300" height="23" src="https://placesmagazine.ru/wp-content/uploads/2023/06/logo.svg"
                            class="attachment-medium size-medium" alt="PlacesMagazine logo" decoding="async"
                            loading="lazy" /> </a>
                </div>
                <div class="sidenav__menu">
                    <nav class="sidenav-nav">
                        <ul id="mobile-menu" class="sidenav-menu" itemscope=""
                            itemtype="http://schema.org/SiteNavigationElement">
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-22 current_page_item menu-item-69">
                                <a href="https://placesmagazine.ru/" aria-current="page"><span
                                        class="menu-item__wrapper" itemprop="name"
                                        role="presentation">Главная</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a
                                    href="https://placesmagazine.ru/sobytiya/"><span class="menu-item__wrapper"
                                        itemprop="name" role="presentation">События</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"><a
                                    href="https://placesmagazine.ru/journal/"><span class="menu-item__wrapper"
                                        itemprop="name" role="presentation">Журнал</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="sidenav__footer">
                </div>
            </div>
        </div>
        <div id="content" class="site-content">
            <section class="section section--banner banner"
                style="background-image:url(https://placesmagazine.ru/wp-content/uploads/2023/06/banner-11.jpg);">
                <div class="container--big">
                    <h1 class="title site-title">
                        placesmagazine </h1>
                </div>
                <div class="container">
                    <p class="banner__text">
                        На перекрестке главных событий Иркутска </p>
                    <div class="banner__search">
                        <div class="search search--big">
                            <div class="search__action">
                                <form class="search__form">
                                    <input type="text" id="rotate-text" class="search__input" name="s"
                                        placeholder="Танцы, бары и вечеринки" data-period="200"
                                        data-rotate='[ "Мастер-классы", "Релакс, SPA и красота", "Тематические клубы, конференции и тренинги", "Танцы, бары и вечеринки", "Прогулки, игры и активный отдых", "Рестораны и дегустации", "Культурный досуг", "Загородный отдых и путешествия", "Выбор редакции" ]'
                                        aria-label="Поиск">
                                    <button type="submit" class="search__button" aria-label="Начать поиск">
                                        <i class="icon icon--svg">
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.1867 16.063L14.2496 13.1497C15.3897 11.7282 15.9418 9.92389 15.7924 8.1078C15.643 6.29172 14.8035 4.60189 13.4465 3.38578C12.0895 2.16967 10.3181 1.51972 8.49652 1.56956C6.67498 1.61941 4.94177 2.36526 3.65327 3.65376C2.36477 4.94226 1.61892 6.67547 1.56907 8.497C1.51923 10.3185 2.16919 12.0899 3.3853 13.447C4.60141 14.804 6.29123 15.6435 8.10732 15.7929C9.9234 15.9423 11.7277 15.3902 13.1492 14.2501L16.0625 17.1634C16.1361 17.2376 16.2237 17.2965 16.3202 17.3367C16.4166 17.3769 16.5201 17.3976 16.6246 17.3976C16.7291 17.3976 16.8326 17.3769 16.9291 17.3367C17.0255 17.2965 17.1131 17.2376 17.1867 17.1634C17.3294 17.0158 17.4092 16.8185 17.4092 16.6132C17.4092 16.4079 17.3294 16.2106 17.1867 16.063ZM8.70795 14.2501C7.61191 14.2501 6.54049 13.9251 5.62917 13.3162C4.71785 12.7072 4.00756 11.8418 3.58812 10.8291C3.16868 9.81654 3.05894 8.70229 3.27277 7.62732C3.48659 6.55234 4.01439 5.56491 4.7894 4.78989C5.56442 4.01487 6.55185 3.48708 7.62683 3.27326C8.70181 3.05943 9.81605 3.16917 10.8287 3.58861C11.8413 4.00804 12.7068 4.71833 13.3157 5.62966C13.9246 6.54098 14.2496 7.6124 14.2496 8.70844C14.2496 10.1782 13.6658 11.5877 12.6265 12.627C11.5872 13.6663 10.1777 14.2501 8.70795 14.2501Z"
                                                    fill="white" />
                                            </svg>
                                        </i>
                                    </button>
                                </form>
                            </div>
                            <div class="tags">
                                <a href="https://placesmagazine.ru/tag/bar/"
                                    class="waves-effect waves-light bar  chip">Бар</a>
                                <a href="https://placesmagazine.ru/tag/wine-tasting/"
                                    class="waves-effect waves-light wine-tasting  chip">Винная дегустация</a>
                                <a href="https://placesmagazine.ru/tag/walk/"
                                    class="waves-effect waves-light walk  chip">Погулять</a>
                                <a href="https://placesmagazine.ru/tag/restoran/"
                                    class="waves-effect waves-light restoran  chip">Ресторан</a>
                                <a href="https://placesmagazine.ru/tag/dating/"
                                    class="waves-effect waves-light dating  chip">Свидание</a>
                                <a href="https://placesmagazine.ru/tag/themed-dinner/"
                                    class="waves-effect waves-light themed-dinner  chip">Тематический ужин</a>
                            </div>
                        </div>
                    </div>
                    <div class="banner__citys">
                        <div class="citys">
                            <a class="city" href="#">
                                Москва </a>
                            <span class="text-divider"> | </span>
                            <a class="city" href="#">
                                Нижний Новгород </a>
                            <span class="text-divider"> | </span>
                            <a class="city" href="#">
                                Иркутск </a>
                            <span class="text-divider"> | </span>
                            <a class="city" href="#">
                                Санкт-Петербург </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="event-guide">
                <div class="container--fluid">
                    <h2 class="title block-title event-guide__title">Гид по событиям в Иркутске</h2>
                    <div class="row event-guide__row">
                        <div class="col s12 m3 event-guide__block">
                            <div class="event-guide__text">
                                <p>Где вкуснее еда, где лучше потанцевать и где трава зеленее — знают наши эксперты. Они
                                    работают 24/7, чтобы помочь жителям не заблудиться в мире развлечений. Каждое место
                                    тестируется на прочность – от качества пива до пышности коврика в зале для йоги.
                                </p>
                                <p>Читайте обзоры и будьте уверены в событиях <b>PlacesMagazine</b></p>
                            </div>
                            <div class="event-guide__actions">
                                <a class="waves-effect waves-light btn-circle event-guide__btn"
                                    href="https://placesmagazine.ru/sobytiya/">
                                    ко всем событиям <i class="icon icon--svg icon--block">
                                        <svg width="33" height="16" viewBox="0 0 33 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M32.7071 8.70711C33.0976 8.31658 33.0976 7.68342 32.7071 7.29289L26.3431 0.928932C25.9526 0.538408 25.3195 0.538408 24.9289 0.928932C24.5384 1.31946 24.5384 1.95262 24.9289 2.34315L30.5858 8L24.9289 13.6569C24.5384 14.0474 24.5384 14.6805 24.9289 15.0711C25.3195 15.4616 25.9526 15.4616 26.3431 15.0711L32.7071 8.70711ZM0 9H32V7H0V9Z"
                                                fill="white" />
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="col s12 m9 event-guide__posts">
                            <div class="event-card" data-week="4">
                                <div class="event-card__image">
                                    <div class="cats">
                                        <a href="https://placesmagazine.ru/tag/wine-tasting/"
                                            class="waves-effect waves-light wine-tasting chip">
                                            Винная дегустация </a>
                                        <span class="separator"> | </span>
                                        <a href="https://placesmagazine.ru/tag/dating/"
                                            class="waves-effect waves-light dating chip">
                                            Свидание </a>
                                    </div>
                                    <a class="waves-effect waves-light grayscale scale card__link"
                                        href="https://placesmagazine.ru/event/vinnaya-degustacziya/"
                                        aria-label="винная дегустация">
                                        <picture>
                                            <source
                                                srcset="https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/06/photo.png.webp"
                                                type="image/webp"><img width="254" height="153"
                                                src="https://placesmagazine.ru/wp-content/uploads/2023/06/photo.png"
                                                class="responsive-img webpexpress-processed" alt="" decoding="async"
                                                loading="lazy"></picture>
                                    </a>
                                </div>
                                <div class="event-card__content">
                                    <a class="event-card__link"
                                        href="https://placesmagazine.ru/event/vinnaya-degustacziya/">
                                        <h3 class="card__title">
                                            винная дегустация </h3>
                                    </a>
                                    <p class="event-card__text">
                                        Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда
                                        нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент,
                                        который не должен нести никакого смысла, лишь показать наличие самого текста или
                                        продемонстрировать.... </p>
                                    <p class="event-card__datetime">
                                        <span class="event-card__date">
                                            <span class="date__start">28 марта, 2024</span>
                                        </span>
                                        <span class="event-card__time">
                                            <span class="time__start">с 19:00</span>
                                            <span class="time__end">до 21:00</span>
                                        </span>
                                    </p>
                                </div>
                                <div class="event-card__footer">
                                    <div class="row">
                                        <div class="col s6 event-card__price">
                                            <span class="price">1 500<span class="currency">₽</span></span> </div>
                                        <div class="col s6 event-card__actions">
                                            <span class="event-card__checked">
                                                <i class="tooltipped icon icon--image" data-tooltip="Выбор эксперта"
                                                    data-position="left">
                                                    <img width="22px" height="22px"
                                                        src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/check-circle.svg"
                                                        alt="Событие подтвержденно администрацией"
                                                        class="responsive-img">
                                                </i>
                                            </span>
                                            <a class="simplefavorite-button" data-postid="158" data-siteid="1"
                                                data-groupid="1" data-favoritecount="5" style=""><i
                                                    class="tooltipped icon icon--image favorite-add"
                                                    data-tooltip="Добавить в сохраненные" data-position="left"><img
                                                        width="22" height="22"
                                                        src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/heart.svg"
                                                        alt="Добавить в сохраненные" class="responsive-img"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="event-card" data-week="more-than">
                                <div class="event-card__image">
                                    <div class="cats">
                                        <a href="https://placesmagazine.ru/tag/wine-tasting/"
                                            class="waves-effect waves-light wine-tasting chip">
                                            Винная дегустация </a>
                                        <span class="separator"> | </span>
                                        <a href="https://placesmagazine.ru/tag/dating/"
                                            class="waves-effect waves-light dating chip">
                                            Свидание </a>
                                    </div>
                                    <a class="waves-effect waves-light grayscale scale card__link"
                                        href="https://placesmagazine.ru/event/besplatnyj-stendap-kazhdyj-den/"
                                        aria-label="Бесплатный стендап каждый день">
                                        <picture>
                                            <source
                                                srcset="https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/06/6eec09d21ae500b2307d665079bf6ef1-scaled-254x153.jpg.webp"
                                                type="image/webp"><img width="254" height="153"
                                                src="https://placesmagazine.ru/wp-content/uploads/2023/06/6eec09d21ae500b2307d665079bf6ef1-scaled-254x153.jpg"
                                                class="responsive-img webpexpress-processed" alt="" decoding="async"
                                                loading="lazy"></picture>
                                    </a>
                                </div>
                                <div class="event-card__content">
                                    <a class="event-card__link"
                                        href="https://placesmagazine.ru/event/besplatnyj-stendap-kazhdyj-den/">
                                        <h3 class="card__title">
                                            Бесплатный стендап каждый день </h3>
                                    </a>
                                    <p class="event-card__text">
                                        Каждый день в центре Москвы выступают опытные комики с телевидения и YouTube.
                                        Проект «Кроме шуток» — это отличный выбор, чтобы провести вечер с друзьями,
                                        отдохнуть после работы одному или с коллегами. </p>
                                    <p class="event-card__datetime">
                                        <span class="event-card__date">
                                            <span class="date__start">21 июня</span>
                                            -
                                            <span class="date__end">30 июня</span>
                                        </span>
                                        <span class="event-card__time">
                                            <span class="time__start">с 20:00</span>
                                            <span class="time__end">до 23:00</span>
                                        </span>
                                    </p>
                                </div>
                                <div class="event-card__footer">
                                    <div class="row">
                                        <div class="col s6 event-card__price">
                                            Бесплатные </div>
                                        <div class="col s6 event-card__actions">
                                            <span class="event-card__checked">
                                                <i class="tooltipped icon icon--image" data-tooltip="Выбор эксперта"
                                                    data-position="left">
                                                    <img width="22px" height="22px"
                                                        src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/check-circle.svg"
                                                        alt="Событие подтвержденно администрацией"
                                                        class="responsive-img">
                                                </i>
                                            </span>
                                            <a class="simplefavorite-button" data-postid="132" data-siteid="1"
                                                data-groupid="1" data-favoritecount="0" style=""><i
                                                    class="tooltipped icon icon--image favorite-add"
                                                    data-tooltip="Добавить в сохраненные" data-position="left"><img
                                                        width="22" height="22"
                                                        src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/heart.svg"
                                                        alt="Добавить в сохраненные" class="responsive-img"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="event-card" data-week="6">
                                <div class="event-card__image">
                                    <div class="cats">
                                        <a href="https://placesmagazine.ru/tag/bar/"
                                            class="waves-effect waves-light bar chip">
                                            Бар </a>
                                        <span class="separator"> | </span>
                                        <a href="https://placesmagazine.ru/tag/restoran/"
                                            class="waves-effect waves-light restoran chip">
                                            Ресторан </a>
                                    </div>
                                    <a class="waves-effect waves-light grayscale scale card__link"
                                        href="https://placesmagazine.ru/event/torzhestvennoe-otkrytie-bara-saxar/"
                                        aria-label="Торжественное открытие  бара saxar">
                                        <picture>
                                            <source
                                                srcset="https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/07/photo3-254x153.png.webp"
                                                type="image/webp"><img width="254" height="153"
                                                src="https://placesmagazine.ru/wp-content/uploads/2023/07/photo3-254x153.png"
                                                class="responsive-img webpexpress-processed" alt="" decoding="async"
                                                loading="lazy"></picture>
                                    </a>
                                </div>
                                <div class="event-card__content">
                                    <a class="event-card__link"
                                        href="https://placesmagazine.ru/event/torzhestvennoe-otkrytie-bara-saxar/">
                                        <h3 class="card__title">
                                            Торжественное открытие бара saxar </h3>
                                    </a>
                                    <p class="event-card__text">
                                        Новый бар-ресторан на перекрестке всех событий города </p>
                                    <p class="event-card__datetime">
                                        <span class="event-card__date">
                                            <span class="date__start">30 марта, 2024</span>
                                        </span>
                                        <span class="event-card__time">
                                            <span class="time__start">с 21:00</span>
                                            <span class="time__end">до 03:30</span>
                                        </span>
                                    </p>
                                </div>
                                <div class="event-card__footer">
                                    <div class="row">
                                        <div class="col s6 event-card__price">
                                            <span class="price">2 000<span class="currency">₽</span></span> </div>
                                        <div class="col s6 event-card__actions">
                                            <a class="simplefavorite-button" data-postid="204" data-siteid="1"
                                                data-groupid="1" data-favoritecount="1" style=""><i
                                                    class="tooltipped icon icon--image favorite-add"
                                                    data-tooltip="Добавить в сохраненные" data-position="left"><img
                                                        width="22" height="22"
                                                        src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/heart.svg"
                                                        alt="Добавить в сохраненные" class="responsive-img"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <sections class="events events--week">
                <div class="container">
                    <div class="row events__header">
                        <div class="col s12 m7 events__title">
                            <h2 class="title block-title">
                                Куда сходить на этой неделе?
                            </h2>
                        </div>
                        <div class="col s12 m5 events__filter">
                            <span class="events__filter-item active" data-week="all">Все</span>
                            <span class="events__filter-item" data-week="1">Пн</span>
                            <span class="events__filter-item" data-week="2">Вт</span>
                            <span class="events__filter-item" data-week="3">Ср</span>
                            <span class="events__filter-item" data-week="4">Чт</span>
                            <span class="events__filter-item" data-week="5">Пт</span>
                            <span class="events__filter-item" data-week="6">Сб</span>
                            <span class="events__filter-item" data-week="7">Вск</span>
                        </div>
                    </div>
                    <div class="events__items">
                        <div class="events__posts">
                            <div class="row events__row events-week__row">
                                <div class="col s12 m6 events__post events__post--big">
                                    <div class="event-card event-card--big" data-week="4">
                                        <div class="event-card__image">
                                            <div class="cats">
                                                <a href="https://placesmagazine.ru/tag/themed-dinner/"
                                                    class="waves-effect waves-light themed-dinner chip">
                                                    Тематический ужин </a>
                                            </div>
                                            <a class="waves-effect waves-light grayscale scale card__link"
                                                href="https://placesmagazine.ru/event/glavnaya-vecherinka-vesny-v-restorane-hollywood-evening/"
                                                aria-label="Главная вечеринка весны  в ресторане Hollywood evening">
                                                <picture>
                                                    <source
                                                        srcset="https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/07/photo2.png.webp 572w, https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/07/photo2-300x121.png.webp 300w"
                                                        sizes="(max-width: 572px) 100vw, 572px" type="image/webp"><img
                                                        width="572" height="231"
                                                        src="https://placesmagazine.ru/wp-content/uploads/2023/07/photo2.png"
                                                        class="responsive-img webpexpress-processed" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="https://placesmagazine.ru/wp-content/uploads/2023/07/photo2.png 572w, https://placesmagazine.ru/wp-content/uploads/2023/07/photo2-300x121.png 300w"
                                                        sizes="(max-width: 572px) 100vw, 572px"></picture>
                                            </a>
                                        </div>
                                        <div class="event-card__content">
                                            <a class="event-card__link"
                                                href="https://placesmagazine.ru/event/glavnaya-vecherinka-vesny-v-restorane-hollywood-evening/">
                                                <h3 class="card__title">
                                                    Главная вечеринка весны в ресторане Hollywood evening </h3>
                                            </a>
                                            <p class="event-card__text">
                                                Рыбатекст используется дизайнерами, проектировщиками и фронтендерами,
                                                когда нужно быстро заполнить макеты или прототипы содержимым... </p>
                                            <p class="event-card__datetime">
                                                <span class="event-card__date">
                                                    <span class="date__start">28 марта, 2024</span>
                                                </span>
                                                <span class="event-card__time">
                                                    <span class="time__start">с 21:30</span>
                                                    <span class="time__end">до 03:30</span>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="event-card__footer">
                                            <div class="row">
                                                <div class="col s6 event-card__price">
                                                    <span class="price">1 800<span class="currency">₽</span></span>
                                                </div>
                                                <div class="col s6 event-card__actions">
                                                    <span class="event-card__checked">
                                                        <i class="tooltipped icon icon--image"
                                                            data-tooltip="Выбор эксперта" data-position="left">
                                                            <img width="22px" height="22px"
                                                                src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/check-circle.svg"
                                                                alt="Событие подтвержденно администрацией"
                                                                class="responsive-img">
                                                        </i>
                                                    </span>
                                                    <a class="simplefavorite-button" data-postid="201" data-siteid="1"
                                                        data-groupid="1" data-favoritecount="1" style=""><i
                                                            class="tooltipped icon icon--image favorite-add"
                                                            data-tooltip="Добавить в сохраненные"
                                                            data-position="left"><img width="22" height="22"
                                                                src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/heart.svg"
                                                                alt="Добавить в сохраненные"
                                                                class="responsive-img"></i></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m3 events__subscribe">
                                    <h3 class="events__subscribe-title">подпишитесь на рассылку</h3>
                                    <form class="subscribe">
                                        <p class="subscribe__text">
                                            Будь первым в курсе всех новостей
                                        </p>
                                        <input type="email" class="browser-default subscribe__email" name="email"
                                            placeholder="Ваш email" required>
                                        <button type="submit" class="waves-effect waves-light btn subscribe__btn">
                                            Подписаться
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="events__none">
                            <a class="link events__none-link" href="https://placesmagazine.ru/sobytiya/">
                                Перейти ко всем событиям
                            </a>
                        </div>
                    </div>
                </div>
            </sections>
            <section class="section section--partners partners">
                <div class="container">
                    <h2 class="title block-title">
                        в каталоге активных событий известных компаний </h2>
                </div>
                <div class="container--full">
                    <div class="partners-items">
                    </div>
                </div>
            </section>
            <section class="event-main">
                <div class="container">
                    <h2 class="title block-title">Главное событие недели</h2>
                    <div class="row event-main__row">
                        <div class="col s12 m6 event-main__info">
                            <div class="event-main__categorys">
                                <a class="simplefavorite-button" data-postid="204" data-siteid="1" data-groupid="1"
                                    data-favoritecount="1" style=""><i class="tooltipped icon icon--image favorite-add"
                                        data-tooltip="Добавить в сохраненные" data-position="left"><img width="22"
                                            height="22"
                                            src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/heart.svg"
                                            alt="Добавить в сохраненные" class="responsive-img"></i></a>
                                <div class="cats">
                                    <a href="https://placesmagazine.ru/tag/bar/"
                                        class="waves-effect waves-light bar chip">
                                        Бар </a>
                                    <span class="separator"> | </span>
                                    <a href="https://placesmagazine.ru/tag/restoran/"
                                        class="waves-effect waves-light restoran chip">
                                        Ресторан </a>
                                </div>
                            </div>
                            <div class="event-main__title">
                                <a class="link event-main__link"
                                    href="https://placesmagazine.ru/event/torzhestvennoe-otkrytie-bara-saxar/">
                                    <h3 class="event-title">Торжественное открытие бара saxar</h3>
                                </a>
                            </div>
                            <div class="event-main__description">
                                Новый бар-ресторан на перекрестке всех событий города </div>
                            <div class="event-main__dates">
                                <p class="event-main__datetime">
                                    <span class="event-main__date">
                                        <span class="date__start">30 марта, 2024</span>

                                    </span>
                                    <span class="event-main__time">
                                        <span class="time__start">с 21:00</span>
                                        <span class="time__end">до 03:30</span>
                                    </span>
                                </p>
                            </div>
                            <a href="https://placesmagazine.ru/event/torzhestvennoe-otkrytie-bara-saxar/"
                                class="waves-effect waves-light  btn-circle event-main__btn">
                                Узнать подробнее
                                <i class="icon icon--svg icon--block">
                                    <svg width="33" height="16" viewBox="0 0 33 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M32.7071 8.70711C33.0976 8.31658 33.0976 7.68342 32.7071 7.29289L26.3431 0.928932C25.9526 0.538408 25.3195 0.538408 24.9289 0.928932C24.5384 1.31946 24.5384 1.95262 24.9289 2.34315L30.5858 8L24.9289 13.6569C24.5384 14.0474 24.5384 14.6805 24.9289 15.0711C25.3195 15.4616 25.9526 15.4616 26.3431 15.0711L32.7071 8.70711ZM0 9H32V7H0V9Z"
                                            fill="white"></path>
                                    </svg>
                                </i>
                            </a>
                        </div>
                        <a href="https://placesmagazine.ru/event/torzhestvennoe-otkrytie-bara-saxar/"
                            class="waves-effect waves-light grayscale scale col s12 m6 event-main__image"
                            aria-label="Торжественное открытие  бара saxar">
                            <picture>
                                <source
                                    srcset="https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/07/photo3.png.webp 636w, https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/07/photo3-300x258.png.webp 300w"
                                    sizes="(max-width: 636px) 100vw, 636px" type="image/webp"><img width="636"
                                    height="548" src="https://placesmagazine.ru/wp-content/uploads/2023/07/photo3.png"
                                    class="responsive-img wp-post-image webpexpress-processed" alt="" decoding="async"
                                    loading="lazy"
                                    srcset="https://placesmagazine.ru/wp-content/uploads/2023/07/photo3.png 636w, https://placesmagazine.ru/wp-content/uploads/2023/07/photo3-300x258.png 300w"
                                    sizes="(max-width: 636px) 100vw, 636px"></picture>
                        </a>
                        <div class="event-main__tags event-main__tags--mobile">
                            <div class="cats">
                                <a href="https://placesmagazine.ru/tag/bar/" class="waves-effect waves-light bar chip">
                                    Бар </a>
                                <span class="separator"> | </span>
                                <a href="https://placesmagazine.ru/tag/restoran/"
                                    class="waves-effect waves-light restoran chip">
                                    Ресторан </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="editor-choose">
                <div class="container">
                    <h2 class="title block-title editor-choose__title">
                        <span class="editor-choose__title-text">
                            Сохраненки редакции </span>
                        <span class="editor-choose__title-icon">
                            <i class="icon icon--svg">
                                <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/heart-fill.svg"
                                    class="responsive-img" height="22px" width="22px"
                                    alt="Обратите внимание на эти события!">
                            </i>
                        </span>
                    </h2>
                    <div class="events-items__nav hide-on-small-only">
                        <button class="arrow editor-choose__arrow arrow--prev" aria-label="Назад">
                            <svg width="34" height="22" viewBox="0 0 34 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.29289 10.2929C0.90237 10.6834 0.90237 11.3166 1.29289 11.7071L7.65685 18.0711C8.04738 18.4616 8.68054 18.4616 9.07107 18.0711C9.46159 17.6805 9.46159 17.0474 9.07107 16.6569L3.41421 11L9.07107 5.34315C9.46159 4.95262 9.46159 4.31946 9.07107 3.92893C8.68054 3.53841 8.04738 3.53841 7.65685 3.92893L1.29289 10.2929ZM34 10H2V12H34V10Z"
                                    fill="#121212" />
                            </svg>
                        </button>
                        <button class="arrow editor-choose__arrow arrow--next" aria-label="Вперед">
                            <svg width="34" height="22" viewBox="0 0 34 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.7071 11.7071C33.0976 11.3166 33.0976 10.6834 32.7071 10.2929L26.3431 3.92893C25.9526 3.53841 25.3195 3.53841 24.9289 3.92893C24.5384 4.31946 24.5384 4.95262 24.9289 5.34315L30.5858 11L24.9289 16.6569C24.5384 17.0474 24.5384 17.6805 24.9289 18.0711C25.3195 18.4616 25.9526 18.4616 26.3431 18.0711L32.7071 11.7071ZM0 12H32V10H0V12Z"
                                    fill="#121212" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="container--fluid">
                    <div class="events-items">
                        <div class="event-card" data-week="4">
                            <div class="event-card__image">
                                <div class="cats">
                                    <a href="https://placesmagazine.ru/tag/wine-tasting/"
                                        class="waves-effect waves-light wine-tasting chip">
                                        Винная дегустация </a>
                                    <span class="separator"> | </span>
                                    <a href="https://placesmagazine.ru/tag/dating/"
                                        class="waves-effect waves-light dating chip">
                                        Свидание </a>
                                </div>
                                <a class="waves-effect waves-light grayscale scale card__link"
                                    href="https://placesmagazine.ru/event/vinnaya-degustacziya/"
                                    aria-label="винная дегустация">
                                    <picture>
                                        <source
                                            srcset="https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/06/photo.png.webp"
                                            type="image/webp"><img width="254" height="153"
                                            src="https://placesmagazine.ru/wp-content/uploads/2023/06/photo.png"
                                            class="responsive-img webpexpress-processed" alt="" decoding="async"
                                            loading="lazy"></picture>
                                </a>
                            </div>
                            <div class="event-card__content">
                                <a class="event-card__link"
                                    href="https://placesmagazine.ru/event/vinnaya-degustacziya/">
                                    <h3 class="card__title">
                                        винная дегустация </h3>
                                </a>
                                <p class="event-card__text">
                                    Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно
                                    быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не
                                    должен нести никакого смысла, лишь показать наличие самого текста или
                                    продемонстрировать.... </p>
                                <p class="event-card__datetime">
                                    <span class="event-card__date">
                                        <span class="date__start">28 марта, 2024</span>
                                    </span>
                                    <span class="event-card__time">
                                        <span class="time__start">с 19:00</span>
                                        <span class="time__end">до 21:00</span>
                                    </span>
                                </p>
                            </div>
                            <div class="event-card__footer">
                                <div class="row">
                                    <div class="col s6 event-card__price">
                                        <span class="price">1 500<span class="currency">₽</span></span> </div>
                                    <div class="col s6 event-card__actions">
                                        <span class="event-card__checked">
                                            <i class="tooltipped icon icon--image" data-tooltip="Выбор эксперта"
                                                data-position="left">
                                                <img width="22px" height="22px"
                                                    src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/check-circle.svg"
                                                    alt="Событие подтвержденно администрацией" class="responsive-img">
                                            </i>
                                        </span>
                                        <a class="simplefavorite-button" data-postid="158" data-siteid="1"
                                            data-groupid="1" data-favoritecount="5" style=""><i
                                                class="tooltipped icon icon--image favorite-add"
                                                data-tooltip="Добавить в сохраненные" data-position="left"><img
                                                    width="22" height="22"
                                                    src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/heart.svg"
                                                    alt="Добавить в сохраненные" class="responsive-img"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-card" data-week="4">
                            <div class="event-card__image">
                                <div class="cats">
                                    <a href="https://placesmagazine.ru/tag/themed-dinner/"
                                        class="waves-effect waves-light themed-dinner chip">
                                        Тематический ужин </a>
                                </div>
                                <a class="waves-effect waves-light grayscale scale card__link"
                                    href="https://placesmagazine.ru/event/glavnaya-vecherinka-vesny-v-restorane-hollywood-evening/"
                                    aria-label="Главная вечеринка весны  в ресторане Hollywood evening">
                                    <picture>
                                        <source
                                            srcset="https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/07/photo2-254x153.png.webp"
                                            type="image/webp"><img width="254" height="153"
                                            src="https://placesmagazine.ru/wp-content/uploads/2023/07/photo2-254x153.png"
                                            class="responsive-img webpexpress-processed" alt="" decoding="async"
                                            loading="lazy"></picture>
                                </a>
                            </div>
                            <div class="event-card__content">
                                <a class="event-card__link"
                                    href="https://placesmagazine.ru/event/glavnaya-vecherinka-vesny-v-restorane-hollywood-evening/">
                                    <h3 class="card__title">
                                        Главная вечеринка весны в ресторане Hollywood evening </h3>
                                </a>
                                <p class="event-card__text">
                                    Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно
                                    быстро заполнить макеты или прототипы содержимым... </p>
                                <p class="event-card__datetime">
                                    <span class="event-card__date">
                                        <span class="date__start">28 марта, 2024</span>
                                    </span>
                                    <span class="event-card__time">
                                        <span class="time__start">с 21:30</span>
                                        <span class="time__end">до 03:30</span>
                                    </span>
                                </p>
                            </div>
                            <div class="event-card__footer">
                                <div class="row">
                                    <div class="col s6 event-card__price">
                                        <span class="price">1 800<span class="currency">₽</span></span> </div>
                                    <div class="col s6 event-card__actions">
                                        <span class="event-card__checked">
                                            <i class="tooltipped icon icon--image" data-tooltip="Выбор эксперта"
                                                data-position="left">
                                                <img width="22px" height="22px"
                                                    src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/check-circle.svg"
                                                    alt="Событие подтвержденно администрацией" class="responsive-img">
                                            </i>
                                        </span>
                                        <a class="simplefavorite-button" data-postid="201" data-siteid="1"
                                            data-groupid="1" data-favoritecount="1" style=""><i
                                                class="tooltipped icon icon--image favorite-add"
                                                data-tooltip="Добавить в сохраненные" data-position="left"><img
                                                    width="22" height="22"
                                                    src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/heart.svg"
                                                    alt="Добавить в сохраненные" class="responsive-img"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-card" data-week="6">
                            <div class="event-card__image">
                                <div class="cats">
                                    <a href="https://placesmagazine.ru/tag/bar/"
                                        class="waves-effect waves-light bar chip">
                                        Бар </a>
                                    <span class="separator"> | </span>
                                    <a href="https://placesmagazine.ru/tag/restoran/"
                                        class="waves-effect waves-light restoran chip">
                                        Ресторан </a>
                                </div>
                                <a class="waves-effect waves-light grayscale scale card__link"
                                    href="https://placesmagazine.ru/event/torzhestvennoe-otkrytie-bara-saxar/"
                                    aria-label="Торжественное открытие  бара saxar">
                                    <picture>
                                        <source
                                            srcset="https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/07/photo3-254x153.png.webp"
                                            type="image/webp"><img width="254" height="153"
                                            src="https://placesmagazine.ru/wp-content/uploads/2023/07/photo3-254x153.png"
                                            class="responsive-img webpexpress-processed" alt="" decoding="async"
                                            loading="lazy"></picture>
                                </a>
                            </div>
                            <div class="event-card__content">
                                <a class="event-card__link"
                                    href="https://placesmagazine.ru/event/torzhestvennoe-otkrytie-bara-saxar/">
                                    <h3 class="card__title">
                                        Торжественное открытие бара saxar </h3>
                                </a>
                                <p class="event-card__text">
                                    Новый бар-ресторан на перекрестке всех событий города </p>
                                <p class="event-card__datetime">
                                    <span class="event-card__date">
                                        <span class="date__start">30 марта, 2024</span>
                                    </span>
                                    <span class="event-card__time">
                                        <span class="time__start">с 21:00</span>
                                        <span class="time__end">до 03:30</span>
                                    </span>
                                </p>
                            </div>
                            <div class="event-card__footer">
                                <div class="row">
                                    <div class="col s6 event-card__price">
                                        <span class="price">2 000<span class="currency">₽</span></span> </div>
                                    <div class="col s6 event-card__actions">
                                        <a class="simplefavorite-button" data-postid="204" data-siteid="1"
                                            data-groupid="1" data-favoritecount="1" style=""><i
                                                class="tooltipped icon icon--image favorite-add"
                                                data-tooltip="Добавить в сохраненные" data-position="left"><img
                                                    width="22" height="22"
                                                    src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/heart.svg"
                                                    alt="Добавить в сохраненные" class="responsive-img"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section--feedbacks feedbacks">
                <div class="container">
                    <div class="row feedbacks__row">
                        <h2 class="col s6 feedbacks__title title block-title">
                            Отзывы </h2>
                        <div class="col s6 feedbacks__count-wrap">
                            <span class="feedbacks__count">
                                Найдено отзывов:
                                <span>6</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="container--fluid">
                    <div class="feedbacks-items">
                        <div class="feedback-card">
                            <div class="feedback-card__header">
                                <div class="row">
                                    <div class="col s9 feedback-card__author">
                                        <div class="feedback-card__author-avatar">
                                            <img src="" class="circle responsive-img" alt="аватар пользователя"
                                                width="32px" height="32px">
                                        </div>
                                        <div class="feedback-card__author-name">
                                        </div>
                                    </div>
                                    <div class="col s3 feedback-card__rating">
                                        <i class="icon icon--image">
                                            <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/star.svg"
                                                class="responsive-img" alt="Рейтинг отзова" width="18px" height="17px">
                                        </i>
                                        <span class="feedback-card__rating-text">
                                            4 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-card__body">
                                <a class="link"
                                    href="https://placesmagazine.ru/event/romanticheskoe-svidanie-na-67-m-etazhe-moskva-siti-ot-proekta-romantic-room/">
                                    <h3 class="feedback-card__title">
                                        Свидание на 67-м этаже «Москва-Сити» </h3>
                                </a>
                                <p class="feedback-card__text">
                                    Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно
                                    быстро заполнить макета.. </p>
                            </div>
                            <div class="feedback-card__footer">
                                <div class="row">
                                    <div class="col s5 feedback-card__photos">
                                        <i class="icon icon--image">
                                            <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/images-line.svg"
                                                class="responsive-img" alt="Количество фотографий в отзове" width="22px"
                                                height="22px">
                                        </i>
                                        <span class="feedback-card__photos-text">
                                            +3 фото
                                        </span>
                                    </div>
                                    <div class="col s7 feedback-card__more">
                                        <a class="feedback-card__link"
                                            href="https://placesmagazine.ru/event/romanticheskoe-svidanie-na-67-m-etazhe-moskva-siti-ot-proekta-romantic-room/#comments">
                                            Еще отзывы <i class="icon icon--svg">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.3536 8.35355C15.5488 8.15829 15.5488 7.84171 15.3536 7.64645L12.1716 4.46447C11.9763 4.2692 11.6597 4.2692 11.4645 4.46447C11.2692 4.65973 11.2692 4.97631 11.4645 5.17157L14.2929 8L11.4645 10.8284C11.2692 11.0237 11.2692 11.3403 11.4645 11.5355C11.6597 11.7308 11.9763 11.7308 12.1716 11.5355L15.3536 8.35355ZM4.37114e-08 8.5L15 8.5L15 7.5L-4.37114e-08 7.5L4.37114e-08 8.5Z"
                                                        fill="#3E759C" />
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-card">
                            <div class="feedback-card__header">
                                <div class="row">
                                    <div class="col s9 feedback-card__author">
                                        <div class="feedback-card__author-avatar">
                                            <img src="" class="circle responsive-img" alt="аватар пользователя"
                                                width="32px" height="32px">
                                        </div>
                                        <div class="feedback-card__author-name">
                                        </div>
                                    </div>
                                    <div class="col s3 feedback-card__rating">
                                        <i class="icon icon--image">
                                            <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/star.svg"
                                                class="responsive-img" alt="Рейтинг отзова" width="18px" height="17px">
                                        </i>
                                        <span class="feedback-card__rating-text">
                                            5 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-card__body">
                                <a class="link"
                                    href="https://placesmagazine.ru/event/romanticheskoe-svidanie-na-67-m-etazhe-moskva-siti-ot-proekta-romantic-room/">
                                    <h3 class="feedback-card__title">
                                        Свидание на 67-м этаже «Москва-Сити» </h3>
                                </a>
                                <p class="feedback-card__text">
                                    Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно
                                    быстро заполнить макета... </p>
                            </div>
                            <div class="feedback-card__footer">
                                <div class="row">
                                    <div class="col s5 feedback-card__photos">
                                        <i class="icon icon--image">
                                            <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/images-line.svg"
                                                class="responsive-img" alt="Количество фотографий в отзове" width="22px"
                                                height="22px">
                                        </i>
                                        <span class="feedback-card__photos-text">
                                            +2 фото
                                        </span>
                                    </div>
                                    <div class="col s7 feedback-card__more">
                                        <a class="feedback-card__link"
                                            href="https://placesmagazine.ru/event/romanticheskoe-svidanie-na-67-m-etazhe-moskva-siti-ot-proekta-romantic-room/#comments">
                                            Еще отзывы <i class="icon icon--svg">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.3536 8.35355C15.5488 8.15829 15.5488 7.84171 15.3536 7.64645L12.1716 4.46447C11.9763 4.2692 11.6597 4.2692 11.4645 4.46447C11.2692 4.65973 11.2692 4.97631 11.4645 5.17157L14.2929 8L11.4645 10.8284C11.2692 11.0237 11.2692 11.3403 11.4645 11.5355C11.6597 11.7308 11.9763 11.7308 12.1716 11.5355L15.3536 8.35355ZM4.37114e-08 8.5L15 8.5L15 7.5L-4.37114e-08 7.5L4.37114e-08 8.5Z"
                                                        fill="#3E759C" />
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-card">
                            <div class="feedback-card__header">
                                <div class="row">
                                    <div class="col s9 feedback-card__author">
                                        <div class="feedback-card__author-avatar">
                                            <img src="" class="circle responsive-img" alt="аватар пользователя"
                                                width="32px" height="32px">
                                        </div>
                                        <div class="feedback-card__author-name">
                                        </div>
                                    </div>
                                    <div class="col s3 feedback-card__rating">
                                        <i class="icon icon--image">
                                            <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/star.svg"
                                                class="responsive-img" alt="Рейтинг отзова" width="18px" height="17px">
                                        </i>
                                        <span class="feedback-card__rating-text">
                                            1 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-card__body">
                                <a class="link" href="https://placesmagazine.ru/event/vinnaya-degustacziya/">
                                    <h3 class="feedback-card__title">
                                        винная дегустация </h3>
                                </a>
                                <p class="feedback-card__text">
                                    Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно
                                    быстро заполнить макета. </p>
                            </div>
                            <div class="feedback-card__footer">
                                <div class="row">
                                    <div class="col s5 feedback-card__photos">
                                        <i class="icon icon--image">
                                            <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/images-line.svg"
                                                class="responsive-img" alt="Количество фотографий в отзове" width="22px"
                                                height="22px">
                                        </i>
                                        <span class="feedback-card__photos-text">
                                            +4 фото
                                        </span>
                                    </div>
                                    <div class="col s7 feedback-card__more">
                                        <a class="feedback-card__link"
                                            href="https://placesmagazine.ru/event/vinnaya-degustacziya/#comments">
                                            Еще отзывы <i class="icon icon--svg">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.3536 8.35355C15.5488 8.15829 15.5488 7.84171 15.3536 7.64645L12.1716 4.46447C11.9763 4.2692 11.6597 4.2692 11.4645 4.46447C11.2692 4.65973 11.2692 4.97631 11.4645 5.17157L14.2929 8L11.4645 10.8284C11.2692 11.0237 11.2692 11.3403 11.4645 11.5355C11.6597 11.7308 11.9763 11.7308 12.1716 11.5355L15.3536 8.35355ZM4.37114e-08 8.5L15 8.5L15 7.5L-4.37114e-08 7.5L4.37114e-08 8.5Z"
                                                        fill="#3E759C" />
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-card">
                            <div class="feedback-card__header">
                                <div class="row">
                                    <div class="col s9 feedback-card__author">
                                        <div class="feedback-card__author-avatar">
                                            <img src="" class="circle responsive-img" alt="аватар пользователя"
                                                width="32px" height="32px">
                                        </div>
                                        <div class="feedback-card__author-name">
                                        </div>
                                    </div>
                                    <div class="col s3 feedback-card__rating">
                                        <i class="icon icon--image">
                                            <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/star.svg"
                                                class="responsive-img" alt="Рейтинг отзова" width="18px" height="17px">
                                        </i>
                                        <span class="feedback-card__rating-text">
                                            2 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-card__body">
                                <a class="link" href="https://placesmagazine.ru/event/vinnaya-degustacziya/">
                                    <h3 class="feedback-card__title">
                                        винная дегустация </h3>
                                </a>
                                <p class="feedback-card__text">
                                    Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно
                                    быстро заполнить макета.. </p>
                            </div>
                            <div class="feedback-card__footer">
                                <div class="row">
                                    <div class="col s5 feedback-card__photos">
                                        <i class="icon icon--image">
                                            <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/images-line.svg"
                                                class="responsive-img" alt="Количество фотографий в отзове" width="22px"
                                                height="22px">
                                        </i>
                                        <span class="feedback-card__photos-text">
                                            +2 фото
                                        </span>
                                    </div>
                                    <div class="col s7 feedback-card__more">
                                        <a class="feedback-card__link"
                                            href="https://placesmagazine.ru/event/vinnaya-degustacziya/#comments">
                                            Еще отзывы <i class="icon icon--svg">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.3536 8.35355C15.5488 8.15829 15.5488 7.84171 15.3536 7.64645L12.1716 4.46447C11.9763 4.2692 11.6597 4.2692 11.4645 4.46447C11.2692 4.65973 11.2692 4.97631 11.4645 5.17157L14.2929 8L11.4645 10.8284C11.2692 11.0237 11.2692 11.3403 11.4645 11.5355C11.6597 11.7308 11.9763 11.7308 12.1716 11.5355L15.3536 8.35355ZM4.37114e-08 8.5L15 8.5L15 7.5L-4.37114e-08 7.5L4.37114e-08 8.5Z"
                                                        fill="#3E759C" />
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-card">
                            <div class="feedback-card__header">
                                <div class="row">
                                    <div class="col s9 feedback-card__author">
                                        <div class="feedback-card__author-avatar">
                                            <img src="" class="circle responsive-img" alt="аватар пользователя"
                                                width="32px" height="32px">
                                        </div>
                                        <div class="feedback-card__author-name">
                                        </div>
                                    </div>
                                    <div class="col s3 feedback-card__rating">
                                        <i class="icon icon--image">
                                            <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/star.svg"
                                                class="responsive-img" alt="Рейтинг отзова" width="18px" height="17px">
                                        </i>
                                        <span class="feedback-card__rating-text">
                                            3 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-card__body">
                                <a class="link" href="https://placesmagazine.ru/event/vinnaya-degustacziya/">
                                    <h3 class="feedback-card__title">
                                        винная дегустация </h3>
                                </a>
                                <p class="feedback-card__text">
                                    Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно
                                    быстро заполнить макета... </p>
                            </div>
                            <div class="feedback-card__footer">
                                <div class="row">
                                    <div class="col s5 feedback-card__photos">
                                        <i class="icon icon--image">
                                            <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/images-line.svg"
                                                class="responsive-img" alt="Количество фотографий в отзове" width="22px"
                                                height="22px">
                                        </i>
                                        <span class="feedback-card__photos-text">
                                            +3 фото
                                        </span>
                                    </div>
                                    <div class="col s7 feedback-card__more">
                                        <a class="feedback-card__link"
                                            href="https://placesmagazine.ru/event/vinnaya-degustacziya/#comments">
                                            Еще отзывы <i class="icon icon--svg">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.3536 8.35355C15.5488 8.15829 15.5488 7.84171 15.3536 7.64645L12.1716 4.46447C11.9763 4.2692 11.6597 4.2692 11.4645 4.46447C11.2692 4.65973 11.2692 4.97631 11.4645 5.17157L14.2929 8L11.4645 10.8284C11.2692 11.0237 11.2692 11.3403 11.4645 11.5355C11.6597 11.7308 11.9763 11.7308 12.1716 11.5355L15.3536 8.35355ZM4.37114e-08 8.5L15 8.5L15 7.5L-4.37114e-08 7.5L4.37114e-08 8.5Z"
                                                        fill="#3E759C" />
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-card">
                            <div class="feedback-card__header">
                                <div class="row">
                                    <div class="col s9 feedback-card__author">
                                        <div class="feedback-card__author-avatar">
                                            <img src="" class="circle responsive-img" alt="аватар пользователя"
                                                width="32px" height="32px">
                                        </div>
                                        <div class="feedback-card__author-name">
                                        </div>
                                    </div>
                                    <div class="col s3 feedback-card__rating">
                                        <i class="icon icon--image">
                                            <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/star.svg"
                                                class="responsive-img" alt="Рейтинг отзова" width="18px" height="17px">
                                        </i>
                                        <span class="feedback-card__rating-text">
                                            4 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-card__body">
                                <a class="link"
                                    href="https://placesmagazine.ru/event/romanticheskoe-svidanie-na-67-m-etazhe-moskva-siti-ot-proekta-romantic-room/">
                                    <h3 class="feedback-card__title">
                                        Свидание на 67-м этаже «Москва-Сити» </h3>
                                </a>
                                <p class="feedback-card__text">
                                    First </p>
                            </div>
                            <div class="feedback-card__footer">
                                <div class="row">
                                    <div class="col s5 feedback-card__photos">
                                        <i class="icon icon--image">
                                            <img src="https://placesmagazine.ru/wp-content/themes/placesmagazine/images/images-line.svg"
                                                class="responsive-img" alt="Количество фотографий в отзове" width="22px"
                                                height="22px">
                                        </i>
                                        <span class="feedback-card__photos-text">
                                            +1 фото
                                        </span>
                                    </div>
                                    <div class="col s7 feedback-card__more">
                                        <a class="feedback-card__link"
                                            href="https://placesmagazine.ru/event/romanticheskoe-svidanie-na-67-m-etazhe-moskva-siti-ot-proekta-romantic-room/#comments">
                                            Еще отзывы <i class="icon icon--svg">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.3536 8.35355C15.5488 8.15829 15.5488 7.84171 15.3536 7.64645L12.1716 4.46447C11.9763 4.2692 11.6597 4.2692 11.4645 4.46447C11.2692 4.65973 11.2692 4.97631 11.4645 5.17157L14.2929 8L11.4645 10.8284C11.2692 11.0237 11.2692 11.3403 11.4645 11.5355C11.6597 11.7308 11.9763 11.7308 12.1716 11.5355L15.3536 8.35355ZM4.37114e-08 8.5L15 8.5L15 7.5L-4.37114e-08 7.5L4.37114e-08 8.5Z"
                                                        fill="#3E759C" />
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section--event-send event-send">
                <div class="container--big">
                    <div class="row">
                        <div class="col m6 hide-on-small-only event-send__image">
                            <picture>
                                <source
                                    srcset="https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/06/8273395-31.jpg.webp 536w, https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/06/8273395-31-300x181.jpg.webp 300w, https://placesmagazine.ru/wp-content/webp-express/webp-images/uploads/2023/06/8273395-31-254x153.jpg.webp 254w"
                                    sizes="(max-width: 536px) 100vw, 536px" type="image/webp"><img width="536"
                                    height="324"
                                    src="https://placesmagazine.ru/wp-content/uploads/2023/06/8273395-31.jpg"
                                    class="responsive-img webpexpress-processed" alt="" decoding="async" loading="lazy"
                                    srcset="https://placesmagazine.ru/wp-content/uploads/2023/06/8273395-31.jpg 536w, https://placesmagazine.ru/wp-content/uploads/2023/06/8273395-31-300x181.jpg 300w, https://placesmagazine.ru/wp-content/uploads/2023/06/8273395-31-254x153.jpg 254w"
                                    sizes="(max-width: 536px) 100vw, 536px"></picture>
                        </div>
                        <div class="col s12 m6 event-send__content">
                            <h4 class="title event-send__title">
                                Хочешь поговорить об этом, но молчишь? </h4>
                            <p class="event-send__text">
                                Придумай невероятное событие или расскажи о своем опыте, закрой гештальт и получи
                                бонусы! </p>
                            <div class="event-send__actions">
                                <a class="waves-effect waves-light btn" href="#">
                                    Рассказать о событии </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer id="footer" class="site-footer">
            <div class="container--big">
                <div class="row site-footer__row">
                    <div class="col s12 site-footer__column site-footer__logo site-footer__row--naming">
                        <a class="site-footer__logo-link" href="https://placesmagazine.ru">
                            <img width="150" height="12"
                                src="https://placesmagazine.ru/wp-content/uploads/2023/06/logo_white.svg"
                                class="attachment-thumbnail size-thumbnail" alt="PlacesMagazine logo" decoding="async"
                                loading="lazy" /> </a>
                    </div>
                </div>
                <div class="container--fluid">
                    <div class="row site-footer__row site-footer__row--menus">
                        <div class="col s12 m3 site-footer__column site-footer__menu hide-on-small-only">
                            <h5 class="footer__title">События</h5>
                            <nav class="site-menu">
                                <ul id="footer-menu" class="menu menu--primary" itemscope=""
                                    itemtype="http://schema.org/SiteNavigationElement">
                                    <li id="menu-item-25"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-tribe_events_cat menu-item-25">
                                        <a
                                            href="https://placesmagazine.ru/events/%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d1%8f/master-classes/"><span
                                                class="menu-item__wrapper" itemprop="name"
                                                role="presentation">Мастер-классы</span></a></li>
                                    <li id="menu-item-26"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-tribe_events_cat menu-item-26">
                                        <a
                                            href="https://placesmagazine.ru/events/%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d1%8f/restaurants-and-tastings/"><span
                                                class="menu-item__wrapper" itemprop="name" role="presentation">Рестораны
                                                и дегустации</span></a></li>
                                    <li id="menu-item-27"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-tribe_events_cat menu-item-27">
                                        <a
                                            href="https://placesmagazine.ru/events/%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d1%8f/cultural-leisure/"><span
                                                class="menu-item__wrapper" itemprop="name"
                                                role="presentation">Культурный досуг</span></a></li>
                                    <li id="menu-item-28"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-tribe_events_cat menu-item-28">
                                        <a
                                            href="https://placesmagazine.ru/events/%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d1%8f/country-holidays-and-travel/"><span
                                                class="menu-item__wrapper" itemprop="name"
                                                role="presentation">Загородный отдых и путешествия</span></a></li>
                                    <li id="menu-item-29"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-tribe_events_cat menu-item-29">
                                        <a
                                            href="https://placesmagazine.ru/events/%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d1%8f/relaxation-spa-and-beauty/"><span
                                                class="menu-item__wrapper" itemprop="name" role="presentation">Релакс,
                                                SPA и красота</span></a></li>
                                    <li id="menu-item-30"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-tribe_events_cat menu-item-30">
                                        <a
                                            href="https://placesmagazine.ru/events/%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d1%8f/dancing-bars-and-parties/"><span
                                                class="menu-item__wrapper" itemprop="name" role="presentation">Танцы,
                                                бары и вечеринки</span></a></li>
                                    <li id="menu-item-31"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-tribe_events_cat menu-item-31">
                                        <a
                                            href="https://placesmagazine.ru/events/%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d1%8f/walks-games-and-outdoor-activities/"><span
                                                class="menu-item__wrapper" itemprop="name" role="presentation">Прогулки,
                                                игры и активный отдых</span></a></li>
                                    <li id="menu-item-32"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-tribe_events_cat menu-item-32">
                                        <a
                                            href="https://placesmagazine.ru/events/%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d1%8f/theme-clubs-conferences-and-trainings/"><span
                                                class="menu-item__wrapper" itemprop="name"
                                                role="presentation">Тематические клубы, конференции и
                                                тренинги</span></a></li>
                                    <li id="menu-item-33"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-tribe_events_cat menu-item-33">
                                        <a
                                            href="https://placesmagazine.ru/events/%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d1%8f/editors-choice/"><span
                                                class="menu-item__wrapper" itemprop="name" role="presentation">Выбор
                                                редакции</span></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col s6 m3 site-footer__column site-footer__menu">
                            <h5 class="footer__title">placesmagazine</h5>
                            <nav class="site-menu">
                                <ul id="footer-menu-2" class="menu menu--primary" itemscope=""
                                    itemtype="http://schema.org/SiteNavigationElement">
                                    <li id="menu-item-54"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a
                                            href="https://placesmagazine.ru/sobytiya/"><span class="menu-item__wrapper"
                                                itemprop="name" role="presentation">События</span></a></li>
                                    <li id="menu-item-53"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a
                                            href="https://placesmagazine.ru/journal/"><span class="menu-item__wrapper"
                                                itemprop="name" role="presentation">Журнал «Места»</span></a></li>
                                    <li id="menu-item-52"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52"><a
                                            href="https://placesmagazine.ru/vacancy/"><span class="menu-item__wrapper"
                                                itemprop="name" role="presentation">Вакансии</span></a></li>
                                    <li id="menu-item-51"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a
                                            href="https://placesmagazine.ru/contacs/"><span class="menu-item__wrapper"
                                                itemprop="name" role="presentation">Контакты редакции</span></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col s6 m3 site-footer__column site-footer__menu">
                            <h5 class="footer__title">Организаторам</h5>
                            <nav class="site-menu">
                                <ul id="footer-menu-3" class="menu menu--primary" itemscope=""
                                    itemtype="http://schema.org/SiteNavigationElement">
                                    <li id="menu-item-55"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-55"><a
                                            href="#"><span class="menu-item__wrapper" itemprop="name"
                                                role="presentation">Создать событие</span></a></li>
                                    <li id="menu-item-56"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a
                                            href="https://placesmagazine.ru/tips-and-help/"><span
                                                class="menu-item__wrapper" itemprop="name" role="presentation">Советы и
                                                инструкции</span></a></li>
                                    <li id="menu-item-57"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57"><a
                                            href="https://placesmagazine.ru/partners/"><span class="menu-item__wrapper"
                                                itemprop="name" role="presentation">Сотрудничество</span></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col s12 m3 site-footer__column">
                            <h5 class="footer__title">Подпишитесь на рассылку</h5>
                            <form class="subscribe">
                                <p class="subscribe__text">
                                    Будь первым в курсе всех новостей
                                </p>
                                <input type="email" class="browser-default subscribe__email" name="email"
                                    placeholder="Ваш email" required>
                                <button type="submit" class="waves-effect waves-light btn subscribe__btn">
                                    Подписаться
                                </button>
                            </form>
                            <div class="copyright">
                                <p class="copyright__text">
                                    © 2023 ООО «ПлэйсМагазин». Все права защищены
                                </p>
                                <p class="copyright__text">
                                    Продолжая работу с нашим сайтом, вы подтверждаете согласие с правилами его
                                    пользования
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="sign" class="modal">
        <div class="modal-content">
            <h4>Зарегистрироваться</h4>
            <div class="registration">
                <div class="um um-register um-327">
                    <div class="um-form" data-mode="register">
                        <form method="post" action="">
                            <div class="um-row _um_row_1 " style="margin: 0 0 30px 0;">
                                <div class="um-col-121">
                                    <div id="um_field_327_first_name"
                                        class="um-field um-field-text  um-field-first_name um-field-text um-field-type_text"
                                        data-key="first_name">
                                        <div class="um-field-label"><label for="first_name-327">Имя</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area"><input autocomplete="off"
                                                class="um-form-field valid " type="text" name="first_name-327"
                                                id="first_name-327" value="" placeholder="" data-validate=""
                                                data-key="first_name" />
                                        </div>
                                    </div>
                                    <div id="um_field_327_user_email"
                                        class="um-field um-field-text  um-field-user_email um-field-text um-field-type_text"
                                        data-key="user_email">
                                        <div class="um-field-label"><label for="user_email-327">E-mail</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area"><input autocomplete="off"
                                                class="um-form-field valid " type="text" name="user_email-327"
                                                id="user_email-327" value="" placeholder="" data-validate="unique_email"
                                                data-key="user_email" />
                                        </div>
                                    </div>
                                    <div id="um_field_327_user_password"
                                        class="um-field um-field-password  um-field-user_password um-field-password um-field-type_password"
                                        data-key="user_password">
                                        <div class="um-field-label"><label for="user_password-327">Пароль</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area"><input class="um-form-field valid " type="password"
                                                name="user_password-327" id="user_password-327" value="" placeholder=""
                                                data-validate="" data-key="user_password" />
                                        </div>
                                    </div>
                                    <div id="um_field_327_confirm_user_password"
                                        class="um-field um-field-password  um-field-user_password um-field-password um-field-type_password"
                                        data-key="confirm_user_password">
                                        <div class="um-field-label"><label for="confirm_user_password-327">Подтвердить
                                                Пароль</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area"><input class="um-form-field valid " type="password"
                                                name="confirm_user_password-327" id="confirm_user_password-327" value=""
                                                placeholder="Подтвердить Пароль" data-validate=""
                                                data-key="confirm_user_password" /></div>
                                    </div>
                                </div>
                                <div class="um-col-122">
                                    <div id="um_field_327_last_name"
                                        class="um-field um-field-text  um-field-last_name um-field-text um-field-type_text"
                                        data-key="last_name">
                                        <div class="um-field-label"><label for="last_name-327">Фамилия</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area"><input autocomplete="off"
                                                class="um-form-field valid " type="text" name="last_name-327"
                                                id="last_name-327" value="" placeholder="" data-validate=""
                                                data-key="last_name" />
                                        </div>
                                    </div>
                                    <div id="um_field_327_phone"
                                        class="um-field um-field-tel  um-field-phone um-field-tel um-field-type_tel"
                                        data-key="phone">
                                        <div class="um-field-label"><label for="phone-327">Телефон</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area"><input autocomplete="off"
                                                class="um-form-field valid " type="tel" name="phone-327" id="phone-327"
                                                value="" placeholder="" data-validate="" data-key="phone" />
                                        </div>
                                    </div>
                                </div>
                                <div class="um-clear"></div>
                            </div> <input type="hidden" name="form_id" id="form_id_327" value="327" />
                            <p class="um_request_name">
                                <label for="um_request_327">Only fill in if you are not human</label>
                                <input type="hidden" name="um_request" id="um_request_327" class="input" value=""
                                    size="25" autocomplete="off" />
                            </p>
                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="72113a7916" /><input type="hidden"
                                name="_wp_http_referer" value="/" />
                            <div class="um-col-alt">
                                <div class="um-left um-half">
                                    <input type="submit" value="Зарегистрироваться" class="um-button"
                                        id="um-submit-btn" />
                                </div>
                                <div class="um-right um-half">
                                    <a href="https://placesmagazine.ru/my-account/login/" class="um-button um-alt">
                                        Войти </a>
                                </div>
                                <div class="um-clear"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <style>
                    .um-327.um {
                        max-width: 450px;
                    }
                </style>
            </div>
            <h4>Вход</h4>
            <div class="login">
                <div class="um um-login um-328">
                    <div class="um-form">
                        <form method="post" action="" autocomplete="off">
                            <div class="um-row _um_row_1 " style="margin: 0 0 30px 0;">
                                <div class="um-col-1">
                                    <div id="um_field_328_username"
                                        class="um-field um-field-text  um-field-username um-field-text um-field-type_text"
                                        data-key="username">
                                        <div class="um-field-label"><label for="username-328">Имя пользователя или
                                                E-mail</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area"><input autocomplete="off"
                                                class="um-form-field valid " type="text" name="username-328"
                                                id="username-328" value="" placeholder=""
                                                data-validate="unique_username_or_email" data-key="username" />
                                        </div>
                                    </div>
                                    <div id="um_field_328_user_password"
                                        class="um-field um-field-password  um-field-user_password um-field-password um-field-type_password"
                                        data-key="user_password">
                                        <div class="um-field-label"><label for="user_password-328">Пароль</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area"><input class="um-form-field valid " type="password"
                                                name="user_password-328" id="user_password-328" value="" placeholder=""
                                                data-validate="" data-key="user_password" />
                                        </div>
                                    </div>
                                </div>
                            </div> <input type="hidden" name="form_id" id="form_id_328" value="328" />
                            <p class="um_request_name">
                                <label for="um_request_328">Only fill in if you are not human</label>
                                <input type="hidden" name="um_request" id="um_request_328" class="input" value=""
                                    size="25" autocomplete="off" />
                            </p>
                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="11eb15679e" /><input type="hidden"
                                name="_wp_http_referer" value="/" />
                            <div class="um-col-alt">
                                <div class="um-field um-field-c">
                                    <div class="um-field-area">
                                        <label class="um-field-checkbox">
                                            <input type="checkbox" name="rememberme" value="1" />
                                            <span class="um-field-checkbox-state"><i
                                                    class="um-icon-android-checkbox-outline-blank"></i></span>
                                            <span class="um-field-checkbox-option"> Запомнить меня</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="um-clear"></div>
                                <div class="um-left um-half">
                                    <input type="submit" value="Войти" class="um-button" id="um-submit-btn" />
                                </div>
                                <div class="um-right um-half">
                                    <a href="https://placesmagazine.ru/my-account/registration/"
                                        class="um-button um-alt">
                                        Зарегистрироваться </a>
                                </div>
                                <div class="um-clear"></div>
                            </div>
                            <div class="um-col-alt-b">
                                <a href="https://placesmagazine.ru/my-account/reset-password/" class="um-link-alt">
                                    Забыли пароль? </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-red btn-flat">Закрыть</a>
        </div>
    </div>
    <span class="waves-effect waves-light btn-floating btn-large btn-up">
        <i class="icon icon--svg">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1430_5215)">
                    <path
                        d="M11.7071 1.29289C11.3166 0.902369 10.6834 0.902369 10.2929 1.29289L3.92893 7.65685C3.53841 8.04738 3.53841 8.68054 3.92893 9.07107C4.31946 9.46159 4.95262 9.46159 5.34315 9.07107L11 3.41421L16.6569 9.07107C17.0474 9.46159 17.6805 9.46159 18.0711 9.07107C18.4616 8.68054 18.4616 8.04738 18.0711 7.65685L11.7071 1.29289ZM12 22L12 2L10 2L10 22L12 22Z"
                        fill="#121212" />
                </g>
                <defs>
                    <clipPath id="clip0_1430_5215">
                        <rect width="22" height="22" fill="white" transform="translate(0 22) rotate(-90)" />
                    </clipPath>
                </defs>
            </svg>
        </i>
    </span>
    <div class="fixed-action-btn btn-toolbar toolbar">
        <span class="tooltipped waves-effect waves-light btn-floating btn-large" data-tooltip="Предложите идею события"
            data-position="left">
            <i class="icon icon--svg"><svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.486 11.9307H14.0693V5.51402C14.0693 5.23039 13.9567 4.95837 13.7561 4.75781C13.5555 4.55725 13.2835 4.44458 12.9999 4.44458C12.7163 4.44458 12.4442 4.55725 12.2437 4.75781C12.0431 4.95837 11.9304 5.23039 11.9304 5.51402V11.9307H5.51378C5.23015 11.9307 4.95813 12.0434 4.75757 12.2439C4.55701 12.4445 4.44434 12.7165 4.44434 13.0001C4.44434 13.2838 4.55701 13.5558 4.75757 13.7563C4.95813 13.9569 5.23015 14.0696 5.51378 14.0696H11.9304V20.4862C11.9304 20.7699 12.0431 21.0419 12.2437 21.2425C12.4442 21.443 12.7163 21.5557 12.9999 21.5557C13.2835 21.5557 13.5555 21.443 13.7561 21.2425C13.9567 21.0419 14.0693 20.7699 14.0693 20.4862V14.0696H20.486C20.7696 14.0696 21.0417 13.9569 21.2422 13.7563C21.4428 13.5558 21.5554 13.2838 21.5554 13.0001C21.5554 12.7165 21.4428 12.4445 21.2422 12.2439C21.0417 12.0434 20.7696 11.9307 20.486 11.9307Z"
                        fill="white" /></svg></i>
        </span>
        <ul>
            <li><span href="#!" class="red"><i class="icon icon--svg"><svg width="26" height="26" viewBox="0 0 26 26"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.486 11.9307H14.0693V5.51402C14.0693 5.23039 13.9567 4.95837 13.7561 4.75781C13.5555 4.55725 13.2835 4.44458 12.9999 4.44458C12.7163 4.44458 12.4442 4.55725 12.2437 4.75781C12.0431 4.95837 11.9304 5.23039 11.9304 5.51402V11.9307H5.51378C5.23015 11.9307 4.95813 12.0434 4.75757 12.2439C4.55701 12.4445 4.44434 12.7165 4.44434 13.0001C4.44434 13.2838 4.55701 13.5558 4.75757 13.7563C4.95813 13.9569 5.23015 14.0696 5.51378 14.0696H11.9304V20.4862C11.9304 20.7699 12.0431 21.0419 12.2437 21.2425C12.4442 21.443 12.7163 21.5557 12.9999 21.5557C13.2835 21.5557 13.5555 21.443 13.7561 21.2425C13.9567 21.0419 14.0693 20.7699 14.0693 20.4862V14.0696H20.486C20.7696 14.0696 21.0417 13.9569 21.2422 13.7563C21.4428 13.5558 21.5554 13.2838 21.5554 13.0001C21.5554 12.7165 21.4428 12.4445 21.2422 12.2439C21.0417 12.0434 20.7696 11.9307 20.486 11.9307Z"
                                fill="white" /></svg></i></span></li>
            <li><span href="#!" class="yellow darken-1"><i class="icon icon--svg"><svg width="26" height="26"
                            viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.486 11.9307H14.0693V5.51402C14.0693 5.23039 13.9567 4.95837 13.7561 4.75781C13.5555 4.55725 13.2835 4.44458 12.9999 4.44458C12.7163 4.44458 12.4442 4.55725 12.2437 4.75781C12.0431 4.95837 11.9304 5.23039 11.9304 5.51402V11.9307H5.51378C5.23015 11.9307 4.95813 12.0434 4.75757 12.2439C4.55701 12.4445 4.44434 12.7165 4.44434 13.0001C4.44434 13.2838 4.55701 13.5558 4.75757 13.7563C4.95813 13.9569 5.23015 14.0696 5.51378 14.0696H11.9304V20.4862C11.9304 20.7699 12.0431 21.0419 12.2437 21.2425C12.4442 21.443 12.7163 21.5557 12.9999 21.5557C13.2835 21.5557 13.5555 21.443 13.7561 21.2425C13.9567 21.0419 14.0693 20.7699 14.0693 20.4862V14.0696H20.486C20.7696 14.0696 21.0417 13.9569 21.2422 13.7563C21.4428 13.5558 21.5554 13.2838 21.5554 13.0001C21.5554 12.7165 21.4428 12.4445 21.2422 12.2439C21.0417 12.0434 20.7696 11.9307 20.486 11.9307Z"
                                fill="white" /></svg></i></span></li>
            <li><span href="#!" class="green"><i class="icon icon--svg"><svg width="26" height="26" viewBox="0 0 26 26"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.486 11.9307H14.0693V5.51402C14.0693 5.23039 13.9567 4.95837 13.7561 4.75781C13.5555 4.55725 13.2835 4.44458 12.9999 4.44458C12.7163 4.44458 12.4442 4.55725 12.2437 4.75781C12.0431 4.95837 11.9304 5.23039 11.9304 5.51402V11.9307H5.51378C5.23015 11.9307 4.95813 12.0434 4.75757 12.2439C4.55701 12.4445 4.44434 12.7165 4.44434 13.0001C4.44434 13.2838 4.55701 13.5558 4.75757 13.7563C4.95813 13.9569 5.23015 14.0696 5.51378 14.0696H11.9304V20.4862C11.9304 20.7699 12.0431 21.0419 12.2437 21.2425C12.4442 21.443 12.7163 21.5557 12.9999 21.5557C13.2835 21.5557 13.5555 21.443 13.7561 21.2425C13.9567 21.0419 14.0693 20.7699 14.0693 20.4862V14.0696H20.486C20.7696 14.0696 21.0417 13.9569 21.2422 13.7563C21.4428 13.5558 21.5554 13.2838 21.5554 13.0001C21.5554 12.7165 21.4428 12.4445 21.2422 12.2439C21.0417 12.0434 20.7696 11.9307 20.486 11.9307Z"
                                fill="white" /></svg></i></span></li>
            <li><span href="#!" class="blue"><i class="icon icon--svg"><svg width="26" height="26" viewBox="0 0 26 26"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.486 11.9307H14.0693V5.51402C14.0693 5.23039 13.9567 4.95837 13.7561 4.75781C13.5555 4.55725 13.2835 4.44458 12.9999 4.44458C12.7163 4.44458 12.4442 4.55725 12.2437 4.75781C12.0431 4.95837 11.9304 5.23039 11.9304 5.51402V11.9307H5.51378C5.23015 11.9307 4.95813 12.0434 4.75757 12.2439C4.55701 12.4445 4.44434 12.7165 4.44434 13.0001C4.44434 13.2838 4.55701 13.5558 4.75757 13.7563C4.95813 13.9569 5.23015 14.0696 5.51378 14.0696H11.9304V20.4862C11.9304 20.7699 12.0431 21.0419 12.2437 21.2425C12.4442 21.443 12.7163 21.5557 12.9999 21.5557C13.2835 21.5557 13.5555 21.443 13.7561 21.2425C13.9567 21.0419 14.0693 20.7699 14.0693 20.4862V14.0696H20.486C20.7696 14.0696 21.0417 13.9569 21.2422 13.7563C21.4428 13.5558 21.5554 13.2838 21.5554 13.0001C21.5554 12.7165 21.4428 12.4445 21.2422 12.2439C21.0417 12.0434 20.7696 11.9307 20.486 11.9307Z"
                                fill="white" /></svg></i></span></li>
        </ul>
    </div>
    <div id="um_upload_single" style="display:none"></div>
    <div id="um_view_photo" style="display:none">
        <a href="javascript:void(0);" data-action="um_remove_modal" class="um-modal-close"
            aria-label="Закрыть окно просмотра фото">
            <i class="um-faicon-times"></i>
        </a>
        <div class="um-modal-body photo">
            <div class="um-modal-photo"></div>
        </div>
    </div>
@endsection