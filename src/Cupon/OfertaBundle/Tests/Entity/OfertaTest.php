




<!DOCTYPE html>
<html class="   ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>Cupon/src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php at 2.4 · javiereguiluz/Cupon · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="javiereguiluz/Cupon" name="twitter:title" /><meta content="Cupon - Aplicación de prueba para aprender a programar con Symfony2" name="twitter:description" /><meta content="https://avatars3.githubusercontent.com/u/73419?s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars3.githubusercontent.com/u/73419?s=400" property="og:image" /><meta content="javiereguiluz/Cupon" property="og:title" /><meta content="https://github.com/javiereguiluz/Cupon" property="og:url" /><meta content="Cupon - Aplicación de prueba para aprender a programar con Symfony2" property="og:description" />

    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035">
    

    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="C1992E3B:287F:7A73D2B:539722A0" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico" />


    <meta content="authenticity_token" name="csrf-param" />
<meta content="Qn3612YUGmqFZw1xSGrT5AUbxKdj+cu01zj7F1cPZxmFoEFPX3VDjLrL1uFQblBdwjRb1BKgRy0P1IjrPA3L/w==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-1aeb426322c64c12b92d56bda5b110fc1093f75e.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://assets-cdn.github.com/assets/github2-b2cccfcac1a522b6ce675606f61388d36bf2c080.css" media="all" rel="stylesheet" type="text/css" />
    


    <meta http-equiv="x-pjax-version" content="1f805528dc446a23f667521e798614e4">

      
  <meta name="description" content="Cupon - Aplicación de prueba para aprender a programar con Symfony2" />

  <meta content="73419" name="octolytics-dimension-user_id" /><meta content="javiereguiluz" name="octolytics-dimension-user_login" /><meta content="2503263" name="octolytics-dimension-repository_id" /><meta content="javiereguiluz/Cupon" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="2503263" name="octolytics-dimension-repository_network_root_id" /><meta content="javiereguiluz/Cupon" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/javiereguiluz/Cupon/commits/2.4.atom" rel="alternate" title="Recent Commits to Cupon:2.4" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production linux vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/join">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Fjaviereguiluz%2FCupon%2Fblob%2F2.4%2Fsrc%2FCupon%2FOfertaBundle%2FTests%2FEntity%2FOfertaTest.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<div class="commandbar">
  <span class="message"></span>
  <input type="text" data-hotkey="s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="javiereguiluz/Cupon"
      data-branch="2.4"
      data-sha="e7239b4ddf631125bcb66d1e492816cee0711c6d"
  >
  <div class="display hidden"></div>
</div>

    <input type="hidden" name="nwo" value="javiereguiluz/Cupon" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
    <a href="/login?return_to=%2Fjaviereguiluz%2FCupon"
    class="minibutton with-count star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>Star
  </a>

    <a class="social-count js-social-count" href="/javiereguiluz/Cupon/stargazers">
      253
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fjaviereguiluz%2FCupon"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked"></span>Fork
      </a>
      <a href="/javiereguiluz/Cupon/network" class="social-count">
        132
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/javiereguiluz" class="url fn" itemprop="url" rel="author"><span itemprop="title">javiereguiluz</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/javiereguiluz/Cupon" class="js-current-repository js-repo-home-link">Cupon</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/javiereguiluz/Cupon" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /javiereguiluz/Cupon">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/javiereguiluz/Cupon/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g i" data-selected-links="repo_issues /javiereguiluz/Cupon/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>19</span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/javiereguiluz/Cupon/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g p" data-selected-links="repo_pulls /javiereguiluz/Cupon/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>1</span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/javiereguiluz/Cupon/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /javiereguiluz/Cupon/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/javiereguiluz/Cupon/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /javiereguiluz/Cupon/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/javiereguiluz/Cupon/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /javiereguiluz/Cupon/network">
          <span class="octicon octicon-repo-forked"></span> <span class="full-word">Network</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/javiereguiluz/Cupon.git" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/javiereguiluz/Cupon.git" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/javiereguiluz/Cupon" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/javiereguiluz/Cupon" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>



                <a href="/javiereguiluz/Cupon/archive/2.4.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download javiereguiluz/Cupon as a zip file"
                   title="Download javiereguiluz/Cupon as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<a href="/javiereguiluz/Cupon/blob/79ed44a77ddea8e12e1fb3d0d73dc1181e36125d/src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:568af8adfc852deb7a7f69b81fa16a14 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/javiereguiluz/Cupon/find/2.4" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="2.4"
    data-ref="2.4"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">2.4</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/javiereguiluz/Cupon/blob/2.0/src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php"
                 data-name="2.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="2.0">2.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/javiereguiluz/Cupon/blob/2.1/src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php"
                 data-name="2.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="2.1">2.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/javiereguiluz/Cupon/blob/2.2/src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php"
                 data-name="2.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="2.2">2.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/javiereguiluz/Cupon/blob/2.3/src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php"
                 data-name="2.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="2.3">2.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/javiereguiluz/Cupon/blob/2.4/src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php"
                 data-name="2.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="2.4">2.4</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/javiereguiluz/Cupon/blob/master/src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/javiereguiluz/Cupon" data-branch="2.4" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">Cupon</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/javiereguiluz/Cupon/tree/2.4/src" data-branch="2.4" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">src</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/javiereguiluz/Cupon/tree/2.4/src/Cupon" data-branch="2.4" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">Cupon</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/javiereguiluz/Cupon/tree/2.4/src/Cupon/OfertaBundle" data-branch="2.4" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">OfertaBundle</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/javiereguiluz/Cupon/tree/2.4/src/Cupon/OfertaBundle/Tests" data-branch="2.4" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">Tests</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/javiereguiluz/Cupon/tree/2.4/src/Cupon/OfertaBundle/Tests/Entity" data-branch="2.4" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">Entity</span></a></span><span class="separator"> / </span><strong class="final-path">OfertaTest.php</strong> <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
  </div>
</div>


  <div class="commit commit-loader file-history-tease js-deferred-content" data-url="/javiereguiluz/Cupon/contributors/2.4/src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php">
    Fetching contributors…

    <div class="participation">
      <p class="loader-loading"><img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32-EAF2F5.gif" width="16" /></p>
      <p class="loader-error">Cannot retrieve contributors at this time</p>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>172 lines (134 sloc)</span>
          <span class="meta-divider"></span>
        <span>6.235 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
              <a class="minibutton disabled tooltipped tooltipped-w" href="#"
                 aria-label="You must be signed in to make or propose changes">Edit</a>
          <a href="/javiereguiluz/Cupon/raw/2.4/src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/javiereguiluz/Cupon/blame/2.4/src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/javiereguiluz/Cupon/commits/2.4/src/Cupon/OfertaBundle/Tests/Entity/OfertaTest.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger disabled empty-icon tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          Delete
        </a>
      </div><!-- /.actions -->
    </div>
      
  <div class="blob-wrapper data type-php js-blob-data">
       <table class="file-code file-diff tab-size-8">
         <tr class="file-code-line">
           <td class="blob-line-nums">
             <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>

           </td>
           <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><br/></div><div class='line' id='LC3'><span class="cm">/*</span></div><div class='line' id='LC4'><span class="cm"> * (c) Javier Eguiluz &lt;javier.eguiluz@gmail.com&gt;</span></div><div class='line' id='LC5'><span class="cm"> *</span></div><div class='line' id='LC6'><span class="cm"> * Este archivo pertenece a la aplicación de prueba Cupon.</span></div><div class='line' id='LC7'><span class="cm"> * El código fuente de la aplicación incluye un archivo llamado LICENSE</span></div><div class='line' id='LC8'><span class="cm"> * con toda la información sobre el copyright y la licencia.</span></div><div class='line' id='LC9'><span class="cm"> */</span></div><div class='line' id='LC10'><br/></div><div class='line' id='LC11'><span class="k">namespace</span> <span class="nx">Cupon\OfertaBundle\Tests</span><span class="p">;</span></div><div class='line' id='LC12'><br/></div><div class='line' id='LC13'><span class="k">use</span> <span class="nx">Symfony\Component\Validator\Validation</span><span class="p">;</span></div><div class='line' id='LC14'><span class="k">use</span> <span class="nx">Cupon\OfertaBundle\Entity\Oferta</span><span class="p">;</span></div><div class='line' id='LC15'><span class="k">use</span> <span class="nx">Cupon\CiudadBundle\Entity\Ciudad</span><span class="p">;</span></div><div class='line' id='LC16'><span class="k">use</span> <span class="nx">Cupon\TiendaBundle\Entity\Tienda</span><span class="p">;</span></div><div class='line' id='LC17'><br/></div><div class='line' id='LC18'><span class="sd">/**</span></div><div class='line' id='LC19'><span class="sd"> * Test unitario para asegurar que la validación de la entidad Oferta</span></div><div class='line' id='LC20'><span class="sd"> * funciona correctamente</span></div><div class='line' id='LC21'><span class="sd"> */</span></div><div class='line' id='LC22'><span class="k">class</span> <span class="nc">OfertaTest</span> <span class="k">extends</span> <span class="nx">\PHPUnit_Framework_TestCase</span></div><div class='line' id='LC23'><span class="p">{</span></div><div class='line' id='LC24'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$validator</span><span class="p">;</span></div><div class='line' id='LC25'><br/></div><div class='line' id='LC26'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">setUp</span><span class="p">()</span></div><div class='line' id='LC27'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC28'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">validator</span> <span class="o">=</span> <span class="nx">Validation</span><span class="o">::</span><span class="na">createValidatorBuilder</span><span class="p">()</span></div><div class='line' id='LC29'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">enableAnnotationMapping</span><span class="p">()</span></div><div class='line' id='LC30'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">getValidator</span><span class="p">();</span></div><div class='line' id='LC31'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC32'><br/></div><div class='line' id='LC33'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">testValidarSlug</span><span class="p">()</span></div><div class='line' id='LC34'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC35'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Oferta</span><span class="p">();</span></div><div class='line' id='LC36'><br/></div><div class='line' id='LC37'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setNombre</span><span class="p">(</span><span class="s1">&#39;Oferta de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC38'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$slug</span> <span class="o">=</span> <span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">getSlug</span><span class="p">();</span></div><div class='line' id='LC39'><br/></div><div class='line' id='LC40'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span><span class="s1">&#39;oferta-de-prueba&#39;</span><span class="p">,</span> <span class="nv">$slug</span><span class="p">,</span> <span class="s1">&#39;El slug se asigna automáticamente a partir del nombre&#39;</span><span class="p">);</span></div><div class='line' id='LC41'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC42'><br/></div><div class='line' id='LC43'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">testValidarDescripcion</span><span class="p">()</span></div><div class='line' id='LC44'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC45'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Oferta</span><span class="p">();</span></div><div class='line' id='LC46'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setNombre</span><span class="p">(</span><span class="s1">&#39;Oferta de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC47'><br/></div><div class='line' id='LC48'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$listaErrores</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">validator</span><span class="o">-&gt;</span><span class="na">validate</span><span class="p">(</span><span class="nv">$oferta</span><span class="p">);</span></div><div class='line' id='LC49'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertGreaterThan</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="nv">$listaErrores</span><span class="o">-&gt;</span><span class="na">count</span><span class="p">(),</span> <span class="s1">&#39;La descripción no puede dejarse en blanco&#39;</span><span class="p">);</span></div><div class='line' id='LC50'><br/></div><div class='line' id='LC51'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span> <span class="o">=</span> <span class="nv">$listaErrores</span><span class="p">[</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC52'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span><span class="s1">&#39;This value should not be blank.&#39;</span><span class="p">,</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">());</span></div><div class='line' id='LC53'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span><span class="s1">&#39;descripcion&#39;</span><span class="p">,</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">getPropertyPath</span><span class="p">());</span></div><div class='line' id='LC54'><br/></div><div class='line' id='LC55'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setDescripcion</span><span class="p">(</span><span class="s1">&#39;Descripción de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC56'><br/></div><div class='line' id='LC57'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$listaErrores</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">validator</span><span class="o">-&gt;</span><span class="na">validate</span><span class="p">(</span><span class="nv">$oferta</span><span class="p">);</span></div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertGreaterThan</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="nv">$listaErrores</span><span class="o">-&gt;</span><span class="na">count</span><span class="p">(),</span> <span class="s1">&#39;La descripción debe tener al menos 30 caracteres&#39;</span><span class="p">);</span></div><div class='line' id='LC59'><br/></div><div class='line' id='LC60'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span> <span class="o">=</span> <span class="nv">$listaErrores</span><span class="p">[</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC61'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertRegExp</span><span class="p">(</span><span class="s2">&quot;/This value is too short/&quot;</span><span class="p">,</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">());</span></div><div class='line' id='LC62'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span><span class="s1">&#39;descripcion&#39;</span><span class="p">,</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">getPropertyPath</span><span class="p">());</span></div><div class='line' id='LC63'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC64'><br/></div><div class='line' id='LC65'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">testValidarFechas</span><span class="p">()</span></div><div class='line' id='LC66'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC67'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Oferta</span><span class="p">();</span></div><div class='line' id='LC68'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setNombre</span><span class="p">(</span><span class="s1">&#39;Oferta de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC69'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setDescripcion</span><span class="p">(</span><span class="s1">&#39;Descripción de prueba - Descripción de prueba - Descripción de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC70'><br/></div><div class='line' id='LC71'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setFechaPublicacion</span><span class="p">(</span><span class="k">new</span> <span class="nx">\DateTime</span><span class="p">(</span><span class="s1">&#39;today&#39;</span><span class="p">));</span></div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setFechaExpiracion</span><span class="p">(</span><span class="k">new</span> <span class="nx">\DateTime</span><span class="p">(</span><span class="s1">&#39;yesterday&#39;</span><span class="p">));</span></div><div class='line' id='LC73'><br/></div><div class='line' id='LC74'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$listaErrores</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">validator</span><span class="o">-&gt;</span><span class="na">validate</span><span class="p">(</span><span class="nv">$oferta</span><span class="p">);</span></div><div class='line' id='LC75'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertGreaterThan</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="nv">$listaErrores</span><span class="o">-&gt;</span><span class="na">count</span><span class="p">(),</span> <span class="s1">&#39;La fecha de expiración debe ser posterior a la fecha de publicación&#39;</span><span class="p">);</span></div><div class='line' id='LC76'><br/></div><div class='line' id='LC77'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span> <span class="o">=</span> <span class="nv">$listaErrores</span><span class="p">[</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC78'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span><span class="s1">&#39;La fecha de expiración debe ser posterior a la fecha de publicación&#39;</span><span class="p">,</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">());</span></div><div class='line' id='LC79'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span><span class="s1">&#39;fechaValida&#39;</span><span class="p">,</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">getPropertyPath</span><span class="p">());</span></div><div class='line' id='LC80'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC81'><br/></div><div class='line' id='LC82'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">testValidarUmbral</span><span class="p">()</span></div><div class='line' id='LC83'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC84'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Oferta</span><span class="p">();</span></div><div class='line' id='LC85'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setNombre</span><span class="p">(</span><span class="s1">&#39;Oferta de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC86'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setDescripcion</span><span class="p">(</span><span class="s1">&#39;Descripción de prueba - Descripción de prueba - Descripción de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC87'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setFechaPublicacion</span><span class="p">(</span><span class="k">new</span> <span class="nx">\DateTime</span><span class="p">(</span><span class="s1">&#39;today&#39;</span><span class="p">));</span></div><div class='line' id='LC88'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setFechaExpiracion</span><span class="p">(</span><span class="k">new</span> <span class="nx">\DateTime</span><span class="p">(</span><span class="s1">&#39;tomorrow&#39;</span><span class="p">));</span></div><div class='line' id='LC89'><br/></div><div class='line' id='LC90'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setUmbral</span><span class="p">(</span><span class="mf">3.5</span><span class="p">);</span></div><div class='line' id='LC91'><br/></div><div class='line' id='LC92'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$listaErrores</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">validator</span><span class="o">-&gt;</span><span class="na">validate</span><span class="p">(</span><span class="nv">$oferta</span><span class="p">);</span></div><div class='line' id='LC93'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertGreaterThan</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="nv">$listaErrores</span><span class="o">-&gt;</span><span class="na">count</span><span class="p">(),</span> <span class="s1">&#39;El umbral debe ser un número entero&#39;</span><span class="p">);</span></div><div class='line' id='LC94'><br/></div><div class='line' id='LC95'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span> <span class="o">=</span> <span class="nv">$listaErrores</span><span class="p">[</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC96'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertRegExp</span><span class="p">(</span><span class="s2">&quot;/This value should be of type/&quot;</span><span class="p">,</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">());</span></div><div class='line' id='LC97'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span><span class="s1">&#39;umbral&#39;</span><span class="p">,</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">getPropertyPath</span><span class="p">());</span></div><div class='line' id='LC98'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC99'><br/></div><div class='line' id='LC100'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">testValidarPrecio</span><span class="p">()</span></div><div class='line' id='LC101'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC102'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Oferta</span><span class="p">();</span></div><div class='line' id='LC103'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setNombre</span><span class="p">(</span><span class="s1">&#39;Oferta de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC104'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setDescripcion</span><span class="p">(</span><span class="s1">&#39;Descripción de prueba - Descripción de prueba - Descripción de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC105'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setFechaPublicacion</span><span class="p">(</span><span class="k">new</span> <span class="nx">\DateTime</span><span class="p">(</span><span class="s1">&#39;today&#39;</span><span class="p">));</span></div><div class='line' id='LC106'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setFechaExpiracion</span><span class="p">(</span><span class="k">new</span> <span class="nx">\DateTime</span><span class="p">(</span><span class="s1">&#39;tomorrow&#39;</span><span class="p">));</span></div><div class='line' id='LC107'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setUmbral</span><span class="p">(</span><span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC108'><br/></div><div class='line' id='LC109'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setPrecio</span><span class="p">(</span><span class="o">-</span><span class="mi">10</span><span class="p">);</span></div><div class='line' id='LC110'><br/></div><div class='line' id='LC111'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$listaErrores</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">validator</span><span class="o">-&gt;</span><span class="na">validate</span><span class="p">(</span><span class="nv">$oferta</span><span class="p">);</span></div><div class='line' id='LC112'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertGreaterThan</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="nv">$listaErrores</span><span class="o">-&gt;</span><span class="na">count</span><span class="p">(),</span> <span class="s1">&#39;El precio no puede ser un número negativo&#39;</span><span class="p">);</span></div><div class='line' id='LC113'><br/></div><div class='line' id='LC114'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$error</span> <span class="o">=</span> <span class="nv">$listaErrores</span><span class="p">[</span><span class="mi">0</span><span class="p">];</span></div><div class='line' id='LC115'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertRegExp</span><span class="p">(</span><span class="s2">&quot;/This value should be .* or more/&quot;</span><span class="p">,</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">getMessageTemplate</span><span class="p">());</span></div><div class='line' id='LC116'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span><span class="s1">&#39;precio&#39;</span><span class="p">,</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">getPropertyPath</span><span class="p">());</span></div><div class='line' id='LC117'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC118'><br/></div><div class='line' id='LC119'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">testValidarCiudad</span><span class="p">()</span></div><div class='line' id='LC120'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC121'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Oferta</span><span class="p">();</span></div><div class='line' id='LC122'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setNombre</span><span class="p">(</span><span class="s1">&#39;Oferta de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC123'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setDescripcion</span><span class="p">(</span><span class="s1">&#39;Descripción de prueba - Descripción de prueba - Descripción de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC124'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setFechaPublicacion</span><span class="p">(</span><span class="k">new</span> <span class="nx">\DateTime</span><span class="p">(</span><span class="s1">&#39;today&#39;</span><span class="p">));</span></div><div class='line' id='LC125'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setFechaExpiracion</span><span class="p">(</span><span class="k">new</span> <span class="nx">\DateTime</span><span class="p">(</span><span class="s1">&#39;tomorrow&#39;</span><span class="p">));</span></div><div class='line' id='LC126'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setUmbral</span><span class="p">(</span><span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC127'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setPrecio</span><span class="p">(</span><span class="mf">10.5</span><span class="p">);</span></div><div class='line' id='LC128'><br/></div><div class='line' id='LC129'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setCiudad</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCiudad</span><span class="p">());</span></div><div class='line' id='LC130'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$slug_ciudad</span> <span class="o">=</span> <span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">getCiudad</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">getSlug</span><span class="p">();</span></div><div class='line' id='LC131'><br/></div><div class='line' id='LC132'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span><span class="s1">&#39;ciudad-de-prueba&#39;</span><span class="p">,</span> <span class="nv">$slug_ciudad</span><span class="p">,</span> <span class="s1">&#39;La ciudad se guarda correctamente en la oferta&#39;</span><span class="p">);</span></div><div class='line' id='LC133'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC134'><br/></div><div class='line' id='LC135'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">testValidarTienda</span><span class="p">()</span></div><div class='line' id='LC136'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC137'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Oferta</span><span class="p">();</span></div><div class='line' id='LC138'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setNombre</span><span class="p">(</span><span class="s1">&#39;Oferta de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC139'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setDescripcion</span><span class="p">(</span><span class="s1">&#39;Descripción de prueba - Descripción de prueba - Descripción de prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC140'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setFechaPublicacion</span><span class="p">(</span><span class="k">new</span> <span class="nx">\DateTime</span><span class="p">(</span><span class="s1">&#39;today&#39;</span><span class="p">));</span></div><div class='line' id='LC141'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setFechaExpiracion</span><span class="p">(</span><span class="k">new</span> <span class="nx">\DateTime</span><span class="p">(</span><span class="s1">&#39;tomorrow&#39;</span><span class="p">));</span></div><div class='line' id='LC142'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setUmbral</span><span class="p">(</span><span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC143'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setPrecio</span><span class="p">(</span><span class="mf">10.5</span><span class="p">);</span></div><div class='line' id='LC144'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ciudad</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCiudad</span><span class="p">();</span></div><div class='line' id='LC145'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setCiudad</span><span class="p">(</span><span class="nv">$ciudad</span><span class="p">);</span></div><div class='line' id='LC146'><br/></div><div class='line' id='LC147'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">setTienda</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getTienda</span><span class="p">(</span><span class="nv">$ciudad</span><span class="p">));</span></div><div class='line' id='LC148'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta_ciudad</span> <span class="o">=</span> <span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">getCiudad</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">getNombre</span><span class="p">();</span></div><div class='line' id='LC149'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oferta_tienda_ciudad</span> <span class="o">=</span> <span class="nv">$oferta</span><span class="o">-&gt;</span><span class="na">getTienda</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">getCiudad</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">getNombre</span><span class="p">();</span></div><div class='line' id='LC150'><br/></div><div class='line' id='LC151'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span><span class="nv">$oferta_ciudad</span><span class="p">,</span> <span class="nv">$oferta_tienda_ciudad</span><span class="p">,</span> <span class="s1">&#39;La tienda asociada a la oferta es de la misma ciudad en la que se vende la oferta&#39;</span><span class="p">);</span></div><div class='line' id='LC152'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC153'><br/></div><div class='line' id='LC154'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">getCiudad</span><span class="p">()</span></div><div class='line' id='LC155'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC156'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ciudad</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Ciudad</span><span class="p">();</span></div><div class='line' id='LC157'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ciudad</span><span class="o">-&gt;</span><span class="na">setNombre</span><span class="p">(</span><span class="s1">&#39;Ciudad de Prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC158'><br/></div><div class='line' id='LC159'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$ciudad</span><span class="p">;</span></div><div class='line' id='LC160'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC161'><br/></div><div class='line' id='LC162'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">getTienda</span><span class="p">(</span><span class="nv">$ciudad</span><span class="p">)</span></div><div class='line' id='LC163'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC164'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$tienda</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Tienda</span><span class="p">();</span></div><div class='line' id='LC165'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$tienda</span><span class="o">-&gt;</span><span class="na">setNombre</span><span class="p">(</span><span class="s1">&#39;Tienda de Prueba&#39;</span><span class="p">);</span></div><div class='line' id='LC166'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$tienda</span><span class="o">-&gt;</span><span class="na">setCiudad</span><span class="p">(</span><span class="nv">$ciudad</span><span class="p">);</span></div><div class='line' id='LC167'><br/></div><div class='line' id='LC168'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$tienda</span><span class="p">;</span></div><div class='line' id='LC169'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC170'><br/></div><div class='line' id='LC171'><span class="p">}</span></div></pre></div></td>
         </tr>
       </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.06220s from github-fe121-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-c044173f1e759e8299dbe414ec8ed23e4405bdc5.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-7926f54dc23125fa874ddabb1e7ac551952057c9.js" type="text/javascript"></script>
      
      
        <script async src="https://www.google-analytics.com/analytics.js"></script>
  </body>
</html>

